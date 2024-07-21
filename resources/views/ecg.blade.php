@php($title = "ECG, Echo/Stress & Holter | Bombay Hospital Indore")
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
                            <li class="breadcrumb-item active" aria-current="page">Diagnostic
                            </li>
                        </ol>
                    </nav>

                    <!-- Title -->
                    <h4 class="h4-sm steelblue-color">ECG, Echo/Stress & Holter</h4>

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
                            <img class="img-fluid" src="{{ asset('/resources/assets/images/services/ecg.jpg')}}" alt="content-image">
                        </div>
                        <div id="pricing-2" class="pricing-section division">
                            <div class="row pricing-row">

                                <div class="col-md-12">
                                    <!-- Plan Title  -->
                                    <h5 class="h5-md steelblue-color">Non Invasive Cardiology Department</h5>

                                    <div class="pricing-table mb-40">
                                        <table class="table table-hover">
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Location</th>
                                                    <td>First Floor, West Wing</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">For Appointment</th>
                                                    <td>0731-4771111 Extn. 2161</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Dept. Timings</th>
                                                    <td>10 am to 6 pm</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">List of Consultants</th>
                                                    <td>Dr. Vivek Sullere</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p>The department of Non Invasive Cardiology at Bombay Hospital Indore was started in 2003 with
                            basic facilities for monitoring and treatment of patients.It is a full-fledged Cardiac
                            diagnostic department and has two latest generation Echo machines.It is one of the busiest
                            departments of Bombay Hospital Indore and caters to indoor, as well as,outdoor patients.The
                            Indoor facility provides for Echo cardiography in the Echo Room which is located on the 1st
                            floor and also Bedside portable Echo on emergency basis.</p>

                        <p>An average of 300-350 Echo cardiographies are done on a monthly basis with a daily average of
                            12-15 Echoes and a fair number of TMTs. You can walk-in for the procedure and your test will
                            be done within half an hour. The department also gives provisional typed reports.</p>

                        <p>The department has 3 full time consultants who are supported by PGDCC trainee doctors who are
                            always available in the department.</p>

                        <h5 class="h5-md steelblue-color">Some of the common procedures performed are –</h5>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Echocardiography
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Electrocardiogram (ECG)
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Stress Echocardiography which included exercise as well as dobutamine
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Tread Mill Test
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Holter Monitoring
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Trans Oesophageal Echocardiography
                            </p>
                        </div>

                    </div> <!-- END CONTENT BLOCK -->
                </div>
            </div> <!-- END DEPARTMENT DETAILS -->

            <!-- SIDEBAR  -->
            <div class="col-lg-4">
                @include('includes.diagnostic-sidebar')
            </div>

        </div> <!-- End row -->
    </div> <!-- End container -->
</div>

@stop