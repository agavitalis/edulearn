@extends('layouts.admin')
@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>Scholarships</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a>
                        </li>
                        <li class="breadcrumb-item">Admin</li>
                        <li class="breadcrumb-item active">Manage Scholarship </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 mt-5 offset-2">
                <div class="card">
                    <div class="card-header">
                        <h5>Assign an Exam to a Scholarship</h5><span>Setup exams that applicants of this scholarship will take</span>
                    </div>
                    @include('partials.admin.alert')
                    <div class="card-body">
                        <form method="POST" action="{{ route('assign_exam_to_scholarship') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="validationCustom01">Select Scholarship to assign?</label>

                                    <select name="scholarship_id" class="form-control">

                                        <option value="" selected>Select Scholarship</option>
                                        @foreach($scholarships as $scholarship)
                                        <option value="{{$scholarship->id}}">{{$scholarship->name}} </option>
                                        @endforeach

                                    </select>

                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="validationCustom01">Select Exam to assign to the above Scholarship</label>

                                    <select name="exam_id" class="form-control">

                                        <option value="" selected>Select Exam</option>
                                        @foreach($exams as $exam)
                                        <option value="{{$exam->id}}">{{$exam->name}} </option>
                                        @endforeach

                                    </select>

                                </div>

                            </div>

                            <hr>
                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-primary" value="">Assign
                                    Exam</button>
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