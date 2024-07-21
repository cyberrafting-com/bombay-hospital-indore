@php($title = "Mr. Murlidhar Mundra | Bombay Hospital Indore")
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
                    <h4 class="h4-sm steelblue-color">Mr. Murlidhar Mundra</h4>

                </div>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</div> <!-- END BREADCRUMB -->

<section id="services-7" class="bg-lightgrey wide-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <img src="{{ asset('/resources/assets/images/patient/mr-murlidhar.jpg')}}" class="img-fluid" />
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 transplant-facility-box">
                <div class="box-list">

                    <p>“I hold the institution named Bombay Hospital in my highest esteem and this is with ample reason.
                        There are very few health care institutions or organizations, which cater to the health needs of
                        the needy people on the lines of Bombay Hospital. I have many experiences of the human and
                        personal attention that I have received from the doctors and the staff of the hospital. If I am
                        here alive to express my gratitude to the staff of the hospital the credit entirely goes to the
                        staff.
                    </p>

                    <p>Some two years back I had some breathing trouble, which was initially treated locally in a
                        routine way but with no effect, and ultimately I had to approach the Bombay Hospital where with
                        the strenuous efforts of the expert doctors like Dr. Idris Khan and Dr. Manish Jain the disease
                        was examined and finally diagnosed as P.A.T. I still remember with heart-felt gratefulness how
                        proper health tests were conducted till the exact cause of the disease was found out.</p>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="box-list mt-20">
                    <p> Dr. Idris Khan and Dr. Manish Jain stayed overnight and beyond their working hours to see that
                        not only my disease was detected but also it was correctly cured, and in this cause the nursing
                        staff and the technical staff did their best. I feel the personal touch that I think the utmost
                        humanity and humbleness shown by the hospital staff in caring and the patients is an example for
                        others to follow.</p>
                    <p>Infact the professionalism backed by the humanity is rare now a day but is a usual practice with
                        Bombay Hospital staff. I think if medical fraternity can learn some thing from the Bombay
                        Hospital consultants like Dr. Idris Khan and Dr. Manish Jain, the mutual trust can be further
                        strengthened. Death and disease are an inevitable part of the life, no one can be free from them
                        but it is the humanized service that always remains in the hearts of the people.</p>
                    <p>I pray to the God to let the hospital staff continue to have this human sense and sensibility as
                        at present. Others can emulate. Words fall too express my best wishes and heartily thanks to the
                        Hospital Administration, Doctors, Technicians and the Nursing Staff.”</p>
                </div>
            </div>
        </div>
    </div>
</section>

@stop