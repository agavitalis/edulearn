<?php

use App\Http\Controllers\Student\DashboardController;
use App\Http\Controllers\Student\ExaminationController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'student','namespace'=>"Student"], function()  
{ 
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])
    ->middleware('guest')
    ->name('student_dashboard');

    Route::get('/examination', [ExaminationController::class, 'exam'])
    ->middleware('guest')
    ->name('student_exam');

    Route::get('/exam-instructions', [ExaminationController::class, 'exam_instructions'])
    ->middleware('guest')
    ->name('student_exam_instructions');

});