@php($title = "Dr. Ashutosh Soni | Bombay Hospital Indore")
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
                    <h4 class="h4-sm steelblue-color">Dr. Ashutosh Soni</h4>

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
                    <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-ashutosh-soni.jpg')}}"
                        alt="">

                    <!-- Doctor Info -->
                    <div class="doctor-info">
                        <h5 class="h5-md blue-color">Qualifications</h5>
                        <p>MBBS (NSB Medical College Jabalpur MP) 1984</p>
                        <p>MS (Surgery) 1987</p>
                        <p>FIAGES 2007</p>
                        <p>FMAS 2013</p>
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Extn. No.:</td>
                                    <td>2112</td>
                                </tr>
                                <tr>
                                    <td>Consulting Time:</td>
                                    <td>Mon-Sat - 10 am to 6 pm
                                    </td>
                                </tr>
                                <tr>
                                    <td>Consulting Room:</td>
                                    <td>12 (First Floor)</td>
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
                    <p>Dr. Ashutosh Soni obtained his medical degree from Rani Durgavati University Jabalpur MP. He went
                        on to successfully complete his post-graduate training in General Surgery obtaining the Masters
                        in Surgery from Rani Durgavati University Jabalpur.</p>
                    <p>He was awarded the Fellowship by IAGES (FIAGES) after undergoing training in minimally Invasive
                        Surgery under Dr PK Choubey .He was later awarded FMAS by Association of Minimal Access surgery
                        by Dr C Pallanivelu.</p>
                    <p>He had fellowship at Seoul under Dr Kim and Dr Cho for laparoscopic GI surgery.</p>
                    <p>He established the art of laparoscopy during the period of 1996 to 2005 at Jabalpur Hospital
                        where he has started his career in 1989 as pediatric surgeon and later General surgeon.</p>
                    <p>He moved to this institute in June 2005.</p>
                    <p>His present practice covers surgical gastroenterology, Laparoscopic surgery (Diagnostic and
                        operative) and general surgery. His main interest is in advanced lap procedures and bariatric
                        surgery.</p>

                    <p><b>Pediatric surgery:</b></p>
                    <p>Worked under DR SUBHASH DALAL at Jaslok Hospital Mumbai for 2 years and later at Medical College
                        Jabalpur in the dept. of surgery Pediatric Surgery unit under DR VK Raina for 3 years as a DNB
                        candidate and have a good exposure of all Neonatal and Pediatric Surgical emergencies.</p>

                    <p><b>Laparoscopic Surgery:</b></p>
                    <p>Developed Laparoscopic surgical skills by attending different hands on workshops under
                        Dr.PKChoubey at Gangaram Hospital and Dr Durairajan and DR Felix Schier of Jena University
                        Germany at Chennai and later under DR C Pallanivelu at Gem Hospital Coimbotore.<br>Performed
                        Basic as well as advanced lap surgeries independently.<br>A clinical fellow at St Vincent
                        Hospital Seoul under Dr Kim and at University Hospital Seoul under Dr Cho.</p>

                    <h5 class="h5-md blue-color">Expertise</h5>
                    <p>Advanced laparoscopic surgeries (Hiatus hernia,Achalasia cardia,Inguinal hernia,Gastric bypass
                        for obesity,colonic surgery,VATS oesophagectomy,Total lap Hystrectomies,lap pyeloplasties,lap
                        radical naphrectomy,)</p>


                    <h5 class="h5-md blue-color">Achievements and Accolades</h5>
                    <p><b>Papers Read- Total 11</b></p>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Chaired a session of short papers at National Conference of IAPS held at
                            Jabalpur Nov.2004,</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">State Conference of ASI MP Chapter at Bhopal 2005</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">International congress on “mechanism of mishaps and risk reduction strategies”
                            organized by IAGES New Delhi</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">IAGES 2006 in the month of Feb 06 held at Bangalore.</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">A paper read at IAGES 2006 at Bangalore</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Attended ASIA PACIFIC OBESITY CONCLAVE at New Delhi in 2006</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">I have attended “Master Class in Bariatric Surgery” A Hands-on training
                            Programme on Advanced Laparoscopic Surgery at Ethicon institute prior to this conference
                            also.</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Faculty member in operative workshop at zonal conference of IAGES held at Raipur
                            2004 and CZCON IAGES 2007.</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">ELSA 2007 at Hyderabad presented two papers</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">APHS 2007 at Singapore poster presentation</p>
                    </div>

                    <p><b>Professional Membership</b></p>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Indian Medical Association (Ima)</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Association Of Surgeons Of India (Asi)</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Indian Association Of Paediatric Surgeons (Iaps)</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Indian Association Of Gastrointestinal Endoscopic Surgeons (Iages)</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Association Of Minimal Access Surgeons Of India (Amasi)</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Asia Pacific Hernia Society (Aphs)</p>
                    </div>
                </div>
            </div> <!-- END DOCTOR BIO -->


        </div> <!-- End row -->
    </div> <!-- End container -->
</section>

@stop