@extends('layouts.admin')
@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>Examination</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a>
                        </li>
                        <li class="breadcrumb-item">Student</li>
                        <li class="breadcrumb-item active">Examination Instructions </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
           
            <div class="col-xl-10 xl-60 offset-1">
                <div class="card">
                    <div class="job-search">
                        <div class="card-body">
                            <div class="media"><img class="img-40 img-fluid m-r-20"
                                    src="https://admin.pixelstrap.com/cuba/assets/images/job-search/1.jpg" alt="">
                                <div class="media-body">
                                    <h6 class="f-w-600"><a href="#">Verbal Reasoning instructions </a><span
                                            class="pull-right">
                                            <button class="btn btn-primary" type="button">Start Exam</button></span></h6>
                                    <p>Endless - United States<span><i class="fa fa-star font-warning"></i><i
                                                class="fa fa-star font-warning"></i><i
                                                class="fa fa-star font-warning"></i><i
                                                class="fa fa-star font-warning"></i><i
                                                class="fa fa-star font-warning"></i></span></p>
                                </div>
                            </div>
                            <div class="job-description">
                                <h6>Exam Description</h6>
                                <p>Endless is looking for a UI/UX Designer to join our team. The world is seeing an
                                    explosion in the amount and variety of location-baWe are looking for a versatile
                                    UX/UI Designer to join our growing design team. Our designers contribute to clients’
                                    projects at all stages of development. We might start from scratch, conducting user
                                    and stakeholder interviews, making personas and journey maps, and continue on to
                                    iterating on designs and prototypes through delivering final assets for launch. We
                                    might come into the middle of an in-flight program-size project and conduct analysis
                                    and usability correction or feature enhancement. We might provide research and
                                    vision for handoff to an internal development team.</p>
                                <!-- <p>Front-end web designers combine design, programming, writing and organizational skills in their work. They help shape the vision for a company's online content.</p>-->
                            </div>
                            <div class="job-description">
                                <h6>Instructions </h6>
                                <ul>
                                    <li>Have shipped multiple iOS, Android, and/or web products </li>
                                    <li>5+ years UI/UX experience</li>
                                    <li>Portfolio demonstrating mastery of native iOS, Android, and/or responsive web
                                        design principles</li>
                                    <li>Ability to autonomously pursue elegant solutions to open-ended problems</li>
                                    <li>Comfort with ambiguity</li>
                                    <li>Proven ability to create interactive prototypes</li>
                                    <li>Strong verbal communication skills with ability to clearly communicate complex
                                        ideas and champion a design vision across all levels of an organization</li>
                                    <li>Strong written communication skills with ability to make transparent design
                                        documentation and client-facing presentations</li>
                                    <li>Ability to create and maintain flow charts, wire frames, prototypes, and
                                        mockups.</li>
                                    <li>Ability to effectively work on more than one project at a time</li>
                                    <li>Experience conducting user research and stakeholder interviews</li>
                                    <li>Solid grasp of standard design tools, ex: Sketch, Omnigraffle, the Adobe Suite,
                                        Zeplin, etc.</li>
                                    <li>Bonus Considerations </li>
                                </ul>
                            </div>
                           
                            <div class="job-description">
                                <button class="btn btn-danger" type="button"><span><i class="fa fa-tick"></i></span>
                                    Go Back</button>
                                <button class="btn btn-primary" type="button"><span><i
                                            class="fa fa-check"></i></span> Start Exam</button>
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