@php($title = "Cardiology | Bombay Hospital Indore")
@section('meta_desc') @endsection

@extends('layouts.default')
@section('content')

<!-- BREADCRUMB
			============================================= -->
<div class="division">
    <!-- <div class="container">
                <div class="row">
                    <div class="col">
                        <div class=" breadcrumb-holder">

                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">Services</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Medical
                                    </li>
                                </ol>
                            </nav>

                            <h4 class="h4-sm steelblue-color">Cardiology</h4>

                        </div>
                    </div>
                </div> 
            </div>  -->
    <img src="{{ asset('/resources/assets/images/services/cardiology-banner.jpg')}}" />
</div>

<div id="department-page" class="wide-60 department-page-section division">
    <div class="container">
        <div class="row">


            <!-- DEPARTMENT DETAILS -->
            <div class="col-lg-8">
                <div class="txt-block pr-30">


                    <!-- CONTENT BLOCK -->
                    <div class="content-block mb-40">
                        <!-- <div class="content-block-img">
                                    <img class="img-fluid" src="{{ asset('/resources/assets/images/services/cardiology.jpg')}}" alt="content-image">
                                </div> -->

                        <!-- <div id="pricing-2" class="pricing-section division">
                                    <div class="row pricing-row">

                                        <div class="col-md-12">
                                            <h5 class="h5-md steelblue-color">ECG</h5>

                                            <div class="pricing-table mb-40">
                                                <table class="table table-hover">
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">Location</th>
                                                            <td>Ground Floor</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">For Appointment</th>
                                                            <td>0731-4771111 Extn. 2004</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Dept. Timings</th>
                                                            <td>Emergency-24 hrs</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">List of Consultants</th>
                                                            <td>Dr. Arun Jain</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <h5 class="h5-md steelblue-color">X-RAY</h5>

                                            <div class="pricing-table mb-40">
                                                <table class="table table-hover">
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">Location</th>
                                                            <td>Basement</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">For Appointment</th>
                                                            <td>0731-4771111 Extn. 3006</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Dept. Timings</th>
                                                            <td>Emergency-24 hrs</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">List of Consultants</th>
                                                            <td>Dr. Mukesh Gupta</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->

                        <p>The Cardiology department at Bombay Hospital is determined to provide compassionate,
                            state of the art, proficient care to heart patients at an affordable cost. Our
                            qualified team, along with the latest technology, ensures the best possible care for
                            a wide spectrum of heart diseases.</p>
                        <p>The Department of cardiology at the Bombay Hospital provides a diagnostic and
                            treatment service for patients referred with actual, or suspected, heart disease. It
                            provides a comprehensive suite of diagnostic and treatment facilities, including
                            non-invasive diagnostic facilities, and a wide range of interventional cardiac,
                            vascular and electrophysiological procedures.</p>

                        <p>The Department of Cardiology at Bombay Hospital – Indore offers preventive, diagnostic and
                            therapeutic services for cardiovascular diseases. The department has highly qualified and
                            skilled cardiologists with expertise in all types of cardiac procedures. The consultants
                            practice evidence based medicine and follow international protocols which has enabled the
                            best outcomes. Bombay Hospital – Indore, offers round the clock services for cardiac
                            emergencies and is equipped with the advanced infrastructure to manage and treat complicated
                            heart conditions.</p>

                        <p>The department of cardiology was started in 2003 with the establishment of Bombay Hospital
                            Indore. The department of interventional cardiology and catheterization was started in 2003
                            and since then nearly 11,500 angiographies and 3,500 angioplasties have been performed under
                            this roof.The department consists of 2 leading full time Honorary Interventional
                            Cardiologists.</p>

                        <p>The department also has ultramodern non-invasive cardiology investigations which consists of
                            latest colour doppler, echo machines, treadmill and holter monitoring.</p>

                        <h5 class="h5-md steelblue-color">Treatments and Procedures-</h5>

                        <p><b>Non Invasive procedures-</b></p>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Electrocardiography (ECG)
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Treadmill Stress ECG (TMT)
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Stress Echo and Dobutamine Stress Echo
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Holter monitor and Tilt table study
                            </p>
                        </div>
                        <p>Holter monitor and Tilt table study</p>

                        <p><b>Invasive procedures-</b></p>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Coronary angiography
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Right heart catheterisation
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Coronary angioplasty with or without stenting and Balloon valvuloplasty
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Biventricular pacemaker placement and Implantable Cardiac Defibrillator (ICD)
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Atrial Septal Defect / Patent Ductus Arteriosis device closure
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>PTA (percutaneous transluminal angioplasty)
                            </p>
                        </div>

                        <p><b>Peripheral Invasive Procedures-</b></p>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Renal vascular stenting
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Lower extremity percutaneous transluminal angioplasty/Intra
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Arterial thrombolysis /percutaneous transluminal balloon angioplasty<br>Endovascular
                                repair of aneurysms
                            </p>
                        </div>

                        <p><b>Preventive Care Services-</b></p>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Education on measures to prevent heart attacks and other lifestyle related disorders
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Periodic health check-up packages for different age groups
                            </p>
                        </div>

                    </div> <!-- END CONTENT BLOCK -->
                </div>
            </div> <!-- END DEPARTMENT DETAILS -->

            <!-- SIDEBAR  -->
            <div class="col-lg-4">
                @include('includes.medical-sidebar')
            </div>

        </div> <!-- End row -->
    </div> <!-- End container -->
</div>

@stop