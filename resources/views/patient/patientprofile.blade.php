@extends('layout.adminmain')
@include('inc.patientPanel.navside')
@section('patientprofile')


    <div class="row animated fadeInRight">
        <div class="col-md-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Profile Detail</h5>
                </div>
                <div>
                    <div class="ibox-content no-padding border-left-right">
                        <img alt="image" class="img-responsive" src="{{asset($pphoto)}}">
                    </div>
                    <div class="ibox-content profile-content">
                        <h4><strong>Name: {{$patient->firstName}} {{$patient->middleName}} {{$patient->lastName}}</strong></h4>

                        <h5>
                            About me
                        </h5>
                        <p>
                            {{$patient->about}}
                        </p>

                        <h5>
                            Blood Group
                        </h5>
                        <p>
                            {{$patient->bloodGroup}}
                        </p>


                        <h5>
                            Date of Birth
                        </h5>
                        <p>
                            {{$patient->DOB}}
                        </p>
                        <h5>
                            Contact
                        </h5>

                        <p><i class="fa fa-map-marker"></i> Phone no {{$patient->contact}}</p>
                        <p><i class="fa fa-map-marker"></i> Email {{$patient->email}}</p>
                        <p><i class="fa fa-map-marker"></i> Follow Up date {{$patient->followUp or 'Nothing'}}</p>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="footer">
        <div class="pull-right">
            Creaated by<strong> ClinicAid.com</strong>
        </div>
        <div>
            <strong>Copyright</strong>
        </div>
    </div>





@endsection