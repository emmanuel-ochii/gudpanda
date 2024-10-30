<template>
    <Head :title="title" />

</template>



<script setup>
import { Link } from '@inertiajs/vue3';
import { onMounted } from 'vue';
import { Head } from '@inertiajs/vue3';
import GuestLayout from '../../Layouts/GuestLayout.vue';

// images
import pageHeaderShape from '@/assets/guest/img/shapes/page-header-shape.png';

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
