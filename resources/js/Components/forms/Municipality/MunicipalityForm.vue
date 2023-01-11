<script setup>
import { useForm } from '@inertiajs/inertia-vue3';
import { handleErrorMessages, handleSuccessMessages } from '@/Utils/toastMessages';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { ref } from '@vue/reactivity';
import CoordinatesComponent from '@/Components/CoordinatesComponent/CoordinatesComponent.vue';
import axios from 'axios';

const props = defineProps({ municipality: Object })
const stateOptions = ref([])
const useDecimal = ref(false)
const municipality = props.municipality ? useForm(props.municipality) : useForm({
    id: '',
    name: '',
    state_id: '',
})
function saveUser() {
    if (municipality.id) {
        return municipality.put(route('municipality.update', municipality.id), { onError: handleErrorMessages, onSuccess: handleSuccessMessages })

    }
    municipality.post(route('municipality.store'), { onError: handleErrorMessages, onSuccess: handleSuccessMessages })
}

function selectState(option, id) {
    municipality.state_id = option.id
}
async function searchState(search, id) {
    console.log({ search });
    const res = await axios.get('/api/state/search', { params: { name: search } })
    stateOptions.value = res.data.length ? res.data[0] : []
}
searchState();
</script>
<template>
    <form action="" @submit.prevent="saveUser" class="flex flex-col justify-center">
        <div class="form-group flex flex-col items-center m-5 capitalize">
            <label for="id">id</label>
            <input type="text" name="id" :disabled="true" id="id" v-model="municipality.id">
        </div>
        <div class="form-group flex flex-col items-center m-5 capitalize">
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" v-model="municipality.name">
        </div>
        
        <div class="form-group flex flex-col items-center m-5 capitalize">
            <label for="state_id">Estado:</label>
            <multiselect id="state_id" name="state_id" placeholder="Selecciona una opción"
                label="fullname" @SearchChange="searchState" :preserveSearch="true"
                :internalSearch="false" :options="stateOptions" :allow-empty="false" @select="selectState"
                v-model="municipality.state">

            </multiselect>
        </div>
        <div class="form-group flex justify-center">
            <primary-button>{{ municipality.id ? 'Guardar' : 'Nuevo'}}</primary-button>
        </div>
    </form>

</template>

<style>

</style>