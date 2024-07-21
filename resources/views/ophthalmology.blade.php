@php($title = "Ophthalmology | Bombay Hospital Indore")
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
                    <h4 class="h4-sm steelblue-color">Ophthalmology</h4>

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
                                src="{{ asset('/resources/assets/images/services/ophthalmology.jpg')}}"
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

                        <p>The Ophthalmology department of Bombay Hospital is one of the finest progressive dept., of
                            this hospital, equipped with state of the art diagnostic and surgical sections and wards are
                            observing globally accepted protocols in services, medical hygiene and standards.
                        </p>
                        <p>Our highly experienced and talented medical personnel in all super specialties of
                            Ophthalmology are providing ethical, evidence based, personalized services with warm and
                            friendly approach resulting in excellent outcomes and patient satisfaction. Apart from
                            routine, our surgeons are performing complicated, uncommon surgeries and procedures with
                            excellent results.</p>
                        <p>All these facilities are available to even economically weak patients without any
                            discrimination.</p>

                        <h5 class="h5-md steelblue-color">Facilities -</h5>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Comprehensive Ophthalmology and complete eye check up
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Emergency eye care and trauma
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Cataract with IOLs
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Cornea- Keratoplasties
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Glaucoma screening, Monitor progression, Surgeries and Lasers
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Retina – Medical, Surgical and Lasers
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Squint and Oculoplasty
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Neuro Ophthalmology – in association with prominent Neurologists.
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Eye involvement associated with Systemic Medical conditions like diabetes, hypertension,
                                conncetive tissue disorders, haemaetology with strong support from relative speciality
                                physicians.
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Paediatric Ophthalmology.
                            </p>
                        </div>

                        <h5 class="h5-md steelblue-color">Neuro-Ophthalmology -</h5>

                        <p>Our Neuro-Opthalmologists evaluate and treat patients who have reduced vision, blind spots
                            owing to disorders of the optic nerve and its connections to the brain, subnormal vision
                            that is not explained by abnormalities of the eyes, double vision, abnormalities of the
                            pupils, and droopy eyelids. They also evaluate and treat any condition in which there may be
                            a brain abnormality causing a disturbance of vision, mis-alignment of the eyes, or abnormal
                            eye movements. Our specialists also provide evaluation of focal dystonias, blepharospasm and
                            hemifacial spasm.</p>

                        <h5 class="h5-md steelblue-color">Glaucoma, Cataract, and Anterior Segment Disease -</h5>

                        <p>Patients are referred to the Glaucoma Service for evaluation and treatment of glaucoma and
                            other diseases characterized by increased intraocular pressure and/or galucomatous optic
                            atrophy. Diagnostic modalities include both manual and computerized visual field testing,
                            Tonometry, and Optic nerve head imaging with Heidelberg retinal tomography. Treatment may
                            consist of laser therapy or incisional surgery, alone or in combination with medical
                            therapy. In addition, surgical management of cataracts comprises and important part of the
                            Glaucoma Service’s patient care programme. This includes the specialized problems of
                            cataract surgery in the presence of filtering blebs, undilatable pupils, nanophthalmos,
                            pseudoexfoliation, narrow angles and very dense cataracts. It also includes combined
                            galucoma/cataract surgery. Our Consultants also manage infantile glaucoma and other
                            glaucomas of childhood. We have record of achieving excellent cosmetic results in squint
                            surgery.</p>

                        <h5 class="h5-md steelblue-color">Cataract surgery -</h5>

                        <p>Bombay Hospital specializes in Cataract Surgery – No stitch, no injection , no suture
                            phaco-emulsificatioen with IOL cataract surgery with stringent follow up protocols performed
                            by highly experienced pioneer surgeons with high patient satisfaction and excellent results
                            with minimal dependency of spectacles.</p>

                        <p>We have unique way of calculating IOL power in children and performing cataract surgery with
                            IOL under local anesthesia in all ages.</p>
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