<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import BioModal from '@/Components/BioModal.vue';
import BackButton from '@/Components/BackButton.vue';
import UserForm from '@/Components/forms/User/UserForm.vue';
import { ref } from '@vue/reactivity';
import StateForm from '@/Components/forms/State/StateForm.vue';


const props = defineProps({ state: {} })
const showModal = ref(false)
const state = props.state ? props.state : {}
function addUser() {

}

</script>
<template>
    <div>


        <Head title="Estado" />


        <div class="py-12 text-center">
            <back-button :href="route('state.index')">
        </back-button>
            <div class="bg-zinc-100 rounded-lg py-5 max-h-full">
                <h1 class="text-center text-2xl mb-5 font-bold">Datos del Estado</h1>
                <StateForm :state="state" />
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