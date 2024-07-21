@php($title = "Cardiac Health Checkup | Bombay Hospital Indore")
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
                            <li class="breadcrumb-item active" aria-current="page">Cardiac Health Checkup
                            </li>
                        </ol>
                    </nav>

                    <!-- Title -->
                    <h4 class="h4-sm steelblue-color">Cardiac Health Checkup</h4>

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
                                                <td>Pathological Test</td>
                                                <td>CBC</td>
                                            </tr>
                                            <tr>
                                                <td>Test For Diabetes</td>
                                                <td>Blood Sugar (Fasting)<br>
                                                    Blood Sugar (PPBS)</td>
                                            </tr>
                                            <tr>
                                                <td>Test For Cardiac Profile</td>
                                                <td>Total Cholestrol<br>
                                                    Triglycerides</td>
                                            </tr>
                                            <tr>
                                                <td>Cardiac Evaluation</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Test For Kidney Profile</td>
                                                <td>Serum Creatinine<br>
                                                    Urine Routine</td>
                                            </tr>
                                            <tr>
                                                <td>Diagnostic Tests</td>
                                                <td>X-Ray Chest</td>
                                            </tr>
                                            <tr>
                                                <td>Major Cardiac Tests</td>
                                                <td>2-D Echo and Stress Test</td>
                                            </tr>
                                            <tr>
                                                <td>Diet Advice By Dietician</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th colspan="2">The cost of the package is Rs. 3,600/-</th>
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
                    @include('includes.health-checkup-sidebar')
                </div> <!-- END SIDEBAR TABLE -->

            </aside> <!-- END SIDEBAR -->

        </div> <!-- End row -->
    </div> <!-- End container -->
</div>

@stop