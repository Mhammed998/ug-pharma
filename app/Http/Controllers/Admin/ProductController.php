<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index(){
        $products=Product::select('id' ,'name_'.app()->getLocale() . '  as name' , 'category_id',
            'description_'.app()->getLocale() . '  as description' ,'code' , 'price' , 'brand' , 'status' ,
            'created_at' , 'images'  )->paginate(15);
        return view('backend.products.all' , ['products'=>$products] );
    }



    public function create(){
     $cates=Category::all();
     return view('backend.products.create' , ['cates' => $cates]);
    }


    public function store(Request  $request){
        $data=$request->validate([
            'name_ar' => 'required|string|min:3',
            'name_en' => 'required|string|min:3',
            'code' => 'required|string',
            'description_ar' => 'required|string',
            'description_en' => 'required|string',
            'ingredients_ar' => 'required|string',
            'ingredients_en' => 'required|string' ,
            'price' =>'required',
            'brand' => 'required' ,
            'size' => 'required' ,
            'status' => 'required',
            'images.*' => 'image|mimes:jpg,jpeg,png,gif,svg|max:2048' ,
            'category_id' => 'required'
        ],[

            'name_ar.required' => 'يرجي ادخال اسم المنتج باللغه العربيه ',
            'name_en.required' => 'يرجي ادخال اسم المنتج باللغه الانجليزيه',
            'code.required' => 'يرجي ادخال كود المنتج ',
            'description_ar.required' => 'يرجي ادخال وصف المنتج باللغه العربيه',
            'description_en.required' => 'يرجي ادخال وصف المنتج باللغه الانجليزيه',
            'ingredients_ar.required' => 'يرجي ادخال مكونات المنتج باللغه العربيه',
            'ingredients_en.required' => 'يرجي ادخال مكونات المنتج باللغه الانجليزيه' ,
            'price.required' =>'يرجي ادخال سعر المنتج',
            'brand.required' => 'يرجي ادخال العلامه التجاريه للمنتج' ,
            'size.required' => 'يرجي ادخال حجم المنتج' ,
            'status.required' => 'يرجي حاله سعر المنتج',
            'images.required' => 'يرجي ادخال صور المنتج' ,
            'category_id.required' => 'يرجي تحديد قسم المنتج'

        ]);


        $images=array();
        if($files=$request->file('images')){
            foreach($files as $file){
                $exten=$file->getClientOriginalExtension();
                $img_name= time() . rand(0,100) . '.' . $exten;
                $path='images/products';
                $file->move($path,$img_name);
                $images[]=$img_name;
            }
        }
        $allImages = implode("|",$images);

        Product::create([
            'name_ar' => $data['name_ar'],
            'name_en' =>  $data['name_en'],
            'code' =>  $data['code'],
            'description_ar' =>  $data['description_ar'],
            'description_en' =>  $data['description_en'],
            'ingredients_ar' =>  $data['ingredients_ar'],
            'ingredients_en' =>  $data['ingredients_en'] ,
            'price' => $data['price'],
            'brand' =>  $data['brand'] ,
            'size' =>  $data['size'] ,
            'status' =>  $data['status'],
            'images' =>  $allImages ,
            'category_id' =>  $data['category_id']
        ]);


        return redirect()->route('products.all')->with('success','تم اضافه منتج جديد بنجاح ');



    }




    public function edit($id){
        $product=Product::findOrFail($id);
        $cates=Category::all();
        return view('backend.products.edit' ,
            ['cates' => $cates   , 'product' => $product]);

    }


    public function update(Request $request , $id){
        $data=$request->validate([
            'name_ar' => 'required|string|min:3',
            'name_en' => 'required|string|min:3',
            'code' => 'required|string',
            'description_ar' => 'required|string',
            'description_en' => 'required|string',
            'ingredients_ar' => 'required|string',
            'ingredients_en' => 'required|string' ,
            'price' =>'required',
            'brand' => 'required' ,
            'size' => 'required' ,
            'status' => 'required',
            'images.*' => 'image|mimes:jpg,jpeg,png,gif,svg|max:2048' ,
            'category_id' => 'required'
        ],[

            'name_ar.required' => 'يرجي ادخال اسم المنتج باللغه العربيه ',
            'name_en.required' => 'يرجي ادخال اسم المنتج باللغه الانجليزيه',
            'code.required' => 'يرجي ادخال كود المنتج ',
            'description_ar.required' => 'يرجي ادخال وصف المنتج باللغه العربيه',
            'description_en.required' => 'يرجي ادخال وصف المنتج باللغه الانجليزيه',
            'ingredients_ar.required' => 'يرجي ادخال مكونات المنتج باللغه العربيه',
            'ingredients_en.required' => 'يرجي ادخال مكونات المنتج باللغه الانجليزيه' ,
            'price.required' =>'يرجي ادخال سعر المنتج',
            'brand.required' => 'يرجي ادخال العلامه التجاريه للمنتج' ,
            'size.required' => 'يرجي ادخال حجم المنتج' ,
            'status.required' => 'يرجي حاله سعر المنتج',
            'category_id.required' => 'يرجي تحديد قسم المنتج'

        ]);

        $update=Product::findOrFail($id);


        if($request->hasFile('images')){
            //delete old images and replace it with new ones
            foreach(explode("|",$update->images) as $image) {
                File::delete('images/products/' . $image);
            }

            $images=array();
            if($files=$request->file('images')){

                foreach($files as $file){
                    $exten=$file->getClientOriginalExtension();
                    $img_name= time() . rand(0,100) . '.' . $exten;
                    $path='images/products';
                    $file->move($path,$img_name);
                    $images[]=$img_name;
                }
            }
            $allImages = implode("|",$images);

            $update->update([
                'name_ar' => $data['name_ar'],
                'name_en' =>  $data['name_en'],
                'code' =>  $data['code'],
                'description_ar' =>  $data['description_ar'],
                'description_en' =>  $data['description_en'],
                'ingredients_ar' =>  $data['ingredients_ar'],
                'ingredients_en' =>  $data['ingredients_en'] ,
                'price' => $data['price'],
                'brand' =>  $data['brand'] ,
                'size' =>  $data['size'] ,
                'status' =>  $data['status'],
                'images' =>  $allImages ,
                'category_id' =>  $data['category_id']
            ]);

        }else{
            $update->update([
                'name_ar' => $data['name_ar'],
                'name_en' =>  $data['name_en'],
                'code' =>  $data['code'],
                'description_ar' =>  $data['description_ar'],
                'description_en' =>  $data['description_en'],
                'ingredients_ar' =>  $data['ingredients_ar'],
                'ingredients_en' =>  $data['ingredients_en'] ,
                'price' => $data['price'],
                'brand' =>  $data['brand'] ,
                'size' =>  $data['size'] ,
                'status' =>  $data['status'],
                'category_id' =>  $data['category_id']
            ]);
        }






        return redirect()->route('products.edit' ,$id)->with('success','تم تعديل المنتج  بنجاح ');


    }





    public function delete($id){

        $delProduct=Product::findOrFail($id);
        foreach(explode("|",$delProduct->images) as $image) {
            File::delete('images/products/' . $image);
        }

        $delProduct->delete();
        return redirect()->route('products.all')->with('success','تم حذف المنتج بنجاح ');

    }






}
