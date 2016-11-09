@extends('layout.adminmain')
@include('inc.adminPanel.navside')
@section('editpatient')

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


    @if (Session::has('success'))
        <div class="alert alert-success">
            {{session('success')}}

        </div>



        @endif

    @if (Session::has('deleted'))
        <div class="alert alert-success">
            {{session('deleted')}}

        </div>



    @endif


    @if (Session::has('Added'))
        <div class="alert alert-success">
            {{session('Added')}}

        </div>



    @endif

    @if (Session::has('Updated'))
        <div class="alert alert-success">
            {{session('Updated')}}

        </div>



    @endif






    <div class="wrapper wrapper-content  animated fadeInRight">
        <div class="row">
            <div class="col-sm-8">
                <div class="ibox">
                    <div class="ibox-content">

                        <h2>Patients</h2>



                            <form method="post" action="{{route('searchPatient')}}">
                                {{csrf_field()}}
                                <div class="input-group">
                                <input type="text" placeholder="Search patient " class="input form-control"  name="keyword">
                                <span class="input-group-btn">
                                        <button type="submit" class="btn btn btn-primary"> <i class="fa fa-search"></i> Search</button>
                                </span>
                            </form>

                        </div>
                        <div class="clients-list">
                            <ul class="nav nav-tabs">

                                <li class="active"><a data-toggle="tab" href="#tab-1"><i class="fa fa-user"></i>Patient Name</a></li>
                                <li class="active"><a data-toggle="tab" href="#tab-1"><i class="fa fa-user"></i>Contacts</a></li>
                                <li class="active"><a data-toggle="tab" href="#tab-1"><i class="fa fa-user"></i>Currently Doctor Assigned</a></li>
                                <li class="active"><a data-toggle="tab" href="#tab-1"><i class="fa fa-user"></i>Modification </a></li>

                            </ul>
                            <div class="tab-content">



                                <div id="tab-1" class="tab-pane active">
                                    <div class="full-height-scroll">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover">
                                                <tbody>
                                                @if (Session::has('patient'))


                                                       <?php $patient=session('patient') ?>






                                                @endif

                                                @foreach($patient as $patient)


                                                    <form method="post" action="{{route('admin.updatePatient',['patient'=>$patient->id])}}">

                                                        {{csrf_field()}}

                                                        <tr>

                                                            <td class="client-avatar"><a href=""><img alt="image" src="{{$patient->pPhoto->path}}" width=100 height=100"></a> </td>
                                                            <td><a data-toggle="tab" href="#contact-{{$patient->id}}" class="client-link">{{$patient->firstName}} {{$patient->middleName}} {{$patient->lastName}}</a></td>
                                                            <td> {{$patient->contact}}</td>
                                                            <td>

                                                                @foreach($doctors as $doctor)
                                                                    @if ($patient->doctor_id==$doctor->id)
                                                                        {{$doctor->firstName}}
                                                                        @break

                                                                        @endif

                                                                @endforeach



                                                            </td>
                                                            <td class="input-group date" id="data_1">

                                                                <select name="refer">

                                                                    @foreach ($doctors as $doctor)

                                                                        <option value="{{$doctor->id}}">{{$doctor->firstName}} {{$doctor->middleName}} {{$doctor->lastName}} </option>
                                                                    @endforeach


                                                                </select>

                                                            <td class="client-status">
                                                                <button id="save" class="btn btn-primary  btn-xs"  type="submit">Save</button>
                                                            </td>
                                                    </form>
                                                    {{--<form method="post" action="{{route('admin.editPatientForm',['patient'=>$patient->id])}}">--}}

                                                        {{--{{csrf_field()}}--}}


                                                        {{--</td>--}}
                                                            {{--<td class="client-status">--}}
                                                                {{--<button id="edit" class="btn btn-primary  btn-xs" type="submit">Edit</button>--}}
                                                            {{--</td>--}}

                                                            {{--<td class="client-status">--}}
                                                                {{--<button id="delete" class="btn btn-primary  btn-xs">Delete</button>--}}
                                                            {{--</td>--}}
                                                        {{--</form>--}}




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


                            @foreach($patient->all() as $patient)
                                <div id="contact-{{$patient->id}}" class="tab-pane">
                                    <div class="row m-b-lg">
                                        <div class="col-lg-4 text-center">
                                            <h4>{{$patient->firstName}} </h4>


                                            <div class="m-b-sm">
                                                <img alt="image" class="img-circle" src="{{$patient->pPhoto->path}}"
                                                     style="width: 62px">
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <strong>
                                                About me
                                            </strong>

                                            <p>
                                                {{$patient->about}}
                                            </p>
                                            <button type="button" class="btn btn-primary btn-sm btn-block"><i
                                                        class="fa fa-envelope"></i> Send Message
                                            </button>
                                        </div>
                                    </div>
                                    <div class="client-detail">
                                        <div class="full-height-scroll">
                                           <form action="{{route('patientDetailsUpdate',['patientId'=>$patient->id])}}" method="post">
                                               {{csrf_field()}}
                                               {{method_field("PUT")}}
                                            <strong>Complete Patient Details</strong>

                                            <ul class="list-group clear-list">


                                                <li class="list-group-item">
                                                    <span class="pull-right">
                                                        <input type="date" value="{{$patient->firstName}}" name="firstName">
                                                         </span> </input>
                                                    First Name
                                                </li>


                                                <li class="list-group-item">
                                                    <span class="pull-right">
                                                        <input type="date" value="{{$patient->middleName}}" name="middleName">
                                                         </span> </input>
                                                    Middle Name
                                                </li>

                                                <li class="list-group-item">
                                                    <span class="pull-right">
                                                        <input type="date" value="{{$patient->lastName}}" name="lastName">
                                                         </span> </input>
                                                    Last Name
                                                </li>




                                                <li class="list-group-item">
                                                    <span class="pull-right">
                                                        <input type="date" value="{{$patient->DOB}}" name="DOB">
                                                         </span> </input>
                                                    Date of Birth
                                                </li>
                                                <li class="list-group-item">

                                                    <span class="pull-right">
                                                        <input type="text" value="{{$patient->bloodGroup}}" name="bloodGroup">
                                                         </span> </input>
                                                    Blood Group
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="pull-right">
                                                        <input type="text" value="{{$patient->address}}" name="address">
                                                         </span> </input>
                                                    Address
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="pull-right">
                                                        <input type="text" value="{{$patient->gender}}" name="gender">
                                                         </span> </input>
                                                    Gender
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="pull-right">
                                                        <input type="text" value="{{$patient->contact}}" name="contact">
                                                         </span> </input>
                                                    Contact
                                                </li>


                                                <li class="list-group-item">
                                                    <span class="pull-right">
                                                        <input type="text" value="{{$patient->email}}" name="email" disabled>
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



                                                <form method="post" action="{{route('admin.deletePatient',['patientId'=>$patient->id])}}">
                                                    {{csrf_field()}}
                                                    {{method_field("DELETE")}}

                                                    <div class="col-sm-6">

                                                        <button class="btn btn-white" type="submit">Delete</button>

                                                    </div>


                                                </form>



                                                </div>

















                                            </ul>
                                        <br>


                                            <hr/>

                                            <div class="ibox-title">
                                                <h5>Add Patient  <small>Relevent Medical Details.</small></h5>
                                            </div>

                                            <div class="ibox-content">
                                                <form method="post" class="form-horizontal" action="{{route('saveMedicalDetails',['patient'=>$patient->id])}}">
                                                    {{csrf_field()}}
                                                    <div class="form-group"><label class="col-sm-2 control-label">Visit Type</label>
                                                        <div class="col-sm-10">
                                                            <div class="row">

                                                                <div class="radio col-xs-3"><label> <input type="radio" checked value="0" id="visitRadios1" name="followUp"> First</label></div>

                                                                <div class="radio col-xs-3"><label> <input type="radio"  value="1" id="visitRadios2" name="followUp"> Follow Up</label></div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="hr-line-dashed"></div>
                                                    <div class="form-group" id="data_1"><label class="col-sm-2 control-label">Visit Date</label>

                                                        <div class="col-sm-8">
                                                            <div class="input-group date">
                                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input class="form-control"  type="date" name="visitDate" id="datepicker">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="hr-line-dashed"></div>
                                                    <div class="form-group"><label class="col-sm-2 control-label">Complain</label>

                                                        <div class="col-sm-12">
                                                            <input type="text" class="form-control input-lg m-b" name="complain">
                                                        </div>
                                                    </div>



                                                    <div class="hr-line-dashed"></div>
                                                    <div class="form-group"><label class="col-sm-2 control-label">Doctor's Advice</label>

                                                        <div class="col-sm-12">
                                                            <input type="textarea" class="form-control input-lg m-b" name="doctorAdvice">
                                                        </div>
                                                    </div>

                                                    <div class="hr-line-dashed"></div>
                                                    <div class="form-group" id="data_1"><label class="col-sm-2 control-label">Follow Up Date</label>

                                                        <div class="col-sm-12">
                                                            <div class="input-group date">
                                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input class="form-control"  type="date" name="followUp" id="datepicker">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <script>
                                                        $( function() {
                                                            $( "#datepicker" ).datepicker();
                                                        } );
                                                    </script>



                                                    <div class="hr-line-dashed"></div>
                                                    <div class="form-group"><label class="col-sm-2 control-label">Refer To</label>
                                                        <div class="col-sm-10">
                                                            @foreach($doctors as $doctor)
                                                                @if ($patient->doctor_id==$doctor->id)
                                                                    <input type="text"  name="doctorId" value="{{$doctor->id}}" >
                                                                    <textarea  class="form-control input-lg m-b"  disabled> {{$doctor->firstName}}</textarea>
                                                                    @break

                                                                @endif

                                                            @endforeach

                                                        </div>
                                                    </div>
                                                    <div class="hr-line-dashed"></div>
                                                    <div class="form-group">
                                                        <div class="col-sm-12 col-sm-offset-2">
                                                            <button class="btn btn-white" type="reset">Cancel</button>
                                                            <button class="btn btn-primary" type="submit">Save changes</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>















                                            {{--History generation code--}}

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
