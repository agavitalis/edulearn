@extends('layouts.student')

@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>Profile</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a>
                        </li>
                        <li class="breadcrumb-item">Student</li>
                        <li class="breadcrumb-item active">Profile </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
           
            <div class="col-xl-10 offset-1 xl-80 mt-5">
                <div class="card pt-3">
                    @include('partials.admin.alert')
                    <div class="job-search">
                        
                        <form class="form theme-form" method="POST" action="{{ route('student_profile') }}">
                            @csrf
                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                            <div class="card-body pb-0">
                            
                                <div class="job-description">
                                    <h6 class="mb-4">Personal Details </h6>
                                   
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput5">First Name:<span class="font-danger">*</span></label>
                                                    <input class="form-control" value="{{Auth::user()->first_name}}" id="first_name" name="first_name" type="text" required placeholder="First Name">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput5">Last Name:<span class="font-danger">*</span></label>
                                                    <input class="form-control" value="{{Auth::user()->last_name}}" id="last_name" name="last_name" type="text" required placeholder="Last Name">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput5">Email Address:<span class="font-danger">*</span></label>
                                                    <input class="form-control"  value="{{Auth::user()->email}}" disabled id="email" name="email" type="email" required placeholder="Email Address">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput5">Phone:<span class="font-danger">*</span></label>
                                                    <input class="form-control" value="{{$studentProfile?->phone}}" id="phone" name="phone" type="tel" required placeholder="Valid Phone Number">
                                                </div>
                                            </div>

                                        </div>


                                        <hr>
                                        <h6 class="mb-0">Education Background</h6>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput5">I am a:<span class="font-danger">*</span></label>
                                                    <select class="form-control" id="category" name="category" required >
                                                        <option value="University">University Student</option>
                                                        <option value="Secondary School">Secondary School Student</option>
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput5">School Name:<span class="font-danger">*</span></label>
                                                    <input class="form-control" value="{{$studentProfile?->school_name}}" id="school_name" name="school_name" type="text" required placeholder="Your School Name">
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput5">Class or Level:<span class="font-danger">*</span></label>
                                                    <input class="form-control" value="{{$studentProfile?->level}}" id="level" name="level" type="text" required placeholder="Year of Study">
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput5">Expected Year of Graduation:<span class="font-danger">*</span></label>
                                                    <input class="form-control" value="{{$studentProfile?->exp_year_of_graduation}}" id="exp_year_of_graduation" required name="exp_year_of_graduation" type="text" placeholder="Year of Graduation">
                                                </div>
                                            </div>

                                        </div>
                                        <hr>
                                        <h6 class="mb-0">Contact Address</h6>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput7">Country:<span class="font-danger">*</span></label>
                                                    <input class="form-control" value="{{$studentProfile?->country}}" id="country" name="country" required type="text" placeholder="Country">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput7">State of Origin:<span class="font-danger">*</span></label>
                                                    <input class="form-control" value="{{$studentProfile?->state_of_orgin}}" id="state_of_orgin" required name="state_of_orgin" type="text" placeholder="State of Origin">
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput8">LGA:<span class="font-danger">*</span></label>
                                                    <input class="form-control" value="{{$studentProfile?->lga}}" id="lga" name="lga" type="text" required placeholder="Local Govt of Origin">
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput8">Residential Address:<span class="font-danger">*</span></label>
                                                    <input class="form-control" value="{{$studentProfile?->address}}" id="address" name="address" type="text" required placeholder="Residential Address">
                                                </div>
                                            </div>
                                        </div>

                                  
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <a href="{{ URL::previous()}}" class="btn btn-light mr-2" type="button">Cancel </a>
                                <button class="btn btn-primary" type="submit">Update MyProfile</button>
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
