<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Scholarship;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\ScholarshipRepositoryInterface;
use App\Repositories\Interfaces\ExamRepositoryInterface;
class ScholarshipController extends Controller
{
    private $scholarshipRepository;
    private $examRepository;

    public function __construct(ScholarshipRepositoryInterface $scholarshipRepository,ExamRepositoryInterface $examRepository)
    {
        $this->scholarshipRepository = $scholarshipRepository;
        $this->examRepository = $examRepository;
    }

    public function register_scholarship(Request $request)
    {

        if ($request->isMethod('GET')) {
            return view('admin.scholarship.register-scholarship');
        }

        $response = $this->scholarshipRepository->createScholarship($request);
        if ($response) {
            return back()->with('success', 'Scholarship successfully created');
        }
    }

    public function manage_scholarships(Request $request)
    {
        $scholarships = $this->scholarshipRepository->getAllScholarships();
        return view('admin.scholarship.manage-scholarships', compact('scholarships'));
    }

    public function assign_exam_to_scholarship(Request $request)
    {
        if($request->isMethod('GET')){

            $scholarships = $this->scholarshipRepository->getAllActiveScholarships();
            $exams = $this->examRepository->getAllActiveExams();
            return view('admin.scholarship.assign-exam-to-scholarship', compact('scholarships','exams'));
        }

        $this->scholarshipRepository->assignExamToScholarship($request);
        return back()->with('success','The selected Examination have been added to tthis scholarship');

    }

    public function manage_assignments(Request $request){

        if($request->isMethod('GET')){
            $scholarships =  $this->scholarshipRepository->examAssignedToScholarships();
            return view('admin.scholarship.manage-exam-assigned-to-scholarship',compact('scholarships'));
        }

    }
}
