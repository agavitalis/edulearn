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
        <div class="row">

            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Questions</h5><span>Exam Questions Starts Here</span>
                    </div>
                    <div class="card-body megaoptions-border-space-sm">
                        <form class="mega-inline">
                            <div class="row">
                                <div class="col-sm-12 xl-100">
                                    <div class="card">
                                        <div class="media p-20">

                                            <div class="media-body">
                                                <h6 class="mt-0 mega-title-badge">Question 1<span class="badge badge-primary pull-right">5 Points
                                                    </span></h6>
                                                <p>Estimated 14-20 Day Shipping ( Duties end taxes may be due upon
                                                    delivery Estimated 14-20 Day Shipping ( Duties end taxes may be due upon
                                                    delivery )</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-sm-6 xl-100">
                                    <div class="card">
                                        <div class="media p-20">
                                            <div class="radio radio-primary mr-3">
                                                <input id="radio19" type="radio" name="radio1" value="option1">
                                                <label for="radio19"></label>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mt-0 mega-title-badge">Option A</h6>
                                                <p>Estimated 14-20 Day Shipping ( Duties end taxes may be due upon
                                                    delivery )</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 xl-100">
                                    <div class="card">
                                        <div class="media p-20">
                                            <div class="radio radio-secondary mr-3">
                                                <input id="radio20" type="radio" name="radio1" value="option1">
                                                <label for="radio20"></label>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mt-0 mega-title-badge">Option B</h6>
                                                <p>Estimated 1 Day Shipping ( Duties end taxes may be due upon delivery
                                                    )</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 xl-100">
                                    <div class="card">
                                        <div class="media p-20">
                                            <div class="radio radio-secondary mr-3">
                                                <input id="radio21" type="radio" name="radio1" value="option1">
                                                <label for="radio21"></label>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mt-0 mega-title-badge">Option C</h6>
                                                <p>Estimated 3 Day Shipping ( Duties end taxes may be due upon delivery
                                                    )</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 xl-100">
                                    <div class="card">
                                        <div class="media p-20">
                                            <div class="radio radio-primary mr-3">
                                                <input id="radio22" type="radio" name="radio1" value="option1">
                                                <label for="radio22"></label>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mt-0 mega-title-badge">Option D </h6>
                                                <p>Estimated 15 Day Shipping ( Duties end taxes may be due upon delivery
                                                    )</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>
@endsection