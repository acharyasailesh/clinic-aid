@extends('layout.adminmain')
@include('inc.adminPanel.navside')
@section('post')

    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
           <strong>Congrats!!!</strong> Post has been uploaded<br><br>
            You can view Post on <a href="{{url('news')}}">News</a>

       </div>

    @endif
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif




    <div class="wrapper wrapper-content">

            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Post your News</h5>
                         <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>

                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content no-padding">
                        {!! Form::open(array('route' => 'fileUpload','enctype' => 'multipart/form-data')) !!}

                        {{--<form method="post" class="form-horizontal" action="{{route('test',['doctor'=>$doctor->id])}}" enctype="multipart/form-data">--}}
                            {{csrf_field()}}


                            <div class="form-group">
                                <br>
                                {!!  Form::label('title', 'News Title', array('class' => 'col-sm-2 control-label'))!!}
                                <br>
                                <div class="row">


                                    <div class="col-md-12">{!! Form::text('title', null, ['class' => 'form-control']) !!}</div>


                                </div>
                                <br>


                                <div class="row">
                                    {!!  Form::label('description', 'News Description', array('class' => 'col-sm-2 control-label'))!!}

                                    <div class="col-md-12">{!! Form::textarea('description', null, ['class' => 'form-control']) !!}</div>



                                </div>





                                {{--<div class="summernote">--}}
                            {{--<h3>Lorem Ipsum is simply</h3>--}}
                            {{--dummy text of the printing and typesetting industry. <strong>Lorem Ipsum has been the industry's</strong> standard dummy text ever since the 1500s,--}}
                            {{--when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic--}}
                            {{--typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with--}}
                            {{--<br/>--}}
                            {{--<br/>--}}

                        {{--</div>--}}
                        {{--<button id="edit" class="btn btn-primary btn-xs m-l-sm" onclick="edit()" type="button">Edit</button>--}}
                            {{--<button id="save" class="btn btn-primary  btn-xs" onclick="save()" type="button">Save</button>--}}

                    </div>
                </div>
            </div>
            </div>
            
            

        </div>   
        <div class="wrapper wrapper-content animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>News Image</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>

                        </div>
                    </div>
                    <div class="ibox-content">





                        <div class="row cancel">

                            <div class="col-md-4">

                                {!! Form::file('image', array('class' => 'image')) !!}

                            </div>

                            <div class="col-md-4">

                                <button type="submit" class="btn btn-success">Submit</button>

                            </div>

                        </div>

                        {!! Form::close() !!}


                        {{--<form id="my-awesome-dropzone" class="dropzone" action="#">--}}
                            {{--<div class="dropzone-previews"></div>--}}
                            {{--<button type="submit" class="btn btn-primary pull-right">Upload</button>--}}
                            {{----}}
                        {{--</form>--}}
                        {{--<div>--}}

                        {{--</div>--}}
                    </div>
                </div>
            </div>
            </div>

            </div>
            <div class="footer">

                <div>
                    <strong>Copyright &copy;</strong> Clinicaid.com 2016
                </div>
            </div>






    <script>
        $(document).ready(function(){

            Dropzone.options.myAwesomeDropzone = {

                autoProcessQueue: false,
                uploadMultiple: true,
                parallelUploads: 100,
                maxFiles: 100,

                // Dropzone settings
                init: function() {
                    var myDropzone = this;

                    this.element.querySelector("button[type=submit]").addEventListener("click", function(e) {
                        e.preventDefault();
                        e.stopPropagation();
                        myDropzone.processQueue();
                    });
                    this.on("sendingmultiple", function() {
                    });
                    this.on("successmultiple", function(files, response) {
                    });
                    this.on("errormultiple", function(files, response) {
                    });
                }

            }

       });
    </script>


@endsection

