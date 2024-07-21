@php($title = "Surgical Oncology | Bombay Hospital Indore")
@section('meta_desc') @endsection

@extends('layouts.default')
@section('content')
<!-- BREADCRUMB
			============================================= -->
<div class="division">
    <!-- <div class="container">
                <div class="row">
                    <div class="col">
                        <div class=" breadcrumb-holder">

                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">Services</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Medical
                                    </li>
                                </ol>
                            </nav>

                            <h4 class="h4-sm steelblue-color">Cardiology</h4>

                        </div>
                    </div>
                </div> 
            </div>  -->
    <img src="{{ asset('/resources/assets/images/services/oncology-banner.jpg')}}" />
</div>

<div id="department-page" class="wide-60 department-page-section division">
    <div class="container">
        <div class="row">


            <!-- DEPARTMENT DETAILS -->
            <div class="col-lg-8">
                <div class="txt-block pr-30">


                    <!-- CONTENT BLOCK -->
                    <div class="content-block mb-40">
                        <!-- <div class="content-block-img">
                            <img class="img-fluid" src="{{ asset('/resources/assets/images/services/oncology.jpg')}}"
                                alt="content-image">
                        </div> -->

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

                        <p>While cancer ranks as one of the most feared diseases to haunt mankind, Bombay Hospital
                            Indore provides a constant ray of hope for the patients who trace their way here.</p>

                        <p>Ever since the first cancer patient was successfully treated here, Bombay Hospital Indore has
                            played a pioneering role in the effective treatment of cancer. Ensuring it stays abreast
                            with the latest developments in the fight against this killer disease, Bombay Hospital uses
                            a combination of surgery and chemotherapy to treat its patients.</p>

                        <p>With its enviable team of doctors and sophisticated equipment, the department successfully
                            performs numerous surgeries every year apart from the onco surgical procedures other
                            departments like Neurosurgery, Cardiac Surgery, Urosurgery, Orthopedic Surgery, GI Surgery,
                            ENT Surgery, Pediatric Surgery, Gynecology Surgery and General Surgery.</p>
                    </div> <!-- END CONTENT BLOCK -->
                </div>
            </div> <!-- END DEPARTMENT DETAILS -->

            <!-- SIDEBAR  -->
            <div class="col-lg-4">
                @include('includes.medical-sidebar')
            </div>

        </div> <!-- End row -->
    </div> <!-- End container -->
</div>

@stop