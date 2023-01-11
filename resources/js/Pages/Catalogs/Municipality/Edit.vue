<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import BioModal from '@/Components/BioModal.vue';
import BackButton from '@/Components/BackButton.vue';
import UserForm from '@/Components/forms/User/UserForm.vue';
import { ref } from '@vue/reactivity';
import MunicipalityForm from '@/Components/forms/Municipality/MunicipalityForm.vue';


const props = defineProps({ municipality: {} })
const showModal = ref(false)
const municipality = props.municipality ? props.municipality : {}
function addUser() {

}

</script>
<template>
    <div>


        <Head title="Municipio" />


        <div class="py-12 text-center">
            <back-button :href="route('municipality.index')">
        </back-button>
            <div class="bg-zinc-100 rounded-lg py-5 max-h-full">
                <h1 class="text-center text-2xl mb-5 font-bold">Datos del Municipio</h1>
                <MunicipalityForm :municipality="municipality" />
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