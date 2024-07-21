@php($title = "Dr. Atul Taparia | Bombay Hospital Indore")
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
                            <li class="breadcrumb-item active" aria-current="page">Panel of Consultants</li>
                        </ol>
                    </nav>

                    <!-- Title -->
                    <h4 class="h4-sm steelblue-color">Dr. Atul Taparia</h4>

                </div>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</div> <!-- END BREADCRUMB -->

<section id="doctor-1-details" class="doctor-details-section division">
    <div class="container">
        <div class="row">


            <!-- DOCTOR PHOTO -->
            <div class="col-md-5">
                <div class="doctor-photo mb-40">

                    <!-- Photo -->
                    <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-atul-taparia.jpg')}}" alt="">

                    <!-- Doctor Info -->
                    <div class="doctor-info">
                        <h5 class="h5-md blue-color">Qualifications</h5>
                        <p>MBBS from MGM Medical College Indore MP, 1987-1992.</p>
                        <p>MD (Medicine) GRMC Gwalior, 1994-1997.</p>
                        <p>DNB(Neurology) from Diplomat National Board New Delhi, 2001.</p>
                        <p>DM Neurology from Mumbai University.</p>
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Extn. No.:</td>
                                    <td>2118</td>
                                </tr>
                                <tr>
                                    <td>Consulting Time:</td>
                                    <td>Mon-Sat - 10 am to 6 pm
                                    </td>
                                </tr>
                                <tr>
                                    <td>Consulting Room:</td>
                                    <td>18 (First Floor)</td>
                                </tr>
                            </tbody>
                        </table>
                    </div> <!-- End Doctor Info -->


                    <!-- <div class="doctor-photo-btn text-center">
                                <a href="#" class="btn btn-md btn-blue blue-hover">Book an
                                    Appointment</a>
                            </div> -->

                </div>
            </div> <!-- END DOCTOR PHOTO -->


            <!-- DOCTOR'S BIO -->
            <div class="col-md-7">
                <div class="doctor-bio">
                    <h5 class="h5-md blue-color">Background</h5>

                    <!-- Text -->
                    <p>Dr Atul Taparia obtained his medical degree from Devi Ahilya University Indore. He went on to
                        successfully complete his post-graduate training in Medicine obtaining the Doctor of Medicine
                        from GRMC Gwalior. He did his DM from Mumbai University and DNB Neurology (DNB Board), in 2001.
                        He was privileged to have trained under the tutelage of Dr BS Singhal in Neurology at BHIMS
                        (Bombay Hospital Institute of Medical Sciences Mumbai) from 1997 to 2001.Following his return,
                        he joined Bombay Hospital Indore as Neurologist where he introduced and established the
                        specialty of Neurology.</p>
                    <p>He has started Neurology teaching programs not only in Bombay Hospital but in other forums across
                        the city and peripheries. He is a life member of Indian Academy of Neurology and currently
                        Secretary for Neuro Club Indore. His basic area of interest is critical care neurology and
                        stroke. He also runs headache clinic and clinic for chronic neurological illness at Bombay
                        Hospital Indore. He has the credit of starting and establishing one of the busiest neurology
                        clinic and stroke unit at Bombay Hospital Indore.. He is one of neurologist who is having both
                        DM as well as DNB in Neurology.</p>

                    <h5 class="h5-md blue-color">Expertise</h5>
                    <p>Critical Neurological Illness, Stroke, Epilepsy, Movement Disorders, Headache and Neuromuscular
                        Diseases.</p>


                    <h5 class="h5-md blue-color">Achievements and Accolades</h5>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">DNB Teacher and Thesis Guide for last six years.</p>
                    </div>
                </div>
            </div> <!-- END DOCTOR BIO -->


        </div> <!-- End row -->
    </div> <!-- End container -->
</section>

@stop