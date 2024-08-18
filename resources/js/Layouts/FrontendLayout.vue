<template>
    <!-- header-area-start -->
    <header class="header header-2 sticky-active" style="--rr-color-theme-primary: #E53E3E">
        <div class="top-bar">
            <div class="container">
                <div class="top-bar-inner">
                    <div class="top-bar-left">
                        <ul class="top-left-list">
                            <li><Link href="/about">About</Link></li>
                            <!-- <li><a href="contact.html">My Account</a></li> on login -->
                            <li><a href="#">Wishlist</a></li>
                            <li><a href="#">Checkout</a></li>
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
                            <Link href="/">
                                <img src="frontend/img/logo/logo-3.png" alt="Logo">
                            </Link>
                        </div>
                        <div class="form-wrap">

                            <div class="nice-select select-control country" tabindex="0">
                                <span class="current">Categories</span>
                                <ul class="list">
                                    <li data-value="" class="option selected focus">Categories</li>
                                    <li data-value="vdt" class="option">Accessories</li>
                                    <li data-value="vdt" class="option">Appliances</li>
                                    <li data-value="can" class="option">Automotive</li>
                                    <li data-value="uk" class="option">Beauty</li>
                                    <li data-value="uk" class="option">Books</li>
                                    <li data-value="uk" class="option">Clothing</li>
                                    <li data-value="uk" class="option">Electronics</li>
                                    <li data-value="uk" class="option">Furniture</li>
                                    <li data-value="uk" class="option">Home & Garden</li>
                                    <li data-value="uk" class="option">Jewelry</li>
                                    <li data-value="uk" class="option">Kids & Baby</li>
                                    <li data-value="uk" class="option">Sports & Outdoors</li>
                                    <li data-value="uk" class="option">Toys & Games</li>
                                </ul>
                            </div>

                            <div class="category-form-wrap">
                                <form class="header-form" action="#">
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
                                <a href="#" class="icon">
                                    <i class="fa-sharp fa-regular fa-heart"></i>
                                </a>
                            </li>
                            <li><Link href="#" class="login-btn">Login / Register</Link></li>
                            <li>
                                <div class="header-cart-btn">
                                    <a href="#" class="icon">
                                        <i class="fa-light fa-bag-shopping"></i>
                                    </a>
                                    <span>₦0.00</span>
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
                        <Link href="/">
                            <!-- <img src="frontend/img/logo/logo-2.png" alt="Logo"> -->
                        </Link>
                    </div>
                    <div class="header-menu-wrap">
                        <div class="mobile-menu-items">
                            <ul>
                                <li>
                                    <Link href="/"> Home </Link>
                                </li>
                                <li>
                                    <Link href="/shop"> Shop </Link>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">About Us</a>
                                    <ul>
                                        <li><a href="#">What We Do</a></li>
                                        <li><a href="#">Join Our Team</a></li>
                                    </ul>
                                </li>
                                <li><Link href="/become-a-giver"> Become A Giver</Link></li>
                                <li><Link href="bid"> Bid </Link></li>
                                <li><Link href="faq"> FAQs </Link></li>
                                <li><Link href="contact">Contact</Link></li>
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

    <div class="mobile-side-menu" style="--rr-color-theme-primary: #E53E3E">
        <div class="side-menu-content">
            <div class="side-menu-head">
                <a href='#'><img src="frontend/img/logo/logo-2.png" alt="logo"></a>
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

    <!-- <div id="preloader" style="--rr-color-theme-primary: #E53E3E">
        <div class="preloader-close">X</div>
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div> -->
    <!-- ./ preloader -->

    <slot>Default</slot>

    <footer class="footer-section bg-grey pt-60" style="--rr-color-theme-primary: #E53E3E">
        <div class="container">
            <div class="footer-items">
                <div class="footer-item">
                    <div class="icon">
                        <img src="frontend/img/icon/footer-1.png" alt="icon">
                    </div>
                    <div class="content">
                        <h4 class="title">Free Shipping</h4>
                        <span>Free shipping on orders over ₦65</span>
                    </div>
                </div>
                <div class="footer-item">
                    <div class="icon">
                        <img src="frontend/img/icon/footer-2.png" alt="icon">
                    </div>
                    <div class="content">
                        <h4 class="title">Free Returns</h4>
                        <span>30-days free return policy</span>
                    </div>
                </div>
                <div class="footer-item">
                    <div class="icon">
                        <img src="frontend/img/icon/footer-3.png" alt="icon">
                    </div>
                    <div class="content">
                        <h4 class="title">Secured Payments</h4>
                        <span>We accept all major credit card</span>
                    </div>
                </div>
                <div class="footer-item item-2">
                    <div class="icon">
                        <img src="frontend/img/icon/footer-4.png" alt="icon">
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
                            <h3 class="widget-title">About Gudpanda</h3>
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
                    <!-- <div class="footer-widget">
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
                    </div> -->
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
                            <p class="mb-20">Subscribe to the mailing list to receive updates one the new arrivals and
                                other discounts</p>
                            <div class="footer-form mb-20">
                                <form action="#" class="rr-subscribe-form">
                                    <input class="form-control" type="email" name="email" placeholder="Email address">
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
                            <span>Acceptable Payments:</span>
                            <div class="footer-img"><a href="#"><img src="frontend/img/images/footer-img-1.png"
                                        alt="img"></a></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <p>Copyright & Design 2024 <span>© Gudpanda </span>. All Right Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ./ footer-section -->

    <div id="scroll-percentage" style="--rr-color-theme-primary:#E53E3E"><span id="scroll-percentage-value"></span>
    </div>
    <!--scrollup-->
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
</script>
