<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

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

        Mail::send ( 'email', $data, function ($message)use ($email)  {

            $message->from ( 'contact@clinicaid.com', 'We will contact you soon' );

            $message->to ( $email )->subject ( 'Thanks For Contacting Us' );
        } );

        return redirect()->route('thankYou');

    }  //end of send function


    public function thankYou()
    {

        $this->middleware('thankyou');
        
    }



}
