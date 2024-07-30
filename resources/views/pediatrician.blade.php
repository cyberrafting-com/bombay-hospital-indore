@php($title = 'Career - Post OF Pediatrician | Bombay Hospital Indore')
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
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Career</li>
                            </ol>
                        </nav>

                        <!-- Title -->
                        <h4 class="h4-sm steelblue-color">Career/ Pediatrician</h4>

                    </div>
                </div>
            </div> <!-- End row -->
        </div> <!-- End container -->
    </div> <!-- END BREADCRUMB -->

    <section id="services-7" class="bg-lightgrey wide-70 servicess-section division">
        <div class="container">


            <div class="row">
                <div class="col-lg-12 career-form mt-5">
                    <form method="post" action="{{ route('pediatrician-data') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="form_name" value="Pediatrician">

                        <div class="form-row">
                            <div class="form-group car col-lg-6">
                                <input type="text" id="name" name="name" value="{{ old('name') }}"
                                    placeholder="Full Name" required>
                            </div>
                            <div class="form-group car col-lg-6">
                                <input placeholder="DOB" class="textbox-n" type="text" onfocus="(this.type='date')"
                                    onblur="(this.type='text')" name="dob" id="date" value="{{ old('dob') }}"
                                    required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group car col-lg-12">
                                <textarea id="permanent-address" name="permanent_address" rows="2" placeholder="Permanent Address" required>{{ old('permanent_address') }}</textarea>

                            </div>
                            <div class="form-group car col-lg-12">
                                <textarea id="current-address" name="current_address" rows="2" placeholder="Current Address" required>{{ old('current_address') }}</textarea>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group car col-lg-6">

                                <select id="marital-status" name="marital-status" style="color: #626161 !important;"
                                    required>
                                    <option value="">Marital Status</option>
                                    <option value="married" {{ old('marital-status') == 'married' ? 'selected' : '' }}>
                                        Married</option>
                                    <option value="unmarried" {{ old('marital-status') == 'unmarried' ? 'selected' : '' }}>
                                        Unmarried</option>
                                </select>

                            </div>
                            <div class="form-group car col-lg-6">
                                <input type="text" id="spouse-details" name="spouse-details"  required
                                    value="{{ old('spouse-details') }}" placeholder="If married, details of Spouse">
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group car col-lg-6">
                                <input type="number" id="mobile" name="mobile" value="{{ old('mobile') }}"
                                    placeholder="Mobile No" required>
                            </div>
                            <div class="form-group car col-lg-6">
                                <input type="email" id="email" name="email" value="{{ old('email') }}"
                                    placeholder="E-Mail" required>

                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group car col-lg-6">
                                <input type="text" id="medical-registration" value="{{ old('medical_registration') }}"
                                    name="medical_registration"
                                    placeholder="Medical Council Registration No (MBBS/BDS/BHMS)" required>
                            </div>
                            <div class="form-group car col-lg-6">
                                <select id="state" name="state" style="color: #626161 !important;">
                                    <option value="">Select State Where Registered</option>
                                    <option value="Andhra Pradesh"
                                        {{ old('state') == 'Andhra Pradesh' ? 'selected' : '' }}>Andhra Pradesh</option>
                                    <option value="Arunachal Pradesh"
                                        {{ old('state') == 'Arunachal Pradesh' ? 'selected' : '' }}>Arunachal Pradesh
                                    </option>
                                    <option value="Assam" {{ old('state') == 'Assam' ? 'selected' : '' }}>Assam</option>
                                    <option value="Bihar" {{ old('state') == 'Bihar' ? 'selected' : '' }}>Bihar</option>
                                    <option value="Chhattisgarh" {{ old('state') == 'Chhattisgarh' ? 'selected' : '' }}>
                                        Chhattisgarh</option>
                                    <option value="Goa" {{ old('state') == 'Goa' ? 'selected' : '' }}>Goa</option>
                                    <option value="Gujarat" {{ old('state') == 'Gujarat' ? 'selected' : '' }}>Gujarat
                                    </option>
                                    <option value="Haryana" {{ old('state') == 'Haryana' ? 'selected' : '' }}>Haryana
                                    </option>
                                    <option value="Himachal Pradesh"
                                        {{ old('state') == 'Himachal Pradesh' ? 'selected' : '' }}>Himachal Pradesh
                                    </option>
                                    <option value="Jharkhand" {{ old('state') == 'Jharkhand' ? 'selected' : '' }}>Jharkhand
                                    </option>
                                    <option value="Karnataka" {{ old('state') == 'Karnataka' ? 'selected' : '' }}>Karnataka
                                    </option>
                                    <option value="Kerala" {{ old('state') == 'Kerala' ? 'selected' : '' }}>Kerala
                                    </option>
                                    <option value="Madhya Pradesh"
                                        {{ old('state') == 'Madhya Pradesh' ? 'selected' : '' }}>Madhya Pradesh</option>
                                    <option value="Maharashtra" {{ old('state') == 'Maharashtra' ? 'selected' : '' }}>
                                        Maharashtra</option>
                                    <option value="Manipur" {{ old('state') == 'Manipur' ? 'selected' : '' }}>Manipur
                                    </option>
                                    <option value="Meghalaya" {{ old('state') == 'Meghalaya' ? 'selected' : '' }}>
                                        Meghalaya</option>
                                    <option value="Mizoram" {{ old('state') == 'Mizoram' ? 'selected' : '' }}>Mizoram
                                    </option>
                                    <option value="Nagaland" {{ old('state') == 'Nagaland' ? 'selected' : '' }}>Nagaland
                                    </option>
                                    <option value="Odisha" {{ old('state') == 'Odisha' ? 'selected' : '' }}>Odisha
                                    </option>
                                    <option value="Punjab" {{ old('state') == 'Punjab' ? 'selected' : '' }}>Punjab
                                    </option>
                                    <option value="Rajasthan" {{ old('state') == 'Rajasthan' ? 'selected' : '' }}>
                                        Rajasthan</option>
                                    <option value="Sikkim" {{ old('state') == 'Sikkim' ? 'selected' : '' }}>Sikkim
                                    </option>
                                    <option value="Tamil Nadu" {{ old('state') == 'Tamil Nadu' ? 'selected' : '' }}>Tamil
                                        Nadu</option>
                                    <option value="Telangana" {{ old('state') == 'Telangana' ? 'selected' : '' }}>
                                        Telangana</option>
                                    <option value="Tripura" {{ old('state') == 'Tripura' ? 'selected' : '' }}>Tripura
                                    </option>
                                    <option value="Uttar Pradesh" {{ old('state') == 'Uttar Pradesh' ? 'selected' : '' }}>
                                        Uttar Pradesh</option>
                                    <option value="Uttarakhand" {{ old('state') == 'Uttarakhand' ? 'selected' : '' }}>
                                        Uttarakhand</option>
                                    <option value="West Bengal" {{ old('state') == 'West Bengal' ? 'selected' : '' }}>West
                                        Bengal</option>
                                </select>

                            </div>
                        </div>


                        <div class="form-group car">
                            <input type="number" id="remuneration" name="remuneration"  value="{{ old('remuneration') }}"
                                placeholder="Present Remuneration" required>
                        </div>

                        <h3 class="mt-2">Academic Qualification:</h3>
                        <div class="table-responsive">
                            <table class="table table-bordered academic">
                                <thead>
                                    <tr>
                                        <th class="text-center">Sr. No.</th>
                                        <th class="text-center">Degree/Diploma</th>
                                        <th class="text-center">College/Institute</th>
                                        <th class="text-center">Board/University</th>
                                        <th class="text-center">Year</th>
                                        <th class="text-center">% of Marks</th>
                                        <th class="text-center">Rank/Position</th>
                                        <th class="text-center">Attempt</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>SSC</td>
                                        <td><input type="text" name="ssc_college" value="{{ old('ssc_college') }}"
                                                class="form-control" placeholder="College/Institute" required></td>
                                        <td><input type="text" name="ssc_university"
                                                value="{{ old('ssc_university') }}" class="form-control"
                                                placeholder="Board/University" required></td>
                                        <td><input type="number" name="ssc_year" value="{{ old('ssc_year') }}"
                                                class="form-control" placeholder="Year" required></td>
                                        <td><input type="number" step="any" name="ssc_percentage"
                                                value="{{ old('ssc_percentage') }}" class="form-control"
                                                placeholder="% of Marks" required></td>
                                        <td><input type="text" name="ssc_position" value="{{ old('ssc_position') }}"
                                                class="form-control" placeholder="Rank/Position"></td>
                                        <td><input type="text" name="ssc_attempt" value="{{ old('ssc_attempt') }}"
                                                class="form-control" placeholder="Attempt"></td>
                                    </tr>


                                    <tr>
                                        <td>2</td>
                                        <td>HSC</td>
                                        <td><input type="text" name="hsc_college" value="{{ old('hsc_college') }}"
                                                class="form-control" placeholder="College/Institute" required></td>
                                        <td><input type="text" name="hsc_university"
                                                value="{{ old('hsc_university') }}" class="form-control"
                                                placeholder="Board/University" required></td>
                                        <td><input type="number" name="hsc_year" value="{{ old('hsc_year') }}"
                                                class="form-control" placeholder="Year" required></td>
                                        <td><input type="number" step="any" name="hsc_percentage"
                                                value="{{ old('hsc_percentage') }}" class="form-control"
                                                placeholder="% of Marks" required></td>
                                        <td><input type="text" name="hsc_position" value="{{ old('hsc_position') }}"
                                                class="form-control" placeholder="Rank/Position"></td>
                                        <td><input type="text" name="hsc_attempt" value="{{ old('hsc_attempt') }}"
                                                class="form-control" placeholder="Attempt"></td>
                                    </tr>


                                    <tr>
                                        <td>3</td>
                                        <td>MBBS</td>
                                        <td><input type="text" name="mbbs_college" value="{{ old('mbbs_college') }}"
                                                class="form-control" placeholder="College/Institute" required></td>
                                        <td><input type="text" name="mbbs_university"
                                                value="{{ old('mbbs_university') }}" class="form-control"
                                                placeholder="Board/University" required></td>
                                        <td><input type="number" name="mbbs_year" value="{{ old('mbbs_year') }}"
                                                class="form-control" placeholder="Year" required></td>
                                        <td><input type="number" step="any" name="mbbs_percentage"
                                                value="{{ old('mbbs_percentage') }}" class="form-control"
                                                placeholder="% of Marks" required></td>
                                        <td><input type="text" name="mbbs_position"
                                                value="{{ old('mbbs_position') }}" class="form-control"
                                                placeholder="Rank/Position"></td>
                                        <td><input type="text" name="mbbs_attempt" value="{{ old('mbbs_attempt') }}"
                                                class="form-control" placeholder="Attempt"></td>
                                    </tr>


                                    <tr>
                                        <td>4</td>
                                        <td>MD/MS/DNB </td>
                                        <td><input type="text" name="md_ms_dnb_college"
                                                value="{{ old('md_ms_dnb_college') }}" class="form-control"
                                                placeholder="College/Institute" required></td>
                                        <td><input type="text" name="md_ms_dnb_university"
                                                value="{{ old('md_ms_dnb_university') }}" class="form-control"
                                                placeholder="Board/University" required></td>
                                        <td><input type="number" name="md_ms_dnb_year"
                                                value="{{ old('md_ms_dnb_year') }}" class="form-control"
                                                placeholder="Year" required></td>
                                        <td><input type="number" step="any" name="md_ms_dnb_percentage"
                                                value="{{ old('md_ms_dnb_percentage') }}" class="form-control"
                                                placeholder="% of Marks" required></td>
                                        <td><input type="text" name="md_ms_dnb_position"
                                                value="{{ old('md_ms_dnb_position') }}" class="form-control"
                                                placeholder="Rank/Position"></td>
                                        <td><input type="text" name="md_ms_dnb_attempt"
                                                value="{{ old('md_ms_dnb_attempt') }}" class="form-control"
                                                placeholder="Attempt"></td>
                                    </tr>

                                </tbody>

                            </table>
                        </div>


                        <h3 class="mt-2">Experience:</h3>
                        <div class="table-responsive">
                            <table class="table table-bordered academic ">
                                <thead>
                                    <tr>
                                        <th class="text-center">Sr. No.</th>
                                        <th class="text-center">Designation </th>
                                        <th class="text-center">Duration with period</th>
                                        <th class="text-center">Institution </th>
                                        <th class="text-center">Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><input type="text" class="form-control"
                                                value="{{ old('designation_1') }}" name="designation_1"
                                                placeholder="Designation" required></td>
                                        <td><input type="text" class="form-control"
                                                value="{{ old('duration_period_1') }}" name="duration_period_1"
                                                placeholder="Duration" required></td>
                                        <td><input type="text" class="form-control"
                                                value="{{ old('institution_1') }}" name="institution_1"
                                                placeholder="Institution" required></td>
                                        <td><input type="text" class="form-control" value="{{ old('details_1') }}"
                                                name="details_1" placeholder="Details" required></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><input type="text" class="form-control" name="designation_2"
                                                value="{{ old('designation_2') }}" placeholder="Designation" required>
                                        </td>
                                        <td><input type="text" class="form-control" name="duration_period_2"
                                                value="{{ old('duration_period_2') }}" placeholder="Duration" required>
                                        </td>
                                        <td><input type="text" class="form-control" name="institution_2"
                                                value="{{ old('institution_2') }}" placeholder="Institution" required>
                                        </td>
                                        <td><input type="text" class="form-control" name="details_2"
                                                value="{{ old('details_2') }}" placeholder="Details" required></td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>

                        <div class="form-group car">
                            <textarea id="achievements" name="activities" rows="2" placeholder="Academic Activities & Publications">{{ old('activities') }}</textarea>
                        </div>
                        <div class="form-group car">
                            <textarea id="achievements" name="other_achievements" rows="2" placeholder="Any Other Achievements">{{ old('other_achievements') }}</textarea>
                        </div>
                        <div class="form-group car">
                            <input type="text" id="languages-known" name="languages_known"
                                value="{{ old('languages_known') }}" placeholder="Languages Known">
                        </div>

                        <h3>References:</h3>
                        <div class="table-responsive">
                            <table class="table table-bordered academic">
                                <thead>
                                    <tr>
                                        <th class="text-center">Sr. No.</th>
                                        <th class="text-center">Name</th>
                                        <th class="text-center">Address</th>
                                        <th class="text-center">Tel/Mobile No.</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><input type="text" class="form-control" name="ref_name_1"
                                                value="{{ old('ref_name_1') }}" placeholder="Name" required></td>
                                        <td><input type="text" class="form-control" name="ref_add_1"
                                                value="{{ old('ref_add_1') }}" placeholder="Address" required></td>
                                        <td><input type="number" class="form-control" name="ref_mob_1"
                                                value="{{ old('ref_mob_1') }}" placeholder="Tel/Mobile No." required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><input type="text" class="form-control" name="ref_name_2"
                                                value="{{ old('ref_name_2') }}" placeholder="Name" required></td>
                                        <td><input type="text" class="form-control" name="ref_add_2"
                                                value="{{ old('ref_add_2') }}" placeholder="Address" required></td>
                                        <td><input type="number" class="form-control" name="ref_mob_2"
                                                value="{{ old('ref_mob_2') }}" placeholder="Tel/Mobile No." required>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>


                        <p>All the above information are true to my knowledge. If appointed, I am willing to abide by the
                            rules and
                            regulations of Bombay Hospital as existing at present and as may be modified from time to time.
                        </p>

                        <div class="form-row">
                            <div class="form-group car col-lg-4">
                                <p class="today-date">Date : <span id="demo"></span> </p>
                            </div>
                            <div class="form-group car col-lg-4">
                                <!-- <label for="signature-name">Name:</label>
                                            <input type="text" id="signature-name" name="signature-name"> -->
                            </div>
                            <div class="form-group car col-lg-4">
                                <input type="text" id="signature-name" value="{{ old('signature_name') }}"
                                placeholder="Name" name="signature_name">
                            </div>
                        </div>
                        <div class="form-group submit-button text-center">
                            <button type="submit"
                                class="btn px-4 submit-button fs-6 blue-hover submit-button ms-auto mt-4">Submit</button>
                        </div>
                    </form>
                </div>
            </div>



        </div>
    </section>

@stop
