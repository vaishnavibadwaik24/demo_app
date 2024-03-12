<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CategoryExport;
class CategoryController extends Controller
{
    public function store(Request $request){

        $validated = $request->validate([
            'name' => 'required|string|unique:categories|max:255',
        ]);
        
        $data = new Category();
        $data->name = $request->name;
        $data->save();
        return redirect()->route('category.index')->with('message', 'Category Added Successfully!');
    }

    public function create()
    {
        return view('category.create');
    }

    public function index()
    {
        $categories = Category::all();
        // $categories = Category::paginate(2);
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
        return redirect()->route('category.index')->with('message', 'Category Updated Successfully!');
    }

    public function destroy($id){
        $data = Category::find($id);
        $data->delete();
        return redirect()->route('category.index')->with('message', 'Category Deleted Successfully!');
    }

    function get_category_data(){
        return Excel::download(new CategoryExport, 'category.xlsx');
        
    }

}

