<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class EmailController extends Controller
{
    public function send(Request $request)
    {
        $this->validate($request,[
           'message'=>'required',
            'name'=>'required',
            'phoneno'=>'required',
            'subject'=>'required'

        ]);
        $data = [
            'bodyMessage' =>  $request['message']
            
            

        ];

        Mail::send ( 'email', $data, function ($message) {

            $message->from ( 'sailesh@codesastra.com', 'We will contact you soon' );

            $message->to ( Request::get ( 'toEmail' ) )->subject ( 'Thanks For Contacting Us' );
        } );
        return Redirect::back ()->withErrors ( [
            'Your email has been sent successfully'
        ] );
        





    }  //end of send function




}
