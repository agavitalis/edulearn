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

    public function scholarship_exams($scholarship_id = null){

        $exams = $this->examRepository->getScholarshipExams($scholarship_id);
        return view('student.exams.scholarship-exams', compact('exams'));
    }

    public function exam_instructions($exam_id= null){

        $exam = $this->examRepository->getExam($exam_id);
        return view('student.exams.exam-instructions',compact('exam'));
    }

    public function exam($exam_id = null){

        $questions = $this->examRepository->getQuestions($exam_id);
       // dd($questions);
        return view('student.exams.examination',compact('questions'));
    }
}
