<script setup>
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { useForm } from '@inertiajs/inertia-vue3'
import { ref } from '@vue/reactivity';
import axios from 'axios';
import { Inertia } from '@inertiajs/inertia';
// import { Multiselect } from 'vue-multiselect';
const props = defineProps({ specimen: Object })
const speciesOptions = ref([''])
const locationOptions = ref([''])
const assistantOptions = ref([''])
const specimen = useForm(props.specimen ? props.specimen :
    {
        collection_date: '',
        species_id: '',
        location_id: '',
        latitude: '',
        altitude: '',
        longitude: '',
        collector: '',
        assistant_id: '',
        species: null,
        location:null,

    }
)


function addSpecimen(e) {
    console.log({ specimen });
    specimen.post(route('collection.store'))

}

async function searchSpecies(search, loading) {
    console.log({ search });
    const res = await axios.get('/api/species/search', { params: { name: search.target.value } })
    speciesOptions.value = res.data.length ?res.data[0]: []
}

async function searchLocations(search, loading) {
    console.log({ search });
    const res = await axios.get('/api/locations/search', { params: { name: search.target.value } })
    locationOptions.value = res.data.length ? res.data[0]: []
}

async function searchAssistants(search, loading) {
    console.log({ search });
    const res = await axios.get('/api/assistants/search', { params: { search: search.target.value } })
    assistantOptions.value = res.data.length ? res.data[0]: []
}

function selectSpecies(option, id) {
    console.log({ option }, { id });
    specimen.species_id = option.id
}
function selectLocation(option, id) {
    specimen.location_id = option.id
}
function selectAssistant(option, id) {
    specimen.assistant_id = option.id

}

searchLocations({ target: { value: '' } })
searchAssistants({ target: { value: '' } })

</script>
        
<template>
    <form action="#" @submit.prevent="addSpecimen" :close-on-select="false" class="bg-zinc-300 w-full rounded p-8">
        <div class="row flex flex-col items-center ">

            <label for="collection-date">Fecha de colecta:</label>
            <input class="min-w-full rounded border-none drop-shadow-sm " v-model="specimen.collection_date" type="date" name="collection-date" id="collection-date">

            <label for="especie">Especie:</label>
            <!-- <multiselect class="min-w-[200px]" label="scientific_name" v-model="specimen.species" :options="speciesOptions"
                @search="searchSpecies" >
            </multiselect> -->
            <multiselect placeholder="Selecciona una opción" id="species" track-by="id" label="scientific_name"
                @input="searchSpecies" :options="speciesOptions" @select="selectSpecies" :allow-empty="false"
                v-model="specimen.species">

            </multiselect>
            <label for="especie">Lugar De Colecta:</label>
            <multiselect id="species" placeholder="Selecciona una opción" label="name" @input="searchLocations"
                :preserveSearch="true" :internalSearch="false" :options="locationOptions" :allow-empty="false"
                @select="selectLocation" v-model="specimen.location">

            </multiselect>

            <div id="coordinates" class="py-5">

                <h1 class="mb-3 font-bold text-xl text-center">Coordenadas <span class="font-thin text-sm">(Grados
                        Decimales)</span></h1>
                <div class="flex flex-col lg:flex-row">
                    <div class="flex flex-col p-3 capitalize">
                        <label for="latitude">Latitud:</label>
                        <input class="min-w-full rounded border-none drop-shadow-sm " v-model="specimen.latitude" type="text" id="latitude" name="latitude"
                            placeholder="Latitud">
                    </div>
                    <div class="flex flex-col p-3 capitalize">
                        <label for="longitude">longitud:</label>
                        <input class="min-w-full rounded border-none drop-shadow-sm " v-model="specimen.longitude" type="text" id="longitude" name="longitude"
                            placeholder="Longitud">
                    </div>
                    <div class="flex flex-col p-3 capitalize">
                        <label for="altitude">altitud <span class="text-sm lowercase font-thin">(msnm)</span>:</label>
                        <input class="min-w-full rounded border-none drop-shadow-sm " v-model="specimen.altitude" type="text" id="altitude" name="altitude"
                            placeholder="Altitud">
                    </div>

                </div>
            </div>
            <label for="collector">Nombre del colector:</label>
            <input class="min-w-full rounded border-none drop-shadow-sm " v-model="specimen.collector" type="text" name="collector" id="collector"
                placeholder="Nombre del colector">
            <label for="assistant_id">Preparador:</label>
            <multiselect id="assistant" placeholder="Selecciona una opción" label="name" @input="searchAssistants"
                :preserveSearch="true" :internalSearch="false" :options="assistantOptions" :allow-empty="false"
                @select="selectAssistant" v-model="specimen.assistant">

            </multiselect>
            <input class="min-w-full rounded border-none drop-shadow-sm " v-model="specimen.assistant_id" type="text" id="assistant_id" name="assistant_id"
                placeholder="Preparador">

            <primary-button class="mt-5 capitalize">{{ specimen.id ? 'Guardar' : 'agregar'}}</primary-button>
        </div>
    </form>
</template>
    
    
<script>
export default {

}
</script>
    
<style>

</style>