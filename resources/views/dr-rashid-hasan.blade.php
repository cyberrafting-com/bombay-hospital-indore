@php($title = "Dr. Rashid Hasan | Bombay Hospital Indore")
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
                    <h4 class="h4-sm steelblue-color">Dr. Rashid Hasan</h4>

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
                    <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-rashid-hasan.jpg')}}" alt="">

                    <!-- Doctor Info -->
                    <div class="doctor-info">
                        <h5 class="h5-md blue-color">Qualifications</h5>
                        <p>MBBS from MGM Medical College Indore-1991-1998</p>
                        <p>Diploma in Orthopaedics from M.Y.Hospital Indore-1999-2001</p>
                        <p>DNB in Orthopaedics from Sir H.N.Hospital & Research Centre Mumbai 2002-2003</p>
                        <p>Fellowship in Sports Injuries from Apollo Hospital Hyderabad-2004</p>
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Extn. No.:</td>
                                    <td>2109</td>
                                </tr>
                                <tr>
                                    <td>Consulting Time:</td>
                                    <td>Mon-Sat - 10 am to 6 pm
                                    </td>
                                </tr>
                                <tr>
                                    <td>Consulting Room:</td>
                                    <td>9 (First Floor)</td>
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
                    <p>Dr Rashid Hasan obtained his medical degree from Devi Ahilya University Indore. He went on to
                        successfully complete his post-graduate training(Diploma in Orthopaedics) from M.Y.Hospital
                        Indore in 2001. He did his DNB in Orthopaedics from Sir H.N.Hospital & Research Centre(Mumbai)
                        (DNB Board), in 2003. He was privileged to have trained under some of the best professors and
                        renowned surgeons of Orthopaedics which includes Dr L.N.Vora,Dr P.H.Vora,Dr Mangal Parihar and
                        Dr Sudhir Warrior.</p>
                    <p>After doing his senior residency in various hospitals in Indore and Delhi ,he went to Mozambique
                        (Africa) on a U.N. sponsored Consultant post at Hospital Central Nampula.where he did an
                        extensive work in Trauma,reconstructive surgery and joint replacement..Following his return, he
                        joined Max Hospital Saket New Delhi as Joint Replacement Surgeon where he worked with Dr
                        S.K.S.Marya. in 2008.</p>
                    <p>He joined Bombay Hospital Indore in 2009 as Joint Replacement ,Arthroscopy & Trauma Surgeon and
                        has successfully performed many simple and complex joint replacements ,arthroscopic
                        reconstructions,deformity corrections and complex fractures of upper and lower limb and pelvis.
                    </p>

                    <h5 class="h5-md blue-color">Expertise</h5>
                    <p>Primary and revision hip and knee joint replacement ,arthroscopic reconstruction and complex
                        fractures of upper and lower limb.</p>
                    <!-- <div class="box-list m-top-15">
                                <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                                <p class="p-sm">Breast conservation surgery.</p>
                            </div>
                            <div class="box-list m-top-15">
                                <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                                <p class="p-sm">Thyroid, Head & Neck Cancer.</p>
                            </div>
                            <div class="box-list m-top-15">
                                <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                                <p class="p-sm">Gynecological and Urological Cancer Surgery.</p>
                            </div>
                            <div class="box-list m-top-15">
                                <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                                <p class="p-sm">Thoracic and Gastro Intestinal Malignancies.</p>
                            </div> -->


                    <h5 class="h5-md blue-color">Achievements and Accolades</h5>
                    <!-- <div class="box-list m-top-15">
                                <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                                <p class="p-sm">Achieved IIIrd position in \"Anatomy Dissection competition\" during medical graduation.</p>
                            </div>
                            <div class="box-list m-top-15">
                                <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                                <p class="p-sm">Awarded \"fellow of International College of Surgeons\" in Surgical Oncology, Chicago, USA in 2001.</p>
                            </div> -->

                </div>
            </div> <!-- END DOCTOR BIO -->


        </div> <!-- End row -->
    </div> <!-- End container -->
</section>

@stop