<script setup>
defineProps({
    message: {
        type: String,
    },
});
</script>

<template>
    <div v-show="message">
        <!-- <p class="text-sm text-red-600 dark:text-red-400">
            {{ message }}
        </p> -->
        <span class="text-sm text-danger">
            {{ message }}
        </span>
    </div>
</template>
