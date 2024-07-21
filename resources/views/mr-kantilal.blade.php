@php($title = "Mr. Kantilal Jain | Bombay Hospital Indore")
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
                    <h4 class="h4-sm steelblue-color">Mr. Kantilal Jain</h4>

                </div>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</div> <!-- END BREADCRUMB -->

<section id="services-7" class="bg-lightgrey wide-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <img src="{{ asset('/resources/assets/images/patient/mr-kantilal.jpg')}}" class="img-fluid" />
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 transplant-facility-box">
                <div class="box-list">

                    <p>“I was suffering with Osteoarthritis of both knees for more than 7-8 years and was advised knee
                        replacement long ago but being a heart patient I was always scared of getting operated. I had
                        heard lot about Bombay Hospital Indore and met Dr Manish Ladhania regarding my problem and
                        expressed my worries to him. He gave me lot of confidence to get the surgery done. After
                        discussing the matter with my family I took the courage to get my knees operated by Dr Ladhania.
                        I have no words to express my feelings and experience after getting operated. The cooperation
                        and care I received by the Consultants and the Staff of the hospital was commendable. I was up
                        and about in two days with minimal pain. He took my care as if I was an elder member of his
                        family. After surgery my pain has disappeared and I am leading a normal life and enjoying more
                        than before.”
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

@stop