@php($title = "Dr. Kaushalendra Soni | Bombay Hospital Indore")
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
                    <h4 class="h4-sm steelblue-color">Dr. Kaushalendra Soni</h4>

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
                    <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-kaushalendra-soni.jpg')}}"
                        alt="">

                    <!-- Doctor Info -->
                    <div class="doctor-info">
                        <h5 class="h5-md blue-color">Qualifications</h5>
                        <p>MBBS from Gandhi Medical College, Bhopal, 1995-2001.</p>
                        <p>MD Radiodiagnosis NSCB Medical College, Jabalpur, 2001-2004.</p>
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
                                    <td>USG Dept.</td>
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
                    <p>Dr.Kaushalendra Soni obtained his medical graduation degree from Gandhi Medical College, Bhopal.
                        He completed his post graduation in radio diagnosis from NSCB Medical College, Jabalpur. After
                        that, he worked as a clinical assistant in the department of radiology in P.D Hinduja Hospital
                        Mumbai for a span. He came back to Bhopal in 2005 and joined the Bhopal Memorial Hospital
                        &Research centre as senior resident for two and half years. There he had vast experience in all
                        the field of radiology including the interventional segment, he performed the various image
                        guided diagnostic and therapeutic procedures (Biopsy, aspiration, catheter drainage, RFTA
                        etc).At BMHRC, he also had some experience in vascular and biliary procedures under the guidance
                        of Dr.Kailash Patel (Interventional Radiologist).He moved to Indore and joined as consultant in
                        the Vishesh Hospital diagnostic solutions for two and half years. He was consultant and
                        assistant professor for almost 5yrs in Mohak hospital at SAIMS medical college, Indore and
                        thereafter he was consultant radiologist in Medanta Hospital Indore for almost one year before
                        joining the Bombay hospital, Indore. He had keen interest in abdominal imaging and intervention.
                    </p>

                    <h5 class="h5-md blue-color">Expertise</h5>
                    <p>Ultrasound, Doppler & Image guided procedures.</p>


                    <h5 class="h5-md blue-color">Achievements and Accolades</h5>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Five years of teaching experience to postgraduate MD students.</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Publications in journal.</p>
                    </div>
                </div>
            </div> <!-- END DOCTOR BIO -->


        </div> <!-- End row -->
    </div> <!-- End container -->
</section>

@stop