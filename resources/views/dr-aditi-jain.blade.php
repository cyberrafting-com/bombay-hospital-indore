@php($title = "Dr. Aditi Jain | Bombay Hospital Indore")
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
                    <h4 class="h4-sm steelblue-color">Dr. Aditi Jain</h4>

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
                    <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-aditi-jain.jpg')}}" alt="">

                    <!-- Doctor Info -->
                    <div class="doctor-info">
                        <h5 class="h5-md blue-color">Qualifications</h5>
                        <p>Fellowship pain management Delhi Pain Management Centre, New Delhi August 2013</p>
                        <p>M.D. Anaesthesiology Gandhi Medical College, Barkatullah Univ, Bhopal May 2012</p>
                        <p>M.B.B.S. Kasturba Medical College, Mangalore, Manipal University March 2009</p>
                        <p>12th std.(CBSE) Springdales School, New Delhi March 2002</p>
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Extn. No.:</td>
                                    <td>2256</td>
                                </tr>
                                <tr>
                                    <td>Consulting Time:</td>
                                    <td>-
                                    </td>
                                </tr>
                                <tr>
                                    <td>Consulting Room:</td>
                                    <td>-</td>
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
                    <p>After MBBS, one year compulsory rotatory internship at Sir Gangaram Hospital, New Delhi
                        (2008-2009).</p>
                    <p>After M.D.: Worked as a freelance anaesthesiologist in Indore.</p>
                    <p>Worked as Consultant Pain Specialist at Sri Aurobindo Medical college for 6 months.</p>
                    <p>Worked as Senior Resident in the dept of Anaesthesia at M.G.M. medical college, Indore since
                        January 2014 till Feb 2015.</p>
                    <p>Joined as Consultant Anaesthesiologist at Bombay hospital, Indore since March 2015 & continuing
                        till date.</p>

                    <h5 class="h5-md blue-color">Expertise</h5>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Have experience in superspecialities like Cardiothoracic surgery, Neurosurgery,
                            Paediatric surgery, Urology etc.</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Special interest: Pain Management, paediatric anaesthesia</p>
                    </div>


                    <h5 class="h5-md blue-color">Achievements and Accolades</h5>
                    <p>GOLD MEDAL - Anoop Upadhyay Award for Grand Performance in Anaesthesia – 2012 at Annual
                        Convocation of Gandhi Medical College, Bhopal.</p>
                    <p>AWARDS - Recipient of Dr T.N.Jha and Dr K.P.Chansoria travel grant award for paper titled : “
                        Effect of addition of Intrathecal MgSO4 to bupivacaine- fentanyl anaesthesia in PIH patients
                        undergoing caesarean section.” (MPISACON 2011 – Ujjain)</p>
                    <p>Winner of Free Paper presentation section for paper titled “ An Observational Study of the
                        compliance of resident Anaesthesiologists in maintaining the intraoperative chart at GMC,
                        Bhopal,” (MPISACON 2011 – Ujjain).</p>
                    <p>Second position in State level Quiz competition at MPISACON 2011.</p>
                    <p>M.T. Bhatia Gold Medal for Pain</p>
                    <p>Postgraduate thesis on “ Comparison of Induction and Recovery characteristics of Halothane and
                        Sevoflurane in Paediatric age group”; submitted to Barkatullah University, Bhopal (2009 – 2012).
                    </p>
                </div>
            </div> <!-- END DOCTOR BIO -->


        </div> <!-- End row -->
    </div> <!-- End container -->
</section>

@stop