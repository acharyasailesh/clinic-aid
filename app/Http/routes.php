<?php


use App\Role;
use App\User;

//Normal website with out login


Route::get('/', ['as' => 'home', 'uses' => 'MainController@index']);


Route::resource('about','AboutController',['only'=>['index','store']]);
Route::resource('contact','ContactController',['only'=>['index','store']]);
Route::resource('news', 'NewsController', ['only' => ['index', 'show']]);
Route::get('category',['as'=>'category.index','uses'=>'CategoryController@index','roles'=>'admin']);
Route::post('category',['as'=>'category.store','uses'=>'CategoryController@store','roles'=>'admin']);
Route::get('editcategory',['as'=>'category.edit','uses'=>'CategoryController@edit','roles'=>'admin']);
Route::post('editcategory/{category}',['as'=>'category.updateCategory','uses'=>'CategoryController@update','roles'=>'admin']);







//Route::resource('category','CategoryController',['only'=>['index','store']]);

Route::get('doctors',['as'=>'doctors','uses'=>'DoctorController@info']);
Route::post('sendemail', ['as' => 'sendemail', 'uses' => 'EmailController@send']);


//    Route::get('services', ['as' => 'services', function () {
//        return view('services');
//    }]);


//    Route::get('contactform', ['as' => 'contactform', function () {
//        return view('contactform');
//    }]);


Route::post('contactPatient/{id}/{dEmail}', ['as' => 'contactPatient', 'uses' => 'EmailController@contact']);
    Route::get('upload', function () {
        return view('upload');
    });
    Route::post('fileUpload', ['as' => 'fileUpload', 'uses' => 'ImageController@fileUpload']);

//    Route::get('test', function () {
//        return view('test');
//    });
    Route::auth();

//


//Admin ROute**************************************************************

Route::get('addDoctor',['as'=>'admin.addDoctor','uses'=>'AdminController@addDoctor','roles'=>'admin']);

Route::post('addDoctor',['as'=>'admin.storeDoctor','uses'=>'AdminController@storeDoctor','roles'=>'admin']);
Route::get('editDoctor',['as'=>'admin.editDoctor','uses'=>'AdminController@editDoctor','roles'=>'admin']);
Route::post('updatePatient/{patient}',['as'=>'admin.updatePatient','uses'=>'AdminController@updatePatient','roles'=>'admin']);

Route::get('admin',['as'=>'admin.index','uses'=>'AdminController@index','roles'=>'admin']);
Route::get('slider',['as'=>'admin.slider','uses'=>'AdminController@slider','roles'=>'admin']);
Route::post('slider',['as'=>'image.slider','uses'=>'ImageController@sliderUpload','roles'=>'admin']);
Route::post('store',['as'=>'admin.store','uses'=>'AdminController@store','roles'=>'admin']);
Route::delete('doctor/{doctorId}',['as'=>'admin.deleteDoctor','uses'=>'AdminController@deleteDoctor','roles'=>'admin']);
Route::delete('patient/{patientId}',['as'=>'admin.deletePatient','uses'=>'AdminController@deletePatient','roles'=>'admin']);
Route::delete('category/{categoryId}',['as'=>'admin.deleteCategory','uses'=>'AdminController@deleteCategory','roles'=>'admin']);

    Route::get('adminabout', ['as' => 'adminabout', 'uses'=>'AboutController@show','roles'=>'admin']);


    Route::get('editpatient', ['as' => 'editpatient',

        'roles'=>'admin',
        'uses'=>'AdminController@editPatient'

    ]);
Route::get('form', ['as' => 'form', 'uses'=>'DoctorController@addPatient','roles'=>'admin']);
Route::post('searchPatient',['as'=>'searchPatient','uses'=>'SearchController@searchPatient','roles'=>['admin','doctor']]);
Route::post('searchDoctor',['as'=>'searchDoctor','uses'=>'SearchController@searchDoctor','roles'=>'admin']);
Route::post('searchCategory',['as'=>'searchCategory','uses'=>'SearchController@searchCategory','roles'=>'admin']);

//    Route::get('viewpatient', ['as' => 'viewpatient', function () {
//        return view('admin.viewpatient');
//    }]);



   //Patient Profile

    Route::get('editprofile',['as'=>'patientform','uses'=>'PatientController@show','roles'=>'user']);
    Route::post('editprofile',['as'=>'patientform','uses'=>'PatientController@edit','roles'=>'user']);

    Route::get('patient', ['as' => 'patientprofile', 'uses'=>'PatientController@index','roles'=>'user']);



//    Route::get('viewfollowup', ['as' => 'viewfollowup', function () {
//        return view('patient.viewfollowup');
//    }]);


    Route::get('history', ['as' => 'medicalhistory', 'uses'=>"PatientController@history",'roles'=>'user']);
    Route::post('savePatientDetails/{patient}',['as'=>'saveMedicalDetails','uses'=>'MedicalHistoryController@store']);


   //From Soodep doctor dashboard

    Route::get('doctor',['as'=>'doctorProf','uses'=>'DoctorController@index','roles'=>'doctor']);

    Route::get('viewPatient',['as'=>'viewPatient','uses'=>'DoctorController@viewPatient','roles'=>'doctor']);
    Route::get('viewPatientFollowList',['as'=>'viewPatientFollowList','uses'=>'DoctorController@viewPatientFollowUp','roles'=>'doctor']);

     Route::get('doctorform',['as'=>'doctorform','uses'=>'DoctorController@show','roles'=>'doctor']);

    Route::post('doctorform',['as'=>'doctorform','uses'=>'DoctorController@edit','roles'=>'doctor']);

    Route::post('pdf/{patientid}',['as' => 'pdf', 'uses'=>"PatientController@report"]);


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
//Route::get('patient/{id}/edit', 'PatientController@edit');


Route::put('/patient/{patientId}', ['as'=>'patientDetailsUpdate','uses'=>'PatientController@updatePatient','roles'=>'admin']);
Route::put('/doctor/{doctorId}', ['as'=>'doctorDetailsUpdate','uses'=>'PatientController@updateDoctor','roles'=>'admin']);




//Later Admin added

//
//Route::get('/admin/login','Adminauth\AuthController@showLoginForm');
//Route::post('/admin/login','Adminauth\AuthController@login');
//Route::get('/admin/password/reset','Adminauth\PasswordController@resetPassword');
//
//Route::group(['middleware' => ['admin']], function () {
//    //Login Routes...
//    Route::get('/admin/logout','Adminauth\AuthController@logout');
//
//    // Registration Routes...
//    Route::get('admin/register', 'Adminauth\AuthController@showRegistrationForm');
//    Route::post('admin/register', 'Adminauth\AuthController@register');
//
//    Route::get('/admin', 'Admin\Employee@index');
//});

//Route::get('/graph/{year}',['as'=>'graph','uses'=>'AdminController@graph','roles'=>'admin']);
Route::get('/graph',['as'=>'graph','uses'=>'AdminController@graph','roles'=>'admin']);
Route::post('/graph',['as'=>'graphs','uses'=>'AdminController@graph','roles'=>'admin']);
Route::get('/api/graph/{year}',['as'=>'data','uses'=>'AdminController@data','roles'=>'admin']);


