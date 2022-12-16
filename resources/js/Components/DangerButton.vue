<script setup>
defineProps({
    type: {
        type: String,
        default: 'submit',
    },
});
</script>

<template>
    <button :type="type" class="flex justify-center inline-flex items-center px-4 py-2 bg-red-700 border border-transparent rounded-md font-bold text-xs text-white uppercase tracking-widest hover:bg-red-600 hover:border-red-700 active:bg-red-900 focus:outline-none focus:border-red-900 focus:shadow-outline-red transition ease-in-out duration-150 drop-shadow border-b-8 border-red-800">
        <slot />
    </button>
</template>
