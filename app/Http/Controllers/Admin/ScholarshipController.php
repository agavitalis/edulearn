<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ScholarshipController extends Controller
{
    public function register_scholarship(){
        return view('admin.register-scholarship');
    }

    public function manage_scholarships(Request $request){
        return view('admin.manage-scholarships');
    }

    public function manage_scholarships_exams(Request $request){
        return view('admin.manage-scholarship-exams');
    }
}

