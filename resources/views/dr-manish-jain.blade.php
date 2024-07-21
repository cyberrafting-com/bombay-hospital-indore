@php($title = "Dr. Manish Jain | Bombay Hospital Indore")
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
                    <h4 class="h4-sm steelblue-color">Dr. Manish Jain</h4>

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
                    <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-manish-jain.jpg')}}" alt="">

                    <!-- Doctor Info -->
                    <div class="doctor-info">
                        <h5 class="h5-md blue-color">Qualifications</h5>
                        <p>MBBS from Gandhi Medical College Bhopal MP, 1988-1993.</p>
                        <p>MD (Medicine) from Raipur Medical College, 1994-1997.</p>
                        <p>DNB(Internal Medicine) from Diplomat National Board New Delhi, 1998.</p>
                        <p>MRCP(UK) 2001, Passed in First attempt.</p>
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Extn. No.:</td>
                                    <td>2108</td>
                                </tr>
                                <tr>
                                    <td>Consulting Time:</td>
                                    <td>Mon-Sat - 10 am to 6 pm
                                    </td>
                                </tr>
                                <tr>
                                    <td>Consulting Room:</td>
                                    <td>8 (First Floor)</td>
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
                    <p><b>India-</b></p>
                    <!-- Text -->
                    <p>Dr. Manish Jain obtained his medical degree from Gandhi Medical College Bhopal, MP. He went on to
                        successfully complete his post-graduate training in Medicine obtaining the Doctor of Medicine
                        from Medical Colletge Raipur. He did his DNB from Diplomat National Board New Delhi in 1998. He
                        worked as Assistant Professor in the department of Medicine, Medical College Rewa from 1998 to
                        1999.</p>

                    <p><b>United Kingdom 2000-2003-</b></p>
                    <!-- Text -->
                    <p>In January 2000 he went to United Kingdom, where he passed MRCP in First Attempt. He worked and
                        trained himself in internal Medicine at Hope Hospital Manchester and Royal Bournemouth Hospital,
                        Bournemouth. From year 2000 to 2003, during his stay in UK, he worked in Care of the Elderly and
                        internal medicine department.</p>

                    <p><b>Consultant (Internal Medicine) Bombay Hospital Indore since year 2003-</b></p>
                    <!-- Text -->
                    <p>After joining Bombay Hospital Indore in year 2003 he is giving dedicated services to the people
                        of indore and surrounding areas. He is managing vast number of patients with various medical
                        problems in out-patient department. He is also efficiently managing critically ill patients
                        admitted in ICU and wards of Bombay Hospital Indore. He is patients of Diabetes, Hypertention,
                        Prolonged fever (Dengue, H1N1, Typhoid, Malaria, Other Infections), Respiratory,
                        Gastrointestinal, Neurological, HIV, Hematological, Rheumatological and Infectious Diseases. He
                        also manages critically ill patients with Multi Organ Failure and those patients on ventilatory
                        support for respiratory diseases. He manages patients with various diagnostic and therapeutic
                        challenges in internal medicine and Critical Care Medicine.</p>
                    <p>He has many publications in international Journal including LANCET. He has many presentations at
                        Local, National and International Conferences. He is presently Secretary for API (Association of
                        Physicians of India), Indore And Life Member of Critical Care Society and IMA.</p>

                    <h5 class="h5-md blue-color">Expertise</h5>
                    <p>Infectious Disease, Respiratory and Critical Care, Rheumatological and Immunological Diseases.
                    </p>


                    <h5 class="h5-md blue-color">Achievements and Accolades</h5>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">DNB Teacher and Thesis Guide for last six years.</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Secretary for API (Association of Physicians of India), Indore.</p>
                    </div>
                </div>
            </div> <!-- END DOCTOR BIO -->


        </div> <!-- End row -->
    </div> <!-- End container -->
</section>

@stop