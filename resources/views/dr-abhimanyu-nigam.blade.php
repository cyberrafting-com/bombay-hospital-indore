@php($title = "Dr. Abhimanyu Nigam | Bombay Hospital Indore")
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
                    <h4 class="h4-sm steelblue-color">Dr. Abhimanyu Nigam</h4>

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
                    <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-abhimanyu-nigam.jpg')}}"
                        alt="">

                    <!-- Doctor Info -->
                    <div class="doctor-info">
                        <h5 class="h5-md blue-color">Qualifications</h5>
                        <p>D.M. Cardiology : All India Institute of Medical Sciences, Rishikesh(August 2020 - August
                            2023)</p>
                        <p>M.D. Medicine : M.G.M Medical College, Indore ( May 2017- July 2020)</p>
                        <p>M.B.B.S : Gandhi Medical College , Bhopal ( 2011-March 2017)</p>
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Extn. No.:</td>
                                    <td>2111</td>
                                </tr>
                                <tr>
                                    <td>Consulting Time:</td>
                                    <td>Mon-Sat - 10 am to 6 pm
                                    </td>
                                </tr>
                                <tr>
                                    <td>Consulting Room:</td>
                                    <td>11</td>
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
                    <p>Dr. Abhimanyu Nigam is a young, dynamic, compassionate, kind-hearted and friendly Cardiologist.
                        He hails from Indore and has an excellent academic record with being a distinction holder in
                        MBBS, and being awarded by the honourable Governor of Madhya Pradesh in 2017.</p>
                    <p>He cleared the PG entrance examination in 1 st attempt and got Selected for MD General Medicine
                        from M.G.M Medical College & M.Y Hospital Indore.
                        During his PG residency he had an excellent track record for his patient care skills,
                        communication with patients, and diagnostic care. And for his efforts he was awarded as the Best
                        Resident award. He completed his M.D Medicine being an University Topper and Gold Medalist in
                        state of Madhya Pradesh.
                        Thereafter, he got selected in the prestigious All India Institute of Medical sciences ( AIIMS )
                        for D.M. Cardiology and completed his Degree. He was the topper of 2020 batch and awarded Gold
                        Medal in D.M. Cardiology.
                        He has a strong academic base with very good interventional skills contributing to the
                        betterment of his patient’s health and well being.
                        Dr. Abhimanyu is particularly known for his communication skills with the patients and he
                        believes in building a healthy doctor- patient relationship, which is the key of success ..</p>

                    <h5 class="h5-md blue-color">Expertise</h5>
                    <p>Coronary Angiography</p>
                    <p>Coronary Angioplasty</p>
                    <p>Primary Angioplasty</p>
                    <p>Expertise in cardiac critical care management.</p>
                    <p>Pacemakers and devices implantation [ Dual chamber pacemaker, Left bundle paceing, ICDs]</p>
                    <p>Heart failure management</p>
                    <p>Expertise in structural heart disease diagnosis and management</p>
                    <p>Expertise in congenital heart diseases</p>
                    <p>Echocardiography [TTE, TEE , Dobutamine stress echocardiography]</p>
                    <p>Non invasive tests including TMT, Holter monitoring</p>


                    <h5 class="h5-md blue-color">Achievements and Accolades</h5>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Scientific activities :</p>
                        <p>Pandey A, Nigam A, Chaudhary A, Pandey VP. Clinical manifestations and complications seen
                            with scrub typhus: A case series from indore. Apollo Medicine. 2020 Apr 1;17(2):101-4.</p>
                        <p>KARDIA MOBILE FOR REMOTE DETECTION OF MYOCARDIAL INFARCATION IN COVID 19 PANDEMIC, Dr Rohit
                            Walia, Dr. Vikas Sabbarwal, Dr. Abhimanyu NIgam, Dr. Meenakshi Khapre, Dr. Niharika Dhiman
                            INDIAN JOURNAL OF APPLIED RESEARCH: Volume - 11I Issue - 2 I Febuary -2021</p>
                        <p>Kumar B, Sabbarwal V, Nigam A, Gore P, Chauhan G, Darbari A. Two case reports of acute
                            ST-elevation myocardial infarction after COVID-19 vaccination: co-incidence or
                            causal-association. J Health Soc Sci. 2021 Oct;6:293-8.</p>
                        <p>Kumar B, Nigam A, Soni S, Kumar V, Singh A, Chawla O. COVID-19 and cardiovascular diseases:
                            Past, present, and future. J Cardio Diabetes Metab Disord 2022;2:41-6</p>
                    </div>

                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Paper / poster Presentation :</p>
                        <p>Attended and presented a case presentation at RSSDI , Mp chapter Bhopal, January 2019.</p>
                        <p>Poster presentation at 5th INDO- UK Rheumatology summit , 30-31 March 2019, Gurugram. Poster
                            title: “ Case report of a young female with unrecognized celiac disease & joint deformities
                            “</p>
                        <p>Poster presentation at 5th INDO- UK Rheumatology summit , 30-31 March 2019, Gurugram. Poster
                            title: “ Case report of young female with unrecognized celiac disease & joint deformities “
                        </p>
                        <p>Poster presentation at 1st World Conference of Cardiometabolic meidicne, 26-27 April 2019,
                            Mumbai. Poster title: “ Iron overload cardiomyopathy in patient with beta thalassemia and
                            secondary hemochromatosis “.</p>
                        <p>Case presentation and Quiz competition Runner up at : 1st Central India haematology Summit,
                            July
                            2019.</p>
                        <p>Attended APICON , Agra 2020.</p>
                        <p>Attended CSI NIC Hyderabad, in June 2023.</p>
                    </div>

                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Strengths :</p>
                        <p>Hardworking and Sincere attitude.</p>
                        <p>Strong clinical skills and critical care management expertises.</p>
                        <p>Good relationship with patients.</p>
                    </div>
                </div>
            </div> <!-- END DOCTOR BIO -->


        </div> <!-- End row -->
    </div> <!-- End container -->
</section>

@stop