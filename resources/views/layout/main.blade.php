<html>
<head>
    <meta charset="UTF-8">
    <title>Welcome to clinic app</title>
    {{--Stylesheet --}}
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/camera.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
   {{--Javascript--}}
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/camera.min.js')}}"></script>
    <script src="{{asset('js/common.min.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
    <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/jquery.mobile.customized.min.js')}}"></script>
    <script src="{{asset('js/jquery.shuffle.modernizr.min.js')}}"></script>
    <script src="{{asset('js/jquery-1.11.3.min.js')}}"></script>
    <script src="{{asset('js/jquery-migrate-1.2.1.min.js')}}"></script>
    <script src="{{asset('js/stats.js')}}"></script>
    <script src="{{asset('js/util.js')}}"></script>




























</head>

@include('inc.navbar')
@yield('home')
@yield('doctor')
@include('inc.fotter')


