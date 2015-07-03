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



//pattern para quando for um id, sempre aceitar numeros
Route::pattern('id','[1-9]+');

Route::get('/', function () {
    return view('welcome');

});


Route::group(['prefix'=>'categories'],function(){
    get('/',['as'=>'categories', 'uses' =>'CategoriesController@index']);
    get('/create',['as'=>'categories.create', 'uses'=> 'CategoriesController@create']);
    post('/',['as'=>'categories.store', 'uses' =>'CategoriesController@store']);
    get('/{id?}/destroy',['as'=>'categories.destroy', 'uses' =>'CategoriesController@destroy']);
    get('/{id?}/edit',['as'=>'categories.edit', 'uses' =>'CategoriesController@edit']);
    put('/{id?}',['as'=>'categories.update', 'uses' =>'CategoriesController@update']);

});