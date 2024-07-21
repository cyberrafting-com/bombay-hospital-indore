@php($title = "Dr. Abhinav Anand | Bombay Hospital Indore")
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
                    <h4 class="h4-sm steelblue-color">Dr. Abhinav Anand</h4>

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
                    <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-abhinav-anand.jpg')}}"
                        alt="">

                    <!-- Doctor Info -->
                    <div class="doctor-info">
                        <h5 class="h5-md blue-color">Qualifications</h5>
                        <p>MBBS from Maulana Azad Medical College, Delhi, 2007-2012</p>
                        <p>MD (Medicine) from PGIMER, Chandigarh, Delhi, 2013-2016</p>
                        <p>DM (Gastroenterology) from AIIMS, Delhi, 2017-2020</p>
                        <p>Fellowship in Hepatology from AIIMS, Delhi, 2020-2021</p>
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Extn. No.:</td>
                                    <td>2104</td>
                                </tr>
                                <tr>
                                    <td>Consulting Time:</td>
                                    <td>Mon-Sat - 10am to 6pm
                                    </td>
                                </tr>
                                <tr>
                                    <td>Consulting Room:</td>
                                    <td>14, (First Floor)</td>
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
                    <p>Dr Abhinav Anand got his MBBS from Maulana Azad Medical college, Delhi. After that, he
                        finished his MD in Medicine from PGIMER, Chandigarh. He received a silver medal for his
                        residency during his MD. He received his DM in Gastroenterology from AIIMS, Delhi after
                        which he also got a fellowship in Hepatology from AIIMS. He received his training from
                        some of the best institutes of the country.
                    </p>

                    <h5 class="h5-md blue-color">Expertise</h5>

                    <!-- Text -->
                    <p>Dr Abhinav Anand is trained in managing all diseases related to gastrointestinal tract,
                        liver, and pancreato-biliary system. He is expert in the management of GERD, gastric
                        problems, diarrhoea, constipation, acute and chronic hepatitis, chronic liver disease,
                        pancreatitis, IBD, Irritable bowel syndrome (IBS), Liver Cancer (HCC), Fatty liver,
                        Alcoholic liver disease.
                    </p>
                    <p>He is well trained in performing endoscopy, colonoscopy, ERCP, Endoscopic Ultrasound,
                        Manometry, HVPG, Trans -jugular liver biopsy, capsule endoscopy.</p>

                    <!-- Title -->
                    <h5 class="h5-md blue-color">Achievements and Accolades</h5>

                    <!-- Option #1 -->
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">He had presented his research work in various national and international
                            conferences.</p>
                    </div>

                    <!-- Option #2 -->
                    <div class="box-list">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">He has numerous publications in various national and international
                            journals.
                        </p>
                    </div>

                </div>
            </div> <!-- END DOCTOR BIO -->


        </div> <!-- End row -->
    </div> <!-- End container -->
</section>

@stop