@php($title = "Histopathology | Bombay Hospital Indore")
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
                    <h4 class="h4-sm steelblue-color">Histopathology</h4>

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
                            <img class="img-fluid"
                                src="{{ asset('/resources/assets/images/services/histopathology.jpg')}}"
                                alt="content-image">
                        </div>

                        <div id="pricing-2" class="pricing-section division">
                            <div class="row pricing-row">

                                <div class="col-md-12">
                                    <!-- Plan Title  -->
                                    <h5 class="h5-md steelblue-color">Histopathology Department</h5>

                                    <div class="pricing-table mb-40">
                                        <table class="table table-hover">
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Location</th>
                                                    <td>First Floor, West Wing</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">For Appointment</th>
                                                    <td>0731-4771111 Extn. 2155</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Dept. Timings</th>
                                                    <td>10 am to 6 pm</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">List of Consultants</th>
                                                    <td>Dr. Piyush Vyas</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p><b>Histopathology :</b>Histopathology Plays a very important role in diagnosis, especially of
                            cancer, in the tissue specimen obtained by biopsy or during surgery.</p>
                        <p><b>Frozen Sections :</b>In cases where preoperative diagnosis of any lesion is not confirmed,
                            during surgery while the patient still in operation theatre; a piece from suspicious area is
                            taken and sent to the laboratory. A diagnosis is made available in about 1⁄2 hour that helps
                            in planning the extent of surgery and further line of treatment. Requires special expertise,
                            training and equipment.</p>

                        <p><b>FNAC :</b>For the diagnosis of the nature of superficial and deep seated lumps, masses,
                            growths or cysts in the body. A relatively painless and very simple technique where a thin
                            needle is used to aspirate the material from the lesion for diagnosis. Takes much less time
                            for reporting as compared to conventional methods and is much less expensive. At Bombay
                            Hospital aspiration is performed by the pathologist himself, thus a high degree of accuracy
                            is maintained. Facility for USG and CT guided aspirations is also available.</p>

                        <p><b>PAP smear :</b>A very simple, painless, outdoor and cheap procedure for the diagnosis of
                            precancerous and cancerous lesions of uterine cervix. Every woman in child bearing age and
                            thereafter is advised to take this test at regular intervals.</p>

                        <p><b>Exfoliative cytology :</b>For the diagnosis of nature of various body fluids.Bone marrow :
                            Aspiration and reporting done by the pathologist for the diagnosis of various blood related
                            diseases.</p>

                        <p><b>Immunohistochemistry :</b> Advanced technique for the diagnosis of type of tumor.</p>

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