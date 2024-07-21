@php($title = "Executive Checkup Schemes | Bombay Hospital Indore")
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
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Executive Checkup Schemes
                            </li>
                        </ol>
                    </nav>

                    <h4 class="h4-sm steelblue-color">Executive Checkup Schemes</h4>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="department-page" class="wide-60 department-page-section division">
    <div class="container">
        <div class="row">

            <div class="col-lg-8">
                <div class="txt-block pr-30">


                    <!-- CONTENT BLOCK -->
                    <div class="content-block mb-40">
                        <!-- Image -->
                        <div class="content-block-img">
                            <img class="img-fluid" src="{{ asset('/resources/assets/images/ehs.jpg')}}" alt="">
                        </div>

                        <!-- Small Title -->
                        <h5 class="h5-md steelblue-color"><q>Wide Range of Medical Facilities under one roof</q>
                        </h5>

                        <p>Urban living in the 21st Century is not the kind of living our bodies were designed
                            for. The fast pace of life, stress, sedentary lifestyle, travel, irregular eating
                            habits and the ever attendant toxic pollutants in air, water and food, all serve to
                            wear out our bodies at an alarming rate.</p>

                        <h5 class="h5-md steelblue-color">What it is?</h5>

                        <p>In a quest to perform, today’s Executive thinks fit to take care of himself, Slowly
                            diminishing eyesight, stamina, energy, span of concentration, and patience on one
                            hand and increasing headaches, acidity, forgetfulness, body aches on the other are
                            expected to fade away. One seldom gives them the kind of attention they need and
                            deserve, Ironically, in organisation, where even machines get preventive
                            maintenance, the executives health remains totally neglected.</p>

                        <h5 class="h5-md steelblue-color">Who Benefits?</h5>

                        <!-- CONTENT BOX #1 -->
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-genderless"></i></div>
                            <p>While these men are carefully planning the healthy life of our organisation, Who
                                cares for their health? Who, for that matter cares for your?
                            </p>
                        </div>

                        <!-- CONTENT BOX #2 -->
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-genderless"></i></div>
                            <p>A slight heart pain, cardiac arrest, a bill running in six figures, and an
                                immeasurable loss to the company. Can you afford to lose your key executive
                                time? Is an insurance cover the only way to show that you care for them and
                                their families?
                            </p>
                        </div>

                        <!-- Small Title -->
                        <h5 class="h5-md steelblue-color">What is the Solution?</h5>

                        <!-- Text -->
                        <p class="mb-30">The Executive Health Scheme (EHS) is designed to meet this
                            organizational need. We realize the importance of the individual and of time.
                            Therefore we carry out a comprehensive set of medical tests and examinations, in
                            half a day, under one roof. This is followed by a detailed physical examination with
                            the reports of the tests to ensure you have the best perspective on our health.
                        </p>

                        <h5 class="h5-md steelblue-color">Instructions to be followed</h5>

                        <!-- Text -->
                        <p class="mb-10">Please bring the following samples with you on the day your
                            appointment: Urine & Stool
                        </p>

                        <!-- Options List -->
                        <div class="options-list">
                            <!-- Option #1 -->
                            <div class="box-list m-top-15">
                                <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i>
                                </div>
                                <p>Collect first morning urine & stool in sterilized bottles.<br>The Bottles can
                                    be collected one day earlier from the Pathology at ground floor between 9-00
                                    A.M. to 5-00 P.M.</p>
                            </div>

                            <!-- Option #2 -->
                            <div class="box-list">
                                <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i>
                                </div>
                                <p class="p-sm">You are requested to come (12 hours) fasting at 9-00 A.M.</p>
                            </div>

                            <!-- Option #3 -->
                            <div class="box-list">
                                <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i>
                                </div>
                                <p>Please do not consume tea. You may however have water.</p>
                            </div>

                            <!-- Option #4 -->
                            <div class="box-list">
                                <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i>
                                </div>
                                <p>No Alcohol for at least 24 hours before the test.</p>
                            </div>

                            <!-- Option #5 -->
                            <div class="box-list m-top-15">
                                <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i>
                                </div>
                                <p>In case you are undergoing any treatment, we suggest you check with your
                                    physician before taking an appointment.</p>
                            </div>

                            <!-- Option #6 -->
                            <div class="box-list">
                                <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i>
                                </div>
                                <p class="blue-color">For any other inquiries please contact on<br>
                                    <a href="tel: 07312573942">0731-2573942 </a>, 4771111
                                </p>
                            </div>

                        </div>

                        <p class="mb-30"><b>Note:</b> You are requested to collect your reports & have
                            consultation after two days between 5-00 P.M. to 7-00 P.M. with prior appointment.
                        </p>
                    </div>


                </div>
            </div> <!-- END DEPARTMENT DETAILS -->


            <!-- SIDEBAR  -->
            <aside id="sidebar" class="col-lg-4">


                <!-- TEXT WIDGET -->
                <div id="txt-widget" class="sidebar-div mb-50">

                    <!-- Title -->
                    <h5 class="h5-sm steelblue-color">Health Checkup Plans</h5>

                </div> <!-- END TEXT WIDGET -->


                <!-- SIDEBAR TABLE -->
                <div class="sidebar-table blue-table sidebar-div mb-50">

                    <!-- Table -->
                    @include('includes.health-checkup-sidebar')
                </div> <!-- END SIDEBAR TABLE -->

            </aside> <!-- END SIDEBAR -->


            <section id="pricing-1" class="wide-60 pricing-section division">
                <div class="container">


                    <!-- SECTION TITLE -->
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1 section-title">
                            <!-- Title 	-->
                            <h3 class="h3-md steelblue-color">Health Checkup Packages</h3>
                        </div>
                    </div>


                    <!-- PRICING TABLES -->
                    <div class="row pricing-row">
                        <!-- PRICING TABLE #1 -->
                        <div class="col-lg-4">
                            <div class="pricing-table icon-xl">

                                <!-- Icon -->
                                <img class="img-fluid"
                                    src="{{ asset('/resources/assets/images/comprehensive-health.jpg')}}"
                                    alt="doctor-foto">

                                <div class="pricing-table-content">

                                    <!-- Title -->
                                    <h5 class="h5-lg">Comprehensive</h5>

                                    <!-- Plan Price  -->
                                    <div class="pricing-plan">
                                        <sup class="steelblue-color">₹</sup>
                                        <span class="price steelblue-color"> 6,000/-</span>
                                        <p class="p-md">per head</p>
                                    </div>

                                    <!-- Pricing Plan Features  -->
                                    <ul class="features">
                                        <h6>Test includes:</h6>
                                        <li>Blood, Urine, Stool Tests</li>
                                        <li>Diabetic, Lipid, Renal, Liver Profile</li>
                                        <li>X-Ray, ECG & Sonography Tests</li>
                                        <li>Pap Smear(Women only)</li>
                                        <li>Additional Tests</li>
                                    </ul>

                                    <!-- Pricing Table Button  -->
                                    <a href="{{ route('comprehensive-checkup')}}"
                                        class="btn btn-md btn-blue blue-hover">Know
                                        More</a>

                                </div>

                            </div>
                        </div> <!-- END PRICING TABLE #1 -->


                        <!-- PRICING TABLE #2 -->
                        <div class="col-lg-4">
                            <div class="pricing-table icon-xl">

                                <!-- Icon -->
                                <img class="img-fluid" src="{{ asset('/resources/assets/images/standard-health.jpg')}}"
                                    alt="doctor-foto">

                                <div class="pricing-table-content">
                                    <!-- Title -->
                                    <h5 class="h5-lg">Standard</h5>

                                    <!-- Plan Price  -->
                                    <div class="pricing-plan">
                                        <sup class="steelblue-color">₹</sup>
                                        <span class="price steelblue-color"> 3,000/-</span>
                                        <p class="p-md">per head</p>
                                    </div>

                                    <!-- Pricing Plan Features  -->
                                    <ul class="features">
                                        <h6>Test includes:</h6>
                                        <li>Blood, Urine, Stool Tests</li>
                                        <li>Diabetic, Lipid, Renal, Liver Profile</li>
                                        <li>X-Ray & Sonography Tests</li>
                                        <li>Pap Smear(Women only)</li>
                                        <li style="text-decoration: line-through; opacity: .8">Additional Tests</li>
                                    </ul>

                                    <!-- Pricing Table Button  -->
                                    <a href="{{ route('standard-checkup')}}"
                                        class="btn btn-md btn-tra-black blue-hover">Know
                                        More</a>

                                </div>

                            </div>
                        </div> <!-- END PRICING TABLE #1 -->


                        <div class="col-lg-4">
                            <div class="pricing-table icon-xl">

                                <!-- Icon -->
                                <img class="img-fluid" src="{{ asset('/resources/assets/images/diabetes-health.jpg')}}"
                                    alt="doctor-foto">

                                <div class="pricing-table-content">

                                    <!-- Title -->
                                    <h5 class="h5-lg">Diabetic</h5>

                                    <!-- Plan Price  -->
                                    <div class="pricing-plan">
                                        <sup class="steelblue-color">₹</sup>
                                        <span class="price steelblue-color"> 1,800/-</span>
                                        <p class="p-md">per head</p>
                                    </div>

                                    <!-- Pricing Plan Features  -->
                                    <ul class="features">
                                        <h6>Initial Evaluation:</h6>
                                        <li>FBS, PPBS Tests & Lipid Profile</li>
                                        <li>HbA1c, Blood Urea, Creatinine</li>
                                        <li>Urine, Urine Microalbuminural</li>
                                        <li>ECG Resting & Physical Examination</li>
                                        <li>Counceling & Consultation</li>
                                    </ul>

                                    <!-- Pricing Table Button  -->
                                    <a href="{{ route('diabetic-checkup')}}"
                                        class="btn btn-md btn-tra-black blue-hover">Know
                                        More</a>
                                </div>


                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="pricing-table icon-xl">

                                <!-- Icon -->
                                <img class="img-fluid" src="{{ asset('/resources/assets/images/cardiac-health.jpg')}}"
                                    alt="doctor-foto">

                                <div class="pricing-table-content">

                                    <!-- Title -->
                                    <h5 class="h5-lg">Cardiac</h5>

                                    <!-- Plan Price  -->
                                    <div class="pricing-plan">
                                        <sup class="steelblue-color">₹</sup>
                                        <span class="price steelblue-color"> 3,600/-</span>
                                        <p class="p-md">per head</p>
                                    </div>

                                    <!-- Pricing Plan Features  -->
                                    <ul class="features">
                                        <h6>Test includes:</h6>
                                        <li>Pathological, Diabetes & Diagnostic Test</li>
                                        <li>Test for Cardiac Profile</li>
                                        <li>Cardiac Evaluation</li>
                                        <li>Test for Kidney Profile</li>
                                        <li>Dietician Advice</li>
                                    </ul>

                                    <!-- Pricing Table Button  -->
                                    <a href="{{ route('cardiac-checkup')}}"
                                        class="btn btn-md btn-tra-black blue-hover">Know
                                        More</a>

                                </div>

                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="pricing-table icon-xl">

                                <!-- Icon -->
                                <img class="img-fluid" src="{{ asset('/resources/assets/images/pediatric-health.jpg')}}"
                                    alt="doctor-foto">

                                <div class="pricing-table-content">

                                    <!-- Title -->
                                    <h5 class="h5-lg">Pediatric</h5>

                                    <!-- Plan Price  -->
                                    <div class="pricing-plan">
                                        <sup class="steelblue-color">₹</sup>
                                        <span class="price steelblue-color"> 660/-</span>
                                        <p class="p-md">per head</p>
                                    </div>

                                    <!-- Pricing Plan Features  -->
                                    <ul class="features">
                                        <h6>Test includes:</h6>
                                        <li>Blood Test, CBC, ESR</li>
                                        <li>Urine & Stool Analysis</li>
                                        <li>X-ray, Mantoux Test</li>
                                        <li>Vision, Hgt-Wgt, BMI, etc checkups</li>
                                        <li>Gynec & Diet Advice (above 13 years)</li>
                                    </ul>

                                    <!-- Pricing Table Button  -->
                                    <a href="{{ route('paediatric-checkup')}}"
                                        class="btn btn-md btn-tra-black blue-hover">Know
                                        More</a>

                                </div>

                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="pricing-table icon-xl">

                                <!-- Icon -->
                                <img class="img-fluid" src="{{ asset('/resources/assets/images/prostate-health.jpg')}}"
                                    alt="doctor-foto">

                                <div class="pricing-table-content">

                                    <!-- Title -->
                                    <h5 class="h5-lg">Prostate</h5>

                                    <!-- Plan Price  -->
                                    <div class="pricing-plan">
                                        <sup class="steelblue-color">₹</sup>
                                        <span class="price steelblue-color"> 660/-</span>
                                        <p class="p-md">per head</p>
                                    </div>

                                    <!-- Pricing Plan Features  -->
                                    <ul class="features">
                                        <h6>Test includes:</h6>
                                        <li>Urine & Stool Analysis</li>
                                        <li>X-ray, Mantoux Test</li>
                                        <li>Pediatrician Consultation</li>
                                        <li>Vision, Hgt-Wgt, BMI, etc checkups</li>
                                        <li>Gynec & Diet Advice (above 13 years)</li>
                                    </ul>

                                    <!-- Pricing Table Button  -->
                                    <a href="{{ route('prostate-checkup')}}"
                                        class="btn btn-md btn-tra-black blue-hover">Know
                                        More</a>

                                </div>
                            </div>
                        </div>

                    </div> <!-- END PRICING TABLES -->


                </div> <!-- End container -->
            </section>
        </div> <!-- End row -->
    </div> <!-- End container -->
</div>

@stop