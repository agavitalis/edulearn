<?php   

namespace App\Repositories;   

use App\Repositories\Interfaces\QuestionRepositoryInterface; 
use App\Models\Question;   
use Illuminate\Http\Request;
use App\Imports\QuestionsImport;
use App\Models\Exam;
use Maatwebsite\Excel\Facades\Excel;



class QuestionRepository implements QuestionRepositoryInterface 
{    
    /**
    * Get all active exams
    */
    public function getActiveExamQuestions($exam_id)
    {
        return Question::where(["is_active"=>true])->get();
    } 

    /**
    * Get all active exams
    */
    public function getAllExamQuestions($exam_id)
    {
        return Question::all();
    } 
    
    /**
    * @param array $attributes
    */
    public function uploadQuestions(Request $request)
    {
       

        $collection = (new QuestionsImport)->toCollection(request()->file('questions'));
        foreach($collection[0] as $row){

            Question::create([
                'question' => $row['question'],
                'option_a' => $row['option_a'],
                'option_b' => $row['option_b'],
                'option_c' => $row['option_c'],
                'option_d' => $row['option_d'],
                'answer' => $row['answer'],
                'exam_id' => $request->exam
            ]);
        }
    }
 
    /**
    * @param $exam_id
    */
    public function getQuestion($question_id)
    {
        return Question::find($question_id);
    }

    /**
     * Get all  questions
     */
    public function getAllQuestions(){
        return Question::all();
    }
}