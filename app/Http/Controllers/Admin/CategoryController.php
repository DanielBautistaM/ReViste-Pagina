<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::latest()->get();
        return view("admin.allcategory", compact("categories"));
    }

    public function addCategory()
    {
        return view("admin.addcategory");
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required|unique:categories,category_name',
        ]);

        Category::create([
            'category_name' => $request->category_name,
            'slug' => strtolower(str_replace(' ', '-', $request->category_name)),
        ]);

        return redirect()->route('allcategory')->with('message', 'La categoria se agregó correctamente!');
    }

    public function EditCategory($id){
        $category_info = Category::findOrFail($id);

        return view("admin.editcategory", compact("category_info"));
    }


    public function UptadeCategory(Request $request){
        $category_id = $request->category_id;

        $request->validate([
            'category_name' => 'required|unique:categories',
        ]);

        Category::findOrFail($category_id)->update([
            'category_name' => $request->category_name,
            'slug' => strtolower(str_replace(' ', '-', $request->category_name))
        ]);

        return redirect()->route('allcategory')->with('message', 'La categoria se actualizo correctamente!');

    }

    public function DeleteCategory($id){
        Category::findOrFail($id)->delete();

        return redirect()->route("allcategory")->with('message', 'La categoria se elimino correctamente!');
    }
}
