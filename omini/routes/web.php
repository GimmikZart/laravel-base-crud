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

Route::get('/', "OminiController@index")->name('home');
Route::get('/show/{id}', "OminiController@show")->name('show');
Route::get('/edit/{id}', "OminiController@edit")->name('edit');
Route::post('/update/{id}', "OminiController@update")->name('update');
Route::get('/destroy/{id}', "OminiController@destroy")->name('destroy');
Route::get('/create', "OminiController@create")->name('create');
Route::post('/store', "OminiController@store")->name('store');
