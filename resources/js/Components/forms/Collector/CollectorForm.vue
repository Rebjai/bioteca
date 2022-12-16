<script setup>
import { useForm } from '@inertiajs/inertia-vue3';
import PrimaryButton from '@/Components/PrimaryButton.vue';
PrimaryButton

const props = defineProps({ collector: Object })
const collector = props.collector ? useForm(props.collector) : useForm({
    id: '',
    name: '',
    first_surname: '',
    second_surname: '',
})
function saveUser() {
    if (collector.id) {
        return collector.put(route('collector.update', collector.id))

    }
    collector.post(route('collector.store'))
}
</script>
<template>
    <form action="" @submit.prevent="saveUser" class="flex flex-col justify-center">
        <div class="form-group flex flex-col items-center m-5 capitalize">
            <label for="id">id</label>
            <input type="text" name="id" :disabled="true" id="id" v-model="collector.id">
        </div>
        <div class="form-group flex flex-col items-center m-5 capitalize">
            <label for="name">nombre</label>
            <input type="text" name="name" id="name" v-model="collector.name">
        </div>
        <div class="form-group flex justify-center items-center m-5">
            <div class="form-group flex flex-col items-center m-5 capitalize">
                <label for="first_surname">Apellido Paterno</label>
                <input type="text" name="first_surname" id="first_surname" v-model="collector.first_surname">
            </div>
            <div class="form-group flex flex-col items-center m-5 capitalize">
                <label for="second_surname">Apellido Materno</label>
                <input type="text" name="second_surname" id="second_surname" v-model="collector.second_surname">
            </div>

        </div>
        <div class="form-group flex justify-center">
            <primary-button>{{ collector.id ? 'Guardar' : 'Nuevo'}}</primary-button>
        </div>
    </form>

</template>

<style>

</style>