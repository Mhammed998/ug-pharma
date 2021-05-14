@extends('layouts.admin')
@section('admin-title','المنتجات ')


@section('admin-content')


    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            الاعضاء /
            <small> لوحه التحكم </small>
        </h1>

    </section>


    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">عرض جميع الاعضاء</h3>

                        <div class="box-tools">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        @include('backend.alert')
                        <table class="table direction table-hover">
                            <tr>
                                <th>#</th>
                                <th>الاسم الاول</th>
                                <th>الاسم الثاني</th>
                                <th> البريد الالكتروني </th>
                                <th>الهاتف </th>
                                <th>  الحاله </th>
                                <th>   التصنيف  </th>
                                <th>   التسجيل  </th>
                                <th> التحكم</th>
                            </tr>

                            @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->first_name}} </td>
                                <td> {{$user->last_name}} </td>
                                <td> {{$user->email}} </td>
                                <td> {{$user->phone}} </td>
                                <td>
                                    @if($user->status)
                                     <span class="label label-success">مفعل</span>
                                    @else
                                     <span class="label label-danger">مخفي</span>
                                    @endif
                                </td>

                                <td> {{$user->role}} </td>

                                <td> {{$user->created_at->format('Dd-M-Y')}} </td>



                                <td>

                                    <a href="{{route('users.show' , $user->id)}}" class="btn btn-sm  mr-2 btn-primary">
                                        <i class="fa fa-eye"></i>
                                    </a>

                                    <a href="{{route('users.destroy' , $user->id)}}" class="btn btn-sm btn-danger">
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
                {{$users->links()}}
            </div>
        </div>
    </section>








@endsection
