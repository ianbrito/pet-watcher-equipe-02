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

Route::get('', 'HomeController@index')->name('home')->middleware('auth');

// Route::get('/', function () {
//     return view('home');
// })->name('home')->middleware('auth');

// Route::get('/login', function () {
//    return view('auth.login');
// })->name('login');



Route::get('', 'HomeController@index')->name('home')->middleware('auth');

Route::get('/login', function () {
   return view('auth.login');
})->name('login');


// Route::get('home', 'HomeController@index')->name('home')->middleware('auth');

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

Route::group(['middleware' => ['auth','check.adm.account']], function(){
   Route::get('/credenciadas',           'CredenciadaController@index');
   Route::get('/credenciadas/cadastro',  'CredenciadaController@create')->name('nova-credenciada');
   Route::post('/credenciadas/cadastro', 'CredenciadaController@store')->name('save');
   Route::get('/credenciadas/{id}',      'CredenciadaController@edit')->name('edit');
   Route::put('/credenciadas/{id}',      'CredenciadaController@update');
   Route::get('/credenciadas/{id}/info', 'CredenciadaController@show');
   Route::post('/credenciadas/status',   'CredenciadaController@setStatus');
});

//ADM
Route::group(['middleware' => ['auth','check.adm.account']], function(){
   Route::get('/users/cadastro',           'UserController@create'); // Formulario
   Route::post('/users/cadastro',           'UserController@store'); // Salva no banco
   Route::get('/home-adm',function(){ return view('home-adm'); }); //Home específica do adm
   Route::get('/acesso/{id}','CredenciadaController@acessoCred');

});

//licencas
Route::group(['middleware' => ['auth','check.adm.account']], function(){
   Route::get('/licencas','LicencaController@index'); // lista todas as licencas
   Route::get('/licencas/cadastro','LicencaController@create'); // Formulario
   Route::post('/licencas/cadastro','LicencaController@store'); // Salva n o banco
   Route::get('/licencas/{id}','LicencaController@show'); //
   Route::put('/licencas/{id}','LicencaController@edit'); //
   Route::put('/licencas/edit/{id}','LicencaController@update'); //
   Route::patch('/licencas/status','LicencaController@setStatus'); //

   Route::get('/revog', 'LicencaController@formRevog');
   Route::get('/revogacao','LicencaController@getLicencas');
   Route::get('/licencas-revogacao',function(){ return view('licenca.licencas-revogacao');});


});


// Especie Animal
Route::get('especieanimal', 'EspecieAnimalController@index');
Route::get('especieanimal/create', 'EspecieAnimalController@create');
Route::get('especieanimal/{id}', 'EspecieAnimalController@show');
Route::get('especieanimal/edit/{id}', 'EspecieAnimalController@edit');
Route::post('especieanimal/store' , 'EspecieAnimalController@store');
Route::put('especieanimal/{id}', 'EspecieAnimalController@update');
Route::delete('especieanimal/delete/{id}', 'EspecieAnimalController@destroy');


// Priprietario
Route::get('proprietario', 'ProprietarioController@index');
Route::get('proprietario/create', 'ProprietarioController@create');
Route::post('proprietario/store' , 'ProprietarioController@store');
Route::get('/proprietario/{id}/info', 'ProprietarioController@show');
Route::get('proprietario/edit/{id}', 'ProprietarioController@edit');
Route::put('proprietario/{id}', 'ProprietarioController@update');

//Animal
Route::get('/animal/baixa', function() {
   return view('animal.animal-baixa');
});



//Animais
Route::group(['middleware' => ['auth','check.adm.account']], function(){
   Route::get('/animal-adm', function(){
      return view('animal.adm.show');
   });

   Route::get('/animal-cred', function(){
      return view('animal.cred.show');
   });

   Route::get('/animal/busca', function(){
      return view('animal.adm.busca-microchip');
   });

});
