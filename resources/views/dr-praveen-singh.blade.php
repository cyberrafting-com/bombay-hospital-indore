@php($title = "Dr. Praveen Singh | Bombay Hospital Indore")
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
                    <h4 class="h4-sm steelblue-color">Dr. Praveen Singh</h4>

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
                    <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-praveen-singh.jpg')}}"
                        alt="">

                    <!-- Doctor Info -->
                    <div class="doctor-info">
                        <h5 class="h5-md blue-color">Qualifications</h5>
                        <p>MBBS (Indore) 1992</p>
                        <p>DPB (C.P.S, Mumbai) 2003</p>
                        <p>MD (Pathology) (RGUHS, Bangalore) 2005</p>
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
                                    <td>Pathology</td>
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
                    <p>Dr. Praveen Singh obtained his MBBS from M.G.M Medical College and M.Y. Hospital, Indore. He
                        completed his Diploma in Pathology and Bacteriology (DPB) from college of Physicians and
                        Surgeons, Mumbai and MD (Pathology) from Rajiv Gandhi University of Health Science, Bangalore in
                        2005.</p>
                    <p>He is working as Consultant – Blood Bank and Pathology in Bombay Hospital, Indore since December
                        2005. His special area of interest in Haematology and Blood Banking.</p>

                    <h5 class="h5-md blue-color">Expertise</h5>
                    <p>Transfusion Medicine and Haematology.</p>


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