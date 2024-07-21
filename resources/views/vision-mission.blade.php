@php($title = "Vision, Mission & Motto | Bombay Hospital Indore")
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
                            <li class="breadcrumb-item"><a href="#">About us</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Vision, Mission & Motto</li>
                        </ol>
                    </nav>

                    <!-- Title -->
                    <h4 class="h4-sm steelblue-color">Vision, Mission & Motto</h4>

                </div>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</div> <!-- END BREADCRUMB -->

<section style="margin-top: 0px;" id="about-1" class="wide-100 about-section division">
    <div class="container vision-box">
        <div class="row d-flex align-items-center">


            <!-- ABOUT BOX #1 -->
            <div id="abox-3" class="col-md-4 col-lg-4">
                <div class="abox-1 white-color">

                    <img class="img-fluid" src="{{ asset('/resources/assets/images/mission.png')}}"
                        alt="statistic-image">

                    <h5 class="h5-md">Mission</h5>

                    <!-- Text -->
                    <p><q>Bombay Hospital shall provide the best possible medical treatment,
                            delivered
                            most
                            efficiently, in the shortest possible time, at minimum cost, to all
                            sections
                            of
                            the society, irrespective of caste, creed or religion.</q></p>

                </div>
            </div>


            <!-- ABOUT BOX #2 -->
            <div id="abox-2" class="col-md-4 col-lg-4">
                <div class="abox-1 white-color">
                    <img class="img-fluid" src="{{ asset('/resources/assets/images/vision.png')}}"
                        alt="statistic-image">

                    <h5 class="h5-md">Vision</h5>

                    <p><q>To render the same level of service to the poor that the rich will get in
                            a
                            good
                            hospital.</q></p>
                </div>
            </div>

            <!-- <div id="abox-3" class="col-md-4 col-lg-4">
                        <div class="abox-1 white-color">

                            <h5 class="h5-md">Vision</h5>

                            <p><q>To render the same level of service to the poor that the rich will get in
                                    a
                                    good
                                    hospital.</q></p>

                        </div>
                    </div> -->


            <!-- ABOUT BOX #3 -->
            <div id="abox-3" class="col-md-4 col-lg-4">
                <div class="abox-1 white-color">
                    <img class="img-fluid" src="{{ asset('/resources/assets/images/motto.png')}}"
                        alt="statistic-image">

                    <!-- Title -->
                    <h5 class="h5-md">Motto</h5>

                    <!-- Text -->
                    <p><q>A Patient is the most important person in our hospital. He is not an
                            interruption
                            to
                            our work. He is the purpose of it. He is not an outsider in our
                            hospital, he
                            is
                            part
                            of it. We are not doing him a favour by serving him, he is doing us a
                            favour
                            by
                            giving us an opportunity to do so.</q></p>

                </div>
            </div>


        </div> <!-- End row -->
    </div> <!-- End container -->
</section>

@stop