<template>
    <Head :title="title" />

    <section class="page-header">
            <div class="shape"><img src="frontend/img/shapes/page-header-shape.png" alt="shape"></div>
            <div class="container">
                <div class="page-header-content">
                    <h1 class="title">Frequently asked questions</h1>
                    <h4 class="sub-title">
                        <span class="home">
                            <Link href="/">
                                <span>Home</span>
                            </Link>
                        </span>
                        <span class="icon"><i class="fa-solid fa-angle-right"></i></span>
                        <span class="inner">
                            <span>Faq</span>
                        </span>
                    </h4>
                </div>
            </div>
        </section>
        <!-- ./ page-header -->

        <div class="faq-section pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12">
                        <div class="faq-content">
                            <div class="accordion" id="accordionExampleTwo">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            How can add vendor role to the customer?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExampleOne">
                                        <div class="accordion-body">
                                            Convallis a pellentesque nec, egestas non nisi. Nulla porttitor accumsan tincidunt. Vestibulum diam sit amet quam vehicula elementum sed sit amet dui. Curabitur aliquet quam id dui posuere blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget tortor risus.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            What benefits a customer can take?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExampleTwo">
                                        <div class="accordion-body">
                                            Convallis a pellentesque nec, egestas non nisi. Nulla porttitor accumsan tincidunt. Vestibulum diam sit amet quam vehicula elementum sed sit amet dui. Curabitur aliquet quam id dui posuere blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget tortor risus.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            What is your return & exchange policy?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExampleThree">
                                        <div class="accordion-body">
                                            Convallis a pellentesque nec, egestas non nisi. Nulla porttitor accumsan tincidunt. Vestibulum diam sit amet quam vehicula elementum sed sit amet dui. Curabitur aliquet quam id dui posuere blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget tortor risus.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                            How long will it take for me to get my order?
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExampleTwo">
                                        <div class="accordion-body">
                                            Convallis a pellentesque nec, egestas non nisi. Nulla porttitor accumsan tincidunt. Vestibulum diam sit amet quam vehicula elementum sed sit amet dui. Curabitur aliquet quam id dui posuere blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget tortor risus.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFive">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            Can I personally pick up my order?
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExampleTwo">
                                        <div class="accordion-body">
                                            Convallis a pellentesque nec, egestas non nisi. Nulla porttitor accumsan tincidunt. Vestibulum diam sit amet quam vehicula elementum sed sit amet dui. Curabitur aliquet quam id dui posuere blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget tortor risus.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSix">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                            I need to update my shipping address!
                                        </button>
                                    </h2>
                                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExampleTwo">
                                        <div class="accordion-body">
                                            Convallis a pellentesque nec, egestas non nisi. Nulla porttitor accumsan tincidunt. Vestibulum diam sit amet quam vehicula elementum sed sit amet dui. Curabitur aliquet quam id dui posuere blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget tortor risus.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <div class="faq-form">
                            <form action="mail.php">
                                <div class="form-item">
                                    <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Your Name">
                                </div>
                                <div class="form-item">
                                    <input type="text" id="email" name="email" class="form-control" placeholder="Email address*">
                                </div>
                                <div class="form-item">
                                    <textarea id="message" name="message" cols="30" rows="5" class="form-control address" placeholder="Message"></textarea>
                                </div>
                                <div class="submit-btn">
                                    <button class="submit rr-primary-btn">Submit Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
