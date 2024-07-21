@php($title = "Cardiovascular Disease Statistics | Bombay Hospital Indore")
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
                    <h4 class="h4-sm steelblue-color">Cardiovascular Disease Statistics</h4>

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
                        <!-- <h5 class="h5-md steelblue-color">The heart’s electrical system</h5> -->
                        <p>Each year, heart disease is at the top of the list of the country’s most serious health
                            problems. In fact, statistics show that cardiovascular disease is America’s leading health
                            problem, and the leading cause of death. Consider the most recent statistics released by the
                            American Heart Association:</p>


                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Approximately 84 million people in this country suffer from some form of cardiovascular
                                disease, causing about 2,200 deaths a day, averaging one death every 40 seconds.</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Almost one out of every three deaths results from cardiovascular disease.</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>The direct and indirect costs of cardiovascular disease and stroke are about $315
                                billion. This figure is increasing every year.</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>An estimated 15 million U.S. adults have coronary heart disease.</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Approximately 78 million U.S. adults have high blood pressure, and an estimated 20
                                million have diabetes.</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>It is estimated that an additional 8 million adults have undiagnosed diabetes and 87
                                million have pre-diabetes.</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Heart failure affects well over 5 million U.S. adults.</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Cardiovascular disease is the cause of more deaths than cancer, chronic lower respiratory
                                diseases, and accidents combined.</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>It is a myth that heart disease is a man’s disease. In fact, cardiovascular diseases are
                                the number one killer of women (and men).</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>About one-third of cardiovascular disease deaths occurred before age 75.</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>On average, someone in the U.S. suffers a stroke every 40 seconds.</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Stroke is a leading cause of serious, long-term disability that accounts for more than
                                half of all patients hospitalized for a neurological disease.</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Women have a higher lifetime risk of stroke than men.</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Approximately 20 percent of U.S. adults smoke cigarettes, costing $193 billion per year.
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>An estimated 68 percent of U.S. adults are overweight or obese.</p>
                        </div>

                        <p>When compared with previous trends, the cardiovascular disease death rates have declined, but
                            there are more people suffering from diabetes and obesity.</p>
                    </div> <!-- END CONTENT BLOCK -->
                </div>
            </div> <!-- END DEPARTMENT DETAILS -->

        </div> <!-- End row -->
    </div> <!-- End container -->
</div>

@stop