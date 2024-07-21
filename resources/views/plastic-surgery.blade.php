@php($title = "Plastic and Cosmetic Surgery | Bombay Hospital Indore")
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
                            <li class="breadcrumb-item active" aria-current="page">Surgical
                            </li>
                        </ol>
                    </nav>

                    <!-- Title -->
                    <h4 class="h4-sm steelblue-color">Plastic and Cosmetic Surgery</h4>

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
                                src="{{ asset('/resources/assets/images/services/general-surgery.jpg')}}"
                                alt="content-image">
                        </div>

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

                        <p>The Department of Plastic and Reconstructive Surgery at Bombay Hospital Indore offers
                            correction or restoration of form and function of a part of the body, where the
                            defect may be the result of a congenital abnormality, an accident, a disease or an
                            aging process. The department routinely performs many types of reconstructive
                            surgeries such as hand surgery, microsurgery and the treatment of burns. The
                            consultants also perform cosmetic and aesthetic surgeries like, rhinoplasty, breast
                            augmentation, liposuction, facial implants and jaw correction surgeries.
                        </p>
                        <p>The plastic surgery team at Bombay Hospital Indore, is a valuable part of trauma team
                            at the hospital and help the other surgeons in performing corrective surgeries for
                            patients who have sustained significant disfiguring injuries including burns. The
                            surgeons also perform surgeries for congenital defects like, cleft palates or cleft
                            lips, microtia or absent ear, facial clefts/colobomas and congenital hand anomalies.
                            They also perform micro-vascular surgeries which include limb and digital
                            re-implantations and repair of nerve injuries.</p>
                        <p>Department is supported by well trained nursing staff who can take care of patients
                            peri-operatively and are capable of delivering high quality critical care along with
                            most advanced Radiodiagnosis like CT Scan and MRI.</p>
                        <p>No institute in central India has such a vast range of infrastructure under one roof.
                        </p>

                        <h5 class="h5-md steelblue-color">Surgical facilities available are listed below -</h5>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <h5 class="h5-md steelblue-color">Cosmetic Surgery
                                    -</h5>

                                <div class="box-list">
                                    <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                                    <p>Liposuction (Fat Removal)
                                    </p>
                                </div>
                                <div class="box-list">
                                    <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                                    <p>Abdominoplasty (Body Reshaping)
                                    </p>
                                </div>
                                <div class="box-list">
                                    <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                                    <p>Rhinoplasty (Nose Job)
                                    </p>
                                </div>
                                <div class="box-list">
                                    <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                                    <p>Hair transplant
                                    </p>
                                </div>
                                <div class="box-list">
                                    <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                                    <p>Face Lift. Thread Lift
                                    </p>
                                </div>
                                <div class="box-list">
                                    <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                                    <p>Cheek & Lip Augmentation
                                    </p>
                                </div>
                                <div class="box-list">
                                    <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                                    <p>Breast augmentation, Breast reduction
                                    </p>
                                </div>
                                <div class="box-list">
                                    <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                                    <p>Gynaecomastia (Male breast)
                                    </p>
                                </div>
                                <div class="box-list">
                                    <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                                    <p>Botox, Fillers, Chemical Peeing
                                    </p>
                                </div>
                                <div class="box-list">
                                    <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                                    <p>Vitiligo (White Patch)
                                    </p>
                                </div>
                                <div class="box-list">
                                    <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                                    <p>Vaginal tightening. Hymenoplasty
                                    </p>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <h5 class="h5-md steelblue-color">Hand Surgery
                                    -</h5>

                                <div class="box-list">
                                    <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                                    <p>Tendon, nerve & vessel repair
                                    </p>
                                </div>
                                <div class="box-list">
                                    <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                                    <p>Tendon transfers
                                    </p>
                                </div>
                                <div class="box-list">
                                    <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                                    <p>Brachial Plexus surgery
                                    </p>
                                </div>
                                <div class="box-list">
                                    <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                                    <p>Functioning muscle transfer
                                    </p>
                                </div>

                                <h5 class="h5-md steelblue-color">Laser Surgery
                                    -</h5>
                                <div class="box-list">
                                    <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                                    <p>Hair Removal, Laser Facial
                                    </p>
                                </div>
                                <div class="box-list">
                                    <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                                    <p>Acne Scar removal
                                    </p>
                                </div>
                                <div class="box-list">
                                    <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                                    <p>Birth mark removal
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <h5 class="h5-md steelblue-color">Maxillofacial Surgery
                                    -</h5>

                                <div class="box-list">
                                    <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                                    <p>Facial bone fractures
                                    </p>
                                </div>
                                <div class="box-list">
                                    <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                                    <p>Lefort advancement Geneoplasty
                                    </p>
                                </div>

                                <h5 class="h5-md steelblue-color">Microvascular Surgery
                                    -</h5>
                                <div class="box-list">
                                    <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                                    <p>Reimplantation (Hand, Finger)
                                    </p>
                                </div>
                                <div class="box-list">
                                    <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                                    <p>Free Flaps (Hand & Leg Cover)
                                    </p>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <h5 class="h5-md steelblue-color">Birth Deffects
                                    -</h5>

                                <div class="box-list">
                                    <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                                    <p>Cleft palate
                                    </p>
                                </div>
                                <div class="box-list">
                                    <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                                    <p>Hypospadia
                                    </p>
                                </div>
                                <div class="box-list">
                                    <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                                    <p>Burns
                                    </p>
                                </div>
                                <div class="box-list">
                                    <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                                    <p>Acute burns
                                    </p>
                                </div>
                                <div class="box-list">
                                    <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                                    <p>Deformities, Contractures
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div> <!-- END CONTENT BLOCK -->
                </div>
            </div> <!-- END DEPARTMENT DETAILS -->

            <!-- SIDEBAR  -->
            <div class="col-lg-4">
                @include('includes.surgical-sidebar')
            </div>

        </div> <!-- End row -->
    </div> <!-- End container -->
</div>

@stop