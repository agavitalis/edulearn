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
            return view('admin.exam.create-exams');
        }

        $response = $this->examRepository->createExam($request);
        if ($response) {
            return back()->with('success', 'Exams successfully created');
        }
        
    }

    public function manage_exams(){

        $exams = $this->examRepository->getAllExams();
        return view('admin.exam.manage-exams', compact('exams'));

    }

    public function exam_details($exam_id = null){

        $exam = $this->examRepository->getExam($exam_id);
        return view('admin.exam.exam-details',compact('exam'));
    }

    public function edit_exam(Request $request, $exam_id = null){

        if($request->isMethod('GET')){
            $exam = $this->examRepository->getExam($exam_id);
            return view('admin.exam.edit-exams',compact('exam'));
        }

        $this->examRepository->updateExamDetails($request);
        return back()->with('success',"Exam Sucessfully Updated");
       
    }

}
