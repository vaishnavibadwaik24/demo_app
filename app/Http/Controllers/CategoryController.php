<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    public function store(Request $request){

        $data = new Category();
        $data->name = $request->name;
        $data->save();
    }

    public function create()
    {
        return view('category.create');
    }

    public function index()
    {
        $categories = Category::all();
        return view('category.index', compact('categories'));
    }

    public function edit($id)  {
        $data = Category::find($id);
        return view('category.edit',compact('data'));
    }

    public function update(Request $request,$id){
        $data = Category::find($id);
        $data->name = $request->name;
        $data->save();
    }

    public function destroy($id){
        $data = Category::find($id);
        $data->delete();
    }

}

