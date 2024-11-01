<template>

    <Head :title="title" />

    <!-- Start Container Fluid -->
    <div class="container-fluid">

    </div>
    <!-- End Container Fluid -->
</template>


<script setup>
import { Link } from '@inertiajs/vue3';
import { onMounted } from 'vue';
import { Head } from '@inertiajs/vue3';
import AdminLayout from '@/Layouts/AdminLayout.vue';


const props = defineProps({
    title: String
});

onMounted(() => {
    document.title = props.title;
});

</script>


<script>
export default {
    layout: AdminLayout
}

</script>
