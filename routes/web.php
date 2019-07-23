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
## OUTROS
Route::get('/home', 'HomeController@index');
Route::get('/sobre', 'SobreController@index'); 

## CADASTRO IDOSO
Route::get('/cadastroIdoso', 'CadastroIdosoController@index');
Route::get('/cadastroIdoso/store ', 'CadastroIdosoController@store');
Route::get('/cadastroIdosoRelatorio', 'CadastroIdosoController@relatorio');

## CADASTRO PUBLICAÇÃO
Route::get('/noticias', 'NoticiasController@index');
Route::get('/publicacao', 'PublicacaoController@index');
Route::post('/publicacao', 'PublicacaoController@index');
Route::get('/publicacao/store', 'PublicacaoController@store');
Route::post('/publicacao/store', 'PublicacaoController@store');

## CADASTRO VOLUNTÁRIO 
Route::get('/cadastroVoluntarioRelatorio', 'CadastroVoluntarioController@relatorio');
Route::get('/cadastroVoluntario/store ', 'CadastroVoluntarioController@store');
Route::get('/cadastroVoluntario', 'CadastroVoluntarioController@index');

## LOGIN
Route::get('/login', 'LoginController@index');
Route::get('/login/validar', 'LoginController@validar');










