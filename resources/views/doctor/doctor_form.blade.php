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
						<form id="my-awesome-dropzone" class="dropzone dz-clickable" action="#">

							<div class="col-sm-8">
								<div class="dropzone-previews"></div>
								<button type="submit" class="btn btn-primary pull-right">Submit this form!</button>
							</div>

							<div class="dz-default dz-message"><span>Drop files here to upload</span></div></form>
   					</div>
   					<div class="ibox-content">
   						<form method="get" class="form-horizontal">
   							<div class="form-group"><label class="col-sm-2 control-label">Name</label>

                           <div class="col-sm-10">
                              <div class="row">
                           	   <div class="col-md-4"><input type="text" placeholder="First Name" class="form-control"></div>
                              	<div class="col-md-4"><input type="text" placeholder="Middle Name" class="form-control"></div>
                              	<div class="col-md-4"><input type="text" placeholder="Last Nmae" class="form-control"></div>
                              </div>
                           </div>
                     	</div>
                       	<div class="hr-line-dashed"></div>
                       	<div class="form-group"><label class="col-sm-2 control-label">About</label>
                           <div class="col-sm-10"><textarea class="form-control"></textarea></div>
                       	</div>
                       	<div class="hr-line-dashed"></div>
                       	<div class="form-group"><label class="col-sm-2 control-label">Speciality</label>
                           <div class="col-sm-10"><input type="text" class="form-control"></div>
                       	</div>
                       	<div class="hr-line-dashed"></div>
                       	<div class="form-group"><label class="col-sm-2 control-label">Education</label>
                           <div class="col-sm-10"><input type="text" class="form-control"></div>
                       	</div>
                       	<div class="hr-line-dashed"></div>
                       	<div class="form-group"><label class="col-sm-2 control-label">Work Days</label>

                           <div class="col-sm-10">
                           	<label class="checkbox-inline"><input type="checkbox" value="option1" id="inlineCheckbox1"> Sunday </label>
                           	<label class="checkbox-inline"><input type="checkbox" value="option2" id="inlineCheckbox2"> Monday </label>
                           	<label class="checkbox-inline"><input type="checkbox" value="option3" id="inlineCheckbox3"> Tuesday </label>
                           	<label class="checkbox-inline"><input type="checkbox" value="option1" id="inlineCheckbox1"> Wednesday </label>
                           	<label class="checkbox-inline"><input type="checkbox" value="option2" id="inlineCheckbox2"> Thursday </label>
                           	<label class="checkbox-inline"><input type="checkbox" value="option3" id="inlineCheckbox3"> Saturday </label>
                           </div>
                       	</div>
                       	<div class="hr-line-dashed"></div>
                       	<div class="form-group"><label class="col-sm-2 control-label">Facebook</label>
                           <div class="col-sm-10"><input type="text" class="form-control"></div>
                       	</div>
                       	<div class="hr-line-dashed"></div>
                       	<div class="form-group"><label class="col-sm-2 control-label">Twitter</label>
                           <div class="col-sm-10"><input type="text" class="form-control"></div>
                       	</div>
                       	<div class="hr-line-dashed"></div>
                       	<div class="form-group"><label class="col-sm-2 control-label">Skype</label>
                           <div class="col-sm-10"><input type="text" class="form-control"></div>
                       	</div>
                       	<div class="hr-line-dashed"></div>
                       	<div class="form-group"><label class="col-sm-2 control-label">Contact</label>
                           <div class="col-sm-10"><input type="text" class="form-control"></div>
                       	</div>
                    		<div class="hr-line-dashed"></div>
                       	<div class="form-group">
                           <div class="col-sm-4 col-sm-offset-2">
                               <button class="btn btn-white" type="submit">Cancel</button>
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
            Creaated by<strong> Soodep.</strong>
         </div>
         <div>
            <strong>Copyright</strong> GCES &copy; 2016
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

