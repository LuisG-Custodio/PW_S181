<?php

use Illuminate\Support\Facades\Route;

/* Route::view('/', 'welcome');
Route::view('/form', 'formulario');
Route::view('/recuerdos', 'recuerdos'); */

Route::get('/', function () {
    return view('welcome');
}); 
Route::get('/form', function () {
    return view('formulario');
}); 
Route::get('/recuerdos', function () {
    return view('recuerdos');
}); 