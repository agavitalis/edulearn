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
                        <li class="breadcrumb-item">Student</li>
                        <li class="breadcrumb-item active">Examination Instructions </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
           
            <div class="col-xl-10 xl-60 offset-1">
                <div class="card pt-3">
                    @include('partials.admin.alert')
                    <div class="job-search">
                        <div class="card-body">
                            <div class="media"><img class="img-40 img-fluid m-r-20"
                                    src="https://admin.pixelstrap.com/cuba/assets/images/job-search/1.jpg" alt="">
                                <div class="media-body">
                                    <h3 class="f-w-600">
                                        <a href="#"> {{$exam->name}}</a>
                                        <span  class="pull-right">
                                            <a href="/student/examination/{{$exam->id}}" type="button" class="btn btn-primary" type="button">Start Exam</a>
                                        </span>
                                    </h3>
                                    <p>Category - {{$exam->category}}</p>
                                </div>
                            </div>
                            <div class="job-description">
                                <h6>Exam Description</h6>
                                <p>{!!$exam->description!!}</p>
                                
                            </div>
                            <div class="job-description">
                                <h6>Instructions </h6>
                                <p>{!!$exam->instruction!!}</p>
                            </div>
                           
                            <div class="job-description">
                                <a href="{{ URL::previous() }}" class="btn btn-danger" type="button"><span><i class="fa fa-tick"></i></span>
                                    Go Back</a>
                                <a href="/student/examination/{{$exam->id}}" class="btn btn-primary" type="button">
                                    <span><i  class="fa fa-check"></i></span> Start Exam
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