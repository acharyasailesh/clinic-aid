<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;

use App\Http\Requests;

class MainController extends Controller
{
    //
    public function index()
    {
        $adminInfo=Admin::all();
     
        return view('home',compact('adminInfo'));
    }
    
    
}


