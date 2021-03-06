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

Route::view('/', 'index');
Route::view('/dashboard', 'index');
Route::view('/dashboard/merchandise', 'index');

Route::view('/products/detail', 'index');
Route::view('/payments/{id}/{username}', 'index')->where(['id' => '[0-9]+', 'username' => '[a-zA-Z]+']);

Route::post("/auth/login", "Auth\LoginController@login");
Route::post("/auth/register", "Auth\RegisterController@register");
