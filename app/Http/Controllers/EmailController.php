<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function send(Request $request)
    {
        $email=$request['email'];
        $this->validate($request,[
           'message'=>'required',
            'name'=>'required',
            'phoneNo'=>'required',
            'subject'=>'required',
            'email'=>'required'

        ]);
        $data = [
            'bodyMessage' =>  $request['message']
            
        ];

        Mail::send ( 'email', $data, function ($message,Request $request) {

            $message->from ( 'sailesh@codesastra.com', 'We will contact you soon' );

            $message->to ( $request['email'] )->subject ( 'Thanks For Contacting Us' );
        } );
        return Redirect::back ()->withErrors ( [
            'Your email has been sent successfully'
        ] );
        





    }  //end of send function




}
