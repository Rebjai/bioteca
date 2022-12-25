<script setup>
import { useForm } from '@inertiajs/inertia-vue3';
import {handleErrorMessages, handleSuccessMessages} from '@/Utils/toastMessages';
import PrimaryButton from '@/Components/PrimaryButton.vue';
PrimaryButton

const props = defineProps({ assistant: Object })
const assistant = props.assistant ? useForm(props.assistant) : useForm({
    id: '',
    name: '',
    first_surname: '',
    second_surname: '',
})
function saveUser() {
    if (assistant.id) {
        return assistant.put(route('assistant.update', assistant.id), {onError: handleErrorMessages, onSuccess: handleSuccessMessages})

    }
    assistant.post(route('assistant.store'), {onError: handleErrorMessages, onSuccess: handleSuccessMessages})
}
</script>
<template>
    <form action="" @submit.prevent="saveUser" class="flex flex-col justify-center">
        <div class="form-group flex flex-col items-center m-5 capitalize">
            <label for="id">id</label>
            <input type="text" name="id" :disabled="true" id="id" v-model="assistant.id">
        </div>
        <div class="form-group flex flex-col items-center m-5 capitalize">
            <label for="name">nombre</label>
            <input type="text" name="name" id="name" v-model="assistant.name">
        </div>
        <div class="form-group flex justify-center items-center m-5">
            <div class="form-group flex flex-col items-center m-5 capitalize">
                <label for="first_surname">Apellido Paterno</label>
                <input type="text" name="first_surname" id="first_surname" v-model="assistant.first_surname">
            </div>
            <div class="form-group flex flex-col items-center m-5 capitalize">
                <label for="second_surname">Apellido Materno</label>
                <input type="text" name="second_surname" id="second_surname" v-model="assistant.second_surname">
            </div>

        </div>
        <div class="form-group flex justify-center">
            <primary-button>{{ assistant.id ? 'Guardar' : 'Nuevo'}}</primary-button>
        </div>
    </form>

</template>

<style>

</style>