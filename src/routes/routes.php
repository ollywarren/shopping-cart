<?php
// todo: update inot a group and implement the middleware options.
Route::get('cart/current', 'Ollywarren\ShoppingCart\Http\Controllers\ShoppingCartController@getCurrentCart');
Route::post('cart/update', 'Ollywarren\ShoppingCart\Http\Controllers\ShoppingCartController@updateCurrentCart');