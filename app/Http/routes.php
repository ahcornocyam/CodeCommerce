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

/*
 * Rotas para Home
 */
Route::get('/', ['as'=>'home',function () {
    return view('welcome');

}]);

/*
 * Rotas para Auth
 */
Route::group(['prefix'=> 'auth'],function(){

    get('/login',function(){
        return view('auth.login');
    });

    post('/login',function(){
        return 'tudo ok!';
    });

    get('/register',function(){
        return view('auth.register');
    });

    post('/register',function(){
        return 'tudo ok';
    });
});

/*
 * Rotas para Categories
 **/
Route::group(['prefix'=>'categories'],function(){

    get('/',['as'=>'categories', 'uses' =>'CategoriesController@index']);
    get('/create',['as'=>'categories.create', 'uses'=> 'CategoriesController@create']);
    post('/',['as'=>'categories.store', 'uses' =>'CategoriesController@store']);
    get('/{id?}/destroy',['as'=>'categories.destroy', 'uses' =>'CategoriesController@destroy']);
    get('/{id?}/edit',['as'=>'categories.edit', 'uses' =>'CategoriesController@edit']);
    put('/{id?}',['as'=>'categories.update', 'uses' =>'CategoriesController@update']);

});


/*
 * Rotas para Products
 **/
Route::group(['prefix'=>'products'],function(){

    get('/',['as'=>'products', 'uses' =>'ProductsController@index']);
    get('/create',['as'=>'products.create', 'uses'=> 'ProductsController@create']);
    post('/',['as'=>'products.store', 'uses' =>'ProductsController@store']);
    get('/{id?}/destroy',['as'=>'products.destroy', 'uses' =>'ProductsController@destroy']);
    get('/{id?}/edit',['as'=>'products.edit', 'uses' =>'ProductsController@edit']);
    put('/{id?}',['as'=>'products.update', 'uses' =>'ProductsController@update']);

});