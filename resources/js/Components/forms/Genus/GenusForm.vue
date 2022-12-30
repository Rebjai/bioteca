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
 const props = defineProps({ biogender: Object })
 const familyOptions = ref ([])

    const biogender = useForm(props.biogender ? props.biogender :
        {
            scientific_name: '',
            common_name: '',
            status: '',
            bio_family_id: '',
        }
    )
    
function addBioGender(e) {
    if (biogender.id) {
      //  console.log(biosgender,'actualizando biospecies');
    return biogender.put(route('genus.update', biogender.id),{onError: handleErrorMessages, onSuccess: handleSuccessMessages})
    
}
biogender.post(route('genus.store'), {onError: handleErrorMessages, onSuccess: handleSuccessMessages})
 

}

function selectFamily(option, id) {
    biogender.bio_family_id = option.id
}
async function searchFamily(search, id) {
    console.log({ search });
    const res = await axios.get('/api/family/search', { params: { name: search } })
    familyOptions.value = res.data.length ? res.data[0] : []
}

   searchFamily();
    
    </script>
            
    <template>
        <form action="#" @submit.prevent="addBioGender" :close-on-select="false" class="bg-zinc-300 w-full rounded p-8">
            <div class="row flex flex-col items-center ">
               <div>
                <label for="scientific_name">Nombre cientifico:</label>
                <input class="min-w-full rounded border-none drop-shadow-sm " v-model="biogender.scientific_name" type="text" name="scientific_name" id="scientific_name"
                    placeholder="Nombre cientifico">
    
             
                
                <label for="common_name">Nombre comun:</label>
                <input class="min-w-full rounded border-none drop-shadow-sm" v-model="biogender.common_name" type="text" name="common_name" id="common_name"
                    placeholder="Nombre comun">


             
                <label for="family">ID Genero:</label>
                <multiselect id="family" name="family" placeholder="Selecciona una opción" label="scientific_name" @SearchChange="searchFamily"
                :preserveSearch="true" :internalSearch="false" :options="familyOptions" :allow-empty="false"
                @select="selectFamily" v-model="biogender.family">

                </multiselect>
                       
                       
                        <label for="status">Estatus:</label>
                    </div>
                  
          
                <div>

                <select class="min-w-full rounded border-none drop-shadow-sm" v-model="biogender.status"   id="status" name="status"  >
                    <option value="">-- Elije una opcion --</option>

                <option value="sinónimo">Sinonimo </option>
                <option value="válido">Valido</option>

            </select>
             
        </div>

            
      
                       
                 
                   
                   
                                  
    
                <primary-button class="mt-5 capitalize">{{ biogender.id ? 'Guardar' : 'agregar'}}</primary-button>
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