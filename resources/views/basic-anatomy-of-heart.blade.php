@php($title = "Basic Anatomy of the Heart | Bombay Hospital Indore")
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
                    <h4 class="h4-sm steelblue-color">Basic Anatomy of the Heart</h4>

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
                        <h5 class="h5-md steelblue-color">About the heart</h5>
                        <p>The heart is the hardest working muscle in the human body. Located almost in the center of
                            the chest, the adult human heart is about the size of a fist.</p>
                        <p>At an average rate of 80 times a minute, the heart beats about 115,000 times in one day or
                            about 42 million times in a year. In a 70-year lifetime, an average human heart will beat
                            more than 2.5 billion times. Even when a person is at rest, the heart continuously works
                            hard.</p>

                        <h5 class="h5-md steelblue-color">How the heart works?</h5>
                        <p>The cardiovascular system is made up of the heart and blood vessels. It’s responsible for
                            circulating blood throughout your body to supply the tissues with oxygen and nutrients.</p>
                        <p>The heart is the muscle that pumps blood filled with oxygen and nutrients through the blood
                            vessels to the body tissues. It is made up of:</p>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Four chambers (two atria and two ventricles) that receive blue (deoxygenated) blood from
                                the body and pump out red (oxygen-rich) blood back to to it:</p>
                        </div>
                        <ul class="content--list">
                            <li>The atria receive blood coming back to the heart.</li>
                            <li>The ventricles pump the blood out of the heart.</li>
                        </ul>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Blood vessels, which include a network of arteries and veins that carry blood throughout
                                the body:</p>
                        </div>
                        <ul class="content--list">
                            <li>Arteries transport blood from the heart to the body tissues.</li>
                            <li>Veins carry blood back to the heart.</li>
                        </ul>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Four valves to prevent backward flow of blood:</p>
                        </div>
                        <ul class="content--list">
                            <li>Each valve is designed to allow the forward flow of blood and prevent backward flow.
                            </li>
                        </ul>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>An electrical system that serves as a natural pacemaker and stimulates contraction of the
                                heart muscle.</p>
                        </div>
                    </div> <!-- END CONTENT BLOCK -->
                </div>
            </div> <!-- END DEPARTMENT DETAILS -->

        </div> <!-- End row -->
    </div> <!-- End container -->
</div>

@stop