<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;

use App\Http\Requests;

class PatientController extends Controller
{
    //
    public function edit($id)
    {
        //pulling data from database
        //$details = Patient with id $id
        $patient=Patient::findorFail($id);

        $firstName = $patient->firstName;
        $middleName = $patient->middleName;
        $lastName = $patient->middleName;
        $year = '2016';
        $month = '09';
        $day = '07';
        $gender = $patient->gender;
        $address = $patient->address;
        $about = $patient->about;
        $contact=$patient->contact;
        $details = compact('firstName', 'middleName', 'lastName', 'year', 'month', 'day', 'gender', 'address', 'about','contact');




//        //using dummy data to test
//        $firstName = 'Sagar';
//        $middleName = '';
//        $lastName = 'Subedi';
//        $year = '2016';
//        $month = '09';
//        $day = '07';
//        $gender = 1;
//        $address = 'pokhara';
//        $about = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque id malesuada dui. Cras purus arcu, laoreet at massa quis, dictum pretium nunc. Aliquam erat volutpat. Praesent ut blandit nisl, eu sagittis nisi. Phasellus vitae ex vitae turpis fermentum pellentesque. Etiam fermentum fringilla condimentum. Duis id purus sed massa iaculis ultricies. Ut nec ipsum at lectus interdum pellentesque. Fusce consequat semper ligula eu faucibus. Curabitur tincidunt diam id fringilla sodales. Curabitur ac suscipit leo. Fusce id eros porttitor, fringilla tellus a, bibendum erat. Etiam bibendum metus in odio sagittis venenatis. ';
//        $details = compact('firstName', 'middleName', 'lastName', 'year', 'month', 'day', 'gender', 'address', 'about');
        return view('patient.editprofile')->with('details', $details);
    }

    public function update(Request $request)
    {
        //$Patient = Patient::with(id = $id);
//        $Patient->firstName = $request->firstName;
//        $Patient->middleName = $request->middleName;
//        $Patient->lastName = $request->lastName;
//        $Patient->date = $request->date;
//        $Patient->gender = $request->gender;
//        $Patient->address = $request->address;
//        $Patient->about = $request->about;
//
//        $Patient->save();
        return $request->all();


    }
}
