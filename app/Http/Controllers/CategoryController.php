<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function admin_category() {
        $categories = Category::all();
        return view ('admin.category.admin_category',['categories' => $categories]);
    }

    public function admin_create() {
        return view ('admin.category.admin_create');
    }

    public function admin_store(Request $request){
        //write logic for save to database
        //insert into
        $category = new Category();
        $category->name = $request->name;
        $category->save();

        //redirect to route
        return redirect()->route('admin.category.admin_category');
    }

    public function admin_edit($id) {
        $category = Category::findOrFail($id);
        return view ('admin.category.admin_edit',['category' => $category]);
    }

    public function admin_update(Request $request, $id) {
        dd('admin_update',$id);
    }


};
