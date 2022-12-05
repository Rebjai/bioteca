<script setup>
import { useForm } from '@inertiajs/inertia-vue3';
import PrimaryButton from '@/Components/PrimaryButton.vue';
PrimaryButton

const props = defineProps({assistant: Object})
const assistant = props.assistant? useForm(props.assistant):{
    id:'',
    name:'',
}
function saveUser() {

    
}
</script>
<template>
    <form action="" @submit.prevent="saveUser" class="flex flex-col justify-center">
        <div class="form-group flex flex-col items-center m-5">
            <label for="id">id</label>
            <input type="text" name="id" id="id" v-model="assistant.id">
        </div>
       <!-- <div class="form-group flex flex-col items-center m-5">
            <label for="name">nombre</label>
            <input type="text" name="name" id="name" v-model="assistant.name">
        </div> -->
        <div class="form-group flex justify-center">
            <primary-button>{{assistant.id? 'Guardar': 'Nuevo'}}</primary-button>
        </div>
    </form>

</template>

<style>

</style>