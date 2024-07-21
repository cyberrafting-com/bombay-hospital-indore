@php($title = "Dr. Pritesh Shrimali | Bombay Hospital Indore")
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
                    <h4 class="h4-sm steelblue-color">Dr. Pritesh Shrimali</h4>

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
                    <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-pritesh-shrimali.jpg')}}"
                        alt="">

                    <!-- Doctor Info -->
                    <div class="doctor-info">
                        <h5 class="h5-md blue-color">Qualifications</h5>
                        <p>MBBS, MS, DNB (Urology) , MNAMS (Mumbai)</p>
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Extn. No.:</td>
                                    <td>2102</td>
                                </tr>
                                <tr>
                                    <td>Consulting Time:</td>
                                    <td>Mon-Sat - 10 am to 6 pm
                                    </td>
                                </tr>
                                <tr>
                                    <td>Consulting Room:</td>
                                    <td>2 (First Floor)</td>
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
                    <p>Dr. Pritesh Shrimali obtained his medical degree from Devi Ahilya University Indore. He went on
                        to successfully complete his post-graduate training in General Surgery obtaining Master of
                        Surgery (MS) from MGM Indore. He did his DNB Urology from P.D. Hinduja National Hospital &
                        Research Center Mumbai. He was privileged to have been trained under the pioneers (Dr M H Kamat,
                        Dr S Sagade and Dr V Srinivas ) of India in the field of Urology in Mumbai. He has worked in
                        Urology department of Topiwala National Medical College & BYL Nair Hospital, Mumbai with Dr
                        Hemant Pathak. He has also been associated with Kokilaben Dhirubhai Ambani Hospital Mumbai as an
                        Associate Consultant. He was the Senior Consultant at R G Stone Urology & Laparoscopy Hospital
                        Mumbai for a span of 3 years. He has had the priviledge of heading the Urology Department as the
                        Chief Consultant at Umrao Hospital Mumbai. Following his return, he joined Bombay Hospital
                        Indore as Consultant Urologist.</p>
                    <p>He is a life member of Urology Society of India, American Urology Association and European
                        Urology Association. His basic area of specialization includes stone and prostate problems. His
                        major interests and skills are in Paediatric Urology, Endourology & Laparoscopy, Reconstructive
                        Urology (Urethral Stricture Surgeries ), UroOncology, Renal Transplant, Male Infertility &
                        Sexual Dysfunction and Female Urology.</p>

                    <h5 class="h5-md blue-color">Expertise</h5>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Stone and Prostate problems, Paediatric Urology, Endourology & Laparoscopy,
                            Reconstructive Urology (Urethral Stricture Surgeries), UroOncology, Renal Transplant, Male
                            Infertility & Sexual Dysfunction and Female Urology.</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">He has experience of more than thousand cases in Urology. He is amongst the best
                            Urologist available in Indore city.</p>
                    </div>


                    <h5 class="h5-md blue-color">Achievements and Accolades</h5>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">He has attended various National & International Conferences.</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">He has published several research papers in National & International Journals of
                            Urology. He has presented various award winning papers in National & International
                            Conferences. He is an avid Tennis player and a good swimmer. He is also a very good
                            guitarist and a vocalist.</p>
                    </div>

                </div>
            </div> <!-- END DOCTOR BIO -->


        </div> <!-- End row -->
    </div> <!-- End container -->
</section>

@stop