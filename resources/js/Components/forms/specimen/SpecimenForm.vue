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
const specimen = useForm(props.specimen ? props.specimen :
    {
        species: {
            id: null,
            genus_id: 0,
            scientific_name: '',
            status: ''
        }
    }
)


function addSpecimen(e) {
    console.log({ specimen });
    Inertia.get(route('specimen.edit', 1))
    console.log('wololo');

}

async function searchSpecies(search, loading) {
    console.log({ search });
    const res = await axios.get('/api/species/search', { params: { name: search.target.value } })
    speciesOptions.value = res.data[0]
    console.log(res.data);
}

async function searchLocations(search, loading) {
    console.log({ search });
    // if (search.target.value.length < 3) {
    //     return
    // }
    const res = await axios.get('/api/locations/search', { params: { name: search.target.value } })
    locationOptions.value = res.data[0]
    console.log(res.data);
}

searchLocations({target:{value:''}})

</script>
        
<template>
    <form action="#" @submit.prevent="addSpecimen" :close-on-select="false" class="bg-zinc-300 w-full rounded p-8">
        <div class="row flex flex-col items-center ">

            <label for="especie">Especie:</label>
            <!-- <multiselect class="min-w-[200px]" label="scientific_name" v-model="specimen.species" :options="speciesOptions"
                @search="searchSpecies" >
            </multiselect> -->
            <multiselect placeholder="Selecciona una opción" label="scientific_name" @input="searchSpecies"
                :options="speciesOptions" :allow-empty="false" v-model="specimen.species">

            </multiselect>
            <label for="especie">Lugar De Colecta:</label>
            <multiselect placeholder="Selecciona una opción" label="name" @input="searchLocations" :preserveSearch="true" :internalSearch="false"
                :options="locationOptions" :allow-empty="false" v-model="specimen.location">

            </multiselect>

            <label for="latitude">Latitud:</label>
            <input type="text" id="latitude" name="latitude" placeholder="Latitud">
            <label for="longitude">longitud:</label>
            <input type="text" id="longitude" name="longitude" placeholder="Longitud">
            <label for="altitude">altitud:</label>
            <input type="text" id="altitude" name="altitude" placeholder="Altitud">
            <primary-button class="mt-5">{{ specimen.id ? 'editar' : 'agregar'}}</primary-button>
        </div>
    </form>
</template>
    
    
<script>
export default {

}
</script>
    
<style>

</style>