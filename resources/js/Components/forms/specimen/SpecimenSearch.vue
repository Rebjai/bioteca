<script setup>
import { useForm, Link } from '@inertiajs/inertia-vue3'
import { ref } from '@vue/reactivity'
import { onMounted } from '@vue/runtime-core'
import flatpickr from 'flatpickr'
import { Spanish } from 'flatpickr/dist/l10n/es';
import PrimaryButton from '@/Components/PrimaryButton.vue'
import DangerButton from '@/Components/DangerButton.vue'
import { Multiselect } from 'vue-multiselect';
import axios from 'axios';
import { useToast } from 'vue-toastification'
const toast = useToast()
const collectionDate1 = ref(null)
const collectionDate2 = ref(null)
// const collectorOptions = ref([''])
// const assistantOptions = ref([''])

const props = defineProps({ search_params: {} })
console.log({ props });
const collectorOptions = ref(props.search_params.collector ? [props.search_params.collector] : [''])
const assistantOptions = ref(props.search_params.assistant ? [props.search_params.assistant] : [''])

const specimenSearch = useForm(props.search_params ? props.search_params : {
    collection_date1: '',
    collection_date2: '',
    collection_type: '',
    collector: '',
    assistant: '',
    species: '',

})
onMounted(() => {
    const collectionDate1Flatpickr = flatpickr(collectionDate1.value, {
        allowInput: true,
        locale: Spanish,
        dateFormat: 'd/m/Y',
        defaultDate: specimenSearch.collection_date1 ? specimenSearch.collection_date1 : new Date(),
    })
    const collectionDate2Flatpickr = flatpickr(collectionDate2.value, {
        allowInput: true,
        locale: Spanish,
        dateFormat: 'd/m/Y',
        defaultDate: specimenSearch.collection_date2 ? specimenSearch.collection_date2 : new Date(),
    })
})
async function searchCollections(e) {
    console.log({ e });
    specimenSearch.get(route('collection.index'), {
        preserveScroll: true,
        preserveState: true,

        onError: (err) => Object.values(err).forEach(e => toast.error(e))
    })
}
async function searchAssistants(search, loading) {
    console.log({ search });
    const res = await axios.get('/api/assistants/search', { params: { name: search.target.value } })
    assistantOptions.value = res.data.length ? res.data[0] : []
}
async function searchCollectors(search, loading) {
    console.log({ search });
    const res = await axios.get('/api/collectors/search', { params: { name: search.target.value } })
    collectorOptions.value = res.data.length ? res.data[0] : []
}

// function selectAssistant(option, id) {
//     specimen.assistant_id = option.id
// }
// function selectCollector(option, id) {
//     specimen.collector_id = option.id
// }
</script>
<template>
    <form action="#" @submit.prevent="searchCollections" :close-on-select="false"
        class="bg-zinc-300 w-full rounded p-8">
        <h1 class="text-center font-bold text-xl tracking-widest">Búsqueda</h1>
        <div class="form-group my-2 flex flex-col mx-2">
            <label class="font-bold" for="collection_type">Colección:</label>
            <select name="collection_type" id="collection_type" class="border-none rounded drop-shadow-sm"
                v-model="specimenSearch.collection_type">
                <option value="">Todas</option>
                <option :value="1">Anfibios</option>
                <option :value="2">Aves</option>
                <option :value="3">Mamíferos</option>
                <option :value="4">Reptiles</option>
            </select>
        </div>
        <div class="form-group my-2 flex flex-col">

            <label class="font-bold mx-2" for="collection-date">Fecha de colecta:</label>
            <div class="flex w-full justify-evenly items-center">

                <div class="form-group grow mx-2">
                    <input ref="collectionDate1" class="min-w-full rounded border-none drop-shadow-sm "
                        v-model="specimenSearch.collection_date1" placeholder="Fecha de colecta" type="text"
                        name="collection-date" id="collection-date">
                </div>

                <div class="form-group grow mx-2">
                    <input ref="collectionDate2" class="min-w-full rounded border-none drop-shadow-sm "
                        v-model="specimenSearch.collection_date2" placeholder="Fecha de colecta" type="text"
                        name="collection-date" id="collection-date">
                </div>
            </div>
        </div>
        <div class="flex w-full justify-evenly items-center">

            <div class="form-group grow mx-2">
                <label class="font-bold" for="collector">Nombre del colector:</label>
                <multiselect id="collector" name="collector_id" placeholder="Selecciona una opción" label="fullname"
                    @input="searchCollectors" :allowEmpty="true" :preserveSearch="true" :internalSearch="false"
                    :options="collectorOptions" :allow-empty="false" v-model="specimenSearch.collector">

                </multiselect>
            </div>
            <div class="form-group grow mx-2">
                <label class="font-bold" for="assistant_id">Nombre del preparador:</label>
                <multiselect id="assistant" name="assistant_id" placeholder="Selecciona una opción" label="fullname"
                    @input="searchAssistants" @Remove="e => alert(e)" :allowEmpty="true" :preserveSearch="true"
                    :internalSearch="false" :options="assistantOptions" :allow-empty="false"
                    v-model="specimenSearch.assistant">

                </multiselect>
            </div>
        </div>

        <div class="form-group my-2 flex flex-col md:items-center text-center">

            <primary-button class="my-2">
                Buscar
            </primary-button>
            <Link :href="route('collection.index')">
            <danger-button class="mt-2">
                Limpiar filtros
            </danger-button>
            </Link>
        </div>
    </form>
</template>

<script>
export default {

}
</script>

<style>

</style>