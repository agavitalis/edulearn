<?php   

namespace App\Repositories;   

use App\Repositories\Interfaces\QuestionRepositoryInterface; 
use App\Models\Question;   
use Illuminate\Http\Request;



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
        
        $exam = Question::create([
            'name' => $request->name,
            'duration' => $request->duration,
            'description' => $request->description,
            'instruction' => $request->instruction,
            'category' => $request->category,
        ]);  
        return $exam;
    }
 
    /**
    * @param $exam_id
    */
    public function getQuestion($question_id)
    {
        return Question::find($question_id);
    }
}