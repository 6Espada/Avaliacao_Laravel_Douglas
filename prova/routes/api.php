<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//tabelioes
Route::get('/tabelioes/listar', 'api\TabeliaoController@listar');
Route::post('/tabelioes/salvar', 'api\TabeliaoController@salvar');
Route::get('/tabelioes/buscar/{id}', 'api\TabeliaoController@buscar');
Route::put('/tabelioes/atualizar/{id}', 'api\TabeliaoController@atualizar');
Route::delete('/tabelioes/deletar/{id}', 'api\TabeliaoController@deletar');

//certidoes
Route::get('/certidoes/listar', 'api\CertidaoController@listar');
Route::post('/certidoes/salvar', 'api\CertidaoControllerr@salvar');
Route::get('/certidoes/buscar/{id}', 'api\CertidaoController@buscar');
Route::put('/certidoes/atualizar/{id}', 'api\CertidaoController@atualizar');
Route::delete('/certidoes/deletar/{id}', 'api\CertidaoController@deletar');

//contratos
Route::get('/contratos/listar', 'api\ContratoController@listar');
Route::post('/contratos/salvar', 'api\ContratoController@salvar');
Route::get('/contratos/buscar/{id}', 'api\ContratoController@buscar');
Route::put('/contratos/atualizar/{id}', 'api\ContratoController@atualizar');
Route::delete('/contratos/deletar/{id}', 'api\ContratoController@deletar');
