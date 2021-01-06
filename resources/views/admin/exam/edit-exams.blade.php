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
                        <li class="breadcrumb-item active">Edit Examination Details</li>
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
                        <h5>Edit Examination Details</h5><span>Here Edit this exam details, Exam Instructions, Descriptions and Timing</span>
                    </div>
                    @include('partials.admin.alert')
                    <div class="card-body">
                        <form method="POST" action="{{ route('edit_exam') }}">
                            @csrf
                            <input type="hidden" name="exam_id" value="{{$exam->id}}">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="validationCustom01">Exam Name</label>
                                    <input class="form-control" type="text"
                                        name="name" placeholder="Exam Name" required="" value="{{$exam->name}}" >
                                </div>
                                
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="">Exam Time Duration in Seconds</label>
                                    <input class="form-control" id="" type="number" placeholder="Exam Duration"
                                        name="duration" required="" value="{{$exam->duration}}" >
                                    
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom01">This Exam is for?</label>
            
                                    <select class="form-control" name="category">
                                        <option value="{{$exam->category}}" selected>{{$exam->category}} Students</option>
                                        <option value="University">University Students</option>
                                        <option value="Secondary School">Secondary School Students</option>
                                    </select>

                                </div>
                    
                               
                            </div>
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="validationCustom01">Number of Questions in Exam</label>
                                    <input class="form-control" type="text"
                                        name="number_of_questions" placeholder="Number of Questions in this Exam" required="" value="{{$exam->number_of_questions}}">
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                   <label for="">Exam Descriptions</label>
                                   <div class="border border-dark" >
                                        <textarea class="form-control" id="editor1" name="description" cols="30" rows="10"> {{$exam->description}} </textarea>
                                   </div>
                                   
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 mb-3">
                                   <label for="">Instructions To Students taking this exam</label>
                                   <div class="border border-dark" >
                                        <textarea class="form-control" id="editor2" name="instruction" cols="30" rows="10"> {{$exam->instruction}} </textarea>
                                   </div>
                                   
                                </div>
                            </div>

                            <hr>
                            <div class="form-group text-right">
                        
                                <button type="submit" class="btn btn-primary " value="">Update Exam Details</button>
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