<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
            return view("student.profile");
        }

        $this->studentProfileRepository->updateProfile($request);
        return back()->with('success',"Profile Successfully Updated");
           
    }
}
