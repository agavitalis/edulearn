@extends('layouts.appp')
@section('content')
<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
    <div class="breadcrumbs-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="page-title">Contact</h1>
                    <ul>
                        <li>
                            <a class="active" href="index.html">Home</a>
                        </li>
                        <li>Cantact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div><!-- .breadcrumbs-inner end -->
</div>
<!-- Breadcrumbs End -->

<!-- Contact Section Start -->
<div class="contact-page-section sec-spacer">
    <div class="container">
        <div id="googleMap"></div>
        <div class="row contact-address-section">
            <div class="col-md-4 pl-0">
                <div class="contact-info contact-address">
                    <i class="fa fa-map-marker"></i>
                    <h4>Address</h4>
                    <p>503 Old Buffalo Street</p>
                    <p>Northwest #205, New York-3087</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-info contact-phone">
                    <i class="fa fa-phone"></i>
                    <h4>Phone Number</h4>
                    <a href="tel:+3453-909-6565">+3453-909-6565</a>
                    <a href="tel:+2390-875-2235">+2390-875-2235</a>
                </div>
            </div>
            <div class="col-md-4 pr-0">
                <div class="contact-info contact-email">
                    <i class="fa fa-envelope"></i>
                    <h4>Email Address</h4>
                    <a href="mailto:infoname@gmail.com">
                        <p>infoname@gmail.com</p>
                    </a>
                    <a href="#">
                        <p>www.yourname.com</p>
                    </a>
                </div>
            </div>
        </div>

        <div class="contact-comment-section">
            <h3>Leave Comment</h3>
            <div id="form-messages"></div>
            <form id="contact-form" method="post" action="http://keenitsolutions.com/products/html/edulearn/edulearn-demo/mailer.php">
                <fieldset>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>First Name*</label>
                                <input name="fname" id="fname" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Last Name*</label>
                                <input name="lname" id="lname" class="form-control" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Email*</label>
                                <input name="email" id="email" class="form-control" type="email">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Subject *</label>
                                <input name="subject" id="subject" class="form-control" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label>Message *</label>
                                <textarea cols="40" rows="10" id="message" name="message" class="textarea form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-0">
                        <input class="btn-send" type="submit" value="Submit Now">
                    </div>

                </fieldset>
            </form>
        </div>
    </div>
</div>
<!-- Contact Section End -->

<!-- Partner Start -->
<div id="rs-partner" class="rs-partner sec-color pt-70 pb-170">
    <div class="container">
        <div class="rs-carousel owl-carousel" data-loop="true" data-items="5" data-margin="80" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="false" data-nav="false" data-nav-speed="false" data-mobile-device="2" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="4" data-ipad-device-nav="false" data-ipad-device-dots="false" data-md-device="5" data-md-device-nav="false" data-md-device-dots="false">
            <div class="partner-item">
                <a href="#"><img src="../appp/images/partner/1.png" alt="Partner Image"></a>
            </div>
            <div class="partner-item">
                <a href="#"><img src="../appp/images/partner/2.png" alt="Partner Image"></a>
            </div>
            <div class="partner-item">
                <a href="#"><img src="../appp/images/partner/3.png" alt="Partner Image"></a>
            </div>
            <div class="partner-item">
                <a href="#"><img src="../appp/images/partner/4.png" alt="Partner Image"></a>
            </div>
            <div class="partner-item">
                <a href="#"><img src="../appp/images/partner/5.png" alt="Partner Image"></a>
            </div>
        </div>
    </div>
</div>
<!-- Partner End -->

<!-- Footer Start -->
<footer id="rs-footer" class="bg3 rs-footer mt-0">
    <div class="container">
        <!-- Footer Address -->
        <div>
            <div class="row footer-contact-desc">
                <div class="col-md-4">
                    <div class="contact-inner">
                        <i class="fa fa-map-marker"></i>
                        <h4 class="contact-title">Address</h4>
                        <p class="contact-desc">
                            503 Old Buffalo Street<br>
                            Northwest #205, New York-3087
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-inner">
                        <i class="fa fa-phone"></i>
                        <h4 class="contact-title">Phone Number</h4>
                        <p class="contact-desc">
                            +3453-909-6565<br>
                            +2390-875-2235
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-inner">
                        <i class="fa fa-map-marker"></i>
                        <h4 class="contact-title">Email Address</h4>
                        <p class="contact-desc">
                            infoname@gmail.com<br>
                            www.yourname.com
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection