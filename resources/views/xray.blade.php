@php($title = "X-Ray | Bombay Hospital Indore")
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
                    <h4 class="h4-sm steelblue-color">X-Ray</h4>

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
                            <img class="img-fluid" src="{{ asset('/resources/assets/images/services/xray.jpg')}}" alt="content-image">
                        </div>

                        <div id="pricing-2" class="pricing-section division">
                            <div class="row pricing-row">

                                <div class="col-md-12">
                                    <!-- Plan Title  -->
                                    <h5 class="h5-md steelblue-color">X’RAY Department</h5>

                                    <div class="pricing-table mb-40">
                                        <table class="table table-hover">
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Location</th>
                                                    <td>Basement, East Wing</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">For Appointment</th>
                                                    <td>0731-4771111 Extn. 3006</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Dept. Timings</th>
                                                    <td>8 am to 8 pm<br>Emergency – 24 hrs</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">List of Consultants</th>
                                                    <td>Dr. Mukesh Gupta<br>Dr. Kaushalendra Soni<br>Dr. Sonia Daga<br>Dr. Ozha</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p>An x-ray (radiograph) is a non-invasive medical test that helps physicians diagnose and treat
                            medical conditions. X-rays are the oldest and most frequently used form of medical imaging.
                            At Bombay Hospital Indore, we use fully digital x-ray techniques. The department is located
                            at the Basement of the Bombay Hospital Building where most of the General Radiology work is
                            done.</p>

                        <h5 class="h5-md steelblue-color">Special X-Ray Investigations:</h5>
                        <p>Fluoroscopy imaging facility is available that helps obtaining real-time moving images of the
                            internal structures of a patient through the use of a fluoroscope. We facilitate the
                            following fluoroscopy tests:</p>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>I.V.P.
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Hysterosalpingography
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Retrograde Cystouurethrograhy
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Micturating Cystouurethrograhy
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Barium Swallow
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Barium Meal
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Barium Enema
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Barium Follow through
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Small Bowel Enema
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Conray Dye Studies
                            </p>
                        </div>
                        <ul class="content--list">
                            <li>T – Tube Cholangiograhpy</li>
                            <li>Fistulogram</li>
                            <li>Sinogram</li>
                            <li>Loopogram</li>
                            <li>Defaecography</li>
                            <li>Nephrostogram</li>
                            <li>Sialography</li>
                        </ul>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Fluoroscopic Guided Broncoscopic Procedure
                            </p>
                        </div>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Reduction of Intussception
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