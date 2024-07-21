@php($title = "Dr. Kashish Ahuja | Bombay Hospital Indore")
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
                    <h4 class="h4-sm steelblue-color">Dr. Kashish Ahuja</h4>

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
                    <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-kashish-ahuja.jpg')}}"
                        alt="">

                    <!-- Doctor Info -->
                    <div class="doctor-info">
                        <h5 class="h5-md blue-color">Qualifications</h5>
                        <!-- <p>M.B; B.S 1990-1996. Gandhi Medical College, Bhopal, M.P.</p>
                                <p>M.D. (Medicine). 1996-1999. Gandhi Medical College, Bhopal, M.P.</p>
                                <p>D.M. (Cardiology). 2000-2003. PGIMER, Chandigarh.</p> -->
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
                                    <td>OT Complex</td>
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
                    <!-- <p>1 year Rotatory Internship. 1995-1996.</p>
                            <p>3 years Junior Residency in Internal Medicine, 1996-1999.</p>
                            <p>1 year Senior Residency in Internal Medicine 1999-2000 at Gandhi Medical College, Bhopal.</p>
                            <p>3 years Senior Residency in Cardiology, 2000-2003, at PGIMER, Chandigarh.</p>
                            <p>Fellowship in Invasive Cardiology from August 2003 to Sept. 2004 at Fortis Heart and Multispeciality Hospital run by Ranbaxy Ltd.</p>
                            <p>Currently: Interventional Cardiologist at Bombay Hospital Indore since October 2004.</p> -->

                    <h5 class="h5-md blue-color">Expertise</h5>
                    <!-- <p>Coronary and Peripheral Interventions, Pacemakers and ICD Implantations, Therapeutic Congenital Interventions</p> -->


                    <h5 class="h5-md blue-color">Achievements and Accolades</h5>
                    <!-- <div class="box-list m-top-15">
                                <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                                <p class="p-sm">The Late Smt. Narmada Bai Memorial Gold Medal for securing highest marks in Forensic Medicine.</p>
                            </div> -->
                </div>
            </div> <!-- END DOCTOR BIO -->


        </div> <!-- End row -->
    </div> <!-- End container -->
</section>

@stop