@php($title = "Dr. Sandeep Rathore | Bombay Hospital Indore")
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
                    <h4 class="h4-sm steelblue-color">Dr. Sandeep Rathore</h4>

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
                    <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-sandeep-rathore.jpg')}}"
                        alt="">

                    <!-- Doctor Info -->
                    <div class="doctor-info">
                        <h5 class="h5-md blue-color">Qualifications</h5>
                        <p>MBBS from MGM Medical College Indore MP, 2002-2008. MS (Surgery) AIIMS Delhi, 2009-2012.
                            Senior Resident Surgery AIIMS Delhi, 2012-2015. Member and Fellow of International College
                            of Laparoscopic Surgeons (MCLS, FCLS) Delhi, 2015.</p>
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Extn. No.:</td>
                                    <td>2115</td>
                                </tr>
                                <tr>
                                    <td>Consulting Time:</td>
                                    <td>Mon-Sat - 10 am to 6 pm
                                    </td>
                                </tr>
                                <tr>
                                    <td>Consulting Room:</td>
                                    <td>15 (First Floor)</td>
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
                    <p>Dr. Sandeep Rathore obtained his medical degree from Devi Ahilya University, Indore. He went on
                        to successfully complete his Post-graduate training in Surgery obtaining the Master of Surgery
                        from All India Institute of Medical Sciences (AIIMS) Delhi. He successfully completed three
                        years of senior residency in Surgery (Endocrine, Bariatric and transplant unit) from AIIMS Delhi
                        on July 2015. He was privileged to have trained under expert faculties of AIIMS Delhi a total
                        period of six years. Following his return, he joined as Assistant Professor Surgery SAMC & PGI
                        Indore, MP in July 2015 and worked for more than a year there. He Joined Bombay Hospital, Indore
                        as GI and Laparoscopic Surgeon on September 2016.</p>
                    <p>He started doing advanced laparoscopic and GI Surgery in Indore. He was involved in
                        under-graduate and post-graduate teaching program at SAMC & PGI Indore, MP. He is Life Member of
                        Association of Surgeons of India (ASI). He is also Life Member of Society of Endoscopic and
                        Laparoscopic Surgeons of India (SELSI), Indian Hernia Society (IHS), Indian Society for Trauma
                        and Acute Care (ISTAC) and Indore City Chapter - ASI.</p>

                    <h5 class="h5-md blue-color">Expertise</h5>
                    <p>GI Laparoscopy, Bariatric & Endocrine Surgery, Thoracic Surgery, Cancer Surgery, Transplant and
                        vascular surgery, General Surgery.</p>

                    <h5 class="h5-md blue-color">Achievements and Accolades</h5>
                    <p>Published original article in International Saudi Surgical Journal, Trauma scores and outcomes: A
                        study of 2541 patients in level I trauma center of a Developing Country.</p>
                    <!-- <div class="box-list m-top-15">
                                <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                                <p class="p-sm">Chapter on Hepatorenal syndrome on APICON medicine update 2006</p>
                            </div> -->

                </div>
            </div> <!-- END DOCTOR BIO -->


        </div> <!-- End row -->
    </div> <!-- End container -->
</section>

@stop