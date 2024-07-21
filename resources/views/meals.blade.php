@php($title = "Meals | Bombay Hospital Indore")
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
                    <h4 class="h4-sm steelblue-color">Meals</h4>

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
                            <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/support-7.jpg')}}"
                                alt="content-image">
                        </div>

                        <p>The vegetarian meals/snacks cooked in the state of art kitchen under proper hygienic
                            conditions are provided free of cost to all the patients and also to the attendants
                            at the nominal charges.</p>

                        <h5 class="h5-md steelblue-color">The timings are:</h5>

                        <div id="pricing-2" class="pricing-section division">
                            <div class="row pricing-row">

                                <div class="col-md-12">

                                    <div class="pricing-table mb-40">
                                        <table class="table table-hover">
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Morning tea with snacks</th>
                                                    <td>7:30 am (IST)</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Soup</th>
                                                    <td>10:00 am (IST)</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Lunch</th>
                                                    <td>12:00 noon (IST)</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Evening tea with snacks</th>
                                                    <td>3:30 pm (IST)</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Dinner</th>
                                                    <td>7:30 pm (IST)</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Milk</th>
                                                    <td>9:00 pm (IST)</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
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