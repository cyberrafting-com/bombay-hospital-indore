@php($title = "Dietician | Bombay Hospital Indore")
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
                    <h4 class="h4-sm steelblue-color">Dietician</h4>

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
                            <img class="img-fluid" src="{{ asset('/resources/assets/images/services/dietician.jpg')}}"
                                alt="content-image">
                        </div>
                        <div id="pricing-2" class="pricing-section division">
                            <div class="row pricing-row">

                                <div class="col-md-12">
                                    <!-- Plan Title  -->
                                    <h5 class="h5-md steelblue-color">Nutrition Clinic</h5>

                                    <div class="pricing-table mb-40">
                                        <table class="table table-hover">
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Location</th>
                                                    <td>24B, 1st Floor</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">For Appointment</th>
                                                    <td>0731-4771111 Extn 4015</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Consulting Timings</th>
                                                    <td>10am – 6pm</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">List of Consultants</th>
                                                    <td>Dr. Priyanka Chauhan (HOD)</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h5 class="h5-md steelblue-color">“He, who has health, has hope. And he, who has hope, has
                            everything.”</h5>

                        <p>We at Bombay hospital Indore have a Nutrition Clinic with qualified dietitians. In Bombay
                            Hospital, Dietitian is a health care professional who focuses on proper food and nutrition
                            in order to promote good health.As well as they supervise the preparation and service of
                            food, develop modified diets, participate in research, and educate individuals and groups on
                            good nutritional habits.</p>

                        <p>The goals of dietitians at Bombay Hospital is to provide medical nutritional intervention,
                            and to obtain, safely prepare, and serve flavorsome, attractive, and nutritious food to
                            patients, groups and communities. Dietary modification to address medical issues involving
                            dietary intake is a major part of dietetics (the study of nutrition as it relates to
                            health). For example, working in consultation with physicians and other health care
                            providers, a dietitian provides specific artificial nutritional needs to patients unable to
                            consume food normally. Dietitian also provides specialist services such as in diabetes,
                            obesity, oncology, osteoporosis, pediatrics, renal disease, gastroenterology, cardiology,
                            bariatric, endocrinology etc.</p>

                        <p>Nutritional Assessment of all IPD and OPD patients is being done, 24 hours dietary recall is
                            taken. Accordingly the diet pattern is being planned which is disease specific also. The
                            counseling of the patient along with their relatives is being done, to educate about the
                            specific diet prescribed. Follow up sessions are also planned wherein the diet may be
                            modified further and any queries answered.</p>

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