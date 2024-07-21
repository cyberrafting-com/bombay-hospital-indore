@php($title = "Dr. Alok Mandliya | Bombay Hospital Indore")
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
                    <h4 class="h4-sm steelblue-color">Dr. Alok Mandliya</h4>

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
                    <img class="img-fluid" src="{{ asset('/resources/assets/images/team/dr-alok-mandliya.jpg')}}"
                        alt="">

                    <!-- Doctor Info -->
                    <div class="doctor-info">
                        <h5 class="h5-md blue-color">Qualifications</h5>
                        <p>MBBS from MGM Medical College Indore MP, 2001-2007.</p>
                        <p>MD (Medicine) from Seth GS Medical college and KEM Hospital Mumbai 2007-2010</p>
                        <p>DM Neurology from Sri Chitra Tirunal Institute for Medical Sciences and Technology (SCTIMST),
                            Trivandrum 2011-2013</p>
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Extn. No.:</td>
                                    <td>2103</td>
                                </tr>
                                <tr>
                                    <td>Consulting Time:</td>
                                    <td>Mon-Sat - 10 am to 6 pm
                                    </td>
                                </tr>
                                <tr>
                                    <td>Consulting Room:</td>
                                    <td>3 (First Floor)</td>
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
                    <p>Dr. Alok Mandliya obtained his medical graduation from MGM Medical college Indore. He went on to
                        successfully complete his post-graduate training in Medicine obtaining the Doctor of Medicine
                        from prestigious Seth GS Medical college and KEM Hospital Mumbai with gold medal. He was awarded
                        by prestigious Jaykar Award in Mumbai in 2010. He did his DM from world renowned Sri Chitra
                        Tirunal Institute for Medical Sciences and Technology (SCTIMST), Trivandrum with gold medal. He
                        was trained under the guidance of Dr D R Karnad and Dr Prof.K Radhakrishnan. In 2013 he was
                        rewarded as best young neurologist in India. Following his return, he joined Bombay Hospital
                        Indore as Neurologist where he is serving with full dedication. In 2014 he was single
                        neurologist from India who was invited by Japanese Society of Electrophysiology in Super EMG
                        workshop. He is a life member of American Academy of Neurology, Indian Academy of Neurology. He
                        is also an active speaker in Neuro Club Indore. His basic area of interest is stroke, critical
                        care neurology and neuro infectious diseases.</p>

                    <h5 class="h5-md blue-color">Expertise</h5>
                    <p>Critical Neurological Illness, Stroke, Epilepsy, Movement Disorders, Botox Therapy, Headache and
                        Neuromuscular Diseases</p>

                    <h5 class="h5-md blue-color">Achievements and Accolades</h5>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Invited in Tokyo SuperEMG workshop 2014, single young neurophysician from India
                        </p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Torrent Young Scholar Award 2013 : Considered as best budding brain in field of
                            Neurology 2013 in India</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Gold Medal in Neurology 2013</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Jaykar Award 2010 : Best Postgraduate in Medicine in Mumbai</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Gold Medal in Medicine 2010 (Post Graduation)</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Gold Medal in Paediatrics 2007</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Gold Medal in Pathology 2004</p>
                    </div>

                    <h5 class="h5-md blue-color">Paper Published</h5>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Sinus arrest: Complicating acute posterior cerebral artery stroke : Alok
                            Mandliya, Narayanan Namboodiri,Sapna Erat Sreedharan, Sylaja P. N., Neurology India, Sep-Oct
                            2011, Vol 59,Issue 5 : 772-773</p>
                    </div>
                    <div class="box-list m-top-15">
                        <div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
                        <p class="p-sm">Successful mechanical thrombectomy of acute middle cerebral artery occlusion due
                            to vegetation from infective endocarditis : Sajith Sukumaran, ER Jayadevan, Alok Mandliya,
                            Sapna Erat Sreedharan, S.Harikrishnan, Neelima Radhakrishnan, PN Sylaja : Neurology India
                            2012, Volume : 60,Issue : 2, Page : 239-240</p>
                    </div>

                </div>
            </div> <!-- END DOCTOR BIO -->


        </div> <!-- End row -->
    </div> <!-- End container -->
</section>

@stop