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




        <div class="w-full relative mt-6 bg-white flex justify-center shadow-md overflow-hidden sm:rounded-lg">
            <div
                class="hidden md:block z-0 absolute top-0 left-0 w-[17vw] xl:w-[8vw] transform -rotate-1transform -rotate-transform -rotate-45">
                <!-- <img class="h-full object-cover filter text-slate-100 blur-xs1" src="/images/bat.svg" alt=""> -->
                <svg class="fill-gray-400 filter blur-xs1" width="200pt" height="200pt" version="1.1" viewBox="0 0 752 752"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="m485.58 289.31-88.871 48.297c6.3398-15-3.4336-20.129-3.4336-20.129 1.8047-11.59-4.3477-17.023-4.3477-17.023l-4.5898 17.051c-2.0938-1.0039-5.0586-1.6289-8.3398-1.6289s-6.2461 0.625-8.3398 1.6289l-4.5898-17.051s-6.1523 5.4375-4.3438 17.023c0 0-9.7695 5.1289-3.4375 20.129l-88.867-48.297s-57.441-29.949-92.73 38.641c0 0 50.227-9.6641 61.824 35.742 0 0 56.031 3.8594 63.754 42.504 0 0 40.566-7.7344 56.031 23.188 0 0 0 15.453 12.559 31.871 0 0-2.3672 17.77 8.1484 0.15234 10.523 17.617 8.1484-0.15234 8.1484-0.15234 12.555-16.422 12.555-31.871 12.555-31.871 15.461-30.914 56.031-23.188 56.031-23.188 7.7227-38.645 63.754-42.504 63.754-42.504 11.594-45.406 61.824-35.742 61.824-35.742-35.293-68.586-92.738-38.641-92.738-38.641z" />
                </svg>

            </div>
            <div
                class="hidden md:block z-0 absolute -top-[10vh] -right-[5vw] xl:-right-[2vw] w-[32vw] xl:w-[20vw]  transform -rotate-1transform -rotate-transform rotate-12">
                <svg class="fill-gray-400 filter blur-xs3" width="275pt" height="275pt" version="1.1" viewBox="0 0 752 752" xmlns="http://www.w3.org/2000/svg">
                    <g>
                        <path
                            d="m383.11 357.53c-2.3672 4.7344 0.47266 10.418 5.6836 10.891 14.68 0.94531 34.57 0.94531 50.672-4.7344 5.2109-1.4219 6.1562-8.0508 2.8398-11.84-7.5781-8.0508-11.367-15.629-13.262-23.207 9.9453-3.3164 20.836-13.262 64.879-14.68 37.414-1.4219 59.672-14.68 72.93-27.941 4.7344-4.7344 0-12.312-6.6289-10.891-14.207 3.7891-36.465 5.2109-72.457-0.94531-47.359-8.0508-69.145 8.0508-79.09 23.68-12.785-13.734-36.938-26.047-81.93-9.9453-34.098 12.312-56.355 14.68-71.039 13.734-6.6289-0.47266-9.9453 8.0508-4.2617 11.84 15.156 10.418 39.309 19.891 76.719 14.68 42.621-5.6836 55.883 1.4219 65.828 3.3164-2.832 7.5742-6.1484 17.52-10.883 26.043z" />
                        <path
                            d="m594.8 405.84c-10.418 3.3164-26.992 4.7344-53.516 1.4219-35.047-4.7344-50.672 8.0508-57.777 20.363-9.9453-9.9453-27.941-17.996-61.094-4.7344-24.625 9.9453-41.203 12.785-52.094 12.312-4.7344 0-7.1055 6.1562-2.8398 8.9961 11.367 7.1055 29.836 13.262 57.305 8.5234 31.254-5.6797 41.199-0.94531 48.777 0.47656-1.4219 6.1562-3.7891 13.262-7.1055 19.418-1.8945 3.3164 0.47266 7.5781 4.7344 7.5781 10.891 0.47266 25.574-0.47266 37.414-5.2109 3.7891-1.4219 4.2617-6.1562 1.4219-8.9961-6.1562-5.6836-8.9961-11.367-10.418-16.574 7.1055-2.8398 15.156-10.418 47.359-12.785 27.469-2.3672 43.57-12.785 53.043-22.73 2.8398-3.7969-0.94922-9.4766-5.2109-8.0586z" />
                        <path
                            d="m344.75 398.73c-8.9961 0.94531-22.73-0.47266-44.043-7.5781-27.941-9.4727-43.098-1.8945-50.672 7.1055-6.1562-9.4727-19.891-19.418-49.254-14.207-21.785 4.2617-35.992 3.3164-44.516 1.4219-3.7891-0.94531-6.6289 3.7891-3.7891 6.6289 8.0508 8.0508 22.258 16.102 45.465 16.574 26.52 0.47266 34.098 6.1562 39.781 8.5234-2.3672 4.7344-5.2109 10.418-8.9961 15.156-1.8945 2.3672-0.47266 6.1562 2.3672 7.1055 8.9961 1.8945 20.836 3.7891 31.73 1.8945 3.3164-0.47266 4.7344-4.2617 2.8398-7.1055-3.7891-5.6836-5.2109-10.891-5.6836-15.629 6.1562-0.94531 14.207-6.1562 40.727-2.8398 23.207 2.8398 37.887-3.3164 47.359-9.9453 2.8398-1.8984 0.94531-7.1055-3.3164-7.1055z" />
                    </g>
                </svg>
                <!-- <img class="h-full object-cover filter text-slate-100 blur-xs2" src="/images/bird.svg" alt=""> -->
            </div>
            <slot />
        </div>
</div></template>
