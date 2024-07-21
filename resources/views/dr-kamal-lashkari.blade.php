@php($title = "Dr. Kamal Lashkari | Bombay Hospital Indore")
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
                    <h4 class="h4-sm steelblue-color">Dr. Kamal Lashkari</h4>

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
                    <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-kamal-lashkari.jpg')}}"
                        alt="">

                    <!-- Doctor Info -->
                    <div class="doctor-info">
                        <h5 class="h5-md blue-color">Qualifications</h5>
                        <p>MBBS GMC Bhopal 2005</p>
                        <p>MD Anaesthesiology Govt Medical College Baroda 2008</p>
                        <p>Indian Diploma in Critical Care Medicine (IDCCM) Indraprastha Apollo Hospital Delhi 2011</p>
                        <p>European Diploma in Intensive Care Medicine (EDIC) Copenhagen Denmark 2016</p>
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Extn. No.:</td>
                                    <td>-</td>
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
                    <p>Dr. Kamal Lashkari has more than 14 yr experience in critical care medicine He has worked in
                        several tertiary care hospitals in India and UAE.
                    </p>
                    <p><b>Experience in India:</b> He has worked as Consultant in department of critical care medicine
                        at Max Super Speciality hospital Patparganj New Delhi (From 2012 to 2017). Apart from that he
                        has worked in Indraprastha Apollo Hospital New Delhi (JCI recognized) .</p>
                    <p><b>Experience in UAE:</b> He worked as Head of Department and Specialist Critical Care Medicine
                        at Thumbay Hospital and Gulf Medical University Hospital Ajman (JCI recognized), UAE. Dr Kamal
                        was also appointed as Clinical lecturer in Gulf medical university.</p>
                    <p>Additionally he has worked as Specialist Critical Care Medicine at Govt Ministry of health UAE
                        Hospital (JCI recognized.), having Closed ICU with 43 ventilated beds with 10 ECMO units. The
                        hospital is ECMO referral hospital of region.</p>

                    <h5 class="h5-md blue-color">Expertise</h5>
                    <p>Airway management and Mechanical ventilation management Hemodynamic monitoring basic and advanced
                        Critical care Ultrasound and Ultrasound guided procedures. Management of Extra corporeal
                        membrane oxygenation (ECMO) patient. Insertion of dialysis catheter, management of IHD and CRRT,
                    </p>

                    <!-- Title -->
                    <h5 class="h5-md blue-color">Achievements and Accolades</h5>

                    <p><b>Publications-</b></p>
                    <p>YP Singh, SC Chhabra, K Lashkari, A Taneja, A Garg, A Chandra, M Chhabra, G P Singh, S Jain, SK
                        Singh. Hemoadsorption by extracorporeal cytokine adsorption therapy (cytosorb) in the management
                        of sepsic shock: a retrospective observational study. The International Journal of Artificial
                        Organs, Dec 2019.<br>Y P Singh, Lashkari K (eds.) Manual of Neuro Critical Care. Jaypee Brothers
                        Medical Publishers (P) Ltd; 2014. P. 289-294.<br>Mehta Y, Lashkari K. Kumar P. Stridor Chapter
                        81 In : Richhariya D, Jesus D (eds.) Signs and symptoms in clinical practice. Jaypee Brothers
                        Medical Publishers (P) Ltd; 2020. P. 618-624.</p>
                    <p>Kumar P, Lashkari K. Essentials of Managing Trauma in Rural/Remote Areas (Including Prehospital
                        Management and Transfer) In: Dixit S, Jha S (eds.) ISCCM Manual of TRAUMA CARE. Jaypee Brothers
                        Medical Publishers (P) Ltd; 2020. P. 217-227.</p>
                    <p>Kumar P, Gupta M, Lashkari K. Multimodal Neuromonitoring In: Todi S, Dixit S, Zirpe K, Mehta Y
                        (eds.) Critical Care Update 2019. Jaypee Brothers Medical Publishers (P) Ltd; 2019. P. 289-294.
                    </p>
                    <p>Samavedan S, Lashkari K. Medical Law and Ethics In: Mehta Y, Kumar P (eds.) MCQs in Critical
                        Care. Jaypee Brothers Medical Publishers (P) Ltd; 2018. P. 418-439.</p>
                    <p>George N, Lashkari K. Model question paper II In: Mehta Y, Kumar P (eds.) MCQs in Critical Care.
                        Jaypee Brothers Medical Publishers (P) Ltd; 2018. P. 487-497.<br>Lashkari K. Kumar A. Research
                        Tools in Intensive Care In: Kumar A (ed) Manual of Practical Examination in Intensive Care and
                        Emergency Medicine. CBS Publishers and Distributors Publishers (P) Ltd; 2019. P. 574-582.</p>
                    <p>Lashkari K. Kumar A. Important Studies in Intensive Care In: Kumar A (ed) Manual of Practical
                        Examination in Intensive Care and Emergency Medicine. CBS Publishers and Distributors Publishers
                        (P) Ltd; 2019. P. 583-597.</p>

                    <p><b>Poster presentation-</b></p>
                    <p>Hemoadsorption by extracorporeal cytokine adsorption therapy (cytosorb) in the management of
                        sepsis: a retrospective observational study. Intensive Care Medicine Experimental 2018, 6(Suppl
                        2):0626 (Poster Presentation. 31st Annual Congress ParisESICM 2018.)</p>
                    <p>Retrospective Observational Study.(study of 78 patients) “Clinical and microbiological profile of
                        Elizabethkingia Species in Intensive Care Units” (The Australia and New Zealand Intensive Care
                        Society ). Poster presentation ANZICS- Singapore 2015</p>
                    <p>Registrations- Full registration with licence to practice in India UK UAE and Ireland</p>

                    <p><b>Ching Faculty-</b></p>
                    <p>Worked as Clinical Lecturer in Gulf Medical University Ajman, affiliated with Thumbay hospital
                        Ajman, UAE.<br>Had been Author of Past test series for FRCA examinations.</p>

                    <p><b>RDS-</b></p>
                    <!-- Option #1 -->
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Awarded with “ Best Subject Matter Expert” by Thumbay Hospital Ajman, in Reward
                            and Recognition programme. 2018.</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Star awards for JCI accreditation December 2019 by Thumbay Hospital Ajman,</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Awarded “GEM awards” by Max Health care India, for his outstanding work and
                            exemplary performance in medical excellence in 2015</p>
                    </div>

                    <p><b>Conferences/ Ceritificates-</b></p>
                    <!-- Option #1 -->
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Speaker in CME on Neurological emergencies and epilepsy , Thumbay University
                            hospital and gulf medical university, Ajman UAE( Jan2020)</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Speaker in CME on Medicine and Pulmonary Critical Care Update – 2019, at Hotel
                            Crown plaza, Dubai UAE( April 2019)</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Organized and participated as a Speaker in CME on Sepsis Management in ED
                            conducted by Thumbay hospital in association with Gulf Medical University accredited by MOH.
                            (March 2019)</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Organized and participated as a Speaker in Neurocritical Care Symposium
                            conducted by Thumbay hospital in association with Gulf Medical University accredited by
                            MOH.(Nov 2018)</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Participated as a Speaker in Neurocritical Care Workshop In 20 Th Annual
                            Conference Of Indian Society Of Critical Care Medicine(National) And 18thasia Pacific
                            Congress Of Critical Care Medicine.(Feb 2014)</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">ESPEN LLL Course For nutrition in ICU (by European Society Of Parenteral And
                            Enteral Nutrition Society).Hong Kong April 2016.</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Primer on healthcare epidemiology, Infection control and antimicrobial
                            stewardship online course by The society for Healthcare Epidemiology of America (SHEA)</p>
                    </div>

                </div>
            </div> <!-- END DOCTOR BIO -->


        </div> <!-- End row -->
    </div> <!-- End container -->
</section>

@stop