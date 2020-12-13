<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\ScholarshipRepositoryInterface;

class ScholarshipController extends Controller
{
    private $scholarshipRepository;

    public function __construct(ScholarshipRepositoryInterface $scholarshipRepository)
    {
        $this->scholarshipRepository = $scholarshipRepository;
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

    public function manage_scholarships_exams(Request $request)
    {
        return view('admin.manage-scholarship-exams');
    }
}
