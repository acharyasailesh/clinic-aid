<?php

namespace App\Http\Controllers;

use DevDojo\Chatter\Models\Category;
use Illuminate\Http\Request;

use App\Http\Requests;

class CategoryController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('roles');
    }

    public function index()
    {
        return view('admin.category');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
           'category'=>'required'
        ]);

        $category=Category::create([
            'name'=>$request->category,
            'slug'=>strtolower($request->category),
            'color' => '#2ECC71'

        ]);

        return back()->with('success','Category Added');

    }

    public function edit()
    {
        $category=Category::all();

        return view('admin.editCategory',compact('category'));
    }

    public function update(Request $request,$index)
    {
        $category=Category::where('id',$index)->first();
        $category->name=$request->name;
        $category->slug=$request->slug;
        $category->save();
        return back()->with('success','Category Edited');
    }

}
