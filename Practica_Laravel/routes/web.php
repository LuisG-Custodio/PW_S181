<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\diarioController;
use App\Http\Controllers\controllerCrudD;

//Rutas controller_CrudD
Route::get('/recuerdo/create', [controllerCrudD::class,'create'])->name('recuerdo.create');
Route::post('/recuerdo/store', [controllerCrudD::class,'store'])->name('recuerdo.store');
Route::get('/recuerdo', [controllerCrudD::class,'index'])->name('recuerdo.index');
Route::get('/', [controllerCrudD::class,'inicio'])->name('recuerdo.inicio');
Route::put('/recuerdo/{id}/confirm', [controllerCrudD::class,'update'])->name('recuerdo.confirm');
Route::delete('/recuerdo/{id}/delete', [controllerCrudD::class,'destroy'])->name('recuerdo.delete');


//Rutas diario controller
//Rutas individuales

//Route::get('/form', [diarioController::class,'metodoFormulario'])->name('apodoformulario');
//Route::get('/recuerdos', [diarioController::class,'metodoRecuerdos'])->name('apodorecuerdos');

//Ruta para request
//Route::post('/guardarrecuerdo', [diarioController::class,'guardarRecuerdo'])->name('guardar');

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