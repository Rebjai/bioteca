<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import BioModal from '@/Components/BioModal.vue';
import BackButton from '@/Components/BackButton.vue';
import UserForm from '@/Components/forms/User/UserForm.vue';
import { ref } from '@vue/reactivity';
import LocationForm from '@/Components/forms/Location/LocationForm.vue';


const props = defineProps({ location: {} })
const showModal = ref(false)
const location = props.location ? props.location : {}
function addUser() {

}

</script>
<template>
    <div>


        <Head title="Localidad" />


        <div class="py-12 text-center">
            <back-button :href="route('location.index')">
        </back-button>
            <div class="bg-zinc-100 rounded-lg py-5 max-h-full">
                <h1 class="text-center text-2xl mb-5 font-bold">Datos de la localidad</h1>
                <LocationForm :location="location" />
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