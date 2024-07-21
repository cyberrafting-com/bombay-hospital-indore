@php($title = "Cardiac Conditions and Diseases | Bombay Hospital Indore")
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
                    <h4 class="h4-sm steelblue-color">Cardiac Conditions and Diseases</h4>

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
                        <!-- <h5 class="h5-md steelblue-color">What is cardiac rehabilitation?</h5> -->
                        <p>Many cardiac conditions require clinical care by a physician or other heart care
                            professional. Listed in the directory below are some of these conditions, for which we have
                            provided a brief overview.</p>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Angina pectoris</p>
                        </div>
                        <ul class="content--list">
                            <li>Arrhythmias</li>
                            <li>Pacemakers and Implantable Cardioverter Defibrillators (ICDs)</li>
                            <li>Overview of Pacemaker and Implantable Cardioverter Defibrillators (ICDs)</li>
                            <li>Living With a Pacemaker or Implantable Cardioverter Defibrillator (ICD)</li>
                            <li>Frequently Asked Questions About Pacemaker and Implantable Cardioverter</li>
                        </ul>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Defibrillators (ICDs)</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Atherosclerosis</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Atrial Fibrillation</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Cardiac Sarcoma</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Cardiomyopathy</p>
                        </div>
                        <ul class="content--list">
                            <li>Arrythmogenic Right Ventricular Dysplasia / Cardiomyopathy (ARVD/C)</li>
                        </ul>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Congenital Heart Defects</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Coronary Heart Disease</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Heart Attack (Myocardial Infarction)</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Heart Failure</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Heart Valve Diseases</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>High Blood Pressure / Hypertension</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Loeys-Dietz Syndrome</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Marfan Syndrome</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Mitral Valve Prolapse</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Murmurs</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Pericarditis</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Rheumatic Heart Disease</p>
                        </div>
                    </div> <!-- END CONTENT BLOCK -->
                </div>
            </div> <!-- END DEPARTMENT DETAILS -->

        </div> <!-- End row -->
    </div> <!-- End container -->
</div>

@stop