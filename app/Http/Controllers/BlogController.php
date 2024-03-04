<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;

class BlogController extends Controller
{
    public function index()
    {
        $data = Blog::with('category')->get();
        return view('blog.index', compact('data'));
    }
    
    public function create(){
        $categories = Category::all();
        return view('blog.create',compact('categories'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $data = new Blog();
        $data->title = $request->title;
        $data->description = $request->description;
        $data->category_id = $request->category_id;
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            $data->photo = $name;
        }
        $data->email = $request->email;
        $data->save();
        return redirect()->route('blog.index');
    }

    public function edit($id){
        $data = Blog::find($id);
     
        $categories = Category::all();
        return view('blog.edit', compact('data', 'categories'));
    }

    public function update(Request $request, $id){
        $data = Blog::find($id);
        $data->title = $request->title;
        $data->description = $request->description;
        $data->category_id = $request->category_id;
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            $data->photo = $name;
        }
        $data->email = $request->email;
        $data->save();
        return redirect()->route('blog.index');
    }

    public function destroy($id){
        $data = Blog::find($id);
        $data->delete();
        return redirect()->route('blog.index');
    }
  
}

