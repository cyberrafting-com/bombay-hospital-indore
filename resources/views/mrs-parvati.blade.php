@php($title = "Mrs. Parvati Varma | Bombay Hospital Indore")
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
                    <h4 class="h4-sm steelblue-color">Mrs. Parvati Varma</h4>

                </div>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</div> <!-- END BREADCRUMB -->

<section id="services-7" class="bg-lightgrey wide-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <img src="{{ asset('/resources/assets/images/patient/mrs-parvati.jpg')}}" class="img-fluid" />
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 transplant-facility-box">
                <div class="box-list">

                    <p>My knee pain had got to the point where it was disturbing my sleep and daily activities. Climbing
                        stairs was awful. Fearful of surgery and worried about the results, I kept dragging on for ten
                        years when I happened to meet an old time friend of mine operated by Dr Rashid Hasan. I found
                        him very courteous, confident and professional doctor. Now I can climb stairs, go for morning
                        walk and temple for prayer and my knees have become pain free. I thank Dr Rashid Hasan and his
                        entire team and Bombay Hospital for the new lease of life given to me.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

@stop