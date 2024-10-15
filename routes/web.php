<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', IndexController::class)->name('index');

Route::get('/app', [AppController::class, 'index'])->name('app.index');
