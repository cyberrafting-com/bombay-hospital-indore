@php($title = "Preventing Cardiovascular Disease | Bombay Hospital Indore")
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
                            <li class="breadcrumb-item"><a href="#">Health Education</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Cardiology
                            </li>
                        </ol>
                    </nav>

                    <!-- Title -->
                    <h4 class="h4-sm steelblue-color">Preventing Cardiovascular Disease</h4>

                </div>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</div> <!-- END BREADCRUMB -->

<div id="department-page" class="wide-60 department-page-section division">
    <div class="container">
        <div class="row">


            <!-- DEPARTMENT DETAILS -->
            <div class="col-lg-12">
                <div class="txt-block pr-30">

                    <!-- CONTENT BLOCK -->
                    <div class="content-block mb-40">
                        <!-- <h5 class="h5-md steelblue-color">What is cardiac rehabilitation?</h5> -->
                        <p>It is possible to reduce your risk of cardiovascular disease – by eliminating the risk
                            factors you can control, and managing the risk factors you cannot control. Below you will
                            find more information on making appropriate lifestyle changes that will help to lower your
                            risk of cardiovascular disease.</p>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Preventing Cardiovascular Disease</p>
                        </div>
                        <ul class="content--list">
                            <li>Smoking and Cardiovascular Disease</li>
                            <li>Diet and Cardiovascular Disease</li>
                            <li>Components of Food</li>
                            <li>Cholesterol in the Blood</li>
                            <li>Calculating Calories and Fat Grams</li>
                            <li>Determining Your Body Mass Index</li>
                            <li>Metabolic Syndrome</li>
                            <li>Obesity</li>
                            <li>Overview of Obesity</li>
                            <li>Treatment of Obesity</li>
                            <li>Obesity Treatment Overview</li>
                            <li>Medical Treatment for Obesity</li>
                            <li>Surgical Treatment for Obesity</li>
                            <li>Gastric Bypass (Malabsorptive) Surgery</li>
                            <li>Gastric Stapling (Restrictive) Surgery</li>
                            <li>Maintaining Weight Loss</li>
                            <li>Preventing Obesity</li>
                            <li>Exercise: Before Starting an Exercise Program</li>
                            <li>Designing an Exercise Program</li>
                            <li>Risks of Physical Inactivity</li>
                        </ul>
                    </div> <!-- END CONTENT BLOCK -->
                </div>
            </div> <!-- END DEPARTMENT DETAILS -->

        </div> <!-- End row -->
    </div> <!-- End container -->
</div>

@stop