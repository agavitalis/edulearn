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
                    <div class="card-header d-flex">
                        <div class="w-50">
                            <h5>Questions</h5><span>Exam Questions Starts Here</span>
                        </div>
                        <div class="w-50 text-right">
                            <h5>Time</h5>
                            <h6 class="text-danger">
                                <span id="minute">00</span>:<span id="second">00</span>
                            </h6>
                        </div>

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
                                                                <div class="media-body">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input answerRadio" type="radio" name="radio_{{$question_counter}}" data-id="{{$question->id}}" value="A" {{$question->student_answer == 'A'? 'checked': ''}}>
                                                                        <label class="form-check-label" for="{{$question->id}}">
                                                                            <h6 class="mt-0 mega-title-badge">Option A</h6>
                                                                        </label>
                                                                    </div>

                                                                    <p>{{$question->option_a}}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 xl-100">
                                                        <div class="card">
                                                            <div class="media p-20">

                                                                <div class="media-body">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input answerRadio" type="radio" name="radio_{{$question_counter}}" data-id="{{$question->id}}" value="B" {{$question->student_answer == 'B'? 'checked': ''}} />
                                                                        <label class="form-check-label" for="{{$question->id}}">
                                                                            <h6 class="mt-0 mega-title-badge">Option B</h6>
                                                                        </label>
                                                                    </div>
                                                                    <p>{{$question->option_b}}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 xl-100">
                                                        <div class="card">
                                                            <div class="media p-20">

                                                                <div class="media-body">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input answerRadio" type="radio" name="radio_{{$question_counter}}" data-id="{{$question->id}}" value="C" {{$question->student_answer == 'C'? 'checked': ''}}>
                                                                        <label class="form-check-label" for="{{$question->id}}">
                                                                            <h6 class="mt-0 mega-title-badge">Option C</h6>
                                                                        </label>
                                                                    </div>
                                                                    <p>{{$question->option_c}}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 xl-100">
                                                        <div class="card">
                                                            <div class="media p-20">

                                                                <div class="media-body">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input answerRadio" type="radio" name="radio_{{$question_counter}}" data-id="{{$question->id}}" value="D" {{$question->student_answer == 'D'? 'checked': ''}}>
                                                                        <label class="form-check-label" for="{{$question->id}}">
                                                                            <h6 class="mt-0 mega-title-badge">Option D</h6>
                                                                        </label>
                                                                    </div>
                                                                    <p>{{$question->option_d}}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        </p>

                                    </div>
                                    @php $question_counter ++; @endphp
                                    @endforeach
                                    @csrf
                                    <div class="mt-md-5 card-footer text-right">
                                        <button class="btn btn-light m-r-15" onclick="openPreviousTab()">Previous</button>
                                        <button class="btn btn-primary" onclick="openNextTab()">Next</button>
                                    </div>
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
<script src="../../backend/student/exam.js"></script>

<script>
    var endTime = new Date("{{$written_exam->finish_time}}").getTime();

    var x = setInterval(function() {

        var now = new Date().getTime();
        var t = endTime - now;
        var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((t % (1000 * 60)) / 1000);
        document.getElementById("minute").innerHTML = minutes;
        document.getElementById("second").innerHTML = seconds;
        if (t < 0) {
            clearInterval(x);
            document.getElementById("minute").innerHTML = '010';
            document.getElementById("second").innerHTML = '010';
        }
    }, 1000);
</script>

@endsection