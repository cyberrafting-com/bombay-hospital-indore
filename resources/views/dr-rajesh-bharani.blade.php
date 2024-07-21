@php($title = "Dr. Rajesh Bharani | Bombay Hospital Indore")
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
                    <h4 class="h4-sm steelblue-color">Dr. Rajesh Bharani</h4>

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
                    <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-rajesh-bharani.jpg')}}"
                        alt="">

                    <!-- Doctor Info -->
                    <div class="doctor-info">
                        <h5 class="h5-md blue-color">Qualifications</h5>
                        <p>MBBS from MGM Medical College, Indore 1996</p>
                        <p>MD (MEDICINE) from MGM Medical College, Indore 1999</p>
                        <p>DM (NEPHROLOGY) from AIIMS, NewDelhi, 2002</p>
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Extn. No.:</td>
                                    <td>2106</td>
                                </tr>
                                <tr>
                                    <td>Consulting Time:</td>
                                    <td>Mon-Sat - 10 am to 6 pm
                                    </td>
                                </tr>
                                <tr>
                                    <td>Consulting Room:</td>
                                    <td>6 (First Floor)</td>
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
                    <p>Dr. Rajesh Bharani obtained his medical degree from MGM Medical College, DAVV University, Indore,
                        India. Thereafter he successfully completed his post graduate training in internal medicine from
                        MGM Medical College, DAVV University, Indore, India.. He later got selected in prestigious All
                        India Institute of Medical Sciences, New Delhi for his DM course in Nephrology. After
                        successfully completing training from AIIMS he came to indore and joined CHL Apollo Hospital and
                        later Bombay Hospital Indore. He is serving Bombay Hospital Indore since it’s inception and
                        established the Department of Nephrology and Renal Transplantation in this hospital. His Present
                        Nephrological practice covers all type of renal disease, Dialysis care, CAPD care, Renal
                        Transplantation and all major and minor procedures related to the field of Nephrology. He is
                        also involved in teaching medicine trainees in this institute and Nephrology trainee in a
                        medical college of Indore. He is also involved in Continuous medical education of General
                        practitioners and physicians of this region of country. For public education he wrote a book
                        also named “ Kidney se Parichay”. He is also a active member and a expert panelist of
                        Indoreorgandonation Society managed by local government to promote Cadaver organ donation
                        programme of Indore</p>

                    <h5 class="h5-md blue-color">Expertise</h5>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Critical Renal Care, Acute and Chronic renal disease, Pediatric renal care,
                            renal biopsy, Dialysis, CAPD, Renal Transplantation.</p>
                    </div>


                    <h5 class="h5-md blue-color">Achievements and Accolades</h5>
                    <!-- <div class="box-list m-top-15">
                                <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                                <p class="p-sm">He has attended various National & International Conferences.</p>
                            </div>
                            <div class="box-list m-top-15">
                                <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                                <p class="p-sm">He has published several research papers in National & International Journals of Urology. He has presented various award winning papers in National & International Conferences. He is an avid Tennis player and a good swimmer. He is also a very good guitarist and a vocalist.</p>
                            </div> -->

                </div>
            </div> <!-- END DOCTOR BIO -->


        </div> <!-- End row -->
    </div> <!-- End container -->
</section>

@stop