<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExaminationController extends Controller
{
    public function create_exams(){
        return view('admin.create-exams');
    }

    public function manage_exams(){
        return view('admin.manage-examinations');
    }

    public function exam_details(){
        return view('admin.exam-details');
    }
}

