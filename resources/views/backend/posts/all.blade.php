@extends('layouts.admin')
@section('admin-title','المنشورات ')


@section('admin-content')


    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            المنشورات /
            <small> لوحه التحكم </small>
        </h1>

    </section>


    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">عرض جميع المنشورات</h3>

                        <div class="box-tools">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        @include('backend.alert')
                        <table class="table direction table-hover">
                            <tr>
                                <th>#</th>
                                <th> عنوان المنشور</th>
                                <th> صوره المنشور</th>
                                <th>  القسم </th>
                                <th>حاله المنشور</th>
                                <th> التحكم</th>
                            </tr>

                            @foreach($posts as $post)
                            <tr>
                                <td>{{$post->id}}</td>
                                <td>{{$post->title}} </td>
                                <td>
                                    <a href="{{asset('images/posts/' . $post->post_image)}}" target="_blank" >
                                        <img style="height:30px;width: 30px;" src="{{asset('images/posts/' . $post->post_image)}}" alt="صوره المنشور" />
                                    </a>
                                </td>

                                <td> {{$post->category->title_ar}} </td>

                                <td>
                                    @if($post->status)
                                     <span class="label label-success">مفعل</span>
                                    @else
                                     <span class="label label-danger">مخفي</span>
                                    @endif
                                </td>



                                <td>

                                    <a href="{{route('posts.edit' , $post->id)}}" class="btn btn-sm  mr-2 btn-primary">
                                        <i class="fa fa-edit"></i>
                                    </a>

                                    <a href="{{route('posts.delete' , $post->id)}}" class="btn btn-sm btn-danger">
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
                {{$posts->links()}}
            </div>
        </div>
    </section>








@endsection
