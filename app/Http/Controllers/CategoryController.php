<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function admin_category() {
        return view ('admin.category.admin_category');
    }

    public function admin_create() {
        return view ('admin.category.admin_create');
    }



};
