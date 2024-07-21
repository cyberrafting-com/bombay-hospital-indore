@php($title = "Bombay Hospital | India's Best Multispeciality Hospital in Indore")
@section('meta_desc') @endsection

@extends('layouts.default')
@section('content')


<!-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="display: block;">
    <div class="carousel-inner">
        <div class="carousel-item active ">
            <img class="d-block w-100" src="{{ asset('/resources/assets/images/banner1.jpg')}}" alt="">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('/resources/assets/images/banner1.jpg')}}" alt="">
        </div>
        <div class="carousel-item carousel-item-next carousel-item-left">
            <img class="d-block w-100" src="{{ asset('/resources/assets/images/slider-video.gif')}}" alt="">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div> -->

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="display: block;">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="{{ asset('/resources/assets/images/banner2.jpg')}}" alt="">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('/resources/assets/images/banner1.jpg')}}" alt="">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<section id="about-1" class="about-section division">
    <div class="container vision-box">
        <div class="row d-flex align-items-center">


            <!-- ABOUT BOX #1 -->
            <div id="abox-3" class="col-md-4 col-lg-4">
                <div class="abox-1 white-color">

                    <img class="img-fluid" src="{{ asset('/resources/assets/images/mission.png')}}"
                        alt="statistic-image">

                    <h5 class="h5-md">Mission</h5>

                    <!-- Text -->
                    <p><q>Bombay Hospital shall provide the best possible medical treatment,
                            delivered
                            most
                            efficiently, in the shortest possible time, at minimum cost, to all
                            sections
                            of
                            the society, irrespective of caste, creed or religion.</q></p>

                </div>
            </div>


            <!-- ABOUT BOX #2 -->
            <div id="abox-2" class="col-md-4 col-lg-4">
                <div class="abox-1 white-color">
                    <img class="img-fluid" src="{{ asset('/resources/assets/images/vision.png')}}"
                        alt="statistic-image">

                    <h5 class="h5-md">Vision</h5>

                    <p><q>To render the same level of service to the poor that the rich will get in
                            a
                            good
                            hospital.</q></p>
                </div>
            </div>

            <!-- <div id="abox-3" class="col-md-4 col-lg-4">
            <div class="abox-1 white-color">

                <h5 class="h5-md">Vision</h5>

                <p><q>To render the same level of service to the poor that the rich will get in
                        a
                        good
                        hospital.</q></p>

            </div>
        </div> -->


            <!-- ABOUT BOX #3 -->
            <div id="abox-3" class="col-md-4 col-lg-4">
                <div class="abox-1 white-color">
                    <img class="img-fluid" src="{{ asset('/resources/assets/images/motto.png')}}" alt="statistic-image">

                    <!-- Title -->
                    <h5 class="h5-md">Motto</h5>

                    <!-- Text -->
                    <p><q>A Patient is the most important person in our hospital. He is not an
                            interruption
                            to
                            our work. He is the purpose of it. He is not an outsider in our
                            hospital, he
                            is
                            part
                            of it. We are not doing him a favour by serving him, he is doing us a
                            favour
                            by
                            giving us an opportunity to do so.</q></p>

                </div>
            </div>


        </div> <!-- End row -->
    </div> <!-- End container -->
</section>

<div id="statistic-3" class="wide-60 statistic-section division">
    <div class="container-fluid" style="width: 90%;">
        <div class="row d-flex align-items-center">


            <!-- TEXT BLOCK -->
            <div class="col-lg-6">
                <div class="txt-block pc-30 mb-40">

                    <!-- Section ID -->
                    <span class="section-id blue-color">Bombay Hospital Indore</span>

                    <!-- Title -->
                    <h3 class="h3-md steelblue-color">The Preeminent NABH Accredited Hospital in Madhya Pradesh
                    </h3>

                    <!-- Text -->
                    <p>Considered the premier private trust hospital in India which was Set up in 1950s by the
                        great philanthropist Shri Rameshwar Das ji Birla. Every year around 2 lakh OPD patients
                        & 28000 inpatients flock to Bombay Hospital – Bombay for various kinds of treatment.
                    </p>

                    <!-- Statistic Holder -->
                    <div class="statistic-holder">
                        <div class="row">

                            <!-- STATISTIC BLOCK #1 -->
                            <div class="col-sm-4">
                                <div class="statistic-block icon-sm">

                                    <!-- Icon  -->
                                    <span class="flaticon-062-cardiogram-3 grey"></span>

                                    <!-- Text -->
                                    <h5 class="statistic-number grey"><span class="count-element">71</span>+
                                    </h5>
                                    <p>Years of Medical Care</p>

                                </div>
                            </div>

                            <!-- STATISTIC BLOCK #2 -->
                            <div class="col-sm-4">
                                <div class="statistic-block icon-sm">

                                    <!-- Icon  -->
                                    <span class="flaticon-137-doctor grey"></span>

                                    <!-- Text -->
                                    <h5 class="statistic-number grey"><span class="count-element">70</span>+
                                    </h5>
                                    <p>Qualified Doctors</p>

                                </div>
                            </div>

                            <!-- STATISTIC BLOCK #3 -->
                            <div class="col-sm-4">
                                <div class="statistic-block icon-sm">

                                    <!-- Icon  -->
                                    <span class="flaticon-065-hospital-bed grey"></span>

                                    <!-- Text -->
                                    <h5 class="statistic-number grey"><span class="count-element">64</span>
                                    </h5>
                                    <p>Bedded Intensive Care</p>

                                </div>
                            </div>

                        </div>
                    </div> <!-- End Statistic Holder -->


                </div>
            </div> <!-- END TEXT BLOCK -->


            <!-- STATISTIC IMAGE -->
            <div class="col-lg-6">
                <div class="statistic-img text-center mb-40">
                    <img class="img-fluid" src="{{ asset('/resources/assets/images/image-04.png')}}"
                        alt="statistic-image">
                </div>
            </div>


        </div> <!-- End row -->
    </div> <!-- End container -->
</div>

<section id="info-6" class="bg-blue info-section division">
    <!-- TEXT BLOCK -->
    <div class="container-fluid">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6 offset-lg-6">
                <div class="txt-block pc-30 white-color wow fadeInUp" data-wow-delay="0.4s"
                    style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">

                    <!-- Section ID -->
                    <!-- <span class="section-id id-color">Qualified Doctors</span> -->

                    <!-- Title -->
                    <h3 class="h3-md">Chairman’s Message</h3>
                    <h4 style="font-size: 22px; margin-bottom: 10px; font-weight: 400;">Shri. Bharat Kumar
                        Taparia<br>Chairman</h4>

                    <!-- CONTENT BOX #1 -->
                    <div class="box-list">

                        <p>Charity and the pursuit of excellence are the two fundamental ideals that provide us
                            impetus to focus on the well being of the patient who is our primary responsibility.
                            We have an obligation to provide the best possible treatment, delivered most
                            efficiently, in the shortest possible time span and at minimum cost.
                        </p>

                        <p>On this bedrock of charity we are relentlessly building the bedrock of excellence in
                            the hospital by continuously refurbishing its spaces, installing the most modern
                            medical equipments and injecting professionalism and dedication in our management
                            team, so that our world class doctors can discharge their duties and
                            responsibilities in an academically stimulating and hassle-free environment.</p>
                    </div>


                    <!-- Button -->
                    <a href="{{ route('philosophy')}}" class="btn btn-tra-white blue-hover mt-25">Read more</a>

                </div>
            </div>
        </div> <!-- End row -->
    </div> <!-- END TEXT BLOCK -->


    <!-- INFO-6 IMAGE -->
    <div class="info-6-img text-center"></div>


</section>


<section id="tabs-1" class="wide-100 tabs-section division">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 section-title">

                <!-- Title 	-->
                <h3 class="h3-md steelblue-color">Departments</h3>

                <!-- Text -->
                <p>Bombay Hospital is a leading healthcare institution with six specialized departments. The
                    Diagnostic department offers a range of tests and scans, while the Medical department
                    provides comprehensive care for various illnesses. The Round-the-Clock department provides
                    emergency care services. The Health Library department offers a vast collection of medical
                    literature. The Surgical department provides advanced surgical treatments, and the
                    Therapeutic department specializes in rehabilitation and physiotherapy. Together, these
                    departments ensure patients receive top-notch medical care at Bombay Hospital.
                </p>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">


                <!-- TABS NAVIGATION -->
                <div id="tabs-nav" class="list-group text-center">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">

                        <!-- TAB-2 LINK -->
                        <li class="nav-item icon-xs">
                            <a class="nav-link active" id="tab2-list" data-toggle="pill" href="#tab-2" role="tab"
                                aria-controls="tab-2" aria-selected="false">
                                <span class="flaticon-058-blood-transfusion-2"></span> Medical
                            </a>
                        </li>

                        <li class="nav-item icon-xs">
                            <a class="nav-link" id="tab5-list" data-toggle="pill" href="#tab-5" role="tab"
                                aria-controls="tab-5" aria-selected="true">
                                <span class="flaticon-060-cardiogram-4"></span> Surgical
                            </a>
                        </li>

                        <!-- TAB-3 LINK -->
                        <li class="nav-item icon-xs">
                            <a class="nav-link" id="tab3-list" data-toggle="pill" href="#tab-3" role="tab"
                                aria-controls="tab-3" aria-selected="false">
                                <span class="flaticon-031-scanner"></span> Round the Clock
                            </a>
                        </li>

                        <li class="nav-item icon-xs">
                            <a class="nav-link" id="tab6-list" data-toggle="pill" href="#tab-6" role="tab"
                                aria-controls="tab-6" aria-selected="true">
                                <span class="flaticon-005-blood-donation-3"></span> Therapeutic
                            </a>
                        </li>

                        <!-- TAB-1 LINK -->
                        <li class="nav-item icon-xs">
                            <a class="nav-link" id="tab1-list" data-toggle="pill" href="#tab-1" role="tab"
                                aria-controls="tab-1" aria-selected="true">
                                <span class="flaticon-076-microscope"></span> Diagnostic
                            </a>
                        </li>


                        <!-- TAB-4 LINK -->
                        <!-- <li class="nav-item icon-xs">
                            <a class="nav-link" id="tab4-list" data-toggle="pill" href="#tab-4" role="tab"
                                aria-controls="tab-4" aria-selected="false">
                                <span class="flaticon-083-stethoscope"></span> Health Library
                            </a>
                        </li> -->


                    </ul>

                </div> <!-- END TABS NAVIGATION -->


                <!-- TABS CONTENT -->
                <div class="tab-content" id="pills-tabContent">


                    <!-- TAB-1 CONTENT -->
                    <div class="tab-pane fade" id="tab-1" role="tabpanel" aria-labelledby="tab1-list">
                        <div class="row d-flex align-items-center">


                            <!-- TAB-1 IMAGE -->
                            <div class="col-lg-5">
                                <div class="tab-img">
                                    <img style="width: 100%;" class="img-fluid"
                                        src="{{ asset('/resources/assets/images/department/diagnostic.jpg')}}"
                                        alt="tab-image">
                                </div>
                            </div>


                            <!-- TAB-1 TEXT -->
                            <div class="col-lg-7">
                                <div class="txt-block pc-30">

                                    <!-- Title -->
                                    <!-- <h3 class="h3-md steelblue-color">Diagnostic</h3> -->
                                    <div class="row">
                                        <div class="service-block-six col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                            <a href="{{ route('blood-transfusion-service')}}"></a>
                                            <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms"
                                                data-wow-duration="1500ms"
                                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                                                <a href="{{ route('blood-transfusion-service')}}">
                                                    <img
                                                        src="{{ asset('/resources/assets/images/icons/blood-transfusion.png')}}" />
                                                </a>
                                                <h3>
                                                    <a href="{{ route('blood-transfusion-service')}}">Blood
                                                        Transfusion</a>
                                                </h3>
                                            </div>
                                        </div>

                                        <div class="service-block-six col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                            <a href="{{ route('cath-lab')}}"></a>
                                            <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms"
                                                data-wow-duration="1500ms"
                                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                                                <a href="{{ route('cath-lab')}}">
                                                    <img
                                                        src="{{ asset('/resources/assets/images/icons/cath-lab.png')}}" />
                                                </a>
                                                <h3>
                                                    <a href="{{ route('cath-lab')}}">Cath Lab</a>
                                                </h3>
                                            </div>
                                        </div>


                                        <div class="service-block-six col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                            <a href="{{ route('ecg')}}"></a>
                                            <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms"
                                                data-wow-duration="1500ms"
                                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                                                <a href="{{ route('ecg')}}">
                                                    <img src="{{ asset('/resources/assets/images/icons/ecg.png')}}" />
                                                </a>
                                                <h3>
                                                    <a href="{{ route('ecg')}}">ECG, Echo, Holter</a>
                                                </h3>
                                            </div>
                                        </div>


                                        <div class="service-block-six col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                            <a href="{{ route('eeg')}}"></a>
                                            <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms"
                                                data-wow-duration="1500ms"
                                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                                                <a href="{{ route('eeg')}}">
                                                    <img src="{{ asset('/resources/assets/images/icons/eeg.png')}}" />
                                                </a>
                                                <h3>
                                                    <a href="{{ route('eeg')}}">EEG, EMG</a>
                                                </h3>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="row">
                                        <div class="service-block-six col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                            <a href="{{ route('histopathology')}}"></a>
                                            <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms"
                                                data-wow-duration="1500ms"
                                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                                                <a href="{{ route('histopathology')}}">
                                                    <img
                                                        src="{{ asset('/resources/assets/images/icons/histopathology.png')}}" />
                                                </a>
                                                <h3>
                                                    <a href="{{ route('histopathology')}}">Histopathology</a>
                                                </h3>
                                            </div>
                                        </div>

                                        <div class="service-block-six col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                            <a href="{{ route('mri')}}"></a>
                                            <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms"
                                                data-wow-duration="1500ms"
                                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                                                <a href="{{ route('mri')}}">
                                                    <img src="{{ asset('/resources/assets/images/icons/mri.png')}}" />
                                                </a>
                                                <h3>
                                                    <a href="{{ route('mri')}}">MRI & CT</a>
                                                </h3>
                                            </div>
                                        </div>


                                        <div class="service-block-six col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                            <a href="{{ route('pathology')}}"></a>
                                            <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms"
                                                data-wow-duration="1500ms"
                                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                                                <a href="{{ route('pathology')}}">
                                                    <img
                                                        src="{{ asset('/resources/assets/images/icons/pathology.png')}}" />
                                                </a>
                                                <h3>
                                                    <a href="{{ route('pathology')}}">Pathology</a>
                                                </h3>
                                            </div>
                                        </div>


                                        <div class="service-block-six col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                            <a href="{{ route('pulmonary-function-lab')}}"></a>
                                            <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms"
                                                data-wow-duration="1500ms"
                                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                                                <a href="{{ route('pulmonary-function-lab')}}">
                                                    <img
                                                        src="{{ asset('/resources/assets/images/icons/pulmonary.png')}}" />
                                                </a>
                                                <h3>
                                                    <a href="{{ route('pulmonary-function-lab')}}">Pulmonary Function
                                                        Lab</a>
                                                </h3>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="row">
                                        <div class="service-block-six col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                            <a href="{{ route('ultrasound')}}"></a>
                                            <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms"
                                                data-wow-duration="1500ms"
                                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                                                <a href="{{ route('ultrasound')}}">
                                                    <img
                                                        src="{{ asset('/resources/assets/images/icons/ultrasound.png')}}" />
                                                </a>
                                                <h3>
                                                    <a href="{{ route('ultrasound')}}">Ultrasound</a>
                                                </h3>
                                            </div>
                                        </div>

                                        <div class="service-block-six col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                            <a href="{{ route('xray')}}"></a>
                                            <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms"
                                                data-wow-duration="1500ms"
                                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                                                <a href="{{ route('xray')}}">
                                                    <img src="{{ asset('/resources/assets/images/icons/xray.png')}}" />
                                                </a>
                                                <h3>
                                                    <a href="{{ route('xray')}}">X-Ray</a>
                                                </h3>
                                            </div>
                                        </div>

                                    </div>


                                </div>
                            </div> <!-- END TAB-1 TEXT -->


                        </div>
                    </div> <!-- END TAB-1 CONTENT -->


                    <!-- TAB-2 CONTENT -->
                    <div class="tab-pane fade show active" id="tab-2" role="tabpanel" aria-labelledby="tab2-list">
                        <div class="row d-flex align-items-center">
                            <!-- TAB-2 IMAGE -->
                            <div class="col-lg-5">
                                <div class="tab-imgs">
                                    <img style="width: 100%;" class="img-fluid"
                                        src="{{ asset('/resources/assets/images/department/medical.jpg')}}" alt="">
                                </div>
                            </div>

                            <div class="col-lg-7">
                                <div class="txt-block pc-30">

                                    <!-- TAB-2 TEXT -->
                                    <div class="row">
                                        <div class="service-block-six col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                            <a href="{{ route('cardiology')}}"></a>
                                            <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms"
                                                data-wow-duration="1500ms"
                                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                                                <a href="{{ route('cardiology')}}">
                                                    <img
                                                        src="{{ asset('/resources/assets/images/icons/cardiology.png')}}" />
                                                </a>
                                                <h3>
                                                    <a href="{{ route('cardiology')}}">Cardiology</a>
                                                </h3>
                                            </div>
                                        </div>

                                        <div class="service-block-six col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                            <a href="{{ route('chest-medicine')}}"></a>
                                            <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms"
                                                data-wow-duration="1500ms"
                                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                                                <a href="{{ route('chest-medicine')}}">
                                                    <img
                                                        src="{{ asset('/resources/assets/images/icons/chest-medicine.png')}}" />
                                                </a>
                                                <h3>
                                                    <a href="{{ route('chest-medicine')}}">Chest Medicine</a>
                                                </h3>
                                            </div>
                                        </div>


                                        <div class="service-block-six col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                            <a href="{{ route('gastroentrology')}}"></a>
                                            <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms"
                                                data-wow-duration="1500ms"
                                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                                                <a href="{{ route('gastroentrology')}}">
                                                    <img
                                                        src="{{ asset('/resources/assets/images/icons/gastroentrology.png')}}" />
                                                </a>
                                                <h3>
                                                    <a href="{{ route('gastroentrology')}}">Gastroentrology</a>
                                                </h3>
                                            </div>
                                        </div>


                                        <div class="service-block-six col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                            <a href="{{ route('general-medicine')}}"></a>
                                            <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms"
                                                data-wow-duration="1500ms"
                                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                                                <a href="{{ route('general-medicine')}}">
                                                    <img
                                                        src="{{ asset('/resources/assets/images/icons/general-medicine.png')}}" />
                                                </a>
                                                <h3>
                                                    <a href="{{ route('general-medicine')}}">General Medicine</a>
                                                </h3>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="service-block-six col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                            <a href="{{ route('neonatology')}}"></a>
                                            <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms"
                                                data-wow-duration="1500ms"
                                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                                                <a href="{{ route('neonatology')}}">
                                                    <img
                                                        src="{{ asset('/resources/assets/images/icons/neonatology.png')}}" />
                                                </a>
                                                <h3>
                                                    <a href="{{ route('neonatology')}}">Neonatology</a>
                                                </h3>
                                            </div>
                                        </div>

                                        <div class="service-block-six col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                            <a href="{{ route('nephrology')}}"></a>
                                            <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms"
                                                data-wow-duration="1500ms"
                                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                                                <a href="{{ route('nephrology')}}">
                                                    <img
                                                        src="{{ asset('/resources/assets/images/icons/nephrology.png')}}" />
                                                </a>
                                                <h3>
                                                    <a href="{{ route('nephrology')}}">Nephrology</a>
                                                </h3>
                                            </div>
                                        </div>


                                        <div class="service-block-six col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                            <a href="{{ route('neurology')}}"></a>
                                            <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms"
                                                data-wow-duration="1500ms"
                                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                                                <a href="{{ route('neurology')}}">
                                                    <img
                                                        src="{{ asset('/resources/assets/images/icons/neurology.png')}}" />
                                                </a>
                                                <h3>
                                                    <a href="{{ route('neurology')}}">Neurology</a>
                                                </h3>
                                            </div>
                                        </div>


                                        <div class="service-block-six col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                            <a href="{{ route('oncology')}}"></a>
                                            <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms"
                                                data-wow-duration="1500ms"
                                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                                                <a href="{{ route('oncology')}}">
                                                    <img
                                                        src="{{ asset('/resources/assets/images/icons/oncology.png')}}" />
                                                </a>
                                                <h3>
                                                    <a href="{{ route('oncology')}}">Oncology</a>
                                                </h3>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="service-block-six col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                            <a href="{{ route('paediatrics')}}"></a>
                                            <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms"
                                                data-wow-duration="1500ms"
                                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                                                <a href="{{ route('paediatrics')}}">
                                                    <img
                                                        src="{{ asset('/resources/assets/images/icons/paediatrics.png')}}" />
                                                </a>
                                                <h3>
                                                    <a href="{{ route('paediatrics')}}">Paediatrics</a>
                                                </h3>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>
                    </div> <!-- END TAB-2 CONTENT -->


                    <!-- TAB-3 CONTENT -->
                    <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab3-list">
                        <div class="row d-flex align-items-center">


                            <!-- TAB-3 IMAGE -->
                            <div class="col-lg-5">
                                <div class="tab-img">
                                    <img style="width: 100%;" class="img-fluid"
                                        src="{{ asset('/resources/assets/images/department/round-the-clock.jpg')}}"
                                        alt="tab-image">
                                </div>
                            </div>


                            <!-- TAB-3 TEXT -->
                            <div class="col-lg-7">
                                <div class="txt-block pc-30">

                                    <div class="row">
                                        <div class="service-block-six col-xs-6 col-sm-6 col-md-6 col-lg-4">
                                            <a href="{{ route('admission')}}"></a>
                                            <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms"
                                                data-wow-duration="1500ms"
                                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                                                <a href="{{ route('admission')}}">
                                                    <img
                                                        src="{{ asset('/resources/assets/images/icons/admission.png')}}" />
                                                </a>
                                                <h3>
                                                    <a href="{{ route('admission')}}">Admission</a>
                                                </h3>
                                            </div>
                                        </div>

                                        <div class="service-block-six col-xs-6 col-sm-6 col-md-6 col-lg-4">
                                            <a href="{{ route('ecg-xray')}}"></a>
                                            <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms"
                                                data-wow-duration="1500ms"
                                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                                                <a href="{{ route('ecg-xray')}}">
                                                    <img src="{{ asset('/resources/assets/images/icons/ecg.png')}}" />
                                                </a>
                                                <h3>
                                                    <a href="{{ route('ecg-xray')}}">ECG & X-Ray</a>
                                                </h3>
                                            </div>
                                        </div>


                                        <div class="service-block-six col-xs-6 col-sm-6 col-md-6 col-lg-4">
                                            <a href="{{ route('emergency')}}"></a>
                                            <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms"
                                                data-wow-duration="1500ms"
                                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                                                <a href="{{ route('emergency')}}">
                                                    <img
                                                        src="{{ asset('/resources/assets/images/icons/emergency.png')}}" />
                                                </a>
                                                <h3>
                                                    <a href="{{ route('emergency')}}">Emergency & Casualty</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="service-block-six col-xs-6 col-sm-6 col-md-6 col-lg-4">
                                            <a href="{{ route('path-lab')}}"></a>
                                            <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms"
                                                data-wow-duration="1500ms"
                                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                                                <a href="{{ route('path-lab')}}">
                                                    <img
                                                        src="{{ asset('/resources/assets/images/icons/path-lab.png')}}" />
                                                </a>
                                                <h3>
                                                    <a href="{{ route('path-lab')}}">Path Lab</a>
                                                </h3>
                                            </div>
                                        </div>

                                        <div class="service-block-six col-xs-6 col-sm-6 col-md-6 col-lg-4">
                                            <a href="{{ route('pharmacy')}}"></a>
                                            <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms"
                                                data-wow-duration="1500ms"
                                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                                                <a href="{{ route('pharmacy')}}">
                                                    <img
                                                        src="{{ asset('/resources/assets/images/icons/pharmacy.png')}}" />
                                                </a>
                                                <h3>
                                                    <a href="{{ route('pharmacy')}}">Pharmacy</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div> <!-- END TAB-3 TEXT -->


                        </div>
                    </div> <!-- END TAB-3 CONTENT -->


                    <!-- TAB-4 CONTENT -->
                    <!-- <div class="tab-pane fade" id="tab-4" role="tabpanel" aria-labelledby="tab4-list">
                        <div class="row d-flex align-items-center">

                            <div class="col-lg-5">
                                <div class="tab-img">
                                    <img style="width: 100%;" class="img-fluid"
                                        src="{{ asset('/resources/assets/images/department/health.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="txt-block pc-30">

                                    <div class="row">
                                        <div class="service-block-six col-xs-6 col-sm-6 col-md-6 col-lg-4">
                                            <a href="{{ route('health-tips')}}"></a>
                                            <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms"
                                                data-wow-duration="1500ms"
                                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                                                <a href="{{ route('health-tips')}}">
                                                    <img
                                                        src="{{ asset('/resources/assets/images/icons/health-tips.png')}}" />
                                                </a>
                                                <h3>
                                                    <a href="{{ route('health-tips')}}">Health Tips</a>
                                                </h3>
                                            </div>
                                        </div>

                                        <div class="service-block-six col-xs-6 col-sm-6 col-md-6 col-lg-4">
                                            <a href="{{ route('health-education')}}"></a>
                                            <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms"
                                                data-wow-duration="1500ms"
                                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                                                <a href="{{ route('health-education')}}">
                                                    <img
                                                        src="{{ asset('/resources/assets/images/icons/heath-education.png')}}" />
                                                </a>
                                                <h3>
                                                    <a href="{{ route('health-education')}}">Health Education</a>
                                                </h3>
                                            </div>
                                        </div>


                                        <div class="service-block-six col-xs-6 col-sm-6 col-md-6 col-lg-4">
                                            <a href="{{ route('tests-procedures')}}"></a>
                                            <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms"
                                                data-wow-duration="1500ms"
                                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                                                <a href="{{ route('tests-procedures')}}">
                                                    <img src="{{ asset('/resources/assets/images/icons/tests.png')}}" />
                                                </a>
                                                <h3>
                                                    <a href="{{ route('tests-procedures')}}">Tests & Procedures</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div> -->



                    <div class="tab-pane fade" id="tab-5" role="tabpanel" aria-labelledby="tab5-list">
                        <div class="row d-flex align-items-center">


                            <!-- TAB-4 IMAGE -->
                            <div class="col-lg-5">
                                <div class="tab-img">
                                    <img style="width: 100%;" class="img-fluid"
                                        src="{{ asset('/resources/assets/images/department/surgery.jpg')}}" alt="">
                                </div>
                            </div>


                            <!-- TAB-4 TEXT -->
                            <div class="col-lg-7">
                                <div class="txt-block pc-30">

                                    <div class="row">
                                        <div class="service-block-six col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                            <a href="{{ route('cardiovascular-thoracic-surgery')}}"></a>
                                            <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms"
                                                data-wow-duration="1500ms"
                                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                                                <a href="{{ route('cardiovascular-thoracic-surgery')}}">
                                                    <img
                                                        src="{{ asset('/resources/assets/images/icons/cardiovascular.png')}}" />
                                                </a>
                                                <h3>
                                                    <a href="{{ route('cardiovascular-thoracic-surgery')}}">Cardiovascular
                                                        & Thoracic Surgery</a>
                                                </h3>
                                            </div>
                                        </div>

                                        <div class="service-block-six col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                            <a href="{{ route('ent')}}"></a>
                                            <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms"
                                                data-wow-duration="1500ms"
                                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                                                <a href="{{ route('ent')}}">
                                                    <img src="{{ asset('/resources/assets/images/icons/ent.png')}}" />
                                                </a>
                                                <h3>
                                                    <a href="{{ route('ent')}}">Ear/Nose/Throat</a>
                                                </h3>
                                            </div>
                                        </div>


                                        <div class="service-block-six col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                            <a href="{{ route('general-surgery')}}"></a>
                                            <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms"
                                                data-wow-duration="1500ms"
                                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                                                <a href="{{ route('general-surgery')}}">
                                                    <img
                                                        src="{{ asset('/resources/assets/images/icons/general-surgery.png')}}" />
                                                </a>
                                                <h3>
                                                    <a href="{{ route('general-surgery')}}">General Surgery</a>
                                                </h3>
                                            </div>
                                        </div>

                                        <div class="service-block-six col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                            <a href="{{ route('kidney-transplant')}}"></a>
                                            <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms"
                                                data-wow-duration="1500ms"
                                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                                                <a href="{{ route('kidney-transplant')}}">
                                                    <img
                                                        src="{{ asset('/resources/assets/images/icons/kidney-transplant.png')}}" />
                                                </a>
                                                <h3>
                                                    <a href="{{ route('kidney-transplant')}}">Kidney Transplant</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="service-block-six col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                            <a href="{{ route('gastrointestinal-surgery')}}"></a>
                                            <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms"
                                                data-wow-duration="1500ms"
                                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                                                <a href="{{ route('gastrointestinal-surgery')}}">
                                                    <img
                                                        src="{{ asset('/resources/assets/images/icons/gastrointestinal-surgery.png')}}" />
                                                </a>
                                                <h3>
                                                    <a href="{{ route('gastrointestinal-surgery')}}">Gastrointestinal
                                                        Surgery</a>
                                                </h3>
                                            </div>
                                        </div>

                                        <div class="service-block-six col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                            <a href="{{ route('neurosurgery')}}"></a>
                                            <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms"
                                                data-wow-duration="1500ms"
                                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                                                <a href="{{ route('neurosurgery')}}">
                                                    <img
                                                        src="{{ asset('/resources/assets/images/icons/neurosurgery.png')}}" />
                                                </a>
                                                <h3>
                                                    <a href="{{ route('neurosurgery')}}">Neurosurgery</a>
                                                </h3>
                                            </div>
                                        </div>


                                        <div class="service-block-six col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                            <a href="{{ route('obstetrics')}}"></a>
                                            <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms"
                                                data-wow-duration="1500ms"
                                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                                                <a href="{{ route('obstetrics')}}">
                                                    <img
                                                        src="{{ asset('/resources/assets/images/icons/obstetrics.png')}}" />
                                                </a>
                                                <h3>
                                                    <a href="{{ route('obstetrics')}}">Obstetrics & Gynaecology</a>
                                                </h3>
                                            </div>
                                        </div>

                                        <div class="service-block-six col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                            <a href="{{ route('ophthalmology')}}"></a>
                                            <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms"
                                                data-wow-duration="1500ms"
                                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                                                <a href="{{ route('ophthalmology')}}">
                                                    <img
                                                        src="{{ asset('/resources/assets/images/icons/ophthalmology.png')}}" />
                                                </a>
                                                <h3>
                                                    <a href="{{ route('ophthalmology')}}">Ophthalmology</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="service-block-six col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                            <a href="{{ route('orthopaedics')}}"></a>
                                            <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms"
                                                data-wow-duration="1500ms"
                                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                                                <a href="{{ route('orthopaedics')}}">
                                                    <img
                                                        src="{{ asset('/resources/assets/images/icons/orthopaedics.png')}}" />
                                                </a>
                                                <h3>
                                                    <a href="{{ route('orthopaedics')}}">Orthopaedics</a>
                                                </h3>
                                            </div>
                                        </div>

                                        <div class="service-block-six col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                            <a href="{{ route('plastic-surgery')}}"></a>
                                            <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms"
                                                data-wow-duration="1500ms"
                                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                                                <a href="{{ route('plastic-surgery')}}">
                                                    <img
                                                        src="{{ asset('/resources/assets/images/icons/plastic-surgery.png')}}" />
                                                </a>
                                                <h3>
                                                    <a href="{{ route('plastic-surgery')}}">Plastic Surgery</a>
                                                </h3>
                                            </div>
                                        </div>


                                        <div class="service-block-six col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                            <a href="{{ route('surgical-oncology')}}"></a>
                                            <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms"
                                                data-wow-duration="1500ms"
                                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                                                <a href="{{ route('surgical-oncology')}}">
                                                    <img
                                                        src="{{ asset('/resources/assets/images/icons/surgical-oncology.png')}}" />
                                                </a>
                                                <h3>
                                                    <a href="{{ route('surgical-oncology')}}">Surgical Oncology</a>
                                                </h3>
                                            </div>
                                        </div>

                                        <div class="service-block-six col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                            <a href="{{ route('urology')}}"></a>
                                            <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms"
                                                data-wow-duration="1500ms"
                                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                                                <a href="{{ route('urology')}}">
                                                    <img
                                                        src="{{ asset('/resources/assets/images/icons/urology.png')}}" />
                                                </a>
                                                <h3>
                                                    <a href="{{ route('urology')}}">Urology</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div><!-- END TAB-4 TEXT -->


                        </div>
                    </div>


                    <div class="tab-pane fade" id="tab-6" role="tabpanel" aria-labelledby="tab6-list">
                        <div class="row d-flex align-items-center">


                            <!-- TAB-4 IMAGE -->
                            <div class="col-lg-5">
                                <div class="tab-img">
                                    <img style="width: 100%;" class="img-fluid"
                                        src="{{ asset('/resources/assets/images/department/therapeutic.jpg')}}" alt="">
                                </div>
                            </div>


                            <!-- TAB-4 TEXT -->
                            <div class="col-lg-7">
                                <div class="txt-block pc-30">

                                    <div class="row">
                                        <div class="service-block-six col-xs-6 col-sm-6 col-md-6 col-lg-4">
                                            <a href="{{ route('dialysis')}}"></a>
                                            <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms"
                                                data-wow-duration="1500ms"
                                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                                                <a href="{{ route('dialysis')}}">
                                                    <img
                                                        src="{{ asset('/resources/assets/images/icons/dialysis.png')}}" />
                                                </a>
                                                <h3>
                                                    <a href="{{ route('dialysis')}}">Dialysis Unit</a>
                                                </h3>
                                            </div>
                                        </div>

                                        <div class="service-block-six col-xs-6 col-sm-6 col-md-6 col-lg-4">
                                            <a href="{{ route('dietician')}}"></a>
                                            <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms"
                                                data-wow-duration="1500ms"
                                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                                                <a href="{{ route('dietician')}}">
                                                    <img
                                                        src="{{ asset('/resources/assets/images/icons/nutrition.png')}}" />
                                                </a>
                                                <h3>
                                                    <a href="{{ route('dietician')}}">Dietician & Nutrition</a>
                                                </h3>
                                            </div>
                                        </div>


                                        <div class="service-block-six col-xs-6 col-sm-6 col-md-6 col-lg-4">
                                            <a href="{{ route('doctor-scorecard')}}"></a>
                                            <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms"
                                                data-wow-duration="1500ms"
                                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                                                <a href="{{ route('doctor-scorecard')}}">
                                                    <img
                                                        src="{{ asset('/resources/assets/images/icons/scorecard.png')}}" />
                                                </a>
                                                <h3>
                                                    <a href="{{ route('doctor-scorecard')}}">Doctors Scorecard</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="service-block-six col-xs-6 col-sm-6 col-md-6 col-lg-4">
                                            <a href="{{ route('lithotripsy')}}"></a>
                                            <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms"
                                                data-wow-duration="1500ms"
                                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                                                <a href="{{ route('lithotripsy')}}">
                                                    <img
                                                        src="{{ asset('/resources/assets/images/icons/lithotripsy.png')}}" />
                                                </a>
                                                <h3>
                                                    <a href="{{ route('lithotripsy')}}">Lithotripsy</a>
                                                </h3>
                                            </div>
                                        </div>

                                        <div class="service-block-six col-xs-6 col-sm-6 col-md-6 col-lg-4">
                                            <a href="{{ route('physiotherapy')}}"></a>
                                            <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms"
                                                data-wow-duration="1500ms"
                                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                                                <a href="{{ route('physiotherapy')}}">
                                                    <img
                                                        src="{{ asset('/resources/assets/images/icons/physiotherapy.png')}}" />
                                                </a>
                                                <h3>
                                                    <a href="{{ route('physiotherapy')}}">Physiotherapy</a>
                                                </h3>
                                            </div>
                                        </div>


                                        <div class="service-block-six col-xs-6 col-sm-6 col-md-6 col-lg-4">
                                            <a href="{{ route('ehs')}}"></a>
                                            <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms"
                                                data-wow-duration="1500ms"
                                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                                                <a href="{{ route('ehs')}}">
                                                    <img
                                                        src="{{ asset('/resources/assets/images/icons/preventive-health-care.png')}}" />
                                                </a>
                                                <h3>
                                                    <a href="{{ route('ehs')}}">Preventive Health Care</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div><!-- END TAB-4 TEXT -->


                        </div>
                    </div>

                </div> <!-- END TABS CONTENT -->


            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</section>


<div id="statistic-1" class="bg-scroll statistic-section division">
    <div class="container white-color">
        <div class="row">

            <!-- STATISTIC BLOCK #1 -->
            <div class="col-md-6 col-lg-3">
                <div class="statistic-block icon-lg wow fadeInUp" data-wow-delay="0.4s"
                    style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">

                    <!-- Icon  -->
                    <span class="flaticon-062-cardiogram-3"></span>

                    <!-- Text -->
                    <h5 class="statistic-number">4,<span class="count-element">700</span>+</h5>
                    <p class="txt-400">Happy Patients</p>

                </div>
            </div>


            <!-- STATISTIC BLOCK #2 -->
            <div class="col-md-6 col-lg-3">
                <div class="statistic-block icon-lg wow fadeInUp" data-wow-delay="0.6s"
                    style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">

                    <!-- Icon  -->
                    <span class="flaticon-141-clinic-history"></span>

                    <!-- Text -->
                    <h5 class="statistic-number"><span class="count-element">100</span>%</h5>
                    <p class="txt-400">Efficient Treatment</p>

                </div>
            </div>


            <!-- STATISTIC BLOCK #3 -->
            <div class="col-md-6 col-lg-3">
                <div class="statistic-block icon-lg wow fadeInUp" data-wow-delay="0.8s"
                    style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">

                    <!-- Icon  -->
                    <span class="flaticon-065-hospital-bed"></span>

                    <!-- Text -->
                    <h5 class="statistic-number"><span class="count-element">270</span>+</h5>
                    <p class="txt-400">Hospital Beds</p>

                </div>
            </div>


            <!-- STATISTIC BLOCK #4 -->
            <div class="col-md-6 col-lg-3">
                <div class="statistic-block icon-lg wow fadeInUp" data-wow-delay="1s"
                    style="visibility: visible; animation-delay: 1s; animation-name: fadeInUp;">

                    <!-- Icon  -->
                    <span class="flaticon-137-doctor"></span>

                    <!-- Text -->
                    <h5 class="statistic-number"><span class="count-element">37000</span>+</h5>
                    <p class="txt-400">Successfull Surgeries</p>

                </div>
            </div>


        </div> <!-- End row -->
    </div> <!-- End container -->
</div>

<section id="services-7" class="bg-lightgrey wide-70 servicess-section division">
    <div class="container-fluid">


        <!-- SECTION TITLE -->
        <div class="row">
            <div class="col-lg-10 offset-lg-1 section-title">

                <!-- Title 	-->
                <h3 class="h3-md steelblue-color">Facilities We Provide</h3>

            </div>
        </div>
        <div class="row">


            <!-- SERVICE BOXES -->
            <div class="col-lg-8">
                <div class="row">


                    <!-- SERVICE BOX #1 -->
                    <div class="col-md-6">
                        <div class="sbox-7 icon-xs wow fadeInUp" data-wow-delay="0.4s"
                            style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                            <a href="#">

                                <!-- Icon -->
                                <span class="flaticon-137-doctor blue-color"></span>

                                <!-- Text -->
                                <div class="sbox-7-txt">

                                    <!-- Title -->
                                    <h5 class="h5-sm steelblue-color">Top Level Doctors</h5>

                                    <!-- Text -->
                                    <p class="p-sm">Top-level doctors at Bombay Hospital provide exceptional
                                        medical care with expertise in various specialties. Trust us to deliver
                                        personalized treatment and compassionate care for all your healthcare
                                        needs.
                                    </p>

                                </div>

                            </a>
                        </div>
                    </div> <!-- END SERVICE BOX #1 -->


                    <!-- SERVICE BOX #2 -->
                    <div class="col-md-6">
                        <div class="sbox-7 icon-xs wow fadeInUp" data-wow-delay="0.6s"
                            style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                            <a href="#">

                                <!-- Icon -->
                                <span class="flaticon-076-microscope blue-color"></span>

                                <!-- Text -->
                                <div class="sbox-7-txt">

                                    <!-- Title -->
                                    <h5 class="h5-sm steelblue-color">Modern Equipment</h5>

                                    <!-- Text -->
                                    <p class="p-sm">Bombay Hospital boasts modern state-of-the-art equipment,
                                        ensuring the highest quality medical care. Our cutting-edge technology
                                        enables accurate diagnoses and effective treatment for patients.
                                    </p>

                                </div>

                            </a>
                        </div>
                    </div> <!-- END SERVICE BOX #2 -->


                    <!-- SERVICE BOX #3 -->
                    <div class="col-md-6">
                        <div class="sbox-7 icon-xs wow fadeInUp" data-wow-delay="0.8s"
                            style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">
                            <a href="#">

                                <!-- Icon -->
                                <span class="flaticon-065-hospital-bed blue-color"></span>

                                <!-- Text -->
                                <div class="sbox-7-txt">

                                    <!-- Title -->
                                    <h5 class="h5-sm steelblue-color">Patient Care</h5>

                                    <!-- Text -->
                                    <p class="p-sm">At Bombay Hospital, patient care is our top priority. Our
                                        compassionate and experienced staff provides personalized attention to
                                        each patient, ensuring their comfort and well-being throughout their
                                        stay.
                                    </p>

                                </div>

                            </a>
                        </div>
                    </div> <!-- END SERVICE BOX #3-->


                    <!-- SERVICE BOX #4 -->
                    <div class="col-md-6">
                        <div class="sbox-7 icon-xs wow fadeInUp" data-wow-delay="1s"
                            style="visibility: visible; animation-delay: 1s; animation-name: fadeInUp;">
                            <a href="#">

                                <!-- Icon -->
                                <span class="flaticon-062-cardiogram-3 blue-color"></span>

                                <!-- Text -->
                                <div class="sbox-7-txt">

                                    <!-- Title -->
                                    <h5 class="h5-sm steelblue-color">Quality Health Care</h5>

                                    <!-- Text -->
                                    <p class="p-sm">Bombay Hospital is dedicated to providing the highest
                                        quality healthcare services to our patients. Our expert medical
                                        professionals and advanced technology ensure precise diagnoses and
                                        effective treatments for optimal patient outcomes.
                                    </p>

                                </div>

                            </a>
                        </div>
                    </div> <!-- END SERVICE BOX #4 -->


                    <!-- SERVICE BOX #5 -->
                    <div class="col-md-6">
                        <div class="sbox-7 icon-xs wow fadeInUp" data-wow-delay="1.2s"
                            style="visibility: visible; animation-delay: 1.2s; animation-name: fadeInUp;">
                            <a href="#">

                                <!-- Icon -->
                                <span class="flaticon-141-clinic-history blue-color"></span>

                                <!-- Text -->
                                <div class="sbox-7-txt">

                                    <!-- Title -->
                                    <h5 class="h5-sm steelblue-color">Medical Counseling</h5>

                                    <!-- Text -->
                                    <p class="p-sm">At Bombay Hospital, we offer medical counseling services to
                                        guide patients and their families through diagnosis, treatment, and
                                        recovery. Our expert counselors provide support and guidance to promote
                                        holistic healing.
                                    </p>

                                </div>

                            </a>
                        </div>
                    </div> <!-- END SERVICE BOX #5 -->


                    <!-- SERVICE BOX #6 -->
                    <div class="col-md-6">
                        <div class="sbox-7 icon-xs wow fadeInUp" data-wow-delay="1.4s"
                            style="visibility: visible; animation-delay: 1.4s; animation-name: fadeInUp;">
                            <a href="#">

                                <!-- Icon -->
                                <span class="flaticon-008-ambulance-6 blue-color"></span>

                                <!-- Text -->
                                <div class="sbox-7-txt">

                                    <!-- Title -->
                                    <h5 class="h5-sm steelblue-color">Emergency Help</h5>

                                    <!-- Text -->
                                    <p class="p-sm">Bombay Hospital offers round-the-clock emergency medical
                                        services to provide urgent care to patients in need. Our highly trained
                                        medical professionals and advanced equipment ensure prompt and effective
                                        emergency assistance.
                                    </p>

                                </div>

                            </a>
                        </div>
                    </div> <!-- END SERVICE BOX #6 -->


                </div>
            </div> <!-- END SERVICE BOXES -->


            <!-- INFO TABLE -->
            <div class="col-lg-4"
                style="background-image: url({{ asset('/resources/assets/images/facilities.jpg')}});background-repeat: no-repeat; background-position: right; background-size: cover;">

            </div> <!-- END INFO TABLE -->


        </div> <!-- End row -->
    </div> <!-- End container -->
</section>

<section id="banner-7" class="bg-fixed banner-section division">
    <div class="container-fluid white-color" style="width: 93%;">
        <div class="row d-flex align-items-center">
            <div class="col-md-4 col-lg-4 col-xl-6">
            </div>
            <!-- BANNER TEXT -->
            <div class="col-md-8 col-lg-8 col-xl-6">
                <div class="banner-txt wow fadeInUp" data-wow-delay="0.4s"
                    style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">

                    <!-- Title  -->
                    <h2 class="h2-xs">Why Choose Us?</h2>

                    <div class="row">

                        <div class="col-md-6 why-box">
                            <h5 class="h5-sm steelblue-color"><i class='fas fa-angle-double-right'></i> All super-specialists doctors available under one
                                roof</h5>
                        </div>
                        <div class="col-md-6 why-box">
                            <h5 class="h5-sm steelblue-color"><i class='fas fa-angle-double-right'></i> Most Senior and Experienced Doctors</h5>
                        </div>
                        <div class="col-md-6 why-box">
                            <h5 class="h5-sm steelblue-color"><i class='fas fa-angle-double-right'></i> Specialized Doctors for specific Problem</h5>
                        </div>
                        <div class="col-md-6 why-box">
                            <h5 class="h5-sm steelblue-color"><i class='fas fa-angle-double-right'></i> 24/7 ICU Backup for critical Patients</h5>
                        </div>
                        <div class="col-md-6 why-box">
                            <h5 class="h5-sm steelblue-color"><i class='fas fa-angle-double-right'></i> Ultra-modern class 100 modular laminar operation
                                Theaters</h5>
                        </div>
                        <div class="col-md-6 why-box">
                            <h5 class="h5-sm steelblue-color"><i class='fas fa-angle-double-right'></i> All support Specialities labs, Radiology,
                                including CT SCAN, Pharmacy, etc available.</h5>
                        </div>

                    </div>
                </div>
            </div> <!-- END BANNER TEXT -->


        </div> <!-- End row -->
    </div> <!-- End container -->
</section>

<section id="tabs-1" class="male-female wide-70 tabs-section division" style="background: #f3f9ff;">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 section-title">
                <!-- Title 	-->
                <h2 class="steelblue-color">Choose Your Required Speciality For Health Treatment</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- TABS NAVIGATION -->
                <div id="tabs-nav" class="list-group text-center">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">

                        <!-- TAB-1 LINK -->
                        <li class="nav-item icon-xs">
                            <a class="nav-link active" id="male-list" data-toggle="pill" href="#male" role="tab"
                                aria-controls="male" aria-selected="true"> Male
                            </a>
                        </li>

                        <!-- TAB-2 LINK -->
                        <li class="nav-item icon-xs">
                            <a class="nav-link" id="female-list" data-toggle="pill" href="#female" role="tab"
                                aria-controls="female" aria-selected="false"> Female
                            </a>
                        </li>
                    </ul>

                </div> <!-- END TABS NAVIGATION -->


                <!-- TABS CONTENT -->
                <div class="tab-content" id="pills-tabContent">
                    <!-- TAB-1 CONTENT -->
                    <div class="tab-pane fade show active male-female-box" id="male" role="tabpanel"
                        aria-labelledby="male-list">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-12 tabs_item">
                                <div class="products-details-tab-content male-body-contents">
                                    <img class="body-struct"
                                        src="{{ asset('/resources/assets/images/desk-man-body.png')}}"
                                        alt="desk-man-body" class="img-fluid">
                                    <a href="{{ route('ophthalmology')}}" class="man-eye">Eye</a>
                                    <a href="{{ route('ent')}}" class="man-ear">Ear</a>
                                    <a href="#" class="man-teeth">Teeth</a>
                                    <a href="{{ route('ent')}}" class="man-throat">Throat</a>
                                    <a href="{{ route('gastroentrology')}}" class="man-liver">Liver</a>
                                    <a href="{{ route('orthopaedics')}}" class="man-arm">Arm</a>
                                    <a href="{{ route('nephrology')}}" class="man-kidney">Kidneys</a>
                                    <a href="{{ route('orthopaedics')}}" class="man-lback">Lower Back</a>
                                    <a href="#" class="man-thigh">Thigh</a>
                                    <a href="{{ route('orthopaedics')}}" class="man-foot">Foot</a>
                                    <a href="{{ route('orthopaedics')}}" class="man-ankle">Ankle</a>
                                    <a href="{{ route('orthopaedics')}}" class="man-knee">Knee</a>
                                    <a href="{{ route('orthopaedics')}}" class="man-hip">Hip</a>
                                    <a href="{{ route('gastroentrology')}}" class="man-stomach">Stomach</a>
                                    <a href="{{ route('orthopaedics')}}" class="man-spine">Spine</a>
                                    <a href="{{ route('orthopaedics')}}" class="man-elbow">Elbow</a>
                                    <a href="{{ route('chest-medicine')}}" class="man-lungs">Lungs</a>
                                    <a href="{{ route('cardiology')}}" class="man-heart">Heart</a>
                                    <a href="{{ route('ent')}}" class="man-nose">Nose</a>
                                    <a href="{{ route('neurology')}}" class="man-brain">Brain</a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- END TAB-1 CONTENT -->

                    <!-- TAB-2 CONTENT -->
                    <div class="tab-pane fade male-female-box" id="female" role="tabpanel"
                        aria-labelledby="female-list">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-12 tabs_item">
                                <div class="products-details-tab-content male-body-contents">
                                    <img class="body-struct"
                                        src="{{ asset('/resources/assets/images/desk-women-body.png')}}"
                                        alt="desk-women-body.png" class="img-fluid">
                                    <a href="{{ route('ophthalmology')}}" class="woman-eye">Eye</a>
                                    <a href="{{ route('ent')}}" class="woman-ear">Ear</a>
                                    <a href="#" class="woman-teeth">Teeth</a>
                                    <a href="{{ route('ent')}}" class="woman-throat">Throat</a>
                                    <a href="{{ route('gastroentrology')}}" class="woman-liver">Liver</a>
                                    <a href="{{ route('orthopaedics')}}" class="woman-arm">Arm</a>
                                    <a href="{{ route('nephrology')}}" class="woman-kidney">Kidneys</a>
                                    <a href="{{ route('orthopaedics')}}" class="woman-lback">Lower Back</a>
                                    <a href="{{ route('obstetrics')}}" class="woman-rproduct">Reproductive System</a>
                                    <a href="#" class="woman-thigh">Thigh</a>
                                    <a href="{{ route('orthopaedics')}}" class="woman-knee">Knee</a>
                                    <a href="{{ route('orthopaedics')}}" class="woman-foot">Foot</a>
                                    <a href="{{ route('orthopaedics')}}" class="woman-ankle">Ankle</a>
                                    <a href="{{ route('orthopaedics')}}" class="woman-calf">Calf</a>
                                    <a href="{{ route('orthopaedics')}}" class="woman-hip">Hip</a>
                                    <a href="{{ route('obstetrics')}}" class="woman-vagina">Vagina</a>
                                    <a href="{{ route('gastroentrology')}}" class="woman-stomach">Stomach</a>
                                    <a href="{{ route('orthopaedics')}}" class="woman-elbow">Elbow</a>
                                    <a href="{{ route('chest-medicine')}}" class="woman-lungs">Lungs</a>
                                    <a href="{{ route('cardiology')}}" class="woman-heart">Heart</a>
                                    <a href="{{ route('ent')}}" class="woman-nose">Nose</a>
                                    <a href="{{ route('neurology')}}" class="woman-brain">Brain</a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- END TAB-2 CONTENT -->

                </div> <!-- END TABS CONTENT -->


            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</section>

<!-- <div class="covid-sec">
            <div class="choose-bg">
                <div class="container">
                    <div class="section-top-title">
                        <div class="heading-top"><a href="#" style="color: #fff;">Covid-19</a></div>

                    </div>
                    <h2 class="section-title text-center">Covid-19, COLD &amp; FLU Hospital</h2>
                    <p class="text-center">Get all the information you need on COVID-19, Cold &amp; Flu assessment in
                        Bombay Hospita Indore</p>
                </div>
            </div>
            <div class="container">
                <div class="col-md-12">
                    <div class="row covid-img d-flex justify-content-center text-center">
                        <div class="col-lg-12 col-md-12 col-12">
                            <img src="images/covid--1.png" alt="covid" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

<!-- <section id="doctors-1" class="wide-40 doctors-section division">
    <div class="container-fluid" style="width: 90%;">


        <div class="row">
            <div class="col-lg-10 offset-lg-1 section-title">

                <h3 class="h3-md steelblue-color">Our Specialists</h3>

                
                <p>Our Bombay Hospital Indore utilizes state-of-the-art technology and employs a team of true
                    experts.
                </p>

            </div>
        </div> 


        <div class="row">


           
            <div class="col-md-6 col-lg-3">
                <div class="doctor-1">

                    
                    <div class="hover-overlay text-center">

                       
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-abhinav-anand.jpg')}}"
                            alt="doctor-foto">
                        <div class="item-overlay"></div>

                       
                        <div class="profile-link">
                            <a class="btn btn-sm btn-tra-white black-hover" href="{{ route('dr-abhinav-anand')}}"
                                title="">Know
                                More</a>
                        </div>

                    </div>

                   
                    <div class="doctor-meta">
                        <h5 class="h5-sm steelblue-color">Dr. Abhinav Anand</h5>
                        <span class="blue-color">Gastroenterology</span>
                    </div>

                </div>
            </div>

          
            <div class="col-md-6 col-lg-3">
                <div class="doctor-1">

                    <div class="hover-overlay text-center">

                        <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-ankit-gupta.jpg')}}"
                            alt="doctor-foto">
                        <div class="item-overlay"></div>

                        <div class="profile-link">
                            <a class="btn btn-sm btn-tra-white black-hover" href="{{ route('dr-ankit-gupta')}}"
                                title="">Know
                                More</a>
                        </div>

                    </div>

                    <div class="doctor-meta">
                        <h5 class="h5-sm steelblue-color">Dr. Ankit Gupta</h5>
                        <span class="blue-color">NeuroSurgery</span>
                    </div>

                </div>
            </div> 

            <div class="col-md-6 col-lg-3">
                <div class="doctor-1">

                    <div class="hover-overlay text-center">

                        <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-avinash-jain.jpg')}}"
                            alt="doctor-foto">
                        <div class="item-overlay"></div>

                        <div class="profile-link">
                            <a class="btn btn-sm btn-tra-white black-hover" href="{{ route('dr-avinash-jain')}}"
                                title="">Know
                                More</a>
                        </div>

                    </div>

                    <div class="doctor-meta">
                        <h5 class="h5-sm steelblue-color">Dr. Avinash Jain</h5>
                        <span class="blue-color">Chest Disease</span>
                    </div>

                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="doctor-1">
                    <div class="hover-overlay text-center">

                        <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-devendra-patil.jpg')}}"
                            alt="doctor-foto">
                        <div class="item-overlay"></div>

                        <div class="profile-link">
                            <a class="btn btn-sm btn-tra-white black-hover" href="{{ route('dr-devendra-patil')}}"
                                title="">Know
                                More</a>
                        </div>

                    </div>

                    <div class="doctor-meta">
                        <h5 class="h5-sm steelblue-color">Dr. Devendra Patil</h5>
                        <span class="blue-color">Obstetrics & Gynaecology</span>
                    </div>

                </div>
            </div>


        </div> 


        <div class="row">
            <div class="col-md-12 text-center">
                <div class="all-doctors mb-40">
                    <a href="{{ route('panel-of-consultants')}}" class="btn btn-blue blue-hover">Meet All Doctors</a>
                </div>
            </div>
        </div>


    </div> 
</section> -->

<section id="services-2" class="services-section division">
    <div class="container">
        <div class="row">
            <!-- SERVICE BOX #1 -->
            <div class="col-sm-6 col-lg-3">
                <div class="sbox-2">
                    <a href="#">
                        <!-- Icon  -->
                        <div class="sbox-2-icon icon-xl">
                            <img src="{{ asset('/resources/assets/images/modern-hospital.png')}}" alt="">
                        </div>

                        <!-- Title -->
                        <h5 class="h5-sm sbox-2-title white-color">Modern Hospital</h5>
                    </a>
                </div>
            </div>
            <!-- SERVICE BOX #2 -->
            <div class="col-sm-6 col-lg-3">
                <div class="sbox-2">
                    <a href="#">
                        <!-- Icon  -->
                        <div class="sbox-2-icon icon-xl">
                            <img src="{{ asset('/resources/assets/images/expert-doctors.png')}}" alt="">
                        </div>

                        <!-- Title -->
                        <h5 class="h5-sm sbox-2-title white-color">Expert Doctors</h5>
                    </a>
                </div>
            </div>
            <!-- SERVICE BOX #3 -->
            <div class="col-sm-6 col-lg-3">
                <div class="sbox-2">
                    <a href="#">
                        <!-- Icon  -->
                        <div class="sbox-2-icon icon-xl">
                            <img src="{{ asset('/resources/assets/images/work-improvements.png')}}" alt="">
                        </div>

                        <!-- Title -->
                        <h5 class="h5-sm sbox-2-title white-color">Work Improvements</h5>
                    </a>
                </div>
            </div>
            <!-- SERVICE BOX #4 -->
            <div class="col-sm-6 col-lg-3">
                <div class="sbox-2">
                    <a href="#">
                        <!-- Icon  -->
                        <div class="sbox-2-icon icon-xl">
                            <img src="{{ asset('/resources/assets/images/restoring-confidence.png')}}" alt="">
                        </div>

                        <!-- Title -->
                        <h5 class="h5-sm sbox-2-title white-color">Restoring Confidence</h5>
                    </a>
                </div>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</section>



<div class="">
    <div class="container-fluid">
        <a href="{{ route('ehs')}}"><div class="row">
            <img class="img-fluid" srcset="{{ asset('/resources/assets/images/footer-banner.jpg')}}">
        </div></a>
    </div>
</div>

@stop

