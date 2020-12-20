@extends('layouts.student')
@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>Scholarship Exams for Rochas Okorocha Scholarship</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a>
                        </li>
                        <li class="breadcrumb-item">Student</li>
                        <li class="breadcrumb-item active">Scholarship Exams</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-10 xl-80 offset-1 mt-5">
                <div class="row">
                    @foreach($exams as $exam)
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="blog-box blog-list row">
                               
                                <div class="col-sm-12">
                                    <div class="blog-details p-3">
                                        <div class="blog-date"><span>{{$exam->name}}</span></div>
                                        <h6>Category: {{ucfirst($exam->category)}} Scholarships </h6>
                                        <div class="blog-bottom-content">
                                            <ul class="blog-social">
                                                <li>Number of Questions: {{ $exam->number_of_questions }}</li>
                                                <li>Durations: {{ $exam->duration }} </li>
                                            </ul>
                                            
                                        </div>
                                        <hr>
                                        <div class="job-description">
                                           
                                            <a class="btn btn-primary btn-sm" href="/student/exam-instructions/{{$exam->id}}"><span><i class="fa fa-check"></i></span>
                                                Read Instuctions</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>
@endsection