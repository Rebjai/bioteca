<script setup>
import { ref } from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import { Link } from '@inertiajs/inertia-vue3';
import TecnmLogo from '@/Components/TecnmLogo.vue';

const showingNavigationDropdown = ref(false);
</script>

<template>
    <div>
        <div class="min-h-screen bg-gray-100">
            <nav class="bg-green-700 border-b border-gray-100 rounded-xl">
                <div
                    class="grid grid-cols-[1fr_2fr] md:grid-cols-3 bg-green-700 min-w-full md:justify-items-center md:justify-between justify-start px-5 py-2 items-center">
                    <!-- <div class="min-w-full logos flex justify-evenly items-center"> -->

                    <a href="/" class="">
                        <img src="/images/ITVO-logo.png" alt="" class="w-[35vw] max-w-[100px] md:max-w-[150px]">
                    </a>
                    <a href="/" class="hidden md:block">
                        <TecnmLogo
                            class="w-[35vw] max-w-[100px] md:max-w-[150px] max-h-[150px] text-zinc-100 md:col-start-3" />
                    </a>
                    <!-- </div> -->
                    <h1
                        class="capitalize text-[min(5vw,25px)] md:text-[min(3vw,50px)] text-zinc-100 col-span-2 col-start-2 md:col-span-1 md:col-start-2 grid md:row-start-1 font-bold">
                        Laboratorio de biología <br/> de la conservación
                    </h1>
                </div>
                <!-- Primary Navigation Menu -->
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16">
                        <div class="flex">
                            <!-- Logo -->
                            <div class="shrink-0 flex items-center">
                                <Link :href="route('dashboard')">
                                    
                                <!-- <ApplicationLogo class="block h-9 w-auto" /> -->
                                <p class="font-['Libre_Barcode_128_Text'] text-2xl text-zinc-200">BIOTECA</p>

                                
                            </Link>
                            </div>


                            <!-- Navigation Links -->
                            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                                <NavLink :href="route('dashboard')" :active="route().current('dashboard')">
                                    Dashboard
                                </NavLink>
                                <NavLink :href="route('collection.index')" :active="route().current('collection.index')">
                                    Colección
                                </NavLink>
                                <NavLink v-if="$page.props.auth" :href="route('user.index')" :active="route().current('user.index')">
                                    Usuarios
                                </NavLink>
                              
                                <NavLink :href="route('species.index')" :active="route().current('species.index')">
                                    Especies
                                </NavLink>
                                
                            </div>
                        </div>

                         <!-- Page Heading -->
                         <header class="" v-if="$page.props.title">
                                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                                        <h2 class="font-semibold text-xl text-zinc-100 leading-tight tracking-wider">
                                            {{$page.props.title}}
                                        </h2>
                                    </div>
                                </header>
                        <div class="hidden sm:flex sm:items-center sm:ml-6">
                            <!-- Settings Dropdown -->
                            <div class="ml-3 relative">
                                <Dropdown align="right" width="48">
                                    <template #trigger>
                                        <span class="inline-flex rounded-md">
                                            <button type="button"
                                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-zinc-800 bg-zinc-200 hover:text-zinc-600 focus:outline-none transition ease-in-out duration-150">
                                                {{ $page.props.auth.user.name }}

                                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </span>
                                    </template>

                                    <template #content>
                                        <DropdownLink :href="route('logout')" method="post" as="button">
                                            Log Out
                                        </DropdownLink>
                                    </template>
                                </Dropdown>
                            </div>
                        </div>

                        <!-- Hamburger -->
                        <div class="-mr-2 flex items-center sm:hidden">
                            <button @click="showingNavigationDropdown = ! showingNavigationDropdown"
                                class="inline-flex items-center justify-center p-2 rounded-md bg-zinc-200 text-zinc-700 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path
                                        :class="{'hidden': showingNavigationDropdown, 'inline-flex': ! showingNavigationDropdown }"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16" />
                                    <path
                                        :class="{'hidden': ! showingNavigationDropdown, 'inline-flex': showingNavigationDropdown }"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Responsive Navigation Menu -->
                <div :class="{'block': showingNavigationDropdown, 'hidden': ! showingNavigationDropdown}"
                    class="sm:hidden">
                    <div class="pt-2 pb-3 space-y-1">
                        <ResponsiveNavLink :href="route('dashboard')" :active="route().current('dashboard')">
                            Colección
                        </ResponsiveNavLink>
                        <ResponsiveNavLink :href="route('dashboard')" :active="route().current('tags')">
                            Etiquetado
                        </ResponsiveNavLink>
                        <ResponsiveNavLink :href="route('dashboard')" :active="route().current('users')">
                            Usuarios
                        </ResponsiveNavLink>
                        <ResponsiveNavLink :href="route('dashboard')" :active="route().current('species')">
                            Especies
                        </ResponsiveNavLink>
                    </div>

                    <!-- Responsive Settings Options -->
                    <div class="pt-4 pb-1 border-t border-gray-300">
                        <div class="px-4">
                            <div class="font-medium text-base text-zinc-300">{{ $page.props.auth.user.name }}</div>
                            <div class="font-medium text-sm text-gray-400">{{ $page.props.auth.user.email }}</div>
                        </div>

                        <div class="mt-3 space-y-1">
                            <ResponsiveNavLink :href="route('logout')" method="post" as="button">
                                Log Out
                            </ResponsiveNavLink>
                        </div>
                    </div>
                </div>
            </nav>



            <!-- Page Content -->
            <main>
                <slot />
            </main>
        </div>
    </div>
</template>
