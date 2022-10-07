<script setup>
    import PrimaryButton from '@/Components/PrimaryButton.vue';
import { useForm } from '@inertiajs/inertia-vue3'
    const props = defineProps({specimen:Object})
    
    const specimen = useForm(props.specimen?props.specimen:
        {
            species: {
                id: null,
                genus_id: 0,
                scientific_name:'',
                status: ''
            }
        }
    )
    function addSpecimen(e) {
        
    }
    
    </script>
        
    <template>
        <form action="#" @submit="addSpecimen" class="bg-zinc-300 w-full rounded p-8">
            <div class="row flex flex-col items-center ">

                <label for="especie">Especie:</label>
                <input type="text" name="especie" placeholder="especie">
                <label for="especie">Lugar De Colecta:</label>
                <input type="text" placeholder="lugar de colecta">
                <primary-button class="mt-5">{{specimen.id?'editar':'agregar'}}</primary-button>
            </div>
        </form>
    </template>
    
    
    <script>
    export default {
    
    }
    </script>
    
    <style>
    
    </style>