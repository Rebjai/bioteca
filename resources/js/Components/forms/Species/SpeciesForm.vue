<script setup>
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { useForm } from '@inertiajs/inertia-vue3'
import { ref } from '@vue/reactivity';
import axios from 'axios';
import { Inertia } from '@inertiajs/inertia';
import { useToast } from 'vue-toastification';
import flatpickr from "flatpickr";
import { Spanish } from "flatpickr/dist/l10n/es";
import { onMounted } from '@vue/runtime-core';
import handleErrorMessages, { handleSuccessMessages } from '@/Utils/toastMessages';
import { Multiselect } from 'vue-multiselect';

const toast = useToast()
 const props = defineProps({ biospecies: Object })
 const genusOptions = ref ([])

    const biospecies = useForm(props.biospecies ? props.biospecies :
        {
            scientific_name: '',
            common_name: '',
            status: '',
            bio_gender_id: '',
        }
    )
    
function addBioSpecies(e) {
    if (biospecies.id) {
      //  console.log(biospecies,'actualizando biospecies');
    return biospecies.put(route('species.update', biospecies.id),{onError: handleErrorMessages, onSuccess: handleSuccessMessages})
    
}
biospecies.post(route('species.store'), {onError: handleErrorMessages, onSuccess: handleSuccessMessages})
 

}

function selectGenus(option, id) {
    biospecies.bio_gender_id = option.id
}
async function searchGenus(search, id) {
    console.log({ search });
    const res = await axios.get('/api/genus/search', { params: { name: search } })
    genusOptions.value = res.data.length ? res.data[0] : []
}

   searchGenus();
    
    </script>
            
    <template>
        <form action="#" @submit.prevent="addBioSpecies" :close-on-select="false" class="bg-zinc-300 w-full rounded p-8">
            <div class="row flex flex-col items-center ">
               <div>
                <label for="scientific_name">Nombre cientifico:</label>
                <input class="min-w-full rounded border-none drop-shadow-sm " v-model="biospecies.scientific_name" type="text" name="scientific_name" id="scientific_name"
                    placeholder="Nombre cientifico">
    
             
                
                <label for="common_name">Nombre comun:</label>
                <input class="min-w-full rounded border-none drop-shadow-sm" v-model="biospecies.common_name" type="text" name="common_name" id="common_name"
                    placeholder="Nombre comun">


             
                <label for="genus">Genero:</label>
                        <!-- en el v-model se usa el nombre de la relación "genus", 
                        que se carga cuando se edita un modelo desde el controlador de laravel -->
                <multiselect id="genux" name="genus" placeholder="Selecciona una opción" label="scientific_name" @SearchChange="searchGenus"
                :preserveSearch="true" :internalSearch="false" :options="genusOptions" :allow-empty="false"
                @select="selectGenus" v-model="biospecies.genus">

                </multiselect>
                       
                       
                        <label for="status">Estatus:</label>
                    </div>
                  
          
                <div>

                <select class="min-w-full rounded border-none drop-shadow-sm" v-model="biospecies.status"   id="status" name="status"  >
                    <option value="">-- Elije una opcion --</option>

                <option value="sinónimo">Sinonimo </option>
                <option value="válido">Valido</option>

            </select>
             
        </div>

            
      
                       
                 
                   
                   
                                  
    
                <primary-button class="mt-5 capitalize">{{ biospecies.id ? 'Guardar' : 'agregar'}}</primary-button>
            </div>
        </form>
    </template>
        
        
    <!-- <script>
    export default {
    
    }
    </script>
         -->
    <style>
    
    </style>