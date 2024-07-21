@php($title = "Dr. Shitanshu Dube | Bombay Hospital Indore")
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
                    <h4 class="h4-sm steelblue-color">Dr. Shitanshu Dube</h4>

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
                    <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-shitanshu-dube.jpg')}}"
                        alt="">

                    <!-- Doctor Info -->
                    <div class="doctor-info">
                        <h5 class="h5-md blue-color">Qualifications</h5>
                        <p>M.B.B.S – (M.G.M Medical college, Indore) One-year non-PG house job (1996) (M.G.M Medical
                            college, Indore) PGDMCH – M.P Bhoj University Bhopal (2004) CCEBDM- 2011, PGDHHM, PGDMLS -
                            Symbiosis University Pune.</p>
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Extn. No.:</td>
                                    <td>2004</td>
                                </tr>
                                <tr>
                                    <td>Consulting Time:</td>
                                    <td>-
                                    </td>
                                </tr>
                                <tr>
                                    <td>Consulting Room:</td>
                                    <td>-</td>
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
                    <p>Dr. Shitanshu Dube obtained medical degree from D.A.V.V Indore Batch (1987). He went on to
                        successfully complete his Non PG House job From department of surgery M.G.M Medical college and
                        M.Y Hospital Indore under the tutelage of Prof. Dr. Satish Kumar shukla, Dr. Shrikant Rage, Dr.
                        Jitendra Tiwari He completed his Post Graduate Diploma in Maternal and Child Health From M.P
                        Bhoj University Bhopal (2004). He also completed his CCEBDM (certificate course evidence based
                        diabetes management) under the guidance of Dr. Sandeep Julka and Dr. M.K Sharma, in year 2011.
                        He had run his own clinic before joining Bombay Hospital Indore in year 2004. In year 2005 he
                        completed AIDS training certificate course from M.P State AIDS central society and M.G.M Medical
                        College Indore In year 2006 he completed M.P State Neurology certificate course from Department
                        of Neurology M.G.M Medical College, Indore.</p>

                    <h5 class="h5-md blue-color">Expertise</h5>
                    <!-- <p>Apart from expertise in Cardiac And Neuro Anaesthesia he has keen interest in field of Critical Care.</p>
                            <p>He is trained in all the invasive, non-invasive and emergency procedures performed in Intensive care units and operation theatres, has wide experience in management of Critically ill patient. Had good knowledge of pathophysiolgy of various diseases encountered in intensive care units and their management along with expertise in operating all the modern equipments and machines used in Intensive Care Units and Operation theatres, have expertise in all types of Invasive and non-invasive monitoring using ultramodern equipments, wide experience in Invasive and non-invasive Ventilatory management of critically ill patients.</p> -->

                    <h5 class="h5-md blue-color">Achievements and Accolades</h5>
                    <!-- <p>He has attended number of CME’s and Conferences and training programmes such as-</p>-->
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Life member: - I.M.A. Life member: - Family Physician association.</p>
                    </div>

                </div>
            </div> <!-- END DOCTOR BIO -->


        </div> <!-- End row -->
    </div> <!-- End container -->
</section>

@stop