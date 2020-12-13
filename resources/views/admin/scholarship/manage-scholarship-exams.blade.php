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
                        <li class="breadcrumb-item active">Manage Scholarship </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h5>Register a new Scholarship</h5><span>Setup a new Scholarship here, fill out the forms with a
                            short description about this scholarship</span>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="validationCustom01">Scholarship Name</label>
                                    <input class="form-control" type="text" placeholder="Scholarship Name" required="">
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="validationCustom01">Select Exam to assign?</label>

                                    <select class="form-control">

                                        <option value="AL">City Exams</option>
                                        <option value="WY">Quantitative Reasoining </option>

                                    </select>

                                </div>
                               

                            </div>
                          
                            
                            <hr>
                            <div class="form-group text-right">
                                <button type="button" class="btn btn-outline-primary" value="">Assign
                                    Exam</button>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
            <div class="col-md-8 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h5>Manage Scholarship Exams </h5><span>Manage, Edit and Delete examinations assiged to scholarships here</span>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display" id="advance-1">
                                <thead>
                                    <tr>
                                        <th>Scholarship Name</th>
                                        <th>Exam Name</th>
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
                                                            <a href="#" data-original-title="" title="">Action</a>
                                                            <a href="#" data-original-title="" title="">Another
                                                                Action</a>
                                                            <a href="#" data-original-title="" title="">Something Else
                                                                Here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a href="#" data-original-title="" title="">Separated Link
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
                                        <th>Scholarship Name</th>
                                        <th>Exam Name</th>
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