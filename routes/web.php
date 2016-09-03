<?php

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@home']);


Route::group(['prefix' => 'db'], function($route){
   $route->get('insert', 'DbController@insert');
   $route->get('update', 'DbController@update');
   $route->get('delete', 'DbController@delete');
   $route->get('select', 'DbController@select');
});