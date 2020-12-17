<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Scholarship;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\ScholarshipRepositoryInterface;
use App\Repositories\Interfaces\StudentProfileRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class ScholarshipController extends Controller
{
    private $scholarshipRepository;
    private $studentProfileRepository;

    public function __construct(ScholarshipRepositoryInterface $scholarshipRepository,StudentProfileRepositoryInterface $studentProfileRepository)
    {
        $this->scholarshipRepository = $scholarshipRepository;
        $this->studentProfileRepository = $studentProfileRepository;
    }

    public function scholarships(){

        $scholarships = $this->scholarshipRepository->getAllActiveScholarships();
        return view('student.scholarships.scholarship-list',compact('scholarships'));
    }

    public function scholarship_details($scholarship_id = null){

        $scholarship = $this->scholarshipRepository->getScholarship($scholarship_id);
        return view('student.scholarships.scholarship-details', compact('scholarship'));
    }

    public function scholarships_application($scholarship_id = null){

        $scholarship = $this->scholarshipRepository->getScholarship($scholarship_id);
        $studentProfile = $this->studentProfileRepository->getStudentProfile(Auth::user()->id);

        return view("student.scholarships.scholarship-application", compact('scholarship','studentProfile'));
    }
}
