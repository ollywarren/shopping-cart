<?php

namespace Ollywarren\ShoppingCart\Facades;
use Illuminate\Support\Facades\Facade;

class ShoppingCart extends Facade {

    /**
     * getFacadeAccessor
     */
    protected static function getFacadeAccessor()
    {
        return 'ShoppingCart';
    }

}