@php($title = "Path Lab | Bombay Hospital Indore")
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
                            <li class="breadcrumb-item active" aria-current="page">Round the Clock
                            </li>
                        </ol>
                    </nav>

                    <!-- Title -->
                    <h4 class="h4-sm steelblue-color">Path Lab</h4>

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
                            <img class="img-fluid" src="{{ asset('/resources/assets/images/services/path-lab.jpg')}}"
                                alt="content-image">
                        </div>

                        <div id="pricing-2" class="pricing-section division">
                            <div class="row pricing-row">

                                <div class="col-md-12">
                                    <h5 class="h5-md steelblue-color">Path Lab</h5>

                                    <div class="pricing-table mb-40">
                                        <table class="table table-hover">
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Location</th>
                                                    <td>Ground Floor</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">For Appointment</th>
                                                    <td>0731-4771111 Extn. 2014</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Dept. Timings</th>
                                                    <td>Emergency-24 hrs</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">List of Consultants</th>
                                                    <td>Dr. Nilam Bharioke<br>Dr. Praveen Singh<br>Dr. Piyush
                                                        Vyas<br>Dr. D.B.S. Mahor</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p>The Department of Pathology of Bombay Hospital is one of the largest and most modern
                            laboratories in the country. It’s quality and accuracy of lab. reports serves as a gold
                            standard to clinicians and patients. The laboratory is equipped with state of art fully
                            automated equipments from leading equipment manufacturers like Roche, Siemens, Abbott,
                            Coulter etc. which has reduced the human interference to minimum there by reducing the
                            chances of error. Operated by a team of highly dedicated, sincere and experienced technical
                            staff who is fully committed to maintain the high standard of work and accuracy of reports.
                            To achieve this the laboratory is always vigilant and a rigid quality control system is
                            followed.</p>


                        <p>The laboratory is never closed and works 24 hours a day, 7 days a week, 365 days a year,
                            always welcoming the patient.</p>

                    </div> <!-- END CONTENT BLOCK -->
                </div>
            </div> <!-- END DEPARTMENT DETAILS -->

            <!-- SIDEBAR  -->
            <div class="col-lg-4">
                @include('includes.round-the-clock-sidebar')
            </div>

        </div> <!-- End row -->
    </div> <!-- End container -->
</div>

@stop