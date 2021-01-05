@extends('layouts.admin')
@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>View Scholarship Applicants</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a>
                        </li>
                        <li class="breadcrumb-item">Admin</li>
                        <li class="breadcrumb-item active">View Applicants</li>
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
                        <h5>Select Scholarship to view Applicants</h5><span>View total Applicants</span>
                    </div>
                    @include('partials.admin.alert')
                    <div class="card-body">
                        <form method="POST" action="{{ route('get_all_appllicants_per_scholarship') }}">
                            @csrf                         
                            <div class="row">
                                
                                <div class="col-md-12 mb-3">
                                    <label for="validationCustom01">Select Scholarship</label>
            
                                    <select class="form-control" name="scholarship_id" required>
                                    
                                        <option value="" selected >Select Scholarship</option>
                                        @foreach($scholarships as $scholarship)
                                        <option value="{{$scholarship->id}}">{{$scholarship->name}}</option>
                                        @endforeach
                                    </select>

                                </div>                  
                               
                            </div>
                            
                            <hr>
                            <div class="form-group text-right">
                        
                                <button type="submit" class="btn btn-primary " value="">View Applicants</button>
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