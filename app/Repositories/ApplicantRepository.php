<?php

namespace App\Repositories;

use App\Repositories\Interfaces\ApplicantRepositoryInterface;
use App\Models\Exam;
use App\Models\Scholarship;
use App\Models\WrittenExam;
use App\Models\SelectedQuestion;
use App\Models\Application;
use Carbon\Carbon;
use Illuminate\Http\Request;



class ApplicantRepository implements ApplicantRepositoryInterface
{
    /**
     * Get all applicants over time
     */
    public function getAllApplicants()
    {
        return Application::all();
    }

    /**
     * Get all applicants in a scholarship
     */
    public function getAllAppllicantsPerScholarship($scholarship_id)
    {
        return Application::where(['scholarship_id'=>$scholarship_id])->get();
    }

    
}
