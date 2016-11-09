<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to clinic admin panel</title>

    <link rel="stylesheet" href="{{asset('back/css/bootstrap.min.css')}}" >
    <link rel="stylesheet" href="{{asset('back/font-awesome/css/font-awesome.css')}}" >
    <link rel="stylesheet" href="{{asset('back/css/animate.css')}}" >
    <link rel="stylesheet" href="{{asset('back/css/plugins/dropzone/basic.css')}}" >
    <link rel="stylesheet" href="{{asset('back/css/plugins/dropzone/dropzone.css')}}" >
    <link rel="stylesheet" href="{{asset('back/css/style.css')}}" >


    <!-- Mainly scripts -->

    <!-- Flot -->
    <script src="{{asset('back/js/plugins/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('back/js/plugins/flot/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{asset('js/plugins/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('js/plugins/flot/jquery.flot.pie.js')}}"></script>

    <script src="{{asset('back/js/jquery-2.1.1.js')}}"></script>
    <script src="{{asset('back/js/bootstrap.min.js')}}"></script>

    <!-- ChartJS-->
    <script src="{{asset('back/js/plugins/chartJs/Chart.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/graph2.js')}}"></script>

    <script src="{{asset('back/js/jquery-2.1.1.js')}}"></script>
    <script src="{{asset('back/js/bootstrap.min.js')}}"></script>


    <script src="{{asset('back/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
    <script src="{{asset('back/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('back/js/inspinia.js')}}"></script>
    <script src="{{asset('back/js/plugins/pace/pace.min.js')}}"></script>
    <script src="{{asset('back/js/plugins/dropzone/dropzone.js')}}"></script>
    <script src="{{asset('back/js/plugins/summernote/summernote.min.js')}}"></script>

    <!-- Data picker -->
    <script src="{{asset('back/js/plugins/datapicker/bootstrap-datepicker.js')}}"></script>
    <script>

        $( function() {
            $( "#datepicker" ).datepicker();
        } );




    </script>

    {{--Dropzone--}}
    <link href="{{asset('back/css/plugins/dropzone/basic.css')}}" rel="stylesheet">
    <link href="{{asset('back/css/plugins/dropzone/dropzone.css')}}" rel="stylesheet">

    <!-- Toastr style -->
    <link href="{{asset('back/css/plugins/toastr/toastr.min.css')}}" rel="stylesheet">

    <link href="{{asset('back/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('back/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('back/css/plugins/datapicker/datepicker3.css')}}" rel="stylesheet"

</head>
<body>
@yield('addDoctor')
@yield('report')
@yield('editCategory')
@yield('category')
@yield('editprofile')
@yield('patientprofile')
@yield('viewfollowup')
@yield('medicalhistory')
@yield('slider')

@yield('adminabout')
@yield('editpatient')
@yield('editDoctor')
@yield('viewpatient')
@yield('form')
@yield('post')

@yield('doctorProf')
@yield('doctorform')
@yield('doctorViewPatient')
@yield('doctorViewPatientFollowList')
@yield('graph')

</body>

</html>