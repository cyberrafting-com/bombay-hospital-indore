@php($title = "Ear / Nose / Throat (ENT) | Bombay Hospital Indore")
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
                            <li class="breadcrumb-item"><a href="#">Services</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Surgical
                            </li>
                        </ol>
                    </nav>

                    <!-- Title -->
                    <h4 class="h4-sm steelblue-color">Ear / Nose / Throat (ENT)</h4>

                </div>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</div> <!-- END BREADCRUMB -->

<div id="department-page" class="wide-60 department-page-section division">
    <div class="container">
        <div class="row">


            <!-- DEPARTMENT DETAILS -->
            <div class="col-lg-8">
                <div class="txt-block pr-30">


                    <!-- CONTENT BLOCK -->
                    <div class="content-block mb-40">
                        <div class="content-block-img">
                            <img class="img-fluid" src="{{ asset('/resources/assets/images/services/ent.jpg')}}"
                                alt="content-image">
                        </div>

                        <!-- <div id="pricing-2" class="pricing-section division">
                                    <div class="row pricing-row">

                                        <div class="col-md-12">
                                            <h5 class="h5-md steelblue-color">ECG</h5>

                                            <div class="pricing-table mb-40">
                                                <table class="table table-hover">
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">Location</th>
                                                            <td>Ground Floor</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">For Appointment</th>
                                                            <td>0731-4771111 Extn. 2004</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Dept. Timings</th>
                                                            <td>Emergency-24 hrs</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">List of Consultants</th>
                                                            <td>Dr. Arun Jain</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <h5 class="h5-md steelblue-color">X-RAY</h5>

                                            <div class="pricing-table mb-40">
                                                <table class="table table-hover">
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">Location</th>
                                                            <td>Basement</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">For Appointment</th>
                                                            <td>0731-4771111 Extn. 3006</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Dept. Timings</th>
                                                            <td>Emergency-24 hrs</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">List of Consultants</th>
                                                            <td>Dr. Mukesh Gupta</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->

                        <p>The department of ENT is considered one of the best and renowned ENT SPECIALISTS with
                            vast experience and consists of State of Art equipment for diagnosis and surgery.
                        </p>
                        <p>There are speciality services provided managing basic and advanced cases of –</p>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Otology – Ear Microsurgery, Laser Stapedotomy, Cochlear Implant Surgery
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Neuro – Otology and Vertigo Clinic
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Rhinology – Sinus and Nasal Endoscopic procedures, Balloon Sinuplasty
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Endoscopic Skull-base Surgery
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Phonosurgery and Phono-microsurgery such as Microflap, Puberphonia Surgery.
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Voice Change Surgeries, Injection Laryngoplasty
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Airway Surgery and Aclarent Balloon Dilatation
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Laryngeal Laser Surgeries
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Swallowing Disorders
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Sleep Apnoea and other Head and Neck Surgeries
                            </p>
                        </div>
                    </div> <!-- END CONTENT BLOCK -->
                </div>
            </div> <!-- END DEPARTMENT DETAILS -->

            <!-- SIDEBAR  -->
            <div class="col-lg-4">
                @include('includes.surgical-sidebar')
            </div>

        </div> <!-- End row -->
    </div> <!-- End container -->
</div>

@stop