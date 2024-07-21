@php($title = "Dr. Govind Gourh | Bombay Hospital Indore")
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
                    <h4 class="h4-sm steelblue-color">Dr. Govind Gourh</h4>

                </div>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</div> <!-- END BREADCRUMB -->

<section id="doctor-1-details" class="doctor-details-section division">
    <div class="container">
        <div class="row">


            <!-- DOCTOR PHOTO -->
            <div class="col-md-5">
                <div class="doctor-photo mb-40">

                    <!-- Photo -->
                    <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-govind-gourh.jpg')}}" alt="">

                    <!-- Doctor Info -->
                    <div class="doctor-info">
                        <h5 class="h5-md blue-color">Qualifications</h5>
                        <p>M.B.B.S.-Netaji Subhash Chandra Bose Medical College Jabalpur M.P.(2005)</p>
                        <p>M.S. (ENT) Mahatma Gandhi Memorial Medical college Indore (2012)</p>
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Extn. No.:</td>
                                    <td>2113</td>
                                </tr>
                                <tr>
                                    <td>Consulting Time:</td>
                                    <td>Mon-Sat - 10am to 6pm
                                    </td>
                                </tr>
                                <tr>
                                    <td>Consulting Room:</td>
                                    <td>13</td>
                                </tr>
                            </tbody>
                        </table>
                    </div> <!-- End Doctor Info -->


                    <!-- <div class="doctor-photo-btn text-center">
                                <a href="#" class="btn btn-md btn-blue blue-hover">Book an
                                    Appointment</a>
                            </div> -->

                </div>
            </div> <!-- END DOCTOR PHOTO -->


            <!-- DOCTOR'S BIO -->
            <div class="col-md-7">
                <div class="doctor-bio">
                    <h5 class="h5-md blue-color">Background</h5>

                    <!-- Text -->
                    <p>Dr. Govind Gourh completed M.B.B.S. from NSCB Medical college, Jabalpur, M.P. He did M.S. ENT and
                        HNS from MGMMC Indore. After that he worked in health services, Govt. of M.P. till 2016.Later on
                        he completed his three year senior residency in AIIMS Raipur (C.G.) in department of ENT and
                        Head and neck surgery. He joined Bombay Hospital Indore in January 2020 and presently working as
                        Consultant ENT . Dr Govind Gourh had attended various hands on Cadaveric dissection and live
                        surgical workshops of head and neck surgery, ear surgery ,endoscopic sinus surgeries, skull base
                        surgeries .
                    </p>

                    <h5 class="h5-md blue-color">Expertise</h5>
                    <p>Micro-ear surgery, Head and Neck surgery , FESS.</p>
                    <p>Micro-ear surgeries : Tympanoplasty, Mastoidectomy, Myringotomy and grommet insertion, Stapes
                        surgery, Cholesteatoma surgery, Facial nerve decompression, Cochlear implantation etc.</p>
                    <p>Head and neck surgeries for benign and malignant lesions : Thyroidectomy, Submandibular gland
                        resection, Ranula excision, Parotidectomy, Oral cancer surgery, Neck dissection and many more.
                    </p>
                    <p>Micro-laryngeal surgery: Vocal cord polyp, vocal nodule, Laryngo-tracheal disorders,speech and
                        swallowing disorders.</p>
                    <p>Scopies: Diagnostic nasal endoscopy, Nasopharyngoscopy, Oto-endoscopy, Laryngoscopy,
                        Oesophagoscopy, Bronchoscopy, Pan- endoscopy.</p>
                    <p>Nose PNS and anterior skull base surgery: Septoplasty, Septorhinoplasty, SMR, Endo-nasal DCR,
                        FESS , Pituitary decompression, Optic nerve decompression, Endoscopic and combined approach
                        excision of benign and malignant lesions of Nose and Paranasal sinuses (Antrochoanal polyp
                        ,Inverted papilloma, JNA, Rhinosporidiosis )</p>
                    <p>Oral surgery: Tonsillectomy, Adenoidectomy ,Oropharyngeal Biopsy, Palatal surgery for benign and
                        malignant lesions.</p>

                    <!-- Title -->
                    <h5 class="h5-md blue-color">Achievements and Accolades</h5>

                    <!-- Option #1 -->
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">1st Prize in Cadaveric Hands on dissection on Basic and advanced FESS (
                            MID-AOICON 2018 Raipur)</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Second prize in resident paper presentation in MIDAOICON 2018</p>
                    </div>

                    <h5 class="h5-md blue-color">Workshops</h5>

                    <!-- Option #1 -->
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Cadaveric dissection and hands on workshop on Endoscopic basic and advanced FESS
                            including pituitary decompression at AIIMS Raipur in September 2019</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Cadaveric dissection and hands on workshop on Endoscopic basic and advanced FESS
                            at GMC Raipur in November 2018</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Cadaveric dissection and Hands on workshop in head and neck surgery at AIIMS
                            Raipur 2017</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Cadaveric dissection and Hands on workshop in head and neck surgery at GMC
                            Nagpur 2017</p>
                    </div>

                    <h5 class="h5-md blue-color">Presentation</h5>

                    <!-- Option #1 -->
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Paper presentation in MIDAOICON 2018 on “Papillary carcinoma thyroid”
                            Interesting cases.</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Paper presentation in ISOCON 2017 on: Prospective study of cartilage
                            perichondrium composite graft tympanoplasty in treatment of chronic suppurative otitis
                            media.</p>
                    </div>

                </div>
            </div> <!-- END DOCTOR BIO -->


        </div> <!-- End row -->
    </div> <!-- End container -->
</section>

@stop