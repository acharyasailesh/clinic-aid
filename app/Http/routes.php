<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/




Route::group(['middleware'=>'web'],function(){
    Route::get('/', ['as'=>'home',function () {
        return view('home');

    }]);

    Route::get('/services', function () {
        return view('services');
    });



    Route::get('/login',function(){
        return view('login');
    });


    Route::get('/about', ['as'=>'about',function () {
        return view('about');
    }]);



    Route::get('doctor',['as'=>'doctor',function(){
        return view ('doctors');
    }]);


    Route::get('contact',['as'=>'contact',function(){
        return view ('contact');
    }]);



    Route::post('sendemail','EmailController@send');

//Route::post('sendemail', function () {
//    if (Request::get ( 'message' ) != null)
//        $data = [
//            'bodyMessage' => Request::get ( 'message' )
//        ];
//    else
//        $data [] = '';
//
//    Mail::send ( 'email', $data, function ($message) {
//
//        $message->from ( 'sailesh@codesastra.com', 'Just Laravel' );
//
//        $message->to ( Request::get ( 'toEmail' ) )->subject ( 'Learning Laravel test email' );
//    } );
//    return Redirect::back ()->withErrors ( [
//        'Your email has been sent successfully'
//    ] );
//} );

