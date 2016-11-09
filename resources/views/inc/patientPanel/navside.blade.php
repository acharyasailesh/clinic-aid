<div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                  <img alt="image" class="img-circle" src="{{$pphoto or ''}}" width="50px" height="50px"/>
                  </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                  <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{$patient->firstName or ' '}}</strong>
                  </span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="{{route('patientprofile')}}">Profile</a></li>

                            <li><a href="{{url('logout')}}">Logout</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        CA
                    </div>
                </li>
                <li>
                    <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Profile</span> <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li ><a href="{{route('patientprofile')}}">My Profile</a></li>
                        <li ><a href="{{route('patientform')}}">Edit Profile</a></li>

                        </li>

                    </ul>
                </li>

                <li>
                    <a href="{{route('medicalhistory')}}"><i class="fa fa-diamond"></i> <span class="nav-label">Medical History</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('forums')}}"><i class="fa fa-diamond"></i> <span class="nav-label">Forum</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>

                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <span class="m-r-sm text-muted welcome-message">Welcome to Clinic Aid | Patient Dashboard</span>
                    </li>

                    <li>
                        <span class="m-r-sm text-muted welcome-message"><a href="{{url('/')}}" title="Home"> Home</a></span>
                    </li>


                    <li>
                        <a href="{{url('logout')}}">
                            <i class="fa fa-sign-out"></i> Log out
                        </a>
                    </li>
                </ul>

            </nav>
        </div>



