<?php   

namespace App\Repositories;   

use App\Repositories\Interfaces\ExamRepositoryInterface; 
use App\Models\Exam;   
use Illuminate\Http\Request;



class ExamRepository implements ExamRepositoryInterface 
{    
    /**
    * Get all active exams
    */
    public function getAllActiveExams()
    {
        return Exam::where(["is_active"=>true])->get();
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
}