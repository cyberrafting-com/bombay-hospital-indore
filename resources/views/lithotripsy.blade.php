@php($title = "Lithotripsy | Bombay Hospital Indore")
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
                            <li class="breadcrumb-item active" aria-current="page">Therapeutic
                            </li>
                        </ol>
                    </nav>

                    <!-- Title -->
                    <h4 class="h4-sm steelblue-color">Lithotripsy</h4>

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
                        <div class="content-block-img">
                            <img class="img-fluid" src="{{ asset('/resources/assets/images/services/lithotripsy.jpg')}}"
                                alt="content-image">
                        </div>

                        <p>Lithotripsy is an alternate procedure other than surgery to get rid of Kidney, Uretor and
                            Gall Bladder stones.
                            Lithotripsy is a procedure that uses shock waves to break up stones in the kidney, bladder,
                            or ureter (tube that carries urine from your kidneys to your bladder). After the procedure,
                            the tiny pieces of stones pass out of your body in your urine.</p>

                        <h5 class="h5-md steelblue-color">Description</h5>

                        <p>To get ready for the procedure, you will put on a hospital gown and lie on an exam table on
                            top of a soft, water-filled cushion.
                            You will be given medicine for pain or to help you relax before the procedure starts. You
                            will also be given antibiotics
                            When you have the procedure, you may be given general anesthesia for the procedure. You will
                            be asleep and pain-free.</p>

                        <p>High-energy shock waves, also called sound waves, will pass through your body until they hit
                            the kidney stones. If you are awake, You may feel a tapping feeling when this starts. The
                            waves break the stones into tiny pieces.</p>

                        <p>The lithotripsy procedure should take about 45 minutes to 1 hour.</p>
                        <p>A tube may be placed through your bladder or back into your kidney. This tube will drain
                            urine from your kidney until all the small pieces of stone pass out of your body. This may
                            be done before or after your lithotripsy treatment.</p>

                        <h5 class="h5-md steelblue-color">Why the Procedure is Performed</h5>

                        <p>Lithotripsy is used to remove kidney stones that are causing:</p>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Bleeding
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Damage to your kidney
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Pain
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Urinary tract infections
                            </p>
                        </div>

                        <p>Not all kidney stones can be removed using lithotripsy. The stone may also be removed with:</p>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>A tube (endoscope) inserted into the kidney through a small surgical cut.
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>A small lighted tube inserted through the bladder into ureters. Ureters are the tubes that connect the kidneys to the bladder.
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Open surgery (rarely needed)
                            </p>
                        </div>

                        <h5 class="h5-md steelblue-color">Risks</h5>

                        <p>Lithotripsy is safe most of the time. Talk to your doctor about possible complications such as:</p>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Bleeding around your kidney, which may need a blood transfusion
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Kidney infection
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Pieces of the stone block urine flow from your kidney (this may cause severe pain or damage to your kidney)
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Pieces of stone are left in your body (you may need more treatments)
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Ulcers in your stomach or small intestine
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Problems with kidney function after the procedure
                            </p>
                        </div>
                        <!-- <div class="box-list">
                                    <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                                    <p>Echocardiography
                                    </p>
                                </div> -->

                    </div> <!-- END CONTENT BLOCK -->
                </div>
            </div> <!-- END DEPARTMENT DETAILS -->

            <!-- SIDEBAR  -->
            <div class="col-lg-4">
                @include('includes.therapeutic-sidebar')
            </div>

        </div> <!-- End row -->
    </div> <!-- End container -->
</div>

@stop