<script setup>
import { useForm } from '@inertiajs/inertia-vue3';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import Checkbox from '@/Components/Checkbox.vue';
import handleErrorMessages, { handleSuccessMessages } from '@/Utils/toastMessages';
import { ref } from '@vue/reactivity';
import axios from 'axios';

const assistantOptions = ref([]);
const props = defineProps({ user: Object })
const user = props.user ? useForm(props.user) : useForm({
    id: '',
    name: '',
    first_surname: '',
    second_surname: '',
    email: '',
    role: '',
    new_assistant: true,
    assistant_id: '',
    profile: '',
})
function saveUser() {
if (user.id) {
    return user.put(route('user.update', user.id),{onError: handleErrorMessages, onSuccess: handleSuccessMessages})
    
}
user.post(route('user.store'), {onError: handleErrorMessages, onSuccess: handleSuccessMessages})
}

async function searchAssistants(search='', loading) {
    console.log({ search });
    const res = await axios.get('/api/assistants/search', { params: { name: search} })
    assistantOptions.value = res.data.length ? res.data[0] : []
}
function selectAssistant(option, id) {
    user.assistant_id = option.id
}
function assistantChanged(e) {
    if (user.new_assistant) {
        return
    }
    searchAssistants()
}
</script>
<template>
    <form action="" @submit.prevent="saveUser" class="flex flex-col justify-center">
        <div v-if="user.id" class="form-group flex flex-col items-center m-5">
            <label for="id">id</label>
            <input type="text" name="id" :disabled="user.id" id="id" v-model="user.id">
        </div>
        <div class="form-group flex flex-col items-center m-5">
            <label class="capitalize" for="name">nombre</label>
            <input type="text" name="name" id="name" v-model="user.name">
        </div>
        <div class="form-group flex flex-col items-center m-5">
            <label class="capitalize" for="name">Apellido Paterno</label>
            <input type="text" name="name" id="name" v-model="user.first_surname">
        </div>
        <div class="form-group flex flex-col items-center m-5">
            <label class="capitalize" for="name">Apellido Materno</label>
            <input type="text" name="name" id="name" v-model="user.second_surname">
        </div>
        <div class="form-group flex flex-col items-center m-5">
            <label class="capitalize" for="email">email</label>
            <input type="text" name="email" id="email" v-model="user.email">
        </div>
        <div class="form-group flex flex-col items-center m-5">
            <label class="capitalize" for="role">Rol</label>
            <select name="role" id="role" v-model="user.role">
                <option value="">Elige un rol</option>
                <option value="1">Preparador</option>
                <option value="2">Supervisor</option>
                <!-- <option value="0">Colector</option> -->
                <option value="10">Administrador</option>
            </select>
        </div>
        <div v-show="user.role == 1 && !user.id"  class="block mt-4 flex flex-col justify-center items-center">
                <label class="flex items-center">
                    <Checkbox name="new_assistant" v-model:checked="user.new_assistant" @change="assistantChanged"/>
                    <span class="ml-2 text-sm text-gray-600">Nuevo Registro de Asistente</span>
                </label>
            </div>

        <div v-show="user.role == 1 && !user.new_assistant && !user.id" class="form-group flex flex-col items-center m-5">
            <label for="email">Asistente</label>
            <multiselect id="assistant" name="assistant_id" placeholder="Selecciona una opción" label="fullname"
                @SearchChange="searchAssistants" :preserveSearch="true" :internalSearch="false" :options="assistantOptions"
                :allow-empty="false" @select="selectAssistant" v-model="user.profile">

            </multiselect>
        </div>
        <div class="form-group flex justify-center">
            <primary-button>{{ user.id ? 'Guardar' : 'Nuevo'}}</primary-button>
        </div>
    </form>

</template>

<style>

</style>