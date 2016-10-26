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


@if(count($errors)>0)

    <div class="alert alert-danger">

        <strong>Whoops!</strong> There were some problems with your input.<br><br>

        <ul>

            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

@endif


{!! Form::open(array('route' => 'fileUpload','enctype' => 'multipart/form-data')) !!}

    <div class="row cancel">

        <div class="col-md-4">

            {!! Form::file('image', array('class' => 'image')) !!}

        </div>

        <div class="col-md-4">

            <button type="submit" class="btn btn-success">Submit</button>

        </div>

    </div>

{!! Form::close() !!}
