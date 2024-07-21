@php($title = "Menstrual Conditions | Bombay Hospital Indore")
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
                            <li class="breadcrumb-item active" aria-current="page">Gynecology and Obstetrics
                            </li>
                        </ol>
                    </nav>

                    <!-- Title -->
                    <h4 class="h4-sm steelblue-color">Menstrual Conditions</h4>

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
                        <p><b>Endometrium-</b> The lining of the uterus.</p>
                        <p><b>Uterus-</b> Also called the womb, the uterus is a hollow, pear-shaped organ located in a
                            woman’s lower abdomen, between the bladder and the rectum.</p>
                        <p><b>Ovaries-</b> Two female reproductive organs located in the pelvis.</p>
                        <p><b>Fallopian tubes-</b> Carry eggs from the ovaries to the uterus.</p>
                        <p><b>Cervix-</b> The lower, narrow part of the uterus (womb) located between the bladder and
                            the rectum. It forms a canal that opens into the vagina, which leads to the outside of the
                            body.</p>
                        <p><b>Vagina-</b> The passageway through which fluid passes out of the body during menstrual
                            periods. It is also called the “birth canal.” The vagina connects the cervix (the opening of
                            the womb, or uterus) and the vulva (the external genitalia).</p>
                        <p><b>Vulva-</b> The external portion of the female genital organs.</p>
                    </div> <!-- END CONTENT BLOCK -->
                </div>
            </div> <!-- END DEPARTMENT DETAILS -->

        </div> <!-- End row -->
    </div> <!-- End container -->
</div>

@stop