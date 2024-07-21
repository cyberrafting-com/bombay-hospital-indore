@php($title = "Admission Procedures | Bombay Hospital Indore")
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
                    <h4 class="h4-sm steelblue-color">Admission Procedures</h4>

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
                            <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/round-2.jpg')}}" alt="content-image">
                        </div>

                        <h5 class="h5-md steelblue-color">When you are coming for admission, please check the following:
                        </h5>


                        <!-- CONTENT BOX #1 -->
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Your Doctor’s referral letter.
                            </p>
                        </div>

                        <!-- CONTENT BOX #2 -->
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Booking Slip (for Maternity Cases).
                            </p>
                        </div>


                        <!-- CONTENT BOX #3 -->
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Passport (for NRI’s & Foreign Nationals).
                            </p>
                        </div>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Letter of guarantee from your Employer / Insurance Company, if part or all of your
                                medical expenses are to be borne by your Employer / Insurance Company. Your Test
                                results, x-rays and list of the medications which you are presently taking.
                            </p>
                        </div>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>DEPOSIT- It is suggested that the deposit in accordance with the schedule of charges to
                                be paid in advance, in order to avoid delay in completing admission formalities at the
                                time of admission. The Registration Staff will inform you of the required deposit which
                                may be paid by cash, cheque (made payable to Bombay Hospital Indore) or major Credit
                                Cards. No deposit is to be collected from emergency patients requiring admission to
                                ICU’s / ICCU and also from company tie-up patients.
                            </p>
                        </div>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>The patient or his relative has to duly fill and sign the admission form prior to the
                                admission.
                            </p>
                        </div>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>It is it be noted that the information given in the admission form should be correct as
                                the same is noted in the admission papers and is used for all practical purposes like
                                birth certificate, insurance claim, medico legal purposes etc.
                            </p>
                        </div>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Bombay Hospital Indore is a tertiary referral acute care private hospital equipped with
                                the latest medical technology and equipment. We offer a comprehensive range of medical
                                and surgical facilities for the total management of our patients under one roof. At
                                Bombay Hospital Indore, our foremost responsibility is to provide quality care and
                                service to our patients.
                            </p>
                        </div>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>We are committed to meet your needs and to make your stay in the hospital comfortable and
                                pleasant. Please do not hesitate to ask our staff for assistance. We wish you a pleasant
                                stay.
                            </p>
                        </div>

                        <!-- Small Title -->
                        <h5 class="h5-md steelblue-color">Important Guidelines</h5>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>All payments for services rendered to be made directly to Bombay Hospital Indore only.
                            </p>
                        </div>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>All hospitalization estimates (expenses) will be strictly given only by the accounts
                                department as per the recommendation of the treating consultants.
                            </p>
                        </div>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Deposits/Payments are to be made in Cash/Demand Drafts/Travellers cheques, All Credit
                                Cards are accepted (except American Express).
                            </p>
                        </div>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>All deposit receipts are provisional and should be surrendered at the time of discharge.
                            </p>
                        </div>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>No surcharge is levied on Heart Valves, Oxygenators, Pacemakers, Prosthesis and Stents,
                                Medicines purchased from Pharma Sales Department.
                            </p>
                        </div>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>If, during the stay of a patient, weekly bills that are submitted are not settled within
                                the prescribed time, the Hospital reserves the right to transfer the patient to the
                                General Ward.
                            </p>
                        </div>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Foreigners and NRI’s are supposed to deposit their Passports and other relevant documents
                                with the Hospital at the time of admission.
                            </p>
                        </div>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>In the unlikely event of a breakdown of the computer system before the final bill is
                                prepared, the patient will be required to make an additional deposit, approximating to
                                the final bill at the time of his/her discharge. The final settlement of the bill will
                                be made later on.
                            </p>
                        </div>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Medical Claims for reimbursement purposes will be attested by the Deputy Medical
                                Superintendent / Officer on Special Duty-Extension No. 4018. Incase of any extra/excess
                                medicines, kindly inform the ward-incharge for refund of the same before discharge.
                            </p>
                        </div>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Patients are advised not to keep any valuables, jewellery or other costly items with them
                                during their stay at the Hospital.
                            </p>
                        </div>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Patients/relatives are requested not to tip the staff as this is strictly prohibited.
                            </p>
                        </div>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Any employee demanding tips should be reported to the Ward Incharge or to a Medical
                                Administrator on call.
                            </p>
                        </div>

                        <h5 class="h5-md steelblue-color">Discharge Process</h5>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Discharge procedure starts only after approval of the treating Doctor & preparation of
                                discharge card.
                            </p>
                        </div>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Any excess Medicines (PSD) refunds & Blood Bank deposit refunds should be done one day
                                prior to discharge so as to save time. The nurse on the floor will help you in the
                                process.
                            </p>
                        </div>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>The nurse would prepare the discharge papers and send the ward boy along with relatives
                                to the discharge counter for preparing the final bill.
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>After settling the final bill amount the discharge counter clerk will give a discharge
                                intimation slip to the patients relative.
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Once the discharge intimation slip is received the nurse on the floor will hand over the
                                original set of discharge card & reports to the patients relatives. {For insurance
                                patients-Mediclam, TPA please contact the marketing dept located at 1st floor for
                                further guidance & assistance}
                            </p>
                        </div>


                    </div> <!-- END CONTENT BLOCK -->
                </div>
            </div> <!-- END DEPARTMENT DETAILS -->

            <!-- SIDEBAR  -->
            <aside id="sidebar" class="col-lg-4">
                @include('includes.in-patient-sidebar')
            </aside>

        </div> <!-- End row -->
    </div> <!-- End container -->
</div>

@stop