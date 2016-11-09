<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;

use App\Http\Requests;

class AboutController extends Controller
{
    //

    public function index()
    {

        $about=About::all()->first();  //return single object

        return view('about',compact('about'));

    }

    public function store(Request $request)
    {
        $this->validate($request,[
           'description'=>'required'
        ]);
        $description=$request['description'];
        $about=About::orderBy('id','desc')->first();
//        $about= About::all()->first();
        $about->description=$description;
        $about->email=$request->email;
        $about->phoneNo=$request->phoneNo;
        $about->save();



        return back()->with('success','Post Uploaded Sucessfully');

    }

    public function show()
    {
        $about=About::all()->first();  //return single object



        return view('admin.about',compact('about'));
    }


}
