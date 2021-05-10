@extends('layouts.admin')
@section('admin-title','الاقسام ')


@section('admin-content')


    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            الاقسام /
            <small> لوحه التحكم </small>
        </h1>

    </section>


    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">عرض جميع الاقسام</h3>

                        <div class="box-tools">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        @include('backend.alert')
                        <table class="table direction table-hover">
                            <tr>
                                <th>#</th>
                                <th>اسم القسم</th>
                                <th>وصف القسم</th>
                                <th>حاله القسم</th>
                                <th>صوره القسم</th>
                                <th> عدد المنتجات </th>
                                <th> التحكم</th>
                            </tr>

                            @foreach($cates as $cate)
                            <tr>
                                <td>{{$cate->id}}</td>
                                <td>{{$cate->title}} </td>
                                <td> {{$cate->description}} </td>
                                <td>
                                    @if($cate->status)
                                     <span class="label label-success">مفعل</span>
                                    @else
                                     <span class="label label-danger">مخفي</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{asset('images/categories/' . $cate->cate_image)}}" target="_blank" >
                                        <img style="height:30px;width: 30px;" src="{{asset('images/categories/' . $cate->cate_image)}}" alt="صوره القسم" />

                                    </a>
                                </td>
                                <td> {{$cate->products->count()}} </td>
                                <td>
                                    <a href="{{route('categories.edit' ,$cate->id)}}" class="btn btn-sm  mr-2 btn-primary">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{route('categories.delete',$cate->id)}}" class="btn btn-sm btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>

                            @endforeach
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
                {{$cates->links()}}
            </div>
        </div>
    </section>








@endsection
