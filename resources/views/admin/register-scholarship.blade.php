@extends('layouts.admin')
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
                        <li class="breadcrumb-item">Admin</li>
                        <li class="breadcrumb-item active">Register Scholarship </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-10 offset-1 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h5>Register a new Scholarship</h5><span>Setup a new Scholarship here, fill out the forms with a short description about this scholarship</span>
                    </div>
                    @include('partials.admin.alert')
                    <div class="card-body">
                        <form method="POST" action="{{ route('register-scholarship') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="validationCustom01">Scholarship Name</label>
                                    <input class="form-control" type="text"
                                        name="name" placeholder="Scholarship Name" required="">
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom01">This Scholarship is for?</label>
            
                                    <select class="form-control" name="category">
                                    
                                        <option value="university">University Students</option>
                                        <option value="secondary">Secondary School Students</option>
                                    
                                    </select>

                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom01">Application Fee for this Scholarship</label>
                                    <input class="form-control" type="number"
                                        name="application_fee" placeholder="Scholarship Application Fee" required="">
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="">Application Starts On</label>
                                    <input class="form-control" id="" type="date" placeholder="Application Start Date"
                                        name="start_date" required="">
                                    
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">Applicatiion Ends On</label>
                                    <input class="form-control" id="" type="date" placeholder="Application End Date"
                                        name="end_date" required="">
                                   
                                </div>
                               
                            </div>
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                   <label for="">Description about this Scholarship</label>
                                   <div class="border border-dark" >
                                        <textarea class="form-control" id="editor1" name="description" cols="30" rows="10"> </textarea>
                                   </div>
                                   
                                </div>
                            </div>
                           
                            <hr>
                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-outline-primary" value="">Register Scholarshiip</button>
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