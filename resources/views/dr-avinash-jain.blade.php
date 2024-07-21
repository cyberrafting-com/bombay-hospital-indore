@php($title = "Dr. Avinash Jain | Bombay Hospital Indore")
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
                    <h4 class="h4-sm steelblue-color">Dr. Avinash Jain</h4>

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
                    <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-avinash-jain.jpg')}}" alt="">

                    <!-- Doctor Info -->
                    <div class="doctor-info">
                        <h5 class="h5-md blue-color">Qualifications</h5>
                        <p>MBBS, MD, DNB, DM (AIIMS , New Delhi)</p>
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Extn. No.:</td>
                                    <td>4036</td>
                                </tr>
                                <tr>
                                    <td>Consulting Time:</td>
                                    <td>Mon-Sat - 10am to 6pm</td>
                                </tr>
                                <tr>
                                    <td>Consulting Room:</td>
                                    <td>33, (First Floor)</td>
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
                    <p>Dr Avinash Jain obtained his MBBS degree from NSCB Medical college , Jabalpur. He went on to
                        successfully complete his post-graduate training in Pulmonary Medicine obtaining MD from
                        prestigious Murari lal chest Hospital in GSVM medical college Kanpur in 2015. He did his DNB
                        Respiratory medicine from National board of education, Delhi in 2018. He has worked in Maulana
                        Azaad medical college and LNJP hospital in Delhi in Pulmonary medicine department , which is one
                        the largest and prestigious hospital in Delhi. Later he secured 3 rd rank in AIIMS, Delhi
                        entrance and was privileged to complete his DM ( super specialization) from the AIIMS , Delhi in
                        2021. He have been trained under the pioneers (Dr Randeep Guleria , Dr G. C. Khilnani and Dr
                        Sudhir chaudhri ) of India in the field of Pulmonary, critical care and sleep medicine. During
                        COVID-19 pandemic , he has worked in AIIMS , Delhi , looking after COVID ICUs and critical
                        patients. He has Done research in field of sleep related breathing disorders( Sleep Apnea and
                        snoring ), for which he has been trained for the same in National institute of tuberculosis and
                        respiratory diseases , New Delhi under Dr Rajneesh Gupta. He was associated with Pushpawati
                        singhaniya Hospital and research institute , New Delhi as an Associate Consultant. Dr Avinash
                        has obtained training in Critical care , Bronchoscopy and related procedures, Advanced Pulmonary
                        Function tests . Following his return, he joined Bombay Hospital Indore as Consultant
                        Pulmonologist. He is a life member of Indian chest society , European respiratory society And
                        Indian medical Association . His major interests and skills includes Bronchoscopy, thoracoscopy,
                        all lungs related disorders , critical care ( ventilator and Bipap management) , Sleep apnea,
                        excessive snoring and sleep related breathing disorders, COVID and post covid illness, lung
                        fibrosis , Interstitial lung diseases (ILD) and Tuberculosis, occupational lung diseases.
                    </p>

                    <h5 class="h5-md blue-color">Expertise</h5>
                    <p>Bronchoscopic lung procedures, Thoracoscopy, Endobronchial Ultrsound , Image guided lung biopsies
                        , Covid and Post Covid Illness , Asthma , Pneumonia , Allergy ( nose and chest) , Smoking
                        related lung diseases , ILDs, Sarcoidosis , ICU management, Snoring and sleep apnea ,
                        Tuberculosis , Lung cancer, Smoking cessation , Sleep Study etc</p>
                    <p>He has experience of more than 10 years in field of chest Medicine.</p>

                    <!-- Title -->
                    <h5 class="h5-md blue-color">Achievements and Accolades</h5>
                    <!-- Option #1 -->
                    <p>He has attended various National & International Conferences. He has published papers in National
                        & International Journals of Pulmonology and have contributed as author in books. He has given
                        presentations in various Conferences. He is faculty in prestigious FCCS course run by Critical
                        care society of USA.</p>

                </div>
            </div> <!-- END DOCTOR BIO -->


        </div> <!-- End row -->
    </div> <!-- End container -->
</section>

@stop