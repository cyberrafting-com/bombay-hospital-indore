@php($title = "Dr. Ashish Kumar Dwivedi | Bombay Hospital Indore")
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
                    <h4 class="h4-sm steelblue-color">Dr. Ashish Kumar Dwivedi</h4>

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
                    <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-ashish-dwivedi.jpg')}}"
                        alt="">

                    <!-- Doctor Info -->
                    <div class="doctor-info">
                        <h5 class="h5-md blue-color">Qualifications</h5>
                        <p>Fellowship in Spine and Micro neurosurgery, KEM Hospital Mumbai (MAY- JULY 2017)</p>
                        <p>Associate Consultant Neurosurgeon, Artemis Hospital Gurgaon. (OCT 2016 - APR 2017)</p>
                        <p>MCH Neurosurgery- Sawai Man Singh Medical College, Jaipur (2013-2016)</p>
                        <p>SR Neurosurgery- Gandhi Medical College Bhopal (2012-13)</p>
                        <p>MS General Surgery- Gandhi Medical College Bhopal (2009-2012)</p>
                        <p>MBBS- S.S. Medical College Rewa (2003-2009) [GOLD MEDALIST]</p>
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Extn. No.:</td>
                                    <td>2119</td>
                                </tr>
                                <tr>
                                    <td>Consulting Time:</td>
                                    <td>Mon-Sat - 10am to 6pm
                                    </td>
                                </tr>
                                <tr>
                                    <td>Consulting Room:</td>
                                    <td>19, (First Floor)</td>
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
                    <p>Dr. Ashish Kumar Dwivedi is a dynamic and multifaceted neurosurgeon specialising in the field of
                        neurosurgical disorders (brain and spine disorders). He has an excellent academic record. He was
                        throughout topper from primary school education to higher secondary education. After securing a
                        very good rank in Pre-medical test, he opted his home city to start his medical career and
                        joined S.S. Medical College, Rewa. He passed MBBS as a gold medallist. During his MBBS, he
                        developed keen interest in the field of surgery and he was awarded, roll of honours in General
                        Surgery in MBBS exams which leads him to obtain MS General Surgery from Gandhi medical college
                        Bhopal. During his tenure of MS General Surgery, he developed deep interest in brain and spine
                        surgery. To full-fill his dreams, he joined Mch Neurosurgery at prestigious Sawai Man Singh
                        Medical College Jaipur after getting selected in All India pre Mch test. After completion of Mch
                        degree, he had joined Artemis hospital Gurgaon to get world class experience in the field of
                        Neurosurgery. His special interest in Skull Base Surgery, CV junction surgery and Vascular
                        Neurosurgery led him to KEM Hospital, Mumbai where he completed his fellowship in Spine and
                        Micro neurosurgery and later worked as registrar Neurosurgery. Later he joined as a Chief
                        Consultant and head, Department of Neurosurgery Arora Neuro centre Ludhiana, where he performed
                        various complex Aneurysm surgeries, Brain Tumour surgeries, Endoscopic, Microscopic and MIS
                        Spine Surgeries.
                    </p>
                    <p>He has attended various fellowship programs and workshop at various prestigious institutes across
                        country including All India Institute of Medical Science, New Delhi. He has special interest in
                        academics and research work and innovations related to field of neurosurgery.</p>

                    <h5 class="h5-md blue-color">Expertise</h5>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Vascular Neurosurgery (Aneurysm and AVM surgery)</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Brain tumour surgeries</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Spine surgeries (spine tumour, spine trauma, cervical, lumbar and dorsal spine
                            surgeries including endoscopic, microscopic And MIS spine surgeries, vertebroplasty,
                            kyphoplasty)</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Trauma surgeries (Brain and Spine trauma)</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">CV junction surgeries</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Skull base surgeries (Pituitary surgery, CSF rhinorrhoea surgeries)</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Paediatric neurosurgery Accolades /Publication in international
                            journals/Presentation in international conference</p>
                    </div>

                    <!-- Title -->
                    <h5 class="h5-md blue-color">Achievements and Accolades</h5>

                    <!-- Option #1 -->
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Life member of Neuro trauma society of India (NTSI)</p>
                    </div>

                    <!-- Option #2 -->
                    <div class="box-list">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Life member of Neurological society of India (NSI)</p>
                    </div>
                    <div class="box-list">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Life member of Neurological Surgeons society of India (NSSI)</p>
                    </div>
                    <div class="box-list">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Comparative study of derangement of coagulation profile in moderate to severe
                            traumatic brain injury among adult and paediatric patients (Asian journal of neurosurgery
                            2018)</p>
                    </div>
                    <div class="box-list">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Broken lumbar pedicle screw – a short report -Romanian neurosurgery-2017</p>
                    </div>
                    <div class="box-list">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">A rare variant of MISME Syndrome – case report with review of literature;
                            Romanian Journal of Neurosurgery-2016)</p>
                    </div>
                    <div class="box-list">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Moyamoya syndrome with contralateral DACA aneurysm – First case report with
                            review of literature (Romanian neurosurgery-2017)</p>
                    </div>
                    <div class="box-list">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Prediction of prognosis in patients of diffuse brain injury using prognostic
                            predictive model developed by NIMHANS -Journal of evolution of medical and dental sciences-
                            Apr 2013</p>
                    </div>
                    <div class="box-list">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Paper presentation – “coagulopathy in moderate to severe traumatic brain injury”
                            In annual NSI conference Chennai 2017.</p>
                    </div>
                    <div class="box-list">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Multiple pellet injury lumbar spine – a rare entity – E poster presentation in 5
                            TH Asian Australian Neurosurgery Conference Jaipur -2015</p>
                    </div>

                </div>
            </div> <!-- END DOCTOR BIO -->


        </div> <!-- End row -->
    </div> <!-- End container -->
</section>

@stop