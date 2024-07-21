@php($title = "Management Board | Bombay Hospital Indore")
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
                            <li class="breadcrumb-item active" aria-current="page">Management Board</li>
                        </ol>
                    </nav>

                    <!-- Title -->
                    <h4 class="h4-sm steelblue-color">Management Board</h4>

                </div>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</div> <!-- END BREADCRUMB -->

<section id="services-7" class="bg-lightgrey wide-70 servicess-section division">
    <div class="container">

        <!-- SECTION TITLE -->
        <div class="row">
            <div class="col-lg-10 offset-lg-1 section-title">
                <h3 class="h3-md steelblue-color">Management Board</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h4 class="steelblue-color">Trustees</h4>
            </div>
            <div class="col-lg-4 trustee-box">
                <p style="font-size: 20px; color: #c94d4d;" class="txt-500">Shri Bharat Kumar Taparia</p>
                <h5>Chairman Trustee</h5>
            </div>
            <div class="col-lg-4 trustee-box">
                <p style="font-size: 20px; color: #c94d4d;" class="txt-500">Shri Harsh V Lodha</p>
                <h5>Trustee</h5>
            </div>
            <div class="col-lg-4 trustee-box">
                <p style="font-size: 20px; color: #c94d4d;" class="txt-500">Smt. Nandini Nopany</p>
                <h5>Trustee</h5>
            </div>
            <div class="col-lg-4 trustee-box">
                <p style="font-size: 20px; color: #c94d4d;" class="txt-500">Shri Deepak Parekh</p>
                <h5>Trustee</h5>
            </div>
            <div class="col-lg-4 trustee-box">
                <p style="font-size: 20px; color: #c94d4d;" class="txt-500">Shri Shyam Malpani</p>
                <h5>Dy. Hon Secretary</h5>
            </div>
        </div>


        <div class="row mt-50">
            <div class="col-lg-12">
                <h4 class="steelblue-color">Administration</h4>
            </div>
            <div class="col-lg-4 trustee-box">
                <p style="font-size: 20px; color: #c94d4d;" class="txt-500">Dr. R.V. Patil</p>
                <h5>Director Medical Services</h5>
            </div>
            <div class="col-lg-4 trustee-box">
                <p style="font-size: 20px; color: #c94d4d;" class="txt-500">Mr. Ramesh Bhattad</p>
                <h5>Director IR & HR</h5>
            </div>
            <div class="col-lg-4 trustee-box">
                <p style="font-size: 20px; color: #c94d4d;" class="txt-500">Mrs. Shaila Bhalekar</p>
                <h5>Director Nursing</h5>
            </div>
            <!-- <div class="col-lg-4 trustee-box">
                        <p style="font-size: 20px; color: #c94d4d;" class="txt-500">Dr. Rajesh Choumal</p>
                        <h5>Director Admin & H.E&A.S</h5>
                    </div> -->
            <div class="col-lg-4 trustee-box">
                <p style="font-size: 20px; color: #c94d4d;" class="txt-500">Mr. Manish Ved</p>
                <h5>Director Systems</h5>
            </div>
            <div class="col-lg-4 trustee-box">
                <p style="font-size: 20px; color: #c94d4d;" class="txt-500">Mr. Manoj Singhal</p>
                <h5>Director Materials</h5>
            </div>
            <div class="col-lg-4 trustee-box">
                <p style="font-size: 20px; color: #c94d4d;" class="txt-500">Mr. Rajkumar Agarwal</p>
                <h5>Chief Financial Officer</h5>
            </div>
            <div class="col-lg-4 trustee-box">
                <p style="font-size: 20px; color: #c94d4d;" class="txt-500">Mr. Rahul Parasar</p>
                <h5>Dy. Director (Administration)</h5>
            </div>
            <div class="col-lg-4 trustee-box">
                <p style="font-size: 20px; color: #c94d4d;" class="txt-500">Dr. Dileep Singh Chauhan</p>
                <h5>Dy. Director (Medical Services)</h5>
            </div>
        </div>

        <div class="row mt-50">
            <div class="col-lg-12">
                <h4 class="steelblue-color">Academic</h4>
            </div>
            <div class="col-lg-6 trustee-box">
                <p style="font-size: 20px; color: #c94d4d;" class="txt-500">Dr. S. V. Khadilkar</p>
                <h5>Dean – Bombay Hospital Institute Of Medical Sciences</h5>
            </div>
        </div>
    </div>
</section>

@stop