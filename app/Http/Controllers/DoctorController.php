<?php

namespace App\Http\Controllers;

use App\Doctor;

use App\DPhoto;
use App\Patient;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class DoctorController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('roles',['except'=>['info']]);
    }
    public function info()
    {
        $doctors=Doctor::all();
        $doctorNo=$doctors->count();
        $picture=DPhoto::all();

        return view('doctors',compact('doctors','picture','doctorNo'));

    }

    public function index()
    {

        // $role_id= Auth::user()->roles->first()->pivot->role_id;
        $user_email=Auth::user()->email;
        $user_name=Auth::user()->name;

        $doctors=Doctor::all();
        foreach ($doctors as $doctor){
            if(($doctor->fname==$user_name) || ($doctor->email==$user_email)){
                $id= $doctor->id;
                break;
            }

        }

        $doctor=Doctor::findorFail($id);

        $dphoto=$doctor->dPhoto->path;  //return object



        return view('doctor.doctorprofile',compact('doctor','dphoto'));

    }

    public function show()
    {
        $user_email=Auth::user()->email;
        $user_name=Auth::user()->name;

        $doctors=Doctor::all();
        foreach ($doctors as $doctor){
            if($doctor->email==$user_email){
                $id= $doctor->id;
                break;
            }

        }


        $doctor=Doctor::findorFail($id);

        $dphoto=$doctor->dPhoto->path;

        return view('doctor.doctor_form',compact('doctor','dphoto'));

    }

    public function edit(Request $request)
    {

        $user_email=Auth::user()->email;
        $user_name=Auth::user()->name;

        $doctors=Doctor::all();
        foreach ($doctors as $doctor){
            if($doctor->email==$user_email){
                $id= $doctor->id;
                break;
            }

        }



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
        $dphoto=$doctor->dPhoto;

        if(Input::hasFile('image')){


            $doctor=Doctor::findorFail($id);
            $dphoto=$doctor->dPhoto;

            //$dphoto=new DPhoto;
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



         return view('doctor.doctor_form',compact('doctor','dphoto'));


    }


    public function viewPatient()
    {
        $user_email=Auth::user()->email;
        $user_name=Auth::user()->name;

        $doctors=Doctor::all();
        foreach ($doctors as $doctor){
            if($doctor->email==$user_email){
                $id= $doctor->id;
                break;
            }

        }

        $Doctor=Doctor::findOrFail($id);
        $dphoto=$doctor->dPhoto->path;
        $patient=$Doctor->patients()->orderBy('id', 'desc')->get();  //returns array of object




        return view('doctor.viewpatient',compact('patient','Doctor','dphoto'));
   }


    public function viewPatientFollowup()
    {
        $user_email=Auth::user()->email;
        $user_name=Auth::user()->name;


        $doctors=Doctor::all();

        foreach ($doctors as $doctor){
            if($doctor->email==$user_email){
                $id= $doctor->id;
                break;
            }

        }
        $Doctor=Doctor::findOrFail($id);
        $dphoto=$doctor->dPhoto->path;
        $today = date("Y-m-d");
        $patient=$Doctor->patients()->where('followUp',$today)->orderBy('id', 'desc')->get();  //returns array of object
        return view('doctor.viewpatientfollowlist',compact('patient','Doctor','dphoto'));







    }

    public function addPatient()
    {
        $doctors=Doctor::all();

        return view('admin.form',compact('doctors'));
    }








}
