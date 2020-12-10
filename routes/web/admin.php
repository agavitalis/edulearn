<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin','namespace'=>"Admin"], function()  
{ 
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])
                    ->middleware('guest')
                    ->name('dashboard-admin');

});