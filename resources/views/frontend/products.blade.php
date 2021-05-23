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
                                All
                            </li>
                            <li>
                                oils
                            </li>
                            <li>
                                Extract Powder
                            </li>
                            <li>
                                Extract Liquid
                            </li>
                            <li>
                                Bee Product
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7">
                    <div class="text-center">
                        <h3>Products</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-sm-6 col-9 mx-auto mb-4">
                            <div class="product">
                                <div class="img-container">
                                    <img src="{{asset('frontend/imgs/green-coffe.png')}}" class="img-fluid">
                                    <img src="{{asset('frontend/imgs/coffe.png')}}" class="img-fluid secd">
                                    <div class="show-whish d-flex align-items-center justify-content-center">
                                        <a href="product-details.html"><i class="fas fa-eye"></i></a>
                                        <i class="fas fa-heart"></i>
                                    </div>
                                </div>
                                <p>Green Coffe</p>
                                <div>
                                    <a class="btn btn-outline rounded-pill" role="button">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-9 mx-auto mb-4">
                            <div class="product">
                                <div class="img-container">
                                    <img src="{{asset('frontend/imgs/green-coffe.png')}}" class="img-fluid">
                                    <img src="{{asset('frontend/imgs/coffe.png')}}" class="img-fluid secd">
                                    <div class="show-whish d-flex align-items-center justify-content-center">
                                        <a href="product-details.html"><i class="fas fa-eye"></i></a>
                                        <i class="fas fa-heart"></i>
                                    </div>
                                </div>
                                <p>Green Coffe</p>
                                <div>
                                    <a class="btn btn-outline rounded-pill" role="button">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-9 mx-auto mb-4">
                            <div class="product">
                                <div class="img-container">
                                    <img src="{{asset('frontend/imgs/green-coffe.png')}}" class="img-fluid">
                                    <img src="{{asset('frontend/imgs/coffe.png')}}" class="img-fluid secd">
                                    <div class="show-whish d-flex align-items-center justify-content-center">
                                        <a href="product-details.html"><i class="fas fa-eye"></i></a>
                                        <i class="fas fa-heart"></i>
                                    </div>
                                </div>
                                <p>Green Coffe</p>
                                <div>
                                    <a class="btn btn-outline rounded-pill" role="button">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-9 mx-auto mb-4">
                            <div class="product">
                                <div class="img-container">
                                    <img src="{{asset('frontend/imgs/green-coffe.png')}}" class="img-fluid">
                                    <img src="{{asset('frontend/imgs/coffe.png')}}" class="img-fluid secd">
                                    <div class="show-whish d-flex align-items-center justify-content-center">
                                        <a href="product-details.html"><i class="fas fa-eye"></i></a>
                                        <i class="fas fa-heart"></i>
                                    </div>
                                </div>
                                <p>Green Coffe</p>
                                <div>
                                    <a class="btn btn-outline rounded-pill" role="button">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-9 mx-auto mb-4">
                            <div class="product">
                                <div class="img-container">
                                    <img src="{{asset('frontend/imgs/green-coffe.png')}}" class="img-fluid">
                                    <img src="{{asset('frontend/imgs/coffe.png')}}" class="img-fluid secd">
                                    <div class="show-whish d-flex align-items-center justify-content-center">
                                        <a href="product-details.html"><i class="fas fa-eye"></i></a>
                                        <i class="fas fa-heart"></i>
                                    </div>
                                </div>
                                <p>Green Coffe</p>
                                <div>
                                    <a class="btn btn-outline rounded-pill" role="button">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-9 mx-auto mb-4">
                            <div class="product">
                                <div class="img-container">
                                    <img src="{{asset('frontend/imgs/green-coffe.png')}}" class="img-fluid">
                                    <img src="{{asset('frontend/imgs/coffe.png')}}" class="img-fluid secd">
                                    <div class="show-whish d-flex align-items-center justify-content-center">
                                        <a href="product-details.html"><i class="fas fa-eye"></i></a>
                                        <i class="fas fa-heart"></i>
                                    </div>
                                </div>
                                <p>Green Coffe</p>
                                <div>
                                    <a class="btn btn-outline rounded-pill" role="button">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                        <nav aria-label="Page navigation example" class="mt-5">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>








@endsection
