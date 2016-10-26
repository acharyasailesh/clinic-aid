<?php

Route::group(['middleware'=>['web']],function() {
    Route::get('/', ['as' => 'home', 'uses' => 'MainController@index']);
    Route::get('/about', ['as' => 'about', function () {
        return view('about');
    }]);
    Route::get('doctor', ['as' => 'doctors', function () {
        return view('doctors');
    }]);
    Route::get('services', ['as' => 'services', function () {
        return view('services');
    }]);
    Route::get('contactform', ['as' => 'contactform', function () {
        return view('contactform');
    }]);
    Route::resource('news', 'NewsController', ['only' => ['index', 'show']]);
    Route::post('sendemail', ['as' => 'sendemail', 'uses' => 'EmailController@send']);
    Route::get('thankyou', ['as' => 'thankYou', 'middleware' => 'thankYou', 'uses' => 'EmailController@thankYou']);

    Route::get('upload', function () {
        return view('upload');
    });
    Route::post('fileUpload', ['as' => 'fileUpload', 'uses' => 'ImageController@fileUpload']);

    Route::get('test', function () {
        return view('test');
    });
    Route::auth();

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




// Route::get('/home', 'HomeController@index');
