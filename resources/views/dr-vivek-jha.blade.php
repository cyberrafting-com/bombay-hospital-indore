@php($title = "Dr. Vivek Jha | Bombay Hospital Indore")
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
                    <h4 class="h4-sm steelblue-color">Dr. Vivek Jha</h4>

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
                    <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-vivek-jha.jpg')}}" alt="">

                    <!-- Doctor Info -->
                    <div class="doctor-info">
                        <h5 class="h5-md blue-color">Qualifications</h5>
                        <p>MBBS - M.G.M. MEDICAL COLLEGE, INDORE 1991-1997</p>
                        <p>MS {GENERAL SURGERY} - GANDHI MEDICAL COLLEGE, BHOPAL 1998-2001</p>
                        <p>D.N.B. {GENITO-URINARY SURGERY} - SIR H. N. HOSPITAL, MUMBAI 2002-2004</p>
                        <p>M.N.A.M.S. {UROLOGY} - MUMBAI 2005</p>
                        <p>Fellowship in Sports Medicine and knee Arthroscopy, Lyon, France, 2018.</p>
                        <p>Fellowship: Société Internationale d\'Urologie (SIU)</p>
                        <p>Scholarship Recipients for 2005 Vivek Jha (India) at Assiut University, EGYPT</p>
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Extn. No.:</td>
                                    <td>2015</td>
                                </tr>
                                <tr>
                                    <td>Consulting Time:</td>
                                    <td>Mon-Sat - 10 am to 6 pm
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
                    <p>Dr Vivek Jha obtained his medical degree from M.G.M. MEDICAL COLLEGE, INDORE. He went on to
                        successfully completed his post-graduate training in General surgery obtaining the Masters
                        Degree from GANDHI MEDICAL COLLEGE, BHOPAL. Thereafter he joined Reliance owned sir H.N.
                        Hospital in MUMBAI and done his superspecialization- D.N.B. (Genito-urinary surgery). Then he
                        went to Egypt, at Assiut University for Société Internationale d\ ('Urologie (SIU)) fellowship
                        and after returning to India he joined as a consultant in RG Stone Urological institute, Mumbai
                        for advanced laser and laparoscopic urological surgery.</p>
                    <p>He joined Bombay hospital Indore in 2006 and has been working here since .He has performed more
                        than 7000 surgeries including complex PCNL, Laser and Renal transplant surgeries</p>
                    <p>He also completed a Fellowship in Sports Medicine and knee Arthroscopic Reconstruction held at
                        Centre Orthopedic Santy, FIFA Medical Centre of Excellence under guidance of Dr. Bertrand
                        Sonnery-Cottet at Lyon, France, where he got special training in meniscus repair meniscus
                        transplant, ACL repair, Stump Preserving ACL Surgery, ALL reconstruction Arthroscopy and
                        management of sports injury in athletes and sports persons.</p>
                    <p>He has great research inclination and got publications in internationally reputed Journals like
                        JBJS British & Foot & Ankle Specialist, American. He is member of editorial board of open access
                        journal “ case reports in orthopaedics”.</p>
                    <p>He is a life member of Bombay Orthopaedic Society & IOA and he is international affiliate member
                        of the american academy of orthopaedic surgeons.</p>
                    <p>He is an active member of Société Internationale d\'Urologie (SIU), American urology society and
                        various urology societies in India.</p>

                    <h5 class="h5-md blue-color">Expertise</h5>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Complex TURP, PCNL and Ureteroscopy,</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Laser and Laparoscopic Urology surgery</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Renal transplant</p>
                    </div>

                    <h5 class="h5-md blue-color">Achievements and Accolades</h5>

                    <!-- <div class="box-list m-top-15">
                                <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                                <p class="p-sm">Life member: - I.M.A. Life member: - Family Physician association.</p>
                            </div> -->

                </div>
            </div> <!-- END DOCTOR BIO -->


        </div> <!-- End row -->
    </div> <!-- End container -->
</section>

@stop