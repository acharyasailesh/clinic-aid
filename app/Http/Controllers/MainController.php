<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\File;

class MainController extends Controller
{
    //
    public function index()
    {
         $image=File::all();

        $adminInfo=Admin::all();
     
        return view('index',['adminInfo'=>$adminInfo,'image'=>$image]);
    }
    
    
}


