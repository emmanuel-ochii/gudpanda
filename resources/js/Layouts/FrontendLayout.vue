<template>
    <Link href="/"> Home </Link>
    <Link href="/show"> Show </Link>

    <slot>Default</slot>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
</script>
