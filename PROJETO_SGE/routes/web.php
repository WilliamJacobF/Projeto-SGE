<?php

use App\Http\Controllers\Estoquecontroller;
use App\Http\Controllers\Financascontroller;
use App\Http\Controllers\SGEcontroller;
use Illuminate\Support\Facades\Route;

//rotas dos clientes

Route::get('/clientes', [SGEController::class, 'index'])->name('clientes-index');
Route::get('/create/clientes', [SGEcontroller::class, 'create'])->name('clientes-create');
Route::post('/cleintes', [SGEController::class, 'store'])->name('clientes-store');
Route::get('/cliente{id}/edit', [SGEController::class, 'edit'])->where('id', '[0-9]+')->name('clientes-edit');
Route::put('/clientes{id}', [SGEController::class, 'update'])->where('id', '[0-9]+')->name('clientes-update');
Route::delete('/clientes{id}', [SGEController::class, 'destroy'])->where('id', '[0-9]+')->name('clientes-destroy');

//rotas dos produtos

Route::get('/produtos', [Estoquecontroller::class, 'index'])->name('produtos-index');
Route::get('/create/produtos', [Estoquecontroller::class, 'create'])->name('produtos-create');
Route::post('/produtos', [Estoquecontroller::class, 'store'])->name('produtos-store');
Route::get('/produto/{id}/edit', [Estoquecontroller::class, 'edit'])->where('id', '[0-9]+')->name('produtos-edit');
Route::put('/produtos{id}', [EStoquecontroller::class, 'update'])->where('id', '[0-9]+')->name('produtos-update');
Route::delete('/produtos{id}', [Estoquecontroller::class, 'destroy'])->where('id', '[0-9]+')->name('produtos-destroy');

//rotas financias

Route::get('/financias', [Financascontroller::class, 'index'])->name('financias-index');
Route::get('/create/financias', [Financascontroller::class, 'create'])->name('financias-create');
Route::post('/financias', [Financascontroller::class, 'store'])->name('financias-store');
Route::get('/financia/{id}/edit', [Financascontroller::class, 'edit'])->where('id', '[0-9]+')->name('financias-edit');
Route::put('/financias{id}', [Financascontroller::class, 'update'])->where('id', '[0-9]+')->name('financias-update');
Route::delete('/financias{id}', [Financascontroller::class, 'destroy'])->where('id', '[0-9]+')->name('financias-destroy');

//rota da home

Route::get('/', function () { return view('home.index'); });