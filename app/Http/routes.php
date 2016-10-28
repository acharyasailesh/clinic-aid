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
    Route::resource('contact','ContactController',['only'=>['index','store']]);

//    Route::get('contactform', ['as' => 'contactform', function () {
//        return view('contactform');
//    }]);
    Route::resource('news', 'NewsController', ['only' => ['index', 'show']]);
    Route::post('sendemail', ['as' => 'sendemail', 'uses' => 'EmailController@send']);

    Route::post('contactPatient/{id}/{dEmail}', ['as' => 'contactPatient', 'uses' => 'EmailController@contact']);


    Route::get('thankyou', ['as' => 'thankYou', 'middleware' => 'thankYou', 'uses' => 'EmailController@thankYou']);

    Route::get('upload', function () {
        return view('upload');
    });
    Route::post('fileUpload', ['as' => 'fileUpload', 'uses' => 'ImageController@fileUpload']);

//    Route::get('test', function () {
//        return view('test');
//    });
    Route::auth();


    Route::get('post', ['as' => 'post', function () {
        return view('admin.post');
    }]);



    Route::get('adminabout', ['as' => 'adminabout', function () {
        return view('admin.about');
    }]);

    Route::get('editpatient', ['as' => 'editpatient', function () {
        return view('admin.editpatient');
    }]);

    Route::get('viewpatient', ['as' => 'viewpatient', function () {
        return view('admin.viewpatient');
    }]);




    Route::get('form', ['as' => 'form', function () {
        return view('admin.form');
    }]);

    Route::get('editprofile', ['as' => 'editprofile', function () {
        return view('patient.editprofile');
    }]);

    Route::get('patientprofile', ['as' => 'patientprofile', function () {
        return view('patient.patientprofile');
    }]);


    Route::get('viewfollowup', ['as' => 'viewfollowup', function () {
        return view('patient.viewfollowup');
    }]);


    Route::get('medicalhistory', ['as' => 'medicalhistory', function () {
        return view('patient.medicalhistory');
    }]);

   //From Soodep doctor dashboard


    Route::get('doctorProf',['as'=>'doctorProf','uses'=>'DoctorController@index']);

    Route::get('viewPatient',['as'=>'viewPatient','uses'=>'DoctorController@viewPatient']);

    Route::get('viewPatientFollowList',['as'=>'viewPatientFollowList',function(){
        return view('doctor.viewpatientfollowlist');
    }]);
     Route::get('doctorform/{doctor}',['as'=>'doctorform','uses'=>'DoctorController@show'])->where('doctor','[0-1]+');;

    Route::post('doctorform/{doctor}',['as'=>'doctorform','uses'=>'DoctorController@edit']);






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
Route::get('patient/{id}/edit', 'PatientController@edit');

Route::put('/patient', 'PatientController@update');

