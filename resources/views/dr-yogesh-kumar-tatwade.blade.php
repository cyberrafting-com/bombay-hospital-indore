@php($title = "Dr. Yogesh Kumar Tatwade | Bombay Hospital Indore")
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
                    <h4 class="h4-sm steelblue-color">Dr. Yogesh Kumar Tatwade</h4>

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
                    <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-yogesh-kumar-tatwade.jpg')}}"
                        alt="">

                    <!-- Doctor Info -->
                    <div class="doctor-info">
                        <h5 class="h5-md blue-color">Qualifications</h5>
                        <!-- <p>MBBS from MGM Medical College Indore MP, 1984-1990.</p>
                                <p>MD (Medicine) MGM Medical College Indore MP, 1991-1993.</p> -->
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Extn. No.:</td>
                                    <td>2101</td>
                                </tr>
                                <tr>
                                    <td>Consulting Time:</td>
                                    <td>Mon-Sat - 10 am to 6 pm
                                    </td>
                                </tr>
                                <tr>
                                    <td>Consulting Room:</td>
                                    <td>1 (First Floor)</td>
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
                    <!-- <p>Dr Vivek Sullere obtained his medical degree from Devi Ahilya University Indore. He successfully completed his post-graduate training in Medicine obtaining the Doctor of Medicine from MGM Medical College Indore. He then entered private practice as Consulting Physician and always maintained an interest in Echocardiography. From 1994 to 2012 he worked as Honorary Consultant Physician & Echocardiologist to various hospitals of Indore. From 2012 he joined Bombay Hospital Indore as Consultant Physician & Non-Invasive Cardiologist in charge of Echo, Stress Test & Holter Lab.</p> -->

                    <h5 class="h5-md blue-color">Expertise</h5>
                    <!-- <p>Trans-Thoracic Echocardiography, Tran-Esophageal Echocardiography, Speckle Tracking Echocardiography, Dobutamine Stress Echocardiography, 3D Echocardiography, Critical Medical Illness.</p> -->

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