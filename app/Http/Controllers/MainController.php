<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Doctor;
use App\DPhoto;
use App\Slider;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\File;

class MainController extends Controller
{
    //
    public function index()
    {
        $doctors=Doctor::all();
        $doctorNo=$doctors->count();
        $picture=DPhoto::all();
        $image=File::all();
        $adminInfo=Admin::all();
        $slider=Slider::all();

     
        return view('index',['adminInfo'=>$adminInfo,'image'=>$image,'doctors'=>$doctors,'doctorNo'=>$doctorNo,'picture'=>$picture,'slider'=>$slider]);
    }

    public function dash()
    {
        return 'hellow';
    }
    
}


