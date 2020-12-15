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
    <div class="container-fluid">
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
                            <p><span> Today's earrning is $405 & your sales increase rate is 3.7 over the
                                    last 24 hours</span></p>
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
                                        <h4>9<span class="new-box">applications</span></h4>
                                        <span>Number Of Scholarships Applied </span>
                                    </div>
                                    <div class="knob-block text-center">
                                        <input class="knob1" data-width="50" data-height="70" data-thickness=".3" data-fgcolor="#7366ff" data-linecap="round" data-angleoffset="0" value="100">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 alert-sec">
                        <div class="card bg-img">
                            <div class="card-header">
                                <div class="header-top">
                                    <h5 class="m-0">Alert </h5>
                                    <div class="dot-right-icon"><i class="fa fa-ellipsis-h"></i></div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="body-bottom">
                                    <h6> 10% off For drama lights Couslations...</h6><span class="font-roboto">Lorem Ipsum is simply dummy...It is a long
                                        established fact that a reader will be distracted by </span>
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
                                    <h5 class="m-0">Pending Exams</h5>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="appointment-table table-responsive">
                                    <table class="table table-bordernone">
                                        <tbody>
                                            <tr>
                                                <td><img class="img-fluid img-40 rounded-circle mb-3" src="https://admin.pixelstrap.com/cuba/assets/images/appointment/app-ent.jpg" alt="Image description">
                                                    <div class="status-circle bg-primary"></div>
                                                </td>
                                                <td class="img-content-box"><span class="d-block">Venter
                                                        Loren Scholarship</span><span class="font-roboto">11:00</span>
                                                </td>
                                               
                                                <td class="text-right">
                                                    <div class="button btn btn-primary">Start<i class="fa fa-check-circle ml-2"></i></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img class="img-fluid img-40 rounded-circle" src="https://admin.pixelstrap.com/cuba/assets/images/appointment/app-ent.jpg" alt="Image description">
                                                    <div class="status-circle bg-primary"></div>
                                                </td>
                                                <td class="img-content-box"><span class="d-block">John
                                                        Loren</span><span class="font-roboto">11:00</span>
                                                </td>
                                                
                                                <td class="text-right">
                                                    <div class="button btn btn-primary">Start<i class="fa fa-check-circle ml-2"></i></div>
                                                </td>
                                            </tr>
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
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>Latest Scholarships</h3>
                </div>

            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row second-chart-list third-news-update">
            <div class="col-xl-12 xl-60">
                <div class="row">
                    <div class="col-xl-6">
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
                                            <p class="mt-0">inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="blog-box blog-list row">
                                <div class="col-sm-5"><img class="img-fluid sm-100-w" src="https://admin.pixelstrap.com/cuba/assets/images/faq/2.jpg" alt=""></div>
                                <div class="col-sm-7">
                                    <div class="blog-details">
                                        <div class="blog-date"><span>10</span> March 2019</div>
                                        <h6>Web Development </h6>
                                        <div class="blog-bottom-content">
                                            <ul class="blog-social">
                                                <li>by: Petey Cruiser</li>
                                                <li>34 Hits</li>
                                            </ul>
                                            <hr>
                                            <p class="mt-0">inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit.</p>
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