<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\ScholarshipRepositoryInterface;
use App\Repositories\Interfaces\ExamRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class ExaminationController extends Controller
{
    private $scholarshipRepository;
    private $examRepository;

    public function __construct(ScholarshipRepositoryInterface $scholarshipRepository,ExamRepositoryInterface $examRepository)
    {
        $this->scholarshipRepository = $scholarshipRepository;
        $this->examRepository = $examRepository;
    }

    public function scholarship_exams($id = null){

        $id = explode("_", $id);
        $scholarship_id = $id[0];
        $application_id = $id[1];
        //set application id as session
        session(['application_id' => $application_id]);

        $exams = $this->examRepository->getScholarshipExams($scholarship_id);
        return view('student.exams.scholarship-exams', compact('exams'));
    }

    public function exam_instructions($exam_id= null){

        $exam = $this->examRepository->getExam($exam_id);
        return view('student.exams.exam-instructions',compact('exam'));
    }

    public function exam($exam_id = null){

        $user_id = Auth::user()->id;
        $application_id = session('application_id');

        //check if he has written this exam before, for this scholsrship
        //and for this application
        $written_exam = $this->examRepository->getWrittenExam($user_id, $exam_id, $application_id);
        if($written_exam == null){
            //create this exam as written
            $written_exam = $this->examRepository->createWrittenExam($user_id, $exam_id, $application_id);
            $questions = $this->examRepository->getQuestions($exam_id, $user_id,$written_exam->id);
            return view('student.exams.examination',compact('questions','written_exam'));
        }else{

            //check if his time have elasped


            //then get his questions if his time havnt ellapsed
            $questions = $this->examRepository->getSelectedQuestions($exam_id, $user_id,$written_exam->id);
            return view('student.exams.examination',compact('questions','written_exam'));
        }

    }
}
