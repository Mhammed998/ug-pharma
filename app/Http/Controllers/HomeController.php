<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use App\Models\Wishlist;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

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
        $cates=Category::select('id' ,'title_'.app()->getLocale() . '  as title' ,
            'description_'.app()->getLocale() . '  as description' , 'cate_image' , 'status' , 'created_at'  )->get();
        $posts=Post::select('id' ,'title_'.app()->getLocale() . '  as title' ,
            'content_'.app()->getLocale() . '  as content' , 'post_image' , 'status' , 'created_at' , 'category'  )->get();
        return view('frontend.blog' , ['cates' => $cates , 'posts' => $posts]);
    }

    public function blogDetails($id){
        $spost=Post::where('id',$id)->select('id' ,'title_'.app()->getLocale() . '  as title' ,
            'content_'.app()->getLocale() . '  as content' , 'post_image' , 'status' , 'created_at' , 'category'  )->get();
        return view('frontend.blog-details',['spost'=>$spost]);
    }

    public function products(){
        $cates=Category::select('id' ,'title_'.app()->getLocale() . '  as title' ,
            'description_'.app()->getLocale() . '  as description' , 'cate_image' , 'status' , 'created_at'  )->get();
        $products=Product::select('id' ,'name_'.app()->getLocale() . '  as name' , 'category_id',
            'description_'.app()->getLocale() . '  as description' ,'code' , 'price' , 'brand' , 'status' ,
            'created_at' , 'images'  )->paginate(9);
        return view('frontend.products' , ['products' => $products , 'cates' => $cates]);
    }

    public function productDetails($id){
        $sproduct=Product::where('id',$id)->select('id' ,'name_'.app()->getLocale() . '  as name' , 'category_id',
            'description_'.app()->getLocale() . '  as description' ,'code' , 'price' , 'brand' , 'status' , 'size',
            'created_at' , 'images' , 'code' , 'ingredients_'.app()->getLocale() . '  as ingredients'  )->get();
        return view('frontend.product-details',['sproduct'=>$sproduct]);
    }

    public function contact(){
        return view('frontend.contact');
    }


    public function cart(){
        return view('frontend.cart');
    }


    public function profile(){
        $user=Auth::user();
        return view('frontend.profile',['user'=>$user]);
    }

    public function addToWishList($product_id){
        $product=Product::findOrFail($product_id);
        $user=Auth::user();
        $ids=array();
        foreach ($user->products as $p){
            array_push($ids,$p->id);
        }
        if(in_array($product->id,$ids)){
          return redirect()->route('profile')->with('success' , 'المنتج موجود بالفعل');
        }else{
            $user->products()->attach($product->id);
            return redirect()->route('profile')->with('success' , 'تم اضافه المنتج بنجاح لقائمتك  ');

        }
    }


    public function removeFromWishList($product_id){
        $product=Product::findOrFail($product_id);
        $user=Auth::user();
        $ids=array();
        foreach ($user->products as $p){
            array_push($ids,$p->id);
        }
        if(in_array($product->id,$ids)){
            $user->products()->detach($product->id);
            return redirect()->route('profile')->with('success' , 'تم حذف المنتج بنجاح من القائمه  ');
        }else{
            return redirect()->route('profile')->with('success' , 'المنتج غير موجود بالقائمه');
        }
    }

    public function categoryDetails($category_id){
        $category=Category::findOrFail($category_id);
        $posts=Post::where('title_ar', $category->category)->select('id' ,'title_'.app()->getLocale() . '  as title' ,
            'content_'.app()->getLocale() . '  as content' , 'post_image' , 'status' , 'created_at' , 'category'  )->get();
        return view('frontend.category' , ['category' => $category , 'posts' =>$posts]);
    }













}
