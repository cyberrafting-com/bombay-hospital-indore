@php($title = "Health Tips | Bombay Hospital Indore")
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
                            <li class="breadcrumb-item active" aria-current="page">Health Library
                            </li>
                        </ol>
                    </nav>

                    <!-- Title -->
                    <h4 class="h4-sm steelblue-color">Health Tips</h4>

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
                            <img class="img-fluid" src="{{ asset('/resources/assets/images/services/health-tips.jpg')}}"
                                alt="">
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

                        <h5 class="h5-md steelblue-color">Food and Nutrition-</h5>

                        <p>Along with fresh veggies and fruits, eat slim meats (if you’re not vegetarian), nuts, seeds
                            (sprouts) and salads. </p>

                        <p>Opt for fresh, seasonal and local produce over exotic foodstuff imported over ridiculous
                            distances.</p>
                        <p>Make sure you get a balanced diet, as often as possible.</p>

                        <p><b>Drink water –</b> you need to stay hydrated. Not only is it good for your internal organs,
                            it also keeps your skin healthy and lessens acne. To determine your water requirement,
                            divide your weight (in pounds) by two. This gives the daily ounce-recommendation.</p>
                        <p>Cut down on caffeine and caffeinated and aerated beverages.</p>

                        <p><b>Limit alcohol intake.</b> Tobacco and drugs should be an absolute No.</p>

                        <p>Steer clear of sugar, stimulants and processed food. Maintain a healthy weight.</p>

                        <h5 class="h5-md steelblue-color">Exercise-</h5>

                        <p>Exercise at least four days a week for 20 to 30 minutes each day. If it’s all not possible at
                            a go, break your workouts into smaller sessions.</p>

                        <p>Try to get as much physical activity as you can. Skip the elevator and take the stairs, walk
                            to the supermarket instead of hunting for parking space etc.</p>
                        <p>Wake up early to practice simple meditation. It harmonizes body, mind and soul.</p>
                        <p>Doing household chores also counts as activity.</p>
                        <p>Pets can be a great source for your exercise. Especially a dog. Walking dogs, caring for them
                            involves good amounts of physical activity.</p>
                        <p>If exercising alone bores you out, hook up with a partner or friend who is committed to
                            exercise. The fun factor will also let you stay committed.</p>
                        <p>Exercise also works as an outlet for pent up stress. So keep exercising, especially when
                            you’ve got work bearing down on you.</p>

                        <h5 class="h5-md steelblue-color">General Health-</h5>

                        <p>Get adequate rest daily. Don’t deprive yourself of sleep for extended periods of time.</p>
                        <p>If you’re on medication for an illness, ensure that you follow the course all the way
                            through.</p>
                        <p>Skin, teeth, hair, nails are all indicators of general health. Loss of hair or lack of lustre
                            may mean poor nutrition.</p>
                        <p>Make friends with your family physician. Get regular check-ups done.</p>
                        <p>Watch out for the signs of major illnesses, especially cancer, heart disease etc. Early
                            detection is the key.</p>
                        <p>When it comes to healthy living, even little things count. Like eye health. Make sure you
                            rest them well. They’ll serve you a long time.</p>
                        <p>Take care of your teeth. Dental health has been linked, among other things, to premature
                            heart disease.</p>
                        <p>Try to get all your nutrition from the food you eat. If you aren’t getting it though,
                            multivitamins and nutritional supplements are a good option.</p>
                        <p>Get your vitamin D from the sun. But also stay UV-protected.</p>

                        <h5 class="h5-md steelblue-color">Health and Happiness-</h5>

                        <p>Slow and deep breathing is a good counter to stressful situations. Practice it.</p>
                        <p>Surround yourself with positive energy and a strong social circle. Good vibes translates into
                            good moods.</p>
                        <p>Engage in social work. Do things for the less-privileged.</p>
                        <p>Work on your looks, but don’t get obsessed. Pamper yourself occasionally.</p>
                        <p>Believe in your abilities. Work on your shortcomings. Life is a continuous self-help program.
                        </p>
                    </div> <!-- END CONTENT BLOCK -->
                </div>
            </div> <!-- END DEPARTMENT DETAILS -->

            <!-- SIDEBAR  -->
            <div class="col-lg-4">
                @include('includes.health-sidebar')
            </div>

        </div> <!-- End row -->
    </div> <!-- End container -->
</div>

@stop