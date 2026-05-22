<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstalacionesController;

Route::get('/', [InstalacionesController::class, 'index']);
Route::resource('instalaciones', InstalacionesController::class);
Route::get('/instalaciones', [InstalacionesController::class, 'index'])->middleware('auth');
