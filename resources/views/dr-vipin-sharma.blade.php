@php($title = "Dr. Vipin Sharma | Bombay Hospital Indore")
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
                    <h4 class="h4-sm steelblue-color">Dr. Vipin Sharma</h4>

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
                    <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-vipin-sharma.jpg')}}" alt="">

                    <!-- Doctor Info -->
                    <div class="doctor-info">
                        <h5 class="h5-md blue-color">Qualifications</h5>
                        <p>MBBS, MS, MCh, DNB urology, fellowship in reconstructive urology</p>
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Extn. No.:</td>
                                    <td>2117</td>
                                </tr>
                                <tr>
                                    <td>Consulting Time:</td>
                                    <td>Mon-Sat - 10 am to 6 pm
                                    </td>
                                </tr>
                                <tr>
                                    <td>Consulting Room:</td>
                                    <td>17 (First Floor)</td>
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
                    <p>Dr Vipin Sharma done his MS general surgery (2014 to 2017) from Government Netaji Subhash Chandra
                        Medical college (NSCB) Jabalpur MP, NSCB is one of the reputed colleges in central India, is
                        very famous for general surgery training. Dr vipin Sharma got selected for MCh Urology from NEET
                        SS 2017 in his first attempt, he opted for Government kilpauk medical college Chennai, kilpauk
                        medical college is one of the oldest colleges in Chennai, and is very famous for their academic
                        and teachings, department of urology is also known as school of urology in Tamilnadu. Dr vipin
                        is having special interest in reconstructive urology, for that he did fellowship in
                        reconstructive urology at Dr Sanjay Kulkarni reconstructive urology centre, centre is famous for
                        their reconstructive urology, is one of the referral centres for urethral reconstruction. Dr
                        Sanjay Kulkarni invented Kulkarni technique of urethroplasty, world is following his technique.
                        Dr Vipin Sharma learned various technique of urethroplasty from Dr Sanjay Kulkarni and Dr Pankaj
                        Joshi. He did his expertise in urethroplasty (male and female), hypospadias, female incontinence
                        surgery, penile implant surgery, management of erectile dysfunction. He is well versed with all
                        endourological procedure like endoscopic kidney stone surgery , endoscopic prostate surgery. He
                        is expert in kidney cancer , bladder cancer , prostate cancer surgery.</p>

                    <h5 class="h5-md blue-color">Expertise</h5>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Stricture urethra surgery</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Hypospadias surgery</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Penile Implant (prosthesis)</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Female urethroplasty</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Erectile dysfunction management, premature ejaculation management</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Urinary leak surgery</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Kidney Stone surgery</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Prostate management</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Urology cancer management</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Bladder stone management</p>
                    </div>


                    <h5 class="h5-md blue-color">Achievements and Accolades</h5>
                    <p>He has attended various National & International Conferences.</p>
                    <p>He has published several research papers in National & International Journals of Urology. He has
                        presented various awardwinning papers in National & International Conferences. He is an avid
                        badminton player and He speakes hindi, English and tamil.</p>
                </div>
            </div> <!-- END DOCTOR BIO -->


        </div> <!-- End row -->
    </div> <!-- End container -->
</section>

@stop