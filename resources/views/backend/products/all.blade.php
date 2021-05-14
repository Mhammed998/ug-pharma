@extends('layouts.admin')
@section('admin-title','المنتجات ')


@section('admin-content')


    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            المنتجات /
            <small> لوحه التحكم </small>
        </h1>

    </section>


    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">عرض جميع المنتجات</h3>

                        <div class="box-tools">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        @include('backend.alert')
                        <table class="table direction table-hover">
                            <tr>
                                <th>#</th>
                                <th>اسم المنتج</th>
                                <th>كود المنتج</th>
                                <th> سعر المنتج</th>
                                <th>حاله المنتج</th>
                                <th>  القسم </th>
                                <th>  العلامه التجاريه </th>
                                <th>   صوره المنتج </th>
                                <th> التحكم</th>
                            </tr>

                            @foreach($products as $product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->name}} </td>
                                <td> {{$product->code}} </td>
                                <td> {{$product->price}} </td>
                                <td>
                                    @if($product->status)
                                     <span class="label label-success">مفعل</span>
                                    @else
                                     <span class="label label-danger">مخفي</span>
                                    @endif
                                </td>
                                <td> {{$product->category->title_ar}} </td>
                                <td>
                                    {{$product->brand}}
                                </td>

                                <td>
                                    @foreach(explode("|",$product->images) as $img)
                                    <a target="_blank" href="{{asset('images/products/'. $img )}}">
                                     <img  class="img-thumbnail" height="40" width="40" src="{{asset('images/products/'. $img )}}" alt="صوره المنتج">
                                    </a>
                                    @endforeach
                                </td>

                                <td>

                                    <a href="{{route('products.edit' , $product->id)}}" class="btn btn-sm  mr-2 btn-primary">
                                        <i class="fa fa-edit"></i>
                                    </a>

                                    <a href="{{route('products.delete' , $product->id)}}" class="btn btn-sm btn-danger">
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
                {{$products->links()}}
            </div>
        </div>
    </section>








@endsection
