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

Route::get('/sobre', 'SobreController@index'); 

Route::get('/noticias', 'NoticiasController@index');

Route::get('/cadastroIdoso', 'CadastroIdosoController@index');

Route::get('/cadastroVoluntario', 'CadastroVoluntarioController@index');

Route::get('/loginAdm', 'LoginAdmController@index');

Route::post('/cadastrarIdoso', 'CadastroIdosoController@cadastrar');

Route::get('/cadastroVoluntarioAdm', 'CadastroVoluntarioAdmController@index');

Route::get('/cadastroIdosoAdm', 'CadastroIdosoAdmController@index');

Route::get('/publicacaoAdm', 'PublicacaoAdmController@index');