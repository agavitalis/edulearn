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
                        <li class="breadcrumb-item active">Manage Exam Queestion </li>
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
                        <h5>Manage an Exam Questions</h5><span>Select an Exam to View or Delete Questions</span>
                    </div>
                    @include('partials.admin.alert')
                    <div class="card-body">
                        <form method="POST" action="{{ route('manage_questions') }}"  enctype="multipart/form-data">
                            @csrf

                            <div class="row">

                                <div class="col-md-12 mb-3">
                                    <label for="validationCustom01">Select the exam, whose questions you intend to delete or manage?</label>

                                    <select class="form-control" name="exam" required>
                                        <option value="" selected>Select Exams</option>
                                        @foreach($exams as $exam)
                                        <option value="{{$exam->id}}">{{$exam->name}}</option>
                                        @endforeach
                                    </select>

                                </div>

                            </div>

                            <hr>
                            <div class="form-group text-right">
                                <a href="{{asset('UploadTemplateCBT.xlsx')}}" type="button" class="btn btn-outline-danger" value="">Delete Questions</a>
                                <button type="submit" class="btn btn-info" value="">Manage Questions</button>
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