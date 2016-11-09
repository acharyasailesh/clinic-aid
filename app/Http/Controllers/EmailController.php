<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\Patient;
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

        return redirect()->url('thankYou');

    }  //end of send function


    public function thankYou()
    {

        return view('thankyou');

    }

    public function contact(Request $request,$id,$dEmail)
    {
        $patient=Patient::where('id',$id)->first();
        $followUpdate=$request->input('followUp');

        $patient->followUp= $followUpdate;


        $patient->save();

        $email=$patient->email;
        $doctorEmail=$dEmail;
        $doctor=Doctor::where('email',$doctorEmail)->first();


      $followUpdate= [
                        'followDate'=>$request->followUp,
                        'firstName'=>$doctor->firstName,
                        'middleName'=>$doctor->middleName,
                        'lastName'=>$doctor->lastName

                    ];



        Mail::send ( 'Doctoremail', $followUpdate, function ($message)use ($email,$doctorEmail)  {

            $message->from ( $doctorEmail, 'Appointment Date Information' );

            $message->to ( $email )->subject ( 'Updated Appointment Date' );
        } );

       return redirect()->back()->with('success','Patient Appointment date Updated');



    }



}
