<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import BioModal from '@/Components/BioModal.vue';
import BackButton from '@/Components/BackButton.vue';
import { ref } from '@vue/reactivity';
import GenusForm from '@/Components/forms/Genus/GenusForm.vue';

const props = defineProps({ genus: {} })
const showModal = ref(false)
const BioGender = props.genus ? props.genus : {}
function addUser() {

}

</script>
<template>
    <div>


        <Head title="Genero" />

        <div class="py-12 text-center">
            <back-button :href="route('genus.index')">
            </back-button>
            <div class="bg-zinc-100 rounded-lg py-10 max-h-full">
                <h1 class="text-center text-2xl mb-5 font-bold">Datos Generales</h1>
                <GenusForm :biogender="BioGender" />
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