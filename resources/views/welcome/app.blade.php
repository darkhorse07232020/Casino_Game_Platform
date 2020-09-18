<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <!-- Page Title -->
    <title>Casino</title>

    <!-- Favicon and Touch Icons -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="{{asset('dashboard/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/welcome/css/style.css')}}" rel="stylesheet" />

</head>
<body>

    <!-- Header Area Start -->
    <div class="header">
        <div class="container">
            <div class="row pt-2 pb-2">
                <div class="col-md-6">
                    <div class="logo">
                        <a href="index.html">logo</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="login-reg">
                        <ul>
                        @if (Route::has('login'))
                            @auth

                            @else
                            <li><a href="{{ route('login') }}" class="login">login</a></li>
                            @if (Route::has('register'))
                            <li><a href="{{ route('register') }}" class="register">register</a></li>
                            @endif
                            @endauth
                        @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-8">
                        <nav>
                            <ul>
                                <li><a href="#"><img src="assets/welcome/images/icon/1-sel.png" alt=""> slots</a></li>
                                <li><a href="#"><img src="assets/welcome/images/icon/2.png" alt=""> casino</a></li>
                                <li><a href="#"><img src="assets/welcome/images/icon/3.png" alt=""> poker</a></li>
                                <li><a href="#"><img src="assets/welcome/images/icon/4.png" alt=""> bingo</a></li>
                                <li><a href="#"><img src="assets/welcome/images/icon/5.png" alt=""> skill</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-4">
                        <div class="search">
                            <span><i class="fa fa-search"></i></span> <input type="search" placeholder="Search games">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="free-text text-center">
            <img src="assets/welcome/images/icon/1.png" alt=""><p>Free slots & slot machines online</p>
        </div>
        <div class="free-text text-center">
            <img src="assets/welcome/images/icon/1.png" alt=""><p>Free slots & slot machines online</p>
        </div>
    </div>
    <!-- Header Area End -->

    @yield('content')

    <!-- Brand Area Start -->
    <div class="brand-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-logo text-center">
                        <ul>
                            <li><a href="#"><img src="assets/welcome/images/paycardicon/Visa_2014_logo_detail.png" alt="Gallery Image"></a></li>
                            <li><a href="#"><img src="assets/welcome/images/paycardicon/mastercard_hrz_pos_300px_2x.png" alt="Gallery Image"></a></li>
                            <li><a href="#"><img src="assets/welcome/images/paycardicon/Skrill-Logo.png" alt="Gallery Image"></a></li>
                            <li><a href="#"><img src="assets/welcome/images/paycardicon/logo_paysafecard.png" alt="Gallery Image"></a></li>
                            <li><a href="#"><img src="assets/welcome/images/paycardicon/1280px-Neteller.png" alt="Gallery Image"></a></li>
                            <li><a href="#"><img src="assets/welcome/images/paycardicon/PayPal-Logo.png" alt="Gallery Image"></a></li>
                            <li><a href="#"><img src="assets/welcome/images/paycardicon/1280px-Giropay.png" alt="Gallery Image"></a></li>
                            <li><a href="#"><img src="assets/welcome/images/paycardicon/Layer 8.png" alt="Gallery Image"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand Area End -->
    <!-- Footer Menu Top Start -->
    <div class="footer-menu-top">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="footer-menu-single text-capitalize">
                        <h3>about us</h3>
                        <ul>
                            <li><a href="#">about us</a></li>
                            <li><a href="#">general terms & conditions</a></li>
                            <li><a href="#">privacy notice</a></li>
                            <li><a href="#">cookie policy</a></li>
                            <li><a href="#">newsletter & promotions</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="footer-menu-single text-capitalize">
                        <h3>help</h3>
                        <ul>
                            <li><a href="#">responsible gaming</a></li>
                            <li><a href="#">gameTwist help</a></li>
                            <li><a href="#">sitemap</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-menu-single text-capitalize email">
                        <h3>support</h3>
                        <ul>
                            <li><img src="assets/welcome/images/unnamed.png" alt=""></li>
                            <li><a href="#">support@gametwist.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-menu-single float-right">
                        <div class="language">
                            <li>Select Language: <a href="#"><img src="assets/welcome/images/langnew.png" alt=""> </a></li>
                        </div>
                        <div class="copyright">
                            <div class="copyright-text">
                                <p>2020 Funstage</p>
                                <p>Games powered by GREENTUBE</p>
                            </div>
                            <div class="copyright-img">
                                <span><img src="assets/welcome/images/18plus.png" alt=""></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Menu Top End -->
    <!-- Download Area Start -->
    <div class="download-area">
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="download-btn text-uppercase">
                        <div class="row">
                            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-4"><a href="#" class="down-app">download app</a></div>
                            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-4"><a href="#" class="apple"><img src="assets/welcome/images/apple.png" style="width:100%;height:90%" alt=""></a></div>
                            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-4"><a href="#"><img src="assets/welcome/images/play.png" style="width:100%" alt=""></a></div>
                            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-4">FOLLOW GAMETWIST</div>
                            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-4"><a href="#" class="fb"><i class="fa fa-facebook-square"></i> facebook</a></div>
                            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-4"><a href="#" class="tw"><i class="fa fa-twitter"></i> twitter</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </div>
    <!-- Download Area End -->
    <!-- Footer Area Start -->
    <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-text text-center">
                        <p>Gaming should be fun and nothing else. This is why you can only play with the virtual game currency 'Twists'. Fun should always be the most</p>
                        <p>important aspect of your gaming. It doesn’t matter whether you play online or in the casino, nerver play to make a 'quick buck' or if you cannot afford</p>
                        <p>it. If you are concerned about the gaming habits of another person please contact <a href="#">GamCare</a> or <a href="#">GamblersAnonymous</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Area End -->

</body>

<script src="{{asset('dashboard/assets/js/core/jquery.min.js')}}"></script>
<script src="{{asset('dashboard/assets/js/core/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/welcome/main.js')}}"></script>
</html>
