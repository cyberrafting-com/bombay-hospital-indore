@php($title = "Dr. Rajesh Gujrati | Bombay Hospital Indore")
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
                    <h4 class="h4-sm steelblue-color">Dr. Rajesh Gujrati</h4>

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
                    <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-rajesh-gujrati.jpg')}}"
                        alt="">

                    <!-- Doctor Info -->
                    <div class="doctor-info">
                        <h5 class="h5-md blue-color">Qualifications</h5>
                        <p>MBBS from MGM Medical college, Indore, MP, 1986</p>
                        <p>MS from Tata Memorial Hospital, University of Bombay, Mumbai 1991</p>
                        <p>FICS (Surgical Oncology).</p>
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Extn. No.:</td>
                                    <td>2115</td>
                                </tr>
                                <tr>
                                    <td>Consulting Time:</td>
                                    <td>Mon-Sat - 10 am to 6 pm
                                    </td>
                                </tr>
                                <tr>
                                    <td>Consulting Room:</td>
                                    <td>15 (First Floor)</td>
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
                    <p>Dr. Rajesh Gujrati obtained his medical degree from MGM Medical College, Devi Ahilya University,
                        Indore. He completed his Post Graduate studies in Surgery and Surgical Oncology from Tata
                        Memorial Hospital, University of Bombay, Mumbai in the year 1991.</p>
                    <p>He further went on to successfully complete his fellowship in Surgical Oncology in different
                        departments at Tata Memorial Hospital, Mumbai, between 1991-1994. In December 1994, he went to
                        United States of America for a specialized training in the field of Head and Neck Cancer Surgery
                        in the capacity of a clinical Research fellow at Memorial Sloan Kettering Cancer Centre, New
                        York, USA and Mayo Clinic, Rochester, Minnesota, USA. He had a further specialized training
                        programme at National Cancer Institute Tokyo, Japan for learning intricacies of Esophageal and
                        Lung Cancer Surgery in the year 2002.</p>
                    <p>Consultant Surgical Oncologist at Bombay Hospital, Indore Since year 2003.</p>
                    <p>Dr. Rajesh Gujrati has dedicated his work in the field of Cancer Surgery at Bombay hospital,
                        Indore. He has performed all kinds of cancer surgery from routine Head and Neck Cancer, Breast
                        Cancer, Colorectal to most complicated Esophageal, Lung and Pancreatic surgeries. Dr. Rajesh
                        Gujrati had publications in national and international journals, with a publication in journal
                        of surgical oncology during his tenure at Memorial Sloan Kettering Cancer Centre New York, USA
                        for his paper on \"Thyroid\" in the year 1995.</p>
                    <p>He participated in many National & International conferences along with arranging many cancer
                        education programmes through Lions Club of Indore for increasing awareness at different
                        organizations in the city of Indore and neighbouring cities.</p>

                    <h5 class="h5-md blue-color">Expertise</h5>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Breast conservation surgery.</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Thyroid, Head & Neck Cancer.</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Gynecological and Urological Cancer Surgery.</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Thoracic and Gastro Intestinal Malignancies.</p>
                    </div>


                    <h5 class="h5-md blue-color">Achievements and Accolades</h5>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Achieved IIIrd position in \"Anatomy Dissection competition\" during medical
                            graduation.</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Awarded \"fellow of International College of Surgeons\" in Surgical Oncology,
                            Chicago, USA in 2001.</p>
                    </div>

                </div>
            </div> <!-- END DOCTOR BIO -->


        </div> <!-- End row -->
    </div> <!-- End container -->
</section>

@stop