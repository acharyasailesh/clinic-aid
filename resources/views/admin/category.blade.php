@extends('layout.adminmain')
@include('inc.adminPanel.navside')
@section('category')

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

    @if(Session::has('success'))
        <div class="alert alert-success">
            Category Added

        </div>

    @endif



    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Add  <small>Category.</small></h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">

                        <form method="post" class="form-horizontal" action="{{route('category.store')}}">
                            {{csrf_field()}}
                            <div class="form-group"><label class="col-sm-2 control-label">Category</label>

                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-md-4"><input type="text" placeholder="Category" class="form-control" name="category"></div>
                                    </div>
                                </div>
                            </div>




                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-white" type="reset">Cancel</button>
                                        <button class="btn btn-primary" type="submit">Save changes</button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div>
            <strong>Copyright</strong> Clinicaid.com &copy; 2016
        </div>
    </div>

    </div>
    </div>


    <script>
        $(document).ready(function () {
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>
@endsection
