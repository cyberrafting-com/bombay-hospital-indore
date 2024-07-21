@php($title = "Career | Bombay Hospital Indore")
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
                            <li class="breadcrumb-item active" aria-current="page">Career</li>
                        </ol>
                    </nav>

                    <!-- Title -->
                    <h4 class="h4-sm steelblue-color">Career</h4>

                </div>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</div> <!-- END BREADCRUMB -->

<section id="services-7" class="bg-lightgrey wide-70 servicess-section division">
    <div class="container">

        <!-- SECTION TITLE -->
        <!--<div class="row">-->
        <!--    <div class="col-lg-10 offset-lg-1 section-title">-->
        <!--        <h3 class="h3-md steelblue-color">Careers</h3>-->
        <!--    </div>-->
        <!--</div>-->

        <!--<div class="top-row mb-80">-->
        <!--    <div class="row d-flex align-items-center main-single-services-box mt-0 p-0">-->

        <!--        <div class="col-lg-12">-->
        <!--            <div class="info-4-img text-center wow fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">-->
        <!--                <img class="img-fluid" src="{{ asset('/resources/assets/images/career-2.jpg')}}" alt="">-->
        <!--            </div>-->
        <!--        </div>-->

        <!--    </div> -->
        <!--</div> -->

        <!--<div class="row">-->
        <!--    <div class="col-lg-12 career-title">-->
        <!--        <h2 class="text-center">Current Openings</h2>-->
        <!--    </div>-->
        <!--</div>-->


        <div class="row mt-5">
            <div class="col-lg-12 application ">
                <h5>BOMBAY HOSPITAL, INDORE  </h5><br>
                <h2>Application Form For Associate Consultant / Consultant</h2>
                <a href="{{ route('associate-consultant')}}" class="apply"><h5>Apply Now -></h5></a>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-12 application ">
                <h5>BOMBAY HOSPITAL, INDORE  </h5><br>
                <h2>Application For The Post Of SR. RMO/RMO / CMO</h2>
                <a href="{{ route('rmo')}}" class="apply"><h5>Apply Now -></h5></a>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-12 application ">
                <h5>BOMBAY HOSPITAL, INDORE  </h5><br>
                <h2>Application For The Post Of Medical Administrator</h2>
                <a href="{{ route('medical-administrator')}}" class="apply"><h5>Apply Now -></h5></a>
            </div>
        </div>

        <!-- new addon -->
        <div class="row mt-5">
            <div class="col-lg-12 application ">
                <h5>BOMBAY HOSPITAL, INDORE  </h5><br>
                <h2>Full Time Experienced Medical Oncologist</h2>
                <p> DM / DrNB (Medical Oncology)</p>
                <a href="{{ route('medical-oncologist')}}" class="apply"><h5>Apply Now -></h5></a>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-12 application ">
                <h5>BOMBAY HOSPITAL, INDORE  </h5><br>
                <h2>Full Time Experienced Surgical Oncologist </h2>
                <p>M.Ch. / DrNB (Surgical Oncology)</p>
                <a href="{{ route('surgical-oncologist')}}" class="apply"><h5>Apply Now -></h5></a>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-12 application ">
                <h5>BOMBAY HOSPITAL, INDORE  </h5><br>
                <h2> Full Time Experienced Radio Therapist  </h2>
                <p>MD / DNB (Radiation Oncology)</p>
                <a href="{{ route('radio-therapist')}}" class="apply"><h5>Apply Now -></h5></a>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-12 application ">
                <h5>BOMBAY HOSPITAL, INDORE  </h5><br>
                <h2>Full Time Experienced Pediatrician </h2>
                <p> MD  (Pediatrics)</p>
                <a href="{{ route('pediatrician')}}" class="apply"><h5>Apply Now -></h5></a>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-12 application ">
                <h5>BOMBAY HOSPITAL, INDORE  </h5><br>
                <h2> Full Time Experienced G.I. Surgeon</h2>
                <p>M.Ch. / DrNB (Surgical Gastroenterology)</p>
                <a href="{{ route('g-i-surgeon')}}" class="apply"><h5>Apply Now -></h5></a>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-12 application ">
                <h5>BOMBAY HOSPITAL, INDORE  </h5><br>
                <h2>Full Time Experienced Intensivist</h2>
                <a href="{{ route('intensivist')}}" class="apply"><h5>Apply Now -></h5></a>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-12 application ">
                <h5>BOMBAY HOSPITAL, INDORE  </h5><br>
                <h2>Junior Resident Medical Officers </h2>
                <p>MBBS & registered in M.P. Medical Council</p>
                <a href="{{ route('junior-resident-medical-officers')}}" class="apply"><h5>Apply Now -></h5></a>
            </div>
        </div>

    </div>
</section>

@stop