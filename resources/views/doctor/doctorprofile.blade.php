@extends('layout.adminmain')
@include('inc.doctorPanel.navSide')
@section('doctorProf')

            <div class="row animated fadeInRight">
                <div class="col-md-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Profile Detail</h5>
                        </div>
                        <div>
                            <div class="ibox-content no-padding border-left-right">
                                <img alt="image" class="img-responsive" src="{{asset($dphoto->path)}}">
                            </div>
                            <div class="ibox-content profile-content">
                                <h4><strong>Name: {{$doctor->firstName}} {{$doctor->middleName}} {{$doctor->lastName}}</strong></h4>

                                <h5>
                                    About me
                                </h5>
                                <p>
                                    {{$doctor->about}}
                                </p>

                                <h5>
                                    Education
                                </h5>
                                <p>
                                    {{$doctor->education}}
                                </p>


                                <h5>
                                    Speciality
                                </h5>
                                <p>
                                    {{$doctor->speciality}}
                                </p>
                                <h5>
                                    Contact
                                </h5>

                                <p><i class="fa fa-map-marker"></i> Facebook: {{$doctor->facebook}}</p>
                                <p><i class="fa fa-map-marker"></i> Twitter: {{$doctor->twitter}}</p>
                                <p><i class="fa fa-map-marker"></i> Skype: {{$doctor->facebook}}</p>
                                <p><i class="fa fa-map-marker"></i> Contact No:  {{$doctor->contact}}</p>
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

  


