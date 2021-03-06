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

Auth::routes();

Route::get('/','ComicsController@index'); 

Route::get('/about','PagesController@about');  

Route::get('/comicsList','ComicsController@comicsList');

Route::get('/contact','PagesController@contact');

Route::get('/titles/{name}','PagesController@titles');

Route::get('/chapter/{name}/{no}','PagesController@chapter');

Route::get('/home', 'HomeController@index')->name('home');



/**
 * Post request!
 */

Route::post('/titles/{name}','CommentsController@store');

Route::post('/comment','CommentsController@addComment');



