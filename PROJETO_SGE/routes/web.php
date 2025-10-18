<?php

use App\Http\Controllers\SGEcontroller;
use Illuminate\Support\Facades\Route;

Route::resource('clientes', SGEcontroller::class);
