<?php

$router->group([
    'prefix' => 'api/v1',
    // 'namespace' => 'Api\V1'
], function () use ($router) {
    // Auth
    $router->post('auth/register', 'Auth\RegisterController@register');
    $router->post('auth/login', 'Auth\AuthController@login');
    $router->get('profile', 'Auth\ProfileController@show');
    $router->put('change-password', 'Auth\ChangePasswordController@update');

    // Category
    $router->get('categories', 'CategoryController@index');
    $router->get('categories/{category}', 'CategoryController@show');
    $router->post('categories', 'CategoryController@store');
    $router->put('categories/{category}', 'CategoryController@update');
    $router->delete('categories/{category}', 'CategoryController@destroy');

    // User Transaction
    $router->get('transactions', 'Transaction\TransactionController@index');
    $router->get('transactions/{transaction}', 'Transaction\TransactionController@show');
    $router->post('transactions', 'Transaction\TransactionController@store');
    $router->put('transactions/{transaction}', 'Transaction\TransactionController@update');
    $router->delete('transactions/{transaction}', 'Transaction\TransactionController@destroy');

    // User TotalTransaction
    $router->get('total-transactions', 'Transaction\TotalTransactionController@index');
});
