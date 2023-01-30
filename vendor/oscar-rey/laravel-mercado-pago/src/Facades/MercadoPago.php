<?php
namespace LaravelMercadoPago\Facades;

use Illuminate\Support\Facades\Facade;

class MercadoPago extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'mercado-pago';
    }
}