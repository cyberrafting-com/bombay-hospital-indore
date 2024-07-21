@php($title = "Cardiovascular & Thoracic Surgery | Bombay Hospital Indore")
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
                    <h4 class="h4-sm steelblue-color">Cardiovascular & Thoracic Surgery</h4>

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
                            <img class="img-fluid"
                                src="{{ asset('/resources/assets/images/services/cardiovascular.jpg')}}"
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

                        <p>Changes in lifestyles, higher livel of stress and all sorts of pollution are causing an
                            epidemic of cardiovascular diseases in India. This increasing incidence of cardiovascular
                            diseases has also made it necessary for us to provide state-of-the-art hospitals with latest
                            technologies to adequately deal with these illnesses.</p>
                        <p>Bombay Hospital Indore is conceived to provide a state of art fully equipped cardiac care
                            centre to provide comprehensive services to our patients. The entire gamut of services from
                            diagnostic non invasive services and CT imaging is available under one roof, as are top
                            class Interventional cardiology and Interventional radiology. A full range of Cardiac
                            surgery and Vascular surgery services complete the therapeutic armamentarium for providing
                            patients with the best in class treatment that is their right.</p>

                        <p>Cardiac Unit at Bombay Hospital Indore consists of a spacious pre-operative area, fully
                            dedicated operation theater, 10 recovery rooms, a cath lab and central monitoring station.
                            They function as one cohesive, self-sufficient unit infusing renewed vigor into the life
                            sustaining organ we know as the heart.</p>

                        <p>Operation theatre dedicated exclusively for all types of cardiac surgeries inclusive of Heart
                            Transplant. The theater is equipped to conduct the most complicated and delicate coronary
                            artery bypass grafting procedures. The sophisticated equipment available includes:</p>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p><b>Sarns 8000 Modular Perfusion System-</b><br>Utilised extensively during open-heart
                                surgeries, it offers a five pump base with easily interchangeable pumpheads.
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p><b>Sarns Temperature Control Monitor II-</b><br>Provides precise temperature control
                                required to monitor patients on cardiopulmonary bypass.
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p><b>Octopus-</b><br>Used successfully to conduct Minimal Invasive Coronary Artery (MICAS)
                                surgery.
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p><b>Maquet Betstar Mobile Universal Operating Table-</b><br>Combines electrohydraulic
                                drive for table height, lateral tilt and Trendelburg adjustments for unmatched patient
                                positioning capabilities.
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