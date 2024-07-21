@php($title = "Billing | Bombay Hospital Indore")
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
                            <li class="breadcrumb-item active" aria-current="page">In-Patient Guide
                            </li>
                        </ol>
                    </nav>

                    <!-- Title -->
                    <h4 class="h4-sm steelblue-color">Billing</h4>

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
                            <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/billing.jpg')}}"
                                alt="content-image">
                        </div>

                        <!-- CONTENT BOX #1 -->
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p><b>All payments for services rendered to be made directly to Bombay Hospital
                                    Indore only.</b>
                            </p>
                        </div>

                        <!-- CONTENT BOX #2 -->
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>All charges are as per the classes. In General Ward category : – Bed Charges –
                                Nil.
                            </p>
                        </div>


                        <!-- CONTENT BOX #3 -->
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>If a patient is transferred from a lower class to a higher class, all charges
                                applicable for the higher class will be charged from the date of admission
                                except bed charges. In case of ICCU & ICU the charges of the bed will be charged
                                for the higher class from the date of admission.
                            </p>
                        </div>

                        <!-- <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p><b>Surcharge for all the classes is @ 10%, for NRI and Foreign Nationals it is
                                    also @10%. However no Surcharge is Levied on Medicines (PSD) Heart Valves,
                                    Oxygenators, Pacemakers, Prosthesis and Stents. (Charges are subject to
                                    change without any prior notice.)</b>
                            </p>
                        </div> -->
                    </div> <!-- END CONTENT BLOCK -->
                </div>
            </div> <!-- END DEPARTMENT DETAILS -->

            <!-- SIDEBAR  -->
            <aside id="sidebar" class="col-lg-4">
                @include('includes.in-patient-sidebar')
            </aside>

            <div class="col-lg-12">
                <div class="txt-block pr-30">
                    <div class="content-block mb-40">
                        <div id="pricing-2" class="pricing-section division">
                            <div class="row pricing-row">


                                <!-- PRICING TABLE #1 -->
                                <div class="col-md-12">

                                    <!-- Plan Title  -->
                                    <h5 class="h5-md steelblue-color">Deposits / ICU Charges-</h5>

                                    <div class="pricing-table mb-40">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">PARTICULARS</th>
                                                    <th scope="col">SUIT ROOM (RS)</th>
                                                    <th scope="col">FIRST CLASS (RS)</th>
                                                    <th scope="col">PRIVATE (RS)</th>
                                                    <th scope="col">SEMI PRIVATE (RS)</th>
                                                    <th scope="col">GEN.WARD (RS)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Medical Care</th>
                                                    <td>40,000</td>
                                                    <td>35,000</td>
                                                    <td>30,000</td>
                                                    <td>20,000</td>
                                                    <td>15,000</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Surgical Care</th>
                                                    <td>45,000</td>
                                                    <td>40,000</td>
                                                    <td>35,000</td>
                                                    <td>25,000</td>
                                                    <td>20,000</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Angiography</th>
                                                    <td>37,000</td>
                                                    <td>32,000</td>
                                                    <td>24,000</td>
                                                    <td>16,000</td>
                                                    <td>14,000</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Angioplasty</th>
                                                    <td>2,40,000</td>
                                                    <td>2,20,000</td>
                                                    <td>1,70,000</td>
                                                    <td>1,30,000</td>
                                                    <td>1,10,000</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">CABG</th>
                                                    <td>3,55,000</td>
                                                    <td>3,30,000</td>
                                                    <td>2,80,000</td>
                                                    <td>2,00,000</td>
                                                    <td>1,80,000</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Kidney Transplant</th>
                                                    <td>7,00,000</td>
                                                    <td>6,50,000</td>
                                                    <td>5,50,000</td>
                                                    <td>4,00,000</td>
                                                    <td>3,50,000</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Joint Replacement</th>
                                                    <td>3,00,000</td>
                                                    <td>2,50,000</td>
                                                    <td>2,00,000</td>
                                                    <td>1,75,000</td>
                                                    <td>1,50,000</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">ICU (All)</th>
                                                    <td>70,000</td>
                                                    <td>60,000</td>
                                                    <td>50,000</td>
                                                    <td>45,000</td>
                                                    <td>40,000</td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div> <!-- END PRICING TABLE #1 -->

                                <div class="col-md-12">

                                    <!-- Plan Title  -->
                                    <h5 class="h5-md steelblue-color">Honorary Doctors Visit Fees w.e.f 01.04.22-</h5>

                                    <div class="pricing-table mb-40">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">PARTICULARS</th>
                                                    <th scope="col">SUIT ROOM (RS)</th>
                                                    <th scope="col">FIRST CLASS (RS)</th>
                                                    <th scope="col">PRIVATE (RS)</th>
                                                    <th scope="col">SEMI PRIVATE (RS)</th>
                                                    <th scope="col">GEN.WARD (RS)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">ROUTINE</th>
                                                    <td>2500</td>
                                                    <td>2300</td>
                                                    <td>1800</td>
                                                    <td>1450</td>
                                                    <td>1250</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">ICU / ICCU / RR</th>
                                                    <td>3000</td>
                                                    <td>2600</td>
                                                    <td>2200</td>
                                                    <td>1800</td>
                                                    <td>1500</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>


                                <div class="col-md-12">

                                    <!-- Plan Title  -->
                                    <h5 class="h5-md steelblue-color">Operation Theatre Charges (Per Hour)-</h5>

                                    <div class="pricing-table mb-40">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">PARTICULARS</th>
                                                    <th scope="col">SUIT ROOM (RS)</th>
                                                    <th scope="col">FIRST CLASS (RS)</th>
                                                    <th scope="col">PRIVATE (RS)</th>
                                                    <th scope="col">SEMI PRIVATE (RS)</th>
                                                    <th scope="col">GEN.WARD (RS)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Upto 1 Hour</th>
                                                    <td>19,100</td>
                                                    <td>19,100</td>
                                                    <td>16,000</td>
                                                    <td>13,600</td>
                                                    <td>12,800</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">1 to 2 Hours</th>
                                                    <td>31,900</td>
                                                    <td>31,900</td>
                                                    <td>25,500</td>
                                                    <td>22,400</td>
                                                    <td>20,800</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2 to 3 Hours</th>
                                                    <td>47,900</td>
                                                    <td>47,900</td>
                                                    <td>35,200</td>
                                                    <td>27,100</td>
                                                    <td>25,500</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3 to 4 Hours</th>
                                                    <td>55,000</td>
                                                    <td>55,000</td>
                                                    <td>41,000</td>
                                                    <td>28,900</td>
                                                    <td>28,900</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">4 to 5 Hours</th>
                                                    <td>68,600</td>
                                                    <td>68,600</td>
                                                    <td>50,600</td>
                                                    <td>35,600</td>
                                                    <td>35,600</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">5 to 6 Hours</th>
                                                    <td>74,400</td>
                                                    <td>74,400</td>
                                                    <td>62,500</td>
                                                    <td>41,600</td>
                                                    <td>41,600</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">6 to 7 Hours</th>
                                                    <td>86,700</td>
                                                    <td>86,700</td>
                                                    <td>63,800</td>
                                                    <td>44,000</td>
                                                    <td>44,000</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">7 to 8 Hours</th>
                                                    <td>107,400</td>
                                                    <td>107,400</td>
                                                    <td>78,800</td>
                                                    <td>55,000</td>
                                                    <td>55,000</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">8 to 10 Hours</th>
                                                    <td>1,32,600</td>
                                                    <td>1,32,600</td>
                                                    <td>98,500</td>
                                                    <td>68,800</td>
                                                    <td>68,800</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">10 to 12 Hours</th>
                                                    <td>1,32,000</td>
                                                    <td>1,32,000</td>
                                                    <td>97,600</td>
                                                    <td>67,100</td>
                                                    <td>67,100</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">12 to 15 Hours</th>
                                                    <td>1,22,650</td>
                                                    <td>1,22,650</td>
                                                    <td>90,750</td>
                                                    <td>67,750</td>
                                                    <td>67,750</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">CABG/Open Heart Surgery (Package)</th>
                                                    <td>54,300</td>
                                                    <td>54,300</td>
                                                    <td>39,400</td>
                                                    <td>23,700</td>
                                                    <td>12,500</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Kidney Transplant (Package)</th>
                                                    <td>58,300</td>
                                                    <td>58,300</td>
                                                    <td>42,900</td>
                                                    <td>24,200</td>
                                                    <td>19,500</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Miscellaneous</th>
                                                    <td>2,000</td>
                                                    <td>2,000</td>
                                                    <td>2,000</td>
                                                    <td>2,000</td>
                                                    <td>2,000</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="col-md-12">

                                    <!-- Plan Title  -->
                                    <h5 class="h5-md steelblue-color">Cardiac Procedures-</h5>

                                    <div class="pricing-table mb-40">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">PARTICULARS</th>
                                                    <th scope="col">SUIT ROOM (RS)</th>
                                                    <th scope="col">FIRST CLASS (RS)</th>
                                                    <th scope="col">PRIVATE (RS)</th>
                                                    <th scope="col">SEMI PRIVATE (RS)</th>
                                                    <th scope="col">GEN.WARD (RS)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Coronary Angiography (Including consumables)
                                                    </th>
                                                    <td>43,000</td>
                                                    <td>38,000</td>
                                                    <td>29,000</td>
                                                    <td>17,000</td>
                                                    <td>15,000</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="box-list">
                                    <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                                    <p>All payments for services rendered to be made directly to Bombay Hospital
                                        Indore only.
                                    </p>
                                </div>
                                <div class="box-list">
                                    <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                                    <p>* Consumables like stent, catheters, guide wires, medicines, etc. will be
                                        charged extra.
                                    </p>
                                </div>
                                <div class="box-list">
                                    <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                                    <p>Nursing home beds/Intensive Care beds and Investigations will be charged
                                        as per class of bed.
                                    </p>
                                </div>
                                <div class="box-list">
                                    <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                                    <p>Fees for private Nurses for the care of the patient, will be charged
                                        extra.<br><b>(Charges are subject to change without any prior
                                            notice.)</b>
                                    </p>
                                </div>

                                <div class="mt-20 col-md-12">

                                    <!-- Plan Title  -->
                                    <h5 class="h5-md steelblue-color">OPD Consulting (Private & Free)-</h5>

                                    <div class="pricing-table mb-40">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">PARTICULARS</th>
                                                    <th scope="col">CHARGES (RS)</th>
                                                    <th scope="col">TIMINGS</th>
                                                    <th scope="col">LOCATION</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Private Consulting Charges
                                                    </th>
                                                    <td>1600</td>
                                                    <td>9am to 6pm (Monday to Saturday)</td>
                                                    <td>First Floor</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Free OPD
                                                    </th>
                                                    <td>10</td>
                                                    <td>9am to 4pm (Monday to Saturday)</td>
                                                    <td>Ground Floor</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div> <!-- End row -->
                        </div>


                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>All consultants available on all working days, but surgeons may be in OT, so prior
                                appointment advisable.
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Free OPD is for economically deprived sections of society.
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>(Charges are subject to change without any prior notice.)
                            </p>
                        </div>

                        <!-- Small Title -->
                        <h5 class="mt-20 h5-md steelblue-color">Feedback Form</h5>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>In our strive to provide better services for patients, We would appreciate your feedback
                                on how we can improve to serve you better. Please take a few minutes while Medical
                                Administrator / Matrons are on ward rounds & also complete the opinion form & return it
                                to the ward staff or mail it to us later.
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Thank you for choosing Bombay Hospital Indore. We wish you & your family the best of
                                health always.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- End row -->
    </div> <!-- End container -->
</div>

@stop