@php($title = "Vital Signs | Bombay Hospital Indore")
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
                            <li class="breadcrumb-item"><a href="#">Health Education</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Cardiology
                            </li>
                        </ol>
                    </nav>

                    <!-- Title -->
                    <h4 class="h4-sm steelblue-color">Vital Signs</h4>

                </div>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</div> <!-- END BREADCRUMB -->

<div id="department-page" class="wide-60 department-page-section division">
    <div class="container">
        <div class="row">


            <!-- DEPARTMENT DETAILS -->
            <div class="col-lg-12">
                <div class="txt-block pr-30">

                    <!-- CONTENT BLOCK -->
                    <div class="content-block mb-40">
                        <h5 class="h5-md steelblue-color">What are vital signs?</h5>
                        <p>Vital signs are measurements of the body’s most basic functions. The four main vital signs
                            routinely monitored by medical professionals and health care providers include the
                            following:</p>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Body temperature</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Pulse rate</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Respiration rate (rate of breathing)</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Blood pressure (Blood pressure is not considered a vital sign, but is often measured
                                along with the vital signs.)</p>
                        </div>
                        <p>Vital signs are useful in detecting or monitoring medical problems. Vital signs can be
                            measured in a medical setting, at home, at the site of a medical emergency, or elsewhere.
                        </p>


                        <h5 class="h5-md steelblue-color">What is body temperature?</h5>
                        <p>The normal body temperature of a person varies depending on gender, recent activity, food and
                            fluid consumption, time of day, and, in women, the stage of the menstrual cycle. Normal body
                            temperature can range from 97.8 degrees F (or Fahrenheit, equivalent to 36.5 degrees C, or
                            Celsius) to 99 degrees F (37.2 degrees C) for a healthy adult. A person’s body temperature
                            can be taken in any of the following ways:</p>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Orally. Temperature can be taken by mouth using either the classic glass thermometer, or
                                the more modern digital thermometers that use an electronic probe to measure body
                                temperature.</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Rectally. Temperatures taken rectally (using a glass or digital thermometer) tend to be
                                0.5 to 0.7 degrees F higher than when taken by mouth.</p>
                        </div>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Axillary. Temperatures can be taken under the arm using a glass or digital thermometer.
                                Temperatures taken by this route tend to be 0.3 to 0.4 degrees F lower than those
                                temperatures taken by mouth.</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>By ear. A special thermometer can quickly measure the temperature of the ear drum, which
                                reflects the body’s core temperature (the temperature of the internal organs).</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>By skin. A special thermometer can quickly measure the temperature of the skin on the
                                forehead.</p>
                        </div>

                        <p>Body temperature may be abnormal due to fever (high temperature) or hypothermia (low
                            temperature). A fever is indicated when body temperature rises about one degree or more over
                            the normal temperature of 98.6 degrees Fahrenheit, according to the American Academy of
                            Family Physicians. Hypothermia is defined as a drop in body temperature below 95 degrees
                            Fahrenheit.</p>

                        <h5 class="h5-md steelblue-color">About glass thermometers containing mercury</h5>
                        <p>According to the Environmental Protection Agency, mercury is a toxic substance that poses a
                            threat to the health of humans, as well as to the environment. Because of the risk of
                            breaking, glass thermometers containing mercury should be removed from use and disposed of
                            properly in accordance with local, state, and federal laws. Contact your local health
                            department, waste disposal authority, or fire department for information on how to properly
                            dispose of mercury thermometers.</p>


                        <h5 class="h5-md steelblue-color">What is the pulse rate?</h5>
                        <p>The pulse rate is a measurement of the heart rate, or the number of times the heart beats per
                            minute. As the heart pushes blood through the arteries, the arteries expand and contract
                            with the flow of the blood. Taking a pulse not only measures the heart rate, but also can
                            indicate the following:</p>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Heart rhythm</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Strength of the pulse</p>
                        </div>

                        <p>The normal pulse for healthy adults ranges from 60 to 100 beats per minute. The pulse rate
                            may fluctuate and increase with exercise, illness, injury, and emotions. Females ages 12 and
                            older, in general, tend to have faster heart rates than do males. Athletes, such as runners,
                            who do a lot of cardiovascular conditioning, may have heart rates near 40 beats per minute
                            and experience no problems.</p>

                        <h5 class="h5-md steelblue-color">How to check your pulse?</h5>
                        <p>As the heart forces blood through the arteries, you feel the beats by firmly pressing on the
                            arteries, which are located close to the surface of the skin at certain points of the body.
                            The pulse can be found on the side of the neck, on the inside of the elbow, or at the wrist.
                            For most people, it is easiest to take the pulse at the wrist. If you use the lower neck, be
                            sure not to press too hard, and never press on the pulses on both sides of the lower neck at
                            the same time to prevent blocking blood flow to the brain. When taking your pulse:</p>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Using the first and second fingertips, press firmly but gently on the arteries until you
                                feel a pulse.</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Begin counting the pulse when the clock’s second hand is on the 12.</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Count your pulse for 60 seconds (or for 15 seconds and then multiply by four to calculate
                                beats per minute).</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>When counting, do not watch the clock continuously, but concentrate on the beats of the
                                pulse.</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>If unsure about your results, ask another person to count for you.</p>
                        </div>

                        <p>If your doctor has ordered you to check your own pulse and you are having difficulty finding
                            it, consult your doctor or nurse for additional instruction.</p>

                        <h5 class="h5-md steelblue-color">What is the respiration rate?</h5>
                        <p>The respiration rate is the number of breaths a person takes per minute. The rate is usually
                            measured when a person is at rest and simply involves counting the number of breaths for one
                            minute by counting how many times the chest rises. Respiration rates may increase with
                            fever, illness, and with other medical conditions. When checking respiration, it is
                            important to also note whether a person has any difficulty breathing.</p>
                        <p>Normal respiration rates for an adult person at rest range from 12 to 16 breaths per minute.
                        </p>

                        <h5 class="h5-md steelblue-color">What is blood pressure?</h5>
                        <p>Blood pressure, measured with a blood pressure cuff and stethoscope by a nurse or other
                            health care provider, is the force of the blood pushing against the artery walls. Each time
                            the heart beats, it pumps blood into the arteries, resulting in the highest blood pressure
                            as the heart contracts. One cannot take his or her own blood pressure unless an electronic
                            blood pressure monitoring device is used. Electronic blood pressure monitors may also
                            measure the heart rate, or pulse.</p>
                        <p>Two numbers are recorded when measuring blood pressure. The higher number, or systolic
                            pressure, refers to the pressure inside the artery when the heart contracts and pumps blood
                            through the body. The lower number, or diastolic pressure, refers to the pressure inside the
                            artery when the heart is at rest and is filling with blood. Both the systolic and diastolic
                            pressures are recorded as “mm Hg” (millimeters of mercury). This recording represents how
                            high the mercury column in an old-fashioned manual blood pressure device (called a mercury
                            manometer) is raised by the pressure of the blood. Today, your doctor’s office is more
                            likely to use a simple dial for this measurement.</p>
                        <p>High blood pressure, or hypertension, directly increases the risk of coronary heart disease
                            (heart attack) and stroke (brain attack). With high blood pressure, the arteries may have an
                            increased resistance against the flow of blood, causing the heart to pump harder to
                            circulate the blood.</p>
                        <p>According to the National Heart, Lung, and Blood Institute (NHLBI) of the National Institutes
                            of Health, high blood pressure for adults is defined as:</p>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>140 mm Hg or greater systolic pressure<br>or</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>90 mm Hg or greater diastolic pressure<br>In an update of NHLBI guidelines for
                                hypertension in 2003, a new blood pressure category was added called prehypertension:
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>120 mm Hg – 139 mm Hg systolic pressure<br>or</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>80 mm Hg – 89 mm Hg diastolic pressure<br>The NHLBI guidelines now define normal blood
                                pressure as follows:</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Less than 120 mm Hg systolic pressure<br>and</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Less than 80 mm Hg diastolic pressure</p>
                        </div>
                        <p>These numbers should be used as a guide only. A single elevated blood pressure measurement is
                            not necessarily an indication of a problem. Your doctor will want to see multiple blood
                            pressure measurements over several days or weeks before making a diagnosis of hypertension
                            (high blood pressure) and initiating treatment. A person who normally runs a
                            lower-than-usual blood pressure may be considered hypertensive with lower blood pressure
                            measurements than 140/90.</p>

                        <h5 class="h5-md steelblue-color">Why should I monitor my blood pressure at home?</h5>
                        <p>For people with hypertension, home monitoring allows your doctor to monitor how much your
                            blood pressure changes during the day, and from day to day. This may also help your doctor
                            determine how effectively your blood pressure medication is working.</p>

                        <h5 class="h5-md steelblue-color">What special equipment is needed to measure blood pressure?
                        </h5>
                        <p>Either an aneroid monitor, which has a dial gauge and is read by looking at a pointer, or a
                            digital monitor, in which the blood pressure reading flashes on a small screen, can be used
                            to measure blood pressure.</p>

                        <h5 class="h5-md steelblue-color">About the aneroid monitor</h5>
                        <p>The aneroid monitor is less expensive than the digital monitor. The cuff is inflated by hand
                            by squeezing a rubber bulb. Some units even have a special feature to make it easier to put
                            the cuff on with one hand. However, the unit can be easily damaged and become less accurate.
                            Because the person using it must listen for heartbeats with the stethoscope, it may not be
                            appropriate for the hearing-impaired.</p>

                        <h5 class="h5-md steelblue-color">About the digital monitor</h5>
                        <p>The digital monitor is automatic, with the measurements appearing on a small screen. Because
                            the recordings are easy to read, this is the most popular blood pressure measuring device.
                            It is also easier to use than the aneroid unit, and since there is no need to listen to
                            heartbeats through the stethoscope, this is a good device for hearing-impaired patients. One
                            disadvantage is that body movements or an irregular heart rate can change the accuracy.
                            These units are also more expensive than the aneroid monitors.</p>

                        <h5 class="h5-md steelblue-color">About finger and wrist blood pressure monitors</h5>
                        <p>Tests have shown that finger and/or wrist blood pressure devices are not as accurate in
                            measuring blood pressure as other types of monitors. In addition, they are more expensive
                            than the other monitors.</p>

                        <h5 class="h5-md steelblue-color">Before you measure your blood pressure:</h5>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Rest for three to five minutes without talking before taking a measurement.</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Sit in a comfortable chair, with your back supported and your legs and ankles uncrossed.
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Sit still and place your arm, raised level with your heart, on a table or hard surface.
                            </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Wrap the cuff smoothly and snugly around the upper part of your arm. The cuff should be
                                sized to fit smoothly, while still allowing enough room for one fingertip to slip under
                                it.</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-angle-double-right"></i></div>
                            <p>Be sure the bottom edge of the cuff is at least one inch above the crease in your elbow.
                            </p>
                        </div>

                        <p>It is also important, when taking blood pressure readings, that you record the date and time
                            of day you are taking the reading, as well as the systolic and diastolic measurements. This
                            will be important information for your doctor to have. Ask your doctor or another health
                            care professional to teach you how to use your blood pressure monitor correctly. Have the
                            monitor routinely checked for accuracy by taking it with you to your doctor’s office. It is
                            also important to make sure the tubing is not twisted when you store it and keep it away
                            from heat to prevent cracks and leaks.</p>
                        <p>Proper use of your blood pressure monitor will help you and your doctor in monitoring your
                            blood pressure.</p>
                    </div> <!-- END CONTENT BLOCK -->
                </div>
            </div> <!-- END DEPARTMENT DETAILS -->

        </div> <!-- End row -->
    </div> <!-- End container -->
</div>

@stop