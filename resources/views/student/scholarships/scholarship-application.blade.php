@extends('layouts.student')

@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>{{$scholarship->name}} Application Process</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a>
                        </li>
                        <li class="breadcrumb-item">Student</li>
                        <li class="breadcrumb-item active">Scholarship Application </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">

            <div class="col-xl-10 offset-md-1 xl-80">
                <div class="card">
                    <div class="job-search">
                        <div class="card-body pb-0">
                            <div class="media">
                                <div class="media-body">
                                    <h4 class="f-w-600">
                                        <a href="#">{{$scholarship->name}} Application Process</a>
                                    </h4>
                                    <p>Please update your profile to proceed</p>
                                </div>
                            </div>
                            <!-- Messages Update-->
                            <div class="col-md-12 update-successful d-none">
                                <div class="alert alert-success dark alert-dismissible fade show text-center" role="alert">
                                    <strong>Success! &nbsp </strong> <span class="success-message">Profile Update Completed, kindly wait while we finalize your application...<span>
                                    <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                            </div>
                            <div class="col-md-12 update-error d-none">
                                <div class="alert alert-danger dark alert-dismissible fade show text-center" role="alert">
                                    <strong>Success! &nbsp </strong> Your application cannot be completed, This Scholarship you selected doesnt match your academic Levels
                                    <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                            </div>

                            <div class="job-description">
                                <h6 class="mb-0">Personal Details </h6>
                                <form class="form theme-form">
                                    @csrf
                                    <input type="hidden" name="profile_id" id="profile_id" value="{{$studentProfile?->id}}">
                                    <input type="hidden" name="user_id" id="user_id" value="{{Auth::user()->id}}">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput5">First Name:<span class="font-danger">*</span></label>
                                                <input class="form-control" value="{{Auth::user()->first_name}}" id="first_name" name="first_name" type="text" placeholder="First Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput5">Last Name:<span class="font-danger">*</span></label>
                                                <input class="form-control" value="{{Auth::user()->last_name}}" id="last_name" name="last_name" type="text" placeholder="Last Name">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput5">Email Address:<span class="font-danger">*</span></label>
                                                <input class="form-control" value="{{Auth::user()->email}}" id="email" name="email" type="email" placeholder="Email Address">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput5">Phone:<span class="font-danger">*</span></label>
                                                <input class="form-control" value="{{$studentProfile?->phone}}" id="phone" name="phone" type="tel" placeholder="Valid Phone Number">
                                            </div>
                                        </div>

                                    </div>


                                    <hr>
                                    <h6 class="mb-0">Education Background</h6>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput5">I am a:<span class="font-danger">*</span></label>
                                                <select class="form-control" id="category" name="category">
                                                    <option value="University">University Student</option>
                                                    <option value="Secondary School">Secondary School Student</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput5">School Name:<span class="font-danger">*</span></label>
                                                <input class="form-control" value="{{$studentProfile?->school_name}}" id="school_name" name="school_name" type="text" placeholder="Your School Name">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput5">Class or Level:<span class="font-danger">*</span></label>
                                                <input class="form-control" value="{{$studentProfile?->level}}" id="level" name="level" type="text" placeholder="Year of Study">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput5">Expected Year of Graduation:<span class="font-danger">*</span></label>
                                                <input class="form-control" value="{{$studentProfile?->exp_year_of_graduation}}" id="exp_year_of_graduation" name="exp_year_of_graduation" type="text" placeholder="Year of Graduation">
                                            </div>
                                        </div>

                                    </div>
                                    <hr>
                                    <h6 class="mb-0">Contact Address</h6>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput7">Country:<span class="font-danger">*</span></label>
                                                <input class="form-control" value="{{$studentProfile?->country}}" id="country" name="country" type="text" placeholder="Country">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput7">State of Origin:<span class="font-danger">*</span></label>
                                                <input class="form-control" value="{{$studentProfile?->state_of_orgin}}" id="state_of_orgin" name="state_of_orgin" type="text" placeholder="State of Origin">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput8">LGA:<span class="font-danger">*</span></label>
                                                <input class="form-control" value="{{$studentProfile?->lga}}" id="lga" name="lga" type="text" placeholder="Local Govt of Origin">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput8">Residential Address:<span class="font-danger">*</span></label>
                                                <input class="form-control" value="{{$studentProfile?->address}}" id="address" name="address" type="text" placeholder="Residential Address">
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="scholarship_id" id="scholarship_id" value="{{$scholarship->id}}">
                                    <input type="hidden" name="application_fee"  id="application_fee" value="{{$scholarship->application_fee}}">

                                </form>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <a href="{{ URL::previous() }}" class="btn btn-light mr-2" type="reset" >Cancel</a>
                            <button class="btn btn-primary apply" type="button">Complete Application</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

</div>
@endsection
@section('scripts')
<script src="https://api.ravepay.co/flwv3-pug/getpaidx/api/flwpbf-inline.js"></script>
<script src="../../backend/student/scholarship-application.js"></script>
@endsection