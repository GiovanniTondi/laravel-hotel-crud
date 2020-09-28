<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function() { return view('home'); }) -> name('index');

Route::get('/stanze', 'StanzaController@index') -> name('stanze-index');
Route::get('/stanza/{id}', 'StanzaController@show') -> name('stanza-show');
Route::get('/create/stanza', 'StanzaController@create') -> name('stanza-create');
Route::post('/create/stanza', 'StanzaController@store') -> name('stanza-store');

Route::get('/pagamenti', 'PagamentoController@index') -> name('pagamenti.index');
Route::get('/pagamenti/edit/{id}', 'PagamentoController@edit') -> name('pagamento.edit');
Route::post('/pagamento/update/{id}', 'PagamentoController@update') -> name('pagamento-update');
Route::get('/pagamenti/delete/{id}', 'PagamentoController@delete') -> name('pagamento-delete');
