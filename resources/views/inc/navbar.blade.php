<!-- Header Starts -->

    <!-- Nested Container Starts -->
    <div class="container">
        <!-- Top Bar Starts -->
        <div class="top-bar hidden-sm hidden-xs">
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <span>Opening Hours:</span>  Mon To Fri - 9:00 - 20:00, Sat &amp Sun - 10:00 - 15:00
                </div>
                <div class="col-sm-6 col-xs-12">
                    <ul class="list-unstyled list-inline">
                        <li><a href="mailto:care@yourhosptialsname.com">
                                <i class="fa fa-envelope-o"></i>
                                {{$email}}
                            </a></li>
                        <li><i class="fa fa-phone"></i> Call Us: {{$phoneNo}}</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Top Bar Ends -->
        <!-- Navbar Starts -->
        <nav id="nav" class="navbar navbar-default " role="navigation">
            <div class="container-fluid">
                <!-- Navbar Header Starts -->
                <div class="navbar-header">
                    <!-- Collapse Button Starts -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collapse Button Ends -->
                    <!-- Logo Starts -->
                    <a href="#" class="navbar-brand">
                        <img src="{{asset('images/clinicaid.png')}}" width="90px" height="80px">


                    </a>
                    <!-- Logo Ends -->
                </div>
                <!-- Navbar Header Ends -->
                <!-- Navbar Collapse Starts -->
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('about.index')}}">About</a></li>
                        <li><a href="{{route('doctors')}}">Doctors</a></li>
                        <li><a href="{{route('news.index')}}">News</a></li>
                        <li><a href="{{route('contact.index')}}">Contact</a></li>
                        <li>@if(\Illuminate\Support\Facades\Auth::check())

                                <?php $role_id= Auth::user()->roles->first()->pivot->role_id; ?>


                                    @if($role_id==1)
                                        <a href="{{url('admin')}}">

                                    @elseif ($role_id==2)
                                                <a href="{{url('patient')}}">

                                    @else
                                                        <a href="{{url('doctor')}}">
                                    @endif

                                Welcome {{Auth::user()->name}}
                                </a>
                        </li>

                             @else <a href="{{url('login')}}">
                                Dashboard</a>

                        @endif





                    </ul>
                </div>
                <!-- Navbar Collapse Ends -->
            </div>
        </nav>
