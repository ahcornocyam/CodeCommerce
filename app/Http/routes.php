<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');

});

get('/exemplo',function(){
    return 'olá esse é um exemplo';
});

Route::match(['get','post'],'/exemplo2',function(){
    return 'Exemplo de rota match';
});

Route::get('/admin/categories',['as'=>'categories','uses'=>'AdminCategoriesController@index']);
Route::get('/admin/products',['as'=>'products','uses'=>'AdminProductsController@index']);


