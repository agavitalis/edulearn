<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\ApplicantRepositoryInterface;
use App\Repositories\Interfaces\ScholarshipRepositoryInterface;

class ApplicantController extends Controller
{
    private $applicantRepository;
    private $scholarshipRepository;

    public function __construct(ApplicantRepositoryInterface $applicantRepository,ScholarshipRepositoryInterface $scholarshipRepository)
    {
        $this->scholarshipRepository = $scholarshipRepository;
        $this->applicantRepository = $applicantRepository;
    }


    public function get_all_applicants(){

        $applicants = $this->applicantRepository->getAllApplicants(); 
        return view('admin.applicants.view-applicants',compact('applicants'));
        
    }


    public function get_all_appllicants_per_scholarship(Request $request){

        if($request->isMethod('GET')){

            $scholarships = $this->scholarshipRepository->getAllActiveScholarships();
            return view('admin.applicants.view-applicants-form',compact('scholarships')); 
        }

        $applicants = $this->applicantRepository->getAllAppllicantsPerScholarship($request->scholarship_id);
        return view('admin.applicants.view-applicants',compact('applicants'));
        
    }

}
