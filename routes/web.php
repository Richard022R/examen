<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;


Route::post('/estudiantes', [EstudianteController::class, 'store'])->name('estudiantes.store');

Route::view('/','home')->name('inicio');
Route::view('ingreso','ingreso')->name('ingreso');
Route::get('/estudiantes/ingreso', [EstudianteController::class, 'create'])->name('estudiantes.create');
Route::view('listado','listado')->name('listado');
