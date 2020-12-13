<?php

namespace App\Repositories\Interfaces;

use Illuminate\Http\Request;


/**
 * Interface ScholarshipRepositoryInterface
 * @package App\Interfaces
 */
interface ScholarshipRepositoryInterface
{
   /**
    * Get all active scholarships
    */
   public function getAllActiveScholarships();

   /**
    * Get all scholarships
    */
   public function getAllScholarships();

   /**
    * Create Scholarship
    *@param Request 
    */
   public function createScholarship(Request $request);

   /**
    * @param $scholarship_id
    */
   public function getScholarship($scholarship_id);
}
