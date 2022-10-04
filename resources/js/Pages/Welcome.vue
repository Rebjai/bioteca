<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';


</script>

<script>
    import Layout from '@/Layouts/GuestLayout.vue';
    export default {
        layout: Layout
    }
</script>

<template>
    <Head title="Welcome" />

    <div class="min-w-[80%] ">
        <form action="">
            <div class="logo">

            </div>
            <div class="form-group">
                <label for="username">
                    Usuario:
                </label>
                <input type="text" placeholder="Usuario" name="username">
            </div>
        </form>
    </div>


</template>
