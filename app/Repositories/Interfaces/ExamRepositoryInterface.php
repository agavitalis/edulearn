<?php

namespace App\Repositories\Interfaces;

use Illuminate\Http\Request;


/**
 * Interface ScholarshipRepositoryInterface
 * @package App\Interfaces
 */
interface ExamRepositoryInterface
{
   /**
    * Get all active scholarships
    */
   public function getAllActiveExams();

   /**
    * Get all scholarships
    */
   public function getAllExams();

   /**
    * Create Scholarship
    *@param Request 
    */
   public function createExam(Request $request);

   /**
    * @param $scholarship_id
    */
   public function getExam($exam_id);
}
