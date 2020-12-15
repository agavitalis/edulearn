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
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="blog-box blog-list row">
                                <div class="col-sm-5"><img class="img-fluid sm-100-w" src="https://admin.pixelstrap.com/cuba/assets/images/faq/1.jpg" alt=""></div>
                                <div class="col-sm-7">
                                    <div class="blog-details">
                                        <div class="blog-date"><span>05</span> January 2019</div>
                                        <h6>Java Language </h6>
                                        <div class="blog-bottom-content">
                                            <ul class="blog-social">
                                                <li>by: Paige Turner</li>
                                                <li>15 Hits</li>
                                            </ul>
                                            <hr>
                                            <p class="mt-0">inventore veritatis et quasi architecto beatae vitae dicta
                                                sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit.</p>
                                        </div>
                                        <hr>
                                        <div class="job-description text-right">
                                            <button class="btn btn-light" type="button"><span><i class="fa fa-back"></i></span>
                                                View Details</button>
                                            <a class="btn btn-primary" href="scholarship-application/1"><span><i class="fa fa-check"></i></span>
                                                Apply</a>
                                        </div>
                                    </div>
                                </div>
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