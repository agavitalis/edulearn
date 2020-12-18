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
     * Get all active Exams
     */
    public function getAllActiveExams();

    /**
     * Get all Exams
     */
    public function getAllExams();

    /**
     * Create Exam
     *@param Request 
     */
    public function createExam(Request $request);

    /**
     * @param $exam_id
     */
    public function getExam($exam_id);

    /**
     * @param $scholarship_id
     */
    public function getScholarshipExams($scholarship_id);

    /**
     * @param $scholarship_id
     */
    public function getQuestions($scholarship_id);
}
