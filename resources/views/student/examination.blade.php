@extends('layouts.admin')
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
                                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                    aria-orientation="vertical">

                                    <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1"
                                        role="tab" aria-controls="v-pills-1" aria-selected="true">Question 1</a>

                                    <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2"
                                        role="tab" aria-controls="v-pills-2" aria-selected="false">Question 2</a>

                                    <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3"
                                        role="tab" aria-controls="v-pills-3" aria-selected="false">Question 3</a>

                                    <a class="nav-link" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4"
                                        role="tab" aria-controls="v-pills-4" aria-selected="false">Question 4</a>

                                </div>
                            </div>
                            <div class="col-sm-10 col-xs-12">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel"
                                        aria-labelledby="v-pills-1-tab">
                                        <p>
                                        <div class="megaoptions-border-space-sm">
                                            <form class="mega-inline">
                                                <div class="row">
                                                    <div class="col-sm-12 xl-100">
                                                        <div class="card">
                                                            <div class="media p-20">

                                                                <div class="media-body">
                                                                    <h6 class="mt-0 mega-title-badge">Question 1<span
                                                                            class="badge badge-primary pull-right">5
                                                                            Points
                                                                        </span></h6>
                                                                    <p>Estimated 14-20 Day Shipping ( Duties end taxes
                                                                        may be due upon
                                                                        delivery Estimated 14-20 Day Shipping ( Duties
                                                                        end taxes may be due
                                                                        upon
                                                                        delivery )</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-sm-6 xl-100">
                                                        <div class="card">
                                                            <div class="media p-20">
                                                                <div class="radio radio-primary mr-3">
                                                                    <input id="radio19" type="radio" name="radio1"
                                                                        value="option1">
                                                                    <label for="radio19"></label>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="mt-0 mega-title-badge">Option A</h6>
                                                                    <p>Estimated 14-20 Day Shipping ( Duties end taxes
                                                                        may be due upon
                                                                        delivery )</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 xl-100">
                                                        <div class="card">
                                                            <div class="media p-20">
                                                                <div class="radio radio-secondary mr-3">
                                                                    <input id="radio20" type="radio" name="radio1"
                                                                        value="option1">
                                                                    <label for="radio20"></label>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="mt-0 mega-title-badge">Option B</h6>
                                                                    <p>Estimated 1 Day Shipping ( Duties end taxes may
                                                                        be due upon delivery
                                                                        )</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 xl-100">
                                                        <div class="card">
                                                            <div class="media p-20">
                                                                <div class="radio radio-secondary mr-3">
                                                                    <input id="radio21" type="radio" name="radio1"
                                                                        value="option1">
                                                                    <label for="radio21"></label>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="mt-0 mega-title-badge">Option C</h6>
                                                                    <p>Estimated 3 Day Shipping ( Duties end taxes may
                                                                        be due upon delivery
                                                                        )</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 xl-100">
                                                        <div class="card">
                                                            <div class="media p-20">
                                                                <div class="radio radio-primary mr-3">
                                                                    <input id="radio22" type="radio" name="radio1"
                                                                        value="option1">
                                                                    <label for="radio22"></label>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="mt-0 mega-title-badge">Option D </h6>
                                                                    <p>Estimated 15 Day Shipping ( Duties end taxes may
                                                                        be due upon delivery
                                                                        )</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        </p>
                                        <div class="card-footer text-right">
                                            <button class="btn btn-light m-r-15"
                                                onclick="openPreviousTab()">Previous</button>
                                            <button class="btn btn-primary" onclick="openNextTab()">Next</button>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-2" role="tabpanel"
                                        aria-labelledby="v-pills-2-tab">
                                        <p>
                                        <div class="megaoptions-border-space-sm">
                                            <form class="mega-inline">
                                                <div class="row">
                                                    <div class="col-sm-12 xl-100">
                                                        <div class="card">
                                                            <div class="media p-20">

                                                                <div class="media-body">
                                                                    <h6 class="mt-0 mega-title-badge">Question 2<span
                                                                            class="badge badge-primary pull-right">5
                                                                            Points
                                                                        </span></h6>
                                                                    <p>Estimated 14-20 Day Shipping ( Duties end taxes
                                                                        may be due upon
                                                                        delivery Estimated 14-20 Day Shipping ( Duties
                                                                        end taxes may be due
                                                                        upon
                                                                        delivery )</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-sm-6 xl-100">
                                                        <div class="card">
                                                            <div class="media p-20">
                                                                <div class="radio radio-primary mr-3">
                                                                    <input id="radio19" type="radio" name="radio1"
                                                                        value="option1">
                                                                    <label for="radio19"></label>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="mt-0 mega-title-badge">Option A</h6>
                                                                    <p>Estimated 14-20 Day Shipping ( Duties end taxes
                                                                        may be due upon
                                                                        delivery )</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 xl-100">
                                                        <div class="card">
                                                            <div class="media p-20">
                                                                <div class="radio radio-secondary mr-3">
                                                                    <input id="radio20" type="radio" name="radio1"
                                                                        value="option1">
                                                                    <label for="radio20"></label>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="mt-0 mega-title-badge">Option B</h6>
                                                                    <p>Estimated 1 Day Shipping ( Duties end taxes may
                                                                        be due upon delivery
                                                                        )</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 xl-100">
                                                        <div class="card">
                                                            <div class="media p-20">
                                                                <div class="radio radio-secondary mr-3">
                                                                    <input id="radio21" type="radio" name="radio1"
                                                                        value="option1">
                                                                    <label for="radio21"></label>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="mt-0 mega-title-badge">Option C</h6>
                                                                    <p>Estimated 3 Day Shipping ( Duties end taxes may
                                                                        be due upon delivery
                                                                        )</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 xl-100">
                                                        <div class="card">
                                                            <div class="media p-20">
                                                                <div class="radio radio-primary mr-3">
                                                                    <input id="radio22" type="radio" name="radio1"
                                                                        value="option1">
                                                                    <label for="radio22"></label>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="mt-0 mega-title-badge">Option D </h6>
                                                                    <p>Estimated 15 Day Shipping ( Duties end taxes may
                                                                        be due upon delivery
                                                                        )</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        </p>
                                        <div class="card-footer text-right">
                                            <button class="btn btn-light m-r-15"
                                                onclick="openPreviousTab()">Previous</button>
                                            <button class="btn btn-primary" onclick="openNextTab()">Next</button>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-3" role="tabpanel"
                                        aria-labelledby="v-pills-3-tab">
                                        <p>
                                        <div class="megaoptions-border-space-sm">
                                            <form class="mega-inline">
                                                <div class="row">
                                                    <div class="col-sm-12 xl-100">
                                                        <div class="card">
                                                            <div class="media p-20">

                                                                <div class="media-body">
                                                                    <h6 class="mt-0 mega-title-badge">Question 3<span
                                                                            class="badge badge-primary pull-right">5
                                                                            Points
                                                                        </span></h6>
                                                                    <p>Estimated 14-20 Day Shipping ( Duties end taxes
                                                                        may be due upon
                                                                        delivery Estimated 14-20 Day Shipping ( Duties
                                                                        end taxes may be due
                                                                        upon
                                                                        delivery )</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-sm-6 xl-100">
                                                        <div class="card">
                                                            <div class="media p-20">
                                                                <div class="radio radio-primary mr-3">
                                                                    <input id="radio19" type="radio" name="radio1"
                                                                        value="option1">
                                                                    <label for="radio19"></label>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="mt-0 mega-title-badge">Option A</h6>
                                                                    <p>Estimated 14-20 Day Shipping ( Duties end taxes
                                                                        may be due upon
                                                                        delivery )</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 xl-100">
                                                        <div class="card">
                                                            <div class="media p-20">
                                                                <div class="radio radio-secondary mr-3">
                                                                    <input id="radio20" type="radio" name="radio1"
                                                                        value="option1">
                                                                    <label for="radio20"></label>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="mt-0 mega-title-badge">Option B</h6>
                                                                    <p>Estimated 1 Day Shipping ( Duties end taxes may
                                                                        be due upon delivery
                                                                        )</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 xl-100">
                                                        <div class="card">
                                                            <div class="media p-20">
                                                                <div class="radio radio-secondary mr-3">
                                                                    <input id="radio21" type="radio" name="radio1"
                                                                        value="option1">
                                                                    <label for="radio21"></label>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="mt-0 mega-title-badge">Option C</h6>
                                                                    <p>Estimated 3 Day Shipping ( Duties end taxes may
                                                                        be due upon delivery
                                                                        )</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 xl-100">
                                                        <div class="card">
                                                            <div class="media p-20">
                                                                <div class="radio radio-primary mr-3">
                                                                    <input id="radio22" type="radio" name="radio1"
                                                                        value="option1">
                                                                    <label for="radio22"></label>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="mt-0 mega-title-badge">Option D </h6>
                                                                    <p>Estimated 15 Day Shipping ( Duties end taxes may
                                                                        be due upon delivery
                                                                        )</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        </p>
                                        <div class="card-footer text-right">
                                            <button class="btn btn-light m-r-15"
                                                onclick="openPreviousTab()">Previous</button>
                                            <button class="btn btn-primary" onclick="openNextTab()">Next</button>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-4" role="tabpanel"
                                        aria-labelledby="v-pills-4-tab">
                                        <p>
                                        <div class="megaoptions-border-space-sm">
                                            <form class="mega-inline">
                                                <div class="row">
                                                    <div class="col-sm-12 xl-100">
                                                        <div class="card">
                                                            <div class="media p-20">

                                                                <div class="media-body">
                                                                    <h6 class="mt-0 mega-title-badge">Question 4<span
                                                                            class="badge badge-primary pull-right">5
                                                                            Points
                                                                        </span></h6>
                                                                    <p>Estimated 14-20 Day Shipping ( Duties end taxes
                                                                        may be due upon
                                                                        delivery Estimated 14-20 Day Shipping ( Duties
                                                                        end taxes may be due
                                                                        upon
                                                                        delivery )</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-sm-6 xl-100">
                                                        <div class="card">
                                                            <div class="media p-20">
                                                                <div class="radio radio-primary mr-3">
                                                                    <input id="radio19" type="radio" name="radio1"
                                                                        value="option1">
                                                                    <label for="radio19"></label>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="mt-0 mega-title-badge">Option A</h6>
                                                                    <p>Estimated 14-20 Day Shipping ( Duties end taxes
                                                                        may be due upon
                                                                        delivery )</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 xl-100">
                                                        <div class="card">
                                                            <div class="media p-20">
                                                                <div class="radio radio-secondary mr-3">
                                                                    <input id="radio20" type="radio" name="radio1"
                                                                        value="option1">
                                                                    <label for="radio20"></label>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="mt-0 mega-title-badge">Option B</h6>
                                                                    <p>Estimated 1 Day Shipping ( Duties end taxes may
                                                                        be due upon delivery
                                                                        )</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 xl-100">
                                                        <div class="card">
                                                            <div class="media p-20">
                                                                <div class="radio radio-secondary mr-3">
                                                                    <input id="radio21" type="radio" name="radio1"
                                                                        value="option1">
                                                                    <label for="radio21"></label>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="mt-0 mega-title-badge">Option C</h6>
                                                                    <p>Estimated 3 Day Shipping ( Duties end taxes may
                                                                        be due upon delivery
                                                                        )</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 xl-100">
                                                        <div class="card">
                                                            <div class="media p-20">
                                                                <div class="radio radio-primary mr-3">
                                                                    <input id="radio22" type="radio" name="radio1"
                                                                        value="option1">
                                                                    <label for="radio22"></label>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="mt-0 mega-title-badge">Option D </h6>
                                                                    <p>Estimated 15 Day Shipping ( Duties end taxes may
                                                                        be due upon delivery
                                                                        )</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        </p>
                                        <div class="card-footer text-right">
                                            <button class="btn btn-light m-r-15"
                                                onclick="openPreviousTab()">Previous</button>
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