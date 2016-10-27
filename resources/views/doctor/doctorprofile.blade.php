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
                                <img alt="image" class="img-responsive" src="{{asset('back/img/profile_big.jpg')}}">
                            </div>
                            <div class="ibox-content profile-content">
                                <h4><strong>Monica Smith</strong></h4>
                                <p><i class="fa fa-map-marker"></i> Riviera State 32/106</p>
                                <h5>
                                    About me
                                </h5>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.
                                </p>
                                <p><i class="fa fa-map-marker"></i> Riviera State 32/106</p>
                                <p><i class="fa fa-map-marker"></i> Riviera State 32/106</p>
                                <p><i class="fa fa-map-marker"></i> Riviera State 32/106</p>
                                <p><i class="fa fa-map-marker"></i> Riviera State 32/106</p>
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







@endsection

  


