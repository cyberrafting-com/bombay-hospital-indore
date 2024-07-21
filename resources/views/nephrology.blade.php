@php($title = "Nephrology | Bombay Hospital Indore")
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
    <img src="{{ asset('/resources/assets/images/services/nephrology-banner.jpg')}}" />
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
                            <img class="img-fluid" src="{{ asset('/resources/assets/images/services/nephrology.jpg')}}"
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

                        <p>The Nephrology department of Bombay Hospital Indore is one of the most advanced Nephrology
                            units in the country. Faculty in department are AIIMS trained with experience of more than
                            10 and 20 years. It gives comprehensive Nephrology care which includes general nephrology,
                            intensive care nephrology, hemodialysis, peritoneal dialysis and kidney transplantation.</p>

                        <p>The hemodialysis unit is equipped with 18 ultramodern dialysis machines and RO plant. The
                            work load is huge and increasing requiring round the clock service even for out-patients. It
                            supports the 64-bedded critical care department with CRRT and SLED which are dialysis for
                            patients who are seriously ill and dependant on high doses of medicines to maintain blood
                            pressure. Hepatitis B and C patients have dedicated machines and staff thereby ensuring
                            prevention of cross infection. All universal precautions are taken to prevent all forms of
                            infection. The dialysis technicians are all well trained and experienced. Nearly 55 to 60
                            hemodialysis are done daily.</p>

                        <p>Kidney transplantation is being conducted at our hospital for more than 5 years. Patients
                            from all over the Madhya Pradesh come here for kidney transplants. We perform live donor
                            transplants as well as deceased donor transplants. This is to ensure highest ethical
                            standards given the prevailing condition in the developing nations.</p>
                        <p>Clinics are conducted every day at the hospital by all consultants thus ensuring all patients
                            get timely care. A free OPD is also conducted for the poor.</p>

                        <h5 class="h5-md steelblue-color">Treatments and Procedures -</h5>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Acute Kidney Injury
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Chronic Kidney Disease
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Acute and chronic nephritis
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Nephrotic syndrome
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Reno vascular hypertension
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Collagen disorders involving the kidneys
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Facilities for CRRT (Continuous Renal Replacement Therapy) for critically ill patients
                                requiring dialysis
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Hemodialysis for acute and chronic renal failure patients, drug overuse etc
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Short term dialysis prior to transplantation
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Plasmapheresis for renal or non-renal cases
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Rigorous precautions are taken with patients suffering from Hepatitis B and C and
                                dialysis for such patients is done on separate machines.
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Continuous Ambulatory Peritoneal Dialysis (CAPD) is done for dialysis done at home and
                                does not require any complicated machinery or hospitalisation.
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Renal transplant both from living and cadaver donors. Cadaveric transplant is done by
                                harvesting the organ from a person certified as brain dead or deceased.
                            </p>
                        </div>
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