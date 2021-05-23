@extends('layouts.app')
@section('front-title' , 'UG pharma | Profile')
@section('front-content')




    <!--start product-detail-dropdown-->
    <section class="product-details-dropdown">
        <i class="fas fa-times"></i>
        <div class="container h-100 d-flex align-items-center justify-content-center">
            <div class="content ">
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="img-container">
                            <img src="{{asset('frontend/imgs/green-coffe.png')}}" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-6 ps-4">
                        <h5>Green Cofee </h5>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta pariatur quisquam necessitatibus architecto</p>
                        <p>Weight : <span>500g</span></p>
                        <div class="buttom mt-3">
                            <a class="btn btn-outline rounded-pill" href="checkout.html" role="button">Check Out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end product-detail-dropdown-->

    <!--start profile -->

    <!--aff-marketing inputs -->
    <div class="aff-marketing">
        <i class="fas fa-times"></i>
        <div class="container h-100 d-flex align-items-center justify-content-center">
            <div class="content ">
                <div>
                    <h1 class="text-center">Ug Pharma</h1>
                    <h5>
                        Share the link with your frinds , social media accounts or any where and make sure they buy prouducts through the link below and you will get coins
                    </h5>
                    <input type="text" class="form-control rounded-pill text-center" value="http:://ug-pharma//1345.com">
                </div>
            </div>
        </div>
    </div>
    <div class="profile mt-5 pt-5 mb-5 pb-5">
        <div class="container">
            <div class=" check--forms">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Whish List</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Order History</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Information</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active ms-md-5 ms-3" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                        <section class="whish mt-4">
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-6 mb-3">
                                    <div class="product">
                                        <div class="img-container">
                                            <img src="{{asset('frontend/imgs/green-coffe.png')}}" class="img-fluid">
                                            <img src="{{asset('frontend/imgs/coffe.png')}}" class="img-fluid secd">
                                            <div class="show-whish d-flex align-items-center justify-content-center">
                                                <a href="product-details.html"><i class="fas fa-eye"></i></a>
                                                <a href="cart.html"><i class="fas fa-shopping-bag"></i></a>
                                                <i class="fas fa-trash-alt"></i>
                                            </div>
                                        </div>
                                        <p>Green Coffe</p>
                                        <div>
                                            <a class="btn btn-outline rounded-pill" role="button">Add To Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6 mb-3">
                                    <div class="product">
                                        <div class="img-container">
                                            <img src="{{asset('frontend/imgs/green-coffe.png')}}" class="img-fluid">
                                            <img src="{{asset('frontend/imgs/coffe.png')}}" class="img-fluid secd">
                                            <div class="show-whish d-flex align-items-center justify-content-center">
                                                <a href="product-details.html"><i class="fas fa-eye"></i></a>
                                                <a href="cart.html"><i class="fas fa-shopping-bag"></i></a>
                                                <i class="fas fa-trash-alt"></i>
                                            </div>
                                        </div>
                                        <p>Green Coffe</p>
                                        <div>
                                            <a class="btn btn-outline rounded-pill" role="button">Add To Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6 mb-3">
                                    <div class="product">
                                        <div class="img-container">
                                            <img src="{{asset('frontend/imgs/green-coffe.png')}}" class="img-fluid">
                                            <img src="{{asset('frontend/imgs/coffe.png')}}" class="img-fluid secd">
                                            <div class="show-whish d-flex align-items-center justify-content-center">
                                                <a href="product-details.html"><i class="fas fa-eye"></i></a>
                                                <a href="cart.html"><i class="fas fa-shopping-bag"></i></a>
                                                <i class="fas fa-trash-alt"></i>
                                            </div>
                                        </div>
                                        <p>Green Coffe</p>
                                        <div>
                                            <a class="btn btn-outline rounded-pill" role="button">Add To Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6 mb-3">
                                    <div class="product">
                                        <div class="img-container">
                                            <img src="{{asset('frontend/imgs/green-coffe.png')}}" class="img-fluid">
                                            <img src="{{asset('frontend/imgs/coffe.png')}}" class="img-fluid secd">
                                            <div class="show-whish d-flex align-items-center justify-content-center">
                                                <a href="product-details.html"><i class="fas fa-eye"></i></a>
                                                <a href="cart.html"><i class="fas fa-shopping-bag"></i></a>
                                                <i class="fas fa-trash-alt"></i>
                                            </div>
                                        </div>
                                        <p>Green Coffe</p>
                                        <div>
                                            <a class="btn btn-outline rounded-pill" role="button">Add To Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6 mb-3">
                                    <div class="product">
                                        <div class="img-container">
                                            <img src="{{asset('frontend/imgs/green-coffe.png')}}" class="img-fluid">
                                            <img src="{{asset('frontend/imgs/coffe.png')}}" class="img-fluid secd">
                                            <div class="show-whish d-flex align-items-center justify-content-center">
                                                <a href="product-details.html"><i class="fas fa-eye"></i></a>
                                                <a href="cart.html"><i class="fas fa-shopping-bag"></i></a>
                                                <i class="fas fa-trash-alt"></i>
                                            </div>
                                        </div>
                                        <p>Green Coffe</p>
                                        <div>
                                            <a class="btn btn-outline rounded-pill" role="button">Add To Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6 mb-3">
                                    <div class="product">
                                        <div class="img-container">
                                            <img src="{{asset('frontend/imgs/green-coffe.png')}}" class="img-fluid">
                                            <img src="{{asset('frontend/imgs/coffe.png')}}" class="img-fluid secd">
                                            <div class="show-whish d-flex align-items-center justify-content-center">
                                                <a href="product-details.html"><i class="fas fa-eye"></i></a>
                                                <a href="cart.html"><i class="fas fa-shopping-bag"></i></a>
                                                <i class="fas fa-trash-alt"></i>
                                            </div>
                                        </div>
                                        <p>Green Coffe</p>
                                        <div>
                                            <a class="btn btn-outline rounded-pill" role="button">Add To Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6 mb-3">
                                    <div class="product">
                                        <div class="img-container">
                                            <img src="{{asset('frontend/imgs/green-coffe.png')}}" class="img-fluid">
                                            <img src="{{asset('frontend/imgs/coffe.png')}}" class="img-fluid secd">
                                            <div class="show-whish d-flex align-items-center justify-content-center">
                                                <a href="product-details.html"><i class="fas fa-eye"></i></a>
                                                <a href="cart.html"><i class="fas fa-shopping-bag"></i></a>
                                                <i class="fas fa-trash-alt"></i>
                                            </div>
                                        </div>
                                        <p>Green Coffe</p>
                                        <div>
                                            <a class="btn btn-outline rounded-pill" role="button">Add To Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                    </div>
                    <div class="tab-pane fade ms-md-5 ms-3" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <section class="order-history mt-5">
                            <div class="order-table">
                                <table role="table">
                                    <thead role="rowgroup">
                                    <tr role="row">
                                        <th role="columnheader">Photo</th>
                                        <th role="columnheader">Details</th>
                                        <th role="columnheader">Price</th>
                                        <th role="columnheader">Number</th>
                                        <th role="columnheader">Total</th>
                                    </tr>
                                    </thead>
                                    <tbody role="rowgroup">
                                    <tr role="row">
                                        <td role="cell">
                                            <div class="img-container">
                                                <img src="{{asset('frontend/imgs/green-coffe.png')}}" class="img-container">
                                            </div>
                                        </td>
                                        <td role="cell">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</td>
                                        <td role="cell">10LE</td>
                                        <td role="cell">2</td>
                                        <td role="cell">20LE</td>
                                    </tr>
                                    <tr role="row">
                                        <td role="cell">
                                            <div class="img-container">
                                                <img src="{{asset('frontend/imgs/green-coffe.png')}}" class="img-container">
                                            </div>
                                        </td>
                                        <td role="cell">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</td>
                                        <td role="cell">10LE</td>
                                        <td role="cell">2</td>
                                        <td role="cell">20LE</td>
                                    </tr>
                                    <tr role="row">
                                        <td role="cell">
                                            <div class="img-container">
                                                <img src="{{asset('frontend/imgs/green-coffe.png')}}" class="img-container">
                                            </div>
                                        </td>
                                        <td role="cell">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</td>
                                        <td role="cell">10LE</td>
                                        <td role="cell">2</td>
                                        <td role="cell">20LE</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </section>
                    </div>
                    <div class="tab-pane fade ms-md-5 ms-3" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <section class="info mt-4 d-flex justify-content-center">
                            <div>
                                <p>Name : <span>Amany Samir </span></p>
                                <p>E-mail : <span>AmanySamir@yahoo.com </span></p>
                                <p>Phone : <span>0123456789 </span></p>
                                <p class="aff-market">come on buy and collect coins and get products free</p>
                                <div class="buttom mt-4 text-center">
                                    <a class="btn btn-outline rounded-pill coins-btn" role="button">Earn Coins</a>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection
