<?php

namespace Ollywarren\ShoppingCart;

use Illuminate\Database\Eloquent\Model;

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
}