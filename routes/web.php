<?php

use Illuminate\Support\Facades\Route;

Route::view('/','home')->name('inicio');
Route::view('ingreso','ingreso')->name('ingreso');
Route::get('estudiantes/create', [App\Http\Controllers\EstudianteController::class, 'create'])->name('estudiantes.create');
Route::post('estudiantes/store', [App\Http\Controllers\EstudianteController::class, 'store'])->name('estudiantes.store');
Route::view('listado','listado')->name('listado');
Route::get('/listado', [App\Http\Controllers\EstudianteController::class, 'mostrarListado'])->name('estudiantes.listado');
Route::get('estudiantes/{id}', [App\Http\Controllers\EstudianteController::class, 'show'])->name('estudiantes.show');
