@php($title = "Mr. Yatindra Jain | Bombay Hospital Indore")
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
                    <h4 class="h4-sm steelblue-color">Mr. Yatindra Jain</h4>

                </div>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</div> <!-- END BREADCRUMB -->

<section id="services-7" class="bg-lightgrey wide-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <img src="{{ asset('/resources/assets/images/patient/mr-yatindra.jpg')}}" class="img-fluid" />
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 transplant-facility-box">
                <div class="box-list">

                    <p>I was brought by my family in absolute agony and weakness in all limbs which was there for last
                        two days for which I was hospitalized initially at CHL hospital Ujjain, but than my problem was
                        not getting diagnosed over there so people and my friends who knows Dr Atul Taparia, suggested
                        his name and about excellent critical care facility at Bombay Hospital Indore. I came here in
                        conscious state but my all limbs were paralyzed and I was not able to breath properly. I could
                        remember, I came to his chamber at first floor on stretcher and he saw me patiently and calmly
                        and in next few minutes he could diagnose my problem that I was suffering from GBS. In next two
                        hours he performed certain investigations to confirm the diagnosis and my treatment was started.
                        At this juncture I have developed big confidence in him as well as in Bombay Hospital Team that
                        I am in safe hands. Over next few days every time whenever he would come on rounds he used to
                        motivate me for physiotherapy and to keep my moral high. I stayed in hospital for more than two
                        weeks and gradually started improving, started moving my limbs, able to walk with support. Now I
                        feel that Dr Taparia and his team in ICU are like my family members. I am thankful to the
                        Hospital Management for setting up a World Class Hospital with excellent team and facilities at
                        Indore. And I am thankful to god that I came here and now have recovered nearly.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

@stop