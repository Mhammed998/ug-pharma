<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{


    public function index(){
        $cates=Category::paginate(15);
        return view('backend.categories.all' , ['cates'=>$cates] );
    }


    public function create(){
        return view('backend.categories.create');
    }






}
