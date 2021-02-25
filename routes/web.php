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

//App Controller
Route::get('/', 'AppController@index')->name('home');
Route::get('/videogames', 'AppController@products')->name('videogames');
Route::get('/contacts', 'AppController@contacts')->name('contacts');

//Main Controller
Route::resource('products', 'ProductController');

