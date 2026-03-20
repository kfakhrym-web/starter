@extends('layouts.app')
@section('content')
        <main>
            <section class="promo-section">
                <div class="container-fluid">
                    <div class="row g-2 g-md-3">
                        <div class="col-12 col-md-5 col-xl-6 main-promo">
                            <div id="carouselExampleIndicators" class="carousel slide">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="img-container">
                                            <img src="{{asset('images/main-promo1.jpg')}}" class="d-block w-100" alt="promo1">
                                        </div>
                                        <div class="main-promo-content">
                                            <span>SUPERCHARGED FOR PROS</span>
                                            <h2>iPad S13+ Pro.</h2>
                                            <p>From $999.00 or $41.62/mo<br>for 24 mo. Footnote*</p>
                                            <button>BUY NOW</button>
                                        </div>
                                        <div class="carousel-caption d-none d-md-block"></div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="img-container">
                                            <img src="{{asset('images/main-promo2.jpg')}}" class="d-block w-100" alt="promo2">
                                        </div>
                                        <div class="main-promo-content">
                                            <span>supercharged for pros</span>
                                            <h2>special sale</h2>
                                            <p>From $999.00 or $41.62/mo.<br>for 24 mo. Footnote*</p>
                                            <button>buy now</button>
                                        </div>
                                        <div class="carousel-caption d-none d-md-block"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-7 col-xl-6">
                            <div class="row g-2 g-md-3">
                                <div class="col-6 secondary-promo">
                                    <div class="img-container">
                                        <img src="{{asset('images/laptop.jpg')}}" alt="laptop">
                                    </div>
                                    <div class="secondary-promo-content">
                                        <span>Best Sale</span>
                                        <p>Laptops Max</p>
                                        <p>From $1699.00 or <br> $64.62/mo.</p>
                                    </div>
                                </div>
                                <div class="col-6 secondary-promo">
                                    <div class="img-container">
                                        <img src="{{asset('images/ipad.jpg')}}" alt="ipad">
                                    </div>
                                    <div class="secondary-promo-content">
                                        <span>New Arrival</span>
                                        <p>Buy IPad Air</p>
                                        <p>From $599 or <br> $49.91/mo. for 12 mo.</p>
                                    </div>
                                </div>
                                <div class="col-6 secondary-promo">
                                    <div class="img-container">
                                        <img src="{{asset('images/smart-watch.jpg')}}" alt="smart-watch">
                                    </div>
                                    <div class="secondary-promo-content">
                                        <span>15% off</span>
                                        <p>Smartwatch 7</p>
                                        <p>Shop the latest band <br> styles and colors.</p>
                                    </div>
                                </div>
                                <div class="col-6 secondary-promo">
                                    <div class="img-container">
                                        <img src="{{asset('images/head-phone.jpg')}}" alt="head-phone">
                                    </div>
                                    <div class="secondary-promo-content">
                                        <span>Free Engraving</span>
                                        <p>AirPods Max</p>
                                        <p>High-fidelity playback & <br> ultra-low distortion</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="service-section">
                <div class="container-fluid">
                    <div class="service-section-content">
                        <div class="row flex-nowrap">
                            <div class="col-sm-6 col-md-4 col-lg-3 col-xl">
                                <div class="col-content">
                                    <i class="fa-solid fa-truck-fast"></i>
                                    <span>Free Shipping <p>From all orders over $100</p></span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 col-xl">
                                <div class="col-content">
                                    <i class="fa-solid fa-gift"></i>
                                    <span>Free Shipping <p>From all orders over $100</p></span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 col-xl">
                                <div class="col-content">
                                    <i class="fa-solid fa-headset"></i>
                                    <span>Free Shipping <p>From all orders over $100</p></span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 col-xl">
                                <div class="col-content">
                                    <i class="fa-solid fa-percent"></i>
                                    <span>Free Shipping <p>From all orders over $100</p></span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 col-xl">
                                <div class="col-content">
                                    <i class="fa-solid fa-credit-card"></i>
                                    <span>Free Shipping <p>From all orders over $100</p></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="collection-wrapper-section">
                <div class="container-fluid">
                    <div class="row flex-nowrap">
                        <div class="col-sm-6 col-md-4 col-lg-3 col-xl">
                            <div class="col-content ">
                                <p>Laptops</p>
                                <a>View All</a>
                            </div>
                            <div class="img-container">
                                <img src="{{asset('images/collection-laptop.jpg')}}" alt="collection-laptop">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3 col-xl">
                            <div class="col-content">
                                <p>Speakers</p>
                                <a>View All</a>
                            </div>
                            <div class="img-container">
                                <img src="{{asset('images/collection-speaker.jpg')}}" alt="collection-speaker">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3 col-xl">
                            <div class="col-content">
                                <p>Television</p>
                                <a>View All</a>
                            </div>
                            <div class="img-container">
                                <img src="{{asset('images/collection-tv.jpg')}}" alt="collection-tv">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3 col-xl">
                            <div class="col-content">
                                <p>Mini Cameras</p>
                                <a>View All</a>
                            </div>
                            <div class="img-container">
                                <img src="{{asset('images/collection-camera.jpg')}}" alt="collection-camera">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3 col-xl">
                            <div class="col-content">
                                <p>Mini Cameras</p>
                                <a>View All</a>
                            </div>
                            <div class="img-container">
                                <img src="{{asset('images/collection-playstation.jpg')}}" alt="collection-camera">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="featured-collection-section">
                <div class="section-header">
                    <h2>Featured Collection</h2>
                    <div class="arrows">
                        <i id="featuredLeftArr" class="fa-solid fa-angle-left"></i>
                        <i id="featureRightArr" class="fa-solid fa-angle-right"></i>
                    </div>
                </div>
                <div class="container-fluid">
                    <div id="featuredProducts" class="row gx-3 flex-nowrap">
                        <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                        </div>
                    </div>
                </div>
            </section>
            <section class="banner-wrapper-section">
                <div class="container-fluid">
                    <div class="banner-wrapper-products">
                        <div class="row flex-nowrap">
                            <div class="col-6 col-md-4 col-lg">
                                <div class="col-content">
                                    <img src="{{asset('images/banner-watch.jpg')}}" alt="watch">
                                    <div class="col-caption">
                                        <p>BIG SCREEN</p>
                                        <span>smart watch series 7</span>
                                        <p>From $399or $16.62/mo. for 24 mo.*</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg">
                                <div class="col-content">
                                    <img src="{{asset('images/banner-laptop.jpg')}}" alt="watch">
                                    <div class="col-caption">
                                        <p>Studio Display</p>
                                        <span>600 nits of brightness.</span>
                                        <p>27-inch 5K Retina display</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg">
                                <div class="col-content">
                                    <img src="{{asset('images/banner-phone.jpg')}}" alt="watch">
                                    <div class="col-caption">
                                        <p>Smartphones</p>
                                        <span>Smartphone 13 Pro.</span>
                                        <p>Now in Green. From $999.00 or $41.62/mo.for 24 mo. Footnote*</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg">
                                <div class="col-content">
                                    <img src="{{asset('images/banner-speaker.jpg')}}" alt="watch">
                                    <div class="col-caption">
                                        <p>Home Speakers</p>
                                        <span>Room-filling sound.</span>
                                        <p>From $699 or $116.58/mo. for 12 mo.*</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="popular-products-section">
                <div class="container-fluid">
                    <h2 class="mb-4 fw-bold">Our Popular Products</h2>
                    <div class="row g-3">
                        <div class="col-lg-2">
                            <div class="categories">
                                <div class="cat">
                                    <img src="{{asset('images/tab-icon-03.webp')}}" alt="">
                                    <a href="#">Electronics</a>
                                </div>
                                <div class="cat">
                                    <img src="{{asset('images/tab-icon-01.webp')}}" alt="">
                                    <a href="#">Electronics</a>
                                </div>
                                <div class="cat">
                                    <img src="{{asset('images/tab-icon-02.webp')}}" alt="">
                                    <a href="#">Electronics</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-10 col-12">
                            <div class="row g-3">
                                <div class="col-2 popular-products-const">
                                    <div class="col-content">
                                        <img src="{{asset('images/pop-const.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="col-10 overflow-auto popular-products-wrapper">
                                    <div class="row flex-nowrap">
                                        <div class="col-xl-3 col-lg-4">
                                            <div class="col-content">
                                                <img src="{{asset('images/featured-power.jpg')}}" alt="">
                                                <span>Momax</span>
                                                <p>Lorem ipsum dolor sit amet.</p>
                                                <p>$32.00</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4">
                                            <div class="col-content">
                                                <img src="{{asset('images/11_02.webp')}}" alt="">
                                                <span>Momax</span>
                                                <p>Lorem ipsum dolor sit amet.</p>
                                                <p>$32.00</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4">
                                            <div class="col-content">
                                                <img src="{{asset('images/16_02.webp')}}" alt="">
                                                <span>Momax</span>
                                                <p>Lorem ipsum dolor sit amet.</p>
                                                <p>$32.00</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4">
                                            <div class="col-content">
                                                <img src="{{asset('images/05_02.webp')}}" alt="">
                                                <span>Momax</span>
                                                <p>Lorem ipsum dolor sit amet.</p>
                                                <p>$32.00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
@stop
