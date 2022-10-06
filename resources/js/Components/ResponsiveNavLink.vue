<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/inertia-vue3';

const props = defineProps(['href', 'active']);

const classes = computed(() => props.active
    ? 'block pl-3 pr-4 py-2 border-l-4 border-zinc-200 text-base font-bold text-zinc-100 bg-green-800 focus:outline-none focus:text-zinc-800 focus:bg-green-900 focus:border-zinc-100 transition duration-150 ease-in-out'
    : 'block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-zinc-100 bg hover:text-zinc-300 hover:bg-green-600 hover:border-gray-300 focus:outline-none focus:text-zinc-300 focus:bg-green-800 focus:border-gray-300 transition duration-150 ease-in-out'
);
</script>

<template>
    <Link :href="href" :class="classes">
        <slot />
    </Link>
</template>
