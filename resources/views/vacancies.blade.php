@php($title = "Vacancies Available | Bombay Hospital Indore")
@section('meta_desc') @endsection

@extends('layouts.default')
@section('content')

<div id="breadcrumb" class="division">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class=" breadcrumb-holder">

                    <!-- Breadcrumb Nav -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Vacancies</li>
                        </ol>
                    </nav>

                    <!-- Title -->
                    <h4 class="h4-sm steelblue-color">Vacancies</h4>

                </div>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</div> <!-- END BREADCRUMB -->

<section id="services-7" class="bg-lightgrey wide-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 section-title">
                <h3 class="h3-md steelblue-color">Vacancies</h3>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-7 col-md-7 col-sm-7 trustee-box trustee-box-01">
                <p class="txt-500">Required a Full Time Experienced Microbiologist at our Institute.</p>
                <h6><i class="fa fa-graduation-cap pr-2" aria-hidden="true"></i>Qualifications - MD (Microbiology)</h6>
                <a href="mailto:msofficebhi@gmail.com"><i class="fa fa-envelope pr-2" aria-hidden="true"></i><b>CV's can be sent by email to</b> - msofficebhi@gmail.com</a>
            </div>
        </div>
    </div>
</section>

@stop