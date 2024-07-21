@php($title = "Cath Lab | Bombay Hospital Indore")
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
                            <li class="breadcrumb-item"><a href="#">Services</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Diagnostic
                            </li>
                        </ol>
                    </nav>

                    <!-- Title -->
                    <h4 class="h4-sm steelblue-color">Cath Lab</h4>

                </div>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</div> <!-- END BREADCRUMB -->

<div id="department-page" class="wide-60 department-page-section division">
    <div class="container">
        <div class="row">


            <!-- DEPARTMENT DETAILS -->
            <div class="col-lg-8">
                <div class="txt-block pr-30">


                    <!-- CONTENT BLOCK -->
                    <div class="content-block mb-40">
                        <div class="content-block-img">
                            <img class="img-fluid" src="{{ asset('/resources/assets/images/services/cathlab.jpg')}}" alt="content-image">
                        </div>


                        <p>The department of interventional cardiology and catheterization was started in 2003 and since
                            then nearly 11,500 angiographies and 3,500 angioplasties have been performed under this
                            roof.</p>

                        <p>The department consists of 2 leading Interventional Cardiologists, some of them being
                            legendary in the field of cardiology.The department also has ultramodern non-invasive
                            cardiology investigations which consists of latest colour doppler, echo machines, treadmill
                            and holter monitoring.</p>

                        <p>The Cardiology department at Bombay Hospital is determined to provide compassionate, state of
                            the art, proficient care to heart patients at an affordable cost. Our qualified team, along
                            with the latest technology, ensures the best possible care for a wide spectrum of heart
                            diseases.</p>
                        <p>The Department of cardiology at the Bombay Hospital provides a diagnostic and treatment
                            service for patients referred with actual, or suspected, heart disease. It provides a
                            comprehensive suite of diagnostic and treatment facilities, including non-invasive
                            diagnostic facilities, and a wide range of interventional cardiac, vascular and
                            electrophysiological procedures.</p>
                        <p>The Department of Cardiology at Bombay Hospital – Indore offers preventive, diagnostic and
                            therapeutic services for cardiovascular diseases. The department has highly qualified and
                            skilled cardiologists with expertise in all types of cardiac procedures. The consultants
                            practice evidence based medicine and follow international protocols which has enabled the
                            best outcomes. Bombay Hospital – Indore, offers round the clock services for cardiac
                            emergencies and is equipped with the advanced infrastructure to manage and treat complicated
                            heart conditions.</p>


                    </div> <!-- END CONTENT BLOCK -->
                </div>
            </div> <!-- END DEPARTMENT DETAILS -->

            <!-- SIDEBAR  -->
            <div class="col-lg-4">
                @include('includes.diagnostic-sidebar')
            </div>

        </div> <!-- End row -->
    </div> <!-- End container -->
</div>

@stop