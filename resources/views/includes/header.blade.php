<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digit</title>
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
<div id="layer" class="layer"></div>
<header>
    <nav>
        <section class="top-nav">
            <div class="container-fluid">
                <div class="row d-sm-flex justify-content-between">
                    <div class="col-6 d-flex justify-content-start gap-3 align-items-center col-md-3 col-lg-3 col-xl-2 logo">
                        <i id="menu" class="fa-solid fa-bars d-lg-none"></i>
                        <img src="{{asset('images/header-logo.webp')}}">
                        <div id="hidden-menu" class="hidden-menu">
                            <div class="hidden-menu-header bg-success">
                                <p>Menu</p>
                                <i id="close-menu" class="fa-solid fa-xmark"></i>
                            </div>
                            <ul class="hidden-menu-content">
                                <li>Home</li>
                                <li>Our store<i class="fa-solid fa-plus"></i></li>
                                <li>Special<i class="fa-solid fa-plus"></i></li>
                                <li>Categories<i class="fa-solid fa-plus"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-0 d-none d-lg-flex col-lg-6 search-bar">
                        <input type="text" placeholder="Search.." >
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                    <div class="col-5 col-sm-3 col-md-3 col-lg-2 col-xl-4 d-flex align-items-center">
                        <div class="top-nav-icons">
                            <div class="d-flex align-items-center icon">
                                <i id="wishlistButton" onclick="getWishlist()" class="fa-regular fa-heart"></i>
                                <span class="d-none d-xl-block">Favourite <br> Wishlist</span>
                            </div>
                            <div class="d-flex align-items-center icon">
                                <i class="fa-regular fa-user" id="loginIcon"></i>
                                <span class="d-none d-xl-block">Log in <br> Your Account</span>
                            </div>
                            <div class="d-flex align-items-center icon cart">
                                <i class="fa-solid fa-cart-shopping " id="cart-btn"></i>
                                <span class="d-none d-xl-block">
                                            <span>2</span>
                                            <span><br>66.00$</span>
                                        </span>
                                <div id="hidden-cart" class="hidden-cart">
                                    <div class="hidden-cart-header bg-success">
                                        <p>Menu</p>
                                        <i id="close-cart" class="fa-solid fa-xmark"></i>
                                    </div>
                                    <div class="hidden-cart-content mt-4">
                                        <i class="fa-solid fa-cart-shopping m-auto text-success"></i>
                                        <button class="btn btn-outline-success px-1 w-75 m-auto">Continue Shopping</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bottom-nav">
            <div class="container-fluid">
                <div class="bottom-nav-content">
                    <ul class="d-none d-lg-flex">
                        <li id="shopCategoryElement"><span><i class="fa-solid fa-list"></i>Shop Categories</span><i class="fa-solid fa-caret-down"></i></li>
                        <li>Home</li>
                        <li>Our Store</li>
                        <li>Special</li>
                        <li id="categories-element">Categories</li>
                        <li>elements</li>
                    </ul>
                    <div class="d-flex justify-content-center d-lg-none search-bar">
                        <input type="text" placeholder="Search.." >
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                    <div class="Shop-Categories-list" id="Shop-Categories-list">
                        <ul>
                            <li>appliances</li>
                            <li>scan printer</li>
                            <li>mini cameras</li>
                            <li>chargers</li>
                            <li>tablets</li>
                            <li>wireless mouse</li>
                        </ul>
                        <ul>
                            <li>phones</li>
                            <li>apple phones</li>
                            <li>android phones</li>
                            <li>earbuds</li>
                            <li>smart phones</li>
                            <li>wired earbuds</li>
                        </ul>
                    </div>
                    <div class="categories-list" id="categories-list">
                        <ul>
                            <li>Watches</li>
                            <li>smart watches</li>
                            <li>rolex watches</li>
                            <li>omega watches</li>
                            <li>cartier watches</li>
                        </ul>
                        <ul>
                            <li>speakers</li>
                            <li>yamaha speakers</li>
                            <li>sonos speakers</li>
                            <li>RCF speakers</li>
                            <li>party speakers</li>
                        </ul>
                        <ul>
                            <li>laptops</li>
                            <li>apple laptops</li>
                            <li>dell laptops</li>
                            <li>hp laptops</li>
                            <li>lenovo laptops</li>
                        </ul>
                        <ul>
                            <li>TV</li>
                            <li>Panasonic tv</li>
                            <li>samsung tv</li>
                            <li>sony tv</li>
                            <li>sense tv</li>
                        </ul>
                        <ul>
                            <li>electronics</li>
                            <li>appliances</li>
                            <li>watches</li>
                            <li>pcs</li>
                            <li>laptops</li>
                        </ul>
                        <ul>
                            <li>gaming</li>
                            <li>headphones</li>
                            <li>gaming boards</li>
                            <li>gaming mics</li>
                            <li>video games</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </nav>
</header>
