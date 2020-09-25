<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function() { return view('home'); }) -> name('index');

Route::get('/stanze', 'StanzaController@index') -> name('stanze-index');
Route::get('/stanza/{id}', 'StanzaController@show') -> name('stanza-show');
Route::get('/create/stanza', 'StanzaController@create') -> name('stanza-create');
Route::post('/create/stanza', 'StanzaController@store') -> name('stanza-store');
