@php($title = "Dr. Soni Rungta | Bombay Hospital Indore")
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
                            <li class="breadcrumb-item active" aria-current="page">Panel of Consultants</li>
                        </ol>
                    </nav>

                    <!-- Title -->
                    <h4 class="h4-sm steelblue-color">Dr. Soni Rungta</h4>

                </div>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</div> <!-- END BREADCRUMB -->

<section id="doctor-1-details" class="doctor-details-section division">
    <div class="container">
        <div class="row">


            <!-- DOCTOR PHOTO -->
            <div class="col-md-5">
                <div class="doctor-photo mb-40">

                    <!-- Photo -->
                    <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-soni-rungta.jpg')}}" alt="">

                    <!-- Doctor Info -->
                    <div class="doctor-info">
                        <h5 class="h5-md blue-color">Qualifications</h5>
                        <p>MBBS from B. R Ambedkar University, Bihar .</p>
                        <p>PGDCC from Bombay Hospital, Indore</p>
                        <p>CCEBDM</p>
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Extn. No.:</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>Consulting Time:</td>
                                    <td>-
                                    </td>
                                </tr>
                                <tr>
                                    <td>Consulting Room:</td>
                                    <td>EHS Dept.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div> <!-- End Doctor Info -->


                    <!-- <div class="doctor-photo-btn text-center">
                                <a href="#" class="btn btn-md btn-blue blue-hover">Book an
                                    Appointment</a>
                            </div> -->

                </div>
            </div> <!-- END DOCTOR PHOTO -->


            <!-- DOCTOR'S BIO -->
            <div class="col-md-7">
                <div class="doctor-bio">
                    <h5 class="h5-md blue-color">Background</h5>
                    <!-- Text -->
                    <p>Dr Soni Rungta has obtained her medical degree from B. R Ambedkar University, Bihar in the year
                        2008. She went on to successfully complete his post-graduate Diploma in Clinical Cardiology
                        (PGDCC) from Bombay Hospital, Indore in the year 2014. She also completed her CCEBDM (diabetes)
                        under the Guidance of Dr. Subodh Banjal in the year 2014. She is now Practicing as a Medical
                        Officer in the Department of Executive Health Scheme, Bombay Hospital, Indore</p>

                    <h5 class="h5-md blue-color">Expertise</h5>
                    <!-- <p>Apart from expertise in Cardiac And Neuro Anaesthesia he has keen interest in field of Critical Care.</p>
                            <p>He is trained in all the invasive, non-invasive and emergency procedures performed in Intensive care units and operation theatres, has wide experience in management of Critically ill patient. Had good knowledge of pathophysiolgy of various diseases encountered in intensive care units and their management along with expertise in operating all the modern equipments and machines used in Intensive Care Units and Operation theatres, have expertise in all types of Invasive and non-invasive monitoring using ultramodern equipments, wide experience in Invasive and non-invasive Ventilatory management of critically ill patients.</p> -->

                    <h5 class="h5-md blue-color">Achievements and Accolades</h5>

                    <!-- <div class="box-list m-top-15">
                                <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                                <p class="p-sm">Life member: - I.M.A. Life member: - Family Physician association.</p>
                            </div> -->

                </div>
            </div> <!-- END DOCTOR BIO -->


        </div> <!-- End row -->
    </div> <!-- End container -->
</section>

@stop