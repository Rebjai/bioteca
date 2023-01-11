<script setup>
import { useForm } from '@inertiajs/inertia-vue3';
import { handleErrorMessages, handleSuccessMessages } from '@/Utils/toastMessages';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { ref } from '@vue/reactivity';
import CoordinatesComponent from '@/Components/CoordinatesComponent/CoordinatesComponent.vue';
import axios from 'axios';

const props = defineProps({ location: Object })
const municipalityOptions = ref([])
const useDecimal = ref(false)
const location = props.location ? useForm(props.location) : useForm({
    id: '',
    name: '',
    latitude: '',
    longitude: '',
})
function saveUser() {
    if (location.id) {
        return location.put(route('location.update', location.id), { onError: handleErrorMessages, onSuccess: handleSuccessMessages })

    }
    location.post(route('location.store'), { onError: handleErrorMessages, onSuccess: handleSuccessMessages })
}

function selectMunicipality(option, id) {
    location.municipality_id = option.id
}
async function searchMunicipality(search, id) {
    console.log({ search });
    const res = await axios.get('/api/municipality/search', { params: { name: search } })
    municipalityOptions.value = res.data.length ? res.data[0] : []
}
searchMunicipality();
</script>
<template>
    <form action="" @submit.prevent="saveUser" class="flex flex-col justify-center">
        <div class="form-group flex flex-col items-center m-5 capitalize">
            <label for="id">id</label>
            <input type="text" name="id" :disabled="true" id="id" v-model="location.id">
        </div>
        <div class="form-group flex flex-col items-center m-5 capitalize">
            <label for="name">nombre</label>
            <input type="text" name="name" id="name" v-model="location.name">
        </div>
        <div class="form-group flex flex-col items-center m-5 capitalize">
            <label for="zip_code">Código postal</label>
            <input type="text" name="zip_code" id="zip_code" v-model="location.zip_code">
        </div>
        <!-- <div class="form-group flex flex-col justify-center items-center m-5">
            <div class="form-group flex flex-col items-center m-5 capitalize">
                <label for="latitude">latitud</label>
                <CoordinatesComponent v-model="location.latitude" :useDMS="useDecimal" />
                <input type="text" name="latitude" id="latitude" v-model="location.latitude">
            </div>
            <div class="form-group flex flex-col items-center m-5 capitalize">
                <label for="longitude">longitude</label>
                <CoordinatesComponent v-model="location.longitude" :useDMS="useDecimal" />
                <input type="text" name="longitude" id="longitude" v-model="location.longitude">
            </div>
            <div class="form-group flex flex-col items-center m-5 capitalize">
                <label for="altitude">altitude</label>
                <CoordinatesComponent v-model="location.altitude" :useDMS="useDecimal" />
            </div>

        </div> -->
        <div id="coordinates" class="py-5">

            <h1 class="mb-3 font-bold text-xl text-center">Coordenadas</h1>
            <div class="flex justify-center">

                <label class="text-center">
                    <input type="checkbox" v-model="useDecimal" />
                    Coordenadas decimales
                </label>
            </div>

            <div class="flex flex-col">
                <div class="flex flex-col p-3 capitalize">
                    <label for="latitude">Latitud:</label>
                    <CoordinatesComponent v-model="location.latitude" :useDMS="useDecimal" />
                </div>
                <div class="flex flex-col p-3 capitalize">
                    <label for="longitude">longitud:</label>
                    <CoordinatesComponent v-model="location.longitude" :useDMS="useDecimal" />
                </div>
                <div class="flex flex-col p-3 capitalize">
                    <label for="altitude">altitud <span class="text-sm lowercase font-thin">(msnm)</span>:</label>
                    <input class="min-w-full rounded border-none drop-shadow-sm " v-model="location.altitude"
                        type="text" id="altitude" name="altitude" placeholder="Altitud">
                </div>

            </div>
        </div>
        <div class="form-group flex flex-col items-center m-5 capitalize">
            <label for="municipality_id">Municipio:</label>
            <multiselect id="municipality_id" name="municipality_id" placeholder="Selecciona una opción"
                label="fullname" @SearchChange="searchMunicipality" :preserveSearch="true"
                :internalSearch="false" :options="municipalityOptions" :allow-empty="false" @select="selectMunicipality"
                v-model="location.municipality">

            </multiselect>
        </div>
        <div class="form-group flex justify-center">
            <primary-button>{{ location.id ? 'Guardar' : 'Nuevo'}}</primary-button>
        </div>
    </form>

</template>

<style>

</style>