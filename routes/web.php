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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/index', 'ProdukController@index');


Route::get('/success', function () {
    return view('success');
});

Route:: post('/proses-form' , 'ProdukController@tambah')->name('proses-form');
Route:: get('/success' , 'ProdukController@detail')->name('success');
