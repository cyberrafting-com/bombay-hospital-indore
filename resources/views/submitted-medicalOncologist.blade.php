@php($title = 'Career -  Post OF Medical Oncologist | Bombay Hospital Indore')
@section('meta_desc') @endsection

@extends('layouts.default')
@section('content')

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
                        <h4 class="h4-sm steelblue-color">Career/ Medical Oncologist</h4>

                    </div>
                </div>
            </div> <!-- End row -->
        </div> <!-- End container -->
    </div> <!-- END BREADCRUMB -->

    <section id="services-7" class="bg-lightgrey wide-70 servicess-section division">
        <div class="container">


            <div class="row">
                <div class="col-lg-12 career-form mt-5">
                    <form>

                        <div class="form-row">
                            <div class="form-group car col-lg-12"
                                style="display: flex; justify-content: space-between; align-items: center;">
                                <div style="flex: 1; display: flex; align-items: center;">
                                    <label for="name" style="margin-right: 10px; min-width: 100px;">Name:</label>
                                    <input type="text" id="name" name="name" placeholder="Full Name"
                                        value="{{ $personal_information->name }}" readonly
                                        style="border:none ; border-bottom: 1px solid rgb(193, 190, 190) ;  outline: none;">
                                </div>
                                <div style="flex: 1; display: flex; align-items: center;">
                                    <label for="date" style="margin-right: 10px; min-width: 100px;">DOB:</label>
                                    <input placeholder="DOB" class="textbox-n" type="text"
                                        value="{{ $personal_information->dob }}" onfocus="(this.type='date')"
                                        onblur="(this.type='text')" name="dob" id="date" readonly
                                        style="border:none ; border-bottom: 1px solid rgb(193, 190, 190) ;  outline: none;">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group car col-lg-12" style="display: flex; align-items: center;">
                                <label for="permanent-address" style="margin-right: 10px; min-width: 150px;">Permanent
                                    Address:</label>
                                <textarea id="permanent-address" name="permanent_address" rows="2" placeholder="Permanent Address" readonly
                                    style="flex: 1;">{{ $personal_information->permanent_address }}</textarea>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group car col-lg-12" style="display: flex; align-items: center;">
                                <label for="current-address" style="margin-right: 10px; min-width: 150px;">Current
                                    Address:</label>
                                <textarea id="current-address" name="current_address" rows="2" placeholder="Current Address" readonly
                                    style="flex: 1;">{{ $personal_information->current_address }}</textarea>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group car col-lg-6" style="display: flex; align-items: center;">
                                <label for="marital_status" style="margin-right: 10px; min-width: 150px;">Marital
                                    Status:</label>
                                <input type="text" name="marital_status" readonly
                                    value="{{ $personal_information->marital_status }}" style="flex: 1;">
                            </div>
                            <div class="form-group car col-lg-6" style="display: flex; align-items: center;">
                                <label for="spouse-details" style="margin-right: 10px; min-width: 200px;">If married,
                                    details of Spouse:</label>
                                <input type="text" id="spouse-details" name="spouse-details" readonly
                                    placeholder="If married, details of Spouse"
                                    value="{{ $personal_information->spouse_details }}" style="flex: 1;">
                            </div>
                        </div>



                        <div class="form-row">
                            <div class="form-group car col-lg-6" style="display: flex; align-items: center;">
                                <label for="mobile" style="margin-right: 10px; min-width: 150px;">Mobile No:</label>
                                <input type="number" id="mobile" name="mobile" placeholder="Mobile No" readonly
                                    value="{{ $personal_information->mobile }}" style="flex: 1;">
                            </div>
                            <div class="form-group car col-lg-6" style="display: flex; align-items: center;">
                                <label for="email" style="margin-right: 10px; min-width: 150px;">E-Mail:</label>
                                <input type="email" id="email" name="email" placeholder="E-Mail" readonly
                                    value="{{ $personal_information->email }}" style="flex: 1;">
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group car col-lg-6" style="display: flex; align-items: center;">
                                <label for="medical-registration" style="margin-right: 10px; min-width: 250px;">Medical
                                    Council Registration No (MBBS/BDS/BHMS):</label>
                                <input type="text" id="medical-registration" name="medical_registration"
                                    placeholder="Medical Council Registration No (MBBS/BDS/BHMS)" readonly
                                    value="{{ $personal_information->medical_registration }}" style="flex: 1;">
                            </div>
                            <div class="form-group car col-lg-6" style="display: flex; align-items: center;">
                                <label for="state" style="margin-right: 10px; min-width: 100px;">State:</label>
                                <input type="text" readonly name="state" value="{{ $personal_information->state }}"
                                    style="flex: 1;">
                            </div>
                        </div>

                        <div class="form-group car" style="display: flex; align-items: center;">
                            <label for="remuneration" style="margin-right: 10px; min-width: 200px;">Present
                                Remuneration:</label>
                            <input type="text" id="remuneration" value="{{ $personal_information->remuneration }}"
                                name="remuneration" placeholder="Present Remuneration" readonly style="flex: 1;">
                        </div>

                        <h3>Academic Qualification:</h3>
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
                                    @foreach ($personal_information->educationDetails as $education)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $education->education_level }}</td>
                                            <td>{{ $education->college }}</td>
                                            <td>{{ $education->university }}</td>
                                            <td>{{ $education->year }}</td>
                                            <td>{{ $education->marks }}</td>
                                            <td>{{ $education->position }}</td>
                                            <td>{{ $education->attempt }}</td>
                                        </tr>
                                    @endforeach
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
                                        <td><input type="text" class="form-control" name="designation_1"
                                                placeholder="Designation"
                                                value="{{ $personal_information->designation_1 }}" readonly></td>
                                        <td><input type="text" class="form-control" name="duration_period_1"
                                                placeholder="Duration"
                                                value="{{ $personal_information->duration_period_1 }}" readonly></td>
                                        <td><input type="text" class="form-control" name="institution_1"
                                                placeholder="Institution"
                                                value="{{ $personal_information->institution_1 }}" readonly></td>
                                        <td><input type="text" class="form-control" name="details_1"
                                                placeholder="Details" value="{{ $personal_information->details_1 }}"
                                                readonly></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><input type="text" class="form-control" name="designation_2"
                                                placeholder="Designation"
                                                value="{{ $personal_information->designation_2 }}" readonly></td>
                                        <td><input type="text" class="form-control" name="duration_period_2"
                                                placeholder="Duration"
                                                value="{{ $personal_information->duration_period_2 }}" readonly></td>
                                        <td><input type="text" class="form-control" name="institution_2"
                                                placeholder="Institution"
                                                value="{{ $personal_information->institution_2 }}" readonly></td>
                                        <td><input type="text" class="form-control" name="details_2"
                                                placeholder="Details" value="{{ $personal_information->details_2 }}"
                                                readonly></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="form-group car" style="display: flex; align-items: center;">
                            <label for="remuneration" style="margin-right: 10px; min-width: 200px;">Academic Activities &
                                Publications:</label>
                            <textarea id="achievements" name="activities" rows="2" readonly
                                placeholder="Academic Activities & Publications">{{ $personal_information->activities }}</textarea>

                        </div>
                        <div class="form-group car" style="display: flex; align-items: center;">
                            <label for="remuneration" style="margin-right: 10px; min-width: 200px;">Any Other
                                Achievements:</label>
                            <textarea id="achievements" name="other_achievements" rows="2" readonly placeholder="Any Other Achievements">{{ $personal_information->other_achievements }}</textarea>
                        </div>
                        <div class="form-group car" style="display: flex; align-items: center;">
                            <label for="remuneration" style="margin-right: 10px; min-width: 200px;">Languages
                                Known:</label>
                            <input type="text" id="languages-known" name="languages_known" readonly
                                placeholder="Languages Known" value="{{ $personal_information->languages_known }}">
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
                                                placeholder="Name" readonly
                                                value="{{ $personal_information->ref_name_1 }}"></td>
                                        <td><input type="text" class="form-control" name="ref_add_1"
                                                placeholder="Address" readonly
                                                value="{{ $personal_information->ref_add_1 }}"></td>
                                        <td><input type="text" class="form-control" name="ref_mob_1"
                                                placeholder="Tel/Mobile No." readonly
                                                value="{{ $personal_information->ref_mob_1 }}"></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><input type="text" class="form-control" name="ref_name_2"
                                                placeholder="Name" readonly
                                                value="{{ $personal_information->ref_name_2 }}"></td>
                                        <td><input type="text" class="form-control" name="ref_add_2"
                                                placeholder="Address" readonly
                                                value="{{ $personal_information->ref_add_2 }}"></td>
                                        <td><input type="text" class="form-control" name="ref_mob_2"
                                                placeholder="Tel/Mobile No." readonly
                                                value="{{ $personal_information->ref_mob_2 }}"></td>
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

                            </div>
                            <div style="flex: 1; display: flex; align-items: center;">
                                <label for="name" style="margin-right: 10px; min-width: 100px;">Name:</label>
                                <input type="text" id="signature-name" readonly placeholder="Name"
                                    name="signature_name" value="{{ $personal_information->name_2 }}"
                                    style="border:none ; border-bottom: 1px solid rgb(193, 190, 190) ;  outline: none;">
                            </div>
                        </div>
                        {{-- <div class="form-group submit-button text-center">
                            <button type="submit"
                                class="btn px-4 submit-button fs-6 blue-hover submit-button ms-auto mt-4">Submit</button>
                        </div> --}}
                    </form>
                </div>
            </div>



        </div>
    </section>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            alert("Thank you for submitting.");

            // Redirect to home page after a short delay
            setTimeout(function() {
                window.location.href = "{{ route('home') }}";
            }, 5000); // 5000 milliseconds = 5 seconds delay
        });
    </script>


@stop
