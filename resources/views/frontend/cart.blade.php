@extends('layouts.app')
@section('front-title' , 'UG pharma | Cart')
@section('front-content')

    <section class="confirm mt-5 mb-5 pt-5 pb-5">
        <div class="container">
            <div class="order-table">
                <div class="text-center">
                    <h3>Cart Details</h3>
                </div>
                <table role="table">
                    <thead role="rowgroup">
                    <tr role="row">
                        <th role="columnheader">Photo</th>
                        <th role="columnheader">Details</th>
                        <th role="columnheader">Price</th>
                        <th role="columnheader">Number</th>
                        <th role="columnheader">Delete</th>
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
                        <td role="cell">
                            <div class="quantity d-flex justify-content-center">
                                <p class="down">-</p> <input class="quantity-inp" value="1" type="text">
                                <p class="up">+</p>
                            </div>
                        </td>
                        <td role="cell"><i class="fas fa-trash-alt"></i></td>
                    </tr>
                    <tr role="row">
                        <td role="cell">
                            <div class="img-container">
                                <img src="{{asset('frontend/imgs/green-coffe.png')}}" class="img-container">
                            </div>
                        </td>
                        <td role="cell">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</td>
                        <td role="cell">10LE</td>
                        <td role="cell">
                            <div class="quantity d-flex justify-content-center">
                                <p class="down">-</p> <input class="quantity-inp" value="1" type="text">
                                <p class="up">+</p>
                            </div>
                        </td>
                        <td role="cell"><i class="fas fa-trash-alt"></i></td>
                    </tr>
                    <tr role="row">
                        <td role="cell">
                            <div class="img-container">
                                <img src="{{asset('frontend/imgs/green-coffe.png')}}" class="img-container">
                            </div>
                        </td>
                        <td role="cell">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</td>
                        <td role="cell">10LE</td>
                        <td role="cell">
                            <div class="quantity d-flex justify-content-center">
                                <p class="down">-</p> <input class="quantity-inp" value="1" type="text">
                                <p class="up">+</p>
                            </div>
                        </td>
                        <td role="cell"><i class="fas fa-trash-alt"></i></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="final-detail">
                <div>
                    <p>Sub Total : <span>20LE</span></p>
                    <p>shipping : <span>10LE</span></p>
                    <p>Total : <span>30LE</span></p>
                </div>
            </div>
            <div class="buttom mt-5 text-center">
                <a class="btn btn-outline rounded-pill" href="checkout.html" role="button">Check Out</a>
            </div>
        </div>
    </section>


@endsection
