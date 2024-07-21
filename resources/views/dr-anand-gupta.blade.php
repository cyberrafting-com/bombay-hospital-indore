@php($title = "Dr. Anand Gupta | Bombay Hospital Indore")
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
                    <h4 class="h4-sm steelblue-color">Dr. Anand Gupta</h4>

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
                    <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-anand-gupta.jpg')}}" alt="">

                    <!-- Doctor Info -->
                    <div class="doctor-info">
                        <h5 class="h5-md blue-color">Qualifications</h5>
                        <p>MBBS from MGM Medical College Indore MP, 1993­1998. Diploma orthopaedics ( D” orth) 2000 ­
                            2002. DNB(Orthopaedics) from National Board of Examinations New Delhi, 2006.</p>
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Extn. No.:</td>
                                    <td>2116</td>
                                </tr>
                                <tr>
                                    <td>Consulting Time:</td>
                                    <td>Mon-Sat - 10 am to 6 pm
                                    </td>
                                </tr>
                                <tr>
                                    <td>Consulting Room:</td>
                                    <td>16 (First Floor)</td>
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
                    <p>Dr. Anand Gupta obtained his medical degree from MGM Medical College and Devi Ahilya University
                        Indore. He went on to successfully complete his post­graduate training in Orthopaedic obtaining
                        the D” Orth from MGM Medical college and M.Y. Hospital, Indore.. He did his DNB Orthopaedic
                        residency from Bombay and clear the exit exam of National Board of Examinations from Maulana
                        Azad Medical College , New Delhi in april 2006.. He was privileged to have trained under the
                        tutelage of Dr K.T. Dholakia in Orthopaedics at BHIMS (Bombay Hospital Institute of Medical
                        Sciences Mumbai). He has also worked with other stalwarts in orthopaedics including Dr. H.R.
                        Jhunjhunwala, Dr. J.A.Pachore, Dr.Nilen Shah, Dr. Arun Mullaji, Dr. Sanjay Agarwala and Dr.
                        Anant Joshi. He worked at Bombay for almost seven years at various Hospitals including Bombay
                        Hospital and P.D. Hinduja National Hospital. He did Fellowships in Joint Replacement and
                        Arthroscopy. Following his return, he joined Bombay Hospital Indore in2009 as consultant
                        orthopaedics and Joint Replacement where he established the specialty of Orthopaedics and Joint
                        Replacement in particular. He has the longest series of joint replacement surgeries particularly
                        Total Knee Replacement at Bombay Hospital, Indore. Apart from this he has long series of
                        periarticular fractures, pelviacetabular fractures, complex trauma and revision surgeries.He is
                        doing Knee Arthroscopy including ACL Reconstruction on a regular basis. He has delivered
                        lectures on common orthopaedic problems, Arthritis and Joint replacement including Knee and Hip
                        replacement not only at Bombay Hospital, Indore but in other forums across the state of Madhya
                        Pradesh. . He is a life member of Indian Orthopaedic Association and currently member of
                        executive committee of Indore Orthopaedic Association. He has trained himself at various
                        international centers including Zuric at switzerland, Singapore, Chiangmai at Thailand, Shanghai
                        in China, and Taipei at Taiwan. His basic area of interest is Total Knee and Total Hip
                        Replacement and pelviacetabular injuries. He also runs a arthritis clinic at Bombay Hospital
                        Indore.</p>

                    <h5 class="h5-md blue-color">Expertise</h5>
                    <p>Difficult joint Replacements, Knee Arthroscopy, poly trauma specially periarticular fractures
                        including pelviacetabular injuries.</p>

                    <h5 class="h5-md blue-color">Achievements and Accolades</h5>
                    <p>He is credited with first Shoulder Replacement Bombay hospital, Indore. Pioneer in starting the
                        Scapular fracture fixation in the city of Indore has got the largest series in this city in this
                        kind of injuries. PresentationsPaper on blood loss in Total Knee Replacement in WIROC 2008 at
                        Mumbai. Received best paper presentation award on difficult TKR at Indore Orthopaedic Ass.
                        Presented paper at MP ORTHOCON 2013. Presented paper at INDOCON IN 2011 and 2014.</p>
                    <!-- <div class="box-list m-top-15">
                                <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                                <p class="p-sm">Successful mechanical thrombectomy of acute middle cerebral artery occlusion due to vegetation from infective endocarditis : Sajith Sukumaran, ER Jayadevan, Alok Mandliya, Sapna Erat Sreedharan, S.Harikrishnan, Neelima Radhakrishnan, PN Sylaja : Neurology India 2012, Volume : 60,Issue : 2, Page : 239-240</p>
                            </div> -->

                </div>
            </div> <!-- END DOCTOR BIO -->


        </div> <!-- End row -->
    </div> <!-- End container -->
</section>

@stop