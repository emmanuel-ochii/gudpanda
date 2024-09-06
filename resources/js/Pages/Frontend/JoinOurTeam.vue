<template>

    <Head :title="title" />

    <section class="page-header">
        <div class="shape"><img src="../../../frontend/img/shapes/page-header-shape.png" alt="shape"></div>
        <div class="container">
            <div class="page-header-content">
                <h1 class="title">Join Our Team</h1>
                <h4 class="sub-title">
                    <span class="home">
                        <Link href="/">
                            <span>Home</span>
                        </Link>
                    </span>
                    <span class="icon"><i class="fa-solid fa-angle-right"></i></span>
                    <span class="inner">
                        <span>Join Our Team</span>
                    </span>
                </h4>
            </div>
        </div>
    </section>
    <!-- ./ page-header -->

    <section class="blog-details pt-130 pb-130">
        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-9 col-md-12">
                    <div class="blog-details">
                        <div class="blog-details-img">
                            <img src="../../../frontend/img/blog/blog-details-img.jpg" alt="blog">
                        </div>
                        <div class="blog-details-content-wrap">
                            <div class="blog-details-content">
                                <h2 class="details-title mb-25">Fueling Your Passion for All Things Stylish</h2>
                                <p class="mb-20">Donec rutrum congue leo eget malesuada. Curabitur aliquet quam posuere
                                    blandit. Vivamus suscipit tortor eget felis porttitor volutpa estibulum ante ipsum
                                    primis in faucibus orci luctus et ultrices posuere cubilia Curae Donec velit neque,
                                    auctor sit amet aliquam vel, ullamcorper sit amet ligula.</p>
                                <p>Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vivamus suscipit tortor
                                    eget felis porttitor volutpat. Quisque velit nisi, pretium ut lacinia in, elementum
                                    id enim. Donec rutrum congue leo eget malesuada. Curabitur non nulla sit amet nisl
                                    tempus convallis quis ac lectus. Pellentesque in ipsum id orci porta dapibus
                                    Vestibulum ante ipsum primis in faucibus orci luctus ultrices posuere cubilia Curae;
                                    Donec velit neque, auctor sit amet aliquam ullamcorper sit amet ligula.</p>
                                <blockquote class="mb-30">
                                    <div class="content">
                                        <p>“Cras ultricies ligula sed magna dictum porta aesent sapien massa
                                            pellentesque nec egestas vamus magna justo”</p>
                                    </div>
                                </blockquote>
                                <p class="mb-30">Aptent vestibulum sodales porttitor hac torquent commodo magnis cum
                                    molestie donec, egestas ultrices ultricies eget sapien tortor odio condimentum
                                    dictum eu, lacus phasellus velit elementum maecenas fringilla placerat suscipit
                                    libero. Suscipit fermentum rutrum nisl lacinia varius duis euismod a praesent
                                    feugiat inceptos leo, senectus ac facilisis placerat mi posuere lobortis aliquam
                                    litora eget dictumst semper, vestibulum morbi aenean volutpat accumsan.</p>
                                <div class="details-img-wrap mt-40 mb-40">
                                    <img src="../../../frontend/img/blog/blog-details-img-1.png" alt="blog">
                                    <img src="../../../frontend/img/blog/blog-details-img-2.png" alt="blog">
                                </div>
                                <p class="mb-50">Vestibulum ante ipsum primis in faucibus orci luctus ultrices posuere
                                    cubilia Curae; Donec velit neque, auctor sit amet aliquam ullamcorper sit amet
                                    ligula. Quisque velit , pretium ut lacinia in, elementum id enim. Vivamus suscipit
                                    tortor eget felis porttitor volutpat. Quisque velit nisi, pretium ut lacinia in,
                                    elementum id enim.</p>
                            </div>
                        </div>
                        <!-- ./ form-wrap -->
                    </div>
                </div>
                <!-- Sidebar Widgets -->
            </div>
        </div>
    </section>
    <!-- ./ Blog Details -->

</template>



<script setup>
import { Link } from '@inertiajs/vue3';
import { onMounted } from 'vue';
import { Head } from '@inertiajs/vue3';
import FrontendLayout from "../../Layouts/FrontendLayout.vue";

const props = defineProps({
    title: String
});

onMounted(() => {
    document.title = props.title;
});
</script>

<script>
export default {
    layout: FrontendLayout
}

</script>
