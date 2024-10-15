<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', IndexController::class)->name('index');

Route::get('/app', [AppController::class, 'index'])->name('app.index');
Route::get('/app/tasks', [AppController::class, 'tasks'])->name('app.tasks');
Route::get('/app/calendar', [AppController::class, 'calendar'])->name('app.calendar');
Route::get('/app/settings', [AppController::class, 'settings'])->name('app.settings');
Route::get('/app/help', [AppController::class, 'help'])->name('app.help');
Route::get('/app/profile', [AppController::class, 'profile'])->name('app.profile');
