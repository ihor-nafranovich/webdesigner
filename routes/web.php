<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

// Маршрут для обработки контактной формы
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
