@php($title = "Cardiac Diagnostic Tests | Bombay Hospital Indore")
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
                            <li class="breadcrumb-item"><a href="#">Health Education</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Cardiology
                            </li>
                        </ol>
                    </nav>

                    <!-- Title -->
                    <h4 class="h4-sm steelblue-color">Cardiac Diagnostic Tests</h4>

                </div>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</div> <!-- END BREADCRUMB -->

<div id="department-page" class="wide-60 department-page-section division">
    <div class="container">
        <div class="row">


            <!-- DEPARTMENT DETAILS -->
            <div class="col-lg-12">
                <div class="txt-block pr-30">

                    <!-- CONTENT BLOCK -->
                    <div class="content-block mb-40">
                        <!-- <h5 class="h5-md steelblue-color">The heart’s electrical system</h5> -->
                        <p>New and advanced diagnostic tests and tools are constantly being introduced to further
                            understand the complexity of disease, injury, and congenital (present at birth) or acquired
                            abnormalities. The following are just a few of the diagnostic tests that have been used or
                            are being used to further understand and identify cardiovascular disease. For more specific
                            information, consult your cardiologist or other health care provider:</p>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p><b>Electrocardiogram (ECG):</b> A test that records the electrical activity of the heart,
                                shows abnormal rhythms (arrhythmias), and can sometimes detect heart muscle damage.</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p><b>Stress test ( also called treadmill or exercise ECG):</b> A test that is given while a
                                person walks on a treadmill or pedals a stationary bike to monitor the heart during
                                exercise. Breathing and blood pressure rates are also monitored. A stress test may be
                                used to detect coronary artery disease, and/or to determine safe levels of exercise
                                following a heart attack or heart surgery.</p>
                        </div>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p><b>Echocardiogram (also known as echo):</b> A noninvasive test that uses sound waves to
                                evaluate the heart’s chambers and valves. The echo sound waves create an image on the
                                monitor as an ultrasound probe is passed over the heart.</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p><b>Holter monitor:</b> A small, portable, battery-powered ECG machine worn by a person to
                                record heartbeats on tape over a period of 24 to 48 hours during normal activities. At
                                the end of the time period, the monitor is returned to the doctor’s office so the tape
                                can be read and evaluated.</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p><b>Cardiac catheterization (also called coronary angiogram):</b> A test in which a small
                                catheter (hollow tube) is guided through the large artery in the upper leg, or sometimes
                                the wrist or arm, into the heart. Dye is given through the catheter, and moving X-ray
                                pictures are made as the dye travels through the heart. This comprehensive test shows:
                                narrowings in the arteries, heart chamber size, pumping ability of the heart, and
                                ability of the valves to open and close, as well as a measurement of the pressures
                                within the heart chambers and arteries.</p>
                        </div>
                    </div> <!-- END CONTENT BLOCK -->
                </div>
            </div> <!-- END DEPARTMENT DETAILS -->

        </div> <!-- End row -->
    </div> <!-- End container -->
</div>

@stop