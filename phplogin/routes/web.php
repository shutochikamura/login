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
});
Route::get('login', '\App\Http\Controllers\loginController@index');
Route::post('login', '\App\Http\Controllers\loginController@post');
Route::get('register', '\App\Http\Controllers\loginController@register');
Route::post('register', '\App\Http\Controllers\loginController@register_post');

Route::get('home', 'App\Http\Controllers\homeController@home');
Route::post('home', 'App\Http\Controllers\homeController@home');
