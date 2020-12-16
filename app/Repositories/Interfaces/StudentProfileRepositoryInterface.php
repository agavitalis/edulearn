<?php

namespace App\Repositories\Interfaces;

use Illuminate\Http\Request;


/**
 * Interface StudentProfileRepositoryInterface
 * @package App\Interfaces
 */
interface StudentProfileRepositoryInterface
{
   /**
    * Get a student prrofile
    */
   public function getStudentProfile($user_id);

   /**
    * @param array $attributes
    */
    public function updateProfile(Request $request);
}
