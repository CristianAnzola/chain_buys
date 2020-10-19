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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/pag/inicio', 'IndexController@inicio')->name('pag/inicio');
Route::get('/pag/facturas', 'IndexController@facturas')->name('pag/facturas');
Route::get('/pag/perfil', 'IndexController@perfil')->name('pag/perfil');
Route::get('/pag/aux', 'IndexController@auxfactura')->name('pag/aux');

Route::resource('/pag', 'IndexController');
