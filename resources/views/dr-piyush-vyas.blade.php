@php($title = "Dr. Piyush Vyas | Bombay Hospital Indore")
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
                    <h4 class="h4-sm steelblue-color">Dr. Piyush Vyas</h4>

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
                    <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-piyush-vyas.jpg')}}" alt="">

                    <!-- Doctor Info -->
                    <div class="doctor-info">
                        <h5 class="h5-md blue-color">Qualifications</h5>
                        <p>MD</p>
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
                                    <td>Blood Bank and Histopathology</td>
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
                    <!-- <p>Dr. Nupoor Acharya did her MBBS from MGM Medical College, Indore. She got her MD in Medicine from PGIMER, Dr Ram Manohar Lohia hospital, Delhi. She received her DM in Clinical Immunology and Rheumatology from PGIMER, Chandigarh. Following her DM, she worked as a consultant Rheumatologist at PSRI Hospital, Delhi from January 2020 to October 2021 and Kailash Hospital, Noida from December 2020 to October 2021.
                            </p> -->

                    <h5 class="h5-md blue-color">Expertise</h5>
                    <!-- <p>She is a trained Rheumatologist and immunologist with experience in treating various autoimmune diseases and immunodeficiency disorders. Her areas of expertise include joint and muscle diseases, Rheumatoid arthritis, Ankylosing Spondylitis, Psoriatic arthritis, Reactive arthritis, Osteoarthritis, Gout, Lupus (SLE), Scleroderma, Vasculitis, Takayasu arteritis, Sarcoidosis, Fibromyalgia, Dermatomyositis, Polymyositis, Sjogren’s syndrome, autoimmune interstitial lung disease (ILD), Primary and secondary immunodeficiency.</p>
                            <p>She is also expert in doing diagnostic and therapeutic joint injection, USG guided joint injection, Tendon injections, small biopsies.</p> -->


                    <h5 class="h5-md blue-color">Achievements and Accolades</h5>
                    <!-- <div class="box-list m-top-15">
                                <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                                <p class="p-sm">She won Torrent Young Scholar Award in Rheumatology in 2019.</p>
                            </div>
                            <div class="box-list m-top-15">
                                <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                                <p class="p-sm">She had presented her research work in various national and international conferences including EULAR in 2019 and 2020. She won EULAR and IRA travel. grant in 2019.</p>
                            </div>
                            <div class="box-list m-top-15">
                                <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                                <p class="p-sm">She has numerous publications in various national and international journals.</p>
                            </div>
                            <div class="box-list m-top-15">
                                <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                                <p class="p-sm">She is a lifetime member of Indian Rheumatology Association (IRA)</p>
                            </div> -->
                </div>
            </div> <!-- END DOCTOR BIO -->


        </div> <!-- End row -->
    </div> <!-- End container -->
</section>

@stop