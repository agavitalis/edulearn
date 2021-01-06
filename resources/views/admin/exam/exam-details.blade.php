@extends('layouts.admin')
@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>Dashboard</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a>
                        </li>
                        <li class="breadcrumb-item">Admin</li>
                        <li class="breadcrumb-item active">Exam Details </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">

            <div class="col-sm-12">
                <div class="card">
                    <div class="job-search">
                        <div class="card-body">
                            <div class="media"><img class="img-40 img-fluid m-r-20" src="https://admin.pixelstrap.com/cuba/assets/images/job-search/1.jpg" alt="">
                                <div class="media-body">
                                    <h3 class="f-w-600">
                                        <a href="#"> {{$exam->name}}</a>
                                        <span class="pull-right">
                                            <button class="btn btn-primary" type="button">Duration- {{$exam->duration}}</button>
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


                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>
@endsection