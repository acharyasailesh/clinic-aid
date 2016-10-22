   @if (count($errors)>0)

   @endif


        <!-- Contact Form Starts -->
        <div class="col-sm-8 col-xs-12">
            <h3>Get in touch by filling the form below</h3>
            <div class="status alert alert-success contact-status"></div>
            <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="{{route('sendemail')}}" role="form">
                <div class="row">
                    <!-- Name Field Starts -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Name </label>
                            <input type="text" class="form-control" name="name" id="name" required="required">
                        </div>
                    </div>
                    <!-- Name Field Ends -->
                    <!-- Email Field Starts -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Email Address </label>
                            <input type="text" class="form-control" name="email" id="email" required="required">
                        </div>
                    </div>
                    <!-- Email Field Ends -->
                    <!-- Phone No Field Starts -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phoneNo">Contact Number </label>
                            <input type="text" class="form-control" name="phoneNo" id="phoneno" required="required">
                        </div>
                    </div>
                    <!-- Phone No Field Ends -->
                    <!-- Subject Field Starts -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="subject">Subject </label>
                            <input type="text" class="form-control" name="subject" id="subject" required="required">
                        </div>
                    </div>
                    <!-- Subject Field Ends -->
                    <!-- Message Field Starts -->
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="message">Your Comments: </label>
                            <textarea class="form-control" rows="8" name="message" id="message" required="required"></textarea>
                        </div>
                    </div>
                    <!-- Message Field Ends -->
                    <div class="col-xs-12">
                        <input type="submit" class="btn btn-black text-uppercase" value="Submit">
                    </div>

                </div>
                {{csrf_field()}}
            </form>
        </div>
        <!-- Contact Form Ends -->


    </div>
