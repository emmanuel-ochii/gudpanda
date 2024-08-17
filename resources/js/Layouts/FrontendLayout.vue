<template>
    <div>
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
    </div>
    <!--
    <Link href="/"> Home </Link>
    <Link href="/show"> Show </Link>

    -->
    <slot>Default</slot>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<script>
export default {
    mounted() {
        this.$inertia.layout = 'layouts.frontend';
    }
}
</script>


