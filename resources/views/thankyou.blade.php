@extends('layout.main')
@section('title')
    Thanks for Contacting us
@endsection

@section('thankyou')

<p style="text-align: center;">
        <img src="{{asset('img/check-icon.png')}}" alt="" width="128" height="128" /></p>
    <div style="text-align: center;">
        <h1 style="text-align: center;"><span style="font-size: 18pt; font-family: arial,helvetica,sans-serif;">Thank You for your submission!</span></h1>
        <p style="text-align: center;"><span style="font-family: arial,helvetica,sans-serif;">  <span style="font-size: large;">You will receive a confirmation email shortly acknowledging your request.  We are glad to have your feedback.</span> </span></p>
    </div>

@endsection
