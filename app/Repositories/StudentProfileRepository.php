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

        if($student_profile){
            StudentProfile::where(['id'=>$request->id])->update([
                
                'phone' => $request->phone,
                'category' => $request->category,

                'school_name' => $request->school_name,
                'level' => $request->level,
                'exp_year_of_graduation' => $request->exp_year_of_graduation,

                'country' => $request->country,
                'state_of_orgin' => $request->state_of_orgin,
                'lga' => $request->lga,
                'address' => $request->address,
            ]);
        }else{

            StudentProfile::create([
                
                'user_id' => $request->user_id,
                'phone' => $request->phone,
                'category' => $request->category,

                'school_name' => $request->school_name,
                'level' => $request->level,
                'exp_year_of_graduation' => $request->exp_year_of_graduation,

                'country' => $request->country,
                'state_of_orgin' => $request->state_of_orgin,
                'lga' => $request->lga,
                'address' => $request->address,
            ]);
        }

        
        return true;
    }
 
}