@extends('layouts.app')
@section('front-title' , 'UG pharma | Blog')
@section('front-content')


    <!--blog logo img-->
    <section class="blog">
        <div class="container">
            <div>Blog</div>
        </div>
    </section>
    <section class="blog-category pt-4">
        <div class="container">
            <div class="d-flex align-items-center justify-content-around  mx-auto">

                @if($cates->count() > 0)
                    @foreach($cates as $cate)
                    <div class="">
                        <div class="buttom  text-center">
                            <a class="btn btn-outline rounded-pill" href="" role="button">{{$cate->title}}</a>
                        </div>
                    </div>
                    @endforeach
                @endif

            </div>
        </div>
    </section>
    <!--start blogs-->
    <section class="blogs mt-5 mb-5 pt-5 pb-5">
        <div class="container">
            <div class="text-center mb-4">
                <h3>Blogs</h3>
                <div class="search-blog ">
                    <input type="text" class="form-control rounded-pill" placeholder="Search By Title ..." aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <i class="fas fa-search rounded-pill"></i>
                </div>
            </div>
            <div class="row">

                @if($posts->count() > 0)
                    @foreach($posts as $post)

                        @if ($loop->odd)
                            <div class="col-lg-6 mb-5">
                                <div class="img-container">
                                    <img src="{{asset('images/posts/' . $post->post_image)}}" class="img-fluid">
                                    <i class="fas fa-share"></i>
                                    <div class="share-social">
                                        <a href="#"> <i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fas fa-envelope"></i> </a>
                                        <a href="#"> <i class="fab fa-whatsapp"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-5">
                                <h1>{{$post->title}}</h1>
                                <h5>{{date('M-d-Y', strtotime($post->created_at))}}</h5>
                                <p>

                                    {{ \Illuminate\Support\Str::limit($post->content, 400, $end='...') }}
                                </p>
                                <div>
                                    <a class="btn btn-outline rounded-pill" href="blog-details.html" role="button">{{__('lang.READMORE')}}</a>
                                </div>
                            </div>

                        @endif

                        @if ($loop->even)
                                <div class="col-lg-6 mb-5">
                                    <h1>{{$post->title}}</h1>
                                    <h5>{{date('M-d-Y', strtotime($post->created_at))}}</h5>
                                    <p>

                                        {{ \Illuminate\Support\Str::limit($post->content, 500, $end='...') }}
                                    </p>
                                    <div>
                                        <a class="btn btn-outline rounded-pill" href="blog-details.html" role="button">{{__('lang.READMORE')}}</a>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-5">
                                    <div class="img-container">
                                        <img src="{{asset('images/posts/' . $post->post_image)}}" class="img-fluid">
                                        <i class="fas fa-share"></i>
                                        <div class="share-social">
                                            <a href="#"> <i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fas fa-envelope"></i> </a>
                                            <a href="#"> <i class="fab fa-whatsapp"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                        </div>
                                    </div>
                                </div>
                        @endif


                    @endforeach
                @endif

            </div>
        </div>
    </section>





@endsection
