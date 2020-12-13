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
    <div class="container-fluid">
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
                                        <h4>$95,000<span class="new-box">New</span></h4><span>Number Of
                                            Scholarships Applied
                                            Value</span>
                                    </div>
                                    <div class="knob-block text-center">
                                        <input class="knob1" data-width="50" data-height="70" data-thickness=".3"
                                            data-fgcolor="#7366ff" data-linecap="round" data-angleoffset="0"
                                            value="100">
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
                                    <h6> 10% off For drama lights Couslations...</h6><span class="font-roboto">Lorem
                                        Ipsum is simply dummy...It is a long
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
                                    <h5 class="m-0">appointment</h5>
                                    <div class="card-header-right-icon">
                                        <select class="button btn btn-primary">
                                            <option>Today</option>
                                            <option>Tomorrow</option>
                                            <option>Yesterday</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="appointment-table table-responsive">
                                    <table class="table table-bordernone">
                                        <tbody>
                                            <tr>
                                                <td><img class="img-fluid img-40 rounded-circle mb-3"
                                                        src="https://admin.pixelstrap.com/cuba/assets/images/appointment/app-ent.jpg"
                                                        alt="Image description">
                                                    <div class="status-circle bg-primary"></div>
                                                </td>
                                                <td class="img-content-box"><span class="d-block">Venter
                                                        Loren</span><span class="font-roboto">Now</span>
                                                </td>
                                                <td>
                                                    <p class="m-0 font-primary">28 Sept</p>
                                                </td>
                                                <td class="text-right">
                                                    <div class="button btn btn-primary">Done<i
                                                            class="fa fa-check-circle ml-2"></i></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img class="img-fluid img-40 rounded-circle"
                                                        src="https://admin.pixelstrap.com/cuba/assets/images/appointment/app-ent.jpg"
                                                        alt="Image description">
                                                    <div class="status-circle bg-primary"></div>
                                                </td>
                                                <td class="img-content-box"><span class="d-block">John
                                                        Loren</span><span class="font-roboto">11:00</span>
                                                </td>
                                                <td>
                                                    <p class="m-0 font-primary">22 Sept</p>
                                                </td>
                                                <td class="text-right">
                                                    <div class="button btn btn-danger">Pending<i
                                                            class="fa fa-check-circle ml-2"></i></div>
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

            <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden">
                    <div class="bg-primary b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="align-self-center text-center"><i data-feather="database"></i></div>
                            <div class="media-body"><span class="m-0">Earnings</span>
                                <h4 class="mb-0 counter">6659</h4><i class="icon-bg" data-feather="database"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden">
                    <div class="bg-secondary b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="align-self-center text-center"><i data-feather="shopping-bag"></i>
                            </div>
                            <div class="media-body"><span class="m-0">Products</span>
                                <h4 class="mb-0 counter">9856</h4><i class="icon-bg" data-feather="shopping-bag"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden">
                    <div class="bg-primary b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="align-self-center text-center"><i data-feather="message-circle"></i>
                            </div>
                            <div class="media-body"><span class="m-0">Messages</span>
                                <h4 class="mb-0 counter">893</h4><i class="icon-bg" data-feather="message-circle"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden">
                    <div class="bg-primary b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="align-self-center text-center"><i data-feather="user-plus"></i>
                            </div>
                            <div class="media-body"><span class="m-0">New User</span>
                                <h4 class="mb-0 counter">45631</h4><i class="icon-bg" data-feather="user-plus"></i>
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