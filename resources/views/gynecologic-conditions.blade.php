@php($title = "Gynecological Conditions | Bombay Hospital Indore")
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
                            <li class="breadcrumb-item active" aria-current="page">Gynecology and Obstetrics
                            </li>
                        </ol>
                    </nav>

                    <!-- Title -->
                    <h4 class="h4-sm steelblue-color">Gynecological Conditions</h4>

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
                        <p>Many different gynecological conditions require the care of a health care provider. Listed in
                            the directory below are some, for which we have provided a brief overview.</p>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Recognizing Gynecologic Problems - Pap Test</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Endometriosis</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Pelvic Pain</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Polycystic Ovarian Syndrome</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Sexually Transmitted Diseases - Safer Sex Guidelines</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Uterine Fibroids</p>
                        </div>
                    </div> <!-- END CONTENT BLOCK -->
                </div>
            </div> <!-- END DEPARTMENT DETAILS -->

        </div> <!-- End row -->
    </div> <!-- End container -->
</div>

@stop