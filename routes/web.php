<?php

use app\Http\Controllers\MedioPagoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Rutas para MedioPago
Route::get('/mediospago/index', [MedioPagoController::class, 'index'])->name('mediospago.index');
Route::get('/mediospago/create', [MedioPagoController::class, 'create'])->name('mediospago.create');
Route::post('/mediospago/store', [MedioPagoController::class, 'store'])->name('mediospago.store');
Route::get('/mediospago/edit/{id}', [MedioPagoController::class, 'edit'])->name('mediospago.edit');
Route::post('/mediospago/update/{id}', [MedioPagoController::class, 'update'])->name('mediospago.update');
Route::post('/mediospago/destroy/{id}', [MedioPagoController::class, 'destroy'])->name('mediospago.destroy');