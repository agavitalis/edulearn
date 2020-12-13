<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\ExamRepositoryInterface;
use Maatwebsite\Excel\HeadingRowImport;
use App\Services\FileUpload;

class QuestionController extends Controller
{
    private $examRepository;

    public function __construct(ExamRepositoryInterface $examRepository)
    {
        $this->examRepository = $examRepository;
    }

    public function upload_questions(Request $request){

        if($request->isMethod('GET')){

            $exams = $this->examRepository->getAllExams();
            return view('admin.upload-questions',compact('exams'));
        }


        if($request->hasFile('questions')){

            //handle validation of excel data here
            $headings = (new HeadingRowImport)->toArray(request()->file('questions'));
            dd($headings);


            //FileUpload::uploadFile($request,'questions');

            
          

            return back()->with('success','Profile Picture Successfull Uploaded');

        }else{
            return back()->with('errors','Select a Profile Picture to Upload');
           
        }

       
        
    }
}
