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
            <div class="col-md-10 offset-1 mt-5">
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
                                        <th>Category</th>
                                        <th>Number of Exams Assigned</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($scholarships as $scholarship)
                                    <tr>
                                        <td>{{$scholarship->name}}</td>
                                        <td>{{$scholarship->category}}</td>
                                        <td>{{$scholarship->exams->count()}}</td>

                                        <td>
                                            <div class="btn-group dropleft">
                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Actions
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a href="#" class="dropdown-item" title="">View Exams Assigned</a>
                                                   
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item" title="">Delete</a>
                                                </div>
                                            </div>

                                        </td>
                                    </tr>
                                    @endforeach


                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Scholarship Name</th>
                                        <th>Category</th>
                                        <th>Number of Exams Assigned</th>
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