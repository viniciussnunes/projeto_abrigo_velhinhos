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

Route::get('/home', 'HomeController@index');

Route::get('/historia', 'HistoriaController@historia');

Route::get('/cadastros', 'CadastrosController@cadastros');

Route::get('/noticias', 'NoticiasController@noticias');

Route::get('/doacoes', 'DoacoesController@doacoes');