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
                                <div class="badge f-12"><i class="mr-1" data-feather="clock"></i><span id="txt"></span>
                                </div>
                                <div class="badge f-12"><i class="fa fa-spin fa-cog f-14"></i></div>
                            </div>
                        </div>
                        <div class="greeting-user text-center">
                            <div class="profile-vector"><img class="img-fluid"
                                    src="https://admin.pixelstrap.com/cuba/assets/images/dashboard/welcome.png" alt="">
                            </div>
                            <h4 class="f-w-600"><span id="greeting">Good Morning</span> <span class="right-circle"><i
                                        class="fa fa-check-circle f-14 middle"></i></span></h4>
                            <p><span> Welcome Edulearn Scholarship Hub! Here you manage and configure the behaviour of the system</span></p>
                            <div class="whatsnew-btn"><a class="btn btn-primary">My Small Office</a></div>
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
                                        <h4>{{$student_count}}<span class="new-box">Students</span></h4><span>Number Of
                                            Registered Students
                                            </span>
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
                                        <h4>{{$admin_count}}<span class="new-box">Admin</span></h4><span>Number Of
                                            Registered Admins
                                            </span>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
            <div class="col-xl-4 xl-50 box-col-6">
                <div class="col-sm-12">
                    <div class="card o-hidden">
                        <div class="bg-primary b-r-4 card-body">
                            <div class="media static-top-widget">
                                <div class="align-self-center text-center"><i data-feather="database"></i></div>
                                <div class="media-body"><span class="m-0">Number of Applicants</span>
                                    <h4 class="mb-0 counter">{{$applications_count}}</h4><i class="icon-bg" data-feather="database"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="card o-hidden">
                        <div class="bg-secondary b-r-4 card-body">
                            <div class="media static-top-widget">
                                <div class="align-self-center text-center"><i data-feather="shopping-bag"></i>
                                </div>
                                <div class="media-body"><span class="m-0">No of Scholarhips</span>
                                    <h4 class="mb-0 counter">{{$scholarships_count}}</h4><i class="icon-bg" data-feather="shopping-bag"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="card o-hidden">
                        <div class="bg-primary b-r-4 card-body">
                            <div class="media static-top-widget">
                                <div class="align-self-center text-center"><i data-feather="message-circle"></i>
                                </div>
                                <div class="media-body"><span class="m-0">No of Questions</span>
                                    <h4 class="mb-0 counter">{{$questions_count}}</h4><i class="icon-bg" data-feather="message-circle"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="card o-hidden">
                        <div class="bg-secondary b-r-4 card-body">
                            <div class="media static-top-widget">
                                <div class="align-self-center text-center"><i data-feather="user-plus"></i>
                                </div>
                                <div class="media-body"><span class="m-0">Number of Users</span>
                                    <h4 class="mb-0 counter">{{$user_count}}</h4><i class="icon-bg" data-feather="user-plus"></i>
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