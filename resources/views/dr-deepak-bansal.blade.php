@php($title = "Dr. Deepak Bansal | Bombay Hospital Indore")
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
                    <h4 class="h4-sm steelblue-color">Dr. Deepak Bansal</h4>

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
                    <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-deepak-bansal.jpg')}}" alt="">

                    <!-- Doctor Info -->
                    <div class="doctor-info">
                        <h5 class="h5-md blue-color">Qualifications</h5>
                        <p>MBBS from MGM Medical College Indore MP, 1996-2001 MD (Medicine) Pt. J.N.M. Medical College,
                            Raipur (Pt Ravi Shankar Shukla University) 2005-2008</p>
                        <p>Trained in Respiratory Medicine at V.P.Chest Institute, Delhi University, New Delhi from
                            2003-2005</p>
                        <p>DM Neurology from Mumbai University.</p>
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Extn. No.:</td>
                                    <td>2105</td>
                                </tr>
                                <tr>
                                    <td>Consulting Time:</td>
                                    <td>Mon-Sat - 2 pm to 6 pm
                                    </td>
                                </tr>
                                <tr>
                                    <td>Consulting Room:</td>
                                    <td>5 (First Floor)</td>
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
                    <p>Dr. Deepak Bansal is working as a Consultant Chest Physician in Bombay Hospital Indore since
                        2009. Previously he did his residency program in Respiratory Medicine from Vallabh Bhai Patel
                        Chest Institute, Delhi University, New Delhi where he stood first in Delhi University. He did
                        his three years residency programme in Internal Medicine from Pt. J.N.M. Medical College, Raipur
                        in 2008. Since then, he is practicing Respiratory and Critical Care Medicine. Currently he is
                        HOD Respiratory Medicine Department at Bombay Hospital Indore.</p>
                    <p>He has started Respiratory Medicine teaching programs not only in Bombay Hospital but in other
                        forums across the city and peripheries. He is a post-graduate teacher affiliated to M.G.M.
                        Medical College, Indore. He is a life member of Indian Association of Bronchology and Indian
                        Society of Critical Care Medicine. He is also a life member of Indian Medical Association. His
                        basic area of interest is Interventional pulmonology and Critical Care Medicine. He has the
                        credit of starting and establishing one of the busiest Respiratory Medicine unit at Bombay
                        Hospital Indore. He is the pioneer in starting Medical Thoracoscopy in state of M.P (Semirigid
                        as well as Rigid).</p>

                    <h5 class="h5-md blue-color">Expertise</h5>
                    <p>Interventional Pulmonology (Bronchoscopy, Thoracoscopy), Critical Care Medicine, Obstructive and
                        Restrictive Airway Diseases, Respiratory infections, Allergic lung disorders.</p>


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