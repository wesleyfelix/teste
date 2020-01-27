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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cliente/list', 'ClienteController@list')->name('cliente.list');
Route::get('/cliente/novo', 'ClienteController@create')->name('cliente.new');
Route::post('/cliente/criar', 'ClienteController@create')->name('cliente.criar');
Route::get('/cliente/edit/{id}', 'ClienteController@edit')->name('cliente.edit');
Route::post('/cliente/salvar', 'ClienteController@save')->name('cliente.salvar');
Route::get('/cliente/apagar/{id}', 'ClienteController@delete')->name('cliente.delete');


