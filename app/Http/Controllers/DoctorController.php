<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\dphoto;
use App\Patient;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class DoctorController extends Controller
{
    //


    public function index()
    {

        $doctor=Doctor::findorFail(1);

        $dphoto=$doctor->dPhoto->orderBy('id', 'desc')->first();  //return object

        return view('doctor.doctorprofile',compact('doctor','dphoto'));

    }

    public function show($id)
    {
        $doctor=Doctor::findorFail($id)->orderBy('id', 'desc')->first();;

        return view('doctor.doctor_form',compact('doctor'));

    }

    public function edit(Request $request, $id)
    {
        $doctor=Doctor::findorFail($id);
         $dphoto=$doctor->dphoto();
        $doctor->firstName=$request->firstName;
        $doctor->middleName=$request->middleName;
        $doctor->lastName=$request->lastName;
        $doctor->about=$request->about;
        $doctor->education=$request->education;
        $doctor->workDays=$request->workDays;
        $doctor->facebook=$request->facebook;
        $doctor->twitter=$request->twitter;
        $doctor->skype=$request->skype;
        $doctor->about=$request->about;
        $doctor->speciality=$request->speciality;
        $doctor->contact=$request->contact;
        $doctor->save();


        if(Input::hasFile('image')){
            $doctor=Doctor::findorFail($id);
            $dphoto=new DPhoto;
            $dphotoImage=Input::file('image');

            //$length=$news->count();

            $dphoto->extension=$dphotoImage->getClientOriginalExtension();

            $dphoto->size=$dphotoImage->getSize();
            $dphoto->type=$dphotoImage->getMimeType();
            $dphoto->name=$dphotoImage->getClientOriginalName();
            $destinationPath = 'uploads/Doctor';

            $final=$dphotoImage->move($destinationPath,$dphotoImage->getClientOriginalName());
            $dphoto->path=$final;
            $dphoto->doctor_id=$doctor->id;
            $dphoto->save();

        }



         return view('doctor.doctor_form',compact('doctor'));


    }


    public function viewPatient()
    {
        $Doctor=Doctor::findOrFail(1);
        $patient=$Doctor->patients()->orderBy('id', 'desc')->get();  //returns array of object




        return view('doctor.viewpatient',compact('patient','Doctor'));
   }













}
