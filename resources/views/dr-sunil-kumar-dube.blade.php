@php($title = "Dr. Sunil Kumar Dube | Bombay Hospital Indore")
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
                    <h4 class="h4-sm steelblue-color">Dr. Sunil Kumar Dube</h4>

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
                    <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-sunil-kumar-dube.jpg')}}"
                        alt="">

                    <!-- Doctor Info -->
                    <div class="doctor-info">
                        <h5 class="h5-md blue-color">Qualifications</h5>
                        <p>MBBS, MS, MCh(CVTS)</p>
                        <p>Cardiovascular & Thoracic Surgeon</p>
                        <p>Specialist in doing CABG, Valve repairs & replacements and pediatric cardiac surgery.</p>
                        <p>Special interest in doing Minimal Invasive Cardiac Surgeries (MICS)</p>
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Extn. No.:</td>
                                    <td>2136</td>
                                </tr>
                                <tr>
                                    <td>Consulting Time:</td>
                                    <td>Mon-Sat - 10 am to 6 pm
                                    </td>
                                </tr>
                                <tr>
                                    <td>Consulting Room:</td>
                                    <td>36</td>
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
                    <p>Dr Sunil Kumar Dube did his MBBS from MGM Medical College,Indore (Batch 1994).</p>
                    <p>He did his MS course from NSCB Medical College, Jabalpur ( Batch 2000)</p>
                    <p>He entered the prestigious Grant Medical College & Sir JJ Group of Hospitals & pursued his degree of MCH (CVTS) from there (Batch 2003).</p>
                    <p>He still trained at Hinduja Hospital, Mahim, Mumbai upto 2008.</p>
                    <p>He started surgeries in Indore from 2008 in CHL Apollo Hospital, Indore & CHL Medical Centre, Ujjain.</p>
                    <p>From Oct’2010, he joined Choithram Hospital & Research Centre (It is the oldest center in the central India to start cardiac surgery) and continued to work as the Unit Head till May’2022.</p>
                    <p>He has experience of operating in multiple centers in Indore including Vishesh Hospital, Synergy Hospital & Jupiter Hospital.</p>
                    <p>He was in Nairobi (Kenya) as the Director Cardiac Sciences & started a new unit of cardiac surgery in Mediheal Group of Hospitals.</p>
                    <p>He has joined Bombay Hospital, Indore as a full time Cardiovascular & Thoracic Surgeon from
                        18/09/2023.</p>

                    <h5 class="h5-md blue-color">Expertise</h5>
                    <p>Dr Sunil Dube has more than 20 yrs of experience in the field of Cardiovascular & thoracic surgery and more than 15 yrs as an independent surgeon.</p>
                    <p>CABG: More than 90% are Off pump CABG ( Beating-heart CABG) Redo CABGs Minimally Invasive CABG</p>
                    <p>Valve repair & Replacements; including Minimally Invasive approach</p>
                    <p>Aortic surgeries for aneurysm/ dissection e.g. Bental surgery</p>
                    <p>Pediatric Cardiac Surgeries</p>
                    <p>Thoracic surgeries including decortication, lobectomy, pneumonectomy, excision of . bullae, Repair of BP Fistula</p>
                    <p>Vascular Surgeries: Aortofemoral, femoropoplitial, axillofemoral bypass etc.</p>


                    <h5 class="h5-md blue-color">Achievements and Accolades</h5>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Dr Sunil Dube has a vast experience of doing more than 6500 surgeries with very good success rate as per international standards.</p>
                    </div>

                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Dr Sunil Dube was actively involved in the initiation of the “GREEN CORRIDORS\\\" for the \\\"Heart Transplant” program in the Indore city. Also, he was associated with the harvesting & transport of hearts for transplat to Mumbai.</p>
                    </div>

                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">He was a member of the Govt affiliated commity to give permission for heart transplant to Medanta Hospital, CHL Hospital & Bombay Hospital.</p>
                    </div>
                </div>
            </div> <!-- END DOCTOR BIO -->


        </div> <!-- End row -->
    </div> <!-- End container -->
</section>

@stop