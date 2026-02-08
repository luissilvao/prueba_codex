<?php

use App\Http\Controllers\VehiculoController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => redirect()->route('vehiculos.index'));
Route::resource('vehiculos', VehiculoController::class);
