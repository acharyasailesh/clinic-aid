
@extends('layout.adminmain')
@include('inc.patientPanel.navside')
@section('editprofile')

    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Patient Form <small>Details of the Doctor.</small></h5>

                    </div>

                </div>
            </div>











        </div>

    </div>
    <div class="ibox-content">
        <form method="post" class="form-horizontal" action="{{route('patientform',['patient'=>$patient->id])}}" enctype="multipart/form-data">
            {{csrf_field()}}

            {!! Form::file('image', array('class' => 'image')) !!}
            <br>

            <div class="form-group"><label class="col-sm-2 control-label">Name</label>

                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-md-4"><input type="text" class="form-control" name="firstName" value="{{ $patient['firstName'] }}"></div>
                        <div class="col-md-4"><input type="text" class="form-control" name="middleName" value="{{ $patient['middleName'] }}"></div>
                        <div class="col-md-4"><input type="text" class="form-control" name="lastName" value="{{ $patient['lastName'] }}"></div>
                    </div>
                </div>
            </div>
            <div class="hr-line-dashed"></div>
            <div class="form-group"><label class="col-sm-2 control-label">Date Of Birth</label>

                <div class="col-sm-10">
                    <div class="row">

                        <div class="col-md-12"><input type="date" class="form-control" value="{{ $patient['DOB'] }}" name="DOB"></div>
                    </div>
                </div>
            </div>
            <div class="hr-line-dashed"></div>
            <div class="form-group"><label class="col-sm-2 control-label">Gender</label>
                <div class="col-sm-10">
                    <div class="row">

                        <div class="radio col-xs-3"><label> <input type="radio" @if( $patient['gender'] === 1 ) checked="checked" @endif value="1" id="genderRadios1" name="Gender"> Male</label></div>

                        <div class="radio col-xs-3"><label> <input type="radio" @if( $patient['gender'] === 2 ) checked="checked" @endif value="2" id="genderRadios2" name="Gender"> Female</label></div>

                        <div class="radio col-xs-3"><label> <input type="radio" @if( $patient['gender'] === 3 ) checked="checked" @endif value="3" id="genderRadios3" name="Gender"> Other</label></div>
                    </div>
                </div>
            </div>
            <div class="hr-line-dashed"></div>

            <div class="form-group"><label class="col-sm-2 control-label">Address</label>
                <div class="col-sm-10"><input type="text" class="form-control" name="address" value="{{ $patient['address'] }}"></div>
            </div>
            <div class="hr-line-dashed"></div>
            <div class="form-group"><label class="col-sm-2 control-label">Contact</label>
                <div class="col-sm-10"><input type="text" class="form-control" name="contact" value="{{ $patient['contact'] }}"></div>
            </div>
            <div class="hr-line-dashed"></div>



            <div class="form-group"><label class="col-sm-2 control-label">About</label>
                <div class="col-sm-10"><textarea class="form-control" name="about">{{ $patient['about'] }}</textarea></div>
            </div>
            <div class="hr-line-dashed"></div>
            <div class="form-group">
                <div class="col-sm-4 col-sm-offset-2">
                    <button class="btn btn-white" type="reset">Cancel</button>
                    <button class="btn btn-primary" type="submit">Save changes</button>
                </div>
            </div>

            <div class="footer">

                <div>
                    <strong>Copyright</strong> Clinic Aid.com &copy; 2016
                </div>
            </div>

    </div>
    </div>



    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- DROPZONE -->
    <script src="js/plugins/dropzone/dropzone.js"></script>
    <!-- SUMMERNOTE -->
    <script src="js/plugins/summernote/summernote.min.js"></script>

    <script>
        $(document).ready(function(){

            $('.summernote').summernote();

        });
        var edit = function() {
            $('.click2edit').summernote({focus: true});
        };
        var save = function() {
            var aHTML = $('.click2edit').code(); //save HTML If you need(aHTML: array).
            $('.click2edit').destroy();
        };
    </script>

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

