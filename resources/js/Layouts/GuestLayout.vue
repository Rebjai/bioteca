<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import TecnmLogo from '@/Components/TecnmLogo.vue';
import { Link } from '@inertiajs/inertia-vue3';
defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
})
</script>

<template>
    <div
            class="grid grid-cols-2 top-0 md:grid-cols-3 bg-green-700 min-w-full justify-items-center justify-between px-5 py-2 items-center">
            <!-- <div class="min-w-full logos flex justify-evenly items-center"> -->

            <a href="/" class="">
                <img src="/images/ITVO-logo.png" alt="" class="w-[35vw] max-w-[150px]">
            </a>
            <a href="/" class="">
                <TecnmLogo class="w-[35vw] max-w-[150px] max-h-[150px] text-zinc-100 md:col-start-3" />
            </a>
            <!-- </div> -->
            <h1
                class="text-[min(10vh,60px)] text-[min(10vh,70px)] text-zinc-100 col-span-2 md:col-span-1 md:col-start-2 grid md:row-start-1 font-bold">
                BIOTECA
            </h1>
        </div>
        <div v-if="canLogin" class="items-center min-w-full px-6 py-4 flex justify-end">
            <Link v-if="$page.props.auth.user" :href="route('dashboard')"
                class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</Link>

            <template v-else>
                <Link :href="route('login')" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in
                </Link>

                <Link v-if="canRegister" :href="route('register')"
                    class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</Link>
            </template>
        </div>
    <div class="min-h-[80vh] flex flex-col sm:justify-center items-center sm:pt-0 bg-gray-100">
        
        


        <div class="w-full mt-6 bg-white flex justify-center shadow-md overflow-hidden sm:rounded-lg">
            <slot />
        </div>
    </div>
</template>
