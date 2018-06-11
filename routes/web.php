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

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->prefix('painel')->group(function(){
   Route::get ('/','Usuarios\PainelsController@index');

    //Leitor
   Route::middleware(['level:0'])->group(function(){

   });
    //revisor
    Route::middleware(['level:1'])->group(function(){

    });
    //admin
    Route::middleware(['level:2'])->group(function(){
        Route::get('/criar-usuario', 'Usuarios\UserController@create');

        Route::post('/criar-usuario', 'Usuarios\UserController@store');

        Route::get('/listar-usuario', 'Usuarios\UserController@index');
    });




});

