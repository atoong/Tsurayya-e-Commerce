<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'auth', 'namespace' => 'API\Auth'], function () {
    Route::post('signin', 'SignInController');
    Route::post('signout', 'SignOutController');

    Route::get('me', 'MeController');
});

Route::get('products', 'API\ProductController@all');
Route::post('checkout', 'API\CheckoutController@checkout');
Route::get('transactions/{id}', 'API\TransactionController@get');

Route::post('register', 'API\RegisterController@register');
Route::post('userpayment', 'API\UserpaymentController@paymentuser');