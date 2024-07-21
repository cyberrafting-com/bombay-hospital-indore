@php($title = "Dr. Mahendra Kumar Gupta | Bombay Hospital Indore")
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
                    <h4 class="h4-sm steelblue-color">Dr. Mahendra Kumar Gupta</h4>

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
                    <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-mahendra-gupta.jpg')}}"
                        alt="">

                    <!-- Doctor Info -->
                    <div class="doctor-info">
                        <h5 class="h5-md blue-color">Qualifications</h5>
                        <p>MBBS: from Lokmanya Tilak Municipal Medical College, Sion, Mumbai.</p>
                        <p>DNB General Surgery from VIMS, RKMSP, Kolkata.</p>
                        <p>MCh Plastic Surgery from IMS, BHU, Varanasi.</p>
                        <p>Ex-fellow: microvascular reconstruction and aesthetic surgery, Amandeep hospitals, Amritsar.
                        </p>
                        <p>Ex- Junior Consultant, Indraprastha Apollo Hospital, New Delhi.</p>
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Extn. No.:</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>Consulting Time:</td>
                                    <td>Mon-Sat - 10am to 6pm
                                    </td>
                                </tr>
                                <tr>
                                    <td>Consulting Room:</td>
                                    <td>25B (First Floor)</td>
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
                    <p>Dr Mahendra Kumar Gupta is a certified & eminent plastic surgeon having expertise in
                        Microvascular, Reconstructive & Aesthetic surgery. In his practice he offers the latest, most
                        advance, comprehensive & personalised treatment approach to give the best results to the
                        patient.
                    </p>
                    <p>He obtained his training in reconstructive plastic surgery from IMS, Banaras Hindu University,
                        Varanasi, one of the pioneer institutes for medical education in Indian Subcontinent, where he
                        gained wide experience covering trauma, burns, maxillofacial and hand surgeries. He further
                        acquired his fellowship in microvascular reconstruction and aesthetic surgery from Amandeep
                        hospitals, Amritsar which equipped him with the latest techniques including Lasers.</p>
                    <p>In the past he has worked at various eminent centres including AIIMS (BBSR), NSCB Medical
                        college, Jabalpur and the latest being Indraprashtha Apollo hospitals, New Delhi, as a
                        specialised cancer related reconstructive surgeon (oncoplastic Surgeon).</p>
                    <p>Various publications in peer reviewed journals and presentations at multiple national and
                        international conferences is a testament of his keen interest in academics and research. He is
                        also a member of editorial panel of a bimonthly scientific journal.</p>

                    <h5 class="h5-md blue-color">Expertise</h5>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Complex wound management, Micro-vascular reconstruction, oncoplastic breast
                            surgery, maxillofacial and hand trauma, lymphedema(filariasis), varicose vein</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Aesthetic surgeries: gynecomastia, liposuction, abdominoplasty, breast
                            augmentation (enlargement) and reduction, blepharoplasty, botox and fillers, Scar and
                            pigmentation reduction</p>
                    </div>
                </div>
            </div> <!-- END DOCTOR BIO -->


        </div> <!-- End row -->
    </div> <!-- End container -->
</section>

@stop