<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

use App\Http\Requests;

class NewsController extends Controller
{
    //
    public function index()
    {
        
        $news=News::paginate(15);
        
        return view('news',compact('news'));
        
    }
}
