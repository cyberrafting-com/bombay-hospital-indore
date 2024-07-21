@php($title = "Dr. Sanjeev Asati | Bombay Hospital Indore")
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
                    <h4 class="h4-sm steelblue-color">Dr. Sanjeev Asati</h4>

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
                    <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-sanjeev-asati.jpg')}}"
                        alt="">

                    <!-- Doctor Info -->
                    <div class="doctor-info">
                        <h5 class="h5-md blue-color">Qualifications</h5>
                        <p>MBBS from B.J. Medical College, Ahmedabad, 2009-2015</p>
                        <p>MS (Orthopaedics) from V.S. General Hospital, NHL Medical College, Ahmedabad, 2016-2019.</p>
                        <p>ASSI Spine Fellowship from Bombay Hospital and Research Centre, Mumbai, 2019- 2021.</p>
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Extn. No.:</td>
                                    <td>2101</td>
                                </tr>
                                <tr>
                                    <td>Consulting Time:</td>
                                    <td>Mon-Sat - 10 am to 6 pm
                                    </td>
                                </tr>
                                <tr>
                                    <td>Consulting Room:</td>
                                    <td>1</td>
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
                    <p>Dr Sanjeev Asati did his schooling from Jawahar Navodaya Vidyalaya, Nowgong (Chhatarpur). He
                        joined MBBS at B.J. Medical Hospital, Ahmedabad in 2009. After that, he finished his MS
                        Orthopaedics from V.S. General Hospital, NHL Medical College, Ahmedabad. In 2019 he got into
                        ASSI spine Fellowship program and did two years’ fellowship in spine surgery from Bombay Hosptal
                        and Medical Research Centre, Mumbai under the guidance of Dr. Arvind G Kulkarni and Dr. Vishal G
                        Kundnani.
                    </p>

                    <h5 class="h5-md blue-color">Expertise</h5>
                    <p>Dr Sanjeev Asati is trained in managing all conditions related to spine. He is a trained
                        Minimally invasive spine surgeon (Key Hole Spine Surgery) (Endoscopic Tubular Spine Surgery). He
                        is expert in managing Back pain, Neck pain, Disc prolapse, Sciatica, Spondylolisthesis, lumbar
                        canal stenosis, Traumatic spine conditions, Osteoporotic fractures, Spinal Infections (Spinal
                        Tuberculosis), Spine Tumors, Spine deformities (Scoliosis, Kyphosis), Cervical spine surgeries,
                        Craniovertebral junction surgeries, Pediatric spine, Navigation based spine surgeries, epidural
                        injections, Selective nerve root blocks, facet blocks.</p>


                    <h5 class="h5-md blue-color">Achievements and Accolades</h5>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">He has numerous publications in various national and international journals.</p>
                    </div>

                    <p><b>Memberships-</b></p>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Member of Association of Spine Surgeons of India (ASSI) (No. 3505)</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">AO Spine (100377120)</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Endoscopic Spine Foundation India (ESFI 003/10/2021/3)</p>
                    </div>
                </div>
            </div> <!-- END DOCTOR BIO -->


        </div> <!-- End row -->
    </div> <!-- End container -->
</section>

@stop