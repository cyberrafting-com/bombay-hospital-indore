@php($title = "Doctor’s Scorecard | Bombay Hospital Indore")
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
                            <li class="breadcrumb-item active" aria-current="page">Therapeutic
                            </li>
                        </ol>
                    </nav>

                    <!-- Title -->
                    <h4 class="h4-sm steelblue-color">Doctor’s Scorecard</h4>

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
                            <img class="img-fluid" src="{{ asset('/resources/assets/images/services/scorecard.jpg')}}" alt="content-image">
                        </div>
                        <!-- <div id="pricing-2" class="pricing-section division">
                                    <div class="row pricing-row">

                                        <div class="col-md-12">
                                            <h5 class="h5-md steelblue-color">Nutrition Clinic</h5>

                                            <div class="pricing-table mb-40">
                                                <table class="table table-hover">
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">Location</th>
                                                            <td>24B, 1st Floor</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">For Appointment</th>
                                                            <td>0731-4771111 Extn 4015</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Consulting Timings</th>
                                                            <td>10am – 6pm</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">List of Consultants</th>
                                                            <td>Dr. Priyanka Chauhan (HOD)</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->

                        <h5 class="h5-md steelblue-color">Centre For Brain and Nervous System</h5>

                        <p>Performed More than 5,000 cases which include Brain Tumour Surgeries, Craniovertebral
                            Junctional Surgeries, Spinal Tumour Surgeries, Complex Spine Surgeries, Minimally
                            Access Spine Surgeries, Trigeminal Neuralgia Surgeries etc.</p>

                        <h5 class="h5-md steelblue-color">Centre for Cardiac Sciences</h5>

                        <p>Over 11,500 Coronary Angiographies and 3,500 Coronary Angioplasties successfully
                            performed by the Centre for Cardiac Science.<br>More than 1,700 Cardiac Surgeries
                            performed with world class outcomes.</p>

                        <h5 class="h5-md steelblue-color">Centre for Cancer</h5>

                        <p>Completed Over 2,500 complex cancer surgeries with excellent outcomes for Head and
                            Neck, Oesophagectomies, Primary Reconstruction with Microvascular Free Flaps,
                            Gynaecologic Cancers, kidney, urinary bladder & prostate, Breast Cancer etc.</p>

                        <h5 class="h5-md steelblue-color">Centre For Bone and Joint</h5>

                        <p>Over 8,900 Joint Replacement, Arthroscopic and Spine Surgeries Performed.</p>

                        <!-- <div class="box-list">
                                    <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                                    <p>Echocardiography
                                    </p>
                                </div> -->

                    </div> <!-- END CONTENT BLOCK -->
                </div>
            </div> <!-- END DEPARTMENT DETAILS -->

            <!-- SIDEBAR  -->
            <div class="col-lg-4">
                @include('includes.therapeutic-sidebar')
            </div>

        </div> <!-- End row -->
    </div> <!-- End container -->
</div>

@stop