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

Route::get('', function () {
    return view('home');
});

Route::get('/login', function () {
   return view('auth.login');
})->name('login');

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('home', function () {
    return view('home');
})->name('home');

//Login
Route::get('login' , 'Auth\LoginController@showLoginForm') -> name('login');
Route::post('login', 'Auth\LoginController@Login');
Route::get('logout', 'Auth\LoginController@logout') -> name('logout');

//Recuperar Senha
Route::get('reset/password', function () {
    return view('user.password');
})->name('reset/password');

Route::post('reset/password/{user}' , 'UserController@updatePassword');

//Credenciadas
Route::get('/credenciadas', 'CredenciadaController@index');
Route::get('/credenciadas/cadastro', 'CredenciadaController@create')->name('nova-credenciada');
Route::post('/credenciadas/cadastro', 'CredenciadaController@store')->name('save');
Route::get('/credenciadas/{id}', 'CredenciadaController@edit')->name('edit');
Route::put('/credenciadas/{id}', 'CredenciadaController@update');
Route::get('/credenciadas/{id}/info', 'CredenciadaController@show');

Route::post('/credenciadas/status', 'CredenciadaController@setStatus');




