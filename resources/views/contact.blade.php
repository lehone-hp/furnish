@extends('layouts.app')

@section("title")
    Contact
@endsection


@section('content')
    <!-- Page content -->
    <!-- PAGE BANNER SECTION -->
    <div class="page-banner-section section">
        <div class="container">
            <div class="row">
                <div class="page-banner-content col-xs-12">
                    <h2>Contact</h2>
                    <ul class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li class="active">Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- END PAGE BANNER SECTION -->

    <!-- PAGE SECTION START -->
    <div class="page-section section pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="contact-info col-md-4 col-xs-12 mb-40">
                    <h3>Contact Info</h3>

                    <p><i class="pe-7s-map-marker"></i><span>123 West Street, Melbourne Victoria <br>3000 Australia</span></p>

                    <p><i class="pe-7s-call"></i><span>Phone : +061012345678</span><span>Fax : +0061012345678</span></p>

                    <p><i class="pe-7s-mail"></i><a href="#">Contact@domain.com</a><a href="#">Support@domain.com</a></p>

                    <div class="contact-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </div>

                </div>
                <div class="contact-form col-md-8 col-xs-12 mb-40">
                    <h3>Contact form</h3>
                    <form id="contact-form" action="mail.php" method="post">
                        <div class="row">
                            <div class="col-sm-4 col-xs-12 mb-20">
                                <label for="name">Your Name</label>
                                <input id="name" name="name" type="text">
                            </div>
                            <div class="col-sm-4 col-xs-12 mb-20">
                                <label for="email">Your Email</label>
                                <input id="email" name="email" type="email">
                            </div>
                            <div class="col-sm-4 col-xs-12 mb-20">
                                <label for="subject">Subject</label>
                                <input id="subject" name="subject" type="text">
                            </div>
                            <div class="col-xs-12 mb-20">
                                <label for="message">Message</label>
                                <textarea name="message" id="message"></textarea>
                            </div>
                            <div class="col-xs-12">
                                <input type="submit" value="send">
                            </div>
                        </div>
                    </form>
                    <p class="form-messege"></p>
                </div>
                <div class="col-xs-12 mt-40">
                    <div id="contact-map"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- PAGE SECTION END -->
@endsection
