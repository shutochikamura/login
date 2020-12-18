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

$loginController = '\App\Http\Controllers\loginController';


Route::get('/', function () {
    return view('welcome');
});
Route::get('login', "$loginController@index");

Route::get('register', "$loginController@register");
Route::post('register', "$loginController@post");
