<?php

namespace App\Repositories\Interfaces;

use Illuminate\Http\Request;


/**
 * Interface ApplicantsRepositoryInterface
 * @package App\Interfaces
 */
interface ApplicantRepositoryInterface
{
    /**
     * Get all applicants over time
     */
    public function getAllApplicants();

    /**
     * Get all applicants in a scholarship
     */
    public function getAllAppllicantsPerScholarship($scholarship_id);

    /**
     * Get a sholarship applicant
     */
    public function getAnApplicant($application_id);

}
