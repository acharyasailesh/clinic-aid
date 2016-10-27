<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //
    public function index()
    {
        return view('contactform');
    }

    public function store(ContactRequest $contactRequest)
    {
        $email=$contactRequest['email'];
        $data = [
            'bodyMessage' =>  $contactRequest['message']

        ];

        Mail::send ( 'email', $data, function ($message)use ($email)  {

            $message->from ( 'contact@clinicaid.com', 'We will contact you soon' );

            $message->to ( $email )->subject ( 'Thanks For Contacting Us' );
        } );

        return redirect()->route('thankYou');

    }

}
