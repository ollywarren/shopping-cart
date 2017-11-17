<?php

namespace Ollywarren\ShoppingCart\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Ollywarren\ShoppingCart\Facades\ShoppingCart;
use Illuminate\Routing\Controller as BaseController;

/**
 * Front Controller for the Shopping Cart Functions
 * Uses the session to manage the cart and the Database to persist
 * 
 * @author Olly Warren <olly@ollywarren.com>
 * @package Ollywarren\ShoppingCart
 * @version 1.0
 * @license MIT
 */
class ShoppingCartController extends BaseController
{
    public function getCurrentCart()
    {
        if ( session()->has('shopping_cart') ) {
            $shoppingCart = session()->get('shopping_cart');
            return $shoppingCart;
        }
    }

    public function saveCurrentCart()
    {

    }

    public function updateCurrentCart()
    {
    }
}
