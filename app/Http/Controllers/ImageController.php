<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use App\File;

class ImageController extends Controller
{
    //

		    public function fileUpload(Request $request)

			{

        $this->validate($request, [

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);


        $File=new File;
        // $user->title=$request->input('name');
        if(Input::hasFile('image')){
            $file=Input::file('image');
             $news=News::all();
              $length=$news->count();

             $File->extension=$file->getClientOriginalExtension();
            
            
            $File->size=$file->getSize();
            $File->type=$file->getMimeType();
            $File->name=$file->getClientOriginalName();
            $destinationPath = 'uploads';

            $final=$file->move($destinationPath,$file->getClientOriginalName());
            $File->path=$final;
            $File->news_id=$length++;


        }
        $File->save();

        // $this->postImage->add($input);


        return back()->with('success','Image Upload successful');

    }





}