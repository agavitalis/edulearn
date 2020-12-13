<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ScholarshipController extends Controller
{
    public function scholarships(){
        return view('student.scholarships');
    }

    public function scholarship_details(){
        return view('student.scholarship-details');
    }

    public function scholarships_application(){
        return view("student.scholarship-application");
    }
}
