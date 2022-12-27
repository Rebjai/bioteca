<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import BioModal from '@/Components/BioModal.vue';
import BackButton from '@/Components/BackButton.vue';
import SpeciesForm from '@/Components/forms/Species/SpeciesForm.vue';
import { ref } from '@vue/reactivity';


const props = defineProps({ BioSpecies: {} })
const showModal = ref(false)
const BioSpecies = props.BioSpecies ? props.BioSpecies : {}
function addUser() {

}

</script>
<template>
    <div>


        <Head title="Especies" />

        <div class="py-12 text-center">
            <back-button :href="route('species.index')">
            </back-button>
            <div class="bg-zinc-100 rounded-lg py-10 max-h-full">
                <h1 class="text-center text-2xl mb-5 font-bold">Datos Generales</h1>
                <SpeciesForm :biospecies="BioSpecies" />
            </div>
        </div>
    </div>

</template>

<script>
import Layout from '@/Layouts/AuthenticatedLayout.vue';


export default {
    layout: Layout
}
</script>