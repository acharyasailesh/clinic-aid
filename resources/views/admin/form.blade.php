@extends('layout.adminmain')
@include('inc.adminPanel.navside')
@section('form')



            
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Patient Form <small>Details of the patient.</small></h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
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
                                <div class="form-group"><label class="col-sm-2 control-label">Date Of Birth</label>

                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-md-4"><input type="text" placeholder="YYYY" class="form-control"></div>
                                            <div class="col-md-4"><input type="text" placeholder="MM" class="form-control"></div>
                                            <div class="col-md-4"><input type="text" placeholder="DD" class="form-control"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Gender</label>
                                		<div class="col-sm-10">
                                			<div class="row">
                             				
                             					<div class="radio col-xs-3"><label> <input type="radio" checked="" value="option1" id="genderRadios1" name="Gender"> Male</label></div>
                             				
                             					<div class="radio col-xs-3"><label> <input type="radio" checked="" value="option2" id="genderRadios2" name="Gender"> Female</label></div>
                          				
                             					<div class="radio col-xs-3"><label> <input type="radio" checked="" value="option3" id="genderRadios3" name="Gender"> Other</label></div>
                                			</div>
                                		</div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Blood Group</label>
                                		<div class="col-sm-10">
                                			<div class="row">
                             				
                             					<div class="radio col-sm-1"><label> <input type="radio" checked="" value="option1" id="bloodRadios1" name="blood"> O+</label></div>

                             					<div class="radio col-sm-1"><label> <input type="radio" checked="" value="option3" id="bloodRadios3" name="blood"> A+</label></div>

                             					<div class="radio col-sm-1"><label> <input type="radio" checked="" value="option1" id="bloodRadios5" name="blood"> B+</label></div>

                             					<div class="radio col-sm-1"><label> <input type="radio" checked="" value="option2" id="bloodRadios6" name="blood"> AB+</label></div>

                             					<div class="col-sm-1"></div>
                             				
                             					<div class="radio col-sm-1"><label> <input type="radio" checked="" value="option2" id="bloodRadios2" name="blood"> 0-</label></div>
                          				
                             					<div class="radio col-sm-1"><label> <input type="radio" checked="" value="option4" id="bloodRadios4" name="blood"> A-</label></div>
                             	
                             					<div class="radio col-sm-1"><label> <input type="radio" checked="" value="option2" id="bloodRadios6" name="blood"> B-</label></div>
                             					
                             					<div class="radio col-sm-1"><label> <input type="radio" checked="" value="option2" id="bloodRadios6" name="blood"> AB-</label></div>
                                			</div>
                                		</div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                
                                <div class="form-group"><label class="col-sm-2 control-label">Address</label>
                                    <div class="col-sm-10"><input type="text" class="form-control"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Contact</label>
                                    <div class="col-sm-10"><input type="text" class="form-control"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Visit Type</label>
                                		<div class="col-sm-10">
                                			<div class="row">
                             				
                             					<div class="radio col-xs-3"><label> <input type="radio" checked="" value="option1" id="visitRadios1" name="Visit"> First</label></div>
                             				
                             					<div class="radio col-xs-3"><label> <input type="radio" checked="" value="option2" id="visitRadios2" name="Visit"> Follow Up</label></div>
                                			</div>
                                		</div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Doctor</label>
                                    <div class="col-sm-10"><input type="text" class="form-control"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Date</label>

                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-md-4"><input type="text" placeholder="YYYY" class="form-control"></div>
                                            <div class="col-md-4"><input type="text" placeholder="MM" class="form-control"></div>
                                            <div class="col-md-4"><input type="text" placeholder="DD" class="form-control"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Complaint</label>

                                    <div class="col-sm-10">
                                    	<input type="text" class="form-control input-lg m-b"> 
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Pre-Existing Condition</label>

                                    <div class="col-sm-10">
                                    	<input type="textarea" class="form-control input-lg m-b"> 
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Doctor's Comment</label>

                                    <div class="col-sm-10">
                                    	<input type="textarea" class="form-control input-lg m-b"> 
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>

                                <div class="form-group"><label class="col-sm-2 control-label">Diagnosis</label>

                                    <div class="col-sm-10">
                                    	<input type="textarea" class="form-control input-lg m-b"> 
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Doctor's Advice</label>

                                    <div class="col-sm-10">
                                    	<input type="textarea" class="form-control input-lg m-b"> 
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Prescription</label>

                                    <div class="col-sm-10">
                                    	<input type="textarea" class="form-control input-lg m-b"> 
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Follow Up Date</label>

                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-md-4"><input type="text" placeholder="YYYY" class="form-control"></div>
                                            <div class="col-md-4"><input type="text" placeholder="MM" class="form-control"></div>
                                            <div class="col-md-4"><input type="text" placeholder="DD" class="form-control"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Refer To</label>
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
                10GB of <strong>250GB</strong> Free.
            </div>
            <div>
                <strong>Copyright</strong> Example Company &copy; 2014-2015
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
            });
        </script>
@endsection
