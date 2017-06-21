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

Route::get('/layoutapp', function () {
    return view('layout.app');
});

Route::get('/inicio', function () {
    return view('inicio');
});


Auth::routes();

Route::get('/home', 'HomeController@index');

route::resource('/movie', 'MovieController');
    Route::get('/movie/{movie}/display', 'MovieController@display');
    Route::get('/movie/{movie}/nota1', 'MovieController@nota1')->name('movie.nota1');
    Route::get('/movie/{movie}/nota2', 'MovieController@nota2')->name('movie.nota2');
    Route::get('/movie/{movie}/nota3', 'MovieController@nota3')->name('movie.nota3');
    Route::get('/movie/{movie}/nota4', 'MovieController@nota4')->name('movie.nota4');
    Route::get('/movie/{movie}/nota5', 'MovieController@nota5')->name('movie.nota5');
route::resource('/playlist', 'PlaylistController');
    Route::get('/playlist/{playlist}/display', 'PlaylistController@display');
    Route::get('/playlist/add', 'PlaylistController@add')->name('playlist.add');
route::resource('/genre', 'GenreController');
route::resource('/contact', 'ContactController');
    Route::get('/contact/{contact}/display', 'ContactController@display');