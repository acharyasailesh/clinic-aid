@extends('layout.adminmain')
@include('inc.adminPanel.navside')
<script src="{{asset('back/js/jquery-2.1.1.js')}}"></script>
<script src="{{asset('back/js/plugins/datapicker/bootstrap-datepicker.js')}}"></script>
@section('form')



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
            <br>
            Make sure to Add & Edit Patient Details Medical Records <a href="{{url('/editpatient')}}">Patient Record</a>
        </div>
    @endif



    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Patient Form <small>Details of the patient.</small></h5>
                    </div>
                    <div class="ibox-content">
                        <form method="post" class="form-horizontal" action="{{route('admin.store')}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group"><label class="col-sm-2 control-label">Name</label>

                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-md-4"><input type="text" placeholder="First Name" class="form-control" name="firstName" value="{{old('firstName')}}"></div>
                                        <div class="col-md-4"><input type="text" placeholder="Middle Name" class="form-control" name="middleName" value="{{old('middleName')}}"></div>
                                        <div class="col-md-4"><input type="text" placeholder="Last Name" class="form-control" name="lastName" value="{{old('lastName')}}"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group" id="data_1"><label class="col-sm-2 control-label">Date Of Birth</label>

                                <div class="col-sm-4">
                                    <div class="input-group date">
                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input class="form-control" value="{{old('DOB')}}" type="date" name="DOB" id="datepicker">
                                    </div>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group"><label class="col-sm-2 control-label">Gender</label>
                                <div class="col-sm-10">
                                    <div class="row">

                                        <div class="radio col-xs-3"><label> <input type="radio" checked="" value="Male" id="genderRadios1" name="gender"> Male</label></div>

                                        <div class="radio col-xs-3"><label> <input type="radio"  value="Female" id="genderRadios2" name="gender"> Female</label></div>

                                        <div class="radio col-xs-3"><label> <input type="radio"  value="Other" id="genderRadios3" name="gender"> Other</label></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group"><label class="col-sm-2 control-label">Blood Group</label>
                                <div class="col-sm-10">
                                    <div class="row">

                                        <div class="radio col-sm-1"><label> <input type="radio" checked="" value="O+" id="bloodRadios1" name="bloodGroup"> O+</label></div>

                                        <div class="radio col-sm-1"><label> <input type="radio"  value="A+" id="bloodRadios3" name="bloodGroup"> A+</label></div>

                                        <div class="radio col-sm-1"><label> <input type="radio"  value="B+" id="bloodRadios5" name="bloodGroup"> B+</label></div>

                                        <div class="radio col-sm-1"><label> <input type="radio"  value="AB+" id="bloodRadios6" name="bloodGroup"> AB+</label></div>

                                        <div class="col-sm-1"></div>

                                        <div class="radio col-sm-1"><label> <input type="radio"  value="O-" id="bloodRadios2" name="bloodGroup"> 0-</label></div>

                                        <div class="radio col-sm-1"><label> <input type="radio"  value="A-" id="bloodRadios4" name="bloodGroup"> A-</label></div>

                                        <div class="radio col-sm-1"><label> <input type="radio"  value="B-" id="bloodRadios6" name="bloodGroup"> B-</label></div>

                                        <div class="radio col-sm-1"><label> <input type="radio" value="AB-" id="bloodRadios6" name="blood"> AB-</label></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group"><label class="col-sm-2 control-label">Address</label>
                                <div class="col-sm-10"><input type="text" class="form-control" name="address" value="{{old('address')}}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group"><label class="col-sm-2 control-label">Contact</label>
                                <div class="col-sm-10"><input type="text" class="form-control" name="contact" value="{{old('contact')}}"></div>
                            </div>

                            <div class="form-group"><label class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10"><input type="text" class="form-control" name="email"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">Password</label>
                                <div class="col-sm-10"><input type="password" class="form-control" name="password" ></div>
                            </div>



                            <div class="hr-line-dashed"></div>
                            <div class="form-group">{!!  Form::label('image', 'Upload Paitent Image', array('class' => 'col-sm-2 control-label'))!!}
                                <div class="col-sm-10">{!! Form::file('image', array('class' => 'image')) !!}
                                </div>
                            </div>


                                <div class="hr-line-dashed"></div>
                            <div class="form-group"><label class="col-sm-2 control-label">Refer To</label>
                                <div class="col-sm-10">

                                    <select name="refer">

                                        @foreach ($doctors as $doctor)


                                            <option value="{{$doctor->id}}">{{$doctor->firstName}} {{$doctor->middleName}} {{$doctor->lastName}}</option>
                                        @endforeach


                                    </select>

                                    </div>






                                    <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-white" type="reset">Cancel</button>
                                    <button class="btn btn-primary" type="submit">Save changes</button>
                                </div>
                            </div>
                        </form>
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

        </div>
        </div>


        <script>


            $(document).ready(function () {
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
