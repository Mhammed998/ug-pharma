@extends('layouts.admin')
@section('admin-title',' اضافه قسم ')
@section('admin-styles')

@endsection

@section('admin-content')


    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            اضافه قسم جديد /
            <small> لوحه التحكم </small>
        </h1>

    </section>


    <section class="content">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">ادخل بيانات القسم</h3>
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
                    <form action="{{route('categories.store')}}" method="post" enctype="multipart/form-data" role="form">
                        @csrf
                        <div class="box-body row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title_ar">الاسم  بالعربيه</label>
                                    <input  name="title_ar" type="text" class="form-control" id="title_ar" placeholder="ادخل اسم القسم باللغه العربيه" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title_en"> الاسم  بالانجليزيه</label>
                                    <input  name="title_en" type="text" class="form-control" id="title_en" placeholder="ادخل اسم القسم باللغه بالانجليزيه" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="description_ar"> الوصف بالعربيه</label>
                                    <textarea name="description_ar" rows="4" class="form-control" id="description_ar" placeholder="ادخل وصف القسم باللغه بالعربيه" required></textarea>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="description_en"> الوصف بالانجليزيه</label>
                                    <textarea name="description_en" rows="4" class="form-control" id="description_en" placeholder="ادخل وصف القسم باللغه بالانجليزيه" required></textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="cate_image">صوره القسم </label>
                                    <input class="form-control" name="cate_image" type="file" id="cate_image" required>
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
                            <button type="submit" class="btn btn-primary">حفظ القسم</button>
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
