@extends('layouts.student')
@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>My Application History</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a>
                        </li>
                        <li class="breadcrumb-item">Student</li>
                        <li class="breadcrumb-item active">Scholarship Application History</li>
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
                    @if($applications->count() > 0)
                    @foreach($applications as $application)
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="blog-box blog-list row">

                                <div class="col-sm-12">
                                    <div class="blog-details p-3">
                                        <div class="blog-date"><span>{{$application->scholarship->name}}</span></div>
                                        <h6>Category: {{ucfirst($application->scholarship->category)}} Scholarships </h6>
                                        <div class="blog-bottom-content">
                                            <ul class="blog-social">
                                                <li>Start Date: {{\Carbon\Carbon::parse($application->scholarship->end_date)->isoFormat('MMM Do YYYY')}}</li>
                                                <li>End Date: {{\Carbon\Carbon::parse($application->scholarship->end_date)->isoFormat('MMM Do YYYY')}} </li>
                                            </ul>

                                        </div>
                                        <hr>
                                        <div class="job-description">
                                            <a href="scholarship/{{$application->scholarship->id}}" class="btn btn-light btn-sm" type="button"><span><i class="fa fa-eye"></i></span>
                                                View Details</a>
                                            <a class="btn btn-info btn-sm" href="/student/application_success/{{$application->id}}"><span><i class="fa fa-print"></i></span>
                                                Payment Recipt</a>
                                            <a class="btn btn-primary btn-sm" href="/student/scholarship-exams/{{$application->scholarship->id}}_{{$application->id}}"><span><i class="fa fa-check"></i></span>
                                                Take Exams</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    @else
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card box-shadow-title">
                                    <div class="card-header">
                                        <h5>Opps</h5><span> seems you havn't applied for any scholarship yet!</span>
                                    </div>
                                    <div class="card-body row p-5">
                                        <div class="col-12">
                                            <h6 class="sub-title mt-0">Notice::</h6>
                                        </div>

                                        <div class="col-md-6 offset-md-3">
                                            <div class="shadow-lg p-25 shadow-showcase text-center">
                                                <h5 class="m-0 f-18">Scholarships that you applied for, will be displayed here.</h5>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endif


                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>
@endsection