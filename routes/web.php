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


Route::get('/clientes', 'ClientesController@index')->name('clientes');
Route::get('/clientes/add', 'ClientesController@add')->name('clientes-add');
Route::get('/clientes/{id}', 'ClientesController@add')->where('id', '[0-9]+')->name('clientes-edit');
Route::post('/clientes', 'ClientesController@save')->name('clientes-save');

//Route::get('/clientes', function () {
//
//
//    $cliente = new \App\Clientes();
//
//    $cliente->name = 'Ruan Aragao Rocha';
//    $cliente->cpf = '039.205.071-42';
//    $cliente->telefone = '(61) 99183-2955';
//    $cliente->email = 'aragao.ruan@gmail.com';
//
//    $cliente->save();
//
//    return ' FIM CLIENTES ';
//});


