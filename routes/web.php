<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clientesController;
use App\Http\Controllers\MedioPagoController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
// rutas para clientes

Route::get('/clientes/index',[clientesController::class, 'index'])->name('clientes.index');
Route::get('/clientes/create',[clientesController::class, 'create'])->name('clientes.create');
Route::post('/clientes/store',[clientesController::class, 'store'])->name('clientes.store');
Route::get('/clientes/edit/{id}',[clientesController::class, 'edit'])->name('clientes.edit');
Route::post('/clientes/update/{id}',[clientesController::class, 'update'])->name('clientes.update');
Route::post('/clientes/destroy/{id}',[clientesController::class, 'destroy'])->name('clientes.destroy');

// Rutas para MedioPago
Route::get('/mediospago/index', [MedioPagoController::class, 'index'])->name('mediospago.index');
Route::get('/mediospago/create', [MedioPagoController::class, 'create'])->name('mediospago.create');
Route::post('/mediospago/store', [MedioPagoController::class, 'store'])->name('mediospago.store');
Route::get('/mediospago/edit/{id}', [MedioPagoController::class, 'edit'])->name('mediospago.edit');
Route::post('/mediospago/update/{id}', [MedioPagoController::class, 'update'])->name('mediospago.update');
Route::post('/mediospago/destroy/{id}', [MedioPagoController::class, 'destroy'])->name('mediospago.destroy');