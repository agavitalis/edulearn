@extends('layouts.admin')
@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>Exam Questions</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a>
                        </li>
                        <li class="breadcrumb-item">Admin</li>
                        <li class="breadcrumb-item active">Exam Questions </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">

            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Questions</h5><span>Exam Questions Starts Here</span>
                    </div>
                    @php
                    $question_counter = 1;
                    @endphp
                    @foreach($questions as $question)
                    <p>
                        <div class="card-body megaoptions-border-space-sm">
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
                                                        <input class="form-check-input answerRadio" type="radio" name="radio_{{$question_counter}}" data-id="{{$question->id}}" value="A" {{$question->answer == 'A'? 'checked': ''}}>
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
                                                        <input class="form-check-input answerRadio" type="radio" name="radio_{{$question_counter}}" data-id="{{$question->id}}" value="B" {{$question->answer == 'B'? 'checked': ''}} />
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
                                                        <input class="form-check-input answerRadio" type="radio" name="radio_{{$question_counter}}" data-id="{{$question->id}}" value="C" {{$question->answer == 'C'? 'checked': ''}}>
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
                                                        <input class="form-check-input answerRadio" type="radio" name="radio_{{$question_counter}}" data-id="{{$question->id}}" value="D" {{$question->answer == 'D'? 'checked': ''}}>
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
                        <div class="card-footer text-right">
                            <button class="btn btn-light m-r-15">Delete</button>
                            <button class="btn btn-primary">Edit</button>
                        </div>
                    </p>
                    <hr>
                    @php $question_counter ++; @endphp
                    @endforeach
                </div>
            </div>

        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>
@endsection