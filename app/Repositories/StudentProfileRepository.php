<?php   

namespace App\Repositories;   

use App\Repositories\Interfaces\StudentProfileRepositoryInterface;
use App\Models\StudentProfile;   
use Illuminate\Http\Request;



class StudentProfileRepository implements StudentProfileRepositoryInterface 
{    
    /**
    * Get a student profile
    */
    public function getStudentProfile($user_id)
    {
        return StudentProfile::where(["user_id"=>$user_id])->first();
    } 
    
    /**
    * @param array $attributes
    */
    public function updateProfile(Request $request)
    {
        //check if the profile have been created before
        $student_profile = StudentProfile::where(['id'=>$request->id])->first();
        
        StudentProfile::where(['id'=>$request->id])->update([
            'name' => $request->name,
            'description' => $request->description,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'cover_picture' => $request->cover_picture,
            'application_fee' => $request->application_fee,
            'category' => $request->category,
        ]);
        return true;
    }
 
}