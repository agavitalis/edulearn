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

   /**
    * Adding an Exam to a Scholarship
    *@param Request 
    */
    public function assignExamToScholarship(Request $request);

    /**
    * get Scholarships and the exams attached
    */
    public function examAssignedToScholarships();
   
    /**
    * apply for scholarship with the needed parmas
    */
    public function applyForScholarship(Request $request);

    /**
    * get all my scholarship applications
    */
    public function myApplications($user_id);

    /**
    * Get all Applications
    */
   public function getAllApplications();
}
