<script setup>
import PrimaryButton from '@/Components/PrimaryButton.vue';
import CoordinatesComponent from '@/Components/CoordinatesComponent/CoordinatesComponent.vue';
import { useForm } from '@inertiajs/inertia-vue3'
import { ref } from '@vue/reactivity';
import axios from 'axios';
import { Inertia } from '@inertiajs/inertia';
import flatpickr from "flatpickr";
import { Spanish } from "flatpickr/dist/l10n/es";
import { onMounted } from '@vue/runtime-core';
import handleErrorMessages, { handleSuccessMessages } from '@/Utils/toastMessages';
// import { Multiselect } from 'vue-multiselect';
const props = defineProps({ specimen: Object })
const collectionDate = ref([''])
const speciesOptions = ref([''])
const collectorOptions = ref([''])
const locationOptions = ref([''])
const assistantOptions = ref([''])
const useDecimal = ref(false)
const specimen = useForm(props.specimen ? props.specimen :
    {
        collection_date: '',
        creator_id: Inertia.page.props.auth.user.id,
        species_id: '',
        location_id: '',
        locality: '',
        latitude: '',
        altitude: '',
        longitude: '',
        collector_id: '',
        collector_number: '',
        collector: '',
        assistant_id: '',
        assistant_number: '',
        assistant: '',
        species: null,
        location: null,

    }
)
onMounted(() => {
    const collectionDateDatePicker = flatpickr(collectionDate.value,
        {
            dateFormat: "d/m/Y",
            locale: Spanish,
            allowInput: true,
            defaultDate: specimen.collection_date
        });
    console.log({ iniprop: Inertia });
    // specimen.creator_id = Inertia.page.props.auth.user.id
})


function addSpecimen(e) {
    console.log({ specimen });
    if (specimen.id) {
        return specimen.put(route('collection.update', specimen.id), {
            onError: handleErrorMessages,
            onSuccess: handleSuccessMessages,
        })

    }
    specimen.post(route('collection.store'), {
        onError: handleErrorMessages,
        onSuccess: handleSuccessMessages,
    })

}

async function searchSpecies(search, loading) {
    console.log({ search });
    const res = await axios.get('/api/species/search', { params: { name: search.target.value } })
    speciesOptions.value = res.data.length ? res.data[0] : []
}

async function searchLocations(search, loading) {
    console.log({ search });
    const res = await axios.get('/api/locations/search', { params: { name: search.target.value } })
    locationOptions.value = res.data.length ? res.data[0] : []
}

async function searchAssistants(search, loading) {
    console.log({ search });
    const res = await axios.get('/api/assistants/search', { params: { name: search.target.value, species: specimen.species_id } })
    assistantOptions.value = res.data.length ? res.data[0] : []
}
async function searchCollectors(search, loading) {
    console.log({ search });
    const res = await axios.get('/api/collectors/search', { params: { name: search.target.value, species: specimen.species_id } })
    collectorOptions.value = res.data.length ? res.data[0] : []
}

function selectSpecies(option, id) {
    console.log({ option }, { id });
    specimen.species_id = option.id
    if (!specimen.id) {
        specimen.collector = null
        specimen.assistant = null
    }
    searchCollectors({ target: { value: specimen.collector } })
    searchAssistants({ target: { value: specimen.assistant } })
}
function selectLocation(option, id) {
    specimen.location_id = option.id
}
function selectAssistant(option, id) {
    if (!specimen.species_id) {
        specimen.assistant = null
        return alert('Primero elige la especie a agregar')
    }
    specimen.assistant_id = option.id
    specimen.assistant_number = parseInt(option.fullname.split('.')[0]) + 1
}
function selectCollector(option, id) {
    if (!specimen.species_id) {
        specimen.collector = null
        return alert('Primero elige la especie a agregar')
    }
    specimen.collector_id = option.id
    specimen.collector_number = parseInt(option.fullname.split('.')[0]) + 1
}

searchLocations({ target: { value: '' } })
searchAssistants({ target: { value: '' } })
searchCollectors({ target: { value: '' } })

</script>
        
<template>
    <form action="#" @submit.prevent="addSpecimen" :close-on-select="false" class="bg-zinc-300 w-full rounded p-8">
        <div class="row flex flex-col items-center ">

            <label for="collection-date">Fecha de colecta:</label>
            <input ref="collectionDate" class="min-w-full rounded border-none drop-shadow-sm "
                v-model="specimen.collection_date" type="text" name="collection-date" id="collection-date">

            <label for="especie">Especie:</label>
            <!-- <multiselect class="min-w-[200px]" label="scientific_name" v-model="specimen.species" :options="speciesOptions"
                @search="searchSpecies" >
            </multiselect> -->
            <multiselect placeholder="Selecciona una opción" id="species" track-by="id" label="scientific_name"
                @input="searchSpecies" :options="speciesOptions" @select="selectSpecies" :allow-empty="false"
                v-model="specimen.species">

            </multiselect>
            <label for="especie">Lugar De Colecta:</label>
            <multiselect id="species" placeholder="Selecciona una opción" label="fullname" @input="searchLocations"
                :preserveSearch="true" :internalSearch="false" :options="locationOptions" :allow-empty="false"
                @select="selectLocation" v-model="specimen.location">

            </multiselect>
            <label for="locality">Localidad:</label>
            <input class="min-w-full rounded border-none drop-shadow-sm " v-model="specimen.locality" type="text"
                name="locality" id="locality">

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
                        <CoordinatesComponent v-model="specimen.latitude" :useDMS="useDecimal" />
                        <!-- <input class="min-w-full rounded border-none drop-shadow-sm " v-model="specimen.latitude"
                            type="text" id="latitude" name="latitude" placeholder="Latitud"> -->
                        </div>
                        <div class="flex flex-col p-3 capitalize">
                            <label for="longitude">longitud:</label>
                            <CoordinatesComponent v-model="specimen.longitude" :useDMS="useDecimal" />
                            <!-- <input class="min-w-full rounded border-none drop-shadow-sm " v-model="specimen.longitude"
                                type="text" id="longitude" name="longitude" placeholder="Longitud"> -->
                    </div>
                    <div class="flex flex-col p-3 capitalize">
                        <label for="altitude">altitud <span class="text-sm lowercase font-thin">(msnm)</span>:</label>
                        <input class="min-w-full rounded border-none drop-shadow-sm " v-model="specimen.altitude"
                            type="text" id="altitude" name="altitude" placeholder="Altitud">
                    </div>

                </div>
            </div>
            <label for="collector">Nombre del colector:</label>
            <multiselect id="collector" name="collector_id" placeholder="Selecciona una opción" label="fullname"
                @input="searchCollectors" :preserveSearch="true" :internalSearch="false" :options="collectorOptions"
                :allow-empty="false" @select="selectCollector" v-model="specimen.collector">

            </multiselect>
            <div v-if="specimen.collector_number" class="formgroup max-w mb-5">
                <label for="collector_number">Número de colector:</label>
                <input class="min-w-full rounded border-none drop-shadow-sm " v-model="specimen.collector_number"
                    type="number" name="collector_number" id="collector_number">
            </div>
            <label for="assistant_id">Nombre del preparador:</label>
            <multiselect id="assistant" name="assistant_id" placeholder="Selecciona una opción" label="fullname"
                @input="searchAssistants" :preserveSearch="true" :internalSearch="false" :options="assistantOptions"
                :allow-empty="false" @select="selectAssistant" v-model="specimen.assistant">

            </multiselect>
            <div v-if="specimen.assistant_number" class="formgroup max-w mb-5">
                <label for="assistant_number">Número de preparador:</label>
                <input class="min-w-full rounded border-none drop-shadow-sm " v-model="specimen.assistant_number"
                    type="number" name="assistant_number" id="assistant_number">
            </div>
            <!-- <input class="min-w-full rounded border-none drop-shadow-sm " v-model="specimen.assistant_id" type="text"
                id="assistant_id" name="assistant_id" placeholder="Preparador"> -->

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