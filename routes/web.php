<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clientesController;
use App\Http\Controllers\MedioPagoController;
use App\Http\Controllers\TipoPrestamoController;

use App\Http\Controllers\EstadoPrestamoController;


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


// rutas para tipo_prestamo
Route::get('/tipoprestamo/index', [TipoPrestamoController::class, 'index'])->name('tipoprestamo.index');
Route::get('/tipoprestamo/create', [TipoPrestamoController::class, 'create'])->name('tipoprestamo.create');
Route::post('/tipoprestamo/store', [TipoPrestamoController::class, 'store'])->name('tipoprestamo.store');
Route::get('/tipoprestamo/edit/{id}', [TipoPrestamoController::class, 'edit'])->name('tipoprestamo.edit');
Route::post('/tipoprestamo/update/{id}', [TipoPrestamoController::class, 'update'])->name('tipoprestamo.update');
Route::post('/tipoprestamo/destroy/{id}', [TipoPrestamoController::class, 'destroy'])->name('tipoprestamo.destroy');



// Rutas para EstadoPrestamo
Route::get('/estadoprestamo/index', [EstadoPrestamoController::class, 'index'])->name('estadoprestamo.index');
Route::get('/estadoprestamo/create', [EstadoPrestamoController::class, 'create'])->name('estadoprestamo.create');
Route::post('/estadoprestamo/store', [EstadoPrestamoController::class, 'store'])->name('estadoprestamo.store');
Route::get('/estadoprestamo/edit/{id}', [EstadoPrestamoController::class, 'edit'])->name('estadoprestamo.edit');
Route::post('/estadoprestamo/update/{id}', [EstadoPrestamoController::class, 'update'])->name('estadoprestamo.update');
Route::post('/estadoprestamo/destroy/{id}', [EstadoPrestamoController::class, 'destroy'])->name('estadoprestamo.destroy');
