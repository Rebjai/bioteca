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
 const props = defineProps({ biofamily: Object })
 const orderOptions = ref ([])

    const biofamily = useForm(props.biofamily ? props.biofamily :
        {
            scientific_name: '',
            common_name: '',
            status: '',
            bio_order_id: '',
        }
    )
    
function addBioFamily(e) {
    if (biofamily.id) {
      //  console.log(biosgender,'actualizando biospecies');
    return biofamily.put(route('family.update', biofamily.id),{onError: handleErrorMessages, onSuccess: handleSuccessMessages})
    
}
biofamily.post(route('family.store'), {onError: handleErrorMessages, onSuccess: handleSuccessMessages})
 

}

function selectOrder(option, id) {
    biofamily.bio_order_id = option.id
}
async function searchOrder(search, id) {
    console.log({ search });
    const res = await axios.get('/api/order/search', { params: { name: search } })
    orderOptions.value = res.data.length ? res.data[0] : []
}

   searchOrder();
    
    </script>
            
    <template>
        <form action="#" @submit.prevent="addBioFamily" :close-on-select="false" class="bg-zinc-300 w-full rounded p-8">
            <div class="row flex flex-col items-center ">
               <div>
                <label for="scientific_name">Nombre cientifico:</label>
                <input class="min-w-full rounded border-none drop-shadow-sm " v-model="biofamily.scientific_name" type="text" name="scientific_name" id="scientific_name"
                    placeholder="Nombre cientifico">
    
             
                
                <label for="common_name">Nombre comun:</label>
                <input class="min-w-full rounded border-none drop-shadow-sm" v-model="biofamily.common_name" type="text" name="common_name" id="common_name"
                    placeholder="Nombre comun">


             
                <label for="order">ID Genero:</label>
                <multiselect id="order" name="order" placeholder="Selecciona una opción" label="scientific_name" @SearchChange="searchOrder"
                :preserveSearch="true" :internalSearch="false" :options="orderOptions" :allow-empty="false"
                @select="selectOrder" v-model="biofamily.order">

                </multiselect>
                       
                       
                        <label for="status">Estatus:</label>
                    </div>
                  
          
                <div>

                <select class="min-w-full rounded border-none drop-shadow-sm" v-model="biofamily.status"   id="status" name="status"  >
                    <option value="">-- Elije una opcion --</option>

                <option value="sinónimo">Sinonimo </option>
                <option value="válido">Valido</option>

            </select>
             
        </div>

            
      
                       
                 
                   
                   
                                  
    
                <primary-button class="mt-5 capitalize">{{ biofamily.id ? 'Guardar' : 'agregar'}}</primary-button>
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