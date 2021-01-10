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
     * Update Exam
     *@param Request 
     */
    public function updateExamDetails(Request $request);

    /**
     * @param $exam_id
     */
    public function getExam($exam_id);

    /**
     * @param $scholarship_id
     */
    public function getScholarshipExams($scholarship_id);

    /**
     * @param $user_id, $exam_id, $application_id
     */
    public function createWrittenExam($user_id, $exam_id, $application_id);

    /**
     * @param $user_id, $exam_id, $application_id
     */
    public function getWrittenExam($user_id, $exam_id, $application_id);
    /**
     * @param $exam_id, $user_id, $written_exam_id
     * This selectes and get the selected questions
     */
    public function getQuestions($exam_id, $user_id, $written_exam_id);

    /**
     * @param $exam_id, $user_id, $written_exam_id
     */
    public function getSelectedQuestions($exam_id, $user_id, $written_exam_id);

    /**
     * Update Student Answer
     *@param Request 
     */
    public function updateStudentAnswer(Request $request);

     /**
     * End Exam
     *@param Request 
     */
    public function endExam(Request $request);

    /**
     * Get Written Exam Details
     *@param Request 
     */
    public function getWrittenExamDetails($written_exam_id);
}
