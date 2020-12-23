<?php

use App\Http\Controllers\Appp\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])
    ->name('index');

Route::get('/about', [IndexController::class, 'about'])
    ->name('about');

Route::get('/scholarships', [IndexController::class, 'scholarships'])
    ->name('scholarships');

Route::get('/contact', [IndexController::class, 'contact'])
    ->name('contact');

Route::get('/faq', [IndexController::class, 'faq'])
    ->name('faq');
