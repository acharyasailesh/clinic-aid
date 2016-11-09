<div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>

                  </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                  <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Sabina Acharya</strong>
                  </span></span>  </a>
                    </div>
                    <div class="logo-element">
                        CA
                    </div>
                </li>
                <li>
                    <a href="{{route('admin.index')}}"><i class="fa fa-th-large"></i> <span class="nav-label">Posts</span> <span class="fa arrow"></span>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.slider')}}"><i class="fa fa-th-large"></i> <span class="nav-label">Slider</span> <span class="fa arrow"></span>
                    </a>
                </li>

                <li>
                    <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Doctors</span> <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li ><a href="{{route('admin.addDoctor')}}">Add Doctor</a></li>
                        <li ><a href="{{route('admin.editDoctor')}}">Edit Doctor</a></li>

                    </ul>
                </li>

                <li>
                    <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Patient</span> <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li ><a href="{{route('form')}}">Add Patient</a></li>
                        <li ><a href="{{route('editpatient')}}">Edit Patient</a></li>

                    </ul>
                </li>



                <li>
                    <a href="{{route('adminabout')}}"><i class="fa fa-diamond"></i> <span class="nav-label">About</span>
                    </a>
                </li>



                <li>
                    <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Report</span> <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li ><a href="{{route('graph')}}">Visit No</a></li>


                    </ul>


                </li>








                <li>
                    <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Forums</span> <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li ><a href="{{route('category.index')}}">Add Category</a></li>
                        <li ><a href="{{route('category.edit')}}">Edit Category</a></li>

                        <li ><a href="{{url('forums')}}">View Forums</a></li>

                    </ul>


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
                        <span class="m-r-sm text-muted welcome-message">Welcome to Clinic Aid | Admin Dashboard</span>
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


