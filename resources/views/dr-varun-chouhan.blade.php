@php($title = "Dr. Varun Chouhan | Bombay Hospital Indore")
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
                    <h4 class="h4-sm steelblue-color">Dr. Varun Chouhan</h4>

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
                    <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-varun-chouhan.jpg')}}"
                        alt="">

                    <!-- Doctor Info -->
                    <div class="doctor-info">
                        <h5 class="h5-md blue-color">Qualifications</h5>
                        <p>MBBS from MGM Medical College Indore MP,2007.</p>
                        <p>MS Orthopaedics from SETH GS Medical College and KEM Hospital, Mumbai, 2010.</p>
                        <p>Fellowship in Joint Replacement Surgery, Mumbai, 2011</p>
                        <p>Fellowship in Sports Trauma, Arthroscopy and Knee Surgery, Porto, Portugal, 2015.</p>
                        <p>Fellowship in Sports Medicine and knee Arthroscopy, Lyon, France, 2018.</p>
                        <p>ECFMG (USA)</p>
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Extn. No.:</td>
                                    <td>2015</td>
                                </tr>
                                <tr>
                                    <td>Consulting Time:</td>
                                    <td>Mon-Sat - 10 am to 6 pm
                                    </td>
                                </tr>
                                <tr>
                                    <td>Consulting Room:</td>
                                    <td>5 (First Floor)</td>
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
                    <p>Dr. Varun chouhan is one of the most qualified Orthopaedic and Joint Replacement Surgeons in
                        Central India.. He has received his medical education from the premier medical institutes of the
                        continent. He has done MBBS from M.G.M. Medical College Indore. MS (Ortho) from K.E.M. Mumbai,
                        which is also considered as Mecca of Orthopaedics.</p>
                    <p>He has received intensive training in Joint Replacements from world-class surgeons, including Dr.
                        S.V.Vaidya, Dr.P.B.Bhosale & Dr.Atul Panghate in K.E.M. Mumbai. After his M.S. he worked with
                        Internationally famous Joint Replacement surgeons of India Dr. R N Maniar, who is one of the
                        leading surgeon doing Computer Assisted Navigation Surgery for Knee in Lilavati & Breach Candy
                        Hospital & Dr. Sanjay Agarwala in P.D.Hinduja Hospital. Since then, he has successfully
                        performed a vast number of Joint Replacement Surgeries, including both primary and revision
                        cases.</p>
                    <p>He completed a Fellowship in Sports Medicine and Arthroscopic Reconstruction held at Clinica do
                        Dragao Espregueira-Mendes Sports Centre, FIFA Medical Centre of Excellence under guidance of
                        Prof. Joao Espregueira-Mendes at Porto, Portugal, where he got special training in treating
                        meniscus injuries, ACL and PCL reconstruction, Shoulder and Ankle Arthroscopy.</p>
                    <p>He also completed a Fellowship in Sports Medicine and knee Arthroscopic Reconstruction held at
                        Centre Orthopedic Santy, FIFA Medical Centre of Excellence under guidance of Dr. Bertrand
                        Sonnery-Cottet at Lyon, France, where he got special training in meniscus repair meniscus
                        transplant, ACL repair, Stump Preserving ACL Surgery, ALL reconstruction Arthroscopy and
                        management of sports injury in athletes and sports persons.</p>
                    <p>He has great research inclination and got publications in internationally reputed Journals like
                        JBJS British & Foot & Ankle Specialist, American. He is member of editorial board of open access
                        journal “ case reports in orthopaedics”.</p>
                    <p>He is a life member of Bombay Orthopaedic Society & IOA and he is international affiliate member
                        of the american academy of orthopaedic surgeons.</p>

                    <h5 class="h5-md blue-color">Expertise</h5>
                    <p>Primary and revision hip and knee joint replacement, Complex trauma, Pelvi-Acetabular Trauma,
                        Sports Trauma and Arthroscopic ACL and PCL Reconstruction, Multiligament injuries of knee.</p>

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