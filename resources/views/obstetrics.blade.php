@php($title = "Obstetrics and Gynaecology Surgery | Bombay Hospital Indore")
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
                            <li class="breadcrumb-item"><a href="#">Services</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Surgical
                            </li>
                        </ol>
                    </nav>

                    <!-- Title -->
                    <h4 class="h4-sm steelblue-color">Obstetrics and Gynaecology Surgery</h4>

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
                            <img class="img-fluid" src="{{ asset('/resources/assets/images/services/obstetrics.jpg')}}"
                                alt="content-image">
                        </div>

                        <!-- <div id="pricing-2" class="pricing-section division">
                                    <div class="row pricing-row">

                                        <div class="col-md-12">
                                            <h5 class="h5-md steelblue-color">ECG</h5>

                                            <div class="pricing-table mb-40">
                                                <table class="table table-hover">
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">Location</th>
                                                            <td>Ground Floor</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">For Appointment</th>
                                                            <td>0731-4771111 Extn. 2004</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Dept. Timings</th>
                                                            <td>Emergency-24 hrs</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">List of Consultants</th>
                                                            <td>Dr. Arun Jain</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <h5 class="h5-md steelblue-color">X-RAY</h5>

                                            <div class="pricing-table mb-40">
                                                <table class="table table-hover">
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">Location</th>
                                                            <td>Basement</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">For Appointment</th>
                                                            <td>0731-4771111 Extn. 3006</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Dept. Timings</th>
                                                            <td>Emergency-24 hrs</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">List of Consultants</th>
                                                            <td>Dr. Mukesh Gupta</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->

                        <p>Bombay Hospital Indore has a dedicated Department of Obstetrics and Gynecology, with
                            a team which practices evidence based medicine and uses internationally accepted
                            protocols. Obstetricians are available round the clock and handle high risk
                            pregnancies with the support of extremely well trained, experienced nurses and
                            intensive care unit with all the required equipment and support staff. A
                            pediatrician is present for all deliveries to handle any new born emergency.
                            Expectant fathers are allowed to be part of the normal delivery process when
                            appropriate. In addition, the specialized birthing centres provide a comfortable
                            environment with easy access to contemporary infrastructure.
                        </p>

                        <h5 class="h5-md steelblue-color">The following is a list of issues that are tackled at this
                            institute -</h5>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Problems of adolescence and puberty. The health of young girls
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Infertility. Problems in getting pregnant
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Miscarriage and recurrent miscarriage. Where a pregnancy does not grow.
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Deliveries—including complicated deliveries such as pregnancy with high blood
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Pressure or Diabetes or heart disease and other medical issues.
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Menstruation related problems.
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Family Planning counseling or contraception.
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Ovarian cysts.
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Endometriosis
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Fibroids
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Menopause. The issues concerning women after the periods have stopped.
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Vaginal and vulval disorders. Infections and disease of the front passage.
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Hormonal disturbances e.g. PCOS
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Cancers related to the female organs.
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>IUI i.e. infertility laboratory
                            </p>
                        </div>

                        <h5 class="h5-md steelblue-color">Obstetrics -</h5>

                        <p>Antenatal care is handled by consultants. We have dedicated physiotherapists to advice
                            regarding antenatal exercises. For those needing special dietary considerations we have a
                            dietician also available.</p>

                        <p>We have an excellent labour ward with staff who offer tender, loving care. The doctors are
                            present at all times, so emergencies are handled effectively. There is facility for epidural
                            analgesia for those keen on having painless labour. We have a state of the art CTG or NST
                            which helps us in monitoring the babies before and during labour. We have a high vaginal
                            delivery rate for uncomplicated cases. However if and when a caesarean is needed we have an
                            excellent OT with competent doctors and assistants. Even the decision to do a caesarean is
                            taken only in consultation with the mother and her partner.</p>

                        <p>All deliveries are attended by a neonatologist, ensuring that the baby receives good care
                            from the start itself. The NICU facility is excellent, this enables us to manage high risk
                            cases very nicely. Even very premature babies have an excellent survival rate.For high risk
                            cases and pregnancies we have the facilities of ICU, Physicians, Intensivists and
                            Nephrologists as and when required. Again this helps us to have a Multi disciplinary
                            approach and reduce the risk and rate of complications that a mother faces. Even when a
                            complication arises it is managed very effectively. There is a fully equipped 24 hours blood
                            bank and laboratory. This also helps in the prompt investigation and starting of treatment.
                            Post delivery the mother is looked after in well equipped wards. Breast feeding is started
                            right after delivery on the delivery table itself and motivated till 6 months exclusively.
                        </p>

                        <h5 class="h5-md steelblue-color">Gynaecology -</h5>

                        <p>As mentioned earlier a host of gynaecological problems are handled in this department, from
                            infertility to menopause.</p>

                        <p><b>Coming to some of the surgeries that are offered here. We offer the following
                                surgeries-</b></p>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Diagnostic hysteroscopy and laparoscopy. This may be done for a variety of reasons such
                                as infertility, irregular bleeding, pain in the abdomen, bleeding after the periods
                                stop.
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Operative Laparoscopy. For endometriosis and fibroids and ovarian cysts
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Vaginal Hysterectomy, even for large fibroids
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Total Laparoscopic Hysterectomy
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Abdominal Hysterectomy
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Surgery for cancer
                            </p>
                        </div>

                        <p>The OT is very well equipped with the latest anaesthetic and surgical equipment. Most of the
                            endoscopic equipment is by Karl Storz. We have the Ethicon Harmonics scalpel which helps
                            indifficult surgeries and reduces complications.</p>

                        <p>We have excellent post operative care and for high risk cases, a dedicated post operative ICU
                            isalso available.</p>

                        <p>All referrals for tertiary cases whether obstetric or gynaec are accepted. All our doctors
                            are extremely competent and offer excellent counseling. Patient satisfaction is the aim and
                            the whole department works as a team with that in mind.</p>
                    </div> <!-- END CONTENT BLOCK -->
                </div>
            </div> <!-- END DEPARTMENT DETAILS -->

            <!-- SIDEBAR  -->
            <div class="col-lg-4">
                @include('includes.surgical-sidebar')
            </div>

        </div> <!-- End row -->
    </div> <!-- End container -->
</div>

@stop