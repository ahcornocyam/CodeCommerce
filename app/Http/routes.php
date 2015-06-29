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

Route::match(['get','post'],'/exemplo2',function(){
    return 'Exemplo de rota match';
});




//rota usando parametros
Route::get('/user/{id?}',function($id = null){
    $resp = null;
    ($id)? $resp = "Oi seu id é $id": $resp = 'não possui id';
    return $resp;
});

Route::group(['prefix'=>'admin'],function(){


    //rotas de categorias
    Route::group(['prefix'=>'categories','as'=>'categories'],function(){
        Route::get('/','AdminCategoriesController@index');
        Route::get('/{id?}',function($id = null){
            $category = new \CodeCommerce\Category();
            $c = $category->findOrNew($id);
            return $c->name;
        });
    });


    //rotas de produto
    Route::group(['prefix'=>'products', 'as'=> 'products'],function(){
        Route::get('/','AdminProductsController@index');
        Route::get('/{id?}',function($id = null){
            $product = new \CodeCommerce\Product();
            $p = $product->findOrNew($id);
            return $p->name;
        });

    });

});
