<?php

namespace App\Repositories\Interfaces;

use Illuminate\Http\Request;


/**
 * Interface QuestionRepositoryInterface
 * @package App\Repositories\Interfaces
 */
interface QuestionRepositoryInterface
{
    /**
     * Get all active questions
     */
    public function getActiveExamQuestions($exam_id);

    /**
     * Get all questions
     */
    public function getAllExamQuestions($exam_id);

    /**
     * Upload Questions
     *@param Request 
     */
    public function uploadQuestions(Request $request);

    /**
     * @param $question_id
     */
    public function getQuestion($question_id);
}
