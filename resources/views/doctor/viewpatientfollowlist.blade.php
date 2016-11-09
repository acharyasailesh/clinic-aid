    @extends('layout.adminmain')
    @include('inc.doctorPanel.navSide')
    @section('doctorViewPatientFollowList')


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
                                <li class="active"><a data-toggle="tab" href="#tab-1"><i class="fa fa-user"></i>Today Followup</a></li>

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


                                                        {{csrf_field()}}

                                                        <tr>
                                                            <td class="client-avatar"><a href=""><img alt="image" src="{{asset('back/img/a4.jpg')}} width=100 height=100"></a> </td>
                                                            <td><a data-toggle="tab" href="#contact-{{$patient->id}}" class="client-link">{{$patient->firstName}} {{$patient->middleName}} {{$patient->lastName}}</a></td>
                                                            <td> {{$patient->contact}}</td>

                                                            <td class="contact-type"></td>
                                                            <td class="input-group date" id="data_1">
                                                                <input type="text" class="form-control" name="followUp" value="{{$patient->followUp}}
                                                            </td>
                                                            <td class="client-status">

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
                                                <img alt="image" class="img-circle" src="{{asset('back/img/a4.jpg')}}"
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

                                            <strong>Complete Patient Details</strong>

                                            <ul class="list-group clear-list">

                                                <li class="list-group-item">
                                                    <span class="pull-right"> {{$patient->DOB}} </span>
                                                    Date of Birth
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="pull-right"> {{$patient->bloodGroup}} </span>
                                                    Blood Group
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="pull-right"> {{$patient->address}} </span>
                                                    Address
                                                </li>
                                            </ul>

                                            <hr/>
                                            @foreach($patient->medicalHistory as $history)
                                                <strong>Follow Up activity</strong>
                                                <div id="vertical-timeline" class="vertical-container dark-timeline">
                                                    <div class="vertical-timeline-block">
                                                        <div class="vertical-timeline-icon gray-bg">
                                                            <i class="fa fa-briefcase"></i>
                                                        </div>
                                                        <div class="vertical-timeline-content">
                                                            <p>Patient Complain {{$history->complain}}<br>
                                                                Diagnosis Done: {{$history->diagnosis}} <br>
                                                                Advice Given : {{$history->doctorAdvice}}<br>
                                                                Prescription :{{$history->precription}}<br>
                                                            </p>
                                                            <span class="vertical-date small text-muted"> First Visit Date{{$history->visitationDate}} </span>
                                                        </div>
                                                    </div>

                                                </div>
                                            @endforeach
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
            <strong>Copyright &copy;</strong> Clinicaid.com
        </div>
    </div>










@endsection


@section('endScripts')

    <!-- Data picker -->
    <script src="{{asset('back/js/plugins/datapicker/bootstrap-datepicker.js')}}"></script>
    <script>
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



        function save() {

            ////get the editable element
            var editElem = document.getElementById("edit");
            //
            get the edited element content
            var userVersion = editElem.innerHTML;
            //
            save the content to local storage
            //localStorage.userEdits = userVersion;
            //
            ////write a confirmation to the user
            document.getElementById("update").innerHTML="Edits saved!";
            //
        }

    </script>
@endsection
