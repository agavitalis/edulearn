<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Repositories\Interfaces\StudentProfileRepositoryInterface;

class ProfileController extends Controller
{

    private $studentProfileRepository;

    public function __construct(StudentProfileRepositoryInterface $studentProfileRepository)
    {
        $this->studentProfileRepository = $studentProfileRepository;
    }

    public function profile(Request $request){

        if($request->isMethod('GET')){

            $studentProfile = $this->studentProfileRepository->getStudentProfile(Auth::user()->id);
            return view("student.profile", compact('studentProfile'));
        }

        $this->studentProfileRepository->updateProfile($request);
        return back()->with('success',"Profile Successfully Updated");
           
    }
}
