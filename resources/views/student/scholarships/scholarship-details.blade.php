@extends('layouts.student')
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
                        <li class="breadcrumb-item">Student</li>
                        <li class="breadcrumb-item active">Scholarship Details </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">

            <div class="col-xl-10 xl-80 offset-1">
                <div class="card">
                    <div class="job-search">
                        <div class="card-body">
                        <img class="img-fluid w-100 h-25" height="200"
                                src="https://admin.pixelstrap.com/cuba/assets/images/faq/learning-1.png"
                                alt="blog-main">
                            <div class="media mt-5">
                                <div class="media-body">
                                    <h2 class="f-w-600">
                                        <a href="#">{{$scholarship->name}}</a>
                                        <span class="pull-right">
                                            <a href="/student/scholarship-application/{{$scholarship->id}}"  class="btn btn-primary" type="button">Apply for this Scholarship</a>
                                        </span>
                                    </h2>
                                    <h5>
                                        <a href="#">{{$scholarship->category}} Scholarships</a>
                                    </h5>
                                    <h6>{{\Carbon\Carbon::parse($scholarship->start_date)->isoFormat('MMM Do YYYY')}} - {{\Carbon\Carbon::parse($scholarship->end_date)->isoFormat('MMM Do YYYY')}}</h6>
                                    <p>{{$scholarship->application_fee}} NGN Application Fee</p>
                                </div>
                            </div>
                            <div class="job-description">
                                <h6>Scholarship Description</h6>
                                <p>{!! $scholarship->description !!}</p>
                            </div>
                            
                            <div class="job-description">
                                <button class="btn btn-light" type="button"><span><i class="fa fa-back"></i></span>
                                    Back</button>
                                <a href="/student/scholarship-application/{{$scholarship->id}}" class="btn btn-primary" type="button"><span>
                                    <i class="fa fa-check"></i></span>
                                    Apply Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>
@endsection