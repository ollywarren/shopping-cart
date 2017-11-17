<?php

namespace Ollywarren\ShoppingCart;

use Illuminate\Database\Eloquent\Model;

/**
 * Model for the Shopping Cart Service.
 * 
 * @author Olly Warren <olly@ollywarren.com>
 * @package Ollywarren\ShoppingCart
 * @version 1.0
 * @license MIT
 */
class ShoppingCartService extends Model {

    protected $table = 'shopping_carts';

    protected $fillable = [];

    protected $hidden = [];


    public function __construct()
    {

    } 
}