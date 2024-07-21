@php($title = "Downloads | Bombay Hospital Indore")
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
                            <li class="breadcrumb-item active" aria-current="page">Downloads</li>
                        </ol>
                    </nav>

                    <!-- Title -->
                    <h4 class="h4-sm steelblue-color">Downloads</h4>

                </div>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</div> <!-- END BREADCRUMB -->

<section id="services-7" class="bg-lightgrey wide-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 section-title">
                <h3 class="h3-md steelblue-color">The Categories are as follows:</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="box-list">
                    <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                    <p>Panel of Consultants
                    </p>

                    <div class="box-list">
                        <div class="box-list-icon">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-genderless"></i></div>
                        <p><a href="{{ asset('/resources/assets/images/docs/BombayHospital.apk.zip')}}">Android APP</a>
                        </p>
                    </div>
                </div>

                <div class="box-list">
                    <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                    <p><a target="_blank"
                            href="{{ asset('/resources/assets/images/docs/patient-admission-form.pdf')}}">Patient
                            Admission Form</a>
                    </p>
                </div>

                <div class="box-list">
                    <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                    <p><a target="_blank"
                            href="{{ asset('/resources/assets/images/docs/BSc_Application_Form.pdf')}}">B.Sc. Admission
                            Form</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

@stop