<?php   

namespace App\Repositories;   

use App\Repositories\Interfaces\ScholarshipRepositoryInterface; 
use App\Models\Scholarship;   
use App\Models\ExamScholarship;   
use Illuminate\Http\Request;



class ScholarshipRepository implements ScholarshipRepositoryInterface 
{    
    /**
    * Get all active scholarships
    */
    public function getAllActiveScholarships()
    {
        return Scholarship::where(["is_active"=>true])->get();
    } 

    /**
    * Get all active scholarships
    */
    public function getAllScholarships()
    {
        return Scholarship::all();
    } 
    
    /**
    * @param array $attributes
    */
    public function createScholarship(Request $request)
    {
        
        $scholarship = Scholarship::create([
            'name' => $request->name,
            'description' => $request->description,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'cover_picture' => $request->cover_picture,
            'application_fee' => $request->application_fee,
            'category' => $request->category,
        ]);  
        return $scholarship;
    }
 
    /**
    * @param $scholarship_id
    */
    public function getScholarship($scholarship_id)
    {
        return Scholarship::find($scholarship_id);
    }

    /**
    * @param array $attributes
    */
    public function assignExamToScholarship(Request $request)
    {
        
        return ExamScholarship::create([
            'exam_id' => $request->exam_id,
            'scholarship_id' => $request->scholarship_id,
        ]);  
        
    }

     /**
    * @param array $attributes
    */
    public function examAssignedToScholarships()
    {
        return Scholarship::all();
    }
 
}