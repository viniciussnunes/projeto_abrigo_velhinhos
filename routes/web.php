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
Route::get('/home', 'HomeController@index');

## CADASTRO IDOSO
Route::get('/cadastroIdoso', 'CadastroIdosoController@index');
Route::get('/cadastroIdoso/store ', 'CadastroIdosoController@store');
Route::get('/cadastroIdosoRelatorio', 'CadastroIdosoController@relatorio');

## CADASTRO PUBLICAÇÃO
Route::get('/noticias', 'NoticiasController@index');
Route::get('/publicacaoAdm', 'PublicacaoAdmController@index');
Route::post('/publicacaoAdm', 'PublicacaoAdmController@index');
Route::get('/publicacaoAdm/store', 'PublicacaoAdmController@store');
Route::post('/publicacaoAdm/store', 'PublicacaoAdmController@store');

## CADASTRO VOLUNTÁRIO 
Route::get('/cadastroVoluntarioRelatorio', 'CadastroVoluntarioController@relatorio');
Route::get('/cadastroVoluntario/store ', 'CadastroVoluntarioController@store');
Route::get('/cadastroVoluntario', 'CadastroVoluntarioController@index');

Route::get('/sobre', 'SobreController@index'); 


Route::get('/loginAdm', 'LoginAdmController@index');







