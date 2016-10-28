@extends('layout.adminmain')
@include('inc.doctorPanel.navSide')
@section('doctorViewPatient')

        <div class="wrapper wrapper-content  animated fadeInRight">
            <div class="row">
                <div class="col-sm-8">
                    <div class="ibox">
                        <div class="ibox-content">
                            <span class="text-muted small pull-right">Last modification: <i class="fa fa-clock-o"></i> 2:10 pm - 12.06.2014</span>
                            <h2>Patients</h2>
                            

                            <div class="input-group">
                                <input type="text" placeholder="Search patient " class="input form-control">
                                <span class="input-group-btn">
                                        <button type="button" class="btn btn btn-primary"> <i class="fa fa-search"></i> Search</button>
                                </span>
                            </div>
                            <div class="clients-list">
                            <ul class="nav nav-tabs">
                                
                                <li class="active"><a data-toggle="tab" href="#tab-1"><i class="fa fa-user"></i>Patient Name</a></li>
                                <li class="active"><a data-toggle="tab" href="#tab-1"><i class="fa fa-user"></i>Contacts</a></li>
                                <li class="active"><a data-toggle="tab" href="#tab-1"><i class="fa fa-user"></i>Followup Date</a></li>

                            </ul>
                            <div class="tab-content">

                                        @foreach($patient as $patient)

                                <div id="tab-1" class="tab-pane active">
                                    <div class="full-height-scroll">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover">
                                                <tbody>


                                                <form method="post" action="{{route('contactPatient',['id'=>$patient->id,'dEmail'=>$Doctor->email])}}">

                                                    {{csrf_field()}}

                                                <tr>
                                                    <td class="client-avatar"><a href=""><img alt="image" src="{{asset('back/img/a4.jpg')}} width=100 height=100"></a> </td>
                                                    <td><a data-toggle="tab" href="#contact-2" class="client-link">{{$patient->firstName}} {{$patient->middleName}} {{$patient->lastName}}</a></td>
                                                    <td> {{$patient->contact}}</td>
                                                    <td class="contact-type"></td>
                                                    <td class="input-group date" id="data_1">
                                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" name="followUp" value="{{$patient->followUp}}">
                                                    </td>
                                                    <td class="client-status">
                            <button id="save" class="btn btn-primary  btn-xs"  type="submit">Save</button></td>

                                                </tr>


                                </form>
                                                <tr>
                                                    <td class="client-avatar"><a href=""><img alt="image" src="{{asset('back/img/a4.jpg')}}"></a> </td>
                                                    <td><a data-toggle="tab" href="#contact-4" class="client-link">Reuben Pacheco</a></td>
                                                    <td>Magna Associates</td>
                                                    <td class="contact-type"></td>
                                                    <td class="input-group date" id="data_1">
                                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="03/04/2014">
                                                    </td>
                                                    <td class="client-status">
                            <button id="save" class="btn btn-primary  btn-xs" onclick="save()" type="button">Save</button></td>
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

                                <div id="contact-2" class="tab-pane">
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
                                            <strong>Notes</strong>
                                            <p>
                                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.
                                            </p>
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

                                <div id="contact-4" class="tab-pane">
                                    <div class="row m-b-lg">
                                        <div class="col-lg-4 text-center">
                                            <h2>Reuben Pacheco</h2>

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
                                                Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero,written in 45 BC. This book is a treatise on.
                                            </p>
                                            <button type="button" class="btn btn-primary btn-sm btn-block"><i
                                                    class="fa fa-envelope"></i> Send Message
                                            </button>
                                        </div>
                                    </div>
                                    <div class="client-detail">
                                        <div class="full-height-scroll">

                                            <strong>Last activity</strong>

                                            <ul class="list-group clear-list">
                                                <li class="list-group-item fist-item">
                                                    <span class="pull-right"> 09:00 pm </span>
                                                    The point of using
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="pull-right"> 10:16 am </span>
                                                    Lorem Ipsum is that it has
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="pull-right"> 08:22 pm </span>
                                                    Text, and a search for 'lorem ipsum'
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="pull-right"> 11:06 pm </span>
                                                    Passages of Lorem Ipsum
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="pull-right"> 12:00 am </span>
                                                    If you are going
                                                </li>
                                            </ul>
                                            <strong>Notes</strong>
                                            <p>
                                                Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
                                            </p>
                                            <hr/>
                                            <strong>Timeline activity</strong>
                                            <div id="vertical-timeline" class="vertical-container dark-timeline">
                                                <div class="vertical-timeline-block">
                                                    <div class="vertical-timeline-icon gray-bg">
                                                        <i class="fa fa-coffee"></i>
                                                    </div>
                                                    <div class="vertical-timeline-content">
                                                        <p>Conference on the sales results for the previous year.
                                                        </p>
                                                        <span class="vertical-date small text-muted"> 2:10 pm - 12.06.2014 </span>
                                                    </div>
                                                </div>
                                                <div class="vertical-timeline-block">
                                                    <div class="vertical-timeline-icon gray-bg">
                                                        <i class="fa fa-briefcase"></i>
                                                    </div>
                                                    <div class="vertical-timeline-content">
                                                        <p>Many desktop publishing packages and web page editors now use Lorem.
                                                        </p>
                                                        <span class="vertical-date small text-muted"> 4:20 pm - 10.05.2014 </span>
                                                    </div>
                                                </div>
                                                <div class="vertical-timeline-block">
                                                    <div class="vertical-timeline-icon gray-bg">
                                                        <i class="fa fa-bolt"></i>
                                                    </div>
                                                    <div class="vertical-timeline-content">
                                                        <p>There are many variations of passages of Lorem Ipsum available.
                                                        </p>
                                                        <span class="vertical-date small text-muted"> 06:10 pm - 11.03.2014 </span>
                                                    </div>
                                                </div>
                                                <div class="vertical-timeline-block">
                                                    <div class="vertical-timeline-icon navy-bg">
                                                        <i class="fa fa-warning"></i>
                                                    </div>
                                                    <div class="vertical-timeline-content">
                                                        <p>The generated Lorem Ipsum is therefore.
                                                        </p>
                                                        <span class="vertical-date small text-muted"> 02:50 pm - 03.10.2014 </span>
                                                    </div>
                                                </div>
                                                <div class="vertical-timeline-block">
                                                    <div class="vertical-timeline-icon gray-bg">
                                                        <i class="fa fa-coffee"></i>
                                                    </div>
                                                    <div class="vertical-timeline-content">
                                                        <p>Conference on the sales results for the previous year.
                                                        </p>
                                                        <span class="vertical-date small text-muted"> 2:10 pm - 12.06.2014 </span>
                                                    </div>
                                                </div>
                                                <div class="vertical-timeline-block">
                                                    <div class="vertical-timeline-icon gray-bg">
                                                        <i class="fa fa-briefcase"></i>
                                                    </div>
                                                    <div class="vertical-timeline-content">
                                                        <p>Many desktop publishing packages and web page editors now use Lorem.
                                                        </p>
                                                        <span class="vertical-date small text-muted"> 4:20 pm - 10.05.2014 </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="pull-right">
                10GB of <strong>250GB</strong> Free.
            </div>
            <div>
                <strong>Copyright</strong> Soodep &copy; 2014-2015
            </div>
        </div>







//   function save() {
//
////get the editable element
//var editElem = document.getElementById("edit");
//
////get the edited element content
//var userVersion = editElem.innerHTML;
//
////save the content to local storage
//localStorage.userEdits = userVersion;
//
////write a confirmation to the user
//document.getElementById("update").innerHTML="Edits saved!";
//
//}



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
        </script>
@endsection
