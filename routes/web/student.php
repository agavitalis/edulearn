<?php

use App\Http\Controllers\Student\DashboardController;
use App\Http\Controllers\Student\ExaminationController;
use App\Http\Controllers\Student\ScholarshipController;
use App\Http\Controllers\Student\ProfileController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'student','namespace'=>"Student"], function()  
{ 
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])
    ->middleware('auth')
    ->name('student_dashboard');

    Route::match(['GET','POST'],'/profile', [ProfileController::class, 'profile'])
    ->middleware('auth')
    ->name('student_profile');

    Route::get('/scholarships', [ScholarshipController::class, 'scholarships'])
    ->middleware('auth')
    ->name('student_scholarships');

    Route::get('/scholarship/{id}', [ScholarshipController::class, 'scholarship_details'])
    ->middleware('auth')
    ->name('student_scholarship_details');

    Route::get('/scholarship-application/{id}', [ScholarshipController::class, 'scholarships_application'])
    ->middleware('auth')
    ->name('student_scholarships_application');

    Route::post('/scholarship_update_profile', [ScholarshipController::class, 'scholarship_update_profile'])
    ->middleware('auth')
    ->name('student_scholarship_update_profile');

    Route::post('/finalize_scholarship_application', [ScholarshipController::class, 'finalize_scholarship_application'])
    ->middleware('auth')
    ->name('student_finalize_scholarship_application');

    Route::get('/application_success/{id}', [ScholarshipController::class, 'application_success'])
    ->middleware('auth')
    ->name('student_application_success');

    Route::get('/my_applications', [ScholarshipController::class, 'my_applications'])
    ->middleware('auth')
    ->name('student_applications');


    Route::get('/scholarship-exams/{id}', [ExaminationController::class, 'scholarship_exams'])
    ->middleware('auth')
    ->name('student_scholarship_exams');

    Route::get('/exam-instructions/{exam_id}', [ExaminationController::class, 'exam_instructions'])
    ->middleware('auth')
    ->name('student_exam_instructions');

    Route::get('/examination/{exam_id}', [ExaminationController::class, 'exam'])
    ->middleware('auth')
    ->name('student_exam');

    Route::post('/exam-answer', [ExaminationController::class, 'exam_answer'])
    ->middleware('auth')
    ->name('student_exam_answer');

    Route::post('/end-exam', [ExaminationController::class, 'end_exam'])
    ->middleware('auth')
    ->name('student_end_exam');

    Route::get('/end-exam-success', [ExaminationController::class, 'end_exam_success'])
    ->middleware('auth')
    ->name('student_end_exam_success');

});