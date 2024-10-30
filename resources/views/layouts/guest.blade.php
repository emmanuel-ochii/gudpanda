<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <!-- Dynamic Site Title -->
    <title>@inertiaHead</title>

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('guest/img/favicon.png')}}">

    @vite('resources/css/guest/main.css')

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('guest/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('guest/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('guest/css/venobox.min.css')}}">
    <link rel="stylesheet" href="{{asset('guest/css/odometer.min.css')}}">
    <link rel="stylesheet" href="{{asset('guest/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('guest/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('guest/css/main.css')}}">
</head>

<body>
    <!-- header-area-start -->
    <header class="header header-2 sticky-active" style="--rr-color-theme-primary: #67B02E">
        <div class="top-bar">
            <div class="container">
                <div class="top-bar-inner">
                    <div class="top-bar-left">
                        <ul class="top-left-list">
                            <li><a href="about.html">About</a></li>
                            <li><a href="contact.html">My Account</a></li>
                            <li><a href="wishlist.html">Wishlist</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                        </ul>
                    </div>
                    <div class="top-bar-right">
                        <span>Need Help? Call Us: <a href="tel:+258326821485">+258 3268 21485</a></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle">
            <div class="container">
                <div class="header-middle-inner">
                    <div class="header-middle-left">
                        <div class="header-logo d-lg-block">
                            <a href="index.html">
                                <img src="assets/img/logo/logo-2.png" alt="Logo">
                            </a>
                        </div>
                        <div class="form-wrap">
                            <div class="nice-select select-control country" tabindex="0">
                                <span class="current">Categories</span>
                                <ul class="list">
                                    <li data-value="" class="option selected focus">Categories</li>
                                    <li data-value="vdt" class="option">Fashion</li>
                                    <li data-value="can" class="option">Organic</li>
                                    <li data-value="uk" class="option">Furniture</li>
                                </ul>
                            </div>
                            <div class="category-form-wrap">
                                <form class="header-form" action="mail.php">
                                    <input class="form-control" type="text" name="search"
                                        placeholder="Search for products, categories or brands">
                                    <button class="submit rr-primary-btn">Search<i
                                            class="fa-light fa-magnifying-glass"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="header-middle-right">
                        <ul class="contact-item-list">
                            <li>
                                <a href="wishlist.html" class="icon">
                                    <i class="fa-sharp fa-regular fa-heart"></i>
                                </a>
                            </li>
                            <li><a href="register.html" class="login-btn">Login / Register</a></li>
                            <li>
                                <div class="header-cart-btn">
                                    <a href="cart.html" class="icon">
                                        <i class="fa-light fa-bag-shopping"></i>
                                    </a>
                                    <span>$0.00</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="primary-header">
            <div class="container">
                <div class="primary-header-inner">
                    <div class="header-logo mobile-logo">
                        <a href="index.html">
                            <img src="assets/img/logo/logo-2.png" alt="Logo">
                        </a>
                    </div>
                    <div class="header-menu-wrap">
                        <div class="mobile-menu-items">
                            <ul>
                                <li class="menu-item-has-children active">
                                    <a href="index.html">Home</a>
                                    <ul>
                                        <li><a href="index.html">Fashion Home</a></li>
                                        <li><a href="index-2.html">Grocery Home</a></li>
                                        <li><a href="index-3.html">Furniture</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="shop.html">Shop</a>
                                    <ul>
                                        <li><a href="shop.html">Shop</a></li>
                                        <li><a href="shop-grid.html">Shop Grid</a></li>
                                        <li><a href="shop-details.html">Shop Details</a></li>
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="shop-grid.html">Women</a>
                                </li>
                                <li>
                                    <a href="shop-grid.html">men</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Pages</a>
                                    <ul>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="register.html">Register</a></li>
                                        <li><a href="faq.html">Faq</a></li>
                                        <li><a href="error.html">404 Error</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="blog-grid.html">Blog</a>
                                    <ul>
                                        <li><a href="blog-grid.html">Blog Grid</a></li>
                                        <li><a href="blog-grid-2.html">Blog list</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.header-menu-wrap -->
                    <div class="header-right-wrap">
                        <div class="header-right">
                            <span>Get 30% Discount Now <span>Sale</span></span>
                            <div class="header-right-item">
                                <a href="javascript:void(0)" class="mobile-side-menu-toggle"><i
                                        class="fa-sharp fa-solid fa-bars"></i></a>
                            </div>
                        </div>
                        <!-- /.header-right -->
                    </div>
                </div>
                <!-- /.primary-header-inner -->
            </div>
        </div>
    </header>
    <!-- /.Main Header -->

    <div id="popup-search-box">
        <div class="box-inner-wrap d-flex align-items-center">
            <form id="form" action="#" method="get" role="search">
                <input id="popup-search" type="text" name="s" placeholder="Type keywords here...">
            </form>
            <div class="search-close"><i class="fa-sharp fa-regular fa-xmark"></i></div>
        </div>
    </div>
    <!-- /#popup-search-box -->

    <div class="mobile-side-menu" style="--rr-color-theme-primary: #67B02E">
        <div class="side-menu-content">
            <div class="side-menu-head">
                <a href='index.html'><img src="assets/img/logo/logo-2.png" alt="logo"></a>
                <button class="mobile-side-menu-close"><i class="fa-regular fa-xmark"></i></button>
            </div>
            <div class="side-menu-wrap"></div>
            <ul class="side-menu-list">
                <li><i class="fa-light fa-location-dot"></i>Address : <span>Amsterdam, 109-74</span></li>
                <li><i class="fa-light fa-phone"></i>Phone : <a href="tel:+01569896654">+01 569 896 654</a></li>
                <li><i class="fa-light fa-envelope"></i>Email : <a href="mailto:info@example.com">info@example.com</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /.mobile-side-menu -->

    <div id="preloader" style="--rr-color-theme-primary: #67B02E">
        <div class="preloader-close">X</div>
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!-- ./ preloader -->

    <section class="hero-section-2 pt-60">
        <div class="container">
            <div class="row gy-lg-0 gy-4 justify-content-center">
                <div class="col-lg-3 col-md-4">
                    <div class="hero-list-wrap">
                        <ul class="hero-list">
                            <li><a href="shop.html"><i class="fa-regular fa-plus"></i>Breakfast & Dairy</a></li>
                            <li><a href="shop.html"><i class="fa-regular fa-plus"></i>Meat & Fish</a></li>
                            <li><a href="shop.html"><i class="fa-regular fa-plus"></i>Fresh Fruit</a></li>
                            <li><a href="shop.html"><i class="fa-regular fa-plus"></i>Fresh Vegetables</a></li>
                            <li><a href="shop.html"><i class="fa-regular fa-plus"></i>Dairy Eggs</a></li>
                            <li><a href="shop.html"><i class="fa-regular fa-plus"></i>Milk & Cream</a></li>
                            <li><a href="shop.html"><i class="fa-regular fa-plus"></i>Bread & Bakery</a></li>
                            <li><a href="shop.html"><i class="fa-regular fa-plus"></i>Grocery</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-8">
                    <div class="hero-item" data-background="assets/img/bg-img/hero-item-bg.png">
                        <div class="product-overlay"></div>
                        <div class="hero-item-content">
                            <span class="sub-title">Get up to 30% off on your first $150 purchase</span>
                            <h3 class="title">Organic Grocery <span>$69.00</span></h3>
                            <a href="shop-grid.html" class="rr-primary-btn">Shop Now <i
                                    class="fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-5">
                    <div class="discount-item food-discount hero-discount"
                        data-background="assets/img/images/hero-discount.png">
                        <div class="content">
                            <span class="offer">-45 % Offer</span>
                            <h3 class="title">With us, you will never miss <span> any ingredient</span></h3>
                            <a href="shop.html" class="shop-btn"><i class="fa-solid fa-plus"></i>Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ hero-section -->

    <section class="food-section pt-60 pb-60">
        <div class="container">
            <div class="row food-wrap gy-lg-0 gy-4 justify-content-center">
                <div class="col-lg-2 col-md-4">
                    <div class="food-item text-center">
                        <div class="food-img">
                            <img src="assets/img/images/food-1.png" alt="food">
                        </div>
                        <h3 class="title">Fruits & Vegetable <span>299 Items</span></h3>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <div class="food-item text-center">
                        <div class="food-img">
                            <img src="assets/img/images/food-2.png" alt="food">
                        </div>
                        <h3 class="title">Frozen Meats<span>299 Items</span></h3>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <div class="food-item text-center">
                        <div class="food-img">
                            <img src="assets/img/images/food-3.png" alt="food">
                        </div>
                        <h3 class="title">Organic Kiwi<span>299 Items</span></h3>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <div class="food-item text-center">
                        <div class="food-img">
                            <img src="assets/img/images/food-4.png" alt="food">
                        </div>
                        <h3 class="title">Red Apple<span>299 Items</span></h3>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <div class="food-item text-center">
                        <div class="food-img">
                            <img src="assets/img/images/food-5.png" alt="food">
                        </div>
                        <h3 class="title">Black Plum<span>299 Items</span></h3>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <div class="food-item text-center">
                        <div class="food-img">
                            <img src="assets/img/images/food-6.png" alt="food">
                        </div>
                        <h3 class="title">Custard Apple<span>299 Items</span></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ food-section -->

    <section class="discount-section overflow-hidden pb-100">
        <div class="container">
            <div class="row gy-lg-0 gy-4">
                <div class="col-lg-6">
                    <div class="discount-item food-discount" style="--rr-color-theme-primary: #67B02E">
                        <div class="content">
                            <span>Weekend Discount</span>
                            <h3 class="title">Feed The Best Energy <br>Drink Booster</h3>
                            <p>Just don’t miss the special offer this week</p>
                            <a href="shop.html"><i class="fa-regular fa-plus"></i>Shop Now</a>
                        </div>
                        <div class="men"><img src="assets/img/images/food-discount-1.png" alt="img"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="discount-item food-discount food-discount-2"
                        style="--rr-color-theme-primary: #67B02E">
                        <div class="content">
                            <span>Weekend Discount</span>
                            <h3 class="title">Our Garden Fresh <br>Vegetables</h3>
                            <p>Just don’t miss the special offer this week</p>
                            <a href="shop.html"><i class="fa-regular fa-plus"></i>Shop Now</a>
                        </div>
                        <div class="men"><img src="assets/img/images/food-discount-2.png" alt="img"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ discount-section -->

    <section class="deal-section pb-60">
        <div class="container">
            <div class="row product-item-wrap gy-xl-0 gy-4 justify-content-center">
                <div class="section-heading">
                    <h2 class="section-title">Deal of the Week</h2>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img src="assets/img/product/product-1.png" alt="img">
                        </div>
                        <div class="product-content">
                            <span class="category">Nescafe USA</span>
                            <h3 class="title"><a href="shop-details.html">Hillshire Farm Thin Sliced Honey Deli Lunch
                                    Meat</a></h3>
                            <h4 class="quantity">9 oz Pack</h4>
                            <span class="price">$257.00 <span class="offer">$450.00</span></span>
                        </div>
                        <div class="product-bottom">
                            <span class="stock">In Stock</span>
                            <div class="line"></div>
                            <span class="number">Available: <span>250</span></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img src="assets/img/product/product-2.png" alt="img">
                        </div>
                        <div class="product-content">
                            <span class="category">Nescafe USA</span>
                            <h3 class="title"><a href="shop-details.html">Greek Gods Probiotic Plain Traditional</a>
                            </h3>
                            <h4 class="quantity">9 oz Pack</h4>
                            <span class="price">$150.00 <span class="offer">$100.00</span></span>
                        </div>
                        <div class="product-bottom">
                            <span class="stock">In Stock</span>
                            <div class="line"></div>
                            <span class="number">Available: <span>250</span></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="item-wrap">
                        <div class="discount-item food-discount">
                            <div class="content">
                                <span>-45 % Offer</span>
                                <h3 class="title">Make your grocery <br>shopping easy with us</h3>
                                <p>Feed your family the best</p>
                            </div>
                            <div class="men"><img src="assets/img/images/food-discount-3.png" alt="img">
                            </div>
                        </div>
                        <div class="discount-item food-discount" style="--rr-color-theme-primary: #67B02E">
                            <div class="content">
                                <span>-45 % Offer</span>
                                <h3 class="title">Make your grocery <br>shopping easy with us</h3>
                                <p>Feed your family the best</p>
                            </div>
                            <div class="men"><img src="assets/img/images/food-discount-4.png" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img src="assets/img/product/product-3.png" alt="img">
                        </div>
                        <div class="product-content">
                            <span class="category">Nescafe USA</span>
                            <h3 class="title"><a href="shop-details.html">True Lemon Raspberry Natural Juice</a></h3>
                            <h4 class="quantity">9 oz Pack</h4>
                            <span class="price">$257.00 <span class="offer">$450.00</span></span>
                        </div>
                        <div class="product-bottom">
                            <span class="stock">In Stock</span>
                            <div class="line"></div>
                            <span class="number">Available: <span>250</span></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img src="assets/img/product/product-4.png" alt="img">
                        </div>
                        <div class="product-content">
                            <span class="category">Nescafe USA</span>
                            <h3 class="title"><a href="shop-details.html">Annies Organic Cheddar
                                    Snack Mix</a></h3>
                            <h4 class="quantity">9 oz Pack</h4>
                            <span class="price">$177.00 <span class="offer">$75.00</span></span>
                        </div>
                        <div class="product-bottom">
                            <span class="stock">In Stock</span>
                            <div class="line"></div>
                            <span class="number">Available: <span>250</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ deal-section -->

    <div class="discount-cta mb-60">
        <div class="container p-0">
            <div class="discount-cta-wrap text-center pt-35 pb-35"
                data-background="assets/img/bg-img/discount-cta-bg.jpg">
                <span>Super discount for your 100$ purchase. Use this code OFFER100</span>
            </div>
        </div>
    </div>
    <!-- ./ discount-cta -->

    <section class="popular-product bg-grey pb-60 pt-60">
        <div class="container">
            <div class="product-top-content heading-space mb-25">
                <div class="section-heading mb-0 heading-2">
                    <h2 class="section-title">Popular Products</h2>
                </div>
                <ul class="project-filter text-center">
                    <li class="active" data-filter="*">Show All</li>
                    <li data-filter=".cake ">Cake & Milk</li>
                    <li data-filter=".tea">Coffes & Teas</li>
                    <li data-filter=".pet"> Pet Foods</li>
                    <li data-filter=".veg">Vegetables</li>
                </ul>
            </div>
            <div class="filter-items row gy-4">
                <div class="col-xl-2 col-lg-3 col-md-6 single-item veg tea">
                    <div class="product-item product-item-2">
                        <div class="time"><span>Delivery 9 MINS</span></div>
                        <ul class="product-list">
                            <li><a href="#"><i class="fa-sharp fa-regular fa-plus"></i></a></li>
                            <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa-solid fa-arrow-right-arrow-left"></i></a></li>
                        </ul>
                        <div class="product-thumb">
                            <img src="assets/img/product/popular-1.png" alt="img">
                        </div>
                        <div class="product-content">
                            <span class="category">Nescafe USA</span>
                            <h3 class="title"><a href="shop-details.html">Hillshire Farm Thin Sliced Honey Deli Lunch
                                    Meat</a></h3>
                            <h4 class="quantity">9 oz Pack</h4>
                            <span class="price">$257.00 <span class="offer">$450.00</span></span>
                        </div>
                        <div class="product-bottom">
                            <a href="cart.html">Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 single-item pet cake">
                    <div class="product-item product-item-2">
                        <div class="time"><span>Delivery 9 MINS</span></div>
                        <ul class="product-list">
                            <li><a href="#"><i class="fa-sharp fa-regular fa-plus"></i></a></li>
                            <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa-solid fa-arrow-right-arrow-left"></i></a></li>
                        </ul>
                        <div class="product-thumb">
                            <img src="assets/img/product/popular-2.png" alt="img">
                        </div>
                        <div class="product-content">
                            <span class="category">Nescafe USA</span>
                            <h3 class="title"><a href="shop-details.html">Nerds Gummy Clusters
                                    Tangy Crunchy</a></h3>
                            <h4 class="quantity">9 oz Pack</h4>
                            <span class="price">$257.00 <span class="offer">$450.00</span></span>
                        </div>
                        <div class="product-bottom">
                            <a href="cart.html">Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 single-item veg pet">
                    <div class="product-item product-item-2">
                        <div class="time"><span>Delivery 9 MINS</span></div>
                        <ul class="product-list">
                            <li><a href="#"><i class="fa-sharp fa-regular fa-plus"></i></a></li>
                            <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa-solid fa-arrow-right-arrow-left"></i></a></li>
                        </ul>
                        <div class="product-thumb">
                            <img src="assets/img/product/popular-3.png" alt="img">
                        </div>
                        <div class="product-content">
                            <span class="category">Nescafe USA</span>
                            <h3 class="title"><a href="shop-details.html">Mango Punch Tamplco
                                    Drink Mixer</a></h3>
                            <h4 class="quantity">9 oz Pack</h4>
                            <span class="price">$257.00 <span class="offer">$450.00</span></span>
                        </div>
                        <div class="product-bottom">
                            <a href="cart.html">Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 single-item cake tea">
                    <div class="product-item product-item-2">
                        <div class="time"><span>Delivery 9 MINS</span></div>
                        <ul class="product-list">
                            <li><a href="#"><i class="fa-sharp fa-regular fa-plus"></i></a></li>
                            <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa-solid fa-arrow-right-arrow-left"></i></a></li>
                        </ul>
                        <div class="product-thumb">
                            <img src="assets/img/product/popular-4.png" alt="img">
                        </div>
                        <div class="product-content">
                            <span class="category">Nescafe USA</span>
                            <h3 class="title"><a href="shop-details.html">Foster Farms Breast <br>
                                    Nuggets</a></h3>
                            <h4 class="quantity">9 oz Pack</h4>
                            <span class="price">$257.00 <span class="offer">$450.00</span></span>
                        </div>
                        <div class="product-bottom">
                            <a href="cart.html">Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 single-item veg cake">
                    <div class="product-item product-item-2">
                        <div class="time"><span>Delivery 9 MINS</span></div>
                        <ul class="product-list">
                            <li><a href="#"><i class="fa-sharp fa-regular fa-plus"></i></a></li>
                            <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa-solid fa-arrow-right-arrow-left"></i></a></li>
                        </ul>
                        <div class="product-thumb">
                            <img src="assets/img/product/popular-5.png" alt="img">
                        </div>
                        <div class="product-content">
                            <span class="category">Nescafe USA</span>
                            <h3 class="title"><a href="shop-details.html">Belvita Crunchy Breakfast
                                    Honey Biscuits</a></h3>
                            <h4 class="quantity">9 oz Pack</h4>
                            <span class="price">$257.00 <span class="offer">$450.00</span></span>
                        </div>
                        <div class="product-bottom">
                            <a href="cart.html">Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 single-item pet tea">
                    <div class="product-item product-item-2">
                        <div class="time"><span>Delivery 9 MINS</span></div>
                        <ul class="product-list">
                            <li><a href="#"><i class="fa-sharp fa-regular fa-plus"></i></a></li>
                            <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa-solid fa-arrow-right-arrow-left"></i></a></li>
                        </ul>
                        <div class="product-thumb">
                            <img src="assets/img/product/popular-6.png" alt="img">
                        </div>
                        <div class="product-content">
                            <span class="category">Nescafe USA</span>
                            <h3 class="title"><a href="shop-details.html">Gerber Snacks For baby
                                    Wonder Foods</a></h3>
                            <h4 class="quantity">9 oz Pack</h4>
                            <span class="price">$257.00 <span class="offer">$450.00</span></span>
                        </div>
                        <div class="product-bottom">
                            <a href="cart.html">Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 single-item veg tea">
                    <div class="product-item product-item-2">
                        <div class="time"><span>Delivery 9 MINS</span></div>
                        <ul class="product-list">
                            <li><a href="#"><i class="fa-sharp fa-regular fa-plus"></i></a></li>
                            <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa-solid fa-arrow-right-arrow-left"></i></a></li>
                        </ul>
                        <div class="product-thumb">
                            <img src="assets/img/product/popular-7.png" alt="img">
                        </div>
                        <div class="product-content">
                            <span class="category">Nescafe USA</span>
                            <h3 class="title"><a href="shop-details.html">Hillshire Farm Thin Sliced Honey Deli Lunch
                                    Meat</a></h3>
                            <h4 class="quantity">9 oz Pack</h4>
                            <span class="price">$257.00 <span class="offer">$450.00</span></span>
                        </div>
                        <div class="product-bottom">
                            <a href="cart.html">Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 single-item pet cake">
                    <div class="product-item product-item-2">
                        <div class="time"><span>Delivery 9 MINS</span></div>
                        <ul class="product-list">
                            <li><a href="#"><i class="fa-sharp fa-regular fa-plus"></i></a></li>
                            <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa-solid fa-arrow-right-arrow-left"></i></a></li>
                        </ul>
                        <div class="product-thumb">
                            <img src="assets/img/product/popular-8.png" alt="img">
                        </div>
                        <div class="product-content">
                            <span class="category">Nescafe USA</span>
                            <h3 class="title"><a href="shop-details.html">Nerds Gummy Clusters
                                    Tangy Crunchy</a></h3>
                            <h4 class="quantity">9 oz Pack</h4>
                            <span class="price">$257.00 <span class="offer">$450.00</span></span>
                        </div>
                        <div class="product-bottom">
                            <a href="cart.html">Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 single-item veg pet">
                    <div class="product-item product-item-2">
                        <div class="time"><span>Delivery 9 MINS</span></div>
                        <ul class="product-list">
                            <li><a href="#"><i class="fa-sharp fa-regular fa-plus"></i></a></li>
                            <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa-solid fa-arrow-right-arrow-left"></i></a></li>
                        </ul>
                        <div class="product-thumb">
                            <img src="assets/img/product/popular-9.png" alt="img">
                        </div>
                        <div class="product-content">
                            <span class="category">Nescafe USA</span>
                            <h3 class="title"><a href="shop-details.html">Mango Punch Tamplco
                                    Drink Mixer</a></h3>
                            <h4 class="quantity">9 oz Pack</h4>
                            <span class="price">$257.00 <span class="offer">$450.00</span></span>
                        </div>
                        <div class="product-bottom">
                            <a href="cart.html">Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 single-item cake tea">
                    <div class="product-item product-item-2">
                        <div class="time"><span>Delivery 9 MINS</span></div>
                        <ul class="product-list">
                            <li><a href="#"><i class="fa-sharp fa-regular fa-plus"></i></a></li>
                            <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa-solid fa-arrow-right-arrow-left"></i></a></li>
                        </ul>
                        <div class="product-thumb">
                            <img src="assets/img/product/popular-10.png" alt="img">
                        </div>
                        <div class="product-content">
                            <span class="category">Nescafe USA</span>
                            <h3 class="title"><a href="shop-details.html">Foster Farms Breast <br>
                                    Nuggets</a></h3>
                            <h4 class="quantity">9 oz Pack</h4>
                            <span class="price">$257.00 <span class="offer">$450.00</span></span>
                        </div>
                        <div class="product-bottom">
                            <a href="cart.html">Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 single-item veg cake">
                    <div class="product-item product-item-2">
                        <div class="time"><span>Delivery 9 MINS</span></div>
                        <ul class="product-list">
                            <li><a href="#"><i class="fa-sharp fa-regular fa-plus"></i></a></li>
                            <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa-solid fa-arrow-right-arrow-left"></i></a></li>
                        </ul>
                        <div class="product-thumb">
                            <img src="assets/img/product/popular-11.png" alt="img">
                        </div>
                        <div class="product-content">
                            <span class="category">Nescafe USA</span>
                            <h3 class="title"><a href="shop-details.html">Belvita Crunchy Breakfast
                                    Honey Biscuits</a></h3>
                            <h4 class="quantity">9 oz Pack</h4>
                            <span class="price">$257.00 <span class="offer">$450.00</span></span>
                        </div>
                        <div class="product-bottom">
                            <a href="cart.html">Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 single-item pet tea">
                    <div class="product-item product-item-2">
                        <div class="time"><span>Delivery 9 MINS</span></div>
                        <ul class="product-list">
                            <li><a href="#"><i class="fa-sharp fa-regular fa-plus"></i></a></li>
                            <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa-solid fa-arrow-right-arrow-left"></i></a></li>
                        </ul>
                        <div class="product-thumb">
                            <img src="assets/img/product/popular-12.png" alt="img">
                        </div>
                        <div class="product-content">
                            <span class="category">Nescafe USA</span>
                            <h3 class="title"><a href="shop-details.html">Gerber Snacks For baby
                                    Wonder Foods</a></h3>
                            <h4 class="quantity">9 oz Pack</h4>
                            <span class="price">$257.00 <span class="offer">$450.00</span></span>
                        </div>
                        <div class="product-bottom">
                            <a href="cart.html">Add To Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ popular-product -->

    <section class="product-deal bg-grey pb-60">
        <div class="container">
            <div class="section-heading heading-2 mb-40">
                <h2 class="section-title mb-0">Deal of the month</h2>
            </div>
            <div class="row gy-lg-0 gy-4 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="product-item product-item-2 product-item-3">
                        <div class="time"><span>Delivery 9 MINS</span></div>
                        <div class="product-left">
                            <div class="product-thumb">
                                <img src="assets/img/product/product-deal-1.png" alt="img">
                            </div>
                            <div class="rr-product-countdown" data-countdown data-date="Jun 30 2024 20:20:22">
                                <div class="rr-product-countdown-inner">
                                    <ul>
                                        <li><span data-days>0</span>d</li>
                                        <li><span data-hours>0</span>h</li>
                                        <li><span data-minutes>0</span>m</li>
                                        <li><span data-seconds>0</span>s</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="product-right">
                            <div class="product-content">
                                <span class="category">Nescafe USA</span>
                                <h3 class="title"><a href="shop-details.html">Aptamil Gold+ Premium
                                        Ifant Formula</a></h3>
                                <h4 class="quantity">500kg</h4>
                                <span class="price">$36.00 <span class="offer">$45.00</span></span>
                            </div>
                            <div class="product-bottom">
                                <a href="cart.html">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="product-item product-item-2 product-item-3">
                        <div class="time"><span>Delivery 9 MINS</span></div>
                        <div class="product-left">
                            <div class="product-thumb">
                                <img src="assets/img/product/product-deal-2.png" alt="img">
                            </div>
                            <div class="rr-product-countdown" data-countdown data-date="Jun 30 2024 20:20:22">
                                <div class="rr-product-countdown-inner">
                                    <ul>
                                        <li><span data-days>0</span>d</li>
                                        <li><span data-hours>0</span>h</li>
                                        <li><span data-minutes>0</span>m</li>
                                        <li><span data-seconds>0</span>s</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="product-right">
                            <div class="product-content">
                                <span class="category">Nescafe USA</span>
                                <h3 class="title"><a href="shop-details.html">Aptamil Gold+ Premium
                                        Ifant Formula</a></h3>
                                <h4 class="quantity">500kg</h4>
                                <span class="price">$36.00 <span class="offer">$45.00</span></span>
                            </div>
                            <div class="product-bottom">
                                <a href="cart.html">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="product-item product-item-2 product-item-3 mb-0">
                        <div class="time"><span>Delivery 9 MINS</span></div>
                        <div class="product-left">
                            <div class="product-thumb">
                                <img src="assets/img/product/product-deal-3.png" alt="img">
                            </div>
                            <div class="rr-product-countdown" data-countdown data-date="Jun 30 2024 20:20:22">
                                <div class="rr-product-countdown-inner">
                                    <ul>
                                        <li><span data-days>0</span>d</li>
                                        <li><span data-hours>0</span>h</li>
                                        <li><span data-minutes>0</span>m</li>
                                        <li><span data-seconds>0</span>s</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="product-right">
                            <div class="product-content">
                                <span class="category">Nescafe USA</span>
                                <h3 class="title"><a href="shop-details.html">Aptamil Gold+ Premium
                                        Ifant Formula</a></h3>
                                <h4 class="quantity">500kg</h4>
                                <span class="price">$36.00 <span class="offer">$45.00</span></span>
                            </div>
                            <div class="product-bottom">
                                <a href="cart.html">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="product-item large-item">
                        <ul class="product-list">
                            <li><a href="#"><i class="fa-sharp fa-regular fa-plus"></i></a></li>
                            <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa-solid fa-arrow-right-arrow-left"></i></a></li>
                        </ul>
                        <div class="product-thumb">
                            <img src="assets/img/product/product-deal-4.png" alt="img">
                        </div>
                        <div class="product-content">
                            <span class="category">Nescafe USA</span>
                            <h3 class="title"><a href="shop-details.html">Peysan Mozzarella Italian Cuisine</a></h3>
                            <h4 class="quantity">500g Pack</h4>
                            <span class="price">$150.00 <span class="offer">$100.00</span></span>
                            <p>Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt.
                                Class aptent taciti sociosqu ad litora torquent Vivamus adipiscing nisl.</p>
                        </div>
                        <div class="product-bottom">
                            <span class="stock">In Stock</span>
                            <div class="line"></div>
                            <span class="number">Available: <span>250</span></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="product-item product-item-2 product-item-3">
                        <div class="time"><span>Delivery 9 MINS</span></div>
                        <div class="product-left">
                            <div class="product-thumb">
                                <img src="assets/img/product/product-deal-1.png" alt="img">
                            </div>
                            <div class="rr-product-countdown" data-countdown data-date="Jun 30 2024 20:20:22">
                                <div class="rr-product-countdown-inner">
                                    <ul>
                                        <li><span data-days>0</span>d</li>
                                        <li><span data-hours>0</span>h</li>
                                        <li><span data-minutes>0</span>m</li>
                                        <li><span data-seconds>0</span>s</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="product-right">
                            <div class="product-content">
                                <span class="category">Nescafe USA</span>
                                <h3 class="title"><a href="shop-details.html">Aptamil Gold+ Premium
                                        Ifant Formula</a></h3>
                                <h4 class="quantity">500kg</h4>
                                <span class="price">$36.00 <span class="offer">$45.00</span></span>
                            </div>
                            <div class="product-bottom">
                                <a href="cart.html">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="product-item product-item-2 product-item-3">
                        <div class="time"><span>Delivery 9 MINS</span></div>
                        <div class="product-left">
                            <div class="product-thumb">
                                <img src="assets/img/product/product-deal-2.png" alt="img">
                            </div>
                            <div class="rr-product-countdown" data-countdown data-date="Jun 30 2024 20:20:22">
                                <div class="rr-product-countdown-inner">
                                    <ul>
                                        <li><span data-days>0</span>d</li>
                                        <li><span data-hours>0</span>h</li>
                                        <li><span data-minutes>0</span>m</li>
                                        <li><span data-seconds>0</span>s</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="product-right">
                            <div class="product-content">
                                <span class="category">Nescafe USA</span>
                                <h3 class="title"><a href="shop-details.html">Aptamil Gold+ Premium
                                        Ifant Formula</a></h3>
                                <h4 class="quantity">500kg</h4>
                                <span class="price">$36.00 <span class="offer">$45.00</span></span>
                            </div>
                            <div class="product-bottom">
                                <a href="cart.html">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="product-item product-item-2 product-item-3 mb-0">
                        <div class="time"><span>Delivery 9 MINS</span></div>
                        <div class="product-left">
                            <div class="product-thumb">
                                <img src="assets/img/product/product-deal-3.png" alt="img">
                            </div>
                            <div class="rr-product-countdown" data-countdown data-date="Jun 30 2024 20:20:22">
                                <div class="rr-product-countdown-inner">
                                    <ul>
                                        <li><span data-days>0</span>d</li>
                                        <li><span data-hours>0</span>h</li>
                                        <li><span data-minutes>0</span>m</li>
                                        <li><span data-seconds>0</span>s</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="product-right">
                            <div class="product-content">
                                <span class="category">Nescafe USA</span>
                                <h3 class="title"><a href="shop-details.html">Aptamil Gold+ Premium
                                        Ifant Formula</a></h3>
                                <h4 class="quantity">500kg</h4>
                                <span class="price">$36.00 <span class="offer">$45.00</span></span>
                            </div>
                            <div class="product-bottom">
                                <a href="cart.html">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ product-deal -->

    <section class="product-tab-section pt-60 pb-60">
        <div class="container">
            <div class="row product-tab-wrap justify-content-center gy-lg-0 gy-4">
                <div class="col-lg-4 col-md-6">
                    <div class="discount-item-wrap">
                        <div class="discount-item food-discount">
                            <div class="content">
                                <span>-45 % Offer</span>
                                <h3 class="title">With us, you will never <br> miss <span> any ingredient</span></h3>
                                <a href="shop.html"><i class="fa-solid fa-plus"></i>Shop Now</a>
                            </div>
                            <div class="discount-img">
                                <img src="assets/img/bg-img/product-item-bg.png" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="product-tab-wrapper">
                        <div class="tab-top heading-space">
                            <div class="section-heading heading-2 mb-0">
                                <h2 class="section-title mb-0">Popular Products</h2>
                            </div>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                        data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                        aria-selected="true">New Sale</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#profile" type="button" role="tab"
                                        aria-controls="profile" aria-selected="false">On Sale</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                        data-bs-target="#contact" type="button" role="tab"
                                        aria-controls="contact" aria-selected="false">Best Rated</button>
                                </li>
                            </ul>
                        </div>
                        <div class="product-tab">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel"
                                    aria-labelledby="home-tab">
                                    <div class="row gy-xl-0 gy-4">
                                        <div class="col-xl-3 col-md-6 single-item veg tea">
                                            <div class="product-item product-item-2">
                                                <div class="time"><span>Delivery 9 MINS</span></div>
                                                <ul class="product-list">
                                                    <li><a href="#"><i
                                                                class="fa-sharp fa-regular fa-plus"></i></a></li>
                                                    <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                                    <li><a href="#"><i
                                                                class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                                    </li>
                                                </ul>
                                                <div class="product-thumb">
                                                    <img src="assets/img/product/popular-1.png" alt="img">
                                                </div>
                                                <div class="product-content">
                                                    <span class="category">Nescafe USA</span>
                                                    <h3 class="title"><a href="shop-details.html">Hillshire Farm Thin
                                                            Sliced Honey Deli Lunch Meat</a></h3>
                                                    <h4 class="quantity">9 oz Pack</h4>
                                                    <span class="price">$257.00 <span
                                                            class="offer">$450.00</span></span>
                                                </div>
                                                <div class="product-bottom">
                                                    <a href="cart.html">Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-6 single-item pet cake">
                                            <div class="product-item product-item-2">
                                                <div class="time"><span>Delivery 9 MINS</span></div>
                                                <ul class="product-list">
                                                    <li><a href="#"><i
                                                                class="fa-sharp fa-regular fa-plus"></i></a></li>
                                                    <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                                    <li><a href="#"><i
                                                                class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                                    </li>
                                                </ul>
                                                <div class="product-thumb">
                                                    <img src="assets/img/product/popular-2.png" alt="img">
                                                </div>
                                                <div class="product-content">
                                                    <span class="category">Nescafe USA</span>
                                                    <h3 class="title"><a href="shop-details.html">Nerds Gummy
                                                            Clusters
                                                            Tangy Crunchy</a></h3>
                                                    <h4 class="quantity">9 oz Pack</h4>
                                                    <span class="price">$257.00 <span
                                                            class="offer">$450.00</span></span>
                                                </div>
                                                <div class="product-bottom">
                                                    <a href="cart.html">Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-6 single-item veg pet">
                                            <div class="product-item product-item-2">
                                                <div class="time"><span>Delivery 9 MINS</span></div>
                                                <ul class="product-list">
                                                    <li><a href="#"><i
                                                                class="fa-sharp fa-regular fa-plus"></i></a></li>
                                                    <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                                    <li><a href="#"><i
                                                                class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                                    </li>
                                                </ul>
                                                <div class="product-thumb">
                                                    <img src="assets/img/product/popular-3.png" alt="img">
                                                </div>
                                                <div class="product-content">
                                                    <span class="category">Nescafe USA</span>
                                                    <h3 class="title"><a href="shop-details.html">Mango Punch Tamplco
                                                            Drink Mixer</a></h3>
                                                    <h4 class="quantity">9 oz Pack</h4>
                                                    <span class="price">$257.00 <span
                                                            class="offer">$450.00</span></span>
                                                </div>
                                                <div class="product-bottom">
                                                    <a href="cart.html">Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-6 single-item cake tea">
                                            <div class="product-item product-item-2">
                                                <div class="time"><span>Delivery 9 MINS</span></div>
                                                <ul class="product-list">
                                                    <li><a href="#"><i
                                                                class="fa-sharp fa-regular fa-plus"></i></a></li>
                                                    <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                                    <li><a href="#"><i
                                                                class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                                    </li>
                                                </ul>
                                                <div class="product-thumb">
                                                    <img src="assets/img/product/popular-4.png" alt="img">
                                                </div>
                                                <div class="product-content">
                                                    <span class="category">Nescafe USA</span>
                                                    <h3 class="title"><a href="shop-details.html">Foster Farms Breast
                                                            <br>
                                                            Nuggets</a></h3>
                                                    <h4 class="quantity">9 oz Pack</h4>
                                                    <span class="price">$257.00 <span
                                                            class="offer">$450.00</span></span>
                                                </div>
                                                <div class="product-bottom">
                                                    <a href="cart.html">Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel"
                                    aria-labelledby="profile-tab">
                                    <div class="row gy-xl-0 gy-4">
                                        <div class="col-xl-3 col-md-6 single-item veg tea">
                                            <div class="product-item product-item-2">
                                                <div class="time"><span>Delivery 9 MINS</span></div>
                                                <ul class="product-list">
                                                    <li><a href="#"><i
                                                                class="fa-sharp fa-regular fa-plus"></i></a></li>
                                                    <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                                    <li><a href="#"><i
                                                                class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                                    </li>
                                                </ul>
                                                <div class="product-thumb">
                                                    <img src="assets/img/product/popular-1.png" alt="img">
                                                </div>
                                                <div class="product-content">
                                                    <span class="category">Nescafe USA</span>
                                                    <h3 class="title"><a href="shop-details.html">Hillshire Farm Thin
                                                            Sliced Honey Deli Lunch Meat</a></h3>
                                                    <h4 class="quantity">9 oz Pack</h4>
                                                    <span class="price">$257.00 <span
                                                            class="offer">$450.00</span></span>
                                                </div>
                                                <div class="product-bottom">
                                                    <a href="cart.html">Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-6 single-item pet cake">
                                            <div class="product-item product-item-2">
                                                <div class="time"><span>Delivery 9 MINS</span></div>
                                                <ul class="product-list">
                                                    <li><a href="#"><i
                                                                class="fa-sharp fa-regular fa-plus"></i></a></li>
                                                    <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                                    <li><a href="#"><i
                                                                class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                                    </li>
                                                </ul>
                                                <div class="product-thumb">
                                                    <img src="assets/img/product/popular-2.png" alt="img">
                                                </div>
                                                <div class="product-content">
                                                    <span class="category">Nescafe USA</span>
                                                    <h3 class="title"><a href="shop-details.html">Nerds Gummy
                                                            Clusters
                                                            Tangy Crunchy</a></h3>
                                                    <h4 class="quantity">9 oz Pack</h4>
                                                    <span class="price">$257.00 <span
                                                            class="offer">$450.00</span></span>
                                                </div>
                                                <div class="product-bottom">
                                                    <a href="cart.html">Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-6 single-item veg pet">
                                            <div class="product-item product-item-2">
                                                <div class="time"><span>Delivery 9 MINS</span></div>
                                                <ul class="product-list">
                                                    <li><a href="#"><i
                                                                class="fa-sharp fa-regular fa-plus"></i></a></li>
                                                    <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                                    <li><a href="#"><i
                                                                class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                                    </li>
                                                </ul>
                                                <div class="product-thumb">
                                                    <img src="assets/img/product/popular-3.png" alt="img">
                                                </div>
                                                <div class="product-content">
                                                    <span class="category">Nescafe USA</span>
                                                    <h3 class="title"><a href="shop-details.html">Mango Punch Tamplco
                                                            Drink Mixer</a></h3>
                                                    <h4 class="quantity">9 oz Pack</h4>
                                                    <span class="price">$257.00 <span
                                                            class="offer">$450.00</span></span>
                                                </div>
                                                <div class="product-bottom">
                                                    <a href="cart.html">Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-6 single-item cake tea">
                                            <div class="product-item product-item-2">
                                                <div class="time"><span>Delivery 9 MINS</span></div>
                                                <ul class="product-list">
                                                    <li><a href="#"><i
                                                                class="fa-sharp fa-regular fa-plus"></i></a></li>
                                                    <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                                    <li><a href="#"><i
                                                                class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                                    </li>
                                                </ul>
                                                <div class="product-thumb">
                                                    <img src="assets/img/product/popular-4.png" alt="img">
                                                </div>
                                                <div class="product-content">
                                                    <span class="category">Nescafe USA</span>
                                                    <h3 class="title"><a href="shop-details.html">Foster Farms
                                                            Breast <br>
                                                            Nuggets</a></h3>
                                                    <h4 class="quantity">9 oz Pack</h4>
                                                    <span class="price">$257.00 <span
                                                            class="offer">$450.00</span></span>
                                                </div>
                                                <div class="product-bottom">
                                                    <a href="cart.html">Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="contact" role="tabpanel"
                                    aria-labelledby="contact-tab">
                                    <div class="row gy-xl-0 gy-4">
                                        <div class="col-xl-3 col-md-6 single-item veg tea">
                                            <div class="product-item product-item-2">
                                                <div class="time"><span>Delivery 9 MINS</span></div>
                                                <ul class="product-list">
                                                    <li><a href="#"><i
                                                                class="fa-sharp fa-regular fa-plus"></i></a></li>
                                                    <li><a href="#"><i class="fa-regular fa-heart"></i></a>
                                                    </li>
                                                    <li><a href="#"><i
                                                                class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                                    </li>
                                                </ul>
                                                <div class="product-thumb">
                                                    <img src="assets/img/product/popular-1.png" alt="img">
                                                </div>
                                                <div class="product-content">
                                                    <span class="category">Nescafe USA</span>
                                                    <h3 class="title"><a href="shop-details.html">Hillshire Farm
                                                            Thin Sliced Honey Deli Lunch Meat</a></h3>
                                                    <h4 class="quantity">9 oz Pack</h4>
                                                    <span class="price">$257.00 <span
                                                            class="offer">$450.00</span></span>
                                                </div>
                                                <div class="product-bottom">
                                                    <a href="cart.html">Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-6 single-item pet cake">
                                            <div class="product-item product-item-2">
                                                <div class="time"><span>Delivery 9 MINS</span></div>
                                                <ul class="product-list">
                                                    <li><a href="#"><i
                                                                class="fa-sharp fa-regular fa-plus"></i></a></li>
                                                    <li><a href="#"><i class="fa-regular fa-heart"></i></a>
                                                    </li>
                                                    <li><a href="#"><i
                                                                class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                                    </li>
                                                </ul>
                                                <div class="product-thumb">
                                                    <img src="assets/img/product/popular-2.png" alt="img">
                                                </div>
                                                <div class="product-content">
                                                    <span class="category">Nescafe USA</span>
                                                    <h3 class="title"><a href="shop-details.html">Nerds Gummy
                                                            Clusters
                                                            Tangy Crunchy</a></h3>
                                                    <h4 class="quantity">9 oz Pack</h4>
                                                    <span class="price">$257.00 <span
                                                            class="offer">$450.00</span></span>
                                                </div>
                                                <div class="product-bottom">
                                                    <a href="cart.html">Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-6 single-item veg pet">
                                            <div class="product-item product-item-2">
                                                <div class="time"><span>Delivery 9 MINS</span></div>
                                                <ul class="product-list">
                                                    <li><a href="#"><i
                                                                class="fa-sharp fa-regular fa-plus"></i></a></li>
                                                    <li><a href="#"><i class="fa-regular fa-heart"></i></a>
                                                    </li>
                                                    <li><a href="#"><i
                                                                class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                                    </li>
                                                </ul>
                                                <div class="product-thumb">
                                                    <img src="assets/img/product/popular-3.png" alt="img">
                                                </div>
                                                <div class="product-content">
                                                    <span class="category">Nescafe USA</span>
                                                    <h3 class="title"><a href="shop-details.html">Mango Punch
                                                            Tamplco
                                                            Drink Mixer</a></h3>
                                                    <h4 class="quantity">9 oz Pack</h4>
                                                    <span class="price">$257.00 <span
                                                            class="offer">$450.00</span></span>
                                                </div>
                                                <div class="product-bottom">
                                                    <a href="cart.html">Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-6 single-item cake tea">
                                            <div class="product-item product-item-2">
                                                <div class="time"><span>Delivery 9 MINS</span></div>
                                                <ul class="product-list">
                                                    <li><a href="#"><i
                                                                class="fa-sharp fa-regular fa-plus"></i></a></li>
                                                    <li><a href="#"><i class="fa-regular fa-heart"></i></a>
                                                    </li>
                                                    <li><a href="#"><i
                                                                class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                                    </li>
                                                </ul>
                                                <div class="product-thumb">
                                                    <img src="assets/img/product/popular-4.png" alt="img">
                                                </div>
                                                <div class="product-content">
                                                    <span class="category">Nescafe USA</span>
                                                    <h3 class="title"><a href="shop-details.html">Foster Farms
                                                            Breast <br>
                                                            Nuggets</a></h3>
                                                    <h4 class="quantity">9 oz Pack</h4>
                                                    <span class="price">$257.00 <span
                                                            class="offer">$450.00</span></span>
                                                </div>
                                                <div class="product-bottom">
                                                    <a href="cart.html">Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ product-tab-section -->

    <section class="product-cta overflow-hidden pb-60">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="cta-wrap-2">
                        <div class="bg-men"><img src="assets/img/bg-img/cta-bg-men.png" alt=""></div>
                        <span>Weekend Discount</span>
                        <h3 class="title">All You Need Under One Roof</h3>
                        <p>Just don’t miss the special offer this week</p>
                        <a href="shop-grid.html" class="cta-btn"><i class="fa-solid fa-plus"></i>shop now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ product-cta -->

    <section class="deal-section pb-60">
        <div class="container">
            <div class="row product-item-wrap gy-xl-0 gy-4 justify-content-center">
                <div class="section-heading">
                    <h2 class="section-title">Best Deal Of The Day</h2>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img src="assets/img/product/product-1.png" alt="img">
                        </div>
                        <div class="product-content">
                            <span class="category">Nescafe USA</span>
                            <h3 class="title"><a href="shop-details.html">Hillshire Farm Thin Sliced Honey Deli
                                    Lunch Meat</a></h3>
                            <h4 class="quantity">9 oz Pack</h4>
                            <span class="price">$257.00 <span class="offer">$450.00</span></span>
                        </div>
                        <div class="product-bottom">
                            <span class="stock">In Stock</span>
                            <div class="line"></div>
                            <span class="number">Available: <span>250</span></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img src="assets/img/product/product-2.png" alt="img">
                        </div>
                        <div class="product-content">
                            <span class="category">Nescafe USA</span>
                            <h3 class="title"><a href="shop-details.html">Greek Gods Probiotic Plain
                                    Traditional</a></h3>
                            <h4 class="quantity">9 oz Pack</h4>
                            <span class="price">$150.00 <span class="offer">$100.00</span></span>
                        </div>
                        <div class="product-bottom">
                            <span class="stock">In Stock</span>
                            <div class="line"></div>
                            <span class="number">Available: <span>250</span></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="product-item product-item-2 product-item-3">
                        <div class="time"><span>Delivery 9 MINS</span></div>
                        <div class="product-left">
                            <div class="product-thumb">
                                <img src="assets/img/product/product-deal-1.png" alt="img">
                            </div>
                            <div class="rr-product-countdown" data-countdown data-date="Jun 30 2024 20:20:22">
                                <div class="rr-product-countdown-inner">
                                    <ul>
                                        <li><span data-days>0</span>d</li>
                                        <li><span data-hours>0</span>h</li>
                                        <li><span data-minutes>0</span>m</li>
                                        <li><span data-seconds>0</span>s</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="product-right">
                            <div class="product-content">
                                <span class="category">Nescafe USA</span>
                                <h3 class="title"><a href="shop-details.html">Aptamil Gold+ Premium
                                        Ifant Formula</a></h3>
                                <h4 class="quantity">500kg</h4>
                                <span class="price">$36.00 <span class="offer">$45.00</span></span>
                            </div>
                            <div class="product-bottom">
                                <a href="cart.html">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="product-item product-item-2 product-item-3 mb-0">
                        <div class="time"><span>Delivery 9 MINS</span></div>
                        <div class="product-left">
                            <div class="product-thumb">
                                <img src="assets/img/product/product-deal-2.png" alt="img">
                            </div>
                            <div class="rr-product-countdown" data-countdown data-date="Jun 30 2024 20:20:22">
                                <div class="rr-product-countdown-inner">
                                    <ul>
                                        <li><span data-days>0</span>d</li>
                                        <li><span data-hours>0</span>h</li>
                                        <li><span data-minutes>0</span>m</li>
                                        <li><span data-seconds>0</span>s</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="product-right">
                            <div class="product-content">
                                <span class="category">Nescafe USA</span>
                                <h3 class="title"><a href="shop-details.html">Aptamil Gold+ Premium
                                        Ifant Formula</a></h3>
                                <h4 class="quantity">500kg</h4>
                                <span class="price">$36.00 <span class="offer">$45.00</span></span>
                            </div>
                            <div class="product-bottom">
                                <a href="cart.html">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img src="assets/img/product/product-3.png" alt="img">
                        </div>
                        <div class="product-content">
                            <span class="category">Nescafe USA</span>
                            <h3 class="title"><a href="shop-details.html">True Lemon Raspberry Natural Juice</a>
                            </h3>
                            <h4 class="quantity">9 oz Pack</h4>
                            <span class="price">$257.00 <span class="offer">$450.00</span></span>
                        </div>
                        <div class="product-bottom">
                            <span class="stock">In Stock</span>
                            <div class="line"></div>
                            <span class="number">Available: <span>250</span></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img src="assets/img/product/product-4.png" alt="img">
                        </div>
                        <div class="product-content">
                            <span class="category">Nescafe USA</span>
                            <h3 class="title"><a href="shop-details.html">Annies Organic Cheddar
                                    Snack Mix</a></h3>
                            <h4 class="quantity">9 oz Pack</h4>
                            <span class="price">$177.00 <span class="offer">$75.00</span></span>
                        </div>
                        <div class="product-bottom">
                            <span class="stock">In Stock</span>
                            <div class="line"></div>
                            <span class="number">Available: <span>250</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ deal-section -->

    <footer class="footer-section bg-grey pt-60" style="--rr-color-theme-primary: #67B02E">
        <div class="container">
            <div class="footer-items">
                <div class="footer-item">
                    <div class="icon">
                        <img src="assets/img/icon/footer-1.png" alt="icon">
                    </div>
                    <div class="content">
                        <h4 class="title">Free Shipping</h4>
                        <span>Free shipping on orders over $65</span>
                    </div>
                </div>
                <div class="footer-item">
                    <div class="icon">
                        <img src="assets/img/icon/footer-2.png" alt="icon">
                    </div>
                    <div class="content">
                        <h4 class="title">Free Returns</h4>
                        <span>30-days free return polic</span>
                    </div>
                </div>
                <div class="footer-item">
                    <div class="icon">
                        <img src="assets/img/icon/footer-3.png" alt="icon">
                    </div>
                    <div class="content">
                        <h4 class="title">Secured Payments</h4>
                        <span>We accept all major credit card</span>
                    </div>
                </div>
                <div class="footer-item item-2">
                    <div class="icon">
                        <img src="assets/img/icon/footer-4.png" alt="icon">
                    </div>
                    <div class="content">
                        <h4 class="title">Customer Service</h4>
                        <span>Top notch customer service</span>
                    </div>
                </div>
            </div>
            <div class="row footer-widget-wrap pb-60">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <div class="widget-header">
                            <h3 class="widget-title">About Store</h3>
                        </div>
                        <div class="footer-contact">
                            <div class="icon"><i class="fa-sharp fa-solid fa-phone-rotary"></i></div>
                            <div class="content">
                                <span>Have Question? Call Us 24/7</span>
                                <a href="tel:+25836922569">+258 3692 2569</a>
                            </div>
                        </div>
                        <ul class="schedule-list">
                            <li><span>Monday - Friday:</span>8:00am - 6:00pm</li>
                            <li><span>Saturday:</span>8:00am - 6:00pm</li>
                            <li><span>Sunday</span> Service Close</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="footer-widget">
                        <div class="widget-header">
                            <h3 class="widget-title">Our Stores</h3>
                        </div>
                        <ul class="footer-list">
                            <li><a href="contact.html">New York</a></li>
                            <li><a href="contact.html">London SF</a></li>
                            <li><a href="contact.html">Los Angele</a></li>
                            <li><a href="contact.html">Chicago</a></li>
                            <li><a href="contact.html">Las Vegas</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="footer-widget">
                        <div class="widget-header">
                            <h3 class="widget-title">Shop Categories</h3>
                        </div>
                        <ul class="footer-list">
                            <li><a href="shop-grid.html">New Arrivals</a></li>
                            <li><a href="shop-grid.html">Best Selling</a></li>
                            <li><a href="shop-grid.html">Vegetables</a></li>
                            <li><a href="shop-grid.html">Fresh Meat</a></li>
                            <li><a href="shop-grid.html">Fresh Seafood</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="footer-widget">
                        <div class="widget-header">
                            <h3 class="widget-title">Useful Links</h3>
                        </div>
                        <ul class="footer-list">
                            <li><a href="contact.html">Privacy Policy</a></li>
                            <li><a href="contact.html">Terms & Conditions</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                            <li><a href="blog-grid.html">Latest News</a></li>
                            <li><a href="contact.html">Our Sitemaps</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <div class="widget-header">
                            <h3 class="widget-title">Our Newsletter</h3>
                        </div>
                        <div class="news-form-wrap">
                            <p class="mb-20">Subscribe to the mailing list to receive updates one the new arrivals
                                and other discounts</p>
                            <div class="footer-form mb-20">
                                <form action="#" class="rr-subscribe-form">
                                    <input class="form-control" type="email" name="email"
                                        placeholder="Email address">
                                    <input type="hidden" name="action" value="mailchimpsubscribe">
                                    <button class="submit">Subscribe</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                            <p class="mb-0">I would like to receive news and special offer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row copyright-content">
                    <div class="col-lg-6">
                        <div class="footer-img-wrap">
                            <span>Payment System:</span>
                            <div class="footer-img"><a href="#"><img
                                        src="assets/img/images/footer-img-1.png" alt="img"></a></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <p>Copyright & Design 2024 <span>©Roiser</span>. All Right Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ./ footer-section -->

    <div id="scroll-percentage" style="--rr-color-theme-primary: #67B02E"><span
            id="scroll-percentage-value"></span></div>
    <!--scrollup-->

    <!-- JS here -->
    <script src="{{asset('guest/js/vendor/jquary-3.6.0.min.js')}}"></script>
    <script src="{{asset('guest/js/vendor/bootstrap-bundle.js')}}"></script>
    <script src="{{asset('guest/js/vendor/imagesloaded-pkgd.js')}}"></script>
    <script src="{{asset('guest/js/vendor/waypoints.min.js')}}"></script>
    <script src="{{asset('guest/js/vendor/venobox.min.js')}}"></script>
    <script src="{{asset('guest/js/vendor/odometer.min.js')}}"></script>
    <script src="{{asset('guest/js/vendor/meanmenu.js')}}"></script>
    <script src="{{asset('guest/js/vendor/smooth-scroll.js')}}"></script>
    <script src="{{asset('guest/js/vendor/jquery.isotope.js')}}"></script>
    <script src="{{asset('guest/js/vendor/countdown.js')}}"></script>
    <script src="{{asset('guest/js/vendor/wow.min.js')}}"></script>
    <script src="{{asset('guest/js/vendor/swiper.min.js')}}"></script>
    <script src="{{asset('guest/js/vendor/nice-select.js')}}"></script>
    <script src="{{asset('guest/js/ajax-form.js')}}"></script>
    <script src="{{asset('guest/js/contact.js')}}"></script>
    <script src="{{asset('guest/js/main.js')}}"></script>

    @vite('resources/js/guest/components/assets/js/main.js')
</body>

</html>
