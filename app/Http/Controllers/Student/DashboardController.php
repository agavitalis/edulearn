<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Scholarship;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\ScholarshipRepositoryInterface;
use App\Repositories\Interfaces\StudentProfileRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    private $scholarshipRepository;
    private $studentProfileRepository;

    public function __construct(ScholarshipRepositoryInterface $scholarshipRepository,StudentProfileRepositoryInterface $studentProfileRepository)
    {
        $this->scholarshipRepository = $scholarshipRepository;
        $this->studentProfileRepository = $studentProfileRepository;
    }

    public function dashboard(){

        $scholarships = $this->scholarshipRepository->getAllActiveScholarships();
        $applications = $this->scholarshipRepository->myApplications(Auth::user()->id);
        
        $scholarship_count = $scholarships->count();
        $applications_count = $scholarships->count();

        return view('student.dashboard', compact('scholarships','scholarship_count','applications_count'));
    }
}
