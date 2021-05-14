@extends('layouts.admin')
@section('admin-title',' تعديل منتج ')
@section('admin-styles')

@endsection

@section('admin-content')


    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            تعديل منتج  /
            <small> لوحه التحكم </small>
        </h1>

    </section>


    <section class="content">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">ادخل بيانات المنتج</h3>
                    </div>
                    <!-- /.box-header -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    @include('backend.alert')

                <!-- form start -->
                    <form action="{{route('products.update',$product->id)}}" method="post" enctype="multipart/form-data" role="form">
                        @csrf
                        <div class="box-body row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name_ar">الاسم  بالعربيه</label>
                                    <input value="{{$product->name_ar}}"  name="name_ar" type="text" class="form-control" id="name_ar" placeholder="ادخل اسم المنتج باللغه العربيه" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name_en"> الاسم  بالانجليزيه</label>
                                    <input value="{{$product->name_en}}"  name="name_en" type="text" class="form-control" id="name_en" placeholder="ادخل اسم المنتج باللغه بالانجليزيه" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="description_ar"> الوصف بالعربيه</label>
                                    <textarea name="description_ar" rows="4" class="form-control" id="description_ar" placeholder="ادخل وصف المنتج باللغه بالعربيه" required>{{$product->description_ar}}</textarea>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="description_en"> الوصف بالانجليزيه</label>
                                    <textarea name="description_en" rows="4" class="form-control" id="description_en" placeholder="ادخل وصف المنتج باللغه بالانجليزيه" required>{{$product->description_en}}</textarea>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ingredients_ar"> المكونات بالعربيه</label>
                                    <textarea name="ingredients_ar" rows="4" class="form-control" id="ingredients_ar" placeholder="ادخل مكونات المنتج باللغه بالعربيه" required>{{$product->ingredients_ar}}</textarea>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ingredients_en"> المكونات بالانجليزيه</label>
                                    <textarea name="ingredients_en" rows="4" class="form-control" id="ingredients_en" placeholder="ادخل  مكونات المنتج باللغه بالانجليزيه" required>{{$product->ingredients_en}}</textarea>
                                </div>
                            </div>

                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="images">صور المنتج </label>
                                    <input class="form-control" name="images[]" type="file" id="images" multiple  >
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="category_id">قسم المنتج </label>
                                    <select class="form-control" name="category_id"  id="category_id" required>
                                        <option value="" disabled>اختر قسم</option>
                                        @foreach($cates as $cate)
                                            <option {{$product->category_id == $cate->id ? "selected" : ''}} value="{{$cate->id}}">{{$cate->title_ar}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="code">  كود المنتج </label>
                                    <input name="code" class="form-control" id="code"
                                      value="{{$product->code}}"     placeholder="ادخل  كود المنتج " required>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="price">  سعر المنتج </label>
                                    <input name="price" class="form-control" id="price"
                                           value="{{$product->price}}"      placeholder="ادخل  سعر المنتج " required>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="size">   حجم المنتج </label>
                                    <input name="size" class="form-control" id="size"
                                           value="{{$product->size}}"       placeholder="ادخل  حجم المنتج  " required>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="brand">  العلامه التجاريه</label>
                                    <input name="brand" class="form-control" id="brand"
                                           value="{{$product->brand}}"        placeholder="ادخل  العلامه التجاريه للمنتج  " required>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>غير مفعل</label>
                                    <input  {{$product->status == 0 ? "checked" : ""}}  name="status" value="0" type="radio" id="status" >
                                    <span> | </span>
                                    <label for="status">مفعل</label>
                                    <input  {{$product->status == 1 ? "checked" : ""}}  name="status" value="1" type="radio" id="status" >

                                </div>
                            </div>

                            <div class="col-md-8">
                                <div class="form-group">
                            @foreach(explode("|",$product->images) as $img)
                                <a target="_blank" href="{{asset('images/products/'. $img )}}">
                                    <img  class="img-thumbnail" height="100" width="100" src="{{asset('images/products/'. $img )}}" alt="صوره المنتج">
                                </a>
                            @endforeach
                                </div>
                            </div>


                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">حفظ التعديلات </button>
                        </div>
                    </form>
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>








@endsection
@section('admin-scripts')

@endsection
