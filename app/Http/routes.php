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

Route::get('/', function () {
    return view('layout.main');
});

<<<<<<< HEAD
Route::get('/about',function(){
   return view('about');
});

Route::get('/login',function(){
    return view('login');
});

=======

Route::get('/about', function () {
    return view('about');
});

Route::get('/doctor', function () {
    return view('doctors');
});
>>>>>>> 8fd41b249edf1743644bdeec2287e70b7de8cef9
