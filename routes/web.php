<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/produtos/novo','App\Http\Controllers\ProdutosController@create');
Route::post('/produtos/novo','App\Http\Controllers\ProdutosController@store')->name("registra_produto");
Route::get('/produtos/ver/{id}','App\Http\Controllers\ProdutosController@show');
Route::get('/produtos/editar/{id}','App\Http\Controllers\ProdutosController@edit');
Route::post('/produtos/editar/{id}','App\Http\Controllers\ProdutosController@update')->name("alterar_produto");
Route::get('/produtos/excluir/{id}','App\Http\Controllers\ProdutosController@delete');
Route::post('/produtos/excluir/{id}','App\Http\Controllers\ProdutosController@destroy')->name("excluir_produto");


// Plantas
Route::get('/plantas/novo','App\Http\Controllers\plantasController@create');
Route::post('/plantas/novo','App\Http\Controllers\plantasController@store')->name("registra_plantas");
Route::get('/plantas/ver/{id}','App\Http\Controllers\plantasController@show');
Route::get('/plantas/editar/{id}','App\Http\Controllers\plantasController@edit');
Route::post('/plantas/editar/{id}','App\Http\Controllers\plantasController@update')->name("alterar_plantas");
Route::get('/plantas/excluir/{id}','App\Http\Controllers\plantasController@delete');
Route::post('/plantas/excluir/{id}','App\Http\Controllers\plantasController@destroy')->name("excluir_plantas");