@php($title = "Mr. Amit Singh Parihar | Bombay Hospital Indore")
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
                    <h4 class="h4-sm steelblue-color">Mr. Amit Singh Parihar</h4>

                </div>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</div> <!-- END BREADCRUMB -->

<section id="services-7" class="bg-lightgrey wide-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <img src="{{ asset('/resources/assets/images/patient/mr-amit.jpg')}}" class="img-fluid" />
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 transplant-facility-box">
                <div class="box-list">

                    <p>I came to Bombay Hospital with complaints of cough/fever and severe respiratory disorders for 3-4
                        days. We got admitted after being seen very quickly by Dr Manish Jain in ICU. He examined me and
                        with his experience and expertise diagnosed severe respiratory infection with possibility of
                        H1N1 virus, I was treated very effectively with a very dedicated and committed team of doctors
                        and nurses in ICU with medication and non-invasive ventilatory support. I was tested positive
                        for H1N1 and my family was very apprehensive listening to the diagnosis. But recovered very
                        quickly in a week’s time. I am extremely thankful by my heart to Dr Manish Jain, his team of
                        efficient doctors in ICU, Nursing Staff of Bombay Hospital for saving my life from this very
                        serious disease from which I could have died had I not reached Bombay Hospital. My family
                        strongly feels that Bombay Hospital is giving a care like given by a mother to her child with
                        full commitment, dedication and saving life of serious patients like me.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

@stop