@php($title = "The Orthopedic Treatment Team | Bombay Hospital Indore")
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
                            <li class="breadcrumb-item active" aria-current="page">Orthopedics
                            </li>
                        </ol>
                    </nav>

                    <!-- Title -->
                    <h4 class="h4-sm steelblue-color">The Orthopedic Treatment Team</h4>

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
                        <h5 class="h5-md steelblue-color">What is orthopedics?</h5>
                        <p>The word orthopedic comes from two Greek words:</p>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Ortho meaning straight</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Paedia meaning children</p>
                        </div>
                        <p>Orthopedic surgery is the branch of medicine concerned with diseases, injuries, and
                            conditions of the musculoskeletal system relating to the body’s muscles and skeleton, and
                            including the joints, ligaments, tendons, and nerves.</p>

                        <h5 class="h5-md steelblue-color">Who treats orthopedic conditions?</h5>
                        <p>Orthopedic conditions may be treated by your doctor and/or other medical specialists and
                            health are providers. Several doctors from different medical specialties may be involved in
                            the treatment at the same time. This multidisciplinary team approach is particularly
                            important in managing the symptoms of an orthopedic condition, especially as many symptoms
                            are chronic and change in severity over time. Some of the more common medical professionals
                            involved in the treatment of orthopedic conditions may include the following:</p>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p><b>Primary care doctor:</b> A primary care doctor is one who has specialized education
                                and training in general internal medicine, family practice, or another
                                first-level-of-care area. Primary care doctors are those who provide patients with
                                any/all of the following:</p>
                        </div>
                        <ul class="content--list">
                            <li>Routine health care (including annual physical examinations and immunizations)</li>
                            <li>Treatment for acute medical conditions</li>
                            <li>Initial care for conditions that may become more serious or chronic in nature</li>
                        </ul>

                        <p>While your primary care doctor may treat and/or diagnose your disease, he or she may refer
                            you to a specialist for more specialized treatment of certain aspects of a disease.</p>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p><b>Orthopedic surgeon:</b> The doctor who specializes in orthopedic surgery is called an
                                orthopedic surgeon, or sometimes, simply, an orthopedist. Orthopedists are educated in
                                the workings of the musculoskeletal system, which includes (but is not limited to)
                                diagnosing a bone, muscle, joint, tendon, or ligament condition or disorder, treating an
                                injury, providing rehabilitation suggestions for an affected area, and establishing
                                prevention protocols to minimize further damage to a diseased area or component of the
                                musculoskeletal system.<br>The orthopedist may have completed up to 14 years of formal
                                education. After becoming licensed to practice medicine, the orthopedic surgeon may
                                become board-certified by passing both oral and written examinations given by the
                                American Board of Orthopaedic Surgery. Many orthopedic surgeons choose to practice
                                general orthopedics, while others specialize in certain areas of the body (i.e., foot,
                                hand, shoulder, spine, hip, or knee), or in a specialized area of orthopedic care (i.e.,
                                sports medicine, trauma medicine). Some orthopedists may specialize in several areas and
                                may collaborate with other specialists, such as neurosurgeons or rheumatologists, in
                                caring for patients.</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p><b>Primary care sports medicine physician:</b> Primary care physician with extra
                                fellowship training in musculoskeletal injuries and other problems that affect athletes.
                                This type of physician can manage many orthopedic problems while also recognizing which
                                cases need surgery.</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p><b>Rheumatologist:</b> A rheumatologist is a doctor who specializes in the treatment of
                                arthritis and other rheumatic diseases that may affect joints, muscles, bones, skin, and
                                other tissues. Most rheumatologists have a background in internal medicine or pediatrics
                                and have received additional training in the field of rheumatology. Rheumatologists are
                                specially trained to identify many types of rheumatic diseases in their earliest stages,
                                including arthritis, many types of autoimmune diseases, musculoskeletal pain, and
                                disorders of the musculoskeletal system. In addition to four years of medical school and
                                three years of specialized training in internal medicine or pediatrics, a rheumatologist
                                has had an additional two or three years of specialized training in the field of
                                rheumatology. A rheumatologist may also be board certified by the American Board of
                                Internal Medicine.</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p><b>Physical therapist:</b> Physical therapy is the health profession that focuses on the
                                neuromuscular, musculoskeletal, and cardiopulmonary systems of the human body, as these
                                systems relate to human motion, health, and function.<br>Physical therapists, or PTs,
                                are very important members of the health care team. They evaluate and provide treatment
                                for persons with health problems resulting from injury, disease, or overuse of muscles,
                                ligaments, or tendons.<br>Physical therapists have an undergraduate degree in physical
                                therapy, and many have a master’s degree. In order to practice, all graduates must be
                                licensed by their state by passing a national certification examination.<br>Physical
                                therapists may practice in a variety of settings, including the following:</p>
                        </div>
                        <ul class="content--list">
                            <li>Hospitals</li>
                            <li>Rehabilitation centers</li>
                            <li>Home health agencies</li>
                            <li>Schools</li>
                            <li>Sports facilities</li>
                            <li>Community health centers</li>
                            <li>Private practice</li>
                        </ul>
                        <p>As related to orthopedic conditions, physical therapists provide comprehensive training that
                            includes, but is not limited to, the following:</p>
                        <ul class="content--list">
                            <li>Functional mobility</li>
                            <li>Balance and gait retraining</li>
                            <li>Soft-tissue mobilization</li>
                            <li>Body mechanics education</li>
                            <li>Wheelchair safety and management</li>
                            <li>Neuromuscular re-education</li>
                            <li>Exercise programming</li>
                            <li>Family education and training</li>
                            <li>Assistance with pain relief and management</li>
                            <li>Instruction in safe ambulation</li>
                            <li>Pre- and post-surgical rehabilitation</li>
                        </ul>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p><b>Occupational therapist:</b> Occupational therapy is a health care profession that uses
                                “occupation,” or purposeful activity, to help persons with physical, developmental, or
                                emotional disabilities lead independent, productive, and satisfying lives.<br>An
                                occupational therapist often coordinates the following in the care for the individual
                                with a debilitating condition, such as an orthopedic condition:</p>
                        </div>
                        <ul class="content--list">
                            <li>Evaluating children and adults with developmental or neuromuscular problems in order to
                                plan treatment activities that will help them grow mentally, socially, and physically
                            </li>
                            <li>Assisting children and adults in learning how to carry out daily tasks</li>
                            <li>Conducting group or individual treatment to help children and adults in a mental health
                                center learn to cope with daily activities</li>
                            <li>Recommending changes in layout and design of the home or school to allow children and
                                adults with injuries or disabilities greater access and mobility</li>
                        </ul>
                        <p>Occupational therapists work in a variety of different settings, including the following:</p>
                        <ul class="content--list">
                            <li>Hospitals</li>
                            <li>Rehabilitation centers</li>
                            <li>Schools</li>
                            <li>Home care agencies</li>
                            <li>Private practice</li>
                            <li>Government agencies</li>
                        </ul>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p><b>Physiatrist:</b> Physical medicine and rehabilitation, also known as physiatry, is a
                                medical specialty that involves the process of restoring lost abilities for a person who
                                has been disabled as a result of disease, disorder, or injury. Physiatry provides
                                integrated, multidisciplinary care aimed at recovery of the whole person by addressing
                                the patient’s physical, psychological, medical, vocational, and social needs. The doctor
                                who specializes in physical medicine and rehabilitation is called a physiatrist.</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p><b>Podiatrist:</b> A podiatrist specializes in foot care and is licensed to prescribe
                                medication and perform surgery.</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p><b>Nurses/nurse practitioners:</b> Nurse practitioners who specialize in the care of
                                orthopedic conditions may assist your doctor in providing care. In addition, these
                                nurses will help you to understand your treatment plan and can answer many of your
                                questions.</p>
                        </div>
                        <p>Depending on the specific condition involved, other doctors and health care professionals may
                            be involved in treating orthopedic conditions. For example, a neurologist or neurosurgeon
                            may assist in treating problems involving the spine because of involvement of the spinal
                            cord. Occupational therapists may be involved in treating conditions that require
                            rehabilitation. Occupational therapists often work in conjunction with physical therapists.
                        </p>
                    </div> <!-- END CONTENT BLOCK -->
                </div>
            </div> <!-- END DEPARTMENT DETAILS -->

        </div> <!-- End row -->
    </div> <!-- End container -->
</div>

@stop