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
                                        <th>Time Duration</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                       
                                        <td>
                                            <div class="dropdown-basic">
                                                <div class="dropdown">
                                                    <div class="mb-0">
                                                        <button class="btn btn-primary btn-sm">Action
                                                            <span><i class="fa fa-arrow-down"></i></span>
                                                        </button>
                                                        <div class="dropdown-content">
                                                            <a href="#" data-original-title="" title="">View Details</a>
                                                            <a href="#" data-original-title="" title="">Edit Detaiils</a>
                                                            <a href="#" data-original-title="" title="">Download Questions</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a href="#" data-original-title="" title="">Delete Exam
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>


                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Exam Name</th>
                                        <th>Time Duration</th>
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