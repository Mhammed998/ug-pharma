<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    public function index(){
        $posts=Post::select('id' ,'title_'.app()->getLocale() . '  as title' ,
            'content_'.app()->getLocale() . '  as content' , 'post_image' , 'status' , 'created_at'
            , 'category_id' )->paginate(15);
        return view('backend.posts.all' , ['posts' => $posts]);
    }

    public function create(){
        $cates=Category::all();
       return view('backend.posts.create' , ['cates' => $cates]);
    }

    public function store(Request $request){
        $post=$request->validate([
            'title_en' => 'required|string|min:3',
            'title_ar' => 'required|string|min:3',
            'content_ar' => 'required|string|min:3',
            'content_en' => 'required|string|min:3',
            'post_image' => 'required|image|mimes:jpg,jpeg,png,gif|max:4048',
            'status' =>'sometimes',
            'category_id' => 'required'
        ],[
            'title_en.required' => 'يرجى ادخال عنوان المنشور بالعربيه',
            'title_ar.required' => 'يرجى ادخال عنوان المنشور بالانجليزيه',
            'content_ar.required' => 'يرجى ادخال محتوى المنشور بالعربيه',
            'content_en.required' => 'يرجى ادخال محتوى المنشور بالانجليزيه',
            'post_image.required' => 'يرجى ادخال صوره المنشور ',
            'category_id.required' => 'يرجي ادخل قسم للمنشور'
        ]);

        if($request->hasFile('post_image')){
            $image=$request->post_image;
            $imgName=time() . '.' . $image->extension();
            $image->move(public_path('images/posts'), $imgName);
        }

          Post::create([
            'title_en' => $post['title_en'],
            'title_ar' =>  $post['title_ar'],
            'content_en' =>  $post['content_en'],
            'content_ar' => $post['content_ar'],
            'post_image' => $imgName,
            'status' => $post['status'],
            'category_id' => $post['category_id']
        ]);

        session()->flash('success','تم اضافه منشور جديد بنجاح');

        return redirect()->route('posts.all');

    }


    public function edit($id){
        $post=Post::findOrFail($id);
        $cates=Category::all();

        return view('backend.posts.edit',['post' => $post , 'cates' => $cates]);
    }


    public function update(Request $request , $id ){

        $post = Post::findOrFail($id);
        $data=$request->validate([
            'title_en' => 'required|string|min:3',
            'title_ar' => 'required|string|min:3',
            'content_ar' => 'required|string|min:3',
            'content_en' => 'required|string|min:3',
            'post_image' => 'sometimes|image|mimes:jpg,jpeg,png,gif|max:4048',
            'status' =>'sometimes',
            'category_id' => 'required'
        ],[
            'title_en.required' => 'يرجى ادخال عنوان المنشور بالعربيه',
            'title_ar.required' => 'يرجى ادخال عنوان المنشور بالانجليزيه',
            'content_ar.required' => 'يرجى ادخال محتوى المنشور بالعربيه',
            'content_en.required' => 'يرجى ادخال محتوى المنشور بالانجليزيه',
            'post_image.required' => 'يرجى ادخال صوره المنشور ',
            'category_id.required' => 'يرجي ادخل قسم للمنشور'
        ]);


        if($request->hasFile('post_image')){
            File::delete('images/posts/'.$post->post_image);
            $image=$request->post_image;
            $imgName=time() . '.' . $image->extension();
            $image->move(public_path('images/posts'), $imgName);
            $post->update([
                'title_en' => $data['title_en'],
                'title_ar' =>  $data['title_ar'],
                'content_en' =>  $data['content_en'],
                'content_ar' => $data['content_ar'],
                'post_image' => $imgName,
                'status' => $data['status'],
                'category_id' => $data['category_id']
            ]);
        }

        $post->update([
            'title_en' => $data['title_en'],
            'title_ar' =>  $data['title_ar'],
            'content_en' =>  $data['content_en'],
            'content_ar' => $data['content_ar'],
            'status' => $data['status'],
            'category_id' => $data['category_id']
        ]);

        session()->flash('success','تم تعديل المنشور بنجاح');

        return redirect()->route('posts.edit' , $post->id);

    }

    public function destroy($id){
        $post=Post::findOrFail($id);
        File::delete('images/posts/'.$post->post_image);
        $post->delete();
        session()->flash('success','تم حذف المنشور  بنجاح');
        return redirect()->route('posts.all');
    }




}
