@extends('layouts.app')
@section('front-title' , 'UG pharma | Product')
@section('front-styles')
    <style>
        .review .fas{
            color: var(--secd);
        }
        .review .far{
            color: var(--secd);
        }


    </style>
@endsection
@section('front-content')



    @foreach($sproduct as $product)

    <!--start product details-->
    <section class="product-detail mt-5 pt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <div class="swiper-container prod-slider">
                        <div class="swiper-wrapper">

                                @foreach(explode("|",$product->images) as $image)
                                    @if ($loop->first)
                                    <div class="swiper-slide">
                                        <div class="img-container w-100">
                                            <img src="{{asset('images/products/' . $image)}}" class="img-fluid" />
                                        </div>
                                    </div>
                                    @endif

                                    @if ($loop->last)
                                            <div class="swiper-slide">
                                                <div class="img-container w-100">
                                                    <img src="{{asset('images/products/' . $image )}}" class="img-fluid" />
                                                </div>
                                            </div>
                                    @endif
                                @endforeach

                        </div>
                    </div>
                </div>
                <div class="offset-lg-1 col-md-6">
                    <h5>{{$product->name}}</h5>
                    <p>Discription : <span> {{$product->description}}</span></p>
                    <p>Ingredients : <span>{{$product->ingredients}}</span></p>
                    <p>code <span>{{$product->code}}</span></p>
                    <p>Price : <span>{{$product->price}} LE</span></p>
                    <div class="quantity d-flex">
                        <p class="down">-</p> <input class="quantity-inp" value="1" type="text">
                        <p class="up">+</p>
                    </div>
                    <div class="d-flex">
                        <div class="buttom mt-4 ">
                            <a class="btn btn-outline rounded-pill" href="cart.html" role="button">Add To Cart</a>
                        </div>
                        <div class=" mt-4 ">
                            <i class="fas fa-heart"></i>
                        </div>
                        <div class="buttom mt-4 ">
                            <a class="btn btn-outline rounded-pill" href="checkout.html" role="button">Check Out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="reviews mt-5 pt-5 ">
        <div class="container">
            <ul class="nav nav-pills " id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Product Details</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Reviews ({{$product->reviews->count()}})</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="details">
                        <p>Discription : <span>{{$product->description}}</span></p>
                        <p>Size : <span>{{$product->size}}</span></p>
                        <p>Brand : <span> {{$product->brand}}</span></p>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                    @if($product->reviews->count() > 0)
                       @foreach($product->reviews as $review)
                    <div class=" d-flex review mb-3">
                        <div class="img-container">
                            <img alt="" src="https://toppng.com/uploads/preview/roger-berry-avatar-placeholder-11562991561rbrfzlng6h.png" class="img-fluid">
                        </div>
                        <div class="ms-4">
                            <div class="  d-flex rated mb-3">
                                @if($review->rate == '5')
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                @elseif($review->rate == '4')
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>

                                @elseif($review->rate == '3')
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>

                                @elseif($review->rate == '2')
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                @elseif($review->rate == '1')
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>

                                @endif


                            </div>
                            <p class="profile-info">
                                <span class="name"> {{$review->username}} </span> - <span class="date">{{$review->created_at->format('Mm','Dd','y')}}</span>
                            </p>
                            <p class="review-text">
                                {{$review->comment}}
                            </p>
                        </div>
                    </div>
                       @endforeach
                    @else
                        <div class="alert alert-info text-center"> There is no review yet..!</div>
                    @endif

                    <div class="add-review  mt-4">
                        <h5>
                            add review
                        </h5>
                        <p class="mb-0 ml-1">rate product</p>


                        <form action="{{route('product-saveReview')}}" method="post">
                            @csrf

                            <div class="star d-flex mb-2">
                                <div class="rate">
                                    <input type="radio" id="star5" name="rate" value="5" />
                                    <label for="star5" title="text" class="fas fa-star"></label>
                                    <input type="radio" id="star4" name="rate" value="4" />
                                    <label for="star4" title="text" class="fas fa-star"></label>
                                    <input type="radio" id="star3" name="rate" value="3" />
                                    <label for="star3" title="text" class="fas fa-star"></label>
                                    <input type="radio" id="star2" name="rate" value="2" />
                                    <label for="star2" title="text" class="fas fa-star"></label>
                                    <input type="radio" id="star1" name="rate" value="1" />
                                    <label for="star1" title="text" class="fas fa-star"></label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">leave a comment</label>
                                <textarea name="comment" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Your Review"></textarea>
                            </div>
                            <label for="exampleFormControlInput1">Enter your name</label>
                            <input name="username" type="text" class="form-control" id="exampleFormControlInput1" placeholder="EX : Firstname Lastname">
                            <input class="form-control" name="product_id" type="hidden" value="{{$product->id}}">

                            <div class="buttom mt-4 ">
                                <button type="submit" class="btn btn-outline rounded-pill" >Save</button>
                            </div>

                        </form>



                    </div>
                </div>
            </div>
        </div>
    </section>

    @endforeach



@endsection
