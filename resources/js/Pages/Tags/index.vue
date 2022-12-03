<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import BioModal from '@/Components/BioModal.vue';
import SpecimenForm from '@/Components/forms/specimen/SpecimenForm.vue';
import { ref } from '@vue/reactivity';



const showModal = ref()
const props = defineProps({specimens:{}})
const specimens = props.specimens ? props.specimens:[]

console.log({specimens});
function addSpecimen(evt) {
    console.log(showModal.value = true);
    console.log(showModal);

}

function parseCollectionType(type) {
    if (type === 'App\\Models\\Specimen\\MammalMeasure') {
        return 'Mamíferos'
    }
    
}
</script>



<template>
    <div>


        <Head title="Colección" />


        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded flex flex-col justify-center items-center">
                    <primary-button class="m-5 max-w-sm" @click="addSpecimen">
                        Añadir nuevo
                    </primary-button>
                    <!-- <button class="bg-green-800 text-zinc-100 font-bold tracking-wide rounded" >Añadir nuevo</button> -->
                    <div class="md:mx-5 p-6 bg-zinc-200 border-b overflow-x-auto border-gray-200 rounded-lg">
                        <table class="min-w-full">
                            <thead class="border-b-2 border-zinc-500 pb-8">
                                <th class="px-5">#</th>
                                <th class="px-5">Colección</th>
                                <th class="px-5">Colecta</th>
                                <th class="px-5">Nombre</th>
                                <th class="px-5">Lugar de Colecta</th>
                                <!-- shows address, map with coordinates -->
                                <th>Acciones</th>
                            </thead>
                            <tbody v-if="specimens.length">
                                <tr v-for="specimen in specimens" :key="specimen.id">
                                    <td class="px-3">{{specimen.id}}</td>
                                    <td class="px-3">{{parseCollectionType(specimen.measurable_type)}}</td>
                                    <td class="px-3">{{specimen.collection_date}}</td>
                                    <td class="px-3">{{specimen.species.scientific_name}}</td>
                                    <td class="px-3">{{specimen.location.name}}</td>
                                    <td class="flex flex-col  text-center items-center justify-center">
                                        <Link :href="route('collection.tag', specimen.id)" class="m-1 md:m-2 py-2 px-3 bg-blue-00 rounded-lg text-base block">
                                        <button>
                                            <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                </svg>
                                            </div>
                                        </button>
                                        </Link>
                                        <Link :href="route('collection.edit', specimen.id)" class="m-1 md:m-2 py-2 px-3 bg-blue-00 rounded-lg text-base block">
                                        <button>
                                            <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                </svg>
                                            </div>

                                        </button>
                                        </Link>
                                        <Link :href="route('collection.destroy', specimen.id)" class="m-1 md:m-2 py-2 px-3 bg-blue-00 rounded-lg text-base block">
                                        <button>
                                            <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </div>
                                        </button>
                                        </Link>

                                    </td>
                                </tr>
                            </tbody>
                            <tbody v-if="!specimens.length">
                                <td>0</td>
                                <td>Mamíferos</td>
                                <td>06/10/2022</td>
                                <td>mamiferum exemplaris</td>
                                <td>Ex-Hda. de Nazareno, Santa Cruz Xoxocotlán, Oaxaca</td>
                                <td class="flex flex-col  text-center items-center justify-center">
                                    <Link class="m-1 md:m-2 py-2 px-3 bg-blue-00 rounded-lg text-base block">
                                    <button>
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                        </div>
                                    </button>
                                    </Link>
                                    <Link class="m-1 md:m-2 py-2 px-3 bg-blue-00 rounded-lg text-base block">
                                    <button>
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                            </svg>
                                        </div>

                                    </button>
                                    </Link>
                                    <Link class="m-1 md:m-2 py-2 px-3 bg-blue-00 rounded-lg text-base block">
                                    <button>
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </div>
                                    </button>
                                    </Link>

                                </td>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <BioModal :isShowing="showModal" @close="showModal = false" title="Datos Generales">

    </BioModal>
    <BioModal :isShowing="showModal" @close="showModal = false" title="Datos Generales">
        <div class="bg-zinc-100 rounded-lg py-5 max-h-full">
            <h1 class="text-center text-2xl mb-5 font-bold">Datos Generales</h1>
            <SpecimenForm />
        </div>

    </BioModal>
</template>
<script>
import Layout from '@/Layouts/AuthenticatedLayout.vue';


export default {
    layout: Layout
}
</script>