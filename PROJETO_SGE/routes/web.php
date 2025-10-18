<?php

use App\Http\Controllers\SGEcontroller;
use Illuminate\Support\Facades\Route;

//rotas dos clientes

Route::get('/', [SGEController::class, 'index'])->name('clientes-index');
Route::get('/create', [SGEcontroller::class, 'create'])->name('clientes-create');
Route::post('/', [SGEController::class, 'store'])->name('clientes-store');
Route::get('/{id}/edit', [SGEController::class, 'edit'])->where('id', '[0-9]+')->name('clientes-edit');
Route::put('/{id}', [SGEController::class, 'update'])->where('id', '[0-9]+')->name('clientes-update');
Route::delete('/{id}', [SGEController::class, 'destroy'])->where('id', '[0-9]+')->name('clientes-destroy');