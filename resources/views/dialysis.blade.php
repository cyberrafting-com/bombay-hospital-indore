@php($title = "Dialysis Unit (Artifical Kidney Unit) | Bombay Hospital Indore")
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
                    <h4 class="h4-sm steelblue-color">Dialysis Unit (Artifical Kidney Unit)</h4>

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
                            <img class="img-fluid" src="{{ asset('/resources/assets/images/services/dialysis.jpg')}}" alt="content-image">
                        </div>
                        <div id="pricing-2" class="pricing-section division">
                            <div class="row pricing-row">

                                <div class="col-md-12">
                                    <!-- Plan Title  -->
                                    <h5 class="h5-md steelblue-color">Dialysis Unit</h5>

                                    <div class="pricing-table mb-40">
                                        <table class="table table-hover">
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Location</th>
                                                    <td>10th Floor, East Wing</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">For Appointment</th>
                                                    <td>0731-4771111 Extn. 2159</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Dept. Timings</th>
                                                    <td>8am to 11pm</td>
                                                </tr>
                                                <!-- <tr>
                                                            <th scope="row">List of Consultants</th>
                                                            <td>Dr. Vivek Sullere</td>
                                                        </tr> -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p>The Dialysis department of Bombay Hospital is one of the best AKU units in the country. It
                            gives comprehensive care which includes haemodialysis and peritoneal dialysis.</p>

                        <p>The haemodialysis unit is equipped with 18 ultramodern dialysis machines and RO plant. The
                            work load is huge and increasing requiring round the clock service even for out-patients. It
                            supports the 64-bedded critical care department with SLED which are dialysis for patients
                            who are seriously ill and dependant on high doses of medicines to maintain blood pressure.
                            Hepatitis B and C patients have dedicated machines and staff thereby ensuring prevention of
                            cross infection. All universal precautions are taken to prevent all forms of infection. The
                            dialysis technicians are all well trained and experienced. Nearly 40 haemodialysis are done
                            daily.</p>

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