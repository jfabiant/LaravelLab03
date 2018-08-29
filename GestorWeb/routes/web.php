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

/* Controlador Frontend */
Route::get('/', 'FrontController@index');

/*Cine*/
Route::get('/cine', 'FrontController@cine');
Route::post('/procesar1', 'Cinecontroller@procesar1');

/*Gaseosa*/
Route::get('/gaseosa', 'FrontController@gaseosa');
Route::post('/procesar2', 'GaseosaController@procesar2');

/*Hotel*/
Route::get('/hotel', 'FrontController@hotel');



