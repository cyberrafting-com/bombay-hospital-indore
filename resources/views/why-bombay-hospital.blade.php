@php($title = "Why Bombay Hospital | Bombay Hospital Indore")
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
                            <li class="breadcrumb-item active" aria-current="page">Why Bombay Hospital</li>
                        </ol>
                    </nav>

                    <!-- Title -->
                    <h4 class="h4-sm steelblue-color">Why Us</h4>

                </div>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</div> <!-- END BREADCRUMB -->

<!-- INFO-4
			============================================= -->
<section id="info-4" class="wide-100 info-section division">
    <div class="container">


        <!-- TOP ROW -->
        <div class="top-row mb-80">
            <div class="row d-flex align-items-center">


                <!-- INFO IMAGE -->
                <div class="col-lg-6">
                    <div class="info-4-img text-center wow fadeInUp" data-wow-delay="0.6s">
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/history-1.jpg')}}" alt="">
                    </div>
                </div>


                <!-- INFO TEXT -->
                <div class="col-lg-6">
                    <div class="txt-block pc-30 wow fadeInUp" data-wow-delay="0.4s">

                        <!-- Title -->
                        <h3 class="h3-md steelblue-color">NABH Accredited</h3>

                        <!-- Text -->
                        <p>The Preeminent NABH Accredited Hospital in Madhya Pradesh. NABH is a benchmark for
                            excellence in health care. There are only a few NABH accredited hospitals in India
                            and Bombay Hospital Indore is one among them.
                        </p>

                        <!-- Text -->
                        <p>Awarded as <b>“The best hospital in Non-Metro category Western Region”</b> in the
                            India Healthcare Awards given by ICICI Lombard & CNBC TV18, for the year 2012.
                        </p>
                        <p>Awarded <b>“The Healthcare Excellence Award for Best Multispeciality Hospital”</b> in
                            indore by World Wide Achievers, on 19th December 2013, at New Delhi.
                        </p>

                        <p>Bombay Hospital Indore is the only teaching institute in indore having DNB teaching
                            seats for Medicine, Anesthesia and Radiology.</p>
                        <p>Bombay Hospital is a charitable hospital and not a commercial Hospital with a very
                            high number of General Ward beds.</p>
                        <p>Most of them are foreign trained, giving international performance standards at local
                            cost.</p>

                    </div>
                </div> <!-- END TEXT BLOCK -->


            </div> <!-- End row -->
        </div> <!-- END TOP ROW -->


        <!-- BOTTOM ROW -->
        <div class="bottom-row">
            <div class="row d-flex align-items-center">


                <!-- INFO TEXT -->
                <div class="col-lg-6">
                    <div class="txt-block pc-30 wow fadeInUp" data-wow-delay="0.4s">

                        <!-- Title -->
                        <h3 class="h3-md steelblue-color">World Class Medical Facilities under one roof</h3>

                        <!-- Text -->
                        <p class="mb-30">Bombay Hospital is a brand which represents 68 years of Medical care
                            which you can trust.
                        </p>
                        <p>Apart from world class medical facilities, it is Human Touch & Care by which we have
                            been able to gain trust of people.</p>
                        <p>World Class highly qualified Doctors with vast experience available 24/7 for the
                            patients.</p>
                        <p>Bombay Hospital Indore aims to provide Best possible treatment, delivered most
                            efficiently, at minimum cost.</p>
                        <p>Bombay Hospital Indore is the only teaching institute in indore having DNB teaching
                            seats for Medicine, Anesthesia and Radiology.</p>
                    </div>
                </div> <!-- END INFO TEXT -->


                <!-- INFO IMAGE -->
                <div class="col-lg-6">
                    <div class="info-4-img text-center wow fadeInUp" data-wow-delay="0.6s">
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/icu-6.jpg')}}"
                            alt="info-image">
                    </div>
                </div>


            </div> <!-- End row -->
        </div> <!-- END BOTTOM ROW -->


    </div> <!-- End container -->
</section> <!-- END INFO-4 -->


<div id="statistic-1" class="bg-scroll statistic-section division">
    <div class="container white-color">
        <div class="row">


            <!-- STATISTIC BLOCK #1 -->
            <div class="col-md-6 col-lg-3">
                <div class="statistic-block icon-lg wow fadeInUp" data-wow-delay="0.4s"
                    style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">

                    <!-- Icon  -->
                    <span class="flaticon-062-cardiogram-3"></span>

                    <!-- Text -->
                    <h5 class="statistic-number">4,<span class="count-element">700</span>+</h5>
                    <p class="txt-400">Happy Patients</p>

                </div>
            </div>


            <!-- STATISTIC BLOCK #2 -->
            <div class="col-md-6 col-lg-3">
                <div class="statistic-block icon-lg wow fadeInUp" data-wow-delay="0.6s"
                    style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">

                    <!-- Icon  -->
                    <span class="flaticon-141-clinic-history"></span>

                    <!-- Text -->
                    <h5 class="statistic-number"><span class="count-element">100</span>%</h5>
                    <p class="txt-400">Efficient Treatment</p>

                </div>
            </div>


            <!-- STATISTIC BLOCK #3 -->
            <div class="col-md-6 col-lg-3">
                <div class="statistic-block icon-lg wow fadeInUp" data-wow-delay="0.8s"
                    style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">

                    <!-- Icon  -->
                    <span class="flaticon-065-hospital-bed"></span>

                    <!-- Text -->
                    <h5 class="statistic-number"><span class="count-element">270</span>+</h5>
                    <p class="txt-400">Hospital Beds</p>

                </div>
            </div>


            <!-- STATISTIC BLOCK #4 -->
            <div class="col-md-6 col-lg-3">
                <div class="statistic-block icon-lg wow fadeInUp" data-wow-delay="1s"
                    style="visibility: visible; animation-delay: 1s; animation-name: fadeInUp;">

                    <!-- Icon  -->
                    <span class="flaticon-137-doctor"></span>

                    <!-- Text -->
                    <h5 class="statistic-number"><span class="count-element">37000</span>+</h5>
                    <p class="txt-400">Successfull Surgeries</p>

                </div>
            </div>


        </div> <!-- End row -->
    </div> <!-- End container -->
</div>


<!-- VIDEO-2
			============================================= -->
<section id="video-2" class="wide-60 video-section division">
    <div class="container">
        <div class="row d-flex align-items-center">

            <div class="col-lg-6">
                <div class="info-4-img text-center wow fadeInUp" data-wow-delay="0.6s">
                    <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/g3.jpg')}}" alt="info-image">
                </div>
                <div class="mt-20 info-4-img text-center wow fadeInUp" data-wow-delay="0.6s">
                    <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/rooms-5.jpg')}}"
                        alt="info-image">
                </div>
            </div>


            <!-- VIDEO TEXT -->
            <div class="col-lg-6">
                <div class="txt-block pc-30 mb-40 wow fadeInUp" data-wow-delay="0.4s">

                    <!-- Title -->
                    <h3 class="h3-md steelblue-color">State-of-the-art Sophisticated Technology</h3>

                    <!-- CONTENT BOX #1 -->
                    <div class="box-list m-top-15">
                        <div class="box-list-icon"><i class="fas fa-genderless"></i></div>
                        <p>Bombay Hospital Indore has 64 bedded intensive care/recovery area for critically ill
                            patients, which is highest in entire Madhya Pradesh.
                        </p>
                    </div>

                    <!-- CONTENT BOX #2 -->
                    <div class="box-list">
                        <div class="box-list-icon"><i class="fas fa-genderless"></i></div>
                        <p>World Class highly qualified Doctors with vast experience available 24/7 for the patients.
                        </p>
                    </div>

                    <!-- CONTENT BOX #3 -->
                    <div class="box-list">
                        <div class="box-list-icon"><i class="fas fa-genderless"></i></div>
                        <p>Efficient support service system ensuring hassle free experience.
                        </p>
                    </div>

                    <div class="box-list">
                        <div class="box-list-icon"><i class="fas fa-genderless"></i></div>
                        <p>64 Beded intensive care departments with 1:1 nurse – patient ratio and international
                            standards.
                        </p>
                    </div>

                    <div class="box-list">
                        <div class="box-list-icon"><i class="fas fa-genderless"></i></div>
                        <p>Ten world class well equipped operation theatres with Shadowless Hanaulux OT lights, Maquet
                            Operating Tables, Hepa filters with laminar air flow, Moller Wedel surgical operating
                            microscope with close circuit TV etc.
                        </p>
                    </div>

                    <div class="box-list">
                        <div class="box-list-icon"><i class="fas fa-genderless"></i></div>
                        <p>Latest Cathlab from Philips Medical Systems.
                        </p>
                    </div>

                    <div class="box-list">
                        <div class="box-list-icon"><i class="fas fa-genderless"></i></div>
                        <p>64 slice State-of-the-art Siemens SOMATOM Definition AS CT scan Machine with range of latest
                            software which allow us to perform a wide variety of CT procedures with a high degree of
                            diagnostic accuracy.
                        </p>
                    </div>

                    <div class="box-list">
                        <div class="box-list-icon"><i class="fas fa-genderless"></i></div>
                        <p>3 Tesla M.R.I. system providing excellent performance for both high spatial and temporal
                            resolution acquisitions.
                        </p>
                    </div>

                    <div class="box-list">
                        <div class="box-list-icon"><i class="fas fa-genderless"></i></div>
                        <p>Air-Conditioned Intensive Care Ambulance well equipped for cardiac and trauma care with
                            trained medical team onboard.
                        </p>
                    </div>

                    <div class="box-list">
                        <div class="box-list-icon"><i class="fas fa-genderless"></i></div>
                        <p>24/7 Pharmacy with online drug demand system.
                        </p>
                    </div>

                </div>
            </div>


        </div> <!-- End row -->
    </div> <!-- End container -->
</section> <!-- END VIDEO-2 -->


@stop