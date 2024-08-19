<template>
    <Head :title="title" />

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
