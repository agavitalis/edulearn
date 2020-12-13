@if(session('success'))
<div class="col-md-12">
    <div class="alert alert-success dark alert-dismissible fade show" role="alert"><strong>Success! &nbsp &nbsp </strong>{{ session('success') }}
        <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
    </div>
</div>
@endif

@if(session('warning'))
<div class="col-md-12">
    <div class="alert alert-warning dark alert-dismissible fade show" role="alert"><strong>Success! &nbsp &nbsp </strong> {{ session('warning') }}
        <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
    </div>
</div>
@endif

@if(session('errors'))
<div class="col-md-12">
    <div class="alert alert-danger dark alert-dismissible fade show" role="alert"><strong>Success! &nbsp &nbsp </strong> {{ session('errors') }}
        <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
    </div>
</div>
@endif