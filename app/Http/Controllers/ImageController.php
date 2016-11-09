<?php

namespace App\Http\Controllers;

use App\News;
use App\Slider;
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
                        'title'=>'required',
                        'description'=>'required',
                        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

                    ]);


                            $File=new File;
                                $title=$request->input('title');
                                $description=$request->input('description');
                        // $user->title=$request->input('name');
                        if(Input::hasFile('image')){
                            $file=Input::file('image');
                            $news=News::create(['title'=>$title,'description'=>$description]);

                              //$length=$news->count();

                             $File->extension=$file->getClientOriginalExtension();


                            $File->size=$file->getSize();
                            $File->type=$file->getMimeType();
                            $File->name=$file->getClientOriginalName();
                            $destinationPath = 'uploads';

                            $final=$file->move($destinationPath,$file->getClientOriginalName());
                            $File->path=$final;
                            $File->news_id=$news->id;


                        }
                        $File->save();

                        // $this->postImage->add($input);


                        return back()->with('success','Post Uploaded Sucessfully');

        }


                public function sliderUpload(Request $request)
                {
                    $File=new Slider();
                    $this->validate($request, [
                        'title'=>'required',
                        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

                    ]);
                    $title=$request->input('title');

                    if(Input::hasFile('image')){
                        $file=Input::file('image');


                        //$length=$news->count();

                        $File->extension=$file->getClientOriginalExtension();
                        $File->title=$title;
                        $File->size=$file->getSize();
                        $File->type=$file->getMimeType();
                        $File->name=$file->getClientOriginalName();
                        $destinationPath = 'uploads/slider';


                        $final=$file->move($destinationPath,$file->getClientOriginalName());
                        $File->path=$final;



                    }
                    $File->save();

                    return back()->with('success','Slider Uploaded Sucessfully');


                }









}