<?php

use App\Http\Controllers\TransaccionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.app');
});

Route::get('/index', [TransaccionController::class, 'index'] )->name('gastos.index');
Route::post('/index-crear', [TransaccionController::class, 'store'] )->name('gastos.store');
