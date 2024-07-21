@php($title = "Dr. Devendra Patil | Bombay Hospital Indore")
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
                    <h4 class="h4-sm steelblue-color">Dr. Devendra Patil</h4>

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
                    <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-devendra-patil.jpg')}}"
                        alt="">

                    <!-- Doctor Info -->
                    <div class="doctor-info">
                        <h5 class="h5-md blue-color">Qualifications</h5>
                        <p>M.S Obstetrics & Gynecology</p>
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Extn. No.:</td>
                                    <td>2101</td>
                                </tr>
                                <tr>
                                    <td>Consulting Time:</td>
                                    <td>Mon-Sat - 10am to 6pm
                                    </td>
                                </tr>
                                <tr>
                                    <td>Consulting Room:</td>
                                    <td>1, (First Floor)</td>
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
                    <p>Dr Devendra Patil did his MBBS from Terna Medical College, Navi Mumbai batch 2004. He pursued his
                        MS in obstetrics & gynecology from the prestigious KEM Hospital, Mumbai. After MS he undertook
                        advance training in laparoscopic gynecologic surgery in Mumbai along with infertility
                        management. He worked as a freelancer laparoscopic surgeon in Mumbai for 3 years.. In May 2021
                        he joined Bombay Hospital, Indore as Consultant obstetrics & Gynecologist & laparoscopic
                        surgeon.
                    </p>

                    <h5 class="h5-md blue-color">Expertise</h5>
                    <p>Dr Devendra Patil has 7 years of experience as an independent laparoscopic surgeon. Apart from
                        conventional obstetric practice his medical practice focuses on the treatment of complex
                        gynaecologic problems such as Endometriosis, fibroids, pelvic masses, and treatment of
                        precancerous conditions along with gynecological cancers. He is an expert with minimal access
                        surgery in the field of gynecology i .e. total laparoscopic hysterectomy, laparoscopic
                        myomectomy, laparoscopic tubal ligation, ovarian cystectomy, endoscopic endometriosis surgery,
                        tubal recanalization, operative hysteroscopy including septal resection, fibroids, metroplasty
                        etc. He is an expert in all types of vaginal surgeries including non-decent vaginal
                        hysterectomy, vaginal hysterectomy with repair and cosmetic gynecology. He also does cases
                        related to mullerian anomaly , Vaginoplasty, Neovagina creation surgeries. He is also
                        experienced in managing high risk obstetrics cases.</p>

                    <!-- Title -->
                    <h5 class="h5-md blue-color">Achievements and Accolades</h5>

                    <!-- Option #1 -->
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">He has many papers to his credit.</p>
                    </div>

                </div>
            </div> <!-- END DOCTOR BIO -->


        </div> <!-- End row -->
    </div> <!-- End container -->
</section>

@stop