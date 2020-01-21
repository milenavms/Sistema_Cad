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

Route::view('/', 'index');

Route::resource('/contatos', 'ContatosController')->except(['destroy']); 

Route::get('/contatos/{contato}/delete', 'ContatosController@destroy')->name('contatos.destroy');


