<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\DPhoto;
use App\Patient;
use DevDojo\Chatter\Models\Category;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class SearchController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('roles');
        }
    public function searchPatient()
    {

        $doctors=Doctor::all();
        $keyword = Input::get('keyword', '');
        $patient = Patient::SearchByKeyword($keyword)->get();
        return back()->with('patient',$patient)->with('doctors',$doctors);
//        return view('admin.editpatient',compact('patient','doctors'));


    }

    public function searchDoctor()
    {
        $patient=Patient::all();
        $picture=DPhoto::all();
        $pictureNo=$picture->count();
        $keyword = Input::get('keyword', '');
        $doctors = Doctor::SearchByKeyword($keyword)->get();
        $doctorNo=$doctors->count();


        return back()->with('patient',$patient)->with('doctors',$doctors);
//        return view('admin.editDoctor',compact('patient','doctors','doctorNo','picture','pictureNo'));


    }


    public function searchCategory()
    {



        $keyword = Input::get('keyword', '');
        $category = Category::SearchByKeyword($keyword)->get();
        return back()->with('category',$category);



    }






}
