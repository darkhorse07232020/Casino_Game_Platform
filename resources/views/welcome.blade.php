@extends('welcome.app')

@section('content')
<!-- Img Top Area Start -->
<div class="img-top-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6">
                <div class="top-img-single">
                    <img src="assets/welcome/images/1.png" class="img-fluid heightclass" alt="">
                    <div class="top-text">
                        <span><img src="assets/welcome/images/TOP copy 3.png" alt=""></span>
                        <a href="#" class="text-capitalize">Book of Ra deluxe</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6">
                <div class="top-img-single">
                    <img src="assets/welcome/images/2.png" class="img-fluid heightclass" alt="">
                    <div class="top-text">
                        <span><img src="assets/welcome/images/TOP copy 3.png" alt=""></span>
                        <a href="#" class="text-capitalize">Sizzling Hot deluxe</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6">
                <div class="top-img-single">
                    <img src="assets/welcome/images/3.png" class="img-fluid heightclass" alt="">
                    <div class="top-text">
                        <span><img src="assets/welcome/images/TOP copy 3.png" alt=""></span>
                        <a href="#" class="text-capitalize">Lucky Lady's Charm d...</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6">
                <div class="top-img-single">
                    <img src="assets/welcome/images/4.png" class="img-fluid heightclass" alt="">
                    <div class="top-text">
                        <span><img src="assets/welcome/images/TOP copy 3.png" alt=""></span>
                        <a href="#" class="text-capitalize">Lord of the Ocean</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6">
                <div class="top-img-single">
                    <img src="assets/welcome/images/5.png" class="img-fluid heightclass" alt="">
                    <div class="top-text">
                        <span><img src="assets/welcome/images/TOP copy 3.png" alt=""></span>
                        <a href="#" class="text-capitalize">Golden Sevens</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6">
                <div class="top-img-single">
                    <img src="assets/welcome/images/6.png" class="img-fluid heightclass" alt="">
                    <div class="top-text">
                        <span><img src="assets/welcome/images/TOP copy 3.png" alt=""></span>
                        <a href="#" class="text-capitalize">Ultra Hot deluxe</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Img Top Area End -->
<!-- Gallery Area Start -->
<div class="gallery-area">
    <div class="container mb-4">
        <div class="row">
            <div class="col-lg-10 col-md-8 col-sm-6 col-xs-6">
                <div class="gallery-menu-left text-uppercase">
                    <ul>
                        <li><a href="#" class="active">all</a></li>
                        <li><a href="#">top</a></li>
                        <li><a href="#">new</a></li>
                        <li><a href="#">highroller</a></li>
                        <li><a href="#">jackpot</a></li>
                        <li><a href="#">fruits</a></li>
                        <li><a href="#">featured</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6">
                <div class="gallery-menu-right float-right text-uppercase mr-2">
                    <ul>
                        <li><a href="#" class="active">popular</a></li>
                        <li><a href="#">a-z</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="max-height: 700px; overflow: auto">
        <div class = "row d-flex" id = "GameContainer">

        </div>
    </div>
</div>

@endsection
