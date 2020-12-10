<?php

use App\Http\Controllers\Student\DashboardController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'student','namespace'=>"Student"], function()  
{ 
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])
                    ->middleware('guest')
                    ->name('index');

});