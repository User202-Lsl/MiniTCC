<?php

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
    return view('home');
});

Route::get('/layoutsite', function () {
    return view('layouts.site');
});

Route::get('/home', function () {
    return view('usuario.home');
});
Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/inicio', function () {
    return view('inicio');
});