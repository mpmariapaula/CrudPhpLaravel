<?php

use Illuminate\Support\Facades\Route;

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

Route::resource('books', BookController::class);

//Usando o resource não é necessário declarar cada uma das rotas ele gera automatico.

//Route::get('/books', 'BookController@index');
//Route::get('/books/{books}','BookController@show');
