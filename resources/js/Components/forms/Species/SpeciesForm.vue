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


const toast = useToast()
 const props = defineProps({ biospecies: Object })

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
        console.log(biospecies,'actualizando biospecies');
    return biospecies.put(route('species.update', biospecies.id),{onError: handleErrorMessages, onSuccess: handleSuccessMessages})
    
}
biospecies.post(route('species.store'), {onError: handleErrorMessages, onSuccess: handleSuccessMessages})
 

}


   
    
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


             
                <label for="bio_gender_id">ID Genero:</label>
                <input class="min-w-full rounded border-none drop-shadow-sm " v-model="biospecies.bio_gender_id" type="text" id="bio_gender_id" name="bio_gender_id"
                        placeholder="ID Genero">   
                       
                       
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