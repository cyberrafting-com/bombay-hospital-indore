@php($title = "MRI & CT Scan | Bombay Hospital Indore")
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
                    <h4 class="h4-sm steelblue-color">MRI & CT Scan</h4>

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
                            <img class="img-fluid" src="{{ asset('/resources/assets/images/services/mri.jpg')}}" alt="content-image">
                        </div>

                        <div id="pricing-2" class="pricing-section division">
                            <div class="row pricing-row">

                                <div class="col-md-12">
                                    <!-- Plan Title  -->
                                    <h5 class="h5-md steelblue-color">CT Scan</h5>

                                    <div class="pricing-table mb-40">
                                        <table class="table table-hover">
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Location</th>
                                                    <td>Basement, West Wing</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">For Appointment</th>
                                                    <td>0731-4771111 Extn. 3002,3004</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Dept. Timings</th>
                                                    <td>7 am to 10 pm (Emergencies can be taken beyond 10 pm also)</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">List of Consultants</th>
                                                    <td>Dr. Kiran Chouhan, Dr. Niti Mittal</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <!-- Plan Title  -->
                                    <h5 class="h5-md steelblue-color">MRI</h5>

                                    <div class="pricing-table mb-40">
                                        <table class="table table-hover">
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Location</th>
                                                    <td>Basement, West Wing</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">For Appointment</th>
                                                    <td>0731-4771111 Extn. 3003,3004</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Dept. Timings</th>
                                                    <td>7 am to 10 pm (Emergencies can be taken beyond 10 pm also)</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">List of Consultants</th>
                                                    <td>Dr. Kiran Chouhan, Dr. Niti Mittal</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p>The Department of CT Scan & MRI at the Bombay Hospital Indore is a highly specialized,
                            full-service department which strives to meet all patient and clinician needs in diagnostic
                            imaging and image-guided procedures.</p>

                        <p>The Department has been characterized by the strength of its clinical leadership having 2
                            full time consultants.</p>

                        <p><b>Ingenia 3.0T CX Philips MRI –</b> The machine has the advanced light weight super
                            conductivity magnet that has exceptional homogeneity for a large field of view; also the
                            rapid view facility enables parallel acquisition and processing of image details that
                            considerably reduces scan time. The machine enables the highest resolution brain images to
                            identify any brain malformations, tumors, strokes, or injury that may generate a seizure
                            disorder.</p>

                        <p><b>Multislice Computerized Tomography (64 slice CT) –</b> The fully loaded 64 slice Siemens
                            SOMATOM Definition AS CT scan Machine is a state-of-the-art medical imaging technology
                            essential to many neurological and spinal procedures. The advanced software allows
                            performing wide variety of CT procedures with high degree of diagnostic accuracy.</p>

                        <p><b>The department runs the DNB radiology course recognized by the Medical Council of India
                                (MCI).</b></p>

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