<!-- Footer Starts -->
<footer class="main-footer">
    <!-- Footer Area Starts -->
    <div class="footer-area">
        <!-- Nested Container Starts -->
        <div class="container">
            <div class="row">
                <!-- Hosptial Information Starts -->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <h4>Clinic Aid Information</h4>
                    <p>
                        {{$description}}
                    </p>
                    <ul class="list-unstyled address-list">

                        <li class="clearfix">
                            <i class="fa fa-fax"></i>
                            {{$phoneNo}}
                        </li>

                        <li class="clearfix">
                            <i class="fa fa-envelope"></i>
                            <a href="mailto:{{$email}}">{{$email}}</a>
                        </li>
                    </ul>
                </div>
                <!-- Hosptial Information Ends -->
                <!-- Services Starts -->


                <div class="col-md-6 col-sm-6 col-xs-12">
                    <h4>Services</h4>
                    <ul class="list-unstyled">

                        <?php  $services=['First Aid','Dental Care','Qualified Doctors','Medical Pharmacy'] ?>
                        @foreach($services as $service)

                            <li><i class="fa fa-angle-right"></i> {{$service}}</li>
                        @endforeach

                    </ul>
                </div>
                <!-- Services Ends -->
            </div>
        </div>
        <!-- Nested Container Ends -->
    </div>
    <!-- Footer Area Ends -->
    <!-- Copyright Starts -->
    <div class="copyright">
        <div class="container clearfix">
            <p class="pull-left">
                &copy; Copyright 2016. AlL Rights Reserved By <span>Clinic Aid</span>
            </p>

        </div>
    </div>
    <!-- Copyright Ends -->
</footer>