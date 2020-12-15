<?php

use App\Http\Controllers\Student\DashboardController;
use App\Http\Controllers\Student\ExaminationController;
use App\Http\Controllers\Student\ScholarshipController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'student','namespace'=>"Student"], function()  
{ 
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])
    ->middleware('guest')
    ->name('student_dashboard');

    Route::get('/scholarships', [ScholarshipController::class, 'scholarships'])
    ->middleware('guest')
    ->name('student_scholarships');

    Route::get('/scholarship/{id?}', [ScholarshipController::class, 'scholarship_details'])
    ->middleware('guest')
    ->name('student_scholarship_details');

    Route::get('/scholarship-application/{id}', [ScholarshipController::class, 'scholarships_application'])
    ->middleware('guest')
    ->name('student_scholarships_application');

    Route::get('/examination', [ExaminationController::class, 'exam'])
    ->middleware('guest')
    ->name('student_exam');

    Route::get('/exam-instructions', [ExaminationController::class, 'exam_instructions'])
    ->middleware('guest')
    ->name('student_exam_instructions');

});