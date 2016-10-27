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
        $news=News::findorFail($id);

        $image=$news->file()->get();


         return view('news.show',['news'=>$news,'image'=>$image]);
    }
}
