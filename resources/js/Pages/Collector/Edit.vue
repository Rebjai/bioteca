<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import BioModal from '@/Components/BioModal.vue';
import UserForm from '@/Components/forms/User/UserForm.vue';
import { ref } from '@vue/reactivity';
import AssistantForm from '@/Components/forms/User/AssistantForm.vue';


const props = defineProps({ user: {} })
const showModal = ref(false)
const user = props.user ? props.user : {}
function addUser() {

}

</script>
<template>
    <div>


        <Head title="Usuarios" />


        <div class="py-12">
        </div>
    </div>
    <div class="bg-zinc-100 rounded-lg py-5 max-h-full">
        <h1 class="text-center text-2xl mb-5 font-bold">Datos Generales</h1>
        <UserForm :user="user" />
    </div>

    <div  v-if="(user.role == 1)"  class="bg-zinc-100 rounded-lg py-5 max-h-full">
        <h1 class="text-center text-2xl mb-5 font-bold">Datos de preparador</h1>
        <AssistantForm :assistant="user.profile" />
    </div>
</template>

<script>
import Layout from '@/Layouts/AuthenticatedLayout.vue';


export default {
    layout: Layout
}
</script>