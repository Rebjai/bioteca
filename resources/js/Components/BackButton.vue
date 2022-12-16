<script setup>
import { Link } from '@inertiajs/inertia-vue3';
import DangerButton from '@/Components/DangerButton.vue';
defineProps({
    href: {
        type: String,
        default: 'submit',
    },
});
</script>

<template>
    <Link :href="href">
    <danger-button class="mx-5">
        Cancelar
    </danger-button>
    </Link>
</template>
