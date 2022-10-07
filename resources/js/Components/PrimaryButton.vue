<script setup>
defineProps({
    type: {
        type: String,
        default: 'submit',
    },
});
</script>

<template>
    <button :type="type" class="flex justify-center inline-flex items-center px-4 py-2 bg-green-700 border border-transparent rounded-md font-bold text-xs text-white uppercase tracking-widest hover:bg-green-600 active:bg-green-900 focus:outline-none focus:border-green-900 focus:shadow-outline-green transition ease-in-out duration-150 drop-shadow border-b-8 border-green-800">
        <slot />
    </button>
</template>
