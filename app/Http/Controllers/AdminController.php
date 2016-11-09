<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\DPhoto;
use App\Patient;
use App\PPhoto;
use App\Role;
use App\User;
use App\VisitCount;
use DevDojo\Chatter\Models\Category;
use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('roles');



    }
    public function index(Request $request)
    {


        return view('admin.post');

    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'email'=>'required|unique:users',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'password'=>'required|min:5',

        ]);
        $role=Role::where('name','user')->first();

        $destinationPath = 'uploads/Patient';
        $dphotoImage=$request['image'];

        $final=$dphotoImage->move($destinationPath,$dphotoImage->getClientOriginalName());



        $month = date("m",strtotime($request->visitDate));

        $year=date("y",strtotime($request->visitDate));
        $year='20'.$year;
        $day=date("d",strtotime($request->visitDate));
        $final=$year."-".$month."-".$day;



        $patient=Patient::create([
            'firstName'=>$request['firstName'],
            'middleName'=>$request['middleName'],
            'lastName'=>$request['lastName'],
             'DOB'=>$final,
            'contact'=>$request['contact'],
            'address'=>$request['address'],
            'about'=>$request['about'],
            'doctor_id'=> $request['refer'],
            'email'=> $request['email'],
            'gender'=>$request['gender'],
            'password'=>bcrypt($request['password'])

        ]);

        $patientPhoto=PPhoto::create([
            'patient_id'=>$patient->id,
            'path'=>$final
        ]);

        $user=User::create([
            'name'=>$request['firstName'],
            'email'=>$request['email'],
            'password'=>bcrypt($request['password'])

        ]);

        $user->roles()->attach($role);

        return back()->with('success','Patient Added successfully');


    }

    public function addDoctor()
    {
        return view('admin.addDoctor');
    }

    public function storeDoctor(Request $request)
    {
        $this->validate($request,[
           'email'=>'required|unique:users|email',
            'password'=>'required|min:5',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $role=Role::where('name','doctor')->first();

        $destinationPath = 'uploads/Doctor';
        $dphotoImage=$request['image'];

        $final=$dphotoImage->move($destinationPath,$dphotoImage->getClientOriginalName());
        $doctor=Doctor::create([
            'firstName'=>$request->firstName,
            'middleName'=>$request->middleName,
            'lastName'=>$request->lastName,
            'about'=>$request->about,
            'education'=>$request->education,
            'workDays'=>$request->workDays,
            'facebook'=>$request->facebook,
            'twitter'=>$request->twitter,
            'speciality'=>$request->speciality,
            'contact'=>$request->contact,
            'email'=>$request->email,
            'password'=>bcrypt($request->password)

        ]);

        $doctorPhoto=DPhoto::create([
            'doctor_id'=>$doctor->id,
            'path'=>$final
        ]);

        $user=User::create([
            'name'=>'Dr '.$request['firstName'],
            'email'=>$request['email'],
            'password'=>bcrypt($request['password'])

        ]);

        $user->roles()->attach($role);

        return back()->with('success','Doctor Added Successfully');


    }

    public function editPatient()
    {
        $patient=Patient::all();
        $doctors=Doctor::all();

        return view('admin.editpatient',compact('patient','doctors'));

    }

    public function updatePatient(Request $request,$id)
    {
        $patient=Patient::findorFail($id);
        $patient->doctor_id=$request['refer'];
        $patient->save();
        return back()->with('success','Patient  Modification with doctor was successfully done');

    }

    public function editDoctor()
    {  $patient=Patient::all();
        $doctors=Doctor::all();

        $doctorNo=$doctors->count();
        $picture=DPhoto::all();
        $pictureNo=$picture->count();


        return view('admin.editDoctor',compact('patient','doctors','doctorNo','picture','pictureNo'));

    }

    public function deletePatient($patientId)
    {


        $patient=Patient::where('id',$patientId)->first();

        $patientPhoto=PPhoto::where('patient_id',$patientId)->first();

        $user=User::where('email',$patient->email)->first();
        $patientPhoto->delete();


        $patient->delete();
        $user->delete();
        return back()->with('deleted','Patient Deleted Successfully');


    }

    public function deleteDoctor($doctorId)
    {
        $doctor=Doctor::where('id',$doctorId)->first();

        $doctorPhoto=DPhoto::where('doctor_id',$doctorId)->first();

        $user=User::where('email',$doctor->email)->first();

        $doctorPhoto->delete();

        $doctor->delete();
        $user->delete();
        return back()->with('deleted','Doctor Deleted Successfully');


    }

    public function deleteCategory($categoryId)
    {
        $Category=Category::where('id',$categoryId)->first();
        $Category->delete();
        return back()->with('deleted','Category Deleted Successfully');

    }






    public function slider()
    {
        return view('admin.slider');
    }

    public function graph()
    {
        $date= date('mdy');
        $year=date("y",strtotime($date));
        $year='20'.$year;


        return view('admin.graph',compact('year'));
    }

    public function data($year)
    {

        $data1=VisitCount::where('year_id',$year)->first();
        $data2=VisitCount::where('year_id',$year-1)->first();
        if(!$data2) {
            for ($i=0;$i<=11;$i++){
                $data4[$i]=0;
            }
        }


//        $data1=VisitCount::all()->first();
        else {

            $data4 = [];
            $data4[0] = $data2->January;
            $data4[1] = $data2->February;
            $data4[2] = $data2->March;
            $data4[3] = $data2->April;
            $data4[4] = $data2->May;
            $data4[5] = $data2->June;
            $data4[6] = $data2->July;
            $data4[7] = $data2->August;
            $data4[8] = $data2->September;
            $data4[9] = $data2->October;
            $data4[10] = $data2->November;
            $data4[11] = $data2->December;
        }

        $data3=[];
        $data3[0]=$data1->January;
        $data3[1]=$data1->February;
        $data3[2]=$data1->March;
        $data3[3]=$data1->April;
        $data3[4]=$data1->May;
        $data3[5]=$data1->June;
        $data3[6]=$data1->July;
        $data3[7]=$data1->August;
        $data3[8]=$data1->September;
        $data3[9]=$data1->October;
        $data3[10]=$data1->November;
        $data3[11]=$data1->December;



        $dataArray=[];
        $dataArray[0]=$data3;
        $dataArray[1]=$data4;
        $data = json_encode($dataArray);
        return $data;



    }










}

