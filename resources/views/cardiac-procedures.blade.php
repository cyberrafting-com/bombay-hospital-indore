@php($title = "Cardiac Procedures | Bombay Hospital Indore")
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
                            <li class="breadcrumb-item active" aria-current="page">Cardiology
                            </li>
                        </ol>
                    </nav>

                    <!-- Title -->
                    <h4 class="h4-sm steelblue-color">Cardiac Procedures</h4>

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
                        <!-- <h5 class="h5-md steelblue-color">What are vital signs?</h5> -->
                        <p>The following procedures are often used in the evaluation and treatment of cardiovascular
                            disease. Consult your physician or heart care professional for more specific information.
                        </p>

                        <h5 class="h5-md steelblue-color">Cardiac procedures for abnormal heart rhythms:</h5>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p><b>Catheter ablation:</b> This procedure uses radio waves or freezing to silence an
                                abnormal area in the heart’s electrical system, which is usually found during an
                                electrophysiology study.</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p><b>Permanent pacemaker:</b> A permanent pacemaker is inserted into the patient’s heart
                                and upper chest to provide a reliable heartbeat when the heart’s own rhythm is too slow
                                or irregular.</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p><b>Internal cardioverter defibrillator (ICD):</b> A defibrillator wire is inserted into
                                the patient’s heart and connected to an implanted device in the chest to send out a
                                small amount of electricity when needed to jolt the heart rhythm back to normal.</p>
                        </div>

                        <h5 class="h5-md steelblue-color">Cardiac procedures for heart disease:</h5>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p><b>Cardiac catheterization:</b> With this procedure, a catheter or tube is placed into
                                the heart through the leg or arm. Then, X-rays are taken after a contrast agent is
                                injected into an artery to locate the narrowing, occlusions, and other abnormalities of
                                specific arteries.</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p><b>Coronary angioplasty</b> With this procedure, a balloon is used to expand a narrowing
                                in the blood vessel to increase blood flow. Although angioplasty is performed in other
                                blood vessels elsewhere in the body, percutaneous coronary intervention (PCI) refers to
                                angioplasty in the coronary arteries to permit more blood flow into the heart. PCI is
                                also called percutaneous transluminal coronary angioplasty (PTCA). There are several
                                types of PCI procedures, including:</p>
                        </div>
                        <ul class="content--list">
                            <li><b>Balloon angioplasty:</b> A small balloon is inflated inside the blocked artery to
                                re-establish blood flow. This is often accompanied by stent placement.</li>
                            <li><b>Coronary artery stent:</b> A tiny mesh coil is expanded inside the blocked artery to
                                open the blocked area and is left in place to keep the artery open.</li>
                            <li><b>Atherectomy:</b> The blocked area inside the artery is “shaved” away by a tiny device
                                on the end of a catheter.</li>
                            <li><b>Laser angioplasty:</b> A laser is used to help “vaporize” the blockage in the artery.
                            </li>
                        </ul>


                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p><b>Coronary artery bypass:</b> Most commonly referred to as simply “bypass surgery,” or
                                CABG (pronounced cabbage) this surgery is often performed in people who have angina
                                (chest pain) and coronary artery disease (plaque buildup in the arteries). During the
                                surgery, a bypass is created by grafting a piece of another vessel above and below the
                                blocked area of a coronary artery, enabling blood to flow around the obstruction. Veins
                                are usually taken from the leg, and arteries from the chest or arm may also be used to
                                create a bypass graft.</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p><b>Intra-aortic balloon pump (IABP):</b> An IABP is a type of therapeutic device to help
                                your heart pump more blood. The device consists of a thin, flexible tube (a catheter)
                                with a long balloon at its tip (intra-aortic balloon, or IAB). At the other end, the
                                catheter attaches to a computer console. This console has a mechanism for inflating and
                                deflating the balloon at the proper time during your cardiac (heart) cycle. An IABP
                                allows blood to flow more easily into your coronary arteries to help give oxygen to the
                                heart muscle. It also allows your heart to pump more blood with each contraction.</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p><b>Ventricular assist device (VAD):</b> A VAD is a mechanical device used to take over
                                the pumping function for one or both of the heart’s ventricles, or pumping chambers. A
                                VAD may be necessary when heart failure progresses to the point that medications and
                                other treatments are no longer effective. A VAD can be used as a bridge to transplant
                                for a person who is waiting for a heart transplant.</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p><b>Heart transplant:</b> A surgical procedure for selected patients whose hearts are so
                                severely damaged that medications, procedures, and surgical repair cannot help. A
                                donated heart is transplanted into the patient to replace the damaged heart.</p>
                        </div>

                        <h5 class="h5-md steelblue-color">Cardiac procedures for valve disease:</h5>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p><b>Valvuloplasty:</b> A procedure in which a catheter with a large balloon is used to
                                open a heart valve that has become narrowed. The catheter is guided through the aorta to
                                the aortic valve, and once in place within the leaflets, the balloon is inflated until
                                the leaflets are loosened. The balloon is then deflated and withdrawn from the body.
                                This procedure may also be done on the mitral valve.</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p><b>Valve repair:</b> A surgical procedure in which a damaged valve is repaired by
                                loosening stiff valve leaflets or tightening loose valve leaflets.</p>
                        </div>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p><b>Valve replacement:</b> In this surgical procedure, a mechanical or tissue valve is
                                transplanted into the heart to replace the damaged valve.</p>
                        </div>
                    </div> <!-- END CONTENT BLOCK -->
                </div>
            </div> <!-- END DEPARTMENT DETAILS -->

        </div> <!-- End row -->
    </div> <!-- End container -->
</div>

@stop