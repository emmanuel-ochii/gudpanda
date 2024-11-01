<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import { onMounted } from 'vue';
import InputError from "@/Components/InputError.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";
import { route } from 'ziggy-js';

// images
import pageHeaderShape from "@/assets/guest/img/shapes/page-header-shape.png";

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
    title: {
        type: String,
    }
});

const form = useForm({
    email: "",
    password: "",
    remember: false,
});

const submit = () => {
    form.post(route("login"), {
        onFinish: () => form.reset("password"),
    });
};


onMounted(() => {
    document.title = props.title;
});

</script>

<template>
    <GuestLayout>

        <Head title="Log in" />

        <section class="page-header">
            <div class="shape"><img :src="pageHeaderShape" alt="shape" /></div>
            <div class="container">
                <div class="page-header-content">
                    <h1 class="title">Account Login</h1>
                    <h4 class="sub-title">
                        <span class="home">
                            <a href="#">
                                <span>Home</span>
                            </a>
                        </span>
                        <span class="icon"><i class="fa-solid fa-angle-right"></i></span>
                        <span class="inner">
                            <span>Account Login</span>
                        </span>
                    </h4>
                </div>
            </div>
        </section>
        <!-- ./ page-header -->

        <section class="login-area pt-100 pb-100">
            <div class="container">
                <div class="login-wrap text-center">
                    <h3 class="title mb-6"> Login Into Your Account </h3>

                    <form @submit.prevent="submit" class="login-form">

                        <div class="form-item">
                            <h4 class="form-header"> Username or email address </h4>
                            <input type="email" id="email" name="email" v-model="form.email" class="form-control" autocomplete="email"
                                required placeholder="Enter your email" />

                            <InputError class="mt-2 text-danger" :message="form.errors.email" />

                            <!-- <span v-if="form.errors.email" class="mt-2">{{ form.errors.email }}</span> -->
                        </div>

                        <div class="form-item">
                            <h4 class="form-header"> Password* </h4>

                            <input type="password" id="password" name="password" class="form-control"
                                v-model="form.password" required autocomplete="current-password" />

                            <InputError class="mt-2" :message="form.errors.password" />

                            <div v-if="form.errors.password" class="text-red-600 mt-1">{{ form.errors.password }}</div>
                        </div>

                        <div class="form-item">
                            <div class="checkbox-wrap">
                                <input type="checkbox" id="remember" name="remember" v-model="form.remember" />
                                <label for="remember"> Remember me </label><br />
                            </div>
                        </div>

                        <div class="submit-btn mt-4">
                            <button type="submit" class="rr-primary-btn" :disabled="form.processing">
                                <span v-if="form.processing"> Logging in... </span>
                                <span v-else> Login Account </span>
                            </button>
                        </div>

                        <Link :href="route('password.request')" class="forgot mt-4 inline-block">
                        Lost your password?
                        </Link>

                    </form>
                </div>
            </div>
        </section>

        <div v-if="status" class="mb-4 text-sm font-medium text-green-600">
            {{ status }}
        </div>

        

    </GuestLayout>
</template>
