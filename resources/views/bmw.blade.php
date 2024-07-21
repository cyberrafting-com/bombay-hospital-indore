@php($title = "BMW | Bombay Hospital Indore")
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
                            <li class="breadcrumb-item active" aria-current="page">BMW
                            </li>
                        </ol>
                    </nav>

                    <!-- Title -->
                    <h4 class="h4-sm steelblue-color">BMW</h4>

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
                        <div class="content-block-img">
                            <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/bmw.jpg')}}"
                                alt="content-image">
                        </div>

                        <h5 class="h5-md steelblue-color">BMW-Reports</h5>


                        <!-- CONTENT BOX #1 -->
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p><a target="_blank"
                                    href="{{ asset('/resources/assets/images/docs/BMW-2020.pdf')}}">Bio-medical Waste
                                    Generation Report
                                    for the Year 2020</a>
                            </p>
                        </div>

                        <!-- CONTENT BOX #2 -->
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p><a target="_blank"
                                    href="{{ asset('/resources/assets/images/docs/BMW-2021.pdf')}}">Bio-medical Waste
                                    Generation Report
                                    for the Year 2021</a>
                            </p>
                        </div>


                        <!-- CONTENT BOX #3 -->
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p><a target="_blank"
                                    href="{{ asset('/resources/assets/images/docs/BMW-2022.pdf')}}">Bio-medical Waste
                                    Generation Report
                                    for the Year 2022</a>
                            </p>
                        </div>

                        <!-- CONTENT BOX #4 -->
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p><a target="_blank"
                                    href="{{ asset('/resources/assets/images/docs/BMW-2023.pdf')}}">Bio-medical Waste
                                    Generation Report
                                    for the Year 2023</a>
                            </p>
                        </div>

                    </div> <!-- END CONTENT BLOCK -->
                </div>
            </div> <!-- END DEPARTMENT DETAILS -->



        </div> <!-- End row -->
    </div> <!-- End container -->
</div>

@stop