@php($title = "Mrs. Yayati Joshi | Bombay Hospital Indore")
@section('meta_desc') @endsection

@extends('layouts.default')
@section('content')

<!-- BREADCRUMB
			============================================= -->
<div id="breadcrumb" class="division">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class=" breadcrumb-holder">

                    <!-- Breadcrumb Nav -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Patient Stories</li>
                        </ol>
                    </nav>

                    <!-- Title -->
                    <h4 class="h4-sm steelblue-color">Mrs. Yayati Joshi</h4>

                </div>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</div> <!-- END BREADCRUMB -->

<section id="services-7" class="bg-lightgrey wide-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <img src="{{ asset('/resources/assets/images/patient/mrs-yayati.jpg')}}" class="img-fluid" />
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 transplant-facility-box">
                <div class="box-list">

                    <p>My story began on January 4th , 2002 with the painful experience of first miscarriage. Since then
                        struggling with infertility and continuous miscarriages the life was difficult, earth shattering
                        and downright devastating. Going through all painful diagnosis, changing doctors and spending a
                        lot of money on treatment for years were enough for me to give up all the hopes and accept the
                        fate. Having a baby had become such a distant dream for us; and the reality of getting pregnant
                        was too difficult to achieve. My life was ruined, and I was in tears all the time due to having
                        the thought of not being able to experience the amazing journey of pregnancy
                    </p>

                    <p>It was 2011, I came in Bombay Hospital to talk to the gynecologist and it was a very unusual
                        experience because I’ve been to many doctors before, and never has a doctor who could be such a
                        patient listener, counselor and optimistic for the patient. He was the one who could explain my
                        problem and the reason behind it. He could answer all my questions.</p>
                </div>

                <div class="col-lg-12">
                    <div class="box-list">
                        <p>And yes miracle did happen to me, I became pregnant again but this time I was at peace
                            because I noticed he was trying to take one step at a time and taking everything into a
                            different perspective. It was an exciting, and at times, overwhelming journey, but the
                            Hospital and staff made it a great experience.</p>

                        <p>On April 3rd , 2012, I had such an amazing experience of giving birth to my son at Bombay
                            Hospital, Indore. I want to thank everyone who took care of my little one and me. I felt
                            everyone who entered my room was absolutely wonderful. My husband and I felt the entire
                            staff was so supportive and comforting to us. We feel extremely grateful and thankful to
                            them for all they did to us. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@stop