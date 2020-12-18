@extends('layouts.student')
@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>Dashboard</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"> <i data-feather="1"></i></a>
                        </li>
                        <li class="breadcrumb-item">Admin</li>
                        <li class="breadcrumb-item active">Dashboard </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 xl-100">
                <div class="card">
                    <div class="card-header">
                        <h5>Questions</h5><span>Exam Questions Starts Here</span>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-2 col-xs-12 d-none d-sm-block">
                                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    @php
                                    $counter = 1;
                                    @endphp
                                    @foreach($questions as $question)
                                    <a class="nav-link mb-2 {{$counter == 1? 'active' : ''}}" id="v-pills-{{$counter}}-tab" data-toggle="pill" href="#v-pills-{{$counter}}" role="tab" aria-controls="v-pills-{{$counter}}" aria-selected="true">Question {{$counter}}</a>

                                    @php $counter ++; @endphp
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-sm-10 col-xs-12">
                                <div class="tab-content" id="v-pills-tabContent">
                                    @php
                                    $question_counter = 1;
                                    @endphp
                                    @foreach($questions as $question)
                                    <div class="tab-pane fade {{$question_counter == 1? 'show active' : ''}}" id="v-pills-{{$question_counter}}" role="tabpanel" aria-labelledby="v-pills-{{$question_counter}}-tab">
                                        <p>
                                            <div class="megaoptions-border-space-sm">
                                                <form class="mega-inline">
                                                    <div class="row">
                                                        <div class="col-sm-12 xl-100">
                                                            <div class="card">
                                                                <div class="media p-20">

                                                                    <div class="media-body">
                                                                        <h6 class="mt-0 mega-title-badge">Question {{$question_counter}}<span class="badge badge-primary pull-right">1
                                                                                Point
                                                                            </span></h6>
                                                                        <p>{{$question->question}}</p>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="col-sm-6 xl-100">
                                                            <div class="card">
                                                                <div class="media p-20">
                                                                    <div class="radio radio-primary mr-3">
                                                                        <input id="radio19" type="radio" name="radio_{{$question_counter}}" value="A">
                                                                        <label for="radio19"></label>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <h6 class="mt-0 mega-title-badge">Option A</h6>
                                                                        <p>{{$question->option_a}}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 xl-100">
                                                            <div class="card">
                                                                <div class="media p-20">
                                                                    <div class="radio radio-secondary mr-3">
                                                                        <input id="radio20" type="radio" name="radio_{{$question_counter}}" value="B">
                                                                        <label for="radio20"></label>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <h6 class="mt-0 mega-title-badge">Option B</h6>
                                                                        <p>{{$question->option_b}}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 xl-100">
                                                            <div class="card">
                                                                <div class="media p-20">
                                                                    <div class="radio radio-secondary mr-3">
                                                                        <input id="radio21" type="radio" name="radio_{{$question_counter}}" value="C">
                                                                        <label for="radio21"></label>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <h6 class="mt-0 mega-title-badge">Option C</h6>
                                                                        <p>{{$question->option_c}}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 xl-100">
                                                            <div class="card">
                                                                <div class="media p-20">
                                                                    <div class="radio radio-primary mr-3">
                                                                        <input id="radio22" type="radio" name="radio_{{$question_counter}}" value="D">
                                                                        <label for="radio22"></label>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <h6 class="mt-0 mega-title-badge">Option D </h6>
                                                                        <p>{{$question->option_d}}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </p>
                                        <div class="card-footer text-right">
                                            <button class="btn btn-light m-r-15" onclick="openPreviousTab()">Previous</button>
                                            <button class="btn btn-primary" onclick="openNextTab()">Next</button>
                                        </div>
                                    </div>
                                    @php $question_counter ++; @endphp
                                    @endforeach
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>
@endsection
@section('scripts')
<script>
    function openNextTab() {

        let str = $('.tab-pane.active').attr('id')
        let res = str.split("-");
        let id = Number(res[2]) + 1

        if (id > 4) {
            id = 4
        }

        $(`#v-pills-tab a[href="#v-pills-${id}"]`).tab('show') // Select tab by name
    }

    function openPreviousTab() {

        let str = $('.tab-pane.active').attr('id')
        let res = str.split("-");
        let id = Number(res[2]) - 1

        if (id < 1) {
            id = 1
        }

        $(`#v-pills-tab a[href="#v-pills-${id}"]`).tab('show') // Select tab by name
    }
</script>

@endsection