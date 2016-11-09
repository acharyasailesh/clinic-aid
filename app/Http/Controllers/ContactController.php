<?php

namespace App\Http\Controllers;

use App\Contact;
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

        $contact=Contact::create([

            'message'=>$contactRequest->message,
            'name'=>$contactRequest->name,
            'phoneNo'=>$contactRequest->phoneNo,
            'subject'=>$contactRequest->subject,
            'email'=>$contactRequest->email
        ]);

        $email=$contactRequest['email'];
        $data = [
            'bodyMessage' =>  $contactRequest['message']

        ];

        Mail::send ( 'email', $data, function ($message)use ($email)  {

            $message->from ( 'contact@clinicaid.com', 'We will contact you soon' );

            $message->to ( $email )->subject ( 'Thanks For Contacting Us' );

        } );
        return view('thankyou');


    }

}
