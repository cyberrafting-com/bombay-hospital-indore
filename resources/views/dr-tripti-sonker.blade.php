@php($title = "Dr. Tripti Sonker | Bombay Hospital Indore")
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
                    <h4 class="h4-sm steelblue-color">Dr. Tripti Sonker</h4>

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
                    <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-tripti-sonker.jpg')}}"
                        alt="">

                    <!-- Doctor Info -->
                    <div class="doctor-info">
                        <h5 class="h5-md blue-color">Qualifications</h5>
                        <p>MBBS : Gandhi Medical College & Hamidia Hospital , Bhopal MP, 2008-2014</p>
                        <p>MS (ENT): Gandhi Medical College & Hamidia Hospital , Bhopal MP, 2015-2018</p>
                        <p>Senior Residency from Mahatma Gandhi Memorial Medical College & Maharaja Yeshwantrao
                            Hospital, Indore MP, 2018-2020</p>
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Extn. No.:</td>
                                    <td>4005</td>
                                </tr>
                                <tr>
                                    <td>Consulting Time:</td>
                                    <td>Mon-Sat - 10 am to 6 pm
                                    </td>
                                </tr>
                                <tr>
                                    <td>Consulting Room:</td>
                                    <td>25A</td>
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
                    <p>Dr Tripti Sonker did her MBBS with merit from Gandhi Medical College & Hamidia Hospital , Bhopal
                        MP. She did her MS in ENT [Otorhinolaryangology & Head and Neck surgery] from Gandhi Medical
                        College & Hamidia Hospital , Bhopal MP.Later she worked as senior resident in from Mahatma
                        Gandhi Memorial Medical College & Maharaja Yeshwantrao Hospital, Indore MP, then she joined
                        Chirayu Medsical College and Peoples Medical College as Assistant Professor & ENT consultant for
                        cosecutive 3years (2021-2023).</p>
                    <p>Presently She joined Bombay Hospital Indore as Associate Consultant & Surgeon, Dept. of ENT, Head
                        & Neck Surgery where She is serving with full dedication. Dr. Tripti has attended various
                        courses and workshops related to the Microear surgery, Nasal Endoscopic Sinus surgeries, Skull
                        Base surgeries. She is highly competent in handling ENT outpatient and inpatient care and
                        elective surgeries. Hse has got vast experience in Septoplastic, Endoscopic, Micro-laryngal
                        surgeries and salivary glands and Head and Neck – Thyroid surgeries.</p>
                    <p>She is Life time membership Association of Otorhinolaryngology of India (AOI LM-5282).</p>
                    <p>Special Interest : MicroEar Surgery, Advance Nasal Endoscopic Surgery.</p>

                    <h5 class="h5-md blue-color">Expertise</h5>
                    <p>Microear surgeries,</p>
                    <p>Conservative approach Mastoid explorations,</p>
                    <p>Ossiculloplasties ( Hearing Conservation Tympanoplasties),</p>
                    <p>Ossicular Impants & Reconstructions,</p>
                    <p>Septoplasty,</p>
                    <p>Endoscopic sinus sugeries,</p>
                    <p>Endonasal DCR,</p>
                    <p>Microlaryngeal Surgeries for voice Disorders,</p>
                    <p>Diagnostic and therapeutic laryngeal and bronchoscopic procedures,</p>
                    <p>Surgeries for Benign Neoplastic diseases of Head & Neck.</p>


                    <h5 class="h5-md blue-color">Achievements and Accolades</h5>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Certificate of Participation- SKULLBASE CON 2016. (Accredited by Rajasthan Medical Council vide Ref.No. RMC/CME/2016/5610 dated 08- 07-2016 for 6hrs.)</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Certificate of OBSERVERSHIP -SKULLBASE CON 2016. (Accredited by Rajasthan Medical Council vide Ref.No. RMC/CME/2016/5610 dated 08- 07-2016 for 6hrs.)</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Certificate for participation AOICON 2017 KOLKATA, INDIA (Accredited bytheWEST BENGAL Medical Council vide Ref.No. 3799-C/28-2012 dated 6 th January 2017 for 15hrs.)</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Certificate for participation in TEMPORAL BONE DISSECTION WORKSHOP FOR MICROEAR SURGERY; D.Y.PATIL MEDICAL COLLEGE DEPARTMENT OF ENT AND ANATOMY in collaboration with ENT AND SKULL BASE GROUP 11 th August - 13 th 2017 Mumbai, Maharashtra No. MMC/ACCRE.CERT/MED-0138/2014 /CMECODE- MMC/MAC/2017/D-008241 TYPE OF CME: SURGICAL, 4(FOUR) CREDIT HOURS</p>
                    </div>
                   
                </div>
            </div> <!-- END DOCTOR BIO -->


        </div> <!-- End row -->
    </div> <!-- End container -->
</section>

@stop