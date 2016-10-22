<?php

Route::group(['middleware'=>'web'],function(){
    Route::get('/', ['as'=>'home',function () {
        return view('home');

    }]);


    Route::get('/login',function(){
        return view('login');
    });


    Route::get('/about', ['as'=>'about',function () {
        return view('about');
    }]);



    Route::get('doctor',['as'=>'doctors',function(){
        return view ('doctors');
    }]);

    Route::get('services',['as'=>'services',function(){
        return view ('services');
    }]);

    Route::get('contactform',['as'=>'contactform',function(){
        return view ('contactform');
    }]);

    Route::get('news',['as'=>'news',function(){
        return view('news');
    }]);

    Route::post('sendemail',['as'=>'sendemail','uses'=>'EmailController@send']);
});


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

