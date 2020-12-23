<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Scholarship;
use App\Repositories\Interfaces\ScholarshipRepositoryInterface;
use App\Repositories\Interfaces\QuestionRepositoryInterface;
use App\Repositories\Interfaces\StudentProfileRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DashboardController extends Controller
{
    private $scholarshipRepository;
    private $studentProfileRepository;
    private $questionRepository;

    public function __construct(QuestionRepositoryInterface $questionRepository,ScholarshipRepositoryInterface $scholarshipRepository,StudentProfileRepositoryInterface $studentProfileRepository)
    {
        $this->scholarshipRepository = $scholarshipRepository;
        $this->questionRepository = $questionRepository;
        $this->studentProfileRepository = $studentProfileRepository;
    }

    public function dashboard(){

        $user_count = User::all()->count();
        $admin_count = User::where(['user_type'=>"admin"])->count();
        $student_count = User::where(['user_type'=>"student"])->count();
        $scholarships_count = $this->scholarshipRepository->getAllScholarships()->count();
        $applications_count = $this->scholarshipRepository->getAllApplications()->count();
        $questions_count = $this->questionRepository->getAllQuestions()->count();
        return view('admin.dashboard', compact('user_count',"scholarships_count","applications_count","questions_count","admin_count","student_count"));
    }
}
