@extends('layout.adminmain')
@include('inc.adminPanel.navside')
@section('addDoctor')
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
            You can Edit Doctor details on <a href="{{url('/editDoctor')}}">Doctor Record</a>
        </div>
    @endif


    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Doctor Form <small>Details of the Doctor.</small></h5>
                    </div>



                    <div class="ibox-content">

                        <form method="post" class="form-horizontal" action="{{route('admin.storeDoctor')}}" enctype="multipart/form-data">
                            {{csrf_field()}}

                            <div class="form-group">

                                {!!  Form::label('firstName', 'FirstName', array('class' => 'col-sm-2 control-label'))!!}



                                <div class="col-sm-10">
                                    <div class="row">


                                        <div class="col-md-4">{!! Form::text('firstName', null, ['class' => 'form-control']) !!}</div>
                                        <div class="col-md-4">{!! Form::text('middeName', null, ['class' => 'form-control']) !!}</div>
                                        <div class="col-md-4">{!! Form::text('lastName', null, ['class' => 'form-control']) !!}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">{!!  Form::label('about', 'About', array('class' => 'col-sm-2 control-label'))!!}
                                <div class="col-sm-10">{!! Form::textarea('about', null, ['class' => 'form-control']) !!}</div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">{!!  Form::label('speciality', 'Speciality', array('class' => 'col-sm-2 control-label'))!!}
                                <div class="col-sm-10">{!! Form::text('speciality', null, ['class' => 'form-control']) !!}</div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">{!!  Form::label('education', 'Education', array('class' => 'col-sm-2 control-label'))!!}
                                <div class="col-sm-10">{!! Form::text('education', null, ['class' => 'form-control']) !!}</div>
                            </div>
                            {{--<div class="hr-line-dashed"></div>--}}
                            {{--<div class="form-group">{!!  Form::label('workDays', 'Work Days', array('class' => 'col-sm-2 control-label'))!!}--}}

                                {{--<div class="col-sm-10">--}}
                                    {{--<label class="checkbox-inline"><input type="checkbox" value="option1" id="inlineCheckbox1"> Sunday </label>--}}
                                    {{--<label class="checkbox-inline"><input type="checkbox" value="option2" id="inlineCheckbox2"> Monday </label>--}}
                                    {{--<label class="checkbox-inline"><input type="checkbox" value="option3" id="inlineCheckbox3"> Tuesday </label>--}}
                                    {{--<label class="checkbox-inline"><input type="checkbox" value="option1" id="inlineCheckbox1"> Wednesday </label>--}}
                                    {{--<label class="checkbox-inline"><input type="checkbox" value="option2" id="inlineCheckbox2"> Thursday </label>--}}
                                    {{--<label class="checkbox-inline"><input type="checkbox" value="option3" id="inlineCheckbox3"> Saturday </label>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">{!!  Form::label('facebook', 'Facebook', array('class' => 'col-sm-2 control-label'))!!}
                                <div class="col-sm-10">{!! Form::text('facebook', null, ['class' => 'form-control']) !!}</div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">{!!  Form::label('twitter', 'Twitter', array('class' => 'col-sm-2 control-label'))!!}
                                <div class="col-sm-10">{!! Form::text('twitter', null, ['class' => 'form-control']) !!}</div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">{!!  Form::label('skype', 'Skype', array('class' => 'col-sm-2 control-label'))!!}
                                <div class="col-sm-10">{!! Form::text('skype', null, ['class' => 'form-control']) !!}</div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">{!!  Form::label('contact', 'Contact', array('class' => 'col-sm-2 control-label'))!!}
                                <div class="col-sm-10">{!! Form::text('contact', null, ['class' => 'form-control']) !!}</div>
                            </div>

                            <div class="hr-line-dashed"></div>
                            <div class="form-group">{!!  Form::label('email', 'Email', array('class' => 'col-sm-2 control-label'))!!}
                                <div class="col-sm-10">{!! Form::text('email', null, ['class' => 'form-control']) !!}</div>
                            </div>

                            <div class="hr-line-dashed"></div>
                            <div class="form-group">{!!  Form::label('password', 'Doctors Password', array('class' => 'col-sm-2 control-label'))!!}
                                <div class="col-sm-10">{!! Form::password('password', null, ['class' => 'form-control']) !!}</div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">{!!  Form::label('image', 'Upload Doctor Image', array('class' => 'col-sm-2 control-label'))!!}
                                <div class="col-sm-10">{!! Form::file('image', array('class' => 'image')) !!}
                            </div>


                            <div class="hr-line-dashed"></div>
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
            <strong>Copyright</strong> Example Company &copy; 2014-2015
        </div>
    </div>

    </div>
    </div>

@endsection