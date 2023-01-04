<script setup>
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import BackButton from '@/Components/BackButton.vue';
import UserForm from '@/Components/forms/User/UserForm.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { ref } from '@vue/reactivity';
TextInput

const props = defineProps({ user: {} })
const showModal = ref(false)
const user = props.user ? props.user : {}
const form = useForm({
    email: user.email,
    current_password: '',
    password: '',
    password_confirmation: '',
});
function changePassword() {
    form.put(route('change-password'), {onSuccess: handleSuccessMessages, onError: handleErrorMessages})

}

</script>
<template>
    <div>


        <Head title="Usuarios" />


        <div class="py-12 text-center">
            <!-- <back-button :href="route('user.index')">
            </back-button> -->
            <div class="bg-zinc-100 rounded-lg py-5 max-h-full">
                <h1 class="text-center text-2xl mb-5 font-bold">Datos Generales</h1>
                <UserForm :user="user" />
                <h1 class="text-center text-2xl mt-10 font-bold">Cambiar contraseña</h1>

                <form @submit.prevent="changePassword" class="flex flex-col items-center justify-center">
                    <div v-show="false" class="form-group flex flex-col items-center m-5">
                        <InputLabel for="username" value="Email" />
                        <TextInput id="username" type="email" class="mt-1 block w-full" v-model="form.email" :hidden="true" required
                            autocomplete="username" />
                        <InputError class="mt-2" :message="form.errors.email" />
                    </div>
                    <div class="form-group flex flex-col items-center m-5 w-80">
                        <InputLabel for="current_password" value="Contraseña Actual" />
                        <TextInput id="current_password" type="password" class="mt-1 block w-full" v-model="form.current_password"
                            required autocomplete="current-password" />
                        <InputError class="mt-2" :message="form.errors.current_password" />
                    </div>
                    <div class="form-group flex flex-col items-center m-5 w-80">
                        <InputLabel for="password" value="Contraseña nueva" />
                        <TextInput id="password" type="password" class="mt-1 block w-full" v-model="form.password"
                            required autocomplete="new-password" />
                        <InputError class="mt-2" :message="form.errors.password" />
                    </div>
                    <div class="form-group flex flex-col items-center m-5 w-80">
                        <InputLabel for="password_confirmation" value="Confirmar Contraseña" />
                        <TextInput id="password_confirmation" type="password" class="mt-1 block w-full"
                            v-model="form.password_confirmation" required autocomplete="password_confirmation" />
                        <InputError class="mt-2" :message="form.errors.password_confirmation" />
                    </div>

                    <div class="flex items-center justify-center mt-4">
                        <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                            Cambiar contraseña
                        </PrimaryButton>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
import Layout from '@/Layouts/AuthenticatedLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import handleErrorMessages, { handleSuccessMessages } from '@/Utils/toastMessages';


export default {
    layout: Layout
}
</script>