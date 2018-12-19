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
    return view('home');
});

Route::get('/sobre-nos', function(){
    return view('sobrenos');
});

Route::get('/fale-conosco', function(){
    return view('faleconosco');
});

Route::get('/seja-franqueado', function(){
    return view('seja-franqueado');
});

Route::get('/eventos', function(){
    return view('eventos');
});

Route::get('/login', function(){
    return view('login');
});

Route::get('/cadastrar-franqueado', function(){
    return view('cadastro-franqueado');
});

Route::get('/login-franqueado', function(){
    return view('login-franqueado');
});

Route::get('/cadastrar', function(){
    return view('cadastro');
});