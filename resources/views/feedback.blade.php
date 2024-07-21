@php($title = "Feedback / Suggestions | Bombay Hospital Indore")
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
                            <li class="breadcrumb-item active" aria-current="page">Feedback / Suggestions
                            </li>
                        </ol>
                    </nav>

                    <!-- Title -->
                    <h4 class="h4-sm steelblue-color">Feedback / Suggestions</h4>

                </div>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</div> <!-- END BREADCRUMB -->

<div id="department-page" class="wide-60 department-page-section division">
    <div class="container">
        <div class="row">
            <div class="feedback-form col-md-12" role="content">
                <div id="primary" class="site-content">
                    <div id="content" role="main" style="min-height:350px">

                        <div class="entry-content">
                            <fieldset>
                                <legend>Feedback / Suggestions</legend>
                                <form name="patient_feedback" id="patient_feedback" method="post" action="">

                                    <div class="row">
                                        <div class="col-lg-2">IP No.:</div>
                                        <div class="col-lg-4"><input type="text" name="ip_no" value="" id="ip_no"
                                                onkeypress="return checkIt(event)" maxlength="7">
                                        </div>
                                        <div class="col-lg-2">Patient Name*:</div>
                                        <div class="col-lg-4"><input type="text" name="patient_name" value=""
                                                id="patient_name" class="required"></div>
                                        <div class="clearfix"></div>
                                        <div class="col-lg-2">Bed No.:</div>
                                        <div class="col-lg-4"><input type="text" name="bed_no" value="" id="bed_no"
                                                onkeypress="return checkIt(event)" maxlength="4">
                                        </div>
                                        <div class="col-lg-2">Doctor Name:</div>
                                        <div class="col-lg-4"><input type="text" name="doctor_name" value=""
                                                id="doctor_name"></div>
                                        <div class="clearfix"></div>
                                        <div class="col-lg-2">Admission Date:</div>
                                        <div class="col-lg-4">
                                            <input type="date" id="datepicker" name="admission_date"
                                                class="hasDatepicker">
                                        </div>
                                        <div class="col-lg-2">Date Of Discharge:</div>
                                        <div class="col-lg-4">
                                            <input type="date" id="datepicker" name="admission_date"
                                                class="hasDatepicker">
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-lg-2">Email*:</div>
                                        <div class="col-lg-4"><input type="text" name="email" value="" id="email"
                                                class="required"></div>
                                        <div class="col-lg-2">Mobile*:</div>
                                        <div class="col-lg-4"><input type="text" name="mobile" value="" id="mobile"
                                                class="required" onkeypress="return checkIt(event)" maxlength="10">
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-lg-2">Address:</div>
                                        <div class="col-lg-4"><textarea name="address" id="address"></textarea>
                                        </div>
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-4"></div>
                                        <div class="clearfix"></div>

                                    </div>
                                    <p>&nbsp;</p>
                                    <div class="col-lg-12">
                                        We thank you for choosing Bombay Hospital for Providing services to
                                        you. This questionnaire is an on going survey conducted by us to
                                        solicit your opinion about hospital. Kindly spare some time to
                                        complete this questionnaire, as it will give us invaluable feedback
                                        to improve the services.
                                    </div>
                                    <p>&nbsp;</p>
                                    <div class="col-lg-12">
                                        <div class="overflow">
                                            <table align="center" width="100%" cellpadding="0" cellspacing="0"
                                                border="0" class="table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Details</th>
                                                        <th>Excellent</th>
                                                        <th>Good</th>
                                                        <th>Average</th>

                                                    </tr>

                                                    <tr>
                                                        <td>1</td>
                                                        <td>Medical Care</td>
                                                        <td align="center"><input type="radio" name="medical_care"
                                                                value="3" id="medical_care_excellent"></td>
                                                        <td align="center"><input type="radio" name="medical_care"
                                                                value="2" id="medical_care_good"></td>
                                                        <td align="center"><input type="radio" name="medical_care"
                                                                value="1" id="medical_care_average"></td>
                                                    </tr>

                                                    <tr>
                                                        <td>2</td>
                                                        <td>Consultants</td>
                                                        <td align="center"><input type="radio" name="consultants"
                                                                value="3" id="consultants_excellent"></td>
                                                        <td align="center"><input type="radio" name="consultants"
                                                                value="2" id="consultants_good"></td>
                                                        <td align="center"><input type="radio" name="consultants"
                                                                value="1" id="consultants_average"></td>
                                                    </tr>

                                                    <tr>
                                                        <td>3</td>
                                                        <td>Jr. Doctors</td>
                                                        <td align="center"><input type="radio" name="jr_doctors"
                                                                value="3" id="jr_doctors_excellent"></td>
                                                        <td align="center"><input type="radio" name="jr_doctors"
                                                                value="2" id="jr_doctors_good"></td>
                                                        <td align="center"><input type="radio" name="jr_doctors"
                                                                value="1" id="jr_doctors_average"></td>
                                                    </tr>

                                                    <tr>
                                                        <td>4</td>
                                                        <td>Nursing Care</td>
                                                        <td align="center"><input type="radio" name="nursing_care"
                                                                value="3" id="nursing_care_excellent"></td>
                                                        <td align="center"><input type="radio" name="nursing_care"
                                                                value="2" id="nursing_care_good"></td>
                                                        <td align="center"><input type="radio" name="nursing_care"
                                                                value="1" id="nursing_care_average"></td>
                                                    </tr>

                                                    <tr>
                                                        <td>5</td>
                                                        <td>Diagnostic Dept</td>
                                                        <td align="center"><input type="radio" name="diagnostic_dept"
                                                                value="3" id="diagnostic_dept_excellent"></td>
                                                        <td align="center"><input type="radio" name="diagnostic_dept"
                                                                value="2" id="diagnostic_dept_good"></td>
                                                        <td align="center"><input type="radio" name="diagnostic_dept"
                                                                value="1" id="diagnostic_dept_average"></td>
                                                    </tr>

                                                    <tr>
                                                        <td>6</td>
                                                        <td>Pharmacy</td>
                                                        <td align="center"><input type="radio" name="pharmacy" value="3"
                                                                id="pharmacy_excellent"></td>
                                                        <td align="center"><input type="radio" name="pharmacy" value="2"
                                                                id="pharmacy_good"></td>
                                                        <td align="center"><input type="radio" name="pharmacy" value="1"
                                                                id="pharmacy_average"></td>
                                                    </tr>

                                                    <tr>
                                                        <td>7</td>
                                                        <td>Housekeeping (Ayah / Ward boy)</td>
                                                        <td align="center"><input type="radio" name="housekeeping"
                                                                value="3" id="housekeeping_excellent"></td>
                                                        <td align="center"><input type="radio" name="housekeeping"
                                                                value="2" id="housekeeping_good"></td>
                                                        <td align="center"><input type="radio" name="housekeeping"
                                                                value="1" id="housekeeping_average"></td>
                                                    </tr>

                                                    <tr>
                                                        <td>8</td>
                                                        <td>Laundry Services</td>
                                                        <td align="center"><input type="radio" name="laundry" value="3"
                                                                id="laundry_excellent"></td>
                                                        <td align="center"><input type="radio" name="laundry" value="2"
                                                                id="laundry_good">
                                                        </td>
                                                        <td align="center"><input type="radio" name="laundry" value="1"
                                                                id="laundry_average"></td>
                                                    </tr>

                                                    <tr>
                                                        <td>9</td>
                                                        <td>Food Services</td>
                                                        <td align="center"><input type="radio" name="food_services"
                                                                value="3" id="food_services_excellent"></td>
                                                        <td align="center"><input type="radio" name="food_services"
                                                                value="2" id="food_services_good"></td>
                                                        <td align="center"><input type="radio" name="food_services"
                                                                value="1" id="food_services_average"></td>
                                                    </tr>

                                                    <tr>
                                                        <td>10</td>
                                                        <td>Security &amp; Lift Services</td>
                                                        <td align="center"><input type="radio" name="security" value="3"
                                                                id="security_excellent"></td>
                                                        <td align="center"><input type="radio" name="security" value="2"
                                                                id="security_good"></td>
                                                        <td align="center"><input type="radio" name="security" value="1"
                                                                id="security_average"></td>
                                                    </tr>

                                                    <tr>
                                                        <td>11</td>
                                                        <td>Maintenance</td>
                                                        <td align="center"><input type="radio" name="maintenance"
                                                                value="3" id="maintenance_excellent"></td>
                                                        <td align="center"><input type="radio" name="maintenance"
                                                                value="2" id="maintenance_good"></td>
                                                        <td align="center"><input type="radio" name="maintenance"
                                                                value="1" id="maintenance_average"></td>
                                                    </tr>

                                                    <tr>
                                                        <td>12</td>
                                                        <td>Admission Services</td>
                                                        <td align="center"><input type="radio" name="admission_services"
                                                                value="3" id="admission_services_excellent"><br>Less
                                                            than 1/2 hr</td>
                                                        <td align="center"><input type="radio" name="admission_services"
                                                                value="2" id="admission_services_good"><br>1 hr</td>
                                                        <td align="center"><input type="radio" name="admission_services"
                                                                value="1" id="admission_services_average"><br>more
                                                            than 1 hr</td>
                                                    </tr>

                                                    <tr>
                                                        <td>13</td>
                                                        <td>Discharge Services</td>
                                                        <td align="center"><input type="radio" name="discharge"
                                                                value="3" id="discharge_excellent"><br>Less than
                                                            1/2
                                                            hr</td>
                                                        <td align="center"><input type="radio" name="discharge"
                                                                value="2" id="discharge_good"><br>1 hr</td>
                                                        <td align="center"><input type="radio" name="discharge"
                                                                value="1" id="discharge_average"><br>more than 1
                                                            hr
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="mt-20 row">
                                        <div class="col-lg-2">Suggestions:</div>
                                        <div class="col-lg-10"><textarea name="suggestions" id="suggestions"
                                                maxlength="2000" rows="4"></textarea></div>


                                        <div class="clearfix"></div>
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-3"></div>
                                        <div class="col-lg-6">
                                            <p>&nbsp;</p><input type="button" name="Submit" value="Submit"
                                                id="SubmitPatientFeedbackBtn">
                                            <input type="hidden" name="redirect_url" value="feedback.php">
                                        </div>
                                    </div>

                                </form>
                            </fieldset>

                        </div><!-- .entry-content -->
                        </article><!-- #post -->

                        <div id="comments" class="comments-area">

                        </div><!-- #comments .comments-area -->
                    </div><!-- #content -->
                </div><!-- #primary -->
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</div>

@stop