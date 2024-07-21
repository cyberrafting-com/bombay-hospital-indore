@php($title = "Anatomy of the Brain | Bombay Hospital Indore")
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
                    <h4 class="h4-sm steelblue-color">Anatomy of the Brain</h4>

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
                        <h5 class="h5-md steelblue-color">What is the central nervous system (CNS)?</h5>
                        <p>The CNS consists of the brain and spinal cord. The brain is an important organ that controls
                            thought, memory, emotion, touch, motor skills, vision, respirations, temperature, hunger,
                            and every process that regulates our body.</p>

                        <h5 class="h5-md steelblue-color">What are the different parts of the brain?</h5>
                        <p>The brain can be divided into the cerebrum, brainstem, and cerebellum:</p>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Cerebrum. The cerebrum (supratentorial or front of brain) is composed of the right and
                                left hemispheres. Functions of the cerebrum include: initiation of movement,
                                coordination of movement, temperature, touch, vision, hearing, judgment, reasoning,
                                problem solving, emotions, and learning.</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Brainstem. The brainstem (midline or middle of brain) includes the midbrain, the pons,
                                and the medulla. Functions of this area include: movement of the eyes and mouth,
                                relaying sensory messages (hot, pain, loud, etc.), hunger, respirations, consciousness,
                                cardiac function, body temperature, involuntary muscle movements, sneezing, coughing,
                                vomiting, and swallowing.</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Cerebellum. The cerebellum (infratentorial or back of brain) is located at the back of
                                the head. Its function is to coordinate voluntary muscle movements and to maintain
                                posture, balance, and equilibrium.</p>
                        </div>

                        <p><b>More specifically, other parts of the brain include the following:</b></p>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Pons. A deep part of the brain, located in the brainstem, the pons contains many of the
                                control areas for eye and face movements.</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Medulla. The lowest part of the brainstem, the medulla is the most vital part of the
                                entire brain and contains important control centers for the heart and lungs.</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Spinal cord. A large bundle of nerve fibers located in the back that extends from the
                                base of the brain to the lower back, the spinal cord carries messages to and from the
                                brain and the rest of the body.</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Frontal lobe. The largest section of the brain located in the front of the head, the
                                frontal lobe is involved in personality characteristics and movement. Recognition of
                                smell usually involves parts of the frontal lobe.</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Parietal lobe. The middle part of the brain, the parietal lobe helps a person to identify
                                objects and understand spatial relationships (where one’s body is compared to objects
                                around the person). The parietal lobe is also involved in interpreting pain and touch in
                                the body.</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Occipital lobe. The occipital lobe is the back part of the brain that is involved with
                                vision.</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Temporal lobe. The sides of the brain, these temporal lobes are involved in memory,
                                speech, musical rhythm, and some degree of smell recognition.</p>
                        </div>
                    </div> <!-- END CONTENT BLOCK -->
                </div>
            </div> <!-- END DEPARTMENT DETAILS -->

        </div> <!-- End row -->
    </div> <!-- End container -->
</div>

@stop