<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Scholarship;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\ScholarshipRepositoryInterface;
use App\Repositories\Interfaces\StudentProfileRepositoryInterface;
use App\Repositories\Interfaces\ApplicantRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Exception;

class ScholarshipController extends Controller
{
    private $scholarshipRepository;
    private $studentProfileRepository;
    private $applicantRepository;

    public function __construct(
        ScholarshipRepositoryInterface $scholarshipRepository,
        StudentProfileRepositoryInterface $studentProfileRepository,
        ApplicantRepositoryInterface $applicantRepository
    )
    {
        $this->scholarshipRepository = $scholarshipRepository;
        $this->studentProfileRepository = $studentProfileRepository;
        $this->applicantRepository = $applicantRepository;
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

    public function scholarship_update_profile(Request $request){

        try {
            $this->studentProfileRepository->updateProfile($request);
        } catch (Exception $e) {
            
            $message = $e->getMessage();
            return response()->json(array(
                'code'=> 301,
                'message'=> $message
            ));
        }
      
        //now allow the investor to withdraw
        return response()->json(array('code'=>200, 'message'=>"Profile Update Succssfull"));
    }

    public function finalize_scholarship_application(Request $request){

        try {

            $application = $this->scholarshipRepository->applyForScholarship($request);
            return response()->json(array(
                'code'=> 200,
                'redirect_url'=> "/student/application_success/".$application->id,
                'message'=> "Application Successful"
            ));

        } catch (Exception $e) {
            
            $message = $e->getMessage();
            return response()->json(array(
                'code'=> 301,
                'message'=> $message
            ));
        }
       
    }

    public function application_success($application_id){

        $application = $this->applicantRepository->getAnApplicant($application_id);
        return view("student.scholarships.application-success", compact('application'));
    }

    public function my_applications(){

        $applications = $this->scholarshipRepository->myApplications(Auth::user()->id);
        return view("student.scholarships.my-applications", compact('applications'));
    }
}
