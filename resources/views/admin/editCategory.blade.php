@extends('layout.adminmain')
@include('inc.adminPanel.navside')
@section('editCategory')

    @if (Session::has('success'))
        <div class="alert alert-success">
            {{session('success')}}
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


    <div class="wrapper wrapper-content  animated fadeInRight">
        <div class="row">
            <div class="col-sm-8">
                <div class="ibox">
                    <div class="ibox-content">

                        <h2>Forum Category</h2>

                        <form method="post" action="{{route('searchCategory')}}">
                            {{csrf_field()}}
                            <div class="input-group">
                                <input type="text" placeholder="Search Category " class="input form-control"  name="keyword">
                                <span class="input-group-btn">
                                        <button type="submit" class="btn btn btn-primary"> <i class="fa fa-search"></i> Search</button>
                                </span>
                        </form>
                    </div>
                    <div class="clients-list">
                        <ul class="nav nav-tabs">

                            <li class="active"><a data-toggle="tab" href="#tab-1">Category Name</a></li>
                            <li class="active"><a data-toggle="tab" href="#tab-1"><i class="fa fa-user"></i>Slug name</a></li>
                </ul>
                        <div class="tab-content">
                            <div id="tab-1" class="tab-pane active">
                                <div class="full-height-scroll">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover">
                                            <tbody>

                                            @if (Session::has('category'))


                                                <?php $category=session('category') ?>

                                            @endif

                                            @foreach($category as $category)
                                                <form method="post" action="{{route('category.updateCategory',['category'=>$category->id])}}">

                                                {{csrf_field()}}

                                                <tr>



                                                    <td class="client-avatar">

                                                        <input type="text" value="{{$category->name}}"  name="name">
                                                    </td>




                                                    <td> <input type="text" value="{{$category->slug}}"  name="slug"></td>
                                                    <td><button type="submit" class="btn btn-primary ">Save
                                                        </button></td>

                                                    </form>

                                                <form method="post" action="{{route('admin.deleteCategory',['categoryId'=>$category->id])}}">
                                                    {{csrf_field()}}
                                                    {{method_field("DELETE")}}



                                                        <td><button class="btn btn-primary" type="submit">Delete</button></td>



                                                </form>








                                                @endforeach

                                                </tr>


                                            </tbody>
                                        </table>
















                                    </div>


                                </div>
                            </div>

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










@endsection


@section('endScripts')





    <!-- Data picker -->
    <script src="{{asset('back/js/plugins/datapicker/bootstrap-datepicker.js')}}"></script>
    <script>

        function save() {
            ////get the editable element
            var editElem = document.getElementById("edit");

            ////get the edited element content
            var userVersion = editElem.innerHTML;

            // save the content to local storage
            localStorage.userEdits = userVersion;

            ////write a confirmation to the user
            document.getElementById("update").innerHTML="Edits saved!";

        }

        $(document).ready(function(){
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
            $('#data_1 .input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });
        });
    </script>
@endsection
