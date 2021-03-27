@extends('frontend.app')

@section('content')
    <section class="hero-area hero-slider-3">
            <div class="sb-slick-slider" data-slick-setting='{
                                                        "autoplay": true,
                                                        "autoplaySpeed": 8000,
                                                        "slidesToShow": 1,
                                                        "dots":true
                                                        }'>
                <div class="single-slide bg-image  bg-overlay--dark" data-bg="public/theme/frontend/image/bg-images/home-3-slider-1.jpg">
                    <div class="container">
                        <div class="home-content text-center">
                            <div class="row justify-content-end">
                                <div class="col-lg-6">
                                    <h1>Beautifully Designed</h1>
                                    <h2>Cover up front of book and
                                        <br>leave summary</h2>
                                    <a href="shop-grid.html" class="btn btn--yellow">
                                        Shop Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slide bg-image  bg-overlay--dark" data-bg="public/theme/frontend/image/bg-images/home-3-slider-2.jpg">
                    <div class="container">
                        <div class="home-content pl--30">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h1>I Love This Idea!</h1>
                                    <h2>Cover up front of book and
                                        <br>leave summary</h2>
                                    <a href="shop-grid.html" class="btn btn--yellow">
                                        Shop Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
         <section class="pt--30 section-margin">
            <h2 class="sr-only">Category Gallery Section</h2>
            <div class="container">
                <div class="category-gallery-block">
                    <a href="#" class="single-block hr-large">
                        <img src="public/theme/frontend/image/others/cat-gal-large.png" alt="">
                    </a>
                    <div class="single-block inner-block-wrapper">
                        <a href="#" class="single-image mid-image">
                            <img src="public/theme/frontend/image/others/cat-gal-mid.png" alt="">
                        </a>
                        <a href="#" class="single-image small-image">
                            <img src="public/theme/frontend/image/others/cat-gal-small.png" alt="">
                        </a>
                        <a href="#" class="single-image small-image">
                            <img src="public/theme/frontend/image/others/cat-gal-small-2.jpg" alt="">
                        </a>
                        <a href="#" class="single-image mid-image">
                            <img src="public/theme/frontend/image/others/cat-gal-mid-2.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </section>
@endsection
