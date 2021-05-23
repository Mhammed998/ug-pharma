<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{






    public function index()
    {
        $cates=Category::select('id' ,'title_'.app()->getLocale() . '  as title' ,
            'description_'.app()->getLocale() . '  as description' , 'cate_image' , 'status' , 'created_at'  )->get();
        $products=Product::select('id' ,'name_'.app()->getLocale() . '  as name' , 'category_id',
            'description_'.app()->getLocale() . '  as description' ,'code' , 'price' , 'brand' , 'status' ,
            'created_at' , 'images'  )->paginate(12);
        $posts=Post::select('id' ,'title_'.app()->getLocale() . '  as title' ,
            'content_'.app()->getLocale() . '  as content' , 'post_image' , 'status' , 'created_at'
            , 'category' )->paginate(15);
        return view('home',[
            'cates' => $cates ,
            'products' => $products,
            'posts' =>$posts
        ]);

    }


    public function about(){
        return view('frontend.about');
    }

    public function blog(){
        return view('frontend.blog');
    }

    public function products(){
        return view('frontend.products');
    }

    public function contact(){
        return view('frontend.contact');
    }


    public function cart(){
        return view('frontend.cart');
    }


    public function profile(){
        return view('frontend.profile');
    }














}
