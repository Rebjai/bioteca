<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import BioModal from '@/Components/BioModal.vue';
import BackButton from '@/Components/BackButton.vue';
import CollectorForm from '@/Components/forms/Collector/CollectorForm.vue';
import { ref } from '@vue/reactivity';


const props = defineProps({ collector: {} })
const showModal = ref(false)
const collector = props.collector ? props.collector : {}
function addUser() {

}

</script>
<template>
    <div>


        <Head title="Usuarios" />

        <div class="py-12 text-center">
            <back-button :href="route('collector.index')">
            </back-button>
            <div class="bg-zinc-100 rounded-lg py-10 max-h-full">
                <h1 class="text-center text-2xl mb-5 font-bold">Datos Generales</h1>
                <CollectorForm :collector="collector" />
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