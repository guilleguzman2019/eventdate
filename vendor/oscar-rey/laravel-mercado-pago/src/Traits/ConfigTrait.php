<?php
namespace LaravelMercadoPago\Traits;


trait ConfigTrait  
{
 
    /**
     * Retorna token de la configuración
     */
    public function getAccesToken() {

        return config('mercado-pago.access_token');
    }

    /**
     * Retorna callback_url de la configuración
     */
    public function getCallbackUrl() {

        return config('mercado-pago.callback_url');
    }

     /**
     * Retorna app_id de la configuración
     */
    public function getAppId() {

        return config('mercado-pago.app_id');
    }

      /**
     * Retorna redirect_uri de la configuración
     */
    public function getRedirectUri() {

        return config('mercado-pago.redirect_uri');
    }

    /**
     * Retorna el user Id del usuario
     */
    public function getUserId() {

        return config('mercado-pago.user_id');
    }
}