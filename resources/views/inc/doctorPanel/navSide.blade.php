<div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                  <img alt="image" class="img-circle" src="{{$dphoto}}"   width="50px" height="50px"/>
                  </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                  <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{$doctor->firstName or ' '}}</strong>
                  </span>  </a>

                    </div>
                    <div class="logo-element">
                        CA
                    </div>
                </li>
                <li>
                    <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Profile</span> <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">


                        <li ><a href="{{route('doctorProf')}}">My Profile</a></li>
                        <li ><a href="{{route('doctorform')}}">Edit Profile</a></li>

                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Patient</span> <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li ><a href="{{route('viewPatient')}}">View Patient</a></li>
                        <li ><a href="{{route('viewPatientFollowList')}}">View Followup List</a></li>

                    </ul>

                </li>

                <li>
                    <a href="{{url('forums')}}"><i class="fa fa-th-large"></i> <span class="nav-label">Forums</span> <span class="fa arrow"></span>
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

                        <span class="m-r-sm text-muted welcome-message">Welcome to Clinic Aid | Doctor Dashboard .</span>
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
