<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="css/product/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="css/product/datepicker/daterangepicker.css" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link href={{URL::asset('css/product/app.css')}} rel="stylesheet" media="all">
    <link href={{URL::asset('css/product/custom.css')}} rel="stylesheet" media="all">
    <title>Áo Sweater nam nữ Nhiều chữ SM01, Áo hoodie form rộng</title>
    <style>

    </style>
</head>

<body>
    <header>
        <div id="app">
        <nav class="contain navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a href="{{ route('home') }}">
                    <img src={{ URL::asset('svg/logo.svg') }} alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
   
    </header>
    <div class="product__page">
        <div class="product-briefing flex card _1j7uGn">
            <div class="_11Y_VZ">
                <div class="flex flex-column">
                    <div class="_11hT2s">
                        <div class="_2xhOj_">
                            <div class="_3Jd8Mq" style="display: none;">
                                <div class="shopee-image-placeholder _2NQS5E"><svg enable-background="new 0 0 54 61"
                                        viewBox="0 0 54 61" role="img"
                                        class="stardust-icon stardust-icon-shopee icon-shopee-tiny">
                                        <path stroke="none"
                                            d="M35.67,44.95 C35.34,47.70 33.67,49.91 31.09,51.01 C29.65,51.63 27.72,51.96 26.19,51.85 C23.81,51.76 21.57,51.18 19.50,50.12 C18.77,49.74 17.67,48.99 16.82,48.28 C16.61,48.10 16.58,47.99 16.73,47.78 C16.80,47.67 16.94,47.46 17.25,47.01 C17.71,46.34 17.76,46.26 17.81,46.18 C17.96,45.96 18.19,45.94 18.42,46.12 C18.45,46.14 18.45,46.14 18.47,46.16 C18.50,46.19 18.50,46.19 18.59,46.26 C18.68,46.33 18.74,46.37 18.76,46.39 C20.99,48.13 23.58,49.13 26.20,49.24 C29.84,49.19 32.46,47.55 32.93,45.03 C33.44,42.27 31.27,39.88 27.02,38.54 C25.69,38.13 22.33,36.78 21.71,36.42 C18.80,34.71 17.44,32.47 17.64,29.71 C17.93,25.88 21.49,23.03 25.98,23.01 C27.98,23.01 29.99,23.42 31.91,24.23 C32.60,24.52 33.81,25.18 34.23,25.50 C34.47,25.68 34.52,25.88 34.38,26.11 C34.31,26.24 34.18,26.44 33.91,26.87 L33.91,26.87 C33.55,27.44 33.54,27.46 33.46,27.59 C33.32,27.80 33.15,27.82 32.90,27.66 C30.84,26.28 28.55,25.58 26.04,25.53 C22.91,25.59 20.57,27.45 20.42,29.99 C20.38,32.28 22.09,33.95 25.80,35.22 C33.33,37.64 36.21,40.48 35.67,44.95 M26.37,5.43 C31.27,5.43 35.27,10.08 35.46,15.90 L17.29,15.90 C17.47,10.08 21.47,5.43 26.37,5.43 M51.74,17.00 C51.74,16.39 51.26,15.90 50.66,15.90 L50.64,15.90 L38.88,15.90 C38.59,8.21 33.10,2.08 26.37,2.08 C19.64,2.08 14.16,8.21 13.87,15.90 L2.07,15.90 C1.48,15.91 1.01,16.40 1.01,17.00 C1.01,17.03 1.01,17.05 1.01,17.08 L1.00,17.08 L2.68,54.14 C2.68,54.25 2.69,54.35 2.69,54.46 C2.69,54.48 2.70,54.50 2.70,54.53 L2.70,54.60 L2.71,54.61 C2.96,57.19 4.83,59.26 7.38,59.36 L7.38,59.37 L44.80,59.37 C44.81,59.37 44.83,59.37 44.85,59.37 C44.87,59.37 44.88,59.37 44.90,59.37 L44.98,59.37 L44.98,59.36 C47.57,59.29 49.67,57.19 49.89,54.58 L49.89,54.58 L49.90,54.54 C49.90,54.51 49.90,54.49 49.90,54.46 C49.90,54.39 49.91,54.33 49.91,54.26 L51.74,17.05 L51.74,17.05 C51.74,17.04 51.74,17.02 51.74,17.00">
                                        </path>
                                    </svg></div>
                                <div class="center _1G4Hrb"><video data-dashjs-player="true" class="_7ipvJr"
                                        autoplay=""></video></div>
                            </div>
                            <div class="aGIJCo">
                                <div class="_3rslob _1vc1W7"
                                    style="background-image: url(&quot;https://cf.shopee.vn/file/6b4322b28c69fa43acc54a88ac771c00&quot;); background-size: contain; background-repeat: no-repeat;">
                                </div>
                            </div>
                            <div class="_24bhyl"></div>
                        </div>
                    </div>
                    <div class="_2riwuv">
                        <div class="_1ivFgC">
                            <div class="_4yF4f1">
                                <div class="aGIJCo">
                                    <div class="_2UWcUi _1vc1W7"
                                        style="background-image: url(&quot;https://cf.shopee.vn/file/6b4322b28c69fa43acc54a88ac771c00_tn&quot;); background-size: contain; background-repeat: no-repeat;">
                                    </div>
                                </div>
                                <div class="_1KWA0E"></div>
                            </div>
                        </div>
                        <div class="_1ivFgC">
                            <div class="_4yF4f1">
                                <div class="aGIJCo">
                                    <div class="_2UWcUi _1vc1W7"
                                        style="background-image: url(&quot;https://cf.shopee.vn/file/ac580ad368f8125f270b652023bc155b_tn&quot;); background-size: contain; background-repeat: no-repeat;">
                                    </div>
                                </div>
                                <div class=""></div>
                            </div>
                        </div>
                        <div class="_1ivFgC">
                            <div class="_4yF4f1">
                                <div class="aGIJCo">
                                    <div class="_2UWcUi _1vc1W7"
                                        style="background-image: url(&quot;https://cf.shopee.vn/file/9acb9c726d071bc75c0ee5ad157971e4_tn&quot;); background-size: contain; background-repeat: no-repeat;">
                                    </div>
                                </div>
                                <div class=""></div>
                            </div>
                        </div>
                        <div class="_1ivFgC">
                            <div class="_4yF4f1">
                                <div class="aGIJCo">
                                    <div class="_2UWcUi _1vc1W7"
                                        style="background-image: url(&quot;https://cf.shopee.vn/file/74f2e09d566dfb6ae9b65dade506f782_tn&quot;); background-size: contain; background-repeat: no-repeat;">
                                    </div>
                                </div>
                                <div class=""></div>
                            </div>
                        </div>
                        <div class="_1ivFgC">
                            <div class="_4yF4f1">
                                <div class="aGIJCo">
                                    <div class="_2UWcUi _1vc1W7"
                                        style="background-image: url(&quot;https://cf.shopee.vn/file/2d0191991877c51505d73d18cf22edf6_tn&quot;); background-size: contain; background-repeat: no-repeat;">
                                    </div>
                                </div>
                                <div class=""></div>
                            </div>
                        </div><button class="shopee-icon-button _3n5_5z E7Gh7F" tabindex="-1"><svg
                                enable-background="new 0 0 13 20" viewBox="0 0 13 20" x="0" y="0"
                                class="shopee-svg-icon icon-arrow-left-bold">
                                <polygon points="4.2 10 12.1 2.1 10 -.1 1 8.9 -.1 10 1 11 10 20 12.1 17.9"></polygon>
                            </svg></button><button class="shopee-icon-button _3n5_5z _2YuwlO" tabindex="-1"><svg
                                enable-background="new 0 0 13 21" viewBox="0 0 13 21" x="0" y="0"
                                class="shopee-svg-icon icon-arrow-right-bold">
                                <polygon points="11.1 9.9 2.1 .9 -.1 3.1 7.9 11 -.1 18.9 2.1 21 11.1 12 12.1 11">
                                </polygon>
                            </svg></button>
                    </div>
                </div>
            </div>
            <div class="flex flex-auto _3qq4y7">
                <div class="flex-auto flex-column  _4QIZZo" style="">
                    <div class="_3g8My-"><span>Áo Sweater nam nữ Nhiều chữ SM01, Áo hoodie form rộng unisex Hoàng Giang
                            Shop</span></div>
                    <div class="flex _28iFbX">
                        <div class="flex _1GknPu">
                            <div class="_3uBhVI URjL1D">5.0</div>
                            <div class="oMTlt6">
                                <div class="shopee-rating-stars">
                                    <div class="shopee-rating-stars__stars">
                                        <div class="shopee-rating-stars__star-wrapper">
                                            <div class="shopee-rating-stars__lit" style="width: 100%;"><svg
                                                    enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0"
                                                    class="shopee-svg-icon shopee-rating-stars__primary-star icon-rating-solid">
                                                    <polygon
                                                        points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-miterlimit="10"></polygon>
                                                </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15"
                                                x="0" y="0"
                                                class="shopee-svg-icon shopee-rating-stars__hollow-star icon-rating">
                                                <polygon fill="none"
                                                    points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="10"></polygon>
                                            </svg>
                                        </div>
                                        <div class="shopee-rating-stars__star-wrapper">
                                            <div class="shopee-rating-stars__lit" style="width: 100%;"><svg
                                                    enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0"
                                                    class="shopee-svg-icon shopee-rating-stars__primary-star icon-rating-solid">
                                                    <polygon
                                                        points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-miterlimit="10"></polygon>
                                                </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15"
                                                x="0" y="0"
                                                class="shopee-svg-icon shopee-rating-stars__hollow-star icon-rating">
                                                <polygon fill="none"
                                                    points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="10"></polygon>
                                            </svg>
                                        </div>
                                        <div class="shopee-rating-stars__star-wrapper">
                                            <div class="shopee-rating-stars__lit" style="width: 100%;"><svg
                                                    enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0"
                                                    class="shopee-svg-icon shopee-rating-stars__primary-star icon-rating-solid">
                                                    <polygon
                                                        points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-miterlimit="10"></polygon>
                                                </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15"
                                                x="0" y="0"
                                                class="shopee-svg-icon shopee-rating-stars__hollow-star icon-rating">
                                                <polygon fill="none"
                                                    points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="10"></polygon>
                                            </svg>
                                        </div>
                                        <div class="shopee-rating-stars__star-wrapper">
                                            <div class="shopee-rating-stars__lit" style="width: 100%;"><svg
                                                    enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0"
                                                    class="shopee-svg-icon shopee-rating-stars__primary-star icon-rating-solid">
                                                    <polygon
                                                        points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-miterlimit="10"></polygon>
                                                </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15"
                                                x="0" y="0"
                                                class="shopee-svg-icon shopee-rating-stars__hollow-star icon-rating">
                                                <polygon fill="none"
                                                    points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="10"></polygon>
                                            </svg>
                                        </div>
                                        <div class="shopee-rating-stars__star-wrapper">
                                            <div class="shopee-rating-stars__lit" style="width: 100%;"><svg
                                                    enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0"
                                                    class="shopee-svg-icon shopee-rating-stars__primary-star icon-rating-solid">
                                                    <polygon
                                                        points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-miterlimit="10"></polygon>
                                                </svg></div><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15"
                                                x="0" y="0"
                                                class="shopee-svg-icon shopee-rating-stars__hollow-star icon-rating">
                                                <polygon fill="none"
                                                    points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="10"></polygon>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex _1GknPu">
                            <div class="_3uBhVI">5</div>
                            <div class="oMTlt6">đánh giá</div>
                        </div>
                        <div class="flex voPlNU">
                            <div class="_3b2Btx">2,5k</div>
                            <div class="_3hic1u">đã bán</div>
                        </div>
                    </div>
                    <div style="margin-top: 10px;">
                        <div class="flex flex-column">
                            <div class="flex flex-column _1900SS">
                                <div class="flex items-center">
                                    <div class="flex items-center _1V_Jxg">
                                        <div class="_2Csw3W">₫3.000</div>
                                        <div class="flex items-center">
                                            <div class="_2v0Hgx">₫1.500</div>
                                            <div class="_1kpF5Y">50% giảm</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="_7c-I_e">
                        <div class="flex flex-column">
                            <div class="flex _3qYU_y _1W8scW"><label class="koZBMj">Vận chuyển</label>
                                <div class="_2pq-2z k2VzJg">
                                    <div class="flex flex-row">
                                        <div class="_3RF-NF"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15"
                                                x="0" y="0" class="shopee-svg-icon icon-free-shipping-line">
                                                <g>
                                                    <line fill="none" stroke-linejoin="round" stroke-miterlimit="10"
                                                        x1="8.6" x2="4.2" y1="9.8" y2="9.8"></line>
                                                    <circle cx="3" cy="11.2" fill="none" r="2" stroke-miterlimit="10">
                                                    </circle>
                                                    <circle cx="10" cy="11.2" fill="none" r="2" stroke-miterlimit="10">
                                                    </circle>
                                                    <line fill="none" stroke-miterlimit="10" x1="10.5" x2="14.4"
                                                        y1="7.3" y2="7.3"></line>
                                                    <polyline fill="none" points="1.5 9.8 .5 9.8 .5 1.8 10 1.8 10 9.1"
                                                        stroke-linejoin="round" stroke-miterlimit="10"></polyline>
                                                    <polyline fill="none" points="9.9 3.8 14 3.8 14.5 10.2 11.9 10.2"
                                                        stroke-linejoin="round" stroke-miterlimit="10"></polyline>
                                                </g>
                                            </svg></div>
                                        <div class="flex flex-column">
                                            <div class="flex items-center vJ8y-b">
                                                <div class="_2Dz7kG">Vận chuyển tới</div>
                                                <div class="flex">
                                                    <div class="flex items-center">
                                                        <div class="_1R7LAU">
                                                            <div class="flex items-center"><span class="_1uIhvN"> Huyện
                                                                    Ba Vì</span><svg enable-background="new 0 0 11 11"
                                                                    viewBox="0 0 11 11" x="0" y="0"
                                                                    class="shopee-svg-icon icon-arrow-down">
                                                                    <g>
                                                                        <path
                                                                            d="m11 2.5c0 .1 0 .2-.1.3l-5 6c-.1.1-.3.2-.4.2s-.3-.1-.4-.2l-5-6c-.2-.2-.1-.5.1-.7s.5-.1.7.1l4.6 5.5 4.6-5.5c.2-.2.5-.2.7-.1.1.1.2.3.2.4z">
                                                                        </path>
                                                                    </g>
                                                                </svg></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="vJ8y-b">
                                                <div class="_2Dz7kG">phí vận chuyển</div>
                                                <div>
                                                    <div class="shopee-drawer" id="pc-drawer-id-0" tabindex="0">
                                                        <div class="flex items-center _-3xNiX">Không hỗ trợ<svg
                                                                enable-background="new 0 0 11 11" viewBox="0 0 11 11"
                                                                x="0" y="0" class="shopee-svg-icon icon-arrow-down">
                                                                <g>
                                                                    <path
                                                                        d="m11 2.5c0 .1 0 .2-.1.3l-5 6c-.1.1-.3.2-.4.2s-.3-.1-.4-.2l-5-6c-.2-.2-.1-.5.1-.7s.5-.1.7.1l4.6 5.5 4.6-5.5c.2-.2.5-.2.7-.1.1.1.2.3.2.4z">
                                                                    </path>
                                                                </g>
                                                            </svg></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex _3qYU_y _6Orsg5">
                                <div class="flex flex-column">
                                    <div class="flex items-center L6Jueq">
                                        <div class="koZBMj">Số lượng</div>
                                        <div class="flex items-center">
                                            <div style="margin-right: 15px;">
                                                <div class="_28qt-B shopee-input-quantity"><button class="_14flVw"><svg
                                                            enable-background="new 0 0 10 10" viewBox="0 0 10 10" x="0"
                                                            y="0" class="shopee-svg-icon">
                                                            <polygon
                                                                points="4.5 4.5 3.5 4.5 0 4.5 0 5.5 3.5 5.5 4.5 5.5 10 5.5 10 4.5">
                                                            </polygon>
                                                        </svg></button><input class="_14flVw z4c5Da" type="text"
                                                        role="spinbutton" aria-valuenow="1" value="1"><button
                                                        class="_14flVw"><svg enable-background="new 0 0 10 10"
                                                            viewBox="0 0 10 10" x="0" y="0"
                                                            class="shopee-svg-icon icon-plus-sign">
                                                            <polygon
                                                                points="10 4.5 5.5 4.5 5.5 0 4.5 0 4.5 4.5 0 4.5 0 5.5 4.5 5.5 4.5 10 5.5 10 5.5 5.5 10 5.5">
                                                            </polygon>
                                                        </svg></button></div>
                                            </div>
                                            <div>1193 sản phẩm có sẵn</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="margin-top: 15px;">
                        <div class="j1JSoD">
                            <div class="QcT1pP"><button type="button" class="btn btn-tinted btn--l rvHxix _3t_iHy"
                                    aria-disabled="false"><svg enable-background="new 0 0 15 15" viewBox="0 0 15 15"
                                        x="0" y="0" class="shopee-svg-icon _32Ho0Q icon-add-to-cart">
                                        <g>
                                            <g>
                                                <polyline fill="none"
                                                    points=".5 .5 2.7 .5 5.2 11 12.4 11 14.5 3.5 3.7 3.5"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-miterlimit="10"></polyline>
                                                <circle cx="6" cy="13.5" r="1" stroke="none"></circle>
                                                <circle cx="11.5" cy="13.5" r="1" stroke="none"></circle>
                                            </g>
                                            <line fill="none" stroke-linecap="round" stroke-miterlimit="10" x1="7.5"
                                                x2="10.5" y1="7" y2="7"></line>
                                            <line fill="none" stroke-linecap="round" stroke-miterlimit="10" x1="9"
                                                x2="9" y1="8.5" y2="5.5"></line>
                                        </g>
                                    </svg><span>thêm vào giỏ hàng</span></button><button type="button"
                                    class="btn btn-solid-primary btn--l rvHxix" aria-disabled="false">Mua ngay</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="product__comment">
            <div class="product-ratings" data-nosnippet="true">
            @if($message = Session::get('success'))
                           <div class="alert alert-success">
                             <p>{{$message}}</p>
                          </div>
            @endif
                <div class="product-ratings__header">ĐÁNH GIÁ SẢN PHẨM</div>
                <div class="product-ratings__list">
                    <div class="shopee-product-comment-list">
                        <div class="shopee-product-rating">
                            <div class="shopee-product-rating__avatar">
                                <div class="shopee-avatar">
                                    <div class="shopee-avatar__placeholder"><svg enable-background="new 0 0 15 15"
                                            viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon icon-headshot">
                                            <g>
                                                <circle cx="7.5" cy="4.5" fill="none" r="3.8" stroke-miterlimit="10">
                                                </circle>
                                                <path d="m1.5 14.2c0-3.3 2.7-6 6-6s6 2.7 6 6" fill="none"
                                                    stroke-linecap="round" stroke-miterlimit="10"></path>
                                            </g>
                                        </svg></div>
                                </div>
                            </div>
                            <div class="shopee-product-rating__main">
                                <div class="shopee-product-rating__author-name">binnt23</div>
                                <div class="repeat-purchase-con">
                                 
                                </div><span class="shopee-product-rating__variation">Phân loại hàng: Be</span>
                                <div class="_3NrdYc">mình khuyến khích mn nên mua lắm nhaa:33 mình mua lúc đang sale vs
                                    1 chiếc áo như này là quá rẻ luôn ạ, áo đẹp form rộng lắm mình cứ sợ nó nhỏ nhưng mà
                                    mình 1m55 trùm mông nha, áo xịn cực mn nên mua nhaaa!</div>
                                <div class="shopee-product-rating__image-list-wrapper">
                                    <div class="rating-media-list">
                                        <div class="rating-media-list__container">
                                            <div
                                                class="rating-media-list__image-wrapper rating-media-list__image-wrapper--inactive">
                                                <div class="shopee-rating-media-list-image__wrapper">
                                                    <div class="shopee-rating-media-list-image__place-holder"><svg
                                                            enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0"
                                                            y="0" class="shopee-svg-icon icon-loading-image">
                                                            <g>
                                                                <rect fill="none" height="8" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-miterlimit="10"
                                                                    width="10" x="1" y="4.5"></rect>
                                                                <line fill="none" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-miterlimit="10"
                                                                    x1="1" x2="11" y1="6.5" y2="6.5"></line>
                                                                <rect fill="none" height="3" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-miterlimit="10"
                                                                    width="3" x="11" y="6.5"></rect>
                                                                <line fill="none" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-miterlimit="10"
                                                                    x1="1" x2="11" y1="14.5" y2="14.5"></line>
                                                                <line fill="none" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-miterlimit="10"
                                                                    x1="6" x2="6" y1=".5" y2="3"></line>
                                                                <line fill="none" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-miterlimit="10"
                                                                    x1="3.5" x2="3.5" y1="1" y2="3"></line>
                                                                <line fill="none" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-miterlimit="10"
                                                                    x1="8.5" x2="8.5" y1="1" y2="3"></line>
                                                            </g>
                                                        </svg></div>
                                                    <div class="shopee-rating-media-list-image__content"
                                                        style="background-image: url(&quot;https://1500000774.vod2.myqcloud.com/14092670vodsgp1500000774/9bc564d9387702295069187424/387702295069187425.jpg&quot;);">
                                                        <div class="shopee-rating-media-list-image__content--blur">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="rating-media-list__video-cover"><svg width="23" height="18"
                                                        viewBox="0 0 23 18" fill="none">
                                                        <g filter="url(#filter0_d)">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M5 4C4.44772 4 4 4.44772 4 5V13C4 13.5523 4.44772 14 5 14H13C13.5523 14 14 13.5523 14 13V5C14 4.44772 13.5523 4 13 4H5ZM11.5 9C11.5 10.3807 10.3807 11.5 9 11.5C7.61929 11.5 6.5 10.3807 6.5 9C6.5 7.61929 7.61929 6.5 9 6.5C10.3807 6.5 11.5 7.61929 11.5 9ZM9 10.6667C9.92047 10.6667 10.6667 9.92047 10.6667 9C10.6667 8.07952 9.92047 7.33333 9 7.33333C8.07953 7.33333 7.33333 8.07952 7.33333 9C7.33333 9.92047 8.07953 10.6667 9 10.6667ZM18.1667 4.83333L14.8333 7.33306V10.6667L18.1667 13.1667V4.83333Z"
                                                                fill="white"></path>
                                                        </g>
                                                        <defs>
                                                            <filter id="filter0_d" x="0" y="0" width="22.1667"
                                                                height="18" filterUnits="userSpaceOnUse"
                                                                color-interpolation-filters="sRGB">
                                                                <feFlood flood-opacity="0" result="BackgroundImageFix">
                                                                </feFlood>
                                                                <feColorMatrix in="SourceAlpha" type="matrix"
                                                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0">
                                                                </feColorMatrix>
                                                                <feOffset></feOffset>
                                                                <feGaussianBlur stdDeviation="2"></feGaussianBlur>
                                                                <feColorMatrix type="matrix"
                                                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.26 0">
                                                                </feColorMatrix>
                                                                <feBlend mode="normal" in2="BackgroundImageFix"
                                                                    result="effect1_dropShadow"></feBlend>
                                                                <feBlend mode="normal" in="SourceGraphic"
                                                                    in2="effect1_dropShadow" result="shape"></feBlend>
                                                            </filter>
                                                        </defs>
                                                    </svg><span>0:13</span></div>
                                            </div>
                                            <div
                                                class="rating-media-list__image-wrapper rating-media-list__image-wrapper--inactive">
                                                <div class="shopee-rating-media-list-image__wrapper">
                                                    <div class="shopee-rating-media-list-image__place-holder"><svg
                                                            enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0"
                                                            y="0" class="shopee-svg-icon icon-loading-image">
                                                            <g>
                                                                <rect fill="none" height="8" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-miterlimit="10"
                                                                    width="10" x="1" y="4.5"></rect>
                                                                <line fill="none" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-miterlimit="10"
                                                                    x1="1" x2="11" y1="6.5" y2="6.5"></line>
                                                                <rect fill="none" height="3" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-miterlimit="10"
                                                                    width="3" x="11" y="6.5"></rect>
                                                                <line fill="none" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-miterlimit="10"
                                                                    x1="1" x2="11" y1="14.5" y2="14.5"></line>
                                                                <line fill="none" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-miterlimit="10"
                                                                    x1="6" x2="6" y1=".5" y2="3"></line>
                                                                <line fill="none" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-miterlimit="10"
                                                                    x1="3.5" x2="3.5" y1="1" y2="3"></line>
                                                                <line fill="none" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-miterlimit="10"
                                                                    x1="8.5" x2="8.5" y1="1" y2="3"></line>
                                                            </g>
                                                        </svg></div>
                                                    <div class="shopee-rating-media-list-image__content"
                                                        style="background-image: url(&quot;https://cf.shopee.vn/file/7ceb47072e9195f27f8b9811d0078b96_tn&quot;);">
                                                        <div class="shopee-rating-media-list-image__content--blur">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="rating-media-list__image-wrapper rating-media-list__image-wrapper--inactive">
                                                <div class="shopee-rating-media-list-image__wrapper">
                                                    <div class="shopee-rating-media-list-image__place-holder"><svg
                                                            enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0"
                                                            y="0" class="shopee-svg-icon icon-loading-image">
                                                            <g>
                                                                <rect fill="none" height="8" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-miterlimit="10"
                                                                    width="10" x="1" y="4.5"></rect>
                                                                <line fill="none" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-miterlimit="10"
                                                                    x1="1" x2="11" y1="6.5" y2="6.5"></line>
                                                                <rect fill="none" height="3" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-miterlimit="10"
                                                                    width="3" x="11" y="6.5"></rect>
                                                                <line fill="none" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-miterlimit="10"
                                                                    x1="1" x2="11" y1="14.5" y2="14.5"></line>
                                                                <line fill="none" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-miterlimit="10"
                                                                    x1="6" x2="6" y1=".5" y2="3"></line>
                                                                <line fill="none" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-miterlimit="10"
                                                                    x1="3.5" x2="3.5" y1="1" y2="3"></line>
                                                                <line fill="none" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-miterlimit="10"
                                                                    x1="8.5" x2="8.5" y1="1" y2="3"></line>
                                                            </g>
                                                        </svg></div>
                                                    <div class="shopee-rating-media-list-image__content"
                                                        style="background-image: url(&quot;https://cf.shopee.vn/file/60b9493083cfa9c0a4015b6d7568f7b4_tn&quot;);">
                                                        <div class="shopee-rating-media-list-image__content--blur">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="rating-media-list__image-wrapper rating-media-list__image-wrapper--inactive">
                                                <div class="shopee-rating-media-list-image__wrapper">
                                                    <div class="shopee-rating-media-list-image__place-holder"><svg
                                                            enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0"
                                                            y="0" class="shopee-svg-icon icon-loading-image">
                                                            <g>
                                                                <rect fill="none" height="8" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-miterlimit="10"
                                                                    width="10" x="1" y="4.5"></rect>
                                                                <line fill="none" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-miterlimit="10"
                                                                    x1="1" x2="11" y1="6.5" y2="6.5"></line>
                                                                <rect fill="none" height="3" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-miterlimit="10"
                                                                    width="3" x="11" y="6.5"></rect>
                                                                <line fill="none" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-miterlimit="10"
                                                                    x1="1" x2="11" y1="14.5" y2="14.5"></line>
                                                                <line fill="none" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-miterlimit="10"
                                                                    x1="6" x2="6" y1=".5" y2="3"></line>
                                                                <line fill="none" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-miterlimit="10"
                                                                    x1="3.5" x2="3.5" y1="1" y2="3"></line>
                                                                <line fill="none" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-miterlimit="10"
                                                                    x1="8.5" x2="8.5" y1="1" y2="3"></line>
                                                            </g>
                                                        </svg></div>
                                                    <div class="shopee-rating-media-list-image__content"
                                                        style="background-image: url(&quot;https://cf.shopee.vn/file/8791e32ac08432703c1104c77b80695d_tn&quot;);">
                                                        <div class="shopee-rating-media-list-image__content--blur">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="rating-media-list__image-wrapper rating-media-list__image-wrapper--inactive">
                                                <div class="shopee-rating-media-list-image__wrapper">
                                                    <div class="shopee-rating-media-list-image__place-holder"><svg
                                                            enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0"
                                                            y="0" class="shopee-svg-icon icon-loading-image">
                                                            <g>
                                                                <rect fill="none" height="8" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-miterlimit="10"
                                                                    width="10" x="1" y="4.5"></rect>
                                                                <line fill="none" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-miterlimit="10"
                                                                    x1="1" x2="11" y1="6.5" y2="6.5"></line>
                                                                <rect fill="none" height="3" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-miterlimit="10"
                                                                    width="3" x="11" y="6.5"></rect>
                                                                <line fill="none" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-miterlimit="10"
                                                                    x1="1" x2="11" y1="14.5" y2="14.5"></line>
                                                                <line fill="none" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-miterlimit="10"
                                                                    x1="6" x2="6" y1=".5" y2="3"></line>
                                                                <line fill="none" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-miterlimit="10"
                                                                    x1="3.5" x2="3.5" y1="1" y2="3"></line>
                                                                <line fill="none" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-miterlimit="10"
                                                                    x1="8.5" x2="8.5" y1="1" y2="3"></line>
                                                            </g>
                                                        </svg></div>
                                                    <div class="shopee-rating-media-list-image__content"
                                                        style="background-image: url(&quot;https://cf.shopee.vn/file/8e2ff3384eee7c51bf379f7b419871eb_tn&quot;);">
                                                        <div class="shopee-rating-media-list-image__content--blur">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="rating-media-list__image-wrapper rating-media-list__image-wrapper--inactive">
                                                <div class="shopee-rating-media-list-image__wrapper">
                                                    <div class="shopee-rating-media-list-image__place-holder"><svg
                                                            enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0"
                                                            y="0" class="shopee-svg-icon icon-loading-image">
                                                            <g>
                                                                <rect fill="none" height="8" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-miterlimit="10"
                                                                    width="10" x="1" y="4.5"></rect>
                                                                <line fill="none" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-miterlimit="10"
                                                                    x1="1" x2="11" y1="6.5" y2="6.5"></line>
                                                                <rect fill="none" height="3" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-miterlimit="10"
                                                                    width="3" x="11" y="6.5"></rect>
                                                                <line fill="none" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-miterlimit="10"
                                                                    x1="1" x2="11" y1="14.5" y2="14.5"></line>
                                                                <line fill="none" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-miterlimit="10"
                                                                    x1="6" x2="6" y1=".5" y2="3"></line>
                                                                <line fill="none" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-miterlimit="10"
                                                                    x1="3.5" x2="3.5" y1="1" y2="3"></line>
                                                                <line fill="none" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-miterlimit="10"
                                                                    x1="8.5" x2="8.5" y1="1" y2="3"></line>
                                                            </g>
                                                        </svg></div>
                                                    <div class="shopee-rating-media-list-image__content"
                                                        style="background-image: url(&quot;https://cf.shopee.vn/file/9b696706cfca59008c4aff15e8e795c0_tn&quot;);">
                                                        <div class="shopee-rating-media-list-image__content--blur">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rating-media-list__zoomed-image">
                                            <div class="rating-media-list-image-carousel"
                                                style="transition: all 0ms ease 0s;">
                                                <div class="rating-media-list-image-carousel__item-list-wrapper">
                                                    <ul class="rating-media-list-image-carousel__item-list">
                                                        <li class="rating-media-list-image-carousel__item rating-media-list-image-carousel__item--fluid"
                                                            style="padding: 0px 0.625rem;">
                                                            <div class="_2Y8kYP"><video
                                                                    src="https://play-tx.vod.shopee.com/c3/98934353/103/AnoykKEA2EVvVvohpgEJAEY.mp4"
                                                                    controls=""
                                                                    class="_2u8YwW rating-media-list__zoomed-video-item"
                                                                    controlslist="nodownload"></video></div>
                                                        </li>
                                                        <li class="rating-media-list-image-carousel__item rating-media-list-image-carousel__item--fluid"
                                                            style="padding: 0px 0.625rem;"><img
                                                                class="rating-media-list__zoomed-image-item"
                                                                src="https://cf.shopee.vn/file/7ceb47072e9195f27f8b9811d0078b96">
                                                        </li>
                                                        <li class="rating-media-list-image-carousel__item rating-media-list-image-carousel__item--fluid"
                                                            style="padding: 0px 0.625rem;"><img
                                                                class="rating-media-list__zoomed-image-item"
                                                                src="https://cf.shopee.vn/file/60b9493083cfa9c0a4015b6d7568f7b4">
                                                        </li>
                                                        <li class="rating-media-list-image-carousel__item rating-media-list-image-carousel__item--fluid"
                                                            style="padding: 0px 0.625rem;"><img
                                                                class="rating-media-list__zoomed-image-item"
                                                                src="https://cf.shopee.vn/file/8791e32ac08432703c1104c77b80695d">
                                                        </li>
                                                        <li class="rating-media-list-image-carousel__item rating-media-list-image-carousel__item--fluid"
                                                            style="padding: 0px 0.625rem;"><img
                                                                class="rating-media-list__zoomed-image-item"
                                                                src="https://cf.shopee.vn/file/8e2ff3384eee7c51bf379f7b419871eb">
                                                        </li>
                                                        <li class="rating-media-list-image-carousel__item rating-media-list-image-carousel__item--fluid"
                                                            style="padding: 0px 0.625rem;"><img
                                                                class="rating-media-list__zoomed-image-item"
                                                                src="https://cf.shopee.vn/file/9b696706cfca59008c4aff15e8e795c0">
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-media-list-carousel-arrow rating-media-list-carousel-arrow--prev rating-media-list-carousel-arrow--hint rating-media-list-carousel-arrow--hidden"
                                                    role="button" tabindex="0"
                                                    style="opacity: 1; visibility: hidden; transform: translateX(calc(-50% + 0px));">
                                                    <svg enable-background="new 0 0 13 20" viewBox="0 0 13 20" x="0"
                                                        y="0" class="shopee-svg-icon icon-arrow-left-bold">
                                                        <polygon
                                                            points="4.2 10 12.1 2.1 10 -.1 1 8.9 -.1 10 1 11 10 20 12.1 17.9">
                                                        </polygon>
                                                    </svg></div>
                                                <div class="rating-media-list-carousel-arrow rating-media-list-carousel-arrow--next rating-media-list-carousel-arrow--hint"
                                                    role="button" tabindex="0"
                                                    style="opacity: 1; visibility: visible; transform: translateX(calc(50% - 0px));">
                                                    <svg enable-background="new 0 0 13 21" viewBox="0 0 13 21" x="0"
                                                        y="0" class="shopee-svg-icon icon-arrow-right-bold">
                                                        <polygon
                                                            points="11.1 9.9 2.1 .9 -.1 3.1 7.9 11 -.1 18.9 2.1 21 11.1 12 12.1 11">
                                                        </polygon>
                                                    </svg></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shopee-product-rating__time">2022-01-26 15:59</div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="product-ratings__list">
                    @foreach ($comments as $comment)
                    <div class="shopee-product-comment-list">
                        <div class="shopee-product-rating">
                            <div class="shopee-product-rating__avatar">
                                <div class="shopee-avatar">
                                    <div class="shopee-avatar__placeholder"><svg enable-background="new 0 0 15 15"
                                            viewBox="0 0 15 15" x="0" y="0" class="shopee-svg-icon icon-headshot">
                                            <g>
                                                <circle cx="7.5" cy="4.5" fill="none" r="3.8" stroke-miterlimit="10">
                                                </circle>
                                                <path d="m1.5 14.2c0-3.3 2.7-6 6-6s6 2.7 6 6" fill="none"
                                                    stroke-linecap="round" stroke-miterlimit="10"></path>
                                            </g>
                                        </svg></div>
                                </div>
                            </div>
                            <div class="shopee-product-rating__main">
                                <div class="shopee-product-rating__author-name">{{$comment->username}}</div>
                                <div class="repeat-purchase-con">
                                </div><span class="shopee-product-rating__variation">Phân loại hàng: Be</span>
                                <div class="_3NrdYc">{{$comment->comment}}</div>
                                <div class="shopee-product-rating__time">{{$comment->created_at}}</div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <form method="POST" action="{{ route('comments.store') }}">
                    @csrf
                    <div class="row form-group">
                        <div class="col-12">
                            <label style="font-size:16px; margin:30px 0 20px 0" for="exampleFormControlTextarea1">Bình luận</label>
                                <textarea name="content" class="form-control col-12" id="exampleFormControlTextarea1" rows="4"></textarea>
                        </div>
                        <div style=" margin-top: 20px;"class="p-t-15">
                            <button class="btn btn--blue" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>