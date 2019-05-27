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
    return view('welcome');
});
/*PUBLICO*/
/*
Route::get('/blog', function () {
    return view('layouts.blog');
});
*/
Route::get('/blog', 'BlogController@index')->name('blog');
Route::get('/blog/{id}/{title}', 'BlogController@individual')->name('blogi');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/nuevoBocado', 'BocadoController@new')->name('bocado');
Route::get('/edit/{id}', 'BocadoController@edit')->name('bocadoEdit');

// POST save data
Route::post('/nuevoBocado', 'BocadoController@add')->name('bocado');
Route::post('/edit', 'BocadoController@edition')->name('bocadoEdit');
