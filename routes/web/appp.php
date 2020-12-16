<?php

use App\Http\Controllers\Appp\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])
                ->name('index');

Route::get('/about', [IndexController::class, 'about'])
                ->name('about');