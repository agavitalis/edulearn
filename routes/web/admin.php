<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ScholarshipController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Admin\ExamController;
use App\Http\Controllers\Admin\ApplicantController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin','namespace'=>"Admin"], function()  
{ 
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])
    ->middleware('auth')
    ->name('dashboard-admin');

    Route::get('/register-scholarship', [ScholarshipController::class, 'register_scholarship'])
    ->middleware('auth')
    ->name('register-scholarship');

    Route::post('/register-scholarship', [ScholarshipController::class, 'register_scholarship'])
    ->middleware('auth')
    ->name('register-scholarship');

    Route::get('/manage-scholarships', [ScholarshipController::class, 'manage_scholarships'])
    ->middleware('auth')
    ->name('manage-scholarships');

    Route::match(['GET','POST'],'/assign-exam-to-scholarship', [ScholarshipController::class, 'assign_exam_to_scholarship'])
    ->middleware('auth')
    ->name('assign_exam_to_scholarship');

    Route::match(['GET','POST'],'/manage-assignments', [ScholarshipController::class, 'manage_assignments'])
    ->middleware('auth')
    ->name('manage_assignments');
   
    Route::match(['GET','POST'],'/create-an-exam', [ExamController::class, 'create_exams'])
    ->middleware('auth')
    ->name('create_exams');

    Route::get('/manage-examinations', [ExamController::class, 'manage_exams'])
    ->middleware('auth')
    ->name('manage_examinations');

    Route::get('/exam-details/{id?}', [ExamController::class, 'exam_details'])
    ->middleware('auth')
    ->name('exam_details');

    Route::match(['GET','POST'],'/upload-questions', [QuestionController::class, 'upload_questions'])
    ->middleware('auth')
    ->name('upload_questions');

    Route::match(['GET','POST'],'/manage-questions', [QuestionController::class, 'manage_questions'])
    ->middleware('auth')
    ->name('manage_questions');

    Route::match(['GET','POST'],'/view-applicants-form', [ApplicantController::class, 'get_all_appllicants_per_scholarship'])
    ->middleware('auth')
    ->name('get_all_appllicants_per_scholarship');

    Route::match(['GET','POST'],'/view-all-applicants', [ApplicantController::class, 'get_all_applicants'])
    ->middleware('auth')
    ->name('get_all_applicants');

});