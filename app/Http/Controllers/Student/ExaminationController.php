<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\ScholarshipRepositoryInterface;
use App\Repositories\Interfaces\ExamRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Exception;

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

        $written_exam = $this->examRepository->getWrittenExam($user_id, $exam_id, $application_id);
        if($written_exam == null){
           
            $written_exam = $this->examRepository->createWrittenExam($user_id, $exam_id, $application_id);
            //set written exam in session
            session(['written_exam_id' => $written_exam->id]);
            $questions = $this->examRepository->getQuestions($exam_id, $user_id,$written_exam->id);
            return view('student.exams.examination',compact('questions','written_exam'));
        }else{


            if($written_exam->is_finished > 0){
                return back()->with('errors', "This exam have been already been concluded");
            }

            //then get his questions if his time havnt ellapsed and set session
            session(['written_exam_id' => $written_exam->id]);
            
            $questions = $this->examRepository->getSelectedQuestions($exam_id, $user_id,$written_exam->id);
            return view('student.exams.examination',compact('questions','written_exam'));
        }

    }


    public function exam_answer(Request $request){

        try {
            $this->examRepository->updateStudentAnswer($request);
            return response()->json(array('code'=>200, 'message'=>"Answer updated"));

        } catch (Exception $e) {
            
            $message = $e->getMessage();
            return response()->json(array(
                'code'=> 301,
                'message'=> $message
            ));
        }
          
    }
}
