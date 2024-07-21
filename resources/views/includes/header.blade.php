<!-- HEADER
            ============================================= -->
<header id="header-2" class="header">


    <!-- MOBILE HEADER -->
    <div id="navbar" class="wsmobileheader clearfix">
        <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
        <span class="smllogo"><img src="{{ asset('/resources/assets/images/indore.png')}}" width="180" height="40"
                alt="mobile-logo" /></span>
        <a href="tel: 0731-4771111" class="callusbtn"><i class="fas fa-phone"></i></a>
    </div>

    <div class="headtoppart bg-blue">
        <div class="container">
            <div class="row">
                <div class="col-md-11">
                    <div class="address">
                        <span><a href="{{ route('transplant-facilities')}}">Transplant Facilities Available
                                &nbsp;|</a></span>
                        <span><a href="{{ route('ehs')}}">Executive Health Schemes &nbsp;|</a></span>
                        <span><a href="#">Feedback/Suggestions &nbsp;|</a></span>
                        <span><a href="{{ route('downloads')}}">Downloads &nbsp;|</a></span>
                        <span><a href="{{ route('patient-stories')}}">Patient Stories &nbsp;|</a></span>
                        <span><a href="{{ route('stents-pricing')}}">Stents Pricing &nbsp;|</a></span>
                        <span><a href="{{ route('bmw')}}">BMW &nbsp;|</a></span>
                        <span><a href="{{ route('vacancies')}}">Vacancies</a></span>  
                    </div>
                </div>
                <div class="col-md-1 mt-2 text-center"">
                    <div id="google_translate_element"></div>
                    <script type="text/javascript">
                    function googleTranslateElementInit() {
                      new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: "en,mr,hi", layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
                    }
                    </script>   
                    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                    </div>
            </div>
        </div>
    </div>

    <!-- HEADER WIDGETS -->
    <div class="hero-widget clearfix">
        <div class="container">
            <div class="row d-flex align-items-center">

                <div class="col-md-4 col-xl-4">
                    <div class="desktoplogo"><a href="{{route('home')}}"><img src="{{ asset('/resources/assets/images/logo.png')}}"
                                alt="header-logo"></a></div>
                </div>

                <!-- WIDGETS -->
                <div class="col-md-8 col-xl-8">
                    <div class="row">


                        <div class="col-md-2">
                            <div style="align-items: center; display: inline-flex;" class="header-widget icon-xs">
                                <span class="flaticon-039-emergency-call-1 blue-color"></span>
                                <div class="header-widget-txt">
                                    <p style="font-size: 20px; color: #0ab1ce;    font-weight: 300;" class="txt-500">
                                        Emergency</p>
                                    <p class="lightgrey-color"><a style="color: #0e3249; font-size: 15px;"
                                            class="txt-400" href="tel: 0731-4771111">0731-4771111</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-2">
                            <div style="align-items: center; display: inline-flex;" class="header-widget icon-xs">
                                <img class="mr-10" src="{{ asset('/resources/assets/images/mail.png')}}" />
                                <div class="header-widget-txt">
                                    <p style="font-size: 20px; color: #0ab1ce;    font-weight: 300;" class="txt-500">
                                        Email</p>
                                    <p class="lightgrey-color"><a style="color: #0e3249; font-size: 15px;"
                                            class="txt-400"
                                            href="mailto: msofficebhi@gmail.com">msofficebhi@gmail.com</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                        <!-- Location Widget -->
                        <div class="col-md-4">
                            <div class="header-button">
                                <span class="nl-simple header-btn blue-hover"><a href="{{ route('appointment')}}">Make
                                        an Appointment</a></span>
                            </div>
                        </div>
                        <div class="col-md-2">
                            
                        </div>

                    </div>
                </div> <!-- END WIDGETS -->

            </div>
        </div>
    </div> <!-- END HEADER WIDGETS -->


    <!-- NAVIGATION MENU -->
    <div class="wsmainfull menu clearfix">
        <div class="wsmainwp clearfix">

            <!-- MAIN MENU -->
            <nav class="wsmenu clearfix">
                <ul class="wsmenu-list">

                    <li class="nl-simple" aria-haspopup="true"><a href="{{ route('home')}}">Home</a></li>
                    <!-- DROPDOWN MENU -->
                    <li aria-haspopup="true"><a href="#">About us<span class="wsarrow"></span></a>
                        <ul class="sub-menu">
                            <li aria-haspopup="true"><a href="{{ route('founders')}}">Founders</a></li>
                            <li aria-haspopup="true"><a href="{{ route('history')}}">History</a></li>
                            <li aria-haspopup="true"><a href="{{ route('hospital-location')}}">Hospital Location</a>
                            </li>
                            <li aria-haspopup="true"><a href="{{ route('management-board')}}">Management Board</a></li>
                            <li aria-haspopup="true"><a href="{{ route('vision-mission')}}">Vision, Mission & Motto</a>
                            </li>
                            <li aria-haspopup="true"><a href="{{ route('philosophy')}}">Philosophy</a></li>
                        </ul>
                    </li>

                    <li aria-haspopup="true"><a href="#">Services <span class="wsarrow"></span></a>
                        <div class="wsmegamenu clearfix">
                            <div class="container">
                                <div class="row">
                                    <ul class="col-lg-2 col-md-12 col-xs-12 link-list">
                                        <li class="title">Medical</li>
                                        <li><a href="{{ route('cardiology')}}">Cardiology</a></li>
                                        <li><a href="{{ route('chest-medicine')}}">Chest Medicine</a></li>
                                        <li><a href="{{ route('gastroentrology')}}">Gastroentrology</a></li>
                                        <li><a href="{{ route('general-medicine')}}">General Medicine</a></li>
                                        <li><a href="{{ route('neonatology')}}">Neonatology</a></li>
                                        <li><a href="{{ route('nephrology')}}">Nephrology</a></li>
                                        <li><a href="{{ route('neurology')}}">Neurology</a></li>
                                        <li><a href="{{ route('oncology')}}">Oncology</a></li>
                                        <li><a href="{{ route('paediatrics')}}">Paediatrics</a></li>
                                    </ul>

                                    <ul class="col-lg-2 col-md-12 col-xs-12 link-list">
                                        <li class="title">Diagnostic</li>
                                        <li><a href="{{ route('blood-transfusion-service')}}">Blood Transfusion
                                                Service</a></li>
                                        <li><a href="{{ route('cath-lab')}}">Cath Lab</a></li>
                                        <li><a href="{{ route('ecg')}}">ECG, Echo/Stress & Holter</a></li>
                                        <li><a href="{{ route('eeg')}}">EEG, EMG</a></li>
                                        <li><a href="{{ route('histopathology')}}">Histopathology Department</a></li>
                                        <li><a href="{{ route('mri')}}">MRI & CT Scan</a></li>
                                        <li><a href="{{ route('pathology')}}">Pathology</a></li>
                                        <li><a href="{{ route('pulmonary-function-lab')}}">Pulmonary Function Lab</a>
                                        </li>
                                        <li><a href="{{ route('ultrasound')}}">Ultrasound</a></li>
                                        <li><a href="{{ route('xray')}}">X-Ray</a></li>
                                        <!-- <li class="title">Health Library</li>
                                    <li><a href="{{ route('health-tips')}}">Health Tips</a></li>
                                    <li><a href="{{ route('health-education')}}">Health Education</a></li>
                                    <li><a href="{{ route('tests-procedures')}}">Tests & Procedures</a></li> -->
                                    </ul>

                                    <ul class="col-lg-2 col-md-12 col-xs-12 link-list">
                                        <li class="title">Therapeutic</li>
                                        <li><a href="{{ route('dialysis')}}">Dialysis Unit</a></li>
                                        <li><a href="{{ route('dietician')}}">Dietician & Nutrition Clinic</a></li>
                                        <li><a href="{{ route('doctor-scorecard')}}">Doctor's Scorecard</a></li>
                                        <li><a href="{{ route('lithotripsy')}}">Lithotripsy</a></li>
                                        <li><a href="{{ route('physiotherapy')}}">Physiotherapy</a></li>
                                        <li><a href="{{ route('ehs')}}">Preventive Health Care</a></li>

                                    </ul>

                                    <ul class="col-lg-2 col-md-12 col-xs-12 link-list">
                                        <li class="title">Surgical</li>
                                        <li><a href="{{ route('cardiovascular-thoracic-surgery')}}">Cardiovascular &
                                                Thoracic Surgery</a></li>
                                        <li><a href="{{ route('ent')}}">Ear/Nose/Throat</a></li>
                                        <li><a href="{{ route('general-surgery')}}">General Surgery</a></li>
                                        <li><a href="{{ route('kidney-transplant')}}">kidney Transplant</a></li>
                                        <li><a href="{{ route('gastrointestinal-surgery')}}">Gastrointestinal
                                                Surgery</a></li>
                                        <li><a href="{{ route('neurosurgery')}}">Neurosurgery</a></li>
                                        <li><a href="{{ route('obstetrics')}}">Obstetrics & Gynaecology Surgery</a>
                                        </li>
                                        <li><a href="{{ route('ophthalmology')}}">Ophthalmology</a></li>
                                    </ul>

                                    <ul class="col-lg-2 col-md-12 col-xs-12 link-list">
                                        <li><a href="{{ route('orthopaedics')}}">Orthopaedics</a></li>
                                        <li><a href="{{ route('plastic-surgery')}}">Plastic Surgery</a></li>
                                        <li><a href="{{ route('surgical-oncology')}}">Surgical Oncology</a></li>
                                        <li><a href="{{ route('urology')}}">Urology</a></li>
                                        <li class="title">Round the Clock</li>
                                        <li><a href="{{ route('admission')}}">Admission</a></li>
                                        <li><a href="{{ route('ecg-xray')}}">ECG & X-Ray</a></li>
                                        <li><a href="{{ route('emergency')}}">Emergency & Casualty</a></li>
                                        <li><a href="{{ route('path-lab')}}">Path Lab</a></li>
                                        <li><a href="{{ route('pharmacy')}}">Pharmacy</a></li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </li>

                    <li aria-haspopup="true"><a href="#">In-Patient Guide<span class="wsarrow"></span></a>
                        <ul class="sub-menu">
                            <li aria-haspopup="true"><a href="{{ route('admission-procedures')}}">Admission
                                    Procedures</a></li>
                            <li aria-haspopup="true"><a href="{{ route('billing')}}">Billing</a></li>
                            <li aria-haspopup="true"><a href="{{ route('insurance')}}">Insurance/Mediclaim</a></li>
                            <li aria-haspopup="true"><a href="{{ route('imp-telephone')}}">Important Telephone
                                    Numbers</a></li>
                            <li aria-haspopup="true"><a href="{{ route('meals')}}">Meals</a></li>
                            <li aria-haspopup="true"><a href="{{ route('room-facilities')}}">Room Facilities</a></li>
                            <li aria-haspopup="true"><a href="{{ route('visiting-hours')}}">Visiting Hours</a></li>
                        </ul>
                    </li>

                    <!-- SIMPLE NAVIGATION LINK -->
                    <li class="nl-simple" aria-haspopup="true"><a href="{{ route('panel-of-consultants')}}">Panel of
                            Consultants</a></li>

                    <li class="nl-simple" aria-haspopup="true"><a href="{{ route('why-bombay-hospital')}}">Why Bombay
                            Hospital</a></li>

                    <li class="nl-simple" aria-haspopup="true"><a href="{{ route('photo-gallery')}}">Photo Gallery</a>
                    </li>

                    <li class="nl-simple" aria-haspopup="true"><a target="_blank"
                            href="https://bpl-portal.bombayhospitalindore.com/">BPL Portal</a></li>

                    <li class="nl-simple" aria-haspopup="true"><a href="{{ route('contact')}}">Contact Us</a></li>

                    <li class="nl-simple" aria-haspopup="true"><a target="_blank"
                            href="https://walkinto.in/tour/WJN7ftm4dX-1lNQGYmNuX">Virtual Tour</a></li>
                            
                    <li class="nl-simple" aria-haspopup="true"><a 
                   href="{{ route('career')}}">Career</a></li>       

                </ul>

            </nav> <!-- END MAIN MENU -->

        </div>
    </div> <!-- END NAVIGATION MENU -->


</header> <!-- END HEADER -->