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

//Se un utente atterra sull'url /libri verrà portato nel controller BookController al metodo Index
// Route::get('/utenti', 'UserController@index');
Route::get('/', function() {
    return view('welcome');
});

Route::resource('/users', 'UserController');
