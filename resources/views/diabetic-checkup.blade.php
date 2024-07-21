@php($title = "Diabetic Health Checkup | Bombay Hospital Indore")
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
                            <li class="breadcrumb-item active" aria-current="page">Diabetic Health Checkup
                            </li>
                        </ol>
                    </nav>

                    <!-- Title -->
                    <h4 class="h4-sm steelblue-color">Diabetic Health Checkup</h4>

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

                        <!-- Text -->
                        <p>Diabetes Is not a disease it is a disorder, it just needs proper care &
                            attention!<br>A serious, life-long disorder and should not be ignored, if not
                            prevented at the right time can lead to other severe complications. About one-third
                            of the people do not know they have diabetes and are not under medical care.
                        </p>

                        <p>Individuals with diabetes are at increased risk for heart disease, blindness, kidney
                            failure and lower extremity amputations not related to injuries. Diabetes and its
                            complications occur among all ages. The burden of the disease, however, is heavier
                            among who:-</p>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Are over 45 years old.
                            </p>
                        </div>

                        <!-- CONTENT BOX #2 -->
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Are over weight.
                            </p>
                        </div>


                        <!-- CONTENT BOX #3 -->
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Have a family history of diabetes.
                            </p>
                        </div>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Have high cholesterol.
                            </p>
                        </div>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Have had gestational diabetes during pregnancy.
                            </p>
                        </div>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Have given birth to a baby that weighted more than 9 lbs.
                            </p>
                        </div>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Exercise less than 3 times a week.
                            </p>
                        </div>

                        <!-- Small Title -->
                        <h5 class="h5-md steelblue-color">Know about Diabetes :</h5>

                        <p>Diabetes is a most common disorder, Diabetes occurs when the body fails to process
                            sugar correctly. If left untreated can cause to many other serious problems.</p>

                        <p><b>Type I -</b></p>
                        <p>Diabetes Type I most often occurs before age 30, but may strike at any age. In this
                            type of diabetes there is a deficiency of insulin in the body. Only treatment is
                            insulin and regular follow up.</p>

                        <p><b>Type II -</b></p>
                        <p>Diabetes common amongst middle aged to elderly and obese this is by far more
                            prevalent variety. In this disorder there is a problem in action and not the quality
                            of insulin released. Requires oral medications and insulin’s at later stage.
                            Comprehensive multi specialty care can significantly bring down the incidences of
                            eye, kidney, foot, neurological diseases. Though cant be cured but quality of life
                            significantly improved.</p>

                        <p><b>Gestational Diabetes: -</b></p>
                        <p>Gestational diabetes (GD) affects about 4 percent of all pregnant women. It usually
                            appears during the second trimester and disappears after the birth of the baby. When
                            GD is not controlled, complications can affects both you and your baby. We can help
                            you work out a diet and exercise plan, and possibly medication. Having GD increases
                            your risk for developing it again during future pregnancies and also raises your
                            risk of Type II diabetes later in life.</p>

                        <h5 class="h5-md steelblue-color">Blood sugar levels and their meaning:</h5>

                        <p>According to American Diabetic Association (2007) Guidelines</p>

                        <p><b>[I] Fasting -</b></p>
                        <p>i.e. blood sugar levels empty stomach </p>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>110 mg% : implies normal individual with no immediate risk.
                            </p>
                        </div>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>110-126% impaired fasting glucose which implies that though the person is not
                                diabetic right but there is a risk of getting diabetes later on specially in
                                presence of other comorbid conditions like obesity and diabetes.
                            </p>
                        </div>

                        <p><b>[II] PP ( Post Prandial) -</b></p>
                        <p>i.e. blood sugar levels done 1 and a half hours after meals.</p>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>140 mg% : normal value
                            </p>
                        </div>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>140-200 mg% : impaired glucose tolerance. Though the person is not diabetic right
                                now but there is a risk of getting diabetes later on specially in presence of
                                other comorbid conditions like obesity and diabetes.
                            </p>
                        </div>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>200 mg% : patient is a diabetic.
                            </p>
                        </div>

                        <p>While you cannot change some of these factors, you can change others. Correct
                            treatment can help you live a long and healthy life.</p>

                        <p>At Bombay Hospital we have designed the chronic care programme for diabetes specially
                            to help you manage your diabetes for a better & healthier lifestyle.</p>

                        <h5 class="h5-md steelblue-color">The programme includes:</h5>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Consultation
                            </p>
                        </div>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Investigation &
                            </p>
                        </div>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Regular Follow ups.
                            </p>
                        </div>

                    </div> <!-- END CONTENT BLOCK -->

                    <!-- PRICING -->
                    <div id="pricing-2" class="pricing-section division">
                        <div class="row pricing-row">
                            <!-- PRICING TABLE #1 -->
                            <div class="col-md-12">

                                <div class="pricing-table mb-40">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">Tests</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Initial Evaluation</td>
                                                <td>FBS
                                                    <br>PPBS
                                                    <br>Lipid Profile
                                                    <br>HbA1c(Glycosylated Hb)
                                                    <br>Blood Urea
                                                    <br>S. Creatinine
                                                    <br>Urine Routine
                                                    <br>Urine Microalbuminural
                                                    <br>ECG Resting
                                                    <br>History & Physical Examination by General Physician
                                                    <br>Counceling By Dietician
                                                    <br>Ophthalmic Consultation
                                                </td>
                                            </tr>
                                            <tr>
                                                <th colspan="2">The cost of the package is Rs. 1,800/-</th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div> <!-- END PRICING TABLE #1 -->

                        </div> <!-- End row -->
                    </div> <!-- END PRICING -->

                    <div class="content-block mb-40">

                        <p>Tel. : 0731-2573942, 4771111</p>
                    </div>

                </div>
            </div> <!-- END DEPARTMENT DETAILS -->

            <!-- SIDEBAR  -->
            <aside id="sidebar" class="col-lg-4">


                <!-- TEXT WIDGET -->
                <div id="txt-widget" class="sidebar-div mb-50">

                    <!-- Title -->
                    <h5 class="h5-sm steelblue-color">Health Checkup Plans</h5>

                </div> <!-- END TEXT WIDGET -->


                <!-- SIDEBAR TABLE -->
                <div class="sidebar-table blue-table sidebar-div mb-50">
                    @include('includes.health-checkup-sidebar')
                </div> <!-- END SIDEBAR TABLE -->

            </aside> <!-- END SIDEBAR -->

        </div> <!-- End row -->
    </div> <!-- End container -->
</div>

@stop