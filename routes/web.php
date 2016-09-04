<?php

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@home']);


Route::group(['prefix' => 'db'], function($route){
   $route->get('insert', 'DbController@insert');
   $route->get('update', 'DbController@update');
   $route->get('delete', 'DbController@delete');
   $route->get('select', 'DbController@select');
});

Route::group(['namespace' => 'Orders', 'prefix' => 'slaves'], function($route){
    $route->get('list', ['uses' => 'OrderController@orderList', 'as' => 'slaves.list']);
    $route->get('order/{id}/show', ['uses' => 'OrderController@order', 'as' => 'slaves.order']);
});