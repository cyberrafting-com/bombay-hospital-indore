@php($title = "Panel of Consultants | Bombay Hospital Indore")
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
                            <li class="breadcrumb-item active" aria-current="page">Panel of Consultants</li>
                        </ol>
                    </nav>

                    <!-- Title -->
                    <h4 class="h4-sm steelblue-color">Panel of Consultants</h4>

                </div>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</div> <!-- END BREADCRUMB -->

<section id="doctors-3" class="bg-lightgrey wide-60 doctors-section division">
    <div class="container">

        <h3 class="h3-md steelblue-color">Gastroenterology Doctors</h3>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="doctor-2">
                    <div class="hover-overlay">
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-abhinav-anand.jpg')}}"
                            alt="">
                    </div>
                    <div class="doctor-meta">
                        <h5 class="h5-xs blue-color">Dr. Abhinav Anand</h5>
                        <span>Gastroenterology</span>
                        <a class="btn btn-sm btn-blue blue-hover mt-15" href="{{ route('dr-abhinav-anand')}}"
                            title="">View
                            More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="doctor-2">
                    <div class="hover-overlay">
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-ravi-rathi.jpg')}}"
                            alt="">
                    </div>
                    <div class="doctor-meta">
                        <h5 class="h5-xs blue-color">Dr. Ravi Rathi</h5>
                        <span>Gastroenterology</span>
                        <a class="btn btn-sm btn-blue blue-hover mt-15" href="{{ route('dr-ravi-rathi')}}" title="">View
                            More</a>
                    </div>
                </div>
            </div>
        </div>

        <h3 class="h3-md steelblue-color">NeuroSurgery Doctors</h3>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="doctor-2">

                    <!-- Doctor Photo -->
                    <div class="hover-overlay">
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-ankit-gupta.jpg')}}"
                            alt="">
                    </div>

                    <!-- Doctor Meta -->
                    <div class="doctor-meta">

                        <h5 class="h5-xs blue-color">Dr. Ankit Gupta</h5>
                        <span>NeuroSurgery</span>

                        <!-- Button -->
                        <a class="btn btn-sm btn-blue blue-hover mt-15" href="{{ route('dr-ankit-gupta')}}"
                            title="">View
                            More</a>

                    </div>

                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="doctor-2">

                    <!-- Doctor Photo -->
                    <div class="hover-overlay">
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-ashish-dwivedi.jpg')}}"
                            alt="">
                    </div>

                    <!-- Doctor Meta -->
                    <div class="doctor-meta">

                        <h5 class="h5-xs blue-color">Dr. Ashish Kumar Dwivedi</h5>
                        <span>NeuroSurgery</span>

                        <!-- Button -->
                        <a class="btn btn-sm btn-blue blue-hover mt-15" href="{{ route('dr-ashish-dwivedi')}}"
                            title="">View
                            More</a>

                    </div>

                </div>
            </div>
        </div>

        <h3 class="h3-md steelblue-color">Chest Disease Doctors</h3>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="doctor-2">

                    <!-- Doctor Photo -->
                    <div class="hover-overlay">
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-avinash-jain.jpg')}}"
                            alt="">
                    </div>

                    <!-- Doctor Meta -->
                    <div class="doctor-meta">

                        <h5 class="h5-xs blue-color">Dr. Avinash Jain</h5>
                        <span>Chest Disease</span>

                        <!-- Button -->
                        <a class="btn btn-sm btn-blue blue-hover mt-15" href="{{ route('dr-avinash-jain')}}"
                            title="">View
                            More</a>

                    </div>

                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="doctor-2">

                    <!-- Doctor Photo -->
                    <div class="hover-overlay">
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-deepak-bansal.jpg')}}"
                            alt="">
                    </div>

                    <!-- Doctor Meta -->
                    <div class="doctor-meta">

                        <h5 class="h5-xs blue-color">Dr. Deepak Bansal</h5>
                        <span>Chest Disease</span>

                        <!-- Button -->
                        <a class="btn btn-sm btn-blue blue-hover mt-15" href="{{ route('dr-deepak-bansal')}}"
                            title="">View
                            More</a>

                    </div>

                </div>
            </div>
        </div>

        <h3 class="h3-md steelblue-color">GI and HPB surgery Doctors</h3>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="doctor-2">

                    <!-- Doctor Photo -->
                    <div class="hover-overlay">
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-aviral-jain.jpg')}}"
                            alt="">
                    </div>

                    <!-- Doctor Meta -->
                    <div class="doctor-meta">

                        <h5 class="h5-xs blue-color">Dr. Aviral Jain</h5>
                        <span>GI and HPB surgery</span>

                        <!-- Button -->
                        <a class="btn btn-sm btn-blue blue-hover mt-15" href="{{ route('dr-aviral-jain')}}"
                            title="">View
                            More</a>

                    </div>

                </div>
            </div>
        </div>

        <h3 class="h3-md steelblue-color">Obstetrics & Gynaecology Doctors</h3>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="doctor-2">

                    <!-- Doctor Photo -->
                    <div class="hover-overlay">
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-devendra-patil.jpg')}}"
                            alt="">
                    </div>

                    <!-- Doctor Meta -->
                    <div class="doctor-meta">

                        <h5 class="h5-xs blue-color">Dr. Devendra Patil</h5>
                        <span>Obstetrics & Gynaecology</span>

                        <!-- Button -->
                        <a class="btn btn-sm btn-blue blue-hover mt-15" href="{{ route('dr-devendra-patil')}}"
                            title="">View
                            More</a>

                    </div>

                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="doctor-2">

                    <!-- Doctor Photo -->
                    <div class="hover-overlay">
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-kavita-ghadale.jpg')}}"
                            alt="">
                    </div>

                    <!-- Doctor Meta -->
                    <div class="doctor-meta">

                        <h5 class="h5-xs blue-color">Dr. Kavita Ghadale</h5>
                        <span>Obstetrics & Gynaecology</span>

                        <!-- Button -->
                        <a class="btn btn-sm btn-blue blue-hover mt-15" href="{{ route('dr-kavita-ghadale')}}"
                            title="">View
                            More</a>

                    </div>

                </div>
            </div>
        </div>

        <h3 class="h3-md steelblue-color">Plastic Surgery Doctors</h3>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="doctor-2">

                    <!-- Doctor Photo -->
                    <div class="hover-overlay">
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-mahendra-gupta.jpg')}}"
                            alt="">
                    </div>

                    <!-- Doctor Meta -->
                    <div class="doctor-meta">

                        <h5 class="h5-xs blue-color">Dr. Mahendra Kumar Gupta</h5>
                        <span>Plastic Surgery</span>

                        <!-- Button -->
                        <a class="btn btn-sm btn-blue blue-hover mt-15" href="{{ route('dr-mahendra-gupta')}}"
                            title="">View
                            More</a>

                    </div>

                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="doctor-2">

                    <!-- Doctor Photo -->
                    <div class="hover-overlay">
                        <img class="img-fluid"
                            src="{{ asset('/resources/assets/images/team/dr-yogesh-kumar-tatwade.jpg')}}" alt="">
                    </div>

                    <!-- Doctor Meta -->
                    <div class="doctor-meta">

                        <h5 class="h5-xs blue-color">Dr. Yogesh Kumar Tatwade</h5>
                        <span>Plastic Surgery</span>

                        <!-- Button -->
                        <a class="btn btn-sm btn-blue blue-hover mt-15" href="{{ route('dr-yogesh-kumar-tatwade')}}"
                            title="">View
                            More</a>

                    </div>

                </div>
            </div>
        </div>

        <h3 class="h3-md steelblue-color">ENT Doctors</h3>
        <div class="row">
            <!-- <div class="col-md-6 col-lg-4">
                <div class="doctor-2">
                    <div class="hover-overlay">
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-govind-gourh.jpg')}}"
                            alt="">
                    </div>
                    <div class="doctor-meta">

                        <h5 class="h5-xs blue-color">Dr. Govind Gourh</h5>
                        <span>ENT</span>
                        <a class="btn btn-sm btn-blue blue-hover mt-15" href="{{ route('dr-govind-gourh')}}"
                            title="">View
                            More</a>
                    </div>
                </div>
            </div> -->
            <div class="col-md-6 col-lg-4">
                <div class="doctor-2">

                    <!-- Doctor Photo -->
                    <div class="hover-overlay">
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-anil-gwaliorkar.jpg')}}"
                            alt="">
                    </div>

                    <!-- Doctor Meta -->
                    <div class="doctor-meta">

                        <h5 class="h5-xs blue-color">Dr. Anil Gwaliorkar</h5>
                        <span>ENT ,Head & Neck Surgery</span>

                        <!-- Button -->
                        <a class="btn btn-sm btn-blue blue-hover mt-15" href="{{ route('dr-anil-gwaliorkar')}}"
                            title="">View
                            More</a>

                    </div>

                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="doctor-2">

                    <!-- Doctor Photo -->
                    <div class="hover-overlay">
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-tripti-sonker.jpg')}}"
                            alt="">
                    </div>

                    <!-- Doctor Meta -->
                    <div class="doctor-meta">

                        <h5 class="h5-xs blue-color">Dr. Tripti Sonker</h5>
                        <span>ENT ,Head & Neck Surgery</span>

                        <!-- Button -->
                        <a class="btn btn-sm btn-blue blue-hover mt-15" href="{{ route('dr-tripti-sonker')}}"
                            title="">View
                            More</a>

                    </div>

                </div>
            </div>
        </div>

        <h3 class="h3-md steelblue-color">Critical Care Doctors</h3>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="doctor-2">

                    <!-- Doctor Photo -->
                    <div class="hover-overlay">
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-kamal-lashkari.jpg')}}"
                            alt="">
                    </div>

                    <!-- Doctor Meta -->
                    <div class="doctor-meta">

                        <h5 class="h5-xs blue-color">Dr. Kamal Lashkari</h5>
                        <span>Critical Care</span>

                        <!-- Button -->
                        <a class="btn btn-sm btn-blue blue-hover mt-15" href="{{ route('dr-kamal-lashkari')}}"
                            title="">View
                            More</a>

                    </div>

                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="doctor-2">

                    <!-- Doctor Photo -->
                    <div class="hover-overlay">
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-santosh-ahuja.jpg')}}"
                            alt="">
                    </div>

                    <!-- Doctor Meta -->
                    <div class="doctor-meta">

                        <h5 class="h5-xs blue-color">Dr. Santosh Ahuja</h5>
                        <span>Critical Care</span>

                        <!-- Button -->
                        <a class="btn btn-sm btn-blue blue-hover mt-15" href="{{ route('dr-santosh-ahuja')}}"
                            title="">View
                            More</a>

                    </div>

                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="doctor-2">

                    <!-- Doctor Photo -->
                    <div class="hover-overlay">
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-shailendra-rai.jpg')}}"
                            alt="">
                    </div>

                    <!-- Doctor Meta -->
                    <div class="doctor-meta">

                        <h5 class="h5-xs blue-color">Dr. Shailendra Rai</h5>
                        <span>Critical Care</span>

                        <!-- Button -->
                        <a class="btn btn-sm btn-blue blue-hover mt-15" href="{{ route('dr-shailendra-rai')}}"
                            title="">View
                            More</a>

                    </div>

                </div>
            </div>
        </div>

        <h3 class="h3-md steelblue-color">Pathology Doctors</h3>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="doctor-2">

                    <!-- Doctor Photo -->
                    <div class="hover-overlay">
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-neelam-bharihoke.jpg')}}"
                            alt="">
                    </div>

                    <!-- Doctor Meta -->
                    <div class="doctor-meta">

                        <h5 class="h5-xs blue-color">Dr. (Mrs) Nilam Bharihok</h5>
                        <span>Pathology</span>

                        <!-- Button -->
                        <a class="btn btn-sm btn-blue blue-hover mt-15" href="{{ route('dr-neelam-bharihoke')}}"
                            title="">View
                            More</a>

                    </div>

                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="doctor-2">

                    <!-- Doctor Photo -->
                    <div class="hover-overlay">
                        <img class="img-fluid"
                            src="{{ asset('/resources/assets/images/team/dr-nikita-khandelwal.jpg')}}" alt="">
                    </div>

                    <!-- Doctor Meta -->
                    <div class="doctor-meta">

                        <h5 class="h5-xs blue-color">Dr. Nikita Khandelwal</h5>
                        <span>Pathology</span>

                        <!-- Button -->
                        <a class="btn btn-sm btn-blue blue-hover mt-15" href="{{ route('dr-nikita-khandelwal')}}"
                            title="">View
                            More</a>

                    </div>

                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="doctor-2">

                    <!-- Doctor Photo -->
                    <div class="hover-overlay">
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-piyush-vyas.jpg')}}"
                            alt="">
                    </div>

                    <!-- Doctor Meta -->
                    <div class="doctor-meta">

                        <h5 class="h5-xs blue-color">Dr. Piyush Vyas</h5>
                        <span>Pathology</span>

                        <!-- Button -->
                        <a class="btn btn-sm btn-blue blue-hover mt-15" href="{{ route('dr-piyush-vyas')}}"
                            title="">View
                            More</a>

                    </div>

                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="doctor-2">

                    <!-- Doctor Photo -->
                    <div class="hover-overlay">
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-praveen-singh.jpg')}}"
                            alt="">
                    </div>

                    <!-- Doctor Meta -->
                    <div class="doctor-meta">

                        <h5 class="h5-xs blue-color">Dr. Praveen Singh</h5>
                        <span>Pathology</span>

                        <!-- Button -->
                        <a class="btn btn-sm btn-blue blue-hover mt-15" href="{{ route('dr-praveen-singh')}}"
                            title="">View
                            More</a>

                    </div>

                </div>
            </div>
        </div>

        <h3 class="h3-md steelblue-color">Rheumatology Doctors</h3>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="doctor-2">

                    <!-- Doctor Photo -->
                    <div class="hover-overlay">
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-nupoor-acharya.jpg')}}"
                            alt="">
                    </div>

                    <!-- Doctor Meta -->
                    <div class="doctor-meta">

                        <h5 class="h5-xs blue-color">Dr. Nupoor Acharya</h5>
                        <span>Rheumatology</span>

                        <!-- Button -->
                        <a class="btn btn-sm btn-blue blue-hover mt-15" href="{{ route('dr-nupoor-acharya')}}"
                            title="">View
                            More</a>

                    </div>

                </div>
            </div>
        </div>

        <h3 class="h3-md steelblue-color">Spine Surgery Doctors</h3>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="doctor-2">

                    <!-- Doctor Photo -->
                    <div class="hover-overlay">
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-sanjeev-asati.jpg')}}"
                            alt="">
                    </div>

                    <!-- Doctor Meta -->
                    <div class="doctor-meta">

                        <h5 class="h5-xs blue-color">Dr. Sanjeev Asati</h5>
                        <span>Spine Surgery</span>

                        <!-- Button -->
                        <a class="btn btn-sm btn-blue blue-hover mt-15" href="{{ route('dr-sanjeev-asati')}}"
                            title="">View
                            More</a>

                    </div>

                </div>
            </div>
        </div>

        <h3 class="h3-md steelblue-color">Radiology Doctors</h3>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="doctor-2">

                    <!-- Doctor Photo -->
                    <div class="hover-overlay">
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-sonia-daga.jpg')}}"
                            alt="">
                    </div>

                    <!-- Doctor Meta -->
                    <div class="doctor-meta">

                        <h5 class="h5-xs blue-color">Dr. Sonia Daga</h5>
                        <span>Radiology</span>

                        <!-- Button -->
                        <a class="btn btn-sm btn-blue blue-hover mt-15" href="{{ route('dr-sonia-daga')}}" title="">View
                            More</a>

                    </div>

                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="doctor-2">

                    <!-- Doctor Photo -->
                    <div class="hover-overlay">
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-mukesh-gupta.jpg')}}"
                            alt="">
                    </div>

                    <!-- Doctor Meta -->
                    <div class="doctor-meta">

                        <h5 class="h5-xs blue-color">Dr. Mukesh Gupta</h5>
                        <span>Radiology</span>

                        <!-- Button -->
                        <a class="btn btn-sm btn-blue blue-hover mt-15" href="{{ route('dr-mukesh-gupta')}}"
                            title="">View
                            More</a>

                    </div>

                </div>
            </div>
        </div>

        <h3 class="h3-md steelblue-color">Cancer Surgery Doctors</h3>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="doctor-2">

                    <!-- Doctor Photo -->
                    <div class="hover-overlay">
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-suyash-agrawal.jpg')}}"
                            alt="">
                    </div>

                    <!-- Doctor Meta -->
                    <div class="doctor-meta">

                        <h5 class="h5-xs blue-color">Dr. Suyash Agrawal</h5>
                        <span>Cancer Surgery</span>

                        <!-- Button -->
                        <a class="btn btn-sm btn-blue blue-hover mt-15" href="{{ route('dr-suyash-agrawal')}}"
                            title="">View
                            More</a>

                    </div>

                </div>
            </div>
        </div>

        <h3 class="h3-md steelblue-color">Urology Doctors</h3>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="doctor-2">

                    <!-- Doctor Photo -->
                    <div class="hover-overlay">
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-vipin-sharma.jpg')}}"
                            alt="">
                    </div>

                    <!-- Doctor Meta -->
                    <div class="doctor-meta">

                        <h5 class="h5-xs blue-color">Dr. Vipin Sharma</h5>
                        <span>Urology</span>

                        <!-- Button -->
                        <a class="btn btn-sm btn-blue blue-hover mt-15" href="{{ route('dr-vipin-sharma')}}"
                            title="">View
                            More</a>

                    </div>

                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="doctor-2">

                    <!-- Doctor Photo -->
                    <div class="hover-overlay">
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-pritesh-shrimali.jpg')}}"
                            alt="">
                    </div>

                    <!-- Doctor Meta -->
                    <div class="doctor-meta">

                        <h5 class="h5-xs blue-color">Dr. Pritesh Shrimali</h5>
                        <span>Urology</span>

                        <!-- Button -->
                        <a class="btn btn-sm btn-blue blue-hover mt-15" href="{{ route('dr-pritesh-shrimali')}}"
                            title="">View
                            More</a>

                    </div>

                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="doctor-2">

                    <!-- Doctor Photo -->
                    <div class="hover-overlay">
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-vivek-jha.jpg')}}"
                            alt="">
                    </div>

                    <!-- Doctor Meta -->
                    <div class="doctor-meta">

                        <h5 class="h5-xs blue-color">Dr. Vivek Jha</h5>
                        <span>Urology</span>

                        <!-- Button -->
                        <a class="btn btn-sm btn-blue blue-hover mt-15" href="{{ route('dr-vivek-jha')}}" title="">View
                            More</a>

                    </div>

                </div>
            </div>
        </div>

        <h3 class="h3-md steelblue-color">Anaesthesiology Doctors</h3>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="doctor-2">

                    <!-- Doctor Photo -->
                    <div class="hover-overlay">
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-aditi-jain.jpg')}}"
                            alt="">
                    </div>

                    <!-- Doctor Meta -->
                    <div class="doctor-meta">

                        <h5 class="h5-xs blue-color">Dr. Aditi Jain</h5>
                        <span>Anaesthesiology</span>

                        <!-- Button -->
                        <a class="btn btn-sm btn-blue blue-hover mt-15" href="{{ route('dr-aditi-jain')}}" title="">View
                            More</a>

                    </div>

                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="doctor-2">

                    <!-- Doctor Photo -->
                    <div class="hover-overlay">
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-charu-neema.jpg')}}"
                            alt="">
                    </div>

                    <!-- Doctor Meta -->
                    <div class="doctor-meta">

                        <h5 class="h5-xs blue-color">Dr. Charu Neema</h5>
                        <span>Anaesthesiology</span>

                        <!-- Button -->
                        <a class="btn btn-sm btn-blue blue-hover mt-15" href="{{ route('dr-charu-neema')}}"
                            title="">View
                            More</a>

                    </div>

                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="doctor-2">

                    <!-- Doctor Photo -->
                    <div class="hover-overlay">
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-kashish-ahuja.jpg')}}"
                            alt="">
                    </div>

                    <!-- Doctor Meta -->
                    <div class="doctor-meta">

                        <h5 class="h5-xs blue-color">Dr. Kashish Ahuja</h5>
                        <span>Anaesthesiology</span>

                        <!-- Button -->
                        <a class="btn btn-sm btn-blue blue-hover mt-15" href="{{ route('dr-kashish-ahuja')}}"
                            title="">View
                            More</a>

                    </div>

                </div>
            </div>
        </div>

        <h3 class="h3-md steelblue-color">Neurology Doctors</h3>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="doctor-2">

                    <!-- Doctor Photo -->
                    <div class="hover-overlay">
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-alok-mandliya.jpg')}}"
                            alt="">
                    </div>

                    <!-- Doctor Meta -->
                    <div class="doctor-meta">

                        <h5 class="h5-xs blue-color">Dr. Alok Mandliya</h5>
                        <span>Neurology</span>

                        <!-- Button -->
                        <a class="btn btn-sm btn-blue blue-hover mt-15" href="{{ route('dr-alok-mandliya')}}"
                            title="">View
                            More</a>

                    </div>

                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="doctor-2">

                    <!-- Doctor Photo -->
                    <div class="hover-overlay">
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-atul-taparia.jpg')}}"
                            alt="">
                    </div>

                    <!-- Doctor Meta -->
                    <div class="doctor-meta">

                        <h5 class="h5-xs blue-color">Dr. Atul Taparia</h5>
                        <span>Neurology</span>

                        <!-- Button -->
                        <a class="btn btn-sm btn-blue blue-hover mt-15" href="{{ route('dr-atul-taparia')}}"
                            title="">View
                            More</a>

                    </div>

                </div>
            </div>
        </div>

        <h3 class="h3-md steelblue-color">Orthopaedics Doctors</h3>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="doctor-2">

                    <!-- Doctor Photo -->
                    <div class="hover-overlay">
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-anand-gupta.jpg')}}"
                            alt="">
                    </div>

                    <!-- Doctor Meta -->
                    <div class="doctor-meta">

                        <h5 class="h5-xs blue-color">Dr. Anand Gupta</h5>
                        <span>Orthopaedics</span>

                        <!-- Button -->
                        <a class="btn btn-sm btn-blue blue-hover mt-15" href="{{ route('dr-anand-gupta')}}"
                            title="">View
                            More</a>

                    </div>

                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="doctor-2">

                    <!-- Doctor Photo -->
                    <div class="hover-overlay">
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-rashid-hasan.jpg')}}"
                            alt="">
                    </div>

                    <!-- Doctor Meta -->
                    <div class="doctor-meta">

                        <h5 class="h5-xs blue-color">Dr. Rashid Hasan</h5>
                        <span>Orthopaedics</span>

                        <!-- Button -->
                        <a class="btn btn-sm btn-blue blue-hover mt-15" href="{{ route('dr-rashid-hasan')}}"
                            title="">View
                            More</a>

                    </div>

                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="doctor-2">

                    <!-- Doctor Photo -->
                    <div class="hover-overlay">
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-varun-chouhan.jpg')}}"
                            alt="">
                    </div>

                    <!-- Doctor Meta -->
                    <div class="doctor-meta">

                        <h5 class="h5-xs blue-color">Dr. Varun Chouhan</h5>
                        <span>Orthopaedics</span>

                        <!-- Button -->
                        <a class="btn btn-sm btn-blue blue-hover mt-15" href="{{ route('dr-varun-chouhan')}}"
                            title="">View
                            More</a>

                    </div>

                </div>
            </div>
        </div>

        <h3 class="h3-md steelblue-color">General Surgery Doctors</h3>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="doctor-2">

                    <!-- Doctor Photo -->
                    <div class="hover-overlay">
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-ashutosh-soni.jpg')}}"
                            alt="">
                    </div>

                    <!-- Doctor Meta -->
                    <div class="doctor-meta">

                        <h5 class="h5-xs blue-color">Dr. Ashutosh Soni</h5>
                        <span>General Surgery</span>

                        <!-- Button -->
                        <a class="btn btn-sm btn-blue blue-hover mt-15" href="{{ route('dr-ashutosh-soni')}}"
                            title="">View
                            More</a>

                    </div>

                </div>
            </div>
        </div>

        <h3 class="h3-md steelblue-color">Cardiology Doctors</h3>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="doctor-2">

                    <!-- Doctor Photo -->
                    <div class="hover-overlay">
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-idris-ahmed-khan.jpg')}}"
                            alt="">
                    </div>

                    <!-- Doctor Meta -->
                    <div class="doctor-meta">

                        <h5 class="h5-xs blue-color">Dr. Idris Ahmed Khan</h5>
                        <span>Cardiology (Interventional)</span>

                        <!-- Button -->
                        <a class="btn btn-sm btn-blue blue-hover mt-15" href="{{ route('dr-idris-ahmed-khan')}}"
                            title="">View
                            More</a>

                    </div>

                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="doctor-2">

                    <!-- Doctor Photo -->
                    <div class="hover-overlay">
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-vivek-sullere.jpg')}}"
                            alt="">
                    </div>

                    <!-- Doctor Meta -->
                    <div class="doctor-meta">

                        <h5 class="h5-xs blue-color">Dr. Vivek Sullere</h5>
                        <span>Cardiology (Non Invasive)</span>

                        <!-- Button -->
                        <a class="btn btn-sm btn-blue blue-hover mt-15" href="{{ route('dr-vivek-sullere')}}"
                            title="">View
                            More</a>

                    </div>

                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="doctor-2">

                    <!-- Doctor Photo -->
                    <div class="hover-overlay">
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-abhimanyu-nigam.jpg')}}"
                            alt="">
                    </div>

                    <!-- Doctor Meta -->
                    <div class="doctor-meta">

                        <h5 class="h5-xs blue-color">Dr. Abhimanyu Nigam</h5>
                        <span>Cardiology (Interventional)</span>

                        <!-- Button -->
                        <a class="btn btn-sm btn-blue blue-hover mt-15" href="{{ route('dr-abhimanyu-nigam')}}"
                            title="">View
                            More</a>

                    </div>

                </div>
            </div>
        </div>

        <h3 class="h3-md steelblue-color">CT/MRI Doctors</h3>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="doctor-2">

                    <!-- Doctor Photo -->
                    <div class="hover-overlay">
                        <img class="img-fluid"
                            src="{{ asset('/resources/assets/images/team/dr-kaushalendra-soni.jpg')}}" alt="">
                    </div>

                    <!-- Doctor Meta -->
                    <div class="doctor-meta">

                        <h5 class="h5-xs blue-color">Dr. Kaushalendra Soni</h5>
                        <span>CT/MRI</span>

                        <!-- Button -->
                        <a class="btn btn-sm btn-blue blue-hover mt-15" href="{{ route('dr-kaushalendra-soni')}}"
                            title="">View
                            More</a>

                    </div>

                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="doctor-2">

                    <!-- Doctor Photo -->
                    <div class="hover-overlay">
                        <img class="img-fluid"
                            src="{{ asset('/resources/assets/images/team/dr-kiran-chouhan.jpg')}}" alt="">
                    </div>

                    <!-- Doctor Meta -->
                    <div class="doctor-meta">

                        <h5 class="h5-xs blue-color">Dr. Kiran Chouhan</h5>
                        <span>CT/MRI</span>

                        <!-- Button -->
                        <a class="btn btn-sm btn-blue blue-hover mt-15" href="{{ route('dr-kiran-chouhan')}}"
                            title="">View
                            More</a>

                    </div>

                </div>
            </div>
        </div>

        <h3 class="h3-md steelblue-color">General Medicine Doctors</h3>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="doctor-2">

                    <!-- Doctor Photo -->
                    <div class="hover-overlay">
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-manish-jain.jpg')}}"
                            alt="">
                    </div>

                    <!-- Doctor Meta -->
                    <div class="doctor-meta">

                        <h5 class="h5-xs blue-color">Dr. Manish Jain</h5>
                        <span>General Medicine</span>

                        <!-- Button -->
                        <a class="btn btn-sm btn-blue blue-hover mt-15" href="{{ route('dr-manish-jain')}}"
                            title="">View
                            More</a>

                    </div>

                </div>
            </div>
        </div>

        <h3 class="h3-md steelblue-color">Laparoscopic & GI Surgery Doctors</h3>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="doctor-2">

                    <!-- Doctor Photo -->
                    <div class="hover-overlay">
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-sandeep-rathore.jpg')}}"
                            alt="">
                    </div>

                    <!-- Doctor Meta -->
                    <div class="doctor-meta">

                        <h5 class="h5-xs blue-color">Dr. Sandeep Rathore</h5>
                        <span>Laparoscopic & GI Surgery</span>

                        <!-- Button -->
                        <a class="btn btn-sm btn-blue blue-hover mt-15" href="{{ route('dr-sandeep-rathore')}}"
                            title="">View
                            More</a>

                    </div>

                </div>
            </div>
        </div>

        <h3 class="h3-md steelblue-color">Cardiac Surgery Doctors</h3>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="doctor-2">

                    <!-- Doctor Photo -->
                    <div class="hover-overlay">
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-mukesh-modh.jpg')}}"
                            alt="">
                    </div>

                    <!-- Doctor Meta -->
                    <div class="doctor-meta">

                        <h5 class="h5-xs blue-color">Dr. Mukesh S. Modh</h5>
                        <span>Cardiac Surgery</span>

                        <!-- Button -->
                        <a class="btn btn-sm btn-blue blue-hover mt-15" href="{{ route('dr-mukesh-modh')}}"
                            title="">View
                            More</a>

                    </div>

                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="doctor-2">

                    <!-- Doctor Photo -->
                    <div class="hover-overlay">
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-sunil-kumar-dube.jpg')}}"
                            alt="">
                    </div>

                    <!-- Doctor Meta -->
                    <div class="doctor-meta">

                        <h5 class="h5-xs blue-color">Dr. Sunil Kumar Dube</h5>
                        <span>Cardiac Surgery</span>

                        <!-- Button -->
                        <a class="btn btn-sm btn-blue blue-hover mt-15" href="{{ route('dr-sunil-kumar-dube')}}"
                            title="">View
                            More</a>

                    </div>

                </div>
            </div>
        </div>

        <h3 class="h3-md steelblue-color">Nephrology Doctors</h3>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="doctor-2">

                    <!-- Doctor Photo -->
                    <div class="hover-overlay">
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-omprakash-rathi.jpg')}}"
                            alt="">
                    </div>

                    <!-- Doctor Meta -->
                    <div class="doctor-meta">

                        <h5 class="h5-xs blue-color">Dr. Omprakash Rathi</h5>
                        <span>Nephrology</span>

                        <!-- Button -->
                        <a class="btn btn-sm btn-blue blue-hover mt-15" href="{{ route('dr-omprakash-rathi')}}"
                            title="">View
                            More</a>

                    </div>

                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="doctor-2">

                    <!-- Doctor Photo -->
                    <div class="hover-overlay">
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-rajesh-bharani.jpg')}}"
                            alt="">
                    </div>

                    <!-- Doctor Meta -->
                    <div class="doctor-meta">

                        <h5 class="h5-xs blue-color">Dr. Rajesh Bharani</h5>
                        <span>Nephrology</span>

                        <!-- Button -->
                        <a class="btn btn-sm btn-blue blue-hover mt-15" href="{{ route('dr-rajesh-bharani')}}"
                            title="">View
                            More</a>

                    </div>

                </div>
            </div>
        </div>

        <h3 class="h3-md steelblue-color">ICU/RR Doctors</h3>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="doctor-2">

                    <!-- Doctor Photo -->
                    <div class="hover-overlay">
                        <img class="img-fluid"
                            src="{{ asset('/resources/assets/images/team/dr-prakash-chand-madiya.jpg')}}" alt="">
                    </div>

                    <!-- Doctor Meta -->
                    <div class="doctor-meta">

                        <h5 class="h5-xs blue-color">Dr. Prakash Chand Madiya</h5>
                        <span>ICU/RR</span>

                        <!-- Button -->
                        <a class="btn btn-sm btn-blue blue-hover mt-15" href="{{ route('dr-prakash-chand-madiya')}}"
                            title="">View
                            More</a>

                    </div>

                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="doctor-2">

                    <!-- Doctor Photo -->
                    <div class="hover-overlay">
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-shashank-singh.jpg')}}"
                            alt="">
                    </div>

                    <!-- Doctor Meta -->
                    <div class="doctor-meta">

                        <h5 class="h5-xs blue-color">Dr. Shashank Singh</h5>
                        <span>ICU</span>

                        <!-- Button -->
                        <a class="btn btn-sm btn-blue blue-hover mt-15" href="{{ route('dr-shashank-singh')}}"
                            title="">View
                            More</a>

                    </div>

                </div>
            </div>
        </div>

        <h3 class="h3-md steelblue-color">Paediatrics Doctors</h3>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="doctor-2">

                    <!-- Doctor Photo -->
                    <div class="hover-overlay">
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-rakesh-shukla.jpg')}}"
                            alt="">
                    </div>

                    <!-- Doctor Meta -->
                    <div class="doctor-meta">

                        <h5 class="h5-xs blue-color">Dr. Rakesh Shukla</h5>
                        <span>Paediatrics</span>

                        <!-- Button -->
                        <a class="btn btn-sm btn-blue blue-hover mt-15" href="{{ route('dr-rakesh-shukla')}}"
                            title="">View
                            More</a>

                    </div>

                </div>
            </div>
        </div>

        <h3 class="h3-md steelblue-color">Casualty Medical Officer Doctors</h3>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="doctor-2">

                    <!-- Doctor Photo -->
                    <div class="hover-overlay">
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-shitanshu-dube.jpg')}}"
                            alt="">
                    </div>

                    <!-- Doctor Meta -->
                    <div class="doctor-meta">

                        <h5 class="h5-xs blue-color">Dr. Shitanshu Dube</h5>
                        <span>Casualty Medical Officer</span>

                        <!-- Button -->
                        <a class="btn btn-sm btn-blue blue-hover mt-15" href="{{ route('dr-shitanshu-dube')}}"
                            title="">View
                            More</a>

                    </div>

                </div>
            </div>
        </div>

        <h3 class="h3-md steelblue-color">EHS Doctors</h3>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="doctor-2">

                    <!-- Doctor Photo -->
                    <div class="hover-overlay">
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-soni-rungta.jpg')}}"
                            alt="">
                    </div>

                    <!-- Doctor Meta -->
                    <div class="doctor-meta">

                        <h5 class="h5-xs blue-color">Dr. Soni Rungta</h5>
                        <span>EHS</span>

                        <!-- Button -->
                        <a class="btn btn-sm btn-blue blue-hover mt-15" href="{{ route('dr-soni-rungta')}}"
                            title="">View
                            More</a>

                    </div>

                </div>
            </div>
        </div>

        <h3 class="h3-md steelblue-color">Audiology and Speech Therapy Doctors</h3>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="doctor-2">

                    <!-- Doctor Photo -->
                    <div class="hover-overlay">
                        <img class="img-fluid" src="{{ asset('/resources/assets/images/team/mrs-aashna-jain.jpg')}}"
                            alt="">
                    </div>

                    <!-- Doctor Meta -->
                    <div class="doctor-meta">

                        <h5 class="h5-xs blue-color">Mrs. Aashna Jain</h5>
                        <span>Audiology and Speech Therapy</span>

                        <!-- Button -->
                        <a class="btn btn-sm btn-blue blue-hover mt-15" href="{{ route('mrs-aashna-jain')}}"
                            title="">View
                            More</a>

                    </div>

                </div>
            </div>
        </div>


    </div> <!-- End container -->
</section>

@stop