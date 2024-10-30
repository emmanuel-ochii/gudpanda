<template>
    <Head :title="title" />

    <section class="page-header">
            <div class="shape"><img :src="pageHeaderShape" alt="shape"></div>
            <div class="container">
                <div class="page-header-content">
                    <h1 class="title">Become A Giver</h1>
                    <h4 class="sub-title">
                        <span class="home">
                            <Link href="/">
                                <span>Home</span>
                            </Link>
                        </span>
                        <span class="icon"><i class="fa-solid fa-angle-right"></i></span>
                        <span class="inner">
                            <span>Become A Giver</span>
                        </span>
                    </h4>
                </div>
            </div>
        </section>
        <!-- ./ page-header -->

        <section class="about-section pt-100 pb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="about-content">
                            <div class="section-heading">
                                <h2 class="section-title">Creating a World Where Fashion is a Lifestyle</h2>
                                <p>Fashionable content invites us to embark on a fashion-forward journey, where creativity knows no bounds and self-expression is celebrated. So, let's dive into the world of fashion, where trends are set, boundaries are broken.</p>
                            </div>
                            <div class="about-items">
                                <div class="about-item"><i class="fa-sharp fa-solid fa-circle-check"></i>Fast Growing Sells</div>
                                <div class="about-item"><i class="fa-sharp fa-solid fa-circle-check"></i>24/7 Quality Services</div>
                                <div class="about-item"><i class="fa-sharp fa-solid fa-circle-check"></i>Skilled Team Members</div>
                                <div class="about-item"><i class="fa-sharp fa-solid fa-circle-check"></i>Best Quality Services</div>
                            </div>
                            <a href="#" class="rr-primary-btn about-btn">Learn More</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="about-img">
                            <img :src="aboutImg1" alt="about">
                            <div class="play-btn">
                                <a
                                    class="video-popup"
                                    data-autoplay="true"
                                    data-vbtype="video"
                                    href="https://youtu.be/Dngwk0BBLmw?feature=shared">
                                    <div class="play-btn">
                                        <i class="fa-sharp fa-solid fa-play"></i>
                                    </div>
                                    <div class="ripple"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ./ about-section -->

</template>



<script setup>
import { Link } from '@inertiajs/vue3';
import { onMounted } from 'vue';
import { Head } from '@inertiajs/vue3';
import GuestLayout from '../../Layouts/GuestLayout.vue';

// images
import pageHeaderShape from '@/assets/guest/img/shapes/page-header-shape.png';
import aboutImg1 from '@/assets/guest/img/images/about-img-1.jpg';
import service1 from '@/assets/guest/img/service/service-1.png';

const props = defineProps({
    title: String
});

onMounted(() => {
    document.title = props.title;
});
</script>

<script>
export default {
    layout: GuestLayout
}

</script>
