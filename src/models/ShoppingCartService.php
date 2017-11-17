<?php

namespace Ollywarren\ShoppingCart;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class ShoppingCartService extends Model {

    protected $table = 'shopping_carts';

    protected $fillable = [];

    protected $hidden = [];


    public function __construct()
    {

    }

    public function test()
    {
        return "AWESOME THE PACKAGE BINDING WORKS WITH THE FACADE";
    }

    public function updateCart( $payload )
    {

    }

    public function getCart( $playload )
    {
        
    } 
}