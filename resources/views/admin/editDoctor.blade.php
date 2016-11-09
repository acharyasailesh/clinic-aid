@extends('layout.adminmain')
@include('inc.adminPanel.navside')
@section('editDoctor')

    @if (Session::has('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <div class="wrapper wrapper-content  animated fadeInRight">
        <div class="row">
            <div class="col-sm-8">
                <div class="ibox">
                    <div class="ibox-content">

                        <h2>Doctors</h2>

                        <form method="post" action="{{route('searchDoctor')}}">
                            {{csrf_field()}}
                            <div class="input-group">
                                <input type="text" placeholder="Search Doctor " class="input form-control"  name="keyword">
                                <span class="input-group-btn">
                                        <button type="submit" class="btn btn btn-primary"> <i class="fa fa-search"></i> Search</button>
                                </span>
                        </form>
                        </div>
                        <div class="clients-list">
                            <ul class="nav nav-tabs">

                                <li class="active"><a data-toggle="tab" href="#tab-1">Doctor Name</a></li>
                                <li class="active"><a data-toggle="tab" href="#tab-1"><i class="fa fa-user"></i>Contacts</a></li>



                            </ul>
                            <div class="tab-content">



                                <div id="tab-1" class="tab-pane active">
                                    <div class="full-height-scroll">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover">
                                                <tbody>

                                                @if (Session::has('doctors'))


                                                    <?php $doctors=session('doctors') ?>






                                                @endif




                                                @foreach($doctors as $doctor)



                                                        {{csrf_field()}}

                                                        <tr>



                                                            <td class="client-avatar">

                                                                @for($i=0;$i<$pictureNo;$i++)
                                                                    @if($doctor->id==$picture[$i]->doctor_id)


                                                                        <img src="{{$picture[$i]->path}}" alt="{{$doctor->firstName}}{{$doctor->middleName}} {{$doctor->lastName}} " class="img-responsive img-center-sm img-center-xs" width="100px" height="100px">
                                                                        @break

                                                                    @endif
                                                                @endfor
                                                            </td>






                                                            <td><a data-toggle="tab" href="#contact-{{$doctor->id}}" class="client-link">{{$doctor->firstName}} {{$doctor->middleName}} {{$doctor->lastName}}</a></td>
                                                            <td> {{$doctor->contact}}</td>


                                                    @endforeach

                                                    </tr>


                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="ibox ">

                    <div class="ibox-content">
                        <div class="tab-content">


                            @foreach($doctors as $doctor)
                                <div id="contact-{{$doctor->id}}" class="tab-pane">
                                    <div class="row m-b-lg">
                                        <div class="col-lg-4 text-center">
                                            <h4>{{$doctor->firstName}} </h4>


                                            <div class="m-b-sm">
                                                <img alt="image" class="img-circle" src="{{$doctor->dPhoto->path or null}}"
                                                     style="width: 62px">
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <strong>
                                                About me
                                            </strong>

                                            <p>
                                                {{$doctor->about}}

                                            </p>





                                        </div>
                                    </div>
                                    <div class="client-detail">
                                        <div class="full-height-scroll">
                                            <form action="{{route('doctorDetailsUpdate',['doctorId'=>$doctor->id])}}" method="post">
                                                {{csrf_field()}}
                                                {{method_field("PUT")}}

                                            <strong>Complete Doctor Details</strong>

                                            <ul class="list-group clear-list">


                                                <li class="list-group-item">
                                                    <span class="pull-right">
                                                        <input type="date" value="{{$doctor->firstName}}" name="firstName">
                                                         </span> </input>
                                                    First Name
                                                </li>


                                                <li class="list-group-item">
                                                    <span class="pull-right">
                                                        <input type="date" value="{{$doctor->middleName}}" name="middleName">
                                                         </span> </input>
                                                    Middle Name
                                                </li>

                                                <li class="list-group-item">
                                                    <span class="pull-right">
                                                        <input type="date" value="{{$doctor->lastName}}" name="lastName">
                                                         </span> </input>
                                                    Last Name
                                                </li>




                                                <li class="list-group-item">
                                                    <span class="pull-right">
                                                        <input type="date" value="{{$doctor->about}}" name="about">
                                                         </span> </input>
                                                    About
                                                </li>
                                                <li class="list-group-item">

                                                    <span class="pull-right">
                                                        <input type="text" value="{{$doctor->education}}" name="education">
                                                         </span> </input>
                                                    Education
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="pull-right">
                                                        <input type="text" value="{{$doctor->workDays}}" name="workDays">
                                                         </span> </input>
                                                    Work days
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="pull-right">
                                                        <input type="text" value="{{$doctor->facebook}}" name="facebook">
                                                         </span> </input>
                                                    Facebook
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="pull-right">
                                                        <input type="text" value="{{$doctor->contact}}" name="contact">
                                                         </span> </input>
                                                    Phone No
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="pull-right">
                                                        <input type="text" value="{{$doctor->twitter}}" name="twitter">
                                                         </span> </input>
                                                    Twitter
                                                </li>

                                                <li class="list-group-item">
                                                    <span class="pull-right">
                                                        <input type="text" value="{{$doctor->skype}}" name="skype">
                                                         </span> </input>
                                                    Skype
                                                </li>

                                                <li class="list-group-item">
                                                    <span class="pull-right">
                                                        <input type="text" value="{{$doctor->email}}" name="email" disabled>
                                                         </span> </input>
                                                    Email
                                                </li>




                                                <li class="list-group-item">
                                                    <span class="pull-right">
                                                        <input type="password"  name="password">
                                                         </span> </input>
                                                    Password
                                                </li>


                                                <div class="form-group">
                                                    <div class="col-sm-6">

                                                        <button class="btn btn-primary" type="submit">Save changes</button>

                                                    </div>
                                                    </form>



                                                    <form method="post" action="{{route('admin.deleteDoctor',['doctorId'=>$doctor->id])}}">
                                                        {{csrf_field()}}
                                                        {{method_field("DELETE")}}

                                                        <div class="col-sm-6">

                                                            <button class="btn btn-white" type="submit">Delete</button>

                                                        </div>


                                                    </form>



                                                </div>

















                                            </ul>

















































                                            {{----}}
                                            {{--<ul class="list-group clear-list">--}}

                                                {{--<li class="list-group-item">--}}
                                                    {{--<span class="pull-right"> {{$doctor->education}} </span>--}}
                                                    {{--Education--}}
                                                {{--</li>--}}
                                                {{--<li class="list-group-item">--}}
                                                    {{--<span class="pull-right"> {{$doctor->email}} </span>--}}
                                                    {{--Email--}}
                                                {{--</li>--}}

                                            {{--</ul>--}}

                                            <hr/>
                                            {{--@foreach($patient->medicalHistory as $history)--}}
                                                {{--<strong>Follow Up activity</strong>--}}
                                                {{--<div id="vertical-timeline" class="vertical-container dark-timeline">--}}
                                                    {{--<div class="vertical-timeline-block">--}}
                                                        {{--<div class="vertical-timeline-icon gray-bg">--}}
                                                            {{--<i class="fa fa-briefcase"></i>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="vertical-timeline-content">--}}
                                                            {{--<p>Patient Complain {{$history->complain}}<br>--}}
                                                                {{--Diagnosis Done: {{$history->diagnosis}} <br>--}}
                                                                {{--Advice Given : {{$history->doctorAdvice}}<br>--}}
                                                                {{--Prescription :{{$history->precription}}<br>--}}
                                                            {{--</p>--}}
                                                            {{--<span class="vertical-date small text-muted"> First Visit Date{{$history->visitationDate}} </span>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}

                                                {{--</div>--}}
                                            {{--@endforeach--}}
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div>
            <strong>Copyright</strong> Clinicaid.com &copy; 2016
        </div>
    </div>










@endsection


@section('endScripts')





    <!-- Data picker -->
    <script src="{{asset('back/js/plugins/datapicker/bootstrap-datepicker.js')}}"></script>
    <script>

        function save() {
            ////get the editable element
            var editElem = document.getElementById("edit");

            ////get the edited element content
            var userVersion = editElem.innerHTML;

            // save the content to local storage
            localStorage.userEdits = userVersion;

            ////write a confirmation to the user
            document.getElementById("update").innerHTML="Edits saved!";

        }

        $(document).ready(function(){
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
            $('#data_1 .input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });
        });
    </script>
@endsection
