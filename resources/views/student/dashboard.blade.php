@extends('layouts.student')
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
                        <li class="breadcrumb-item">Student</li>
                        <li class="breadcrumb-item active">Dashboard </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid mt-5">
        <div class="row second-chart-list third-news-update">
            <div class="col-xl-4 col-lg-12 xl-50 morning-sec box-col-12">
                <div class="card o-hidden profile-greeting">
                    <div class="card-body">
                        <div class="media">
                            <div class="badge-groups w-100">
                                <div class="badge f-12"><i class="mr-1" data-feather="clock"></i><span id="txt"></span></div>
                                <div class="badge f-12"><i class="fa fa-spin fa-cog f-14"></i></div>
                            </div>
                        </div>
                        <div class="greeting-user text-center">
                            <div class="profile-vector"><img class="img-fluid" src="https://admin.pixelstrap.com/cuba/assets/images/dashboard/welcome.png" alt=""></div>
                            <h4 class="f-w-600"><span id="greeting">Good Morning</span> <span class="right-circle"><i class="fa fa-check-circle f-14 middle"></i></span></h4>
                            <p><span> Welcome to Edulearn Scholarship Hub. We help you achieve your academic dreams</span></p>
                            <div class="whatsnew-btn"><a class="btn btn-primary">Whats New !</a></div>
                            <div class="left-icon"><i class="fa fa-bell"> </i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 xl-50 appointment-sec box-col-6">
                <div class="row">
                    <div class="col-xl-12 xl-50 chart_data_right second">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center">
                                    <div class="media-body right-chart-content">
                                        <h4>{{$applications_count}}<span class="new-box">applications</span></h4>
                                        <span>Total Scholarships Applied </span>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 xl-50 chart_data_right second">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center">
                                    <div class="media-body right-chart-content">
                                        <h4>{{$scholarship_count}}<span class="new-box">Scholarships</span></h4>
                                        <span>Scholarships that you can apply </span>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
            <div class="col-xl-4 xl-50 appointment-sec box-col-6">
                <div class="row">
                    <div class="col-xl-12 appointment">
                        <div class="card">
                            <div class="card-header card-no-border">
                                <div class="header-top">
                                    <h5 class="m-0">Latest Scholarships</h5>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="appointment-table table-responsive">
                                    <table class="table table-bordernone">
                                        <tbody>
                                        @foreach($scholarships as $scholarship)
                                            <tr>
                                                <td><img class="img-fluid img-40 rounded-circle mb-3" src="https://admin.pixelstrap.com/cuba/assets/images/appointment/app-ent.jpg" alt="Image description">
                                                    <div class="status-circle bg-primary"></div>
                                                </td>
                                                <td class="img-content-box"><span class="d-block">{{$scholarship->name}}</span><span class="font-roboto">Application Closes: {{\Carbon\Carbon::parse($scholarship->end_date)->isoFormat('MMM Do YYYY')}}</span>
                                                </td>
                                               
                                                <td class="text-right">
                                                    <a href="/student/scholarship-application/{{$scholarship->id}}" class="button btn btn-primary">Apply Now<i class="fa fa-check-circle ml-2"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                            
                                        </tbody>
                                    </table>
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