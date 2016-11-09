<html>
<head>
    <meta charset="UTF-8">
    <title>Welcome to clinic app</title>

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/camera.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

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

<div class="container">
    <br>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>

  </ol>

  <div class="carousel-inner" role="listbox">
        {{--@for($i=0;$i<count($image);$i++)--}}
        {{----}}
        {{----}}
        {{--<div class="item {{ $i==0 ? 'active': '' }} ">--}}
                    {{----}}
                      {{--<img src="{{asset($image[$i]->path)}}" alt="Hellow" width="auto" height="100px">--}}
                            {{--<div class="carousel-caption">--}}
                                     {{--<h2>Hellow this is</h2>--}}
                            {{--</div>--}}


                    {{----}}
        {{--</div>--}}

       {{--@endfor--}}


      @for($i=0;$i<count($slider);$i++)


      <div class="item {{ $i==0 ? 'active': '' }} ">

      <img src="{{asset($slider[$i]->path)}}" alt="Hellow" width="auto" height="100px">
      <div class="carousel-caption">
      <h2>{{$slider[$i]->title}}</h2>
      </div>



      </div>

      @endfor
















  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</div>