<?php

namespace App\Http\Controllers;

use App\File;
use App\News;
use Illuminate\Http\Request;

use App\Http\Requests;

class NewsController extends Controller
{
    //
    public function index()
    {

        $news=News::all();
        $image=File::all();

        return view('news.index',['news'=>$news,'image'=>$image]);
        
    }

    public function show($id)
    {
        $news=News::all($id);
        $image=$news->image;

        return view('news',['news'=>$news,'image'=>$image]);
    }
}
