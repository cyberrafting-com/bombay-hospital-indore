@php($title = "Patient Stories | Bombay Hospital Indore")
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
                    <h4 class="h4-sm steelblue-color">Patient Stories</h4>

                </div>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</div> <!-- END BREADCRUMB -->

<section id="reviews-2" class="bg-lightgrey wide-100 reviews-section division">
    <div class="container">


        <!-- SECTION TITLE -->
        <div class="row">
            <div class="col-lg-10 offset-lg-1 section-title">

                <!-- Title 	-->
                <h3 class="h3-md steelblue-color">Hear our Success Stories</h3>

                <!-- Text -->
                <p>Patients are at the forefront of everything we do. Every day, we strive to make a
                    life-transforming impact in the lives of patients with severe and life-threatening rare
                    disorders. We invite you to meet our patients and their families and hope that their stories
                    inspire you as much as they inspire us.
                </p>

            </div>
        </div> <!-- END SECTION TITLE -->
        <div class="row">


            <!-- DOCTOR #1 -->
            <div class="col-md-6 col-lg-4">
                <div class="doctor-1">

                    <!-- Doctor Photo -->
                    <div class="hover-overlay text-center">

                        <!-- Photo -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/patient/mr-murlidhar.jpg')}}"
                            alt="doctor-foto">
                        <div class="item-overlay"></div>

                        <!-- Profile Link -->
                        <div class="profile-link">
                            <a class="btn btn-sm btn-tra-white black-hover" href="{{ route('mr-murlidhar')}}" title="">Read
                                More</a>
                        </div>

                    </div>

                    <!-- Doctor Meta -->
                    <div class="doctor-meta">

                        <h5 class="h5-sm steelblue-color">Mr. Murlidhar Mundra</h5>

                        <p class="p-sm grey-color">“I hold the institution named Bombay Hospital in my highest esteem
                            and this is with ample reason.
                        </p>

                    </div>

                </div>
            </div> <!-- END DOCTOR #1 -->


            <!-- DOCTOR #2 -->
            <div class="col-md-6 col-lg-4">
                <div class="doctor-1">

                    <!-- Doctor Photo -->
                    <div class="hover-overlay text-center">

                        <!-- Photo -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/patient/mrs-parvati.jpg')}}"
                            alt="doctor-foto">
                        <div class="item-overlay"></div>

                        <!-- Profile Link -->
                        <div class="profile-link">
                            <a class="btn btn-sm btn-tra-white black-hover" href="{{ route('mrs-parvati')}}" title="">Read
                                More</a>
                        </div>

                    </div>

                    <!-- Doctor Meta -->
                    <div class="doctor-meta">

                        <h5 class="h5-sm steelblue-color">Mrs. Parvati Varma</h5>

                        <p class="p-sm grey-color">My knee pain had got to the point where it was disturbing my sleep
                            and daily activities.
                        </p>

                    </div>

                </div>
            </div> <!-- END DOCTOR #2 -->


            <!-- DOCTOR #3 -->
            <div class="col-md-6 col-lg-4">
                <div class="doctor-1">

                    <!-- Doctor Photo -->
                    <div class="hover-overlay text-center">

                        <!-- Photo -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/patient/mr-yatindra.jpg')}}"
                            alt="doctor-foto">
                        <div class="item-overlay"></div>

                        <!-- Profile Link -->
                        <div class="profile-link">
                            <a class="btn btn-sm btn-tra-white black-hover" href="{{ route('mr-yatindra')}}" title="">Read
                                More</a>
                        </div>

                    </div>

                    <!-- Doctor Meta -->
                    <div class="doctor-meta">

                        <h5 class="h5-sm steelblue-color">Mr. Yatindra Jain</h5>

                        <p class="p-sm grey-color">I was brought by my family in absolute agony and weakness
                        </p>

                    </div>

                </div>
            </div> <!-- END DOCTOR #3 -->


            <!-- DOCTOR #4 -->
            <div class="col-md-6 col-lg-4">
                <div class="doctor-1">

                    <!-- Doctor Photo -->
                    <div class="hover-overlay text-center">

                        <!-- Photo -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/patient/mrs-neena.jpg')}}"
                            alt="doctor-foto">
                        <div class="item-overlay"></div>

                        <!-- Profile Link -->
                        <div class="profile-link">
                            <a class="btn btn-sm btn-tra-white black-hover" href="{{ route('mrs-neena')}}" title="">Read
                                More</a>
                        </div>

                    </div>

                    <!-- Doctor Meta -->
                    <div class="doctor-meta">

                        <h5 class="h5-sm steelblue-color">Mrs. Neena Solanki</h5>

                        <p class="p-sm grey-color">Hi, My name is Mrs. Nina Solanki (50 years) housewife from Indore.
                        </p>

                    </div>

                </div>
            </div> <!-- END DOCTOR #4 -->

            <div class="col-md-6 col-lg-4">
                <div class="doctor-1">

                    <!-- Doctor Photo -->
                    <div class="hover-overlay text-center">

                        <!-- Photo -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/patient/mr-arjun.jpg')}}"
                            alt="doctor-foto">
                        <div class="item-overlay"></div>

                        <!-- Profile Link -->
                        <div class="profile-link">
                            <a class="btn btn-sm btn-tra-white black-hover" href="{{ route('mr-arjun')}}" title="">Read
                                More</a>
                        </div>

                    </div>

                    <!-- Doctor Meta -->
                    <div class="doctor-meta">

                        <h5 class="h5-sm steelblue-color">Mr. Arun Biswas</h5>

                        <p class="p-sm grey-color">I was suffering with Osteoarthritis of both knees for more than 7-8
                            years and was advised knee replacement
                        </p>

                    </div>

                </div>
            </div>


            <div class="col-md-6 col-lg-4">
                <div class="doctor-1">

                    <!-- Doctor Photo -->
                    <div class="hover-overlay text-center">

                        <!-- Photo -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/patient/mr-kantilal.jpg')}}"
                            alt="doctor-foto">
                        <div class="item-overlay"></div>

                        <!-- Profile Link -->
                        <div class="profile-link">
                            <a class="btn btn-sm btn-tra-white black-hover" href="{{ route('mr-kantilal')}}" title="">Read
                                More</a>
                        </div>

                    </div>

                    <!-- Doctor Meta -->
                    <div class="doctor-meta">

                        <h5 class="h5-sm steelblue-color">Mr. Kantilal Jain</h5>

                        <p class="p-sm grey-color">I was suffering with Osteoarthritis of both knees for more than 7-8
                            years and was advised knee replacement
                        </p>

                    </div>

                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="doctor-1">

                    <!-- Doctor Photo -->
                    <div class="hover-overlay text-center">

                        <!-- Photo -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/patient/mr-bherulal.jpg')}}"
                            alt="doctor-foto">
                        <div class="item-overlay"></div>

                        <!-- Profile Link -->
                        <div class="profile-link">
                            <a class="btn btn-sm btn-tra-white black-hover" href="{{ route('mr-bherulal')}}" title="">Read
                                More</a>
                        </div>

                    </div>

                    <!-- Doctor Meta -->
                    <div class="doctor-meta">

                        <h5 class="h5-sm steelblue-color">Mr. Bherulal Gupta</h5>

                        <p class="p-sm grey-color">I had reached Bombay Hospital from my village after suffering for
                            last one month and being treated at various hospitals
                        </p>

                    </div>

                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="doctor-1">

                    <!-- Doctor Photo -->
                    <div class="hover-overlay text-center">

                        <!-- Photo -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/patient/mrs-yayati.jpg')}}"
                            alt="doctor-foto">
                        <div class="item-overlay"></div>

                        <!-- Profile Link -->
                        <div class="profile-link">
                            <a class="btn btn-sm btn-tra-white black-hover" href="{{ route('mrs-yayati')}}" title="">Read
                                More</a>
                        </div>

                    </div>

                    <!-- Doctor Meta -->
                    <div class="doctor-meta">

                        <h5 class="h5-sm steelblue-color">Mrs. Yayati Joshi</h5>

                        <p class="p-sm grey-color">My story began on January 4th , 2002 with the painful experience of
                            first miscarriage.
                        </p>

                    </div>

                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="doctor-1">

                    <!-- Doctor Photo -->
                    <div class="hover-overlay text-center">

                        <!-- Photo -->
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/patient/mr-amit.jpg')}}"
                            alt="doctor-foto">
                        <div class="item-overlay"></div>

                        <!-- Profile Link -->
                        <div class="profile-link">
                            <a class="btn btn-sm btn-tra-white black-hover" href="{{ route('mr-amit')}}" title="">Read
                                More</a>
                        </div>

                    </div>

                    <!-- Doctor Meta -->
                    <div class="doctor-meta">

                        <h5 class="h5-sm steelblue-color">Mr. Amit Singh Parihar</h5>

                        <p class="p-sm grey-color">I came to Bombay Hospital with complaints of cough/fever and severe
                            respiratory disorders for 3-4 days.
                        </p>

                    </div>

                </div>
            </div>

        </div>
    </div> <!-- End container -->
</section>

@stop