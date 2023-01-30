<?php

namespace LaravelMercadoPago\Traits;

use Exception;
use MercadoPago\Entity;
use MercadoPago\RecuperableError;
use LaravelMercadoPago\Generic\SearchResultsArray;

trait EntityTrait
{
  use ConfigTrait, ToJsonTrait;


  public function process_error_body($message)
  {
    $recuperable_error = new RecuperableError(
      $message['message'],
      $message['error'] ?? null,
      $message['status']
    );

    if (isset($message['cause']))
      $recuperable_error->proccess_causes($message['cause']);

    $this->error = $recuperable_error;
  }

  /**
     * Fill entity from data with nested object creation
     *
     * @param $entity
     * @param $data
     */
    protected function _fillFromArray($entity, $data)
    { 
      
      if ($data) {
        
        foreach ($data as $key => $value) {
            if (!is_null($value)){
                if (is_array($value)) {
                    $className = 'OscarRey\\MercadoPago\\Entity\\' . $this->_camelize($key);
                    if (class_exists($className, true)) {
                        $entity->_setValue($key, new $className, false);
                        $entity->_fillFromArray($this->{$key}, $value);
                    } else {
                        $entity->_setValue($key, json_decode(json_encode($value)), false);
                    }
                    continue;
                }
                $entity->_setValue($key, $value, false);
            }
        }
      }
    }



  /**
   * @return mixed
   */
  public static function search($filters = [], $options = [])
  {
    $class = get_called_class();
    $searchResult = new SearchResultsArray();
    $searchResult->setEntityTypes($class);
    $entityToQuery = new $class();

    self::$_manager->setEntityUrl($entityToQuery, 'search');
    self::$_manager->cleanQueryParams($entityToQuery);
    self::$_manager->setQueryParams($entityToQuery, $filters);

    $response = self::$_manager->execute($entityToQuery, 'get');
    if ($response['code'] == "200" || $response['code'] == "201") {
      $searchResult->fetch($filters, $response['body']);
    } elseif (intval($response['code']) >= 400 && intval($response['code']) < 500) {
      $searchResult->process_error_body($response['body']);
      throw new Exception($response['body']['message']);
    } else {
      throw new Exception("Internal API Error");
    }
    return $searchResult;
  }

  /**
   * Adapta la repuesta de recursos unicos http
   * @param array $response
   */
  public function findByIdhandlerResponse($response)
  {
    $class = get_called_class();
    $entity = new $class();

    if ($response['code'] == "200" || $response['code'] == "201") {
      $entity->_fillFromArray($entity, $response['body']);
      $entity->_last = clone $entity;
      return $entity;
    } elseif (intval($response['code']) == 404) {
      return null;
    } elseif (intval($response['code']) >= 400 && intval($response['code']) < 500) {
       return $response;
    } else {
      throw new Exception("Internal API Error");
    }
  }


    /**
   * Adapta la repuesta de recursos unicos http
   * @param array $response
   */
  public function findhandlerResponse($response, $filters = [])
  {
    $class = get_called_class();
    $searchResult = new SearchResultsArray();
    $searchResult->setEntityTypes($class);

    if ($response['code'] == "200" || $response['code'] == "201") {
      $searchResult->fetch($filters, $response['body']);
    } elseif (intval($response['code']) >= 400 && intval($response['code']) < 500) {
      $searchResult->process_error_body($response['body']);
      throw new Exception($response['body']['message']);
    } else {
      throw new Exception("Internal API Error");
    }
    return $searchResult;
  }

  /**
   * find by id
   * @param string $id
   * @return Entity|null
   */
  public function findById($id)
  {
    $response = static::find_by_id($id);

    return $response;
  }

  /**
   * Consultar con filtro
   * @param array $filter filtros para los recursos
   * @return SearchResultsArray
   */
  public function find($filter = [])
  {
    $response = static::search($filter);

    return $response;
  }


  /**
   * Cancelar
   * @param string $id
   * @return Entity|null
   */
  public function cancelled($id)
  {
    $response = $this->findById($id);

    if ($response) {

      $response->status = 'cancelled';

      $response->update();
    }

    return $response;
  }


  /**
   * Eliminar recurso.
   * @param int $id
   * @return Entity|null
   */
  public function deleteV2($id)
  {
    $response = $this->findById($id);

    if ($response) {

      $response->delete();
    }

    return $response;
  }


  


  /**
   * body para las peticiones del sdk mecado pago
   * @param array $data
   * @return string
   */
  protected function bodyHttp($data)
  {
    return [
      'json_data' => $this->json($data),
    ];
  }
}
