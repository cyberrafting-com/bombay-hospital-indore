@php($title = "Dr. Shailendra Rai | Bombay Hospital Indore")
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
                    <h4 class="h4-sm steelblue-color">Dr. Shailendra Rai</h4>

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
                    <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-shailendra-rai.jpg')}}"
                        alt="">

                    <!-- Doctor Info -->
                    <div class="doctor-info">
                        <h5 class="h5-md blue-color">Qualifications</h5>
                        <p>MBBS from MGM Medical College Indore, M.P. (2001-2006)</p>
                        <p>DNB (Anesthesia and Critical Care) from BMHRC Bhopal, (2010-2013)</p>
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
                    <p>Dr. Shailendra has done his M.B.B.S. from Mahatama Gandhi Memorial Medical College Indore (M.P.)
                        and completed his internship from M.Y. hospital Indore. Afterward he completed his D.N.B.
                        (Diplomate in National Board) in Anaesthesiology and Critical Care from Bhopal Memorial Hospital
                        and Research Center Bhopal; a superspecility hospital under care of ICMR ( Gov. of India).</p>
                    <p>He has joined Bombay Hospital Indore as Consultant Intensivist in 2013.</p>
                    <p>He has worked in many reputed institutions like KIMS superspecility hospital C.G., Index medical
                        college hospital and research center Indore, Rajshree Apollo Hospitals Indore, Peoples Medical
                        College and research centre Bhopal.</p>

                    <h5 class="h5-md blue-color">Expertise</h5>
                    <p>Apart from expertise in Cardiac And Neuro Anaesthesia he has keen interest in field of Critical
                        Care.</p>
                    <p>He is trained in all the invasive, non-invasive and emergency procedures performed in Intensive
                        care units and operation theatres, has wide experience in management of Critically ill patient.
                        Had good knowledge of pathophysiolgy of various diseases encountered in intensive care units and
                        their management along with expertise in operating all the modern equipments and machines used
                        in Intensive Care Units and Operation theatres, have expertise in all types of Invasive and
                        non-invasive monitoring using ultramodern equipments, wide experience in Invasive and
                        non-invasive Ventilatory management of critically ill patients.</p>

                    <h5 class="h5-md blue-color">Achievements and Accolades</h5>
                    <p>He has attended number of CME’s and Conferences and training programmes such as-</p>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Workshop on Problem Solving for Better Health, conducted by PSM dept. MGMMC,
                            Indore</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">CME on HIV/AIDS Prevention & Treatment Awareness, organized by NACO & IMA Indore
                        </p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Balaji Anesthesia Postgraduate Update & Workshop on CPCR , SVIMS, Tirupati
                            (A.P.)</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Essentials of Acute Stroke Treatment (EAST), Certificate Course at CMHRC Bhopal.
                        </p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">13th Annual National Conference, Indian Society of Neuroanaesthesiology &
                            Critical Care.</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Ramachandra Anaesthesia Continuing</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Education,,Ramachandra University Chennai.</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Anaesthesia Review Course, at Tata Memorial Centre, Mumbai.</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">EORCAPS conducted by UCMS & GTB Hospital, New Delhi.</p>
                    </div>

                </div>
            </div> <!-- END DOCTOR BIO -->


        </div> <!-- End row -->
    </div> <!-- End container -->
</section>

@stop