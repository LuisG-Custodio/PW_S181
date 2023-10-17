<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\diarioController;

//Rutas individuales
Route::get('/', [diarioController::class,'metodoInicio'])->name('apodoinicio');
Route::get('/form', [diarioController::class,'metodoFormulario'])->name('apodoformulario');
Route::get('/recuerdos', [diarioController::class,'metodoRecuerdos'])->name('apodorecuerdos');

//Ruta para request
Route::post('/guardarrecuerdo', [diarioController::class,'guardarRecuerdo'])->name('guardar');

//Rutas agrupadas
/* Route::controller(diarioController::class)->group(function(){
    Route::get('/','metodoInicio')->name('apodoinicio');
    Route::get('/form','metodoFormulario')->name('apodoformulario');
    Route::get('/recuerdos','metodoRecuerdos')->name('apodorecuerdos');
}); */

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