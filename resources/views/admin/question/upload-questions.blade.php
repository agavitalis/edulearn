@extends('layouts.admin')
@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>Examinations</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a>
                        </li>
                        <li class="breadcrumb-item">Admin</li>
                        <li class="breadcrumb-item active">Upload Exam Queestion an Examination</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-10 offset-1 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h5>Upload an Exam Question</h5><span>To Create a new exam, download our sample excel sheet and format your question using that format</span>
                    </div>
                    @include('partials.admin.alert')
                    <div class="card-body">
                        <form method="POST" action="{{ route('upload_questions') }}"  enctype="multipart/form-data">
                            @csrf

                            <div class="row">

                                <div class="col-md-12 mb-3">
                                    <label for="validationCustom01">Select the exam, whose questions you intend to upload?</label>

                                    <select class="form-control" name="exam" required>
                                        <option value="" selected>Select Exams</option>
                                        @foreach($exams as $exam)
                                        <option value="{{$exam->id}}">{{$exam->name}}</option>
                                        @endforeach
                                    </select>

                                </div>

                            </div>


                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="">Upload Questions<small>Questions should be in CSV or Excel format</small></label>
                                    <input class="form-control" accept=".csv,.xlsx,.xls" type="file" required="" name="questions">
                                    <small>Don't have an upload file? Download one here</small>

                                </div>

                            </div>

                            <hr>
                            <div class="form-group text-right">
                                <button type="button" class="btn btn-outline-info" value="">Download Sample Upload Template File</button>
                                <button type="submit" class="btn btn-primary " value="">Upload Questions</button>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>
@endsection