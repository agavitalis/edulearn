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
            <div class="col-sm-10 offset-1 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h5>Manage Scholarships </h5><span>Manage, Edit and Delete registered scholarships here</span>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display" id="advance-1">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Application Fee(NGN)</th>

                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($scholarships as $scholarship )
                                    <tr>
                                        <td>{{$scholarship->name}}</td>
                                        <td>{{ucfirst($scholarship->category)}}</td>
                                        <td>{{$scholarship->application_fee}}</td>
                                        <td>{{\Carbon\Carbon::parse($scholarship->start_date)->diffForHumans()}}</td>
                                        <td>{{\Carbon\Carbon::parse($scholarship->end_date)->diffForHumans()}}</td>
                                        <td>
                                            <div class="btn-group dropleft">
                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Actions
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a href="#" class="dropdown-item" title="">View Details</a>
                                                    <a href="#" class="dropdown-item" title="">Edit Scholarship</a>

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
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Application Fee(NGN)</th>

                                        <th>Start Date</th>
                                        <th>End Date</th>
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