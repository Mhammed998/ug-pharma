<!doctype html>
<html dir={{app()->getLocale() == "en" ? "ltr" : "rtl"}}>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('front-title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/swiper-bundel.min.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('frontend/css/text.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/about.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/products.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/blog.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/confirm.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/profile.css')}}">

    @yield('front-styles')

</head>
<body>


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
        <!--start nav -->
        <nav class="upper-nav">
            <div class="container">
                <div class="row">
                    <div class="col-3 d-flex align-items-center">
                        <a href="{{route('cart')}}">
                            <div class="shopping--bag d-flex align-items-center">
                                <i class="fas fa-shopping-bag"></i>
                                <p>0</p>
                            </div>
                        </a>
                        <a href="{{route('profile')}}">
                            <div class="whish--list d-flex align-items-center">
                                <i class="fas fa-heart"></i>
                                <p>0</p>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <div class="logo">
                            <img src="{{asset('frontend/imgs/UG-2-logo.png')}}" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-5 col-lg d-flex justify-content-end">

                        @guest
                            <div class="">
                                <ul class="list-unstyled d-flex align-items-center h-100 ">
                            <li class="mr-2 ml-2">
                                <a class="" href="{{ route('login') }} ">{{ __('lang.Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="">
                                    <a class="" href="{{route('register') }}">{{ __('lang.Register') }}</a>
                                </li>
                              </ul>
                            </div>
                            @endif


                        @else
                        <div class="dropdown">
                            <a class="btn btn-outline account d-flex align-items-center h-100" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user-circle"></i>
                                <p>
                                    {{ Auth::user()->first_name . ' ' . Auth::user()->last_name  }}</p>
                            </a>


                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li>
                                    <a href="profile.html" class="dropdown-item">
                                        <i class="fas fa-info"></i> {{ __('lang.ACCOUNT_INFO') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="resetpass.html" class="dropdown-item">
                                        <i class="fas fa-key"></i> {{ __('lang.ACCOUNT_PASS') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="profile.html" class="dropdown-item">
                                        <i class="fas fa-history"></i> {{ __('lang.ORDER_HISTORY') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="profile.html" class="dropdown-item">
                                        <i class="fas fa-user"></i> {{ __('lang.PROFILE') }}
                                    </a>
                                </li>

                                @if(Auth::user()->role ==='admin')
                                <li>
                                    <a href="{{route('dashboard.main')}}" class="dropdown-item">
                                        <i class="fas fa-cog"></i>  {{ __('lang.DASHBOARD') }}
                                    </a>
                                </li>
                                @endif

                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt"></i>
                                        {{ __('lang.LOGOUT') }}
                                    </a>

                                    <form id="logout-form" action="{{  \LaravelLocalization::localizeURL('/logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>



                            </ul>
                        </div>
                        @endguest



                        <div class="btn-group mb-1">
                            <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{trans('lang.change_language')}}</button>
                            <div class="dropdown-menu">
                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                        {{ $properties['native'] }}
                                    </a>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </nav>
        <!--start secd nav-->
        <nav class="secd-nav">
            <div class="container-lg">
                <div class="row">
                    <div class="col-lg-8 col px-0">
                        <nav class="navbar navbar-expand-lg p-0">
                            <div class="container-fluid {{app()->getLocale() == "en" ? "ps-0" : "pe-0"}} ">
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                    <span class="navbar-toggler-icon"></span>
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav p-0 mb-2 mb-lg-0">
                                        <li class="nav-item">
                                            <a class="nav-link active" aria-current="page" href="{{route('home')}}">{{__('lang.HOME')}}</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('about')}}">{{__('lang.ABOUT')}} </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('blog')}}">{{__('lang.BLOG')}}</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('products')}}">{{__('lang.PRODUCTS')}}</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('contact')}}">{{__('lang.CONTACTUS')}}</a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </nav>
                    </div>
                    <div class="col-lg-4 col px-0 icons-edit">
                        <div class="d-flex align-items-center justify-content-end h-100">
                            <div class="coins d-flex align-items-center">
                                <svg id="Capa_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><g><path d="m434.618 84.596c-.008-.007-.014-.012-.022-.019l-75.039-25.821-130.994 25.822v57.141l214.585 35.402 38.266-35.402c-12.44-21.496-28.291-40.789-46.796-57.123z" fill="#e7a52e"/><g fill="#e7a52e"><path d="m434.598 427.422-97.943-18.635-108.092 18.635v57.141h54.874c57.387 0 109.83-21.152 149.966-56.082"/><path d="m228.563 370.282 154.537 22.37 98.315-22.371c10.231-17.686 18.166-36.868 23.384-57.141l-114.966-33.144-161.27 33.144z"/></g><path d="m504.799 198.859-70.201-41.929-206.035 41.929v57.141l224.963 40.62 58.474-40.62c0-19.734-2.498-38.876-7.201-57.141z" fill="#e7a52e"/><path d="m480.131 256c0-126.232-102.331-228.563-228.563-228.563-7.765 0-15.438.391-23.004 1.148v455.979h23.004c126.231-.001 228.563-102.332 228.563-228.564z" fill="#e28424"/><g fill="#c85929"><path d="m434.598 84.578c-40.29-35.556-93.201-57.141-151.161-57.141h-54.874v57.141z"/><path d="m228.563 198.859h276.236c-5.218-20.273-13.153-39.454-23.384-57.141h-252.852z"/><path d="m228.563 313.141h276.236c4.701-18.264 7.201-37.41 7.201-57.141h-283.437z"/><path d="m228.563 427.422h206.035c18.518-16.342 34.373-35.629 46.817-57.141h-252.852z"/></g><path d="m449.545 370.282h-220.982v57.141h174.165c18.518-16.342 34.373-35.63 46.817-57.141z" fill="#b94029"/><path d="m480.131 256h-251.567v57.141h244.366c4.7-18.264 7.201-37.41 7.201-57.141z" fill="#b94029"/><path d="m449.545 141.718h-220.982v57.141h244.367c-5.218-20.273-13.153-39.454-23.385-57.141z" fill="#b94029"/><path d="m251.567 27.437c-7.765 0-15.438.391-23.004 1.148v55.993h174.165c-40.29-35.556-93.201-57.141-151.161-57.141z" fill="#b94029"/><circle cx="228.563" cy="256" fill="#f6e266" r="228.563"/><path d="m76.857 426.939c11.555 10.262 24.148 19.379 37.617 27.153l62.697-420.852c-15.273 3.509-29.956 8.557-43.89 14.957z" fill="#fbf4af"/><path d="m228.563 27.437c-4.154 0-8.28.118-12.38.337 120.475 6.431 216.183 106.148 216.183 228.226s-95.709 221.795-216.183 228.227c4.1.219 8.226.337 12.38.337 126.232 0 228.563-102.331 228.563-228.563s-102.331-228.564-228.563-228.564z" fill="#eab14d"/><circle cx="228.563" cy="256" fill="#e7a52e" r="184.077"/><path d="m228.563 71.923c-4.604 0-9.168.174-13.687.507 95.27 7.003 170.39 86.512 170.39 183.57s-75.119 176.567-170.39 183.57c4.52.332 9.083.507 13.687.507 101.663 0 184.077-82.414 184.077-184.077s-82.414-184.077-184.077-184.077z" fill="#e28424"/><path d="m85.136 371.371c10.541 13.088 22.83 24.708 36.523 34.494l48.331-324.422c-16.109 5.403-31.221 12.975-44.994 22.366z" fill="#eab14d"/><path d="m234.183 154.592 34.749 53.385c.901 1.385 2.282 2.388 3.878 2.817l61.51 16.551c4.682 1.26 6.521 6.919 3.473 10.69l-40.034 49.545c-1.038 1.285-1.566 2.908-1.481 4.558l3.266 63.614c.249 4.842-4.565 8.339-9.093 6.607l-59.491-22.764c-1.543-.59-3.25-.59-4.793 0l-59.491 22.764c-4.528 1.733-9.342-1.765-9.093-6.607l3.266-63.614c.085-1.65-.443-3.273-1.481-4.558l-40.034-49.545c-3.047-3.771-1.209-9.43 3.473-10.69l61.51-16.551c1.595-.429 2.976-1.433 3.878-2.817l34.749-53.385c2.644-4.063 8.594-4.063 11.239 0z" fill="#c85929"/><path d="m334.32 227.346-61.51-16.551c-1.595-.43-2.976-1.433-3.878-2.817l-2.926-4.495c-.294 33.919-5.188 88.532-29.217 138.344l53.662 20.534c4.528 1.733 9.342-1.765 9.093-6.607l-3.266-63.614c-.085-1.65.443-3.273 1.481-4.558l40.034-49.545c3.047-3.773 1.208-9.431-3.473-10.691z" fill="#b94029"/></g></svg>
                                <p class="d-flex"><span>5</span> Coins</p>
                            </div>
                            <div class="search d-flex align-items-center">
                                <svg id="Layer_1" enable-background="new 0 0 496.999 496.999" height="512" viewBox="0 0 496.999 496.999" width="512" xmlns="http://www.w3.org/2000/svg"><g><path d="m106.265 358.913-95.282 127.102c14.644 14.644 38.389 14.644 53.033 0l84.675-84.675z" fill="#1b74d6"/><path d="m127.478 380.126-84.675 84.675c-14.644 14.644-28.892 24.141-31.82 21.213-14.644-14.644-14.644-38.389 0-53.033l84.675-84.675z" fill="#1e8aff"/><path d="m111.193 325.807h75v45h-75z" fill="#ffeac3" transform="matrix(.707 -.707 .707 .707 -202.739 207.159)"/><path d="m143.335 279.419-13.86 32.403c-1.205 2.818-.575 6.086 1.592 8.253l45.858 45.857c2.167 2.167 5.435 2.798 8.253 1.592l32.403-13.86z" fill="#ffd17e"/><path d="m159.299 390.734-21.213-21.213-21.213 21.213 21.213 21.213c5.858 5.858 15.355 5.858 21.213 0s5.858-15.355 0-21.213z" fill="#ffb739"/><path d="m138.086 390.734c5.858-5.858 5.858-15.355 0-21.213l-31.82-31.82c-5.858-5.858-15.355-5.858-21.213 0s-5.858 15.355 0 21.213l31.82 31.82c5.858 5.858 15.355 5.858 21.213 0z" fill="#ffd17e"/><circle cx="308.499" cy="188.501" fill="#ffb739" r="188.5"/><path d="m308.499 30.001v317c87.537 0 158.5-70.963 158.5-158.5s-70.963-158.5-158.5-158.5z" fill="#dbebff"/><path d="m436.999 188.501c0-87.537-57.531-158.5-128.5-158.5-87.537 0-158.5 70.963-158.5 158.5s70.963 158.5 158.5 158.5c70.969 0 128.5-70.963 128.5-158.5z" fill="#fff"/></g></svg>
                            </div>
                            <div class="serch-input d-flex align-items-center">
                                <input type="text" class="form-control rounded-pill" placeholder="..." aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <i class="fas fa-times"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>



        <main>
            @yield('front-content')
        </main>





        @if (Route::current()->uri() == '/')

            <!--start keep in touch -->
        <section id="contact" class="keep-touch text-center">
            <div class="container">
                <h3>
                    {{__('lang.LETSKEEPINTOUCH')}}
                </h3>
                <p>{{__('lang.WRITEYOURMESSAGE')}}</p>
                <form class="row g-3">
                    <div class="col-md">
                        <input type="text" class="form-control" placeholder="{{__('lang.SNAME')}}">
                    </div>
                    <div class="col-md">
                        <input type="email" class="form-control" placeholder="{{__('lang.SEMAIL')}}">
                    </div>
                    <div class="col-md">
                        <input type="text" class="form-control" placeholder="{{__('lang.SPHONE')}}">
                    </div>
                    <div class="form-group col-md-12">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="{{__('lang.SMESSAGE')}}"></textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-outline rounded-pill">{{__('lang.SUBMITNOW')}}</button>
                    </div>
                </form>
            </div>
        </section>

        @endif



    <!--start footer-->
    <footer>
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-4 col-md-6 d-flex align-items-center justify-content-center mb-5">
                    <div>
                        <h5>{{__('lang.LATESTPOSTS')}}</h5>
                        <form class="row g-3 text-center">
                            <div class="col-12">
                                <input type="email" class="form-control rounded-pill" id="inputEmail4" placeholder="{{__('lang.SEMAIL')}}">
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-outline rounded-pill">{{__('lang.SUBSCRIBE')}}</button>
                            </div>
                        </form>
                        <div class="social d-flex justify-content-center">
                            <a href="#"> <i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fas fa-envelope"></i> </a>
                            <a href="#"> <i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 contact-info d-flex align-items-center justify-content-center mb-5">
                    <div>
                        <h5>{{__('lang.CONTACTINFO')}}</h5>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-thumbtack"></i>
                            <p>1Badr City, 250 fadan Zone, plot 3</p>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-phone-alt"></i>
                            <p>01026660106-01026660108</p>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-phone-alt"></i>
                            <p>202-23108620/202-23108630</p>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-envelope"></i>
                            <p>info@ugpharma-eg.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-center justify-content-center ">
                    <div class="logo-footer">
                        <img src="{{asset('frontend/imgs/UG-1-logo-.png')}}" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <section class="copy-right d-flex align-items-center justify-content-center p-2 ">
        Copy Right &copy; 2020 Techunique - All Rights Reserved
    </section>
    <!--loading-->
    <div class="overlay">
        <div>
            <img src="{{asset('frontend/imgs/UG-1-logo-.png')}}" class="img-fluid" />
            <div class="text-center">loading
                <div class="spinner-grow" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
                <div class="spinner-grow" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
                <div class="spinner-grow" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
        </div>
    </div>


    <script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.js')}}"></script>
    <script src="{{asset('frontend/js/swiper-bundel.min.js')}}"></script>
    <script src="{{asset('frontend/js/text.js')}}"></script>

@yield('front-scripts')
</body>
</html>
