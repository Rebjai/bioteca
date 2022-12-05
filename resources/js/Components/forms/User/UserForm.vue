<script setup>
import { useForm } from '@inertiajs/inertia-vue3';
import PrimaryButton from '@/Components/PrimaryButton.vue';
PrimaryButton

const props = defineProps({ user: Object })
const user = props.user ? useForm(props.user) : useForm({
    id: '',
    name: '',
    email: '',
    role: '',
})
function saveUser() {
if (user.id) {
    return user.put(route('user.update', user.id))
    
}
user.post(route('user.store'))
}
</script>
<template>
    <form action="" @submit.prevent="saveUser" class="flex flex-col justify-center">
        <div class="form-group flex flex-col items-center m-5">
            <label for="id">id</label>
            <input type="text" name="id" :disabled="!user.id" id="id" v-model="user.id">
        </div>
        <div class="form-group flex flex-col items-center m-5">
            <label for="name">nombre</label>
            <input type="text" name="name" id="name" v-model="user.name">
        </div>
        <div class="form-group flex flex-col items-center m-5">
            <label for="email">email</label>
            <input type="text" name="email" id="email" v-model="user.email">
        </div>
        <div class="form-group flex flex-col items-center m-5">
            <label for="role">Rol</label>
            <select name="role" id="role" v-model="user.role">
                <option value="">Elige un rol</option>
                <option value="1">Preparador</option>
                <!-- <option value="0">Colector</option> -->
                <option value="10">Administrador</option>
            </select>
        </div>
        <div class="form-group flex justify-center">
            <primary-button>{{ user.id ? 'Guardar' : 'Nuevo'}}</primary-button>
        </div>
    </form>

</template>

<style>

</style>