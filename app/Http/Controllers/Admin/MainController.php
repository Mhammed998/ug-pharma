<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use App\User;
use Illuminate\Http\Request;

class MainController extends Controller
{



    public function index(){
        $cates=Category::all();
        $users=User::all();
        $posts=Post::all();
        $products=Product::all();
        return view('backend.main.home' , [
            'cates' => $cates ,
            'users' =>$users ,
            'products' => $products ,
            'posts' => $posts
        ]);

    }






}
