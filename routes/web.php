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

// Routes to Page Controller
Route::get('/', 'PageController@home')->name('home');
Route::get('about', 'PageController@about')->name('about');
Route::get('contact', 'PageController@contact')->name('contact');
Route::get('articles_api', 'PageController@articles_api')->name('articles_api');
Route::get('categories_api', 'PageController@categories_api')->name('categories_api');
Route::get('tags_api', 'PageController@tags_api')->name('tags_api');

//  Route Resource Controller
Route::resource('articles', 'ArticleController');
Route::resource('categories', 'CategoryController');
Route::resource('tags', 'TagController');