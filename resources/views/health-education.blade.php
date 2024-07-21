@php($title = "Health Education | Bombay Hospital Indore")
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
                            <li class="breadcrumb-item"><a href="#">Services</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Health Library
                            </li>
                        </ol>
                    </nav>

                    <!-- Title -->
                    <h4 class="h4-sm steelblue-color">Health Education</h4>

                </div>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</div> <!-- END BREADCRUMB -->

<div id="department-page" class="wide-60 department-page-section division">
    <div class="container">
        <div class="row">


            <!-- DEPARTMENT DETAILS -->
            <div class="col-lg-8">
                <div class="txt-block pr-30">


                    <!-- CONTENT BLOCK -->
                    <div class="content-block mb-40">

                        <div class="row">
                            <div class="content-block col-lg-6">
                                <h5 class="h5-md steelblue-color">Gynecology and Obstetrics-</h5>
                                <div class="content-block-img">
                                    <img class="img-fluid"
                                        src="{{ asset('/resources/assets/images/services/gynaec-obs.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="content-block col-lg-6">
                                <h5 class="h5-md steelblue-color">Topic Index -</h5>
                                <div class="box-list">
                                    <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                                    <p><a href="{{ route('female-pelvic-area')}}">Anatomy of the Female Pelvic Area</a></p>
                                </div>
                                <div class="box-list">
                                    <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                                    <p><a href="{{ route('menstrual-conditions')}}">Menstrual Conditions</a></p>
                                </div>
                                <div class="box-list">
                                    <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                                    <p><a href="{{ route('menopause')}}">Menopause</a></p>
                                </div>
                                <div class="box-list">
                                    <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                                    <p><a href="{{ route('gynecologic-conditions')}}">Gynecologic Conditions</a></p>
                                </div>
                                <div class="box-list">
                                    <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                                    <p><a href="{{ route('gynecologic-infections')}}">Gynecologic Inflammations and
                                            Infections</a></p>
                                </div>
                                <div class="box-list">
                                    <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                                    <p><a href="{{ route('hysterectomy')}}">Hysterectomy</a></p>
                                </div>
                                <div class="box-list">
                                    <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                                    <p><a href="{{ route('info-about-cancer')}}">General Information About Cancer</a></p>
                                </div>
                                <div class="box-list">
                                    <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                                    <p><a href="{{ route('gynecologic-cancers')}}">Gynecological Cancers</a></p>
                                </div>
                            </div>
                            <div class="content-block col-lg-12">
                                <h5 class="h5-md steelblue-color">Glossary-</h5>
                                <p>From before puberty to after menopause, a woman’s body is constantly changing
                                    and developing. And, at each stage of development and maturation, she may
                                    have questions about gynecological, reproductive, and sexual health. Thus,
                                    it is important that a woman establishes a partnership with her health care
                                    provider — often an OB/GYN (obstetrician/gynecologist), certified nurse
                                    midwife, or nurse practitioner — early on.</p>
                                <p>Health care providers who specialize in general women’s medical care,
                                    diagnosis and treatment of disorders of the female reproductive system, and
                                    care of pregnant women, include obstetricians/gynecologists, who are
                                    physicians, and certified nurse midwives and women’s health nurse
                                    practitioners, who are nurses with advanced education.</p>
                                <p>Many of the conditions that affect gynecological, reproductive, and sexual
                                    health may be detected early, which, in most cases, provides for a more
                                    positive prognosis and successful treatment.</p>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="content-block col-lg-6">
                                <h5 class="h5-md steelblue-color">Neurology and Neurosurgery-</h5>
                                <div class="content-block-img">
                                    <img class="img-fluid"
                                        src="{{ asset('/resources/assets/images/services/neuro.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="content-block col-lg-6">
                                <h5 class="h5-md steelblue-color">Topic Index -</h5>
                                <div class="box-list">
                                    <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                                    <p><a href="{{ route('overview-nervous-system')}}">Overview of Nervous System Disorders</a>
                                    </p>
                                </div>
                                <div class="box-list">
                                    <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                                    <p><a href="{{ route('anatomy-brain')}}">Anatomy of the Brain</a></p>
                                </div>
                                <div class="box-list">
                                    <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                                    <p><a href="{{ route('diagnostic-tests')}}">Diagnostic Tests for Neurological Disorders</a>
                                    </p>
                                </div>
                                <div class="box-list">
                                    <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                                    <p><a href="{{ route('neurological-examination')}}">Neurological Examination</a></p>
                                </div>
                                <div class="box-list">
                                    <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                                    <p><a href="{{ route('neurological-disorders')}}">Neurological Disorders</a></p>
                                </div>
                            </div>
                            <div class="content-block col-lg-12">
                                <h5 class="h5-md steelblue-color">Glossary-</h5>
                                <p>The nervous system is a complex, sophisticated system that regulates and coordinates
                                    the body’s basic functions and activities. It is made up of two major divisions,
                                    including the central nervous system (consisting of the brain and spinal cord) and
                                    the peripheral nervous system (consisting of all other neural elements). The central
                                    nervous system controls vision, thought, speech, behavior, and movement. The
                                    peripheral nervous system relays information to the central nervous system about
                                    sensation from the body and the special senses such as vision, taste, and hearing
                                    and relays information back to the body for transmitting messages to muscles and
                                    glands.</p>
                                <p>In addition to the brain and spinal cord, principal organs of the nervous system
                                    include:</p>
                                <p>The nervous system is vulnerable to various disorders. Because of its complexity and
                                    the high technology used in evaluation and treatment of its disorders, the branches
                                    of medicine, physician specialists, and clinical services that manage it are as
                                    numerous and varied as the disorders and conditions.</p>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="content-block col-lg-6">
                                <h5 class="h5-md steelblue-color">Orthopedics-</h5>
                                <div class="content-block-img">
                                    <img class="img-fluid"
                                        src="{{ asset('/resources/assets/images/services/ortho.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="content-block col-lg-6">
                                <h5 class="h5-md steelblue-color">Topic Index -</h5>
                                <div class="box-list">
                                    <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                                    <p><a href="{{ route('overview-ortho')}}">Overview of Orthopedics / The Orthopedic Team</a>
                                    </p>
                                </div>
                                <div class="box-list">
                                    <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                                    <p><a href="{{ route('common-ortho-disorders')}}">Common Orthopedic Disorders</a></p>
                                </div>
                                <div class="box-list">
                                    <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                                    <p><a href="{{ route('evaluation-procedures')}}">Evaluation Procedures</a></p>
                                </div>
                                <div class="box-list">
                                    <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                                    <p><a href="{{ route('treatment-plans')}}">Treatment Plans</a></p>
                                </div>
                                <div class="box-list">
                                    <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                                    <p><a href="{{ route('sports-injuries')}}">Sports Injuries</a></p>
                                </div>
                            </div>
                            <div class="content-block col-lg-12">
                                <h5 class="h5-md steelblue-color">Glossary-</h5>
                                <p>Orthopedics is the branch of medicine concerned with diseases, injuries, and
                                    conditions of the musculoskeletal system, or the body’s muscles and skeleton,
                                    including the joints, ligaments, tendons, and nerves.</p>
                                <p>Orthopedic surgery is made up of doctors and other health care professionals who
                                    provide comprehensive orthopedic services. Their expertise provides treatment and
                                    care of diseases, injuries, fractures, and pain.</p>
                                <p>Orthopedists also design rehabilitation programs for the injured or physically
                                    disabled and participate in ongoing musculoskeletal research.</p>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="content-block col-lg-6">
                                <h5 class="h5-md steelblue-color">Cardiology-</h5>
                                <div class="content-block-img">
                                    <img class="img-fluid"
                                        src="{{ asset('/resources/assets/images/services/cardio.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="content-block col-lg-6">
                                <h5 class="h5-md steelblue-color">Topic Index -</h5>
                                <div class="box-list">
                                    <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                                    <p><a href="{{ route('basic-anatomy-of-heart')}}">Basic Anatomy of the Heart</a></p>
                                </div>
                                <div class="box-list">
                                    <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                                    <p><a href="{{ route('hearts-electrical-system')}}">Anatomy and Function of the Heart’s
                                            Electrical System</a></p>
                                </div>
                                <div class="box-list">
                                    <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                                    <p><a href="{{ route('coronary-arteries')}}">Anatomy and Function of the Coronary Arteries</a>
                                    </p>
                                </div>
                                <div class="box-list">
                                    <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                                    <p><a href="#">Anatomy and Function of the Heart Valves</a></p>
                                </div>
                                <div class="box-list">
                                    <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                                    <p><a href="{{ route('statistics')}}">Statistics</a></p>
                                </div>
                                <div class="box-list">
                                    <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                                    <p><a href="{{ route('cardiac-diagnostic-tests')}}">Cardiac Diagnostic Tests</a></p>
                                </div>
                                <div class="box-list">
                                    <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                                    <p><a href="{{ route('vital-signs')}}">Vital Signs</a></p>
                                </div>
                                <div class="box-list">
                                    <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                                    <p><a href="{{ route('cardiac-procedures')}}">Cardiac Procedures</a></p>
                                </div>
                                <div class="box-list">
                                    <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                                    <p><a href="{{ route('cardiac-rehabilitation')}}">Cardiac Rehabilitation</a></p>
                                </div>
                                <div class="box-list">
                                    <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                                    <p><a href="{{ route('cardiac-conditions')}}">Cardiac Conditions and Diseases</a></p>
                                </div>
                                <div class="box-list">
                                    <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                                    <p><a href="{{ route('stroke')}}">Stroke (Brain Attack)</a></p>
                                </div>
                                <div class="box-list">
                                    <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                                    <p><a href="{{ route('vascular-conditions')}}">Vascular Conditions and Diseases</a></p>
                                </div>
                                <div class="box-list">
                                    <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                                    <p><a href="{{ route('preventing-cardiovascular')}}">Preventing Cardiovascular Disease</a></p>
                                </div>
                            </div>
                            <div class="content-block col-lg-12">
                                <h5 class="h5-md steelblue-color">Glossary-</h5>
                                <p>The cardiovascular system is made up of the heart and blood vessels. Cardiovascular
                                    diseases (CVD) include coronary heart disease (coronary artery disease, ischemic
                                    heart disease), stroke (brain attack), high blood pressure (hypertension), and
                                    rheumatic heart disease.</p>
                                <p>Millions of U.S. adults have one or more forms of CVD.</p>
                                <p>Each year in the U.S., cardiovascular diseases top the list of most serious health
                                    problems. Coronary heart disease and stroke are leading causes of death, and stroke
                                    is also a leading cause of serious, long-term disability.</p>

                                <p>Yet, studies show that nearly everyone can become heart healthy by following a
                                    healthy diet and participating in an appropriate exercise program; eliminating
                                    tobacco products; and following a routine health care plan.</p>
                            </div>
                        </div>

                    </div> <!-- END CONTENT BLOCK -->
                </div>
            </div> <!-- END DEPARTMENT DETAILS -->

            <!-- SIDEBAR  -->
            <div class="col-lg-4">
                @include('includes.health-sidebar')
            </div>

        </div> <!-- End row -->
    </div> <!-- End container -->
</div>

@stop