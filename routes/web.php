<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
<<<<<<< HEAD
});
Route::get('/index', function () {
    return view('pages.index');
});



Route::resource('register','RegisterController');
=======
   
});
/*Route::get('/users/{id}',function($id){
    return 'this is'.$id; 
});*/

Route::get('/index','pagesController@index') ;
Route::get('/services','pagesController@services') ;
Route::get('/about','pagesController@about') ;
Route::get('/register','pagesController@register') ;


//Route::resource('posts','PostsController');
Route::resource('registers','RegistersController');

         

>>>>>>> d92969bd9d6ba83102070b780ae2ed479a6e441e
