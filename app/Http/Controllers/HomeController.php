<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    //

    public function mail()
    {

        $data=["Hellow"];

        Mail::send('mailEvent',$data,function($message){
            $message->to('programmersailesh@gmail.com');
            $message->subject('Sendgrid Testing');

        });
        dd('Mail Send Successfully');

    }
}
