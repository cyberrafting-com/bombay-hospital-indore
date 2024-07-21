@php($title = "Career -  Post OF Intensivist | Bombay Hospital Indore")
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
                            <li class="breadcrumb-item active" aria-current="page">Career</li>
                        </ol>
                    </nav>

                    <!-- Title -->
                    <h4 class="h4-sm steelblue-color">Career/ Intensivist</h4>

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
                        <div class="form-group car col-lg-6">
                            <input type="text" id="name" name="name" placeholder="Full Name" required>
                        </div>
                        <div class="form-group car col-lg-6">
                            <input placeholder="DOB" class="textbox-n" type="text" onfocus="(this.type='date')" onblur="(this.type='text')"  name="dob" id="date" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group car col-lg-12">
                            <textarea id="permanent-address" name="permanent-address" rows="2" placeholder="Permanent Address" required></textarea>
                        </div>
                        <div class="form-group car col-lg-12">
                            <textarea id="current-address" name="current-address" rows="2" placeholder="Current Address" required></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group car col-lg-6">
                        <select id="marital-status" name="marital-status"  style="color:  #626161 !important;" required>
                        <option value="">Marital Status</option>
                        <option value="married">Married</option>
                        <option value="unmarried">Unmarried</option>
                    </select>
                        </div>
                        <div class="form-group car col-lg-6">
                            <input type="text" id="spouse-details" name="spouse-details" placeholder="If married, details of Spouse">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group car col-lg-6">
                            <input type="text" id="mobile" name="mobile" placeholder="Mobile No" required>
                        </div>
                        <div class="form-group car col-lg-6">
                            <input type="email" id="email" name="email" placeholder="E-Mail" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group car col-lg-6">
                            <input type="text" id="medical-registration" name="medical-registration" placeholder="Medical Council Registration No (MBBS/BDS/BHMS)" required>
                        </div>
                        <div class="form-group car col-lg-6">
                        <select id="state" name="state" style="color:  #626161 !important;">
                                <option value="">Select State Where Registered</option>
                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                <option value="Assam">Assam</option>
                                <option value="Bihar">Bihar</option>
                                <option value="Chhattisgarh">Chhattisgarh</option>
                                <option value="Goa">Goa</option>
                                <option value="Gujarat">Gujarat</option>
                                <option value="Haryana">Haryana</option>
                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                <option value="Jharkhand">Jharkhand</option>
                                <option value="Karnataka">Karnataka</option>
                                <option value="Kerala">Kerala</option>
                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                <option value="Maharashtra">Maharashtra</option>
                                <option value="Manipur">Manipur</option>
                                <option value="Meghalaya">Meghalaya</option>
                                <option value="Mizoram">Mizoram</option>
                                <option value="Nagaland">Nagaland</option>
                                <option value="Odisha">Odisha</option>
                                <option value="Punjab">Punjab</option>
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Sikkim">Sikkim</option>
                                <option value="Tamil Nadu">Tamil Nadu</option>
                                <option value="Telangana">Telangana</option>
                                <option value="Tripura">Tripura</option>
                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                <option value="Uttarakhand">Uttarakhand</option>
                                <option value="West Bengal">West Bengal</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group car">
                        <input type="text" id="remuneration" name="remuneration" placeholder="Present Remuneration" required>
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
                                    <td><input type="text" class="form-control" placeholder="College/Institute" required></td>
                                    <td><input type="text" class="form-control" placeholder="Board/University" required></td>
                                    <td><input type="text" class="form-control" placeholder="Year" required></td>
                                    <td><input type="text" class="form-control" placeholder="% of Marks" required></td>
                                    <td><input type="text" class="form-control" placeholder="Rank/Position"></td>
                                    <td><input type="text" class="form-control" placeholder="Attempt"></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>HSC</td>
                                    <td><input type="text" class="form-control" placeholder="College/Institute" required></td>
                                    <td><input type="text" class="form-control" placeholder="Board/University" required></td>
                                    <td><input type="text" class="form-control" placeholder="Year" required></td>
                                    <td><input type="text" class="form-control" placeholder="% of Marks" required></td>
                                    <td><input type="text" class="form-control" placeholder="Rank/Position"></td>
                                    <td><input type="text" class="form-control" placeholder="Attempt"></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>MBBS </td>
                                    <td><input type="text" class="form-control" placeholder="College/Institute" required></td>
                                    <td><input type="text" class="form-control" placeholder="Board/University" required></td>
                                    <td><input type="text" class="form-control" placeholder="Year" required></td>
                                    <td><input type="text" class="form-control" placeholder="% of Marks" required></td>
                                    <td><input type="text" class="form-control" placeholder="Rank/Position"></td>
                                    <td><input type="text" class="form-control" placeholder="Attempt"></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>MD/MS/DNB </td>
                                    <td><input type="text" class="form-control" placeholder="College/Institute" required></td>
                                    <td><input type="text" class="form-control" placeholder="Board/University" required></td>
                                    <td><input type="text" class="form-control" placeholder="Year" required></td>
                                    <td><input type="text" class="form-control" placeholder="% of Marks" required></td>
                                    <td><input type="text" class="form-control" placeholder="Rank/Position"></td>
                                    <td><input type="text" class="form-control" placeholder="Attempt"></td>
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
                                    <td><input type="text" class="form-control" name="exp-designation1" placeholder="Designation" required></td>
                                    <td><input type="text" class="form-control"  name="exp-duration1" placeholder="Duration" required></td>
                                    <td><input type="text" class="form-control"  name="exp-institution1" placeholder="Institution" required></td>
                                    <td><input type="text" class="form-control" name="exp-details1" placeholder="Details" required></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><input type="text" class="form-control"  name="exp-designation2" placeholder="Designation" required></td>
                                    <td><input type="text" class="form-control"  name="exp-duration2" placeholder="Duration" required></td>
                                    <td><input type="text" class="form-control"  name="exp-institution2" placeholder="Institution" required></td>
                                    <td><input type="text" class="form-control" name="exp-details2" placeholder="Details" required></td>
                                </tr>


                            </tbody>
                        </table>
                    </div>

                    <div class="form-group car">
                        <textarea id="achievements" name="achievements" rows="2" placeholder="Academic Activities & Publications"></textarea>
                    </div>
                    <div class="form-group car">
                        <textarea id="achievements" name="achievements" rows="2" placeholder="Any Other Achievements"></textarea>
                    </div>
                    <div class="form-group car">
                        <input type="text" id="languages-known" name="languages-known" placeholder="Languages Known">
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
                                    <td><input type="text" class="form-control" name="ref-name1" placeholder="Name" required></td>
                                    <td><input type="text" class="form-control"  name="ref-address1" placeholder="Address" required></td>
                                    <td><input type="text" class="form-control"  name="ref-mobile1" placeholder="Tel/Mobile No." required></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><input type="text" class="form-control" name="ref-name2" placeholder="Name" required></td>
                                    <td><input type="text" class="form-control"  name="ref-address2" placeholder="Address" required></td>
                                    <td><input type="text" class="form-control"  name="ref-mobile2" placeholder="Tel/Mobile No." required></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>


                    <p>All the above information are true to my knowledge. If appointed, I am willing to abide by the rules and
                        regulations of Bombay Hospital as existing at present and as may be modified from time to time. </p>

                    <div class="form-row">
                        <div class="form-group car col-lg-4">
                        <p  class="today-date">Date : <span id="demo"></span> </p>
                        </div>
                        <div class="form-group car col-lg-4">
                            <!-- <label for="signature-name">Name:</label>
                            <input type="text" id="signature-name" name="signature-name"> -->
                        </div>
                        <div class="form-group car col-lg-4">
                            <input type="text" id="signature-name" placeholder="Name" name="signature-name">
                        </div>
                    </div>
                    <div class="form-group submit-button text-center">
                        <button type="submit" class="btn px-4 submit-button fs-6 blue-hover submit-button ms-auto mt-4">Submit</button>
                    </div>
                </form>
            </div>
        </div>

      

    </div>
</section>

@stop