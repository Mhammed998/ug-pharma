@extends('layouts.admin')
@section('admin-title',' اضافه منشور ')
@section('admin-styles')

@endsection

@section('admin-content')


    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            اضافه منشور جديد /
            <small> لوحه التحكم </small>
        </h1>

    </section>


    <section class="content">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">ادخل بيانات المنشور</h3>
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

                <!-- form start -->
                    <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data" role="form">
                        @csrf
                        <div class="box-body row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title_ar">العنوان  بالعربيه</label>
                                    <input  name="title_ar" type="text" class="form-control" id="title_ar"
                                            placeholder="ادخل عنوان المنشور باللغه العربيه" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title_en"> العنوان  بالانجليزيه</label>
                                    <input  name="title_en" type="text" class="form-control" id="title_en"
                                            placeholder="ادخل  عنوان المنشور باللغه بالانجليزيه" required>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="content_ar"> المحتوى بالعربيه</label>
                                    <textarea name="content_ar" rows="8" class="form-control" id="content_ar"
                                              placeholder="ادخل محتوى المنشور باللغه بالعربيه" required></textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="content_en"> الوصف بالانجليزيه</label>
                                    <textarea name="content_en" rows="8" class="form-control" id="content_en"
                                              placeholder="ادخل محتوى المنشور باللغه بالانجليزيه" required></textarea>
                                </div>
                            </div>

                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="post_image">صوره المنشور </label>
                                    <input class="form-control" name="post_image" type="file" id="post_image"
                                           required>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="category_id">قسم المنشور </label>
                                    <select class="form-control" name="category_id"  id="category_id" required>
                                        <option value="0"> عام </option>
                                        @foreach($cates as $cate)
                                            <option value="{{$cate->id}}">{{$cate->title_ar}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>غير مفعل</label>
                                    <input   name="status" value="0" type="radio" id="status" >
                                    <span> | </span>
                                    <label for="status">مفعل</label>
                                    <input checked  name="status" value="1" type="radio" id="status" >

                                </div>
                            </div>



                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">حفظ المنشور</button>
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
