<?php

namespace App\Repositories;

use App\Repositories\Interfaces\ExamRepositoryInterface;
use App\Models\Exam;
use App\Models\Scholarship;
use App\Models\WrittenExam;
use App\Models\SelectedQuestion;
use Carbon\Carbon;
use Illuminate\Http\Request;



class ExamRepository implements ExamRepositoryInterface
{
    /**
     * Get all active exams
     */
    public function getAllActiveExams()
    {
        return Exam::where(["is_active" => true])->get();
    }

    /**
     * Get all active exams
     */
    public function getAllExams()
    {
        return Exam::all();
    }

    /**
     * @param array $attributes
     */
    public function createExam(Request $request)
    {

        $exam = Exam::create([
            'name' => $request->name,
            'duration' => $request->duration,
            'description' => $request->description,
            'instruction' => $request->instruction,
            'number_of_questions' => $request->number_of_questions,
            'category' => $request->category,
        ]);
        return $exam;
    }

    /**
     * @param $exam_id
     */
    public function getExam($exam_id)
    {
        return Exam::find($exam_id);
    }

    public function updateExamDetails(Request $request)
    {
        $exam = Exam::where(['id'=>$request->exam_id])->update([
            'name' => $request->name,
            'duration' => $request->duration,
            'description' => $request->description,
            'instruction' => $request->instruction,
            'number_of_questions' => $request->number_of_questions,
            'category' => $request->category,
        ]);
        return $exam;
    }
    

    /**
     * @param $exam_id
     */
    public function getScholarshipExams($scholarship_id)
    {
        return Scholarship::find($scholarship_id)->exams;
    }

    /**
     * @param $exam_id, $user_id, $application_id
     */
    public function createWrittenExam($user_id, $exam_id, $application_id)
    {
        $exam = $this->getExam($exam_id);
        
        $written_exam = WrittenExam::create([
            'exam_id' => $exam_id,
            'application_id' => $application_id,
            'user_id' => $user_id,
            'start_time'=> Carbon::now(),
            'finish_time'=> Carbon::now()->addSeconds($exam->duration),
        ]);

        return $written_exam;
    }

    /**
     * @param $exam_id, $user_id, $application_id
     */
    public function getWrittenExam($user_id, $exam_id, $application_id)
    {
        $written_exam = WrittenExam::where([
            'exam_id' => $exam_id,
            'application_id' => $application_id,
            'user_id' => $user_id,
        ])->first();

        return $written_exam;
    }

    /**
     * @param $exam_id,$user_id,$written_exam_id
     */
    public function getQuestions($exam_id, $user_id, $written_exam_id)
    {

        $selected_questions = Exam::find($exam_id)->questions()->take(60)->InRandomOrder()->get();
        foreach ($selected_questions as $question) {

            SelectedQuestion::create([
                'question' => $question->question,
                'option_a' => $question->option_a,
                'option_b' => $question->option_b,
                'option_c' => $question->option_c,
                'option_d' => $question->option_d,
                'answer' => $question->answer,
                'question_id' => $question->id,
                'exam_id' => $question->exam_id,
                'written_exam_id' => $written_exam_id,
                'user_id' => $user_id,
            ]);
        }

        $questions = SelectedQuestion::where(['exam_id' => $exam_id, 'user_id' => $user_id, 'written_exam_id' => $written_exam_id])->take(60)->InRandomOrder()->get();
        return $questions;
    }

    /**
     * @param $exam_id,$user_id,$written_exam_id
     */
    public function getSelectedQuestions($exam_id, $user_id, $written_exam_id)
    {
        $questions = SelectedQuestion::where(['exam_id' => $exam_id, 'user_id' => $user_id, 'written_exam_id' => $written_exam_id])->take(60)->InRandomOrder()->get();
        return $questions;
    }

    /**
     * @param Request
     */
    public function updateStudentAnswer(Request $request)
    {
        $student_answer = SelectedQuestion::where(['id' => $request->seleted_question_id])
        ->update([ 'student_answer' => $request->student_answer]);

        return $student_answer;
    }

    /**
     * @param Request
     */
    public function endExam($written_exam_id)
    {
        $end_exam = WrittenExam::where(['id' => $written_exam_id])
        ->update([ 'is_finished' => 1]);
        
        return $end_exam;
    }

    /**
     * @written_exam_id
     */
    public function getWrittenExamDetails($written_exam_id)
    {
        $written_exam = WrittenExam::find($written_exam_id);
        return $written_exam;
    }
    
}
