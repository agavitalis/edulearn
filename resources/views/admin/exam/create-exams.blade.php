@extends('layouts.admin')
@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>Examinations</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a>
                        </li>
                        <li class="breadcrumb-item">Admin</li>
                        <li class="breadcrumb-item active">Create an Examination</li>
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
                        <h5>Create a new Examination</h5><span>To Create a new exam, download our sample excel sheet and format your question using that format</span>
                    </div>
                    @include('partials.admin.alert')
                    <div class="card-body">
                        <form method="POST" action="{{ route('create_exams') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="validationCustom01">Exam Name</label>
                                    <input class="form-control" type="text"
                                        name="name" placeholder="Exam Name" required="">
                                </div>
                                
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="">Exam Time Duration in Seconds</label>
                                    <input class="form-control" id="" type="number" placeholder="Exam Duration"
                                        name="duration" required="">
                                    
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom01">This Exam is for?</label>
            
                                    <select class="form-control" name="category">
                                    
                                        <option value="university">University Students</option>
                                        <option value="secondary">Secondary School Students</option>
                                    
                                    </select>

                                </div>
                    
                               
                            </div>
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                   <label for="">Exam Descriptions</label>
                                   <div class="border border-dark" >
                                        <textarea class="form-control" id="editor1" name="description" cols="30" rows="10"> </textarea>
                                   </div>
                                   
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 mb-3">
                                   <label for="">Instructions To Students taking this exam</label>
                                   <div class="border border-dark" >
                                        <textarea class="form-control" id="editor2" name="instruction" cols="30" rows="10"> </textarea>
                                   </div>
                                   
                                </div>
                            </div>

                            <hr>
                            <div class="form-group text-right">
                        
                                <button type="submit" class="btn btn-primary " value="">Create Exam</button>
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