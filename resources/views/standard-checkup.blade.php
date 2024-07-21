@php($title = "Standard Health Checkup | Bombay Hospital Indore")
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
                            <li class="breadcrumb-item active" aria-current="page">Standard Health Checkup
                            </li>
                        </ol>
                    </nav>

                    <!-- Title -->
                    <h4 class="h4-sm steelblue-color">Standard Health Checkup</h4>

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

                        <!-- Text -->
                        <p>The constitutions of individuals vary – across people, across time and across job
                            contents. Those who have undertaken the comprehensive package once and are found to
                            be healthy need not repeat all the tests of the scheme the following year. Younger
                            people, who are less prone to certain illnesses, also do not need all the tests. The
                            Standard Executive Package has been designed for such people. It includes the
                            following tests:
                        </p>

                        <!-- Small Title -->
                        <h5 class="h5-md steelblue-color">The tests carried out under the standard check up
                            are :</h5>

                    </div> <!-- END CONTENT BLOCK -->

                    <!-- PRICING -->
                    <div id="pricing-2" class="pricing-section division">
                        <div class="row pricing-row">
                            <!-- PRICING TABLE #1 -->
                            <div class="col-md-12">

                                <div class="pricing-table mb-40">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">Tests</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Blood</td>
                                                <td>CBC, ESR, Blood Group & RH factor</td>
                                            </tr>
                                            <tr>
                                                <td>Urine</td>
                                                <td>Routine</td>
                                            </tr>
                                            <tr>
                                                <td>Stool</td>
                                                <td>Routine</td>
                                            </tr>
                                            <tr>
                                                <td>Diabetic Profile</td>
                                                <td>Fasting Blood Sugar, Post Prandial Blood Sugar</td>
                                            </tr>
                                            <tr>
                                                <td>Lipid Profile</td>
                                                <td>Total Cholesterol, Triglycerides, HDL, LDL</td>
                                            </tr>
                                            <tr>
                                                <td>Renal Profile</td>
                                                <td>BUN, Urea, Creatinine, Uric Acid, Calcium</td>
                                            </tr>
                                            <tr>
                                                <td>Liver Profile</td>
                                                <td>Bilirubin, Total Proteins, A/G Ratio, SGOT (AST), SGPT
                                                    (ALT), LDH</td>
                                            </tr>
                                            <tr>
                                                <td>X-Ray</td>
                                                <td>Chest</td>
                                            </tr>
                                            <tr>
                                                <td>ECG</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Sonography (USG)</td>
                                                <td>Abdomen</td>
                                            </tr>
                                            <tr>
                                                <td>Pap Smear</td>
                                                <td>For Ladies Only</td>
                                            </tr>
                                            <tr>
                                                <th colspan="2">The cost of the package is Rs. 3,000/-</th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div> <!-- END PRICING TABLE #1 -->

                        </div> <!-- End row -->
                    </div> <!-- END PRICING -->

                    <div class="content-block mb-40">
                        <p>The tests will be followed by consultation with physician.</p>
                        <p>Tel. : 0731-2573942, 4771111</p>
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

        </div> <!-- End row -->
    </div> <!-- End container -->
</div>

@stop