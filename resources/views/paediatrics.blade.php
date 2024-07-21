@php($title = "Paediatrics | Bombay Hospital Indore")
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
    <img src="{{ asset('/resources/assets/images/services/pediatrics-banner.jpg')}}" />
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
                            <img class="img-fluid" src="{{ asset('/resources/assets/images/services/paediatrics.jpg')}}"
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

                        <p>The evolution of Basic Paediatric Services to Paediatric Super-specialities</p>

                        <h5 class="h5-md steelblue-color">Neonatology</h5>

                        <p>Basic and advanced Neonatal Services available for intramural and exutero transported babies.
                            The neonatal unit is manned round the clock by residents and equipped with state of the art
                            monitors and experienced nurses. Ventilatory management both conventional and high frequency
                            is now made available. Transport of babies to the hospital can be arranged with prior
                            intimation to the neonatal unit on tel. 4771111 ext. 2503.</p>

                        <h5 class="h5-md steelblue-color">Paediatric Medicine</h5>

                        <p>Routine and complex paediatric problems are dealt with at any time of the day in the
                            outpatients department and various clinics. Admissions to the hospital may be arranged
                            through the casualty or the consultants of choice.</p>

                        <h5 class="h5-md steelblue-color">Paediatric Intensive Care Unit</h5>

                        <p>Manned by doctors 24 hours a day, the unit is equipped with all monitoring equipment and
                            ventilators. Transport from other hospitals and nursing homes may be coordinated with the
                            NICU resident on call on 4771111 ext 2503.</p>
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