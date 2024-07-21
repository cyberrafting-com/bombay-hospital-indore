@php($title = "Dr. Ankit Gupta | Bombay Hospital Indore")
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
                    <h4 class="h4-sm steelblue-color">Dr. Ankit Gupta</h4>

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
                    <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-ankit-gupta.jpg')}}" alt="">

                    <!-- Doctor Info -->
                    <div class="doctor-info">
                        <h5 class="h5-md blue-color">Qualifications</h5>
                        <p>MBBS (MGM Medical College) 2001</p>
                        <p>MS ( MGM Medical college) 2006</p>
                        <p>MCh ( PGIMER Chandigarh) 2011</p>
                        <p>Asst Professor at CMCH Bhopal</p>
                        <p>Chief consultant Neurosurgery Choithram Hospital Indore</p>
                        <p>Also worked abroad (Kenya) for one year</p>
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Extn. No.:</td>
                                    <td>2109</td>
                                </tr>
                                <tr>
                                    <td>Consulting Time:</td>
                                    <td>Mon-Sat - 10am to 6pm
                                    </td>
                                </tr>
                                <tr>
                                    <td>Consulting Room:</td>
                                    <td>9, (First Floor)</td>
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
                    <p>Dr. Ankit Gupta has been outstanding student of Jawahar Navodya Vidyalaya Shivpuri 1988 batch
                        Completed his MBBS successfully from MGM Medical college in one attempt and then went on to
                        complete MS (General Surgery) from MGM medical college again in one attempt.
                    </p>
                    <p>He worked in Max super speciality hospital in Minimally Invasive surgery then in Bhopal Memorial
                        Hospital in Dept of Neurosurgery as senior resident. From there he cleared super speciality
                        examination in India’s premier institute and in 2009 and then completed successfully MCh
                        Neurosurgery in one attempt.</p>
                    <p>Started his Post MCh career from CMCH Bhopal and then shifted to Choithram Hospital Indore He has
                        been doing all types of Neurosurgery including complicated surgeries like Aneurysm clipping
                        skull base tumours craniovertebral junction diseases. He is also trained in Endoscopic and
                        Minimally Invasive spine surgeries and Endoscopic brain surgeries like Pituitary Adenoma
                        ventricular tumour and csf rhinorrhea repair.</p>

                    <h5 class="h5-md blue-color">Expertise</h5>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Endoscopic brain surgery</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Endoscopic spine surgery in local anaesthesia (TSSULA)</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Minimally invasive spine surgeries and fixations</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">CV junction surgeries</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Tumour surgeries and aneurysm clipping and Microvascular decompression</p>
                    </div>

                    <!-- Title -->
                    <h5 class="h5-md blue-color">Achievements and Accolades</h5>

                    <!-- Option #1 -->
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Attended various workshops and conferences</p>
                    </div>

                    <!-- Option #2 -->
                    <div class="box-list">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Presented paper in National conferences
                        </p>
                    </div>
                    <div class="box-list">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Enrolled in European Spinal programme
                        </p>
                    </div>

                </div>
            </div> <!-- END DOCTOR BIO -->


        </div> <!-- End row -->
    </div> <!-- End container -->
</section>

@stop