@extends('welcome.app')

@section('content')

<!-- Gallery Area Start -->
<div class="gallery-area pt-2">
    <div class="container mb-2">
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
        <div class = "row d-flex px-5 pb-5" id = "GameContainer">

        </div>
    </div>
</div>

@endsection
