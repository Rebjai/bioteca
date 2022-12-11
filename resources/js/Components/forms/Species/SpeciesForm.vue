<script setup>
    import PrimaryButton from '@/Components/PrimaryButton.vue';
    import { useForm } from '@inertiajs/inertia-vue3'
    import { ref } from '@vue/reactivity';
    import axios from 'axios';
    import { Inertia } from '@inertiajs/inertia';
   
    const props = defineProps({ species: Object })
    const speciesOptions = ref([''])

    const species = useForm(props.species ? props.species :
        {
            scientific_name: '',
            common_name: '',
            status: '',
            bio_gender_id: '',
        }
    )
    
    
  //  function addSpecimen(e) {
  //      console.log({ specimen });
  //      specimen.post(route('collection.store'))
  //  }
    
   // async function searchSpecies(search, loading) {
   //     console.log({ search });
   //     const res = await axios.get('/api/species/search', { params: { name: search.target.value } })
   //     speciesOptions.value = res.data.length ?res.data[0]: []
   // }
    
    
   // function selectSpecies(option, id) {
   //     console.log({ option }, { id });
   //     specimen.species_id = option.id
   // }
   // function selectLocation(option, id) {
   //     specimen.location_id = option.id
   // 
   // }
    
   // searchLocations({ target: { value: '' } })
    
    </script>
            
    <template>
        <form action="#" @submit.prevent="addSpecies" :close-on-select="false" class="bg-zinc-300 w-full rounded p-8">
            <div class="row flex flex-col items-center ">
    
                <label for="scientific_name">Nombre cientifico:</label>
                <input class="min-w-full rounded border-none drop-shadow-sm " v-model="species.scientific_name" type="date" name="scientific_name" id="scientific_name"
                    placeholder="Nombre cientifico">
    
             
                
                <label for="common_name">Nombre comun:</label>
                <input class="min-w-full rounded border-none drop-shadow-sm " v-model="species.common_name" type="text" name="common_name" id="common_name"
                    placeholder="Nombre comun">


                <label for="status">Estatus:</label>
                <input class="min-w-full rounded border-none drop-shadow-sm " v-model="species.status" type="text" id="status" name="status"
                    placeholder="Estatus">

                    <label for="bio_gender_id">ID Genero:</label>
                    <input class="min-w-full rounded border-none drop-shadow-sm " v-model="species.bio_gender_id" type="text" id="bio_gender_id" name="bio_gender_id"
                        placeholder="Estatus">                    
    
                <primary-button class="mt-5 capitalize">{{ species.id ? 'Guardar' : 'agregar'}}</primary-button>
            </div>
        </form>
    </template>
        
        
    <script>
    export default {
    
    }
    </script>
        
    <style>
    
    </style>