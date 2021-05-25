@extends('layouts.app')
@section('front-title' , 'UG pharma | Products')
@section('front-content')


    <!--start products-->
    <section class="products mt-md-5 mb-5 pt-md-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5 mb-3">
                    <div class=" filter ">
                        <h5 class="text-center">Filter</h5>
                        <input type="text" class="form-control rounded-pill" placeholder="Search By Product ..." aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <ul class="list-unstyled mt-3">
                            <li class="active">
                                <a class="d-block" href="#">
                                    All
                                </a>
                            </li>

                            @if($cates->count() > 0)
                                @foreach($cates as $cate)
                                    <li>
                                        <a class="d-block" href="#">
                                            {{$cate->title}}
                                        </a>
                                    </li>
                                @endforeach
                            @endif

                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7">
                    <div class="text-center">
                        <h3>Products</h3>
                    </div>
                    <div class="row">

                            @if($products->count() > 0)
                                @foreach($products as $product)
                                <div class="col-lg-4 col-sm-6 col-9 mx-auto mb-4">
                                  <div class="product">
                                        <div class="img-container">

                                            @foreach(explode("|",$product->images) as $image)
                                                @if ($loop->first)
                                                    <img src="{{asset('images/products/' . $image)}}" class="img-fluid">
                                                @endif

                                                @if ($loop->last)
                                                    <img src="{{asset('images/products/' . $image )}}" class="img-fluid secd">
                                                @endif
                                            @endforeach

                                            <div class="show-whish d-flex align-items-center justify-content-center">
                                                <a href="product-details.html"><i class="fas fa-eye"></i></a>
                                                <i class="fas fa-heart"></i>
                                            </div>
                                        </div>
                                        <p>{{$product->name}}</p>
                                        <div>
                                            <a class="btn btn-outline rounded-pill" role="button">{{__('lang.ADDTOCART')}}</a>
                                        </div>
                                    </div>
                              </div>
                           @endforeach
                        @endif

                        <nav aria-label="Page navigation example" class="mt-5">
{{--                            <ul class="pagination">--}}
{{--                                <li class="page-item">--}}
{{--                                    <a class="page-link" href="#" aria-label="Previous">--}}
{{--                                        <span aria-hidden="true">&laquo;</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li class="page-item"><a class="page-link" href="#">1</a></li>--}}
{{--                                <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
{{--                                <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
{{--                                <li class="page-item">--}}
{{--                                    <a class="page-link" href="#" aria-label="Next">--}}
{{--                                        <span aria-hidden="true">&raquo;</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}

                            {{$products->links()}}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>








@endsection
