@php($title = "Dr. Aviral Jain | Bombay Hospital Indore")
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
                    <h4 class="h4-sm steelblue-color">Dr. Aviral Jain</h4>

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
                    <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-aviral-jain.jpg')}}" alt="">

                    <!-- Doctor Info -->
                    <div class="doctor-info">
                        <h5 class="h5-md blue-color">Qualifications</h5>
                        <p>MBBS (MGM Medical College Indore, M.P.) 2005</p>
                        <p>MS (Surgery) 2011 ( Grant Medical College, J.J. Group of Hospital, Mumbai )</p>
                        <p>DNB ( Superspeciality) 2014 –GI ,HPB SURGERY ( Asain Institute of Gastroenterology, Hyderabad
                            )</p>
                        <p>Senior Surgical Consultant – 2014 (ESIS Hospital,Vashi,Mumbai)</p>
                        <p>Ex-Assistant Professor –Grant Medical College ,Mumbai</p>
                        <p>Ex-Observer –Tata Cancer Hospital, Mumbai</p>
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Extn. No.:</td>
                                    <td>2109</td>
                                </tr>
                                <tr>
                                    <td>Consulting Time:</td>
                                    <td>Mon-Sat - 10am to 6pm</td>
                                </tr>
                                <tr>
                                    <td>Consulting Room:</td>
                                    <td>24C, (First Floor)</td>
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
                    <p>Dr. Aviral jain obtained his medical degree from, MGM Medical College, Indore MP. He went on to
                        successfully complete his post-graduate training in General Surgery obtaining the Masters in
                        Surgery from grant medical college Mumbai ,MUHS University Nashik.
                    </p>
                    <p>In the superspecialization examination 2014, Dr. Aviral Jain secured 1st rank in all India. He
                        has successfully completed his superspeciality training in gastrointestinal and
                        hepatopancreaticobilary surgery obtaining the DNB Superspeciality degree from Asain Institute of
                        Gastroenterology, Hyderabad</p>
                    <p>He was awarded the prestigious Dr. Rangabashyam Gold Medal award for securing Ist rank in India
                        in GI and HPB superspeciality DNB examination for the year of 2017.</p>
                    <p>He had worked also as a senior consultant in surgery at ESIS hospital, Vashi, Navi Mumbai in 2014
                        and as an Assistant Professor in Surgery Department of Grant Medical College, Mumbai under the
                        professor Dr A. H. Bhandarwar.</p>
                    <p>He had also done training at Tata Cancer Hospital, Mumbai under professor Dr. Shailesh
                        Shreekhande and professor Dr. Mahesh Goel in the field of hepato-pancreatico-biliary onco
                        surgery.</p>
                    <p>Dr. Aviral Jain, joined this institute in September 2018. His present practice covers Surgical
                        Gastroenterology, Gastrooncosurgery, Laparoscopic Surgery (Diagnostic and Operative) and
                        Colorectal Surgery. His main interest is in advanced lap procedures, liver surgery, pancreatic
                        sugery, GI oncosurgery, complex recurrent hernia surgery.</p>

                    <h5 class="h5-md blue-color">Expertise</h5>
                    <p>Advanced laparoscopic surgeries (cholecystectomy ,Hiatus hernia, Achalasia cardia,Inguinal
                        hernia,umbilical hernia, incisional hernia, VATS oesophagectomy, hepatectomy,
                        pancreaticoduodenectomy, corrosive injury management. gastrectomy, pancreatic necrosectomy,
                        colorectal surgery).</p>

                    <!-- Title -->
                    <h5 class="h5-md blue-color">Publications</h5>
                    <!-- Option #1 -->
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Scientific Paper “Microarray based gene expression for colorectal cancer patient
                            for predicting chemotherapy response ” in IASGCON-2012, Annual Conference of Indian
                            association of surgical gastroenterology held at PONDICHERRY , India in OCT 2017.</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">SCIENTIFIC PAPER “Parathyroid adenoma profile in a patient of recurrent acute
                            and chronic pancreatitis ) ” Annual Conference of Indian association of surgical
                            gastroenterology held at PONDICHERRY , India in OCT 2017.</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">SCIENTIFIC PAPER “Role of PTGIS and LYVEI gene in predicting chemotherapy
                            response in patient of colorectal carcinoma ” at oral plenary session at ISGCON 2017-
                            Bhuveneshwar 2017</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">SCIENTIFIC PAPER “GROOVE PANCREATITIS ‘’ – A Common condition with difficult
                            preoperative diagnosis” At oral paper presentation in IHPBA 2018 January pune</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">POSTER- large case of gist of stomach infiltrating liver –role of neoadjuvant
                            chemotherapy –iasgcon 2017</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">POSTER- preoperative prediction of choledocholithiasis based on clinical and
                            biochemical factor –single center experience –iasgcon 2017</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">POSTER- varied presentation of diaphragmatic hernia with emphasis on surgical
                            management</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">POSTER- managemnt of primary sclerosing cholangitis with endotherapy</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">POSTER- newer modality of treatment for non healing ulcer –masicon nashik</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">POSTER – laproscopic pouch for FAP –single center experience –masicon thane</p>
                    </div>
                    <p>PUBLICATION – PTGIS and LYVE1 gene expression predicts response to chemotherapy in indian
                        colorectal cancer- for publication in scientific reports @nature</p>


                    <h5 class="h5-md blue-color">Awards</h5>
                    <!-- Option #1 -->
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Gold medal in Pediatrics 2010</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Bursary award - IASGCON 2017</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Best oral paper – IASGCON 2017</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">3rd rank in plenary session oral paper at – ISGCON – Bhubneshwar, 2017</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">TYSA ( young scholar award)- winner (1st rank zonals)</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">TYSA ( young scholar award)- winner (2nd rank National)</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Prestigious Professor Dr. Rangabashyam Gold Medal award for securing first rank
                            in india in GI and HPB Surgery in 2017 (Received from the President of India).Prestigious
                            Professor Dr. Rangabashyam Gold Medal award for securing first rank in india in GI and HPB
                            Surgery in 2017 (Received from the President of India).</p>
                    </div>

                    <h5 class="h5-md blue-color">Professional Membership</h5>
                    <!-- Option #1 -->
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Registered in madhya pradesh Medical Council (Affiliated to Indian Medical
                            Council), India, Reg. No. MP-12001( 13 june 2011 )</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Registered with Maharastra Medical Counsil– 2014/09/4158</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Member of AMASI – FMAS (4869)</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Life member of ASI (Association of Surgeon of India) (FL-32733)</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Life member of IHPBA (Indian Hepato Pancreatic Biliary Association) – (689 )</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Life member of IASG (Indian Association of Surgical Gastroenterology) (J -54)
                        </p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Life member of IAGES (Indian Association of Gastrointestinal and Endoscopic
                            Surgeon) (6269)</p>
                    </div>
                </div>
            </div> <!-- END DOCTOR BIO -->


        </div> <!-- End row -->
    </div> <!-- End container -->
</section>

@stop