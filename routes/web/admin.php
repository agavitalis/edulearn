<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ScholarshipController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Admin\ExamController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin','namespace'=>"Admin"], function()  
{ 
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])
    ->middleware('guest')
    ->name('dashboard-admin');

    Route::get('/register-scholarship', [ScholarshipController::class, 'register_scholarship'])
    ->middleware('guest')
    ->name('register-scholarship');

    Route::post('/register-scholarship', [ScholarshipController::class, 'register_scholarship'])
    ->middleware('guest')
    ->name('register-scholarship');


    Route::get('/manage-scholarships', [ScholarshipController::class, 'manage_scholarships'])
    ->middleware('guest')
    ->name('manage-scholarships');

    Route::get('/manage-scholarship-exams', [ScholarshipController::class, 'manage_scholarships_exams'])
    ->middleware('guest')
    ->name('manage-scholarship-exams');

    Route::match(['GET','POST'],'/create-an-exam', [ExamController::class, 'create_exams'])
    ->middleware('guest')
    ->name('create_exams');

    Route::get('/manage-examinations', [ExamController::class, 'manage_exams'])
    ->middleware('guest')
    ->name('manage_examinations');

    Route::get('/exam-details/{id?}', [ExamController::class, 'exam_details'])
    ->middleware('guest')
    ->name('exam_details');

    Route::match(['GET','POST'],'/upload-questions', [QuestionController::class, 'upload_questions'])
    ->middleware('guest')
    ->name('upload_questions');

});