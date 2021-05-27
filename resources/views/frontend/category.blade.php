@extends('layouts.app')
@section('front-title' , 'UG pharma | Category')
@section('front-content')

<section class="p-5">
    <div class="container text-center">
        <h3 class="text-center">{{app()->getLocale() == 'en' ?  $category->title_en : $category->title_ar }}</h3>
    </div>
</section>

<section class="products mt-md-2 mb-5 pt-md-3 pb-5">
    <div class="container">

        <h4>{{__('lang.PRODUCTS')}}</h4>

        <div class="row">
            @if($category->products->count() > 0)
                @foreach($category->products as $product)
                    <div class="col-lg-3 col-sm-6 col-9 mx-auto mb-4">
                        <div class="product text-center">
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
                            <p>{{ app()->getLocale() === 'en' ? $product->name_en : $product->name_ar }}</p>
                            <div>
                                <a class="btn btn-outline rounded-pill" role="button">{{__('lang.ADDTOCART')}}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="alert alert-info">there is no product yet</div>
            @endif
        </div>
    </div>
</section>

<section class="blogs mt-5 mb-5 pt-5 pb-5">
    <div class="container">
        <h4>{{__('lang.BLOGS')}}</h4>

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
