@php($title = "Mrs. Neena Solanki | Bombay Hospital Indore")
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
                            <li class="breadcrumb-item active" aria-current="page">Patient Stories</li>
                        </ol>
                    </nav>

                    <!-- Title -->
                    <h4 class="h4-sm steelblue-color">Mrs. Neena Solanki</h4>

                </div>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</div> <!-- END BREADCRUMB -->

<section id="services-7" class="bg-lightgrey wide-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <img src="{{ asset('/resources/assets/images/patient/mrs-neena.jpg')}}" class="img-fluid" />
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 transplant-facility-box">
                <div class="box-list">

                    <p>Hi, My name is Mrs. Nina Solanki (50 years) housewife from Indore. A close friend of mine advise
                        me to visit Bombay Hospital for my problem regarding gynecology after which I met Gynecologist
                        and Dr. Manish Jain and after going through their treatment my said problem got settled. These
                        Doctors and Hospital staff played a vital role in my treatment.
                    </p>

                    <p>I always advise my relative and friends who have health problems to visit Bombay Hospital.</p>
                </div>
            </div>
        </div>
    </div>
</section>

@stop