<?php

namespace Ollywarren\ShoppingCart\Http\Controllers;

use Illuminate\Http\Request;
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
            return response($shoppingCart, 200);
        } else {
            return response("Not Found", 404);
        }
    }

    public function saveCurrentCart()
    {
        // Get the Current Cart Session Info
        // Create a New Model from the Data
        // Save to the DB
        // Return Success Message or Failure.

    }

    public function getSavedCart($id)
    {
        // Get the Given Cart by ID
        // Return the Response
    }

    public function updateCurrentCart(Request $request)
    {
        $payload = ['test', 'again', 'here'];

        if ( session()->has('shopping_cart') ) {
            $shoppingCart = session()->push('shopping_cart', $payload);
            return response($shoppingCart, 200);
        } else {
            $shoppingCart = session()->put('shopping_cart', $payload);
            return response($shoppingCart, 201);
        }

    }
}
