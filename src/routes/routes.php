<?php
Route::get('cart/current', 'Ollywarren\ShoppingCart\Http\Controllers\ShoppingCartController@getCurrentCart');
Route::post('cart/update', 'Ollywarren\ShoppingCart\Http\Controllers\ShoppingCartController@updateCurrentCart');