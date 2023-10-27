<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bib_c;

Route::get('/', [bib_c::class,'loadoutPrincipal'])->name('BPrincipal');
Route::get('/register', [bib_c::class,'loadoutRegister'])->name('BRegister');
Route::post('/saveregister', [bib_c::class,'saveRegister'])->name('BSaveReg');