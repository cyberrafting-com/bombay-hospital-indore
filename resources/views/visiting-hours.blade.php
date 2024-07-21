@php($title = "Visiting Hours | Bombay Hospital Indore")
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
                            <li class="breadcrumb-item active" aria-current="page">In-Patient Guide
                            </li>
                        </ol>
                    </nav>

                    <!-- Title -->
                    <h4 class="h4-sm steelblue-color">Visiting Hours</h4>

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
                            <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/thera-9.jpg')}}"
                                alt="content-image">
                        </div>

                        <div id="pricing-2" class="pricing-section division">
                            <div class="row pricing-row">

                                <div class="col-md-12">

                                    <div class="pricing-table mb-40">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th colspan="2" scope="col">VISITING HOURS</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Wards</th>
                                                    <td>4:00 pm to 6:00 pm (IST)</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">ICU</th>
                                                    <td>7:30 am to 8:00 am (IST)</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">ICCU</th>
                                                    <td>5:00 pm to 5:30 pm (IST)</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">RR</th>
                                                    <td>10:30 pm to 11:00 pm (IST)</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Children are allowed only between 5:00 pm to 6:00 pm (IST) in Wards.
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Entry for children is prohibited in ICU/ICCU/RR.
                            </p>
                        </div>
                    </div> <!-- END CONTENT BLOCK -->
                </div>
            </div> <!-- END DEPARTMENT DETAILS -->

            <!-- SIDEBAR  -->
            <aside id="sidebar" class="col-lg-4">
                @include('includes.in-patient-sidebar')
            </aside>

        </div> <!-- End row -->
    </div> <!-- End container -->
</div>

@stop