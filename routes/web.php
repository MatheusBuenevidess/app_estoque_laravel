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

// Pesquisar
Route::get('/produtos/pesquisar', 'ProdutoController@pesquisar');

Route::post('/produtos/pesquisar', 'ProdutoController@pesquisar');


// Inserir
Route::get('/produtos/inserir', 'ProdutoController@mostrar_inserir');

Route::post('/produtos/inserir', 'ProdutoController@inserir');


//Alterar
Route::get('/produtos/alterar/{id}', 'ProdutoController@mostrar_alterar');

Route::post('/produtos/alterar', 'ProdutoController@alterar');

//Excluir
Route::get('/produtos/excluir/{id}', 'ProdutoController@excluir');
