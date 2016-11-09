@extends('layout.main')
@section('doctors')
<!-- Main Container Starts -->
<div class="container main-container">

    <!-- Doctors Bio List Starts -->
    <ul id="doctors-grid" class="row grid">




        @foreach($doctors as $doctor)
        <!-- Doctor Bio #1 Starts -->
        <li class="col-md-4 col-sm-6 col-xs-12 doctors-grid" data-groups='["all", "healthcare"]'>
            <div class="bio-box">
                <div class="profile-img">
                    @for($i=0;$i<$doctorNo;$i++)
                        @if($doctor->id==$picture[$i]->doctor_id)


                            <img src="{{$picture[$i]->path}}" alt="{{$doctor->firstName}}{{$doctor->middleName}} {{$doctor->lastName}} " class="img-responsive img-center-sm img-center-xs">
                            @break

                        @endif
                    @endfor

                    <div class="overlay">
                        <ul class="list-unstyled list-inline sm-links">
                            <li><a href="{{$doctor->twitter}}"><i class="fa fa-twitter"></i> </a></li>
                            <li><a href="{{$doctor->facebook}}"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{$doctor->skype}}"><i class="fa fa-skype"></i></a></li>
                        </ul>
                    </div>
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
        </li>
        @endforeach


    </ul>
    <!-- Doctors List Ends -->
</div>
</div>
<!-- Main Container Ends -->
@endsection


