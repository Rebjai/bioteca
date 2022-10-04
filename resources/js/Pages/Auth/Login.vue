<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';

defineProps({
    canResetPassword: Boolean,
    status: String,
});

const form = useForm({
    email: '',
    password: '',
    remember: false
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>
<script>
    import Layout from '@/Layouts/GuestLayout.vue';
    export default {
        layout: Layout
    }
</script>

<template>
        <Head title="Log in" />

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <form @submit.prevent="submit" class="bg-brownbg py-6 px-6 md:w-[60%] xl:w-[40%] w-full rounded my-10">
            <div class="logos flex flex-col justify-center items-center">
                <h1 class="font-['Roboto'] text-xl md:text-2xl uppercase font-medium text-center">Laboratorio de biología <br/> de la conservación</h1>
                <h2 class="font-['Libre_Barcode_128_Text'] text-7xl">BIOTECA</h2>
                <p class="text-zinc-600">sistema de gestión de <br/> colecciones biológicas</p>
            </div>
            <div class="flex flex-col justify-center items-center">
                <InputLabel for="email" value="Usuario" />
                <TextInput id="email" type="email" class="mt-1 block w-[80%]" v-model="form.email" required autofocus autocomplete="username" />
                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div class="mt-4 flex flex-col justify-center items-center">
                <InputLabel for="password" value="Contraseña" />
                <TextInput id="password" type="password" class="mt-1 block w-[80%]" v-model="form.password" required autocomplete="current-password" />
                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="block mt-4 flex flex-col justify-center items-center">
                <label class="flex items-center">
                    <Checkbox name="remember" v-model:checked="form.remember" />
                    <span class="ml-2 text-sm text-gray-600">Recordarme</span>
                </label>
            </div>

            <div class="flex flex-col items-center justify-end mt-4 gap-5">
                <Link v-if="canResetPassword" :href="route('password.request')" class="underline text-sm text-gray-600 hover:text-gray-900">
                    Olvidaste tu contraseña?
                </Link>

                <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    <!-- <svg  viewBox="0 0 752 752" xmlns="http://www.w3.org/2000/svg"><path d="M283.18 417.47a33.06 33.06 0 0 1-17.238 4.926 61.272 61.272 0 0 1-47.359-30.31 70.834 70.834 0 0 1-12.121-38.077 35.518 35.518 0 0 1 14.773-31.066 34.962 34.962 0 0 1 33.91-1.324 72.296 72.296 0 0 1 30.496 26.52 70.599 70.599 0 0 1 12.125 38.453 35.723 35.723 0 0 1-14.586 30.879zm174.85 26.52a82.695 82.695 0 0 1-19.324-21.785c-2.46-5.113-4.356-10.23-6.25-15.344-7.957-21.215-16.859-45.273-56.449-45.273s-48.496 24.059-56.449 45.273c-1.895 5.113-3.79 10.23-6.25 15.344h-.004a82.769 82.769 0 0 1-19.324 21.785c-17.809 16.293-42.242 38.645-14.207 69.523 15.344 17.051 33.531 11.367 52.852 5.305a138.995 138.995 0 0 1 43.38-8.336 139.025 139.025 0 0 1 43.382 8.336 98.165 98.165 0 0 0 28.223 6.058 31.27 31.27 0 0 0 24.63-11.363c27.995-30.879 3.558-53.23-14.247-69.523zm72.742-121.05a34.963 34.963 0 0 0-33.91-1.324 72.33 72.33 0 0 0-30.5 26.52 70.594 70.594 0 0 0-12.121 38.453 35.723 35.723 0 0 0 14.586 30.879 33.05 33.05 0 0 0 17.238 4.926 61.265 61.265 0 0 0 47.355-30.31c17.203-26.522 16.066-57.02-2.688-69.124zm-199.66 23.301h-.004c2.25.07 4.492-.25 6.629-.95 20.648-5.304 29.93-35.425 21.406-68.386s-31.824-54.555-52.473-48.875v.004a33.354 33.354 0 0 0-22.164 25.762 83.866 83.866 0 0 0 .95 42.624c7.726 29.551 26.859 49.82 45.613 49.82zm83.16-.945-.004-.004a19.987 19.987 0 0 0 6.633.949 38.255 38.255 0 0 0 26.898-13.828 83.378 83.378 0 0 0 18.754-35.992 83.866 83.866 0 0 0 .945-42.625 33.311 33.311 0 0 0-7.55-15.914 33.323 33.323 0 0 0-14.614-9.848c-20.836-5.683-43.758 15.914-52.473 48.875-8.71 32.961.723 63.098 21.371 68.383z"/></svg> -->
                    <svg class="w-10 fill-white text-zinc-100" viewBox="120 100 500 500" xmlns="http://www.w3.org/2000/svg"><path d="M283.18 417.47a33.06 33.06 0 0 1-17.24 4.93 61.27 61.27 0 0 1-47.36-30.31A70.83 70.83 0 0 1 206.46 354a35.52 35.52 0 0 1 14.77-31.07 34.96 34.96 0 0 1 33.91-1.32 72.3 72.3 0 0 1 30.5 26.52 70.6 70.6 0 0 1 12.13 38.45c.69 12.1-4.8 23.73-14.59 30.88zm174.85 26.52a82.7 82.7 0 0 1-19.32-21.79c-2.46-5.1-4.36-10.23-6.25-15.34-7.96-21.21-16.86-45.27-56.45-45.27s-48.5 24.06-56.45 45.27c-1.9 5.11-3.8 10.23-6.25 15.34A82.77 82.77 0 0 1 293.97 444c-17.8 16.3-42.24 38.65-14.2 69.52 15.34 17.05 33.52 11.37 52.85 5.3a139 139 0 0 1 43.37-8.33c14.82.45 29.46 3.26 43.39 8.34a98.17 98.17 0 0 0 28.22 6.06 31.27 31.27 0 0 0 24.63-11.37c28-30.88 3.56-53.23-14.25-69.52zm72.74-121.05a34.96 34.96 0 0 0-33.9-1.32 72.33 72.33 0 0 0-30.5 26.52 70.6 70.6 0 0 0-12.13 38.45 35.72 35.72 0 0 0 14.59 30.88 33.05 33.05 0 0 0 17.24 4.92 61.27 61.27 0 0 0 47.35-30.3c17.2-26.53 16.07-57.03-2.69-69.13zm-199.66 23.3c2.25.07 4.49-.25 6.63-.95 20.64-5.3 29.93-35.42 21.4-68.39s-31.82-54.55-52.47-48.87a33.33 33.33 0 0 0-22.16 25.77 83.87 83.87 0 0 0 .95 42.62c7.72 29.55 26.85 49.82 45.6 49.82zm83.16-.94c2.14.68 4.38 1 6.63.94a38.25 38.25 0 0 0 26.9-13.83 83.38 83.38 0 0 0 18.75-35.99 83.87 83.87 0 0 0 .95-42.62 33.31 33.31 0 0 0-22.17-25.77c-20.83-5.68-43.75 15.92-52.47 48.88-8.7 32.96.72 63.1 21.37 68.38z"/></svg>
                    Acceder
                </PrimaryButton>
            </div>
        </form>
</template>
