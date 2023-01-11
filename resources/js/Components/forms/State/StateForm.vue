<script setup>
import { useForm } from '@inertiajs/inertia-vue3';
import { handleErrorMessages, handleSuccessMessages } from '@/Utils/toastMessages';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { ref } from '@vue/reactivity';
import CoordinatesComponent from '@/Components/CoordinatesComponent/CoordinatesComponent.vue';
import axios from 'axios';

const props = defineProps({ state: Object })
// const stateOptions = ref([])
const useDecimal = ref(false)
const state = props.state ? useForm(props.state) : useForm({
    id: '',
    name: '',
    state_id: '',
})
function saveUser() {
    if (state.id) {
        return state.put(route('state.update', state.id), { onError: handleErrorMessages, onSuccess: handleSuccessMessages })

    }
    state.post(route('state.store'), { onError: handleErrorMessages, onSuccess: handleSuccessMessages })
}

// function selectCountry(option, id) {
//     state.state_id = option.id
// }
// async function searchCountry(search, id) {
//     console.log({ search });
//     const res = await axios.get('/api/country/search', { params: { name: search } })
//     stateOptions.value = res.data.length ? res.data[0] : []
// }
// searchCountry();
</script>
<template>
    <form action="" @submit.prevent="saveUser" class="flex flex-col justify-center">
        <div v-if="state.id" class="form-group flex flex-col items-center m-5 capitalize">
            <label for="id">id</label>
            <input type="text" name="id" :disabled="true" id="id" v-model="state.id">
        </div>
        <div class="form-group flex flex-col items-center m-5 capitalize">
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" v-model="state.name">
        </div>
        
        <!-- <div class="form-group flex flex-col items-center m-5 capitalize">
            <label for="state_id">Estado:</label>
            <multiselect id="state_id" name="state_id" placeholder="Selecciona una opción"
                label="fullname" @SearchChange="searchCountry" :preserveSearch="true"
                :internalSearch="false" :options="stateOptions" :allow-empty="false" @select="selectCountry"
                v-model="state.state">

            </multiselect>
        </div> -->
        <div class="form-group flex justify-center">
            <primary-button>{{ state.id ? 'Guardar' : 'Nuevo'}}</primary-button>
        </div>
    </form>

</template>

<style>

</style>