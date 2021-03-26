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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {

		Route::get('', ['as' => 'products.index', 'uses' => 'App\Http\Controllers\ProductController@index']);
		//
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
	Route::get('messege', ['as' => 'messegens.index', 'uses' => 'App\Http\Controllers\MessegerController@index']);
	Route::get('products', ['as' => 'products.index', 'uses' => 'App\Http\Controllers\ProductController@index']);
	Route::post('products', ['as' => 'products.search', 'uses' => 'App\Http\Controllers\ProductController@search']);
	Route::post('products/create', ['as' => 'products.create', 'uses' => 'App\Http\Controllers\ProductController@create']);
	Route::get('products/cadastro', ['as' => 'products.cadastro', 'uses' => 'App\Http\Controllers\ProductController@cadastro']);
});
