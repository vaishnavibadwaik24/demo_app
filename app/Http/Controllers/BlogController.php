<?php

namespace App\Http\Controllers;

use App\Exports\BlogExport;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Comment;
use Auth;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class BlogController extends Controller
{
    public function index()
    {
        $data = Blog::with('category')->get();
        // $data = Blog::paginate(1);
        return view('blog.index', compact('data'));
    }
    
    public function create(){
        $categories = Category::all();
        return view('blog.create',compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|unique:blogs|max:255',
            'description' => 'required',
            'category_id' => 'required',
            'photo' =>  'required|mimes:jpg,png,jpeg|max:1048',
        ]);

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
        $data->save();
        return redirect()->route('blog.index')->with('message', 'Blog Added Successfully!');
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
        $data->save();
        return redirect()->route('blog.index')->with('message', 'Blog Updated Successfully!');
    }

    public function destroy($id){
        $data = Blog::find($id);
        $data->delete();
        return redirect()->route('blog.index')->with('message', 'Blog Deleted Successfully!');
    }

    function commentStore(Request $request,$id){
        // dd(Auth::user());
        $validated = $request->validate([
            'comment' => 'required',
        ]);
        $data = new Comment();
        $data->comment = $request->comment;
        $data->blog_id = $id;
        $data->user_id = Auth::user()->id;
        $data->save();
        return redirect()->back()->with('message', 'Comment Added Successfully!');

        
    }

    function get_blog_data(){
        return Excel::download(new BlogExport, 'blog.xlsx');
        
    }
  
}

