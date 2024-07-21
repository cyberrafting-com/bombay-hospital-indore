@php($title = "Philosophy | Bombay Hospital Indore")
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
                            <li class="breadcrumb-item"><a href="#">About us</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Philosophy</li>
                        </ol>
                    </nav>

                    <!-- Title -->
                    <h4 class="h4-sm steelblue-color">Philosophy</h4>

                </div>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</div> <!-- END BREADCRUMB -->

<section id="info-6" class="info-section division">

<div class="info-6-img text-center only-mob" style="display: none;"></div>

    <!-- TEXT BLOCK -->
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6 offset-lg-6">
                <div class="txt-block pc-30 wow fadeInUp" data-wow-delay="0.4s"
                    style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">

                    <!-- Section ID -->
                    <!-- <span class="section-id id-color">Qualified Doctors</span> -->

                    <!-- Title -->
                    <h3 class="h3-md">Chairman’s Message</h3>

                    <h4 style="font-size: 22px; margin-bottom: 10px; font-weight: 400;">Shri. Bharat Kumar Taparia<br>Chairman</h4>

                    <!-- CONTENT BOX #1 -->
                    <div class="box-list">

                        <p>Charity and the pursuit of excellence are the two fundamental ideals that provide us
                            impetus to focus on the well being of the patient who is our primary responsibility.
                            We have an obligation to provide the best possible treatment, delivered most
                            efficiently, in the shortest possible time span and at minimum cost.
                        </p>

                        <p>On this bedrock of charity we are relentlessly building the bedrock of excellence in
                            the hospital by continuously refurbishing its spaces, installing the most modern
                            medical equipments and injecting professionalism and dedication in our management
                            team, so that our world class doctors can discharge their duties and
                            responsibilities in an academically stimulating and hassle-free environment.</p>
                    </div>

                </div>
            </div>
        </div> <!-- End row -->
    </div> <!-- END TEXT BLOCK -->


    <!-- INFO-6 IMAGE -->
    <div class="info-6-img text-center only-desk"></div>


</section>

@stop