<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function admin_category() {
        return view ('admin.category.admin_category');
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


    }

    public function admin_edit($id) {
        dd('admin_edit',$id);
        return view ('admin.category.admin_edit');
    }


};
