@extends('layout.adminmain')
@include('inc.adminPanel.navside')
<div class="wrapper wrapper-content">
    @section('graph')
        <div class="container">
            <form method="post" action="">



                {{csrf_field()}}
                <input type="text" placeholder="Enter Years to show the status" name="year" required="required">
                <input type="submit" value="submit" class="btn btn-submit">
            </form>


        </div>


        <?php

        if(isset($_POST['year']))
            $year=$_POST['year'];

        ?>



        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Patient Arrival Report of <span id="year">{{$year}} </span>
                            <small>With monthy comparision of previous year.</small>
                        </h5>
                        <div ibox-tools></div>
                    </div>
                    <div class="ibox-content">
                        <div>
                            <canvas id="barChart" height="130"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Patient Arrival Report of {{$year}}
                            <small>With monthy comparision of previous year.</small>
                        </h5>
                    </div>
                    <div class="ibox-content">
                        <div>
                            <canvas id="lineChart" height="130"></canvas>
                        </div>
                    </div>
                </div>
            </div>









        </div>


</div>

@endsection




