@php($title = "Anatomy and Function of the Coronary Arteries | Bombay Hospital Indore")
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
                    <h4 class="h4-sm steelblue-color">Anatomy and Function of the Coronary Arteries</h4>

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
                        <p>Coronary arteries supply blood to the heart muscle. Like all other tissues in the body, the
                            heart muscle needs oxygen-rich blood to function, and oxygen-depleted blood must be carried
                            away. The coronary arteries run along the outside of the heart and have small branches that
                            dive into the heart muscle to bring it blood.</p>

                        <h5 class="h5-md steelblue-color">What are the different coronary arteries?</h5>
                        <p>The two main coronary arteries are the left main and right coronary arteries.</p>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p><b>Left main coronary artery (LMCA):</b> The left main coronary artery supplies blood to
                                the left side of the heart muscle (the left ventricle and left atrium). The left main
                                coronary divides into branches:</p>
                        </div>
                        <ul class="content--list">
                            <li>The left anterior descending artery, which branches off the left coronary artery and
                                supplies blood to the front of the left side of the heart.</li>
                            <li>The circumflex artery, which branches off the left coronary artery and encircles the
                                heart muscle. This artery supplies blood to the outer side and back of the heart.</li>
                        </ul>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p><b>Right coronary artery (RCA):</b> The right coronary artery supplies blood to the right
                                ventricle, the right atrium, and the SA (sinoatrial) and AV (atrioventricular) nodes,
                                which regular the heart rhythm. The right coronary artery divides into smaller branches,
                                including the right posterior descending artery and the acute marginal artery.</p>
                        </div>

                        <p>Additional smaller branches of the coronary arteries include: obtuse marginal (OM), septal
                            perforator (SP), and diagonals.</p>

                        <h5 class="h5-md steelblue-color">Why are the coronary arteries important?</h5>
                        <p>Since coronary arteries deliver blood to the heart muscle, any coronary artery disorder or
                            disease can have serious implications by reducing the flow of oxygen and nutrients to the
                            heart muscle. This can lead to a heart attack and possibly death. Atherosclerosis (a buildup
                            of plaque in the inner lining of an artery causing it to narrow or become blocked) is the
                            most common cause of heart disease.</p>
                    </div> <!-- END CONTENT BLOCK -->
                </div>
            </div> <!-- END DEPARTMENT DETAILS -->

        </div> <!-- End row -->
    </div> <!-- End container -->
</div>

@stop