<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import BioModal from '@/Components/BioModal.vue';
import BackButton from '@/Components/BackButton.vue';
import AssistantForm from '@/Components/forms/Assistant/AssistantForm.vue';
import { ref } from '@vue/reactivity';
// import AssistantForm from '@/Components/forms/User/AssistantForm.vue';


const props = defineProps({ assistant: {} })
const showModal = ref(false)
const assistant = props.assistant ? props.assistant : {}
function addUser() {

}

</script>
<template>
    <div>


        <Head title="Usuarios" />

        <div class="py-12 text-center">
            <back-button :href="route('assistant.index')">
            </back-button>
            <div class="bg-zinc-100 rounded-lg py-10 max-h-full">
                <h1 class="text-center text-2xl mb-5 font-bold">Datos Generales</h1>
                <AssistantForm :assistant="assistant" />
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