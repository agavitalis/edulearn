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
                        <li class="breadcrumb-item active">Manage Applicants </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h5>Manage Applicants </h5><span>View, and Manage scholarship applicants here</span>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display" id="advance-1">
                                <thead>
                                    <tr>
                                        <th>Applicant Name</th>
                                        <th>Scholarship Name</th>
                                        <th>Category</th>
                                        <th>Application Fee</th>
                                        <th>Application End Date</th>
                                        <th>Number of Exams</th>
                                        <th>Number of Exams Taken</th>
                                        <th>Exam Average Score</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($applicants as $applicant )
                                    <tr>
                                        <td>{{$applicant->user->first_name}} {{$applicant->user->last_name}}</td>
                                        <td>{{$applicant->scholarship->name}}</td>
                                        <td>{{ucfirst($applicant->scholarship->category)}}</td>
                                        <td>{{$applicant->scholarship->application_fee}}</td>
                                        <td>{{\Carbon\Carbon::parse($applicant->scholarship->end_date)->diffForHumans()}}</td>
                                        <td>{{$applicant->scholarship->exams->count()}}</td>written_exams
                                        <td>{{$applicant->written_exams->count()}}</td>
                                        <td>{{$applicant->total_score}}</td>
                                        

                                        <td>
                                            <div class="btn-group dropleft">
                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Actions
                                                </button>
                                                <div class="dropdown-menu">
                                                    <!-- <a href="#" class="dropdown-item" title="">View Details</a>
                                                    <a href="#" class="dropdown-item" title="">Edit Scholarship</a> -->

                                                    <!-- <div class="dropdown-divider"></div> -->
                                                    <a href="#" class="dropdown-item" title="">Delete Applicant</a>
                                                </div>
                                            </div>
                                            
                                        </td>
                                    </tr>

                                    @endforeach
                                </tbody>
                                <tfoot>
                                    
                                    <tr>
                                        <th>Applicant Name</th>
                                        <th>Scholarship Name</th>
                                        <th>Category</th>
                                        <th>Application Fee</th>
                                        <th>Application End Date</th>
                                        <th>Number of Exams</th>
                                        <th>Number of Exams Taken</th>
                                        <th>Exam Average Score</th>
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