@php($title = "Transplant Facilities Available | Bombay Hospital Indore")
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
                            <li class="breadcrumb-item active" aria-current="page">Transplant Facilities Available</li>
                        </ol>
                    </nav>

                    <!-- Title -->
                    <h4 class="h4-sm steelblue-color">Transplant Facilities Available</h4>

                </div>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</div> <!-- END BREADCRUMB -->

<section id="services-7" class="bg-lightgrey wide-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 section-title">
                <h3 class="h3-md steelblue-color">Transplant Facilities</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 transplant-facility-box">
                <h3>Kidney Transplant</h3>
                <img src="{{ asset('/resources/assets/images/kidney-tranplant.png')}}" class="img-fluid" />
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 transplant-facility-box">

                <img src="{{ asset('/resources/assets/images/liver-transplant.jpg')}}" class="img-fluid" />
                <h3 class="mt-10">Liver Transplant</h3>
            </div>
        </div>
    </div>
</section>

@stop