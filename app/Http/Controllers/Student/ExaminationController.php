<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExaminationController extends Controller
{
    public function exam_instructions(){
        return view('student.exam-instructions');
    }

    public function exam(){
        return view('student.examination');
    }
}
