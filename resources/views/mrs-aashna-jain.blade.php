@php($title = "Mrs. Aashna Jain | Bombay Hospital Indore")
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
                    <h4 class="h4-sm steelblue-color">Mrs. Aashna Jain</h4>

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
                    <img class="img-fluid" src="{{ asset('/resources/assets/images/team/mrs-aashna-jain.jpg')}}" alt="">

                    <!-- Doctor Info -->
                    <div class="doctor-info">
                        <h5 class="h5-md blue-color">Qualifications</h5>
                        <p>Bachelors in Audiology & Speech Language Pathology (B.ASLP) - Ali Yavar Jung National
                            Institute for the Hearing Handicapped, Mumbai from 2008-2012</p>
                        <p>Masters in Audiology & Speech Language Pathology (M.ASLP) - Ali Yavar Jung National Institute
                            for the Hearing Handicapped, Mumbai from 2012-2014.</p>
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Extn. No.:</td>
                                    <td>2610</td>
                                </tr>
                                <tr>
                                    <td>Consulting Time:</td>
                                    <td>Mon-Sat - 10 am to 6 pm
                                    </td>
                                </tr>
                                <tr>
                                    <td>Consulting Room:</td>
                                    <td>25 (First Floor)</td>
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
                    <p>Aashna Jain obtained her graduation degree cum laude from the national apex college Ali Yavar
                        Jung National Institute of Hearing & Handicapped (AYJNIHH), Mumbai. She further pursued masters
                        degree summa cum laude from AYJNIHH, Mumbai. During her education she had experience working at
                        prestigious hospitals like Lokmanya Tilak Sion Hospital, INHS Asvini etc.</p>
                    <p>With her increasing interest in post stroke patients and other neurological disorders she joined
                        Department. of Neurology, M. Y. Hospital with Dr. Apoorva Pauranik on honorary basis.</p>
                    <p>In August, 2015 she joined Bombay Hospital and has been working here since.</p>

                    <h5 class="h5-md blue-color">Expertise</h5>
                    <p>She has been working extensively in the field of rehabilitative services to post stroke patients
                        with speech-language & swallowing disorders.She also provides speech therapy to children with
                        stammering, unclear speech, delay in speech & language development.</p>

                    <h5 class="h5-md blue-color">Achievements and Accolades</h5>

                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Gold Medalist - Maharashtra University of Health Sciences , Post Graduation -
                            MASLP</p>
                    </div>

                </div>
            </div> <!-- END DOCTOR BIO -->


        </div> <!-- End row -->
    </div> <!-- End container -->
</section>

@stop