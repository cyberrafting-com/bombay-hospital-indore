@php($title = "Appointment | Bombay Hospital Indore")
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
                            <li class="breadcrumb-item active" aria-current="page">Appointment
                            </li>
                        </ol>
                    </nav>

                    <!-- Title -->
                    <h4 class="h4-sm steelblue-color">Appointment</h4>

                </div>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</div> <!-- END BREADCRUMB -->

<div id="department-page" class="wide-60 department-page-section division">
    <?php /* <div class="container">
        <div class="row" style="justify-content: center;">
            <div class="col-lg-10 col-md-12 col-12">
                <form novalidate="novalidate">
                    <fieldset>
                        <legend>Book an appointment</legend>
                        <div class="form-floating mt-3">
                            <label for="message">Name</label><input type="text" id="name" name="name" data-vv-as="name"
                                placeholder="Name" class="form-control" aria-required="true" aria-invalid="false">
                            <!---->
                        </div>
                        <div class="form-floating mt-3">
                            <label for="message">Email</label><input type="text" id="email" name="email"
                                data-vv-as="email" placeholder="Email" class="form-control" aria-required="true"
                                aria-invalid="false">
                            <!---->
                        </div>
                        <div class="form-floating mt-3">
                            <label for="message">Contact Number</label><input type="text" id="mobile" name="mobile"
                                data-vv-as="mobile" placeholder="Mobile" class="form-control" aria-required="true"
                                aria-invalid="false">
                            <!---->
                        </div>
                        <div class="form-floating mt-3">
                            <label for="department_id">Department (Optional) </label><select id="department_id"
                                name="department_id" data-vv-as="department" class="form-select" aria-required="false"
                                aria-invalid="false">
                                <option selected="selected" value="">Choose...</option>
                                <option value="3">Cancer Surgery
                                </option>
                                <option value="4">Cardiac Surgery
                                </option>
                                <option value="33">Cardiology
                                </option>
                                <option value="8">Chest Disease
                                </option>
                                <option value="12">ENT
                                </option>
                                <option value="14">Gastroenterology
                                </option>
                                <option value="15">General Medicine
                                </option>
                                <option value="16">General Surgery
                                </option>
                                <option value="34">Medical Oncology
                                </option>
                                <option value="21">Nephrology
                                </option>
                                <option value="22">Neuro Surgery
                                </option>
                                <option value="23">Neurology
                                </option>
                                <option value="24">Obstetrics &amp; Gynaecology
                                </option>
                                <option value="35">Opthalmic
                                </option>
                                <option value="25">Orthopaedics
                                </option>
                                <option value="28">Plastic Surgery
                                </option>
                                <option value="30">Rheumatology
                                </option>
                                <option value="32">Urology
                                </option>
                            </select>
                            <!---->
                        </div>
                        <div class="form-floating mt-3">
                            <label for="doctor_id">Doctor (Optional) </label><select id="doctor_id" name="doctor_id"
                                data-vv-as="doctor" class="form-select">
                                <option selected="selected" value="">Choose...</option>
                                <option value="29">
                                    Dr. Aanchal Agarwal (Opthalmic)
                                </option>
                                <option value="42">
                                    Dr. Abhay Jain (Psychiatry)
                                </option>
                                <option value="28">
                                    Dr. Aditya Agarwal (Opthalmic)
                                </option>
                                <option value="19">
                                    Dr. Akash Tiwari (Medical Oncology)
                                </option>
                                <option value="31">
                                    Dr. Anand Gupta (Orthopaedics)
                                </option>
                                <option value="11">
                                    Dr. Anil Gwaliorkar (ENT)
                                </option>
                                <option value="39">
                                    Dr. Animesh Damani (Plastic Surgery)
                                </option>
                                <option value="23">
                                    Dr. Ankit Gupta (Neuro Surgery)
                                </option>
                                <option value="22">
                                    Dr. Ashish Dwivedi (Neuro Surgery)
                                </option>
                                <option value="30">
                                    Dr. Ashutosh Agrawal (Opthalmic)
                                </option>
                                <option value="16">
                                    Dr. Ashutosh Soni (General Surgery)
                                </option>
                                <option value="24">
                                    Dr. Atul Taparia (Neurology)
                                </option>
                                <option value="9">
                                    Dr. Avinash Jain (Chest Disease)
                                </option>
                                <option value="18">
                                    Dr. Aviral Jain (General Surgery)
                                </option>
                                <option value="8">
                                    Dr. Deepak Bansal (Chest Disease)
                                </option>
                                <option value="26">
                                    Dr. Devendra Patil (Obstetrics &amp; Gynaecology)
                                </option>
                                <option value="12">
                                    Dr. Govind Gourh (ENT)
                                </option>
                                <option value="5">
                                    Dr. Idris Khan (Cardiology)
                                </option>
                                <option value="25">
                                    Dr. Kavita Ghadale (Obstetrics &amp; Gynaecology)
                                </option>
                                <option value="4">
                                    Dr. Kshitij Dubey (Cardiac Surgery)
                                </option>
                                <option value="41">
                                    Dr. Mahendra Gupta (Plastic Surgery)
                                </option>
                                <option value="14">
                                    Dr. Manish Jain (General Medicine)
                                </option>
                                <option value="33">
                                    Dr. Manish Ladhania (Orthopaedics)
                                </option>
                                <option value="38">
                                    Dr. Mayur Maheshwari (Paediatrics Surgery)
                                </option>
                                <option value="10">
                                    Dr. Meena Agrawal (ENT)
                                </option>
                                <option value="3">
                                    Dr. Mukesh Modh (Cardiac Surgery)
                                </option>
                                <option value="46">
                                    Dr. Nupoor Acharya (Rheumatology)
                                </option>
                                <option value="21">
                                    Dr. OmPrakash Rathi (Nephrology)
                                </option>
                                <option value="7">
                                    Dr. Paritosh Rajput (Cardiology)
                                </option>
                                <option value="44">
                                    Dr. Pritesh Shrimali (Urology)
                                </option>
                                <option value="6">
                                    Dr. Raj Sharma (Cardiology)
                                </option>
                                <option value="20">
                                    Dr. Rajesh Bharani (Nephrology)
                                </option>
                                <option value="1">
                                    Dr. Rajesh Gujrati (Cancer Surgery)
                                </option>
                                <option value="37">
                                    Dr. Rakesh Shukla (Paediatrics Surgery)
                                </option>
                                <option value="32">
                                    Dr. Rashid Hasan (Orthopaedics)
                                </option>
                                <option value="13">
                                    Dr. Ravi Rathi (Gastroenterology)
                                </option>
                                <option value="36">
                                    Dr. Ruchira Pahare (Paediatrics Surgery)
                                </option>
                                <option value="17">
                                    Dr. Sandeep Rathore (General Surgery)
                                </option>
                                <option value="35">
                                    Dr. Sanjeev Asati (Orthopaedics)
                                </option>
                                <option value="2">
                                    Dr. Suyash Agrawal (Cancer Surgery)
                                </option>
                                <option value="34">
                                    Dr. Varun Chouhan (Orthopaedics)
                                </option>
                                <option value="45">
                                    Dr. Vipin Sharma (Urology)
                                </option>
                                <option value="27">
                                    Dr. Vivek Bhandari (Opthalmic)
                                </option>
                                <option value="43">
                                    Dr. Vivek Jha (Urology)
                                </option>
                                <option value="15">
                                    Dr. Vivek Sullere (General Medicine)
                                </option>
                                <option value="40">
                                    Dr. Yogesh Tatwade (Plastic Surgery)
                                </option>
                            </select>
                            <!---->
                        </div>
                        <div class="form-floating mt-3"><label for="appointment_date">Choose Appointment
                                Date</label><input type="date" name="appointment_date" data-vv-as="appointment date"
                                min="2023-03-03" value="2023-03-03" pattern="\d{4}-\d{2}-\d{2}" id="appointment_date"
                                placeholder="Appointment Date" onkeydown="return false" class="form-control"
                                aria-required="true" aria-invalid="false">
                            <!---->
                        </div>
                        <div class="form-floating mt-3">
                            <label for="message">Message</label><textarea name="message"
                                placeholder="Leave a message here" id="message" data-vv-as="message"
                                class="form-control" aria-required="true" aria-invalid="false"
                                style="height: 100px;"></textarea>
                            <!---->
                        </div> <button type="submit" class="btn px-4 fs-6 btn-outline-danger ms-auto mt-3">Submit
                        </button>
                    </fieldset>
                </form>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container --> */?>
    <iframe src="https://bombayhospitalindore.com/appointment/doctor_appointment.php" style="    margin: 0;
    padding: 0;
    width: 100%;
    height: 100vh;
    border: 0;"></iframe>
</div>

@stop