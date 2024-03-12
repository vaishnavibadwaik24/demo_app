<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Comment;
use Auth;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    function index() {
        $categories = Category::all();
        $data = Blog::all();
        $featured_blog = Blog::latest('created_at')->first();
        return view('welcome', compact('categories', 'data','featured_blog'));
    }

    function detail($id)  {
        $categories = Category::all();
        $data = Blog::find($id);
        $comments = Comment::with('user')->where('blog_id', $id)->get();
        return view('detail',compact('categories', 'data','comments'));
    }

    function category_detail(Category $category) {
        $categories = Category::all();
        $data =  $category->blogs;
        return view('category_detail', compact('category', 'categories', 'data'));
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('login');
    }
}
