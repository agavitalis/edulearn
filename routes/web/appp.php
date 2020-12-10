<?php

use App\Http\Controllers\Appp\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])
                ->middleware('guest')
                ->name('index');

Route::get('/about', [IndexController::class, 'about'])
                ->middleware('guest')
                ->name('about');