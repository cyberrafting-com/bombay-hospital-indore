@php($title = "Room Facilities | Bombay Hospital Indore")
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
                    <h4 class="h4-sm steelblue-color">Room Facilities</h4>

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
                            <img class="img-fluid" src="{{ asset('/resources/assets/images/gallery/rooms-5.jpg')}}"
                                alt="content-image">
                        </div>

                        <div id="pricing-2" class="pricing-section division">
                            <div class="row pricing-row">

                                <div class="col-md-12">
                                    <!-- Plan Title  -->
                                    <h5 class="h5-md steelblue-color">Nature of Accommodation</h5>

                                    <div class="pricing-table mb-40">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">CLASS</th>
                                                    <th scope="col">NO. OF BEDS</th>
                                                    <th scope="col">PARTICULARS</th>
                                                    <th scope="col">ROOM CHARGES / DAY</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Suit Room</th>
                                                    <td>2</td>
                                                    <td>Two Rooms with two bathrooms,piped oxygen, suction facility,
                                                        centrally air conditioned, well furnished with 2 TVs (1 LCD),
                                                        Refrigerator and telephone.</td>
                                                    <td>14,000/-</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">First Class</th>
                                                    <td>16</td>
                                                    <td>Single accommodation with attached bathroom, Couch for
                                                        attendant, piped oxygen, suction facility, centrally air
                                                        conditioned, well furnished, with T.V., Telephone and
                                                        Refrigerator.</td>
                                                    <td>5,500/-</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Private</th>
                                                    <td>19</td>
                                                    <td>Single accommodation with attached bathroom, Couch for
                                                        attendant, piped oxygen, suction facility, well furnished with
                                                        LCD T.V. and Telephone.</td>
                                                    <td>4,950/-</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Private (Corp./TPA)</th>
                                                    <td>10</td>
                                                    <td>Single accommodation with attached bathroom, Couch for
                                                        attendant, piped oxygen, suction facility, well furnished,
                                                        centrally air conditioned with LCD T.V. and Telephone.</td>
                                                    <td>3,300/-</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Semi-Private</th>
                                                    <td>62</td>
                                                    <td>Two patients in a room, attached bathroom and Couch for
                                                        attendant of each patient, piped oxygen, suction facility.</td>
                                                    <td>3,000/-</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">General Ward</th>
                                                    <td>78</td>
                                                    <td>Dormitory beds with common bathroom.</td>
                                                    <td>Rs. 0</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">I.C.U./I.C.C.U.</th>
                                                    <td>37</td>
                                                    <td>Central/Bed side monitors with ventilators.</td>
                                                    <td>As Per Class</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Recovery Room</th>
                                                    <td>32</td>
                                                    <td>Central/Bed side monitors with ventilators.</td>
                                                    <td>As Per Class</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Neo-Natal</th>
                                                    <td>5</td>
                                                    <td>Bed side monitors with ventilators & incubators</td>
                                                    <td>As Per Class</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
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