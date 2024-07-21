@php($title = "Dr. Prakash Chand Madiya | Bombay Hospital Indore")
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
                            <li class="breadcrumb-item active" aria-current="page">Panel of Consultants</li>
                        </ol>
                    </nav>

                    <!-- Title -->
                    <h4 class="h4-sm steelblue-color">Dr. Prakash Chand Madiya</h4>

                </div>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</div> <!-- END BREADCRUMB -->

<section id="doctor-1-details" class="doctor-details-section division">
    <div class="container">
        <div class="row">


            <!-- DOCTOR PHOTO -->
            <div class="col-md-5">
                <div class="doctor-photo mb-40">

                    <!-- Photo -->
                    <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-prakash-chand-madiya.jpg')}}"
                        alt="">

                    <!-- Doctor Info -->
                    <div class="doctor-info">
                        <h5 class="h5-md blue-color">Qualifications</h5>
                        <p>MBBS from Gandhi Medical College, Bhopal, MP</p>
                        <p>PGDCC ( Post Graduate Diploma In Clinical Cardiology) from Bombay Hospital, Indore</p>
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Extn. No.:</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>Consulting Time:</td>
                                    <td>-
                                    </td>
                                </tr>
                                <tr>
                                    <td>Consulting Room:</td>
                                    <td>-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div> <!-- End Doctor Info -->


                    <!-- <div class="doctor-photo-btn text-center">
                                <a href="#" class="btn btn-md btn-blue blue-hover">Book an
                                    Appointment</a>
                            </div> -->

                </div>
            </div> <!-- END DOCTOR PHOTO -->


            <!-- DOCTOR'S BIO -->
            <div class="col-md-7">
                <div class="doctor-bio">
                    <h5 class="h5-md blue-color">Background</h5>
                    <!-- Text -->
                    <p>Dr. Prakash Chand Madiya obtained his medical degree from Barkatullah University Bhopal. He went
                        on to successfully complete his post-graduate training in Diploma Cardiology from Bombay
                        Hospital, Indore, 2010 Batch. He was privileged to have trained under the tutelage of Dr Idris
                        Ahmed Khan in Cardiology at Bombay Hospital Indore. Previously he worked as a government doctor
                        for 14 years.</p>
                    <p>He is working in Critical Care department of Bombay Hospital Indore as a Junior Intensivist.</p>

                    <h5 class="h5-md blue-color">Expertise</h5>
                    <p>2D Echo, Arrhythmias, All Critical Patient</p>


                    <h5 class="h5-md blue-color">Achievements and Accolades</h5>
                    <!-- <div class="box-list m-top-15">
                                <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                                <p class="p-sm">DNB Teacher and Thesis Guide for last six years.</p>
                            </div> -->
                </div>
            </div> <!-- END DOCTOR BIO -->


        </div> <!-- End row -->
    </div> <!-- End container -->
</section>

@stop