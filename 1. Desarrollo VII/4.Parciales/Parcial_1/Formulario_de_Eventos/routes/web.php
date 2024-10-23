<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FormController::class, 'formulario'])->
        name('formulario');

Route::post('/', [FormController::class, 'respuesta'])->
        name('respuesta');

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->
        name('dashboard');