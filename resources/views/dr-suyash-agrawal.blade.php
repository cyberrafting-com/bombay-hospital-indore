@php($title = "Dr. Suyash Agrawal | Bombay Hospital Indore")
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
                    <h4 class="h4-sm steelblue-color">Dr. Suyash Agrawal</h4>

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
                    <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-suyash-agrawal.jpg')}}"
                        alt="">

                    <!-- Doctor Info -->
                    <div class="doctor-info">
                        <h5 class="h5-md blue-color">Qualifications</h5>
                        <p>DNB, DrNB, AHNS</p>
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Extn. No.:</td>
                                    <td>2119</td>
                                </tr>
                                <tr>
                                    <td>Consulting Time:</td>
                                    <td>Mon-Sat - 10 am to 6 pm
                                    </td>
                                </tr>
                                <tr>
                                    <td>Consulting Room:</td>
                                    <td>19</td>
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
                    <p>Dr. Agrawal is a Consultant Surgical Oncologist at the Bombay Hospital - Indore. He completed his
                        training in Surgical Oncology from Bombay Hospital Mumbai and has come to join his alma-mater.
                        His clinical practice focuses on the care of patients with all types of head & neck cancers,
                        breast cancers, gynecological cancers and gastro-intestinal and retroperitoneal tumors.
                    </p>
                    <p>Since Head & Neck and Breast cancers are the most common cancers in India, Dr. Agrawal went on to
                        obtain further experience & training in the management of Head & Neck Cancers in Canada by
                        completing the prestigious American Head & Neck Society Fellowship. He has immense experience in
                        using Intraoperative Nerve Monitoring technique to improve patient safety for operating on
                        Thyroid, Parathyroid and Parotid tumors. Dr. Agrawal’s team includes prosthodontist and speech
                        and language pathologist to help patients in post surgery speech rehabilitation and better
                        cosmetic outcomes.</p>
                    <p>Dr. Agrawal is also trained in the Breast Conservation surgeries including Sentinel lymph node
                        biopsy which reduces the post operative complications of arm lymphedema. Dr. Agrawal is trained
                        in chemoport placement for safe and comfortable administration of chemotherapy.</p>

                    <h5 class="h5-md blue-color">Expertise</h5>
                    <p>Dr. Agrawal has particular interest in the treatment of Mediastinal and thoracic tumors including
                        thymomas and peritoneal surface malignancies, and offers cytoreductive surgery with heated
                        intraperitoneal chemotherapy (HIPEC) to appropriate patients. He has expertise in basic and
                        advanced laparoscopic abdominal surgeries.</p>


                    <h5 class="h5-md blue-color">Achievements and Accolades</h5>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Awarded the prestigious fellowship by American Head & Neck Society (Los Angeles)
                        </p>
                    </div>

                    <p><b>Memberships-</b></p>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Presented Scientific Papers at numerous National & International Forums</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Honours in Pathology & Pediatrics</p>
                    </div>
                </div>
            </div> <!-- END DOCTOR BIO -->


        </div> <!-- End row -->
    </div> <!-- End container -->
</section>

@stop