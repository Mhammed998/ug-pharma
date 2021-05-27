@extends('layouts.app')
@section('front-title' , 'UG pharma | Blog')
@section('front-content')

    <section class="blog">
        <div class="container">
            <div>Blog</div>
        </div>
    </section>


@foreach($spost as $post)
    <!--start blog article-->
    <section class="blog-article text-center mb-5 mt-5 pt-4 pb-5 blogs">
        <div class="container">
            <div class="img-container mb-4">
                <img src="{{asset('images/posts/' . $post->post_image)}}" class="img-fluid">
                <i class="fas fa-share"></i>
                <div class="share-social">
                    <a href="#"> <i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fas fa-envelope"></i> </a>
                    <a href="#"> <i class="fab fa-whatsapp"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
            <h1>{{$post->title}}</h1>
            <h5>on {{date('M-d-Y', strtotime($post->created_at))}}</h5>
            <p class="mb-4">
               {{$post->content}}
            </p>
        </div>
    </section>

@endforeach




@endsection
