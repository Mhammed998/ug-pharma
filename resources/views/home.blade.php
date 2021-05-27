@extends('layouts.app')
@section('front-title' , 'UG pharma')
@section('front-content')


    <!--start header-->
    <header>
        <div style="direction: ltr !important;" class="container d-flex align-items-center  h-100">
            <div>
                <h1>-UG Pharma</h1>
                <p>{{__('lang.INTRO')}}</p>
                <div class="social d-flex ">
                    <a href="#"> <i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fas fa-envelope"></i> </a>
                    <a href="#"> <i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
        </div>
    </header>
    <!--start product menu-->
    <section class="product-menu mt-5 mb-5 pt-5 pb-5">
        <div class="container">
            <div class="row text-center">

                @if($cates->count() > 0)
                   @foreach($cates as $cate)


                        @if ($loop->odd)
                            <div class="col-lg-7 col-md-6 mb-2">
                                <div class="img-container">
                                    <img src="{{asset('images/categories/' . $cate->cate_image)}}" class="img-fluid">
                                </div>
                                <p>{{$cate->title}}</p>
                                <div>
                                    <a class="btn btn-outline rounded-pill" href="{{route('categoryDetails' , $cate->id)}}" role="button">{{__('lang.SHOPNOW')}}</a>
                                </div>
                            </div>
                        @endif
                            @if ($loop->even)
                                <div class="col-lg-5 col-md-6 mb-2">
                                    <div class="img-container">
                                        <img src="{{asset('images/categories/' . $cate->cate_image)}}" class="img-fluid">
                                    </div>
                                    <p>{{$cate->title}}</p>
                                    <div>
                                        <a class="btn btn-outline rounded-pill" href="{{route('categoryDetails' , $cate->id)}}" role="button">{{__('lang.SHOPNOW')}}</a>
                                    </div>
                                </div>
                            @endif

                    @endforeach

                @else
                 <div class="alert alert-info"> there is no category yet </div>
                @endif



            </div>
        </div>
    </section>
    <!--start new product-->
    <section class="new text-center mt-5 mb-5 pt-5 pb-5">
        <h3>{{__('lang.NEW_PRODUCTS')}}</h3>
        <div class="container">
            <div class="slider">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <div class="container h-100">
                    <!-- Swiper -->
                    <div class="swiper-container new-product">
                        <div class="swiper-wrapper">


                            @if($products->count() > 0)
                               @foreach($products as $product)
                            <div class="swiper-slide">
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
                                            <a href="{{route('product-details',$product->id)}}"><i class="fas fa-eye"></i></a>
                                            <a href="{{route('addToWishList',$product->id)}}"> <i class="fas fa-heart"></i></a>

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

                        </div>

                        <!-- Add Pagination -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--start services -->
    <section class="services text-center">
        <div class="layout"></div>
        <div class="container">
            <h3> UG Pharma</h3>
            <div class="d-flex justify-content-center position-relative">
                <p class="d-flex align-items-center me-4">
                    <i class="fas fa-check"></i>  {{__('lang.NATURAL100')}}
                </p>
                <p class="d-flex align-items-center">
                    <i class="fas fa-check"></i>  {{__('lang.SAVE100')}}
                </p>
            </div>
            <div class="w-75 position-relative mx-auto">
                {{__('lang.OURSAFTY')}}
            </div>
            <div class="position-relative">
                <a class="btn btn-outline rounded-pill" href="#" role="button">{{__('lang.SHOPNOW')}}</a>
            </div>
        </div>
    </section>
    <!--start products-->
    <section class="all-products text-center mt-5 mb-5 pt-5 pb-5">
        <h3>{{__('lang.PRODUCTS')}}</h3>
        <div class="container">
            <div class="slider">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <div class="container h-100">
                    <!-- Swiper -->
                    <div class="swiper-container all-product">
                        <div class="swiper-wrapper">


                            @if($products->count() > 0)
                                @foreach($products as $product)
                                    <div class="swiper-slide">
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
                                                    <a href="{{route('product-details',$product->id)}}"><i class="fas fa-eye"></i></a>
                                                    <a href="{{route('addToWishList',$product->id)}}"> <i class="fas fa-heart"></i></a>
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


                        </div>
                        <!-- Add Pagination -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--start video-->
    <div class="video mt-4">
        <div class="container">
            <img src="{{asset('frontend/imgs/vedio.png')}}" class="img-fluid">
        </div>
    </div>
    <!--start blogs-->
    <section class="blogs mt-5 mb-5 pt-5 pb-5 text-center">
        <h3>{{__('lang.BLOGS')}}</h3>
        <div class="container text-start">
            <div class="row">
                @if($posts->count() > 0)
                    @foreach($posts as $post)
                     <div class="col-lg-4 col-md-6">
                    <div class="img-container">
                        <img src="{{asset('images/posts/' . $post->post_image)}}" class="img-fluid">
                    </div>
                    <h5>{{date('M-d-Y', strtotime($post->created_at))}}</h5>
                    <p>
                        {{ \Illuminate\Support\Str::limit($post->content, 400, $end='...') }}
                    </p>
                    <div>
                        <a class="btn btn-outline mb-3 rounded-pill" href="#" role="button">{{__('lang.READMORE')}}</a>
                    </div>
                </div>
                    @endforeach
                @else
                    <div class="alert alert-info">there is no post yet</div>
                @endif
            </div>
        </div>
    </section>

@endsection
