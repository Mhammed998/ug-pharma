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
                <div class="">
                    <div class="buttom  text-center">
                        <a class="btn btn-outline rounded-pill" href="" role="button">oils</a>
                    </div>
                </div>
                <div class="">
                    <div class="buttom  text-center">
                        <a class="btn btn-outline rounded-pill" href="" role="button">Extract Powder</a>
                    </div>
                </div>
                <div class="">
                    <div class="buttom  text-center">
                        <a class="btn btn-outline rounded-pill" href="" role="button">Extract Liquid</a>
                    </div>
                </div>
                <div class="">
                    <div class="buttom  text-center">
                        <a class="btn btn-outline rounded-pill" href="" role="button">Bee Product</a>
                    </div>
                </div>
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
                <div class="col-lg-6 mb-5">
                    <div class="img-container">
                        <img src="{{asset('frontend/imgs/oils2.jpg')}}" class="img-fluid">
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
                    <h1>Benefits of natural oils ...</h1>
                    <h5>January 6, 2020</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, fugiat. Repellendus, qui velit? Nemo eveniet praesentium distinctio, fugit, rerum dolor exercitationem maxime laboriosam architecto incidunt asperiores, aut quos?
                        Ducimus corrupti perferendis ratione harum aspernatur debitis earum ipsum, aliquam placeat, labore aut quaerat velit maxime officia voluptas sed nesciunt similique deserunt dignissimos! Voluptatum, cupiditate. Doloribus sint quae
                        sequi ipsam eum aperiam rem aliquid culpa nobis! Unde omnis voluptatibus minus est distinctio facere tempore excepturi ipsum at vero, consectetur totam iusto earum veniam, minima saepe labore adipisci hic consequuntur repellendus
                        delectus.
                    </p>
                    <div>
                        <a class="btn btn-outline rounded-pill" href="blog-details.html" role="button">Read More</a>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <h1>Benefits of natural oils ...</h1>
                    <h5>January 6, 2020</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, fugiat. Repellendus, qui velit? Nemo eveniet praesentium distinctio, fugit, rerum dolor exercitationem maxime laboriosam architecto incidunt asperiores, aut quos?
                        Ducimus corrupti perferendis ratione harum aspernatur debitis earum ipsum, aliquam placeat, labore aut quaerat velit maxime officia voluptas sed nesciunt similique deserunt dignissimos! Voluptatum, cupiditate. Doloribus sint quae
                        sequi ipsam eum aperiam rem aliquid culpa nobis! Unde omnis voluptatibus minus est distinctio facere tempore excepturi ipsum at vero, consectetur totam iusto earum veniam, minima saepe labore adipisci hic consequuntur repellendus
                        delectus.
                    </p>
                    <div>
                        <a class="btn btn-outline rounded-pill" href="blog-details.html" role="button">Read More</a>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="img-container">
                        <img src="{{asset('frontend/imgs/oils2.jpg')}}" class="img-fluid">
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
                    <div class="img-container">
                        <img src="{{asset('frontend/imgs/oils2.jpg')}}" class="img-fluid">
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
                    <h1>Benefits of natural oils ...</h1>
                    <h5>January 6, 2020</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, fugiat. Repellendus, qui velit? Nemo eveniet praesentium distinctio, fugit, rerum dolor exercitationem maxime laboriosam architecto incidunt asperiores, aut quos?
                        Ducimus corrupti perferendis ratione harum aspernatur debitis earum ipsum, aliquam placeat, labore aut quaerat velit maxime officia voluptas sed nesciunt similique deserunt dignissimos! Voluptatum, cupiditate. Doloribus sint quae
                        sequi ipsam eum aperiam rem aliquid culpa nobis! Unde omnis voluptatibus minus est distinctio facere tempore excepturi ipsum at vero, consectetur totam iusto earum veniam, minima saepe labore adipisci hic consequuntur repellendus
                        delectus.
                    </p>
                    <div>
                        <a class="btn btn-outline rounded-pill" href="blog-details.html" role="button">Read More</a>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <h1>Benefits of natural oils ...</h1>
                    <h5>January 6, 2020</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, fugiat. Repellendus, qui velit? Nemo eveniet praesentium distinctio, fugit, rerum dolor exercitationem maxime laboriosam architecto incidunt asperiores, aut quos?
                        Ducimus corrupti perferendis ratione harum aspernatur debitis earum ipsum, aliquam placeat, labore aut quaerat velit maxime officia voluptas sed nesciunt similique deserunt dignissimos! Voluptatum, cupiditate. Doloribus sint quae
                        sequi ipsam eum aperiam rem aliquid culpa nobis! Unde omnis voluptatibus minus est distinctio facere tempore excepturi ipsum at vero, consectetur totam iusto earum veniam, minima saepe labore adipisci hic consequuntur repellendus
                        delectus.
                    </p>
                    <div>
                        <a class="btn btn-outline rounded-pill" href="blog-details.html" role="button">Read More</a>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="img-container">
                        <img src="{{asset('frontend/imgs/oils2.jpg')}}" class="img-fluid">
                        <i class="fas fa-share"></i>
                        <div class="share-social">
                            <a href="#"> <i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fas fa-envelope"></i> </a>
                            <a href="#"> <i class="fab fa-whatsapp"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





@endsection
