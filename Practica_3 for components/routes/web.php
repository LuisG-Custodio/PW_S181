<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('apodoinicio');
Route::view('/form', 'vista1')->name('apodoformulario');
Route::view('/recuerdos', 'vista1')->name('apodorecuerdos');

/* Route::get('/', function () {
    return view('welcome');
}); 
Route::get('/form', function () {
    return view('formulario');
}); 
Route::get('/recuerdos', function () {
    return view('recuerdos');
});  */