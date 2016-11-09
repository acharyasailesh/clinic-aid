@extends('layout.main')
@section('home')
    @include('inc.slider')

    <!-- Main Container Starts -->
    <div class="container main-container">
        <!-- Notification Boxes Starts -->
        <div class="notification-boxes row">
            <!-- Box #1 Starts -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="box">

                    <h4>Qualified Doctors</h4>
                    <p>
                       We have got qualified doctors on our clinics
                    </p>
                    <a href="#doctors" class="btn btn-transparent">Read More</a>
                </div>
            </div>
            <!-- Box #1 Ends -->
            <!-- Box #2 Starts -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="box">

                    <h4>Regular Checkup</h4>
                    <p>
                        We are providing 24 hours medical services.
                    </p>
                    <a href="#services" class="btn btn-transparent">Read More</a>
                </div>
            </div>
            <!-- Box #2 Ends -->
            <!-- Box #3 Starts -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="box">

                    <h4>Lab <br>Test</h4>
                    <p>
                        We provide lab test like urine, blood and sugar test
                    </p>
                    <a href="#" class="btn btn-transparent">Read More</a>


                </div>
            </div>
            <!-- Box #3 Ends -->
            <!-- Box #4 Starts -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="box">

                    <h4>Our Clinic <br>News</h4>
                    <p>
                       Know about what is happening on our clinic
                    </p>
                    <a href="{{url('news')}}" class="btn btn-transparent">Read More</a>
                </div>
            </div>
            <!-- Box #4 Ends -->
        </div>
        <!-- Notification Boxes Ends -->
        <!-- Welcome Section Starts -->
        <section class="welcome-area">
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <h2 class="main-heading1 lite">We Offer Fast &amp; Reliable</h2>
                    <h2 class="main-heading2">Medical &amp; Healthcare Needs</h2>
                    <p>
                        We provide quick and reliable treatment to patients based on our experience doctors.
                    </p>
                    <p>
                        We are providing services 24 hours to patients.
                    </p>
                </div>
                <div class="col-md-6 col-xs-12">
                    <img src="images/doctor.jpg" alt="image" class="img-responsive img-style1" width="572px" height="332">
                </div>
            </div>
        </section>
        <!-- Welcome Section Ends -->
    </div>
    <!-- Main Container Ends -->
    <!-- Meet Our Doctors Section Starts -->
    <section class="featured-doctors" id="doctors">
        <!-- Nested Container Starts -->
        <div class="container">
            <h2><span class="lite">Meet Our</span> Doctors</h2>
            <p>
                We have got qualitive doctors on our clincs
            </p>

                @foreach($doctors as $doctor)

                    <!-- Doctor Bio #1 Starts -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                    <!-- Doctor Bio #1 Starts -->

                            <div class="bio-box">
                                <div class="profile-img">
                                    @for($i=0;$i<$doctorNo;$i++)
                                        @if($doctor->id==$picture[$i]->doctor_id)


                                            <img src="{{$picture[$i]->path}}" alt="{{$doctor->firstName}}{{$doctor->middleName}} {{$doctor->lastName}} " class="img-responsive img-center-sm img-center-xs" width="300px" height="300px">
                                            @break

                                        @endif
                                    @endfor


                                    <div class="overlay">
                                        <ul class="list-unstyled list-inline sm-links">
                                            <li><a href="{{$doctor->twitter}}"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="{{$doctor->facebook}}"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="{{$doctor->skype}}"><i class="fa fa-skype"></i></a></li>
                                        </ul>
                                    </div>

                                            <div class="inner">
                                                <h4>Dr. {{$doctor->firstName}} {{$doctor->middleName}} {{$doctor->lastName}}</h4>
                                                <p class="designation">{{$doctor->speciality}}</p>
                                                <p class="divider"><i class="fa fa-plus-square"></i></p>
                                                <p>
                                                    {{$doctor->about}}
                                                </p>
                                            </div>

                                </div>
                            </div>

                    </div>

                    @endforeach


        <!-- Nested Container Ends -->
    </section>
    <!-- Meet Our Doctors Section Ends -->
    <!-- Main Container Starts -->
    <div class="container main-container" id="services">
        <!-- Medical Services Section Starts -->
        <section class="medical-services">
            <h2 class="main-heading1 lite">Our Best</h2>
            <h2 class="main-heading2">Medical Services</h2>
            <!-- Medical Services List Starts -->
            <ul class="list-unstyled row text-center">
                <li class="col-md-3 col-sm-4 col-xs-12">
                    <div class="icon">
                        <img src="images/band-aid.png" alt="Band Aid">
                    </div>
                    <h5>First Aid</h5>
                    <p>We provide first aid services</p>
                </li>
                <li class="col-md-3 col-sm-4 col-xs-12">
                    <div class="icon">
                        <img src="images/tooth.png" alt="Dental Care">
                    </div>
                    <h5>Dental Care</h5>
                    <p>We have got dental services</p>
                </li>

                <li class="col-md-3 col-sm-4 col-xs-12">
                    <div class="icon">
                        <img src="images/nurse.png" alt="Qualified Doctors">
                    </div>
                    <h5>Qualified Doctors</h5>
                    <p>We have expert doctors</p>
                </li>
                <li class="col-md-3 col-sm-4 col-xs-12">
                    <div class="icon">
                        <img src="images/saline-bottle.png" alt="Medical Pharmacy">
                    </div>
                    <h5>Medical Pharmacy</h5>
                    <p>We have got medical pharmacy full of different medicines</p>
                </li>

            </ul>
            <!-- Medical Services List Ends -->
        </section>
        <!-- Medical Services Section Ends -->
        <!-- Content Starts -->


    </div>
    <!-- Main Container Ends -->
</div>
@endsection

