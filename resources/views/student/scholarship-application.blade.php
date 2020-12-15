@extends('layouts.admin')
@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>Scholarrships</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a>
                        </li>
                        <li class="breadcrumb-item">Student</li>
                        <li class="breadcrumb-item active">Scholarship Application </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">

            <div class="col-xl-10 offset-1 xl-80">
                <div class="card">
                    <div class="job-search">
                        <div class="card-body pb-0">
                            <div class="media">
                                <div class="media-body">
                                    <h4 class="f-w-600">
                                        <a href="#">UI Designer</a>
                                        <span class="pull-right">
                                            <button class="btn btn-primary" type="submit">Complete Application</button>
                                        </span>
                                    </h4>
                                    <p>Endless Telecom & Technologies , NY<span><i class="fa fa-star font-warning"></i><i class="fa fa-star font-warning"></i><i class="fa fa-star font-warning"></i><i class="fa fa-star font-warning"></i><i class="fa fa-star font-warning"></i></span></p>
                                </div>
                            </div>
                            <div class="job-description">
                                <h6 class="mb-0">Personal Details </h6>
                                <form class="form theme-form">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput5">First Name:<span class="font-danger">*</span></label>
                                                <input class="form-control" id="exampleFormControlInput5" type="email" placeholder="First Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput5">Last Name:<span class="font-danger">*</span></label>
                                                <input class="form-control" id="exampleFormControlInput5" type="email" placeholder="Last Name">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput5">Email Address:<span class="font-danger">*</span></label>
                                                <input class="form-control" id="exampleFormControlInput5" type="email" placeholder="Email Address">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput5">Phone:<span class="font-danger">*</span></label>
                                                <input class="form-control" id="exampleFormControlInput5" type="email" placeholder="Valid Phone Number">
                                            </div>
                                        </div>

                                    </div>


                                    <hr>
                                    <h6 class="mb-0">Education Background</h6>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput5">I am a:<span class="font-danger">*</span></label>
                                                <select class="form-control" name="" id="">
                                                    <option value="">University Student</option>
                                                    <option value="">Secondary School Student</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput5">School Name:<span class="font-danger">*</span></label>
                                                <input class="form-control" id="exampleFormControlInput5" type="email" placeholder="Your School Name">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput5">Class or Level:<span class="font-danger">*</span></label>
                                                <input class="form-control" id="exampleFormControlInput5" type="email" placeholder="Year of Study">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput5">Expected Year of Graduation:<span class="font-danger">*</span></label>
                                                <input class="form-control" id="exampleFormControlInput5" type="email" placeholder="Year of Graduation">
                                            </div>
                                        </div>

                                    </div>
                                    <hr>
                                    <h6 class="mb-0">Contact Address</h6>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput7">Country:<span class="font-danger">*</span></label>
                                                <input class="form-control" id="exampleFormControlInput7" type="email" placeholder="Enter Location">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput7">State of Origin:<span class="font-danger">*</span></label>
                                                <input class="form-control" id="exampleFormControlInput7" type="email" placeholder="Enter Location">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput8">LGA:<span class="font-danger">*</span></label>
                                                <input class="form-control" id="exampleFormControlInput8" type="email" placeholder="Enter Company Name">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput8">Residential Address:<span class="font-danger">*</span></label>
                                                <input class="form-control" id="exampleFormControlInput8" type="email" placeholder="Enter Company Name">
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <input class="btn btn-light" type="reset" value="Cancel">
                            <button class="btn btn-primary" type="button" onClick="payWithRave()">Complete Application</button>

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
<script src="https://api.ravepay.co/flwv3-pug/getpaidx/api/flwpbf-inline.js"></script>
<script>
    const API_publicKey = "FLWPUBK_TEST-6ed373149166c784cf560090702de235-X"

    function payWithRave() {
        var x = getpaidSetup({
            PBFPubKey: API_publicKey,
            customer_email: "user@example.com",
            amount: 2000,
            customer_phone: "234099940409",
            currency: "NGN",
            txref: "rave-123456",
            meta: [{
                metaname: "flightID",
                metavalue: "AP1234"
            }],
            onclose: function() {},
            callback: function(response) {
                var txref = response.data.txRef; // collect txRef returned and pass to a                    server page to complete status check.
                console.log("This is the response returned after a charge", response);
                if (
                    response.data.chargeResponseCode == "00" ||
                    response.data.chargeResponseCode == "0"
                ) {
                    // redirect to a success page
                } else {
                    // redirect to a failure page.
                }

                x.close(); // use this to close the modal immediately after payment.
            }
        });
    }
</script>
@endsection