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
                <div class="card">
                    <div class="job-search">
                        
                        <form class="form theme-form" method="POST" action="{{ route('student_profile') }}">
                            @csrf
                            <div class="card-body pb-0">
                            
                                <div class="job-description">
                                    <h6 class="mb-4">Personal Details </h6>
                                   
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput5">First Name:<span class="font-danger">*</span></label>
                                                    <input class="form-control" id="first_name" name="first_name" type="text" placeholder="First Name">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput5">Last Name:<span class="font-danger">*</span></label>
                                                    <input class="form-control" id="last_name" name="last_name" type="text" placeholder="Last Name">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput5">Email Address:<span class="font-danger">*</span></label>
                                                    <input class="form-control" id="email" name="email" type="email" placeholder="Email Address">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput5">Phone:<span class="font-danger">*</span></label>
                                                    <input class="form-control" id="phone" name="phone" type="tel" placeholder="Valid Phone Number">
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
                                                        <option value="university">University Student</option>
                                                        <option value="secondary">Secondary School Student</option>
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput5">School Name:<span class="font-danger">*</span></label>
                                                    <input class="form-control" id="school_name" name="school_name" type="text" placeholder="Your School Name">
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput5">Class or Level:<span class="font-danger">*</span></label>
                                                    <input class="form-control" id="level" name="level" type="text" placeholder="Year of Study">
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput5">Expected Year of Graduation:<span class="font-danger">*</span></label>
                                                    <input class="form-control" id="exp_year_of_graduation" name="exp_year_of_graduation" type="text" placeholder="Year of Graduation">
                                                </div>
                                            </div>

                                        </div>
                                        <hr>
                                        <h6 class="mb-0">Contact Address</h6>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput7">Country:<span class="font-danger">*</span></label>
                                                    <input class="form-control" id="country" name="country" type="text" placeholder="Country">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput7">State of Origin:<span class="font-danger">*</span></label>
                                                    <input class="form-control" id="state_of_orgin" name="state_of_orgin" type="text" placeholder="State of Origin">
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput8">LGA:<span class="font-danger">*</span></label>
                                                    <input class="form-control" id="lga" name="lga" type="text" placeholder="Local Govt of Origin">
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput8">Residential Address:<span class="font-danger">*</span></label>
                                                    <input class="form-control" id="address" name="address" type="text" placeholder="Residential Address">
                                                </div>
                                            </div>
                                        </div>

                                  
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <input class="btn btn-light" type="reset" value="Cancel">
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
