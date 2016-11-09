<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\Patient;
use App\User;
use PDF;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class PatientController extends Controller
{

    public function __construct()
    {
        $this->middleware('roles');
    }


    //
//    public function edit($id)
//    {
//        //pulling data from database
//        //$details = Patient with id $id
//        $patient=Patient::findorFail($id);
//
//        $firstName = $patient->firstName;
//        $middleName = $patient->middleName;
//        $lastName = $patient->middleName;
//        $year = '2016';
//        $month = '09';
//        $day = '07';
//        $gender = $patient->gender;
//        $address = $patient->address;
//        $about = $patient->about;
//        $contact=$patient->contact;
//        $details = compact('firstName', 'middleName', 'lastName', 'year', 'month', 'day', 'gender', 'address', 'about','contact');
//
//
//
//
////        //using dummy data to test
////        $firstName = 'Sagar';
////        $middleName = '';
////        $lastName = 'Subedi';
////        $year = '2016';
////        $month = '09';
////        $day = '07';
////        $gender = 1;
////        $address = 'pokhara';
////        $about = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque id malesuada dui. Cras purus arcu, laoreet at massa quis, dictum pretium nunc. Aliquam erat volutpat. Praesent ut blandit nisl, eu sagittis nisi. Phasellus vitae ex vitae turpis fermentum pellentesque. Etiam fermentum fringilla condimentum. Duis id purus sed massa iaculis ultricies. Ut nec ipsum at lectus interdum pellentesque. Fusce consequat semper ligula eu faucibus. Curabitur tincidunt diam id fringilla sodales. Curabitur ac suscipit leo. Fusce id eros porttitor, fringilla tellus a, bibendum erat. Etiam bibendum metus in odio sagittis venenatis. ';
////        $details = compact('firstName', 'middleName', 'lastName', 'year', 'month', 'day', 'gender', 'address', 'about');
//        return view('patient.editprofile')->with('details', $details);
//    }

    public function edit(Request $request)
    {
        $user_email=Auth::user()->email;


        $patients=Patient::all();
        foreach ($patients as $patient){
            if($patient->email==$user_email){
                $id= $patient->id;
                break;
            }

        }


//        $Patient=Patient::findorFail($id);
        $patient=Patient::findorFail($id);

        $patient->firstName=$request->firstName;
        $patient->middleName=$request->middleName;
        $patient->lastName=$request->lastName;
        $patient->about=$request->about;
        $patient->DOB=$request->DOB;
        $patient->bloodGroup=$request->bloodGroup;
        $patient->address=$request->address;
        $patient->gender=$request->gender;
        $patient->contact=$request->contact;
        $patient->save();
        $pphoto=$patient->pPhoto;

        if(Input::hasFile('image')){
            $patient=Patient::findorFail($id);
            $pphoto=$patient->pPhoto;

            //$pphoto=new DPhoto;
            $pphotoImage=Input::file('image');

            //$length=$news->count();

            $pphoto->extension=$pphotoImage->getClientOriginalExtension();

            $pphoto->size=$pphotoImage->getSize();
            $pphoto->type=$pphotoImage->getMimeType();
            $pphoto->name=$pphotoImage->getClientOriginalName();
            $destinationPath = 'uploads/Patient';

            $final=$pphotoImage->move($destinationPath,$pphotoImage->getClientOriginalName());
            $pphoto->path=$final;
            $pphoto->patient_id=$patient->id;
            $pphoto->save();

        }


        return view('patient.editprofile',compact('patient','pphoto'));



    }







//
//    public function update(Request $request)
//    {
//        //$Patient = Patient::with(id = $id);
////        $Patient->firstName = $request->firstName;
////        $Patient->middleName = $request->middleName;
////        $Patient->lastName = $request->lastName;
////        $Patient->date = $request->date;
////        $Patient->gender = $request->gender;
////        $Patient->address = $request->address;
////        $Patient->about = $request->about;
////
////        $Patient->save();
//        return $request->all();
//
//
//    }



    public function updatePatient(Request $request,$patientId)
    {
        $password=$request['password'];
        $patient=Patient::where('id',$patientId)->first();
        $email=$patient->email;
        $patient->firstName=$request['firstName'];
        $patient->middlename=$request['middleName'];
        $patient->lastName=$request['lastName'];
        $patient->gender=$request['gender'];
        $patient->DOB=$request['DOB'];
        $patient->address=$request['address'];
        $patient->contact=$request['contact'];
        $patient->bloodGroup=$request['bloodGroup'];

        $patient->save();
        if($password!=null) {

            $user = User::where('email', $email)->first();

            $user->email = $email;
            $user->password = bcrypt($request['password']);
            $user->save();
        }
      return back()->with('success','Patient Details was Updated Successfully');
    }

    public function updateDoctor(Request $request,$doctorId)
    {
       $password=$request['password'];
        $doctor=Doctor::where('id',$doctorId)->first();
        $email=$doctor->email;
        $doctor->firstName=$request['firstName'];
        $doctor->middlename=$request['middleName'];
        $doctor->lastName=$request['lastName'];
        $doctor->about=$request['about'];
        $doctor->education=$request['education'];
        $doctor->facebook=$request['facebook'];
        $doctor->twitter=$request['twitter'];
        $doctor->workDays=$request['workDays'];
        $doctor->skype=$request['skype'];
        $doctor->contact=$request['contact'];
        $doctor->speciality=$request['speciality'];

        $doctor->save();
        if($password!=null) {
            $user=User::where('email',$email)->first();

            $user->email=$email;
            $user->password=bcrypt($request['password']);
            $user->save();
        }

        return back()->with('success','Doctor Details was Updated Successfully');


    }











    public function search()
    {


        $doctors=Doctor::all();



        $keyword = Input::get('keyword', '');

        $patient = Patient::SearchByKeyword($keyword)->get();


        return view('admin.editpatient',compact('patient','doctors'));

    }

//    public function history()
//    {
//
//        $user_email=Auth::user();
//        return $user_email;
//        $user_name=Auth::user()->name;
//
//        $doctors=Doctor::all();
//        foreach ($doctors as $doctor){
//            if($doctor->email==$user_email){
//                $id= $doctor->id;
//                break;
//            }
//
//        }
//
//        $Doctor=Doctor::findOrFail(1);
//        $dphoto=$doctor->dPhoto->path;
//        $patient=$Doctor->patients()->orderBy('id', 'asc')->get();  //returns array of object
//
//        return view('patient.medicalhistory',compact('patient'));
//
//
//
//    }

    public function history()
    {

        $email=Auth::user()->email;

        $patient=Patient::where('email',$email)->first();



        $pdf=PDF::loadView('patient.report',['patient'=>$patient]);
        return $pdf->stream('test.pdf');


//        return view('patient.medicalhistory',compact('patient'));



    }










    public function report($patientId)
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
        $patient=$Doctor->patients()->where('id',$patientId)->first();  //returns array of object



        $pdf=PDF::loadView('patient.report',['patient'=>$patient]);
        return $pdf->stream('test.pdf');
        //return view('patient.report',compact('test'));





        //return view('patient.medicalhistory',compact('patient','doctor','dphoto'));
    }


    public function index()
    {
        // $role_id= Auth::user()->roles->first()->pivot->role_id;
        $user_email=Auth::user()->email;
        $user_name=Auth::user()->name;

        $patients=Patient::all();
        foreach ($patients as $patient){
            if(($patient->email==$user_email)){
                $id= $patient->id;
                break;
            }

        }

        $patient=Patient::findorFail($id);

        $pphoto=$patient->pPhoto->path;  //return object
        return view('patient.patientprofile',compact('patient','pphoto'));

    }

    public function show()
    {
        $user_email=Auth::user()->email;

        $patients=Patient::all();
        foreach ($patients as $patient){
            if($patient->email==$user_email){
                $id= $patient->id;
                break;
            }

        }


        $patient=Patient::findorFail($id);

        $pphoto=$patient->pPhoto->path;

        return view('patient.editprofile',compact('patient','pphoto'));

    }




}
