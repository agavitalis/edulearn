<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\ExamRepositoryInterface;
use App\Repositories\Interfaces\QuestionRepositoryInterface;
use Maatwebsite\Excel\HeadingRowImport;
use App\Services\FileUpload;

class QuestionController extends Controller
{
    private $examRepository;
    private $questionRepository;

    public function __construct(ExamRepositoryInterface $examRepository, QuestionRepositoryInterface $questionRepository)
    {
        $this->examRepository = $examRepository;
        $this->questionRepository = $questionRepository;
    }

    public function upload_questions(Request $request)
    {

        if ($request->isMethod('GET')) {

            $exams = $this->examRepository->getAllExams();
            return view('admin.question.upload-questions', compact('exams'));
        }


        if ($request->hasFile('questions')) {

            //handle validation of excel data here
            $given_headings = (new HeadingRowImport)->toArray(request()->file('questions'));
           
            $expected_headings = array(
                0 => "question",
                1 => "option_a",
                2 => "option_b",
                3 => "option_c",
                4 => "option_d",
                5 => "answer",
            );
           
            $missingValues = array_diff($expected_headings, $given_headings[0][0]);
            if(!empty($missingValues)){

                $missing_heading = "";
                foreach($missingValues as $item) {
                    $missing_heading = $item;
                }
                return back()->with('errors', $missing_heading.' is not found in the excel headers, Use our sample upload sheet to upload');
            }
            
            $this->questionRepository->uploadQuestions($request);
            return back()->with('success', 'Questions successfully uploaded');
            //FileUpload::uploadFile($request,'questions');
        } else {
            return back()->with('errors', 'A question file was not found');
        }
    }

    public function manage_questions(Request $request){

        if ($request->isMethod('GET')) {
            $exams = $this->examRepository->getAllExams();
            return view('admin.question.manage-questions-form', compact('exams'));
        }
    }
}
