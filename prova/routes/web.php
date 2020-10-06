<?php

use Illuminate\Support\Facades\Route;


//tabeliao
Route::get('/tabelioes', 'TabeliaoController@index')
->name('tabelioes');
Route::get('/tabelioes/adicionar', 'TabeliaoController@adicionar')
->name('tabelioes.adicionar');
Route::post('/tabelioes/salvar', 'TabeliaoController@salvar')
->name('tabelioes.salvar');
Route::get('/tabelioes/editar/{id}', 'TabeliaoController@editar')
->name('tabelioes.editar');
Route::put('/tabelioes/atualizar/{id}', 'TabeliaoController@atualizar')
->name('tabelioes.atualizar');
Route::delete('/tabelioes/deletar/{id}', 'TabeliaoController@deletar')
->name('tabelioes.deletar');

//certidao
Route::get('/certidoes', 'CertidaoController@index')
->name('certidoes');
Route::get('/certidoes/adicionar', 'CertidaoController@adicionar')
->name('certidoes.adicionar');
Route::post('/certidoes/salvar', 'CertidaoController@salvar')
->name('certidoes.salvar');
Route::get('/certidoes/editar/{id}', 'CertidaoController@editar')
->name('certidoes.editar');
Route::put('/certidoes/atualizar/{id}', 'CertidaoController@atualizar')
->name('certidoes.atualizar');
Route::delete('/certidoes/deletar/{id}', 'CertidaoController@deletar')
->name('certidoes.deletar');

//contratos
Route::get('/contratos', 'ContratoController@index')
->name('contratos');
Route::get('/contratos/adicionar', 'ContratoController@adicionar')
->name('contratos.adicionar');
Route::post('/contratos/salvar', 'ContratoController@salvar')
->name('contratos.salvar');
Route::get('/contratos/editar/{id}', 'ContratoController@editar')
->name('contratos.editar');
Route::put('/contratos/atualizar/{id}', 'ContratoController@atualizar')
->name('contratos.atualizar');
Route::delete('/contratos/deletar/{id}', 'ContratoController@deletar')
->name('contratos.deletar');