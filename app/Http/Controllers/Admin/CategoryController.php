<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{


    public function index(){
        $cates=Category::select('id' ,'title_'.app()->getLocale() . '  as title' ,
            'description_'.app()->getLocale() . '  as description' , 'cate_image' , 'status' , 'created_at'  )->paginate(15);
        return view('backend.categories.all' , ['cates'=>$cates] );
    }


    public function create(){
        return view('backend.categories.create');
    }


    public function store(Request $request){
        $category=$request->validate([
            'title_en' => 'required|string|min:3|unique:categories',
            'title_ar' => 'required|string|min:3unique:categories',
            'description_en' => 'required|string|min:3',
            'description_ar' => 'required|string|min:3',
            'cate_image' => 'required|image|mimes:jpg,jpeg,png,gif|max:4048',
            'status' =>'sometimes'
        ],[
            'title_en.required' => 'يرجى ادخال اسم القسم بالعربيه',
            'title_ar.required' => 'يرجى ادخال اسم القسم بالانجليزيه',
            'title_ar.unique' => 'اسم القسم العربي موجود بالفعل',
            'title_en.unique' => 'اسم القسم الانجليزي موجود بالفعل',
            'description_ar.required' => 'يرجى ادخال وصف القسم بالعربيه',
            'description_en.required' => 'يرجى ادخال وصف القسم بالانجليزيه',
            'cate_image.required' => 'يرجى ادخال صوره القسم ',
        ]);

        if($request->hasFile('cate_image')){
            $image=$request->cate_image;
            $imgName=time() . '.' . $image->extension();
            $image->move(public_path('images/categories'), $imgName);

        }

        $category=Category::create([
            'title_en' => $category['title_en'],
            'title_ar' =>  $category['title_ar'],
            'description_en' =>  $category['description_en'],
            'description_ar' => $category['description_ar'],
            'cate_image' => $imgName,
            'status' => $category['status'],

        ]);

        session()->flash('success','تم اضافه قسم جديد بنجاح');

        return redirect()->route('categories.all');


    }


    public function edit($id){
        $category=Category::findOrFail($id);
        return view('backend.categories.edit' , ['category'=>$category]);
    }


    public function update(Request $request , $id){

        $category=Category::findOrFail($id);

        $data=$request->validate([
            'title_en' => 'required|string|min:3|unique:categories,title_en,'. $category->id,
            'title_ar' => 'required|string|min:3|unique:categories,title_ar,'. $category->id,
            'description_en' => 'required|string|min:3',
            'description_ar' => 'required|string|min:3',
            'cate_image' => 'sometimes|image|mimes:jpg,jpeg,png,gif|max:4048',
            'status' => 'sometimes'
        ],[
            'title_en.required' => 'يرجى ادخال اسم القسم بالعربيه',
            'title_ar.required' => 'يرجى ادخال اسم القسم بالانجليزيه',
            'title_ar.unique' => 'اسم القسم العربي موجود بالفعل',
            'title_en.unique' => 'اسم القسم الانجليزي موجود بالفعل',
            'description_ar.required' => 'يرجى ادخال وصف القسم بالعربيه',
            'description_en.required' => 'يرجى ادخال وصف القسم بالانجليزيه',
            'cate_image.image' => 'يرجى ادخال صوره القسم ',
        ]);

        if($request->hasFile('cate_image')){
            File::delete('images/categories/'.$category->cate_image);
            $image=$request->cate_image;
            $imgName=time() . '.' . $image->extension();
            $image->move(public_path('images/categories'), $imgName);
            $category->update([
                'title_en' => $data['title_en'],
                'title_ar' =>  $data['title_ar'],
                'description_en' =>  $data['description_en'],
                'description_ar' => $data['description_ar'],
                'status' => $data['status'],
                'cate_image' => $imgName,
            ]);
        }

        $category->update([
            'title_en' => $data['title_en'],
            'title_ar' =>  $data['title_ar'],
            'description_en' =>  $data['description_en'],
            'description_ar' => $data['description_ar'],
            'status' => $data['status']

        ]);

        session()->flash('success','تم تعديل القسم بنجاح');

        return redirect()->route('categories.edit' , $category->id);

    }

    public function destroy($id){
        $cate=Category::findOrFail($id);
        File::delete('images/categories/'.$cate->cate_image);
        $cate->delete();

        session()->flash('success','تم حذف القسم بنجاح');
        return redirect()->route('categories.all');
    }





}
