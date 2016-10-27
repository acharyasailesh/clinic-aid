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
<!-- Contact Form Starts -->
<div class="col-sm-8 col-xs-12">

    <h3>Get in touch by filling the form below</h3>
    <div class="status alert alert-success contact-status"></div>
    {!! Form::open(['route' => 'contact.store']) !!}

    <div class="form-group">


        {!!  Form::label('name', 'Name') !!}
        {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}

    </div>

    <!-- Email Field Starts -->
    <div class="form-group">

        {!!  Form::label('email', 'Email Address',['class' => 'awesome']) !!}
        {!! Form::text('email', old('email'), ['class' => 'form-control']) !!}

    </div>
    <!-- Email Field Ends -->
    <!-- Phone No Field Starts -->
    <div class="form-group">

        {!!  Form::label('phoneNo', 'PhoneNo') !!}
        {!! Form::text('phoneNo', old('phoneNo'), ['class' => 'form-control']) !!}

    </div>
    <!-- Phone No Field Ends -->
    <!-- Subject Field Starts -->
    <div class="form-group">

        <label for="subject">Subject </label>
        {!! Form::text('subject', old('subject'), ['class' => 'form-control']) !!}

    </div>
    <!-- Subject Field Ends -->
    <!-- Message Field Starts -->

    <div class="form-group">
        <label for="message">Your Comments: </label>
        <textarea class="form-control" rows="8" name="message" id="message"></textarea>
    </div>

    <!-- Message Field Ends -->
    <div class="form-group">
        {!! Form::submit('submit', ['class'=>'btn btn-primary text-uppercase']) !!}
        {{--<input type="submit" class="btn btn-black text-uppercase" value="Submit">--}}
    </div>

</div>

{!! Form::close() !!}
</div>
<!-- Contact Form Ends -->

