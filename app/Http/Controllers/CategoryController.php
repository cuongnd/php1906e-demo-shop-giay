<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    function getAddCate(){
        return view('admin.category.add_cate');
    }
    function postAddCate(Request $request){
        return view('admin.category.add_cate');
    }
}
