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
                        <li class="breadcrumb-item active">Manage Examinations </li>
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
                        <h5>Manage Examinations </h5><span>Manage, Edit and Delete scholarships exams here</span>
                        
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display" id="advance-1">
                                <thead>
                                    <tr>
                                        <th>Exam Name</th>
                                        <th>Exam Duration(Seconds)</th>
                                        <th>Exam Category</th>
                                        <th>Exam Status</th>
                                        <th>Number of Questions</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($exams as $exam )
                                    <tr>
                                        <td>{{$exam->name}}</td>
                                        <td>{{$exam->duration}}</td>
                                        <td>{{ucfirst($exam->category)}}</td>
                                        <td>{{$exam->is_active == 1? "Active" : "Not Active" }}</td>
                                        <td>{{$exam->questions->count()}}</td>
                                       
                                        <td>
                                            <div class="dropdown-basic">
                                                <div class="dropdown">
                                                    <div class="mb-0">

                                                        <div class="btn-group dropleft">
                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Actions
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a href="#" class="dropdown-item" title="">View Details</a>
                                                                <a href="#" class="dropdown-item" title="">Edit Exam Details</a>
                                                                <a href="#" class="dropdown-item" title="">View Exam Questions</a>
                                                                
                                                                <div class="dropdown-divider"></div>
                                                                <a href="#" class="dropdown-item" title="">Delete Exam</a>
                                                            </div>
                                                        </div>
   
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Exam Name</th>
                                        <th>Exam Duration(Seconds)</th>
                                        <th>Exam Category</th>
                                        <th>Exam Status</th>
                                        <th>Number of Questions</th>
                                        <th>Actions</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- DOM / jQuery  Ends-->

        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>
@endsection