@php($title = "Diagnostic Tests for Neurological Disorders | Bombay Hospital Indore")
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
                            <li class="breadcrumb-item"><a href="#">Health Education</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Neurology and Neurosurgery
                            </li>
                        </ol>
                    </nav>

                    <!-- Title -->
                    <h4 class="h4-sm steelblue-color">Diagnostic Tests for Neurological Disorders</h4>

                </div>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</div> <!-- END BREADCRUMB -->

<div id="department-page" class="wide-60 department-page-section division">
    <div class="container">
        <div class="row">


            <!-- DEPARTMENT DETAILS -->
            <div class="col-lg-12">
                <div class="txt-block pr-30">

                    <!-- CONTENT BLOCK -->
                    <div class="content-block mb-40">
                        <h5 class="h5-md steelblue-color">What are some diagnostic tests for nervous system disorders?
                        </h5>
                        <p>Evaluating and diagnosing damage to the nervous system is complicated and complex. Many of
                            the same symptoms occur in different combinations among the different disorders. To further
                            complicate the diagnostic process, many disorders do not have definitive causes, markers, or
                            tests.</p>

                        <p>In addition to a complete medical history and physical examination, diagnostic procedures for
                            nervous system disorders may include the following:</p>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p><b>Computed tomography scan (also called a CT or CAT scan):</b> A diagnostic imaging
                                procedure that uses a combination of X-rays and computer technology to produce
                                horizontal, or axial, images (often called slices) of the body. A CT scan shows detailed
                                images of any part of the body, including the bones, muscles, fat, and organs. CT scans
                                are more detailed than general X-rays.</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p><b>Electroencephalogram (EEG):</b> A procedure that records the brain’s continuous
                                electrical activity by means of electrodes attached to the scalp.</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p><b>Magnetic resonance imaging (MRI):</b> A diagnostic procedure that uses a combination
                                of large magnets, radiofrequencies, and a computer to produce detailed images of organs
                                and structures within the body.</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p><b>Electrodiagnostic tests, such as electromyography (EMG) and nerve conduction velocity
                                    (NCV):</b> Studies that evaluate and diagnose disorders of the muscles and motor
                                neurons. Electrodes are inserted into the muscle, or placed on the skin overlying a
                                muscle or muscle group, and electrical activity and muscle response are recorded.</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p><b>Positron emission tomography (PET):</b> In nuclear medicine, a procedure that measures
                                the metabolic activity of cells.</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p><b>Arteriogram (also called an angiogram):</b> An X-ray of the arteries and veins to
                                detect blockage or narrowing of the vessels.</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p><b>Spinal tap (also called a lumbar puncture):</b> A special needle is placed into the
                                lower back, into the spinal canal. This is the area around the spinal cord. The pressure
                                in the spinal canal and brain can then be measured. A small amount of cerebral spinal
                                fluid (CSF) can be removed and sent for testing to determine if there is an infection or
                                other problems. CSF is the fluid that bathes the brain and spinal cord.</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p><b>Evoked potentials:</b> Procedures that record the brain’s electrical response to
                                visual, auditory, and sensory stimuli.</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p><b>Myelogram:</b> A procedure that uses dye injected into the spinal canal to make the
                                structure clearly visible on X-rays.</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p><b>Neurosonography:</b> A procedure that uses ultra high-frequency sound waves that
                                enable the doctor to analyze blood flow in cases of possible stroke.</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p><b>Ultrasound (also called sonography):</b> A diagnostic imaging technique that uses
                                high-frequency sound waves and a computer to create images of blood vessels, tissues,
                                and organs. Ultrasounds are used to view internal organs as they function, and to assess
                                blood flow through various vessels.</p>
                        </div>
                    </div> <!-- END CONTENT BLOCK -->
                </div>
            </div> <!-- END DEPARTMENT DETAILS -->

        </div> <!-- End row -->
    </div> <!-- End container -->
</div>

@stop