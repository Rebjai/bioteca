<script setup>
import { Link } from '@inertiajs/inertia-vue3';
import { computed } from '@vue/runtime-core';
const props = defineProps(['active']);
const classes = computed(() => props.active
    ? 'block w-full px-4 py-2 text-left text-sm bg-green-700 font-bold leading-5 text-zinc-200 hover:bg--100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out'
    : 'block w-full px-4 py-2 text-left text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out'
);
</script>

<template>
    <Link :class="classes">
        <slot />
    </Link>
</template>
