@extends('layout.adminmain')

@include('inc.doctorPanel.navSide')
@section('doctorform')


    <div class="wrapper wrapper-content">
   		<div class="row">
   			<div class="col-lg-12">
   				<div class="ibox float-e-margins">
   					<div class="ibox-title">
   						<h5>Doctor Form <small>Details of the Doctor.</small></h5>
   					</div>

   					<div class="ibox-content">

   						<form method="post" class="form-horizontal" action="{{route('doctorform',['doctor'=>$doctor->id])}}" enctype="multipart/form-data">
							{{csrf_field()}}

							{!! Form::file('image', array('class' => 'image')) !!}
   							<div class="form-group">

								{!!  Form::label('firstName', 'FirstName', array('class' => 'col-sm-2 control-label'))!!}



                           <div class="col-sm-10">
                              <div class="row">


								  <div class="col-md-4">



									  {!! Form::text('firstName', $doctor->firstName, ['class' => 'form-control']) !!}</div>
                              	<div class="col-md-4">{!! Form::text('middeName', $doctor->middleName, ['class' => 'form-control']) !!}</div>
								  <div class="col-md-4">{!! Form::text('lastName', $doctor->lastName, ['class' => 'form-control']) !!}</div>
                              </div>
                           </div>
                     	</div>
                       	<div class="hr-line-dashed"></div>
                       	<div class="form-group">{!!  Form::label('about', 'About', array('class' => 'col-sm-2 control-label'))!!}
                           <div class="col-sm-10">{!! Form::textarea('about', $doctor->about, ['class' => 'form-control']) !!}</div>
                       	</div>
                       	<div class="hr-line-dashed"></div>
                       	<div class="form-group">{!!  Form::label('speciality', 'Speciality', array('class' => 'col-sm-2 control-label'))!!}
                           <div class="col-sm-10">{!! Form::text('speciality', $doctor->speciality, ['class' => 'form-control']) !!}</div>
                       	</div>
                       	<div class="hr-line-dashed"></div>
                       	<div class="form-group">{!!  Form::label('education', 'Education', array('class' => 'col-sm-2 control-label'))!!}
                           <div class="col-sm-10">{!! Form::text('education', $doctor->education, ['class' => 'form-control']) !!}</div>
                       	</div>
                       	<div class="hr-line-dashed"></div>
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
                           <div class="col-sm-10">{!! Form::text('facebook', $doctor->facebook, ['class' => 'form-control']) !!}</div>
                       	</div>
                       	<div class="hr-line-dashed"></div>
                       	<div class="form-group">{!!  Form::label('twitter', 'Twitter', array('class' => 'col-sm-2 control-label'))!!}
                           <div class="col-sm-10">{!! Form::text('twitter', $doctor->twitter, ['class' => 'form-control']) !!}</div>
                       	</div>
                       	<div class="hr-line-dashed"></div>
                       	<div class="form-group">{!!  Form::label('skype', 'Skype', array('class' => 'col-sm-2 control-label'))!!}
                           <div class="col-sm-10">{!! Form::text('skype', $doctor->skype, ['class' => 'form-control']) !!}</div>
                       	</div>
                       	<div class="hr-line-dashed"></div>
                       	<div class="form-group">{!!  Form::label('contact', 'Contact', array('class' => 'col-sm-2 control-label'))!!}
                           <div class="col-sm-10">{!! Form::text('contact', $doctor->contact, ['class' => 'form-control']) !!}</div>
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
         <div class="pull-right">
            Created by<strong> Clinicaid.com</strong>
         </div>
         <div>
            <strong>Copyright</strong> ClinicAid &copy; 2016
         </div>
     	</div>


	<script>
		$(document).ready(function(){

			Dropzone.options.myAwesomeDropzone = {

				autoProcessQueue: false,
				uploadMultiple: true,
				parallelUploads: 100,
				maxFiles: 100,

				// Dropzone settings
				init: function() {
					var myDropzone = this;

					this.element.querySelector("button[type=submit]").addEventListener("click", function(e) {
						e.preventDefault();
						e.stopPropagation();
						myDropzone.processQueue();
					});
					this.on("sendingmultiple", function() {
					});
					this.on("successmultiple", function(files, response) {
					});
					this.on("errormultiple", function(files, response) {
					});
				}

			}

		});
	</script>
 @endsection

