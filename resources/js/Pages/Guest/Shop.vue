<template>

    <Head :title="title" />

</template>



<script setup>
import { onMounted } from 'vue';
import { Head } from '@inertiajs/vue3';
import GuestLayout from '@/Layouts/GuestLayout.vue'


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
