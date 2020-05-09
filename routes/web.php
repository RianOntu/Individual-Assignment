<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


use App\User;
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

});
Route::get('/index', function () {
    return view('pages.index');
});






   

/*Route::get('/users/{id}',function($id){
    return 'this is'.$id; 
});*/

Route::get('/index','PagesController@index') ;
Route::get('/services','PagesController@services') ;
Route::get('/about','PagesController@about') ;
//Route::get('/teacher','PagesController@teacher') ;
Route::get('/show','AdminController@index') ;
Route::get('/createnotice','CreateNoticeController@create') ;
Route::get('/notices','CreateNoticeController@index') ;
//Route::get('/home','HomeController@index') ;
Route::resource('notice','CreateNoticeController') ;
Route::resource('home','HomeController') ;
Route::resource('admin','AdminController') ;
Route::resource('user','UserController') ;
Route::resource('teacher','TeacherController') ;
//Route::resource('register','RegisterController@create') ;

//Route::resource('posts','PostsController');
Route::get('/search', 'LoginController@search');
Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@verify');
//Route::get('/logout', 'LogoutController@index');
         
//Route::get('/home','HomeController@index') ;

Auth::routes();
//Route::group(['middleware'=>['sess']], function(){

//	Route::get('/home', 'HomeController@index')->name('home.index');
Route::get('/student', 'StudentController@index');
Route::get('/teacher', 'TeacherController@index');

//});
Route::any('/search1','HomeController@search');


