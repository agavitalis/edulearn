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
                        <li class="breadcrumb-item active">Avaliable Scholarships</li>
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
                    @foreach($scholarships as $scholarship)
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="blog-box blog-list row">
                                <div class="col-sm-5"><img class="img-fluid sm-100-w" src="https://admin.pixelstrap.com/cuba/assets/images/faq/1.jpg" alt=""></div>
                                <div class="col-sm-7">
                                    <div class="blog-details py-3">
                                        <div class="blog-date"><span>{{$scholarship->name}}</span></div>
                                        <h6>Category: {{ucfirst($scholarship->category)}} Scholarships </h6>
                                        <div class="blog-bottom-content">
                                            <ul class="blog-social">
                                                <li>Start Date: {{\Carbon\Carbon::parse($scholarship->end_date)->isoFormat('MMM Do YYYY')}}</li>
                                                <li>End Date: {{\Carbon\Carbon::parse($scholarship->end_date)->isoFormat('MMM Do YYYY')}} </li>
                                            </ul>
                                            <hr>
                                            <p class="mt-0">
                                                {!! substr($scholarship->description , 0, 250)!!}
                                            </p>
                                        </div>
                                        <hr>
                                        <div class="job-description text-right">
                                            <a href="scholarship/{{$scholarship->id}}" class="btn btn-light" type="button"><span><i class="fa fa-back"></i></span>
                                                View Details</a>
                                            <a class="btn btn-primary" href="scholarship-application/1"><span><i class="fa fa-check"></i></span>
                                                Apply</a>
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