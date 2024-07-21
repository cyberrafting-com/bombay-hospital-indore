@php($title = "Contact Us | Bombay Hospital Indore")
@section('meta_desc') @endsection

@extends('layouts.default')
@section('content')
<!-- BREADCRUMB
			============================================= -->
<section style="background-position: top;" id="banner-8" class="bg-fixed banner-section division">
    <div class="container white-color">
        <div class="row d-flex align-items-center">


            <!-- BANNER TEXT -->
            <div class="col-lg-8 offset-lg-2">
                <div class="banner-txt icon-lg text-center">

                    <!-- Icon  -->
                    <img class="mb-10" src="{{ asset('/resources/assets/images/only-logo.png')}}" alt="footer-logo">

                    <!-- Title  -->
                    <h3 class="h3-sm">Have a Question?</h3>

                    <h4 class="h4-lg">Make an Appointment Today</h4>
                    <a href="{{ route('appointment')}}" class="btn btn-tra-white blue-hover mt-25">Make an
                        Appointment</a>
                </div>
            </div>


        </div> <!-- End row -->
    </div> <!-- End container -->
</section>

<section id="contacts-1" class="wide-60 contacts-section division">
    <div class="container">


        <!-- SECTION TITLE -->
        <div class="row">
            <div class="col-lg-10 offset-lg-1 section-title">

                <!-- Title 	-->
                <h3 class="h3-md steelblue-color">Get In Touch</h3>

            </div>
        </div>


        <div class="row justify-content-center">

            <div class="col-md-3 address-box">
                <i class="fa-solid fa-location-dot"></i>
                <p>Eastern Ring Road, Ring Road, IDA Scheme No.94/95, Tulsi Nagar, Indore, Madhya Pradesh 452010</p>
            </div>
            <div class="col-md-3 address-box">
                <i class="fa-solid fa-phone"></i>
                <p><a href="tel: +917314771111" class="blue-color">+91 731 4771111</a></p>
            </div>
            <div class="col-md-3 address-box">
                <i class="fa-solid fa-envelope"></i>
                <p><a href="mailto:msofficebhi@gmail.com">msofficebhi@gmail.com</a></p>
            </div>
        </div> <!-- End row -->


    </div> <!-- End container -->
</section>

<section id="contacts-1" class="contacts-section division">
    <div class="container-fluid">
        <div class="row">

            <!-- CONTACT FORM -->
            <div class="col-md-12 col-lg-12">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3813684.6627088552!2d72.1473602!3d21.0206218!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39631d54503f21d3%3A0xc114629679b13584!2sBombay%20Hospital!5e0!3m2!1sen!2sin!4v1677666691563!5m2!1sen!2sin"
                    width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div> <!-- END CONTACT FORM -->


        </div> <!-- End row -->


    </div> <!-- End container -->
</section>

@stop