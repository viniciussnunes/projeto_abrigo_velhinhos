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
## HOME
Route::get('/home', 'HomerController@index');

## CADASTRO IDOSO
Route::get('/cadastroIdoso', 'CadastroIdosoController@index');
Route::get('/cadastroIdoso/store ', 'CadastroIdosoController@store');

## CADASTRO PUBLICAÇÃO
Route::get('/noticias', 'NoticiasController@index');
Route::get('/publicacaoAdm', 'PublicacaoAdmController@index');
Route::get('/publicacaoAdm/store', 'PublicacaoAdmController@store');



Route::get('/sobre', 'SobreController@index'); 

Route::get('/cadastroVoluntario', 'CadastroVoluntarioController@index');

Route::get('/loginAdm', 'LoginAdmController@index');

Route::get('/cadastroVoluntarioAdm', 'CadastroVoluntarioAdmController@index');

Route::get('/cadastroIdosoAdm', 'CadastroIdosoAdmController@index');

Route::get('/publicacaoAdm', 'PublicacaoAdmController@index');
