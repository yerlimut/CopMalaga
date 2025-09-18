<?php
use App\Http\Controllers\clientesController;
use Illuminate\Support\Facades\Route;

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
