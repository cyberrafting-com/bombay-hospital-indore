@php($title = "Mr. Bherulal Gupta | Bombay Hospital Indore")
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
                            <li class="breadcrumb-item active" aria-current="page">Patient Stories</li>
                        </ol>
                    </nav>

                    <!-- Title -->
                    <h4 class="h4-sm steelblue-color">Mr. Bherulal Gupta</h4>

                </div>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</div> <!-- END BREADCRUMB -->

<section id="services-7" class="bg-lightgrey wide-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <img src="{{ asset('/resources/assets/images/patient/mr-bherulal.jpg')}}" class="img-fluid" />
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 transplant-facility-box">
                <div class="box-list">

                    <p>I had reached Bombay Hospital from my village after suffering for last one month and being
                        treated at various hospitals where no one could give me a definitive diagnosis for my disease. I
                        had heard about this hospital from my relatives and friends but was apprehensive about the cost
                        of treatment as well. I met Dr Manish Jain in OPD and he took a detailed history and did my
                        thorough clinical examination and suggested me to get admitted in general ward for my treatment
                        and investigations. I was suffering from high grade fever with vomiting and chest pain for last
                        one month and was unable to eat and getting very weak and having weight loss. He did limited and
                        relevant medical investigations and diagnosed me to be suffering from milliary tuberculosis with
                        mediastinal lymph nodes with ulcer invading food pipe(esophagus) and food leakage from food pipe
                        on investigating with CT Scan Chest and endoscopy. They immediately started me on relevant
                        medical treatment and feeding given through naso-gastric tube. Within 2-3 days I started
                        improving and after one month I am very much better now and my investigations are also
                        improving. I have gained 4kg weight and am able to take food orally.
                    </p>

                    <p>I really think that doctors are equivalent to god as Dr Manish Jain saved my life with the team
                        of nursing staff and extremely good care given to me. Also the cost of treatment was very less
                        and my apprehension was false regarding high cost of treatment in this hospital. I thank Bombay
                        Hospital team for saving my life and giving extremely good care at low cost to other poor
                        patients like me.</p>
                </div>
            </div>
        </div>
    </div>
</section>

@stop