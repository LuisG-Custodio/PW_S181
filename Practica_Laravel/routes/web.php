<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\diarioController;

Route::get('/', [diarioController::class,'metodoInicio'])->name('apodoinicio');
Route::get('/form', [diarioController::class,'metodoFormulario'])->name('apodoformulario');
Route::get('/recuerdos', [diarioController::class,'metodoRecuerdos'])->name('apodorecuerdos');


/* Route::view('/', 'welcome')->name('apodoinicio');
Route::view('/form', 'formulario')->name('apodoformulario');
Route::view('/recuerdos', 'recuerdos')->name('apodorecuerdos'); */

/* Route::get('/', function () {
    return view('welcome');
}); 
Route::get('/form', function () {
    return view('formulario');
}); 
Route::get('/recuerdos', function () {
    return view('recuerdos');
});  */