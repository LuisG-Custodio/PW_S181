<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\c_vj;

Route::get('/', [c_vj::class, 'show_form']);

Route::post('/save_game', [c_vj::class, 'save_game']);