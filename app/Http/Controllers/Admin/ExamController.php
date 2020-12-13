<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\ExamRepositoryInterface;

class ExamController extends Controller
{
    private $examRepository;

    public function __construct(ExamRepositoryInterface $examRepository)
    {
        $this->examRepository = $examRepository;
    }


    public function create_exams(Request $request){

        if($request->isMethod('GET')){
            return view('admin.create-exams');
        }

        $response = $this->examRepository->createExam($request);
        if ($response) {
            return back()->with('success', 'Exams successfully created');
        }
        
    }

    public function manage_exams(){

        $exams = $this->examRepository->getAllExams();
        return view('admin.manage-exams', compact('exams'));
    }

    public function exam_details(){
        return view('admin.exam-details');
    }
}
