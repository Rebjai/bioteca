<script setup>
import SpecimenForm from '@/Components/forms/specimen/SpecimenForm.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue'
import BioTag from '@/Components/Tags/BioTag.vue'

const props = defineProps({ specimen: {} })
console.log(props.specimen);
console.log(props.specimen.measurable?.id);
const measurable = props.specimen.measurable?.id ? useForm(props.specimen.measurable) :
    useForm({
        gender: '',
        gonads: '',
        total_length: '',
        tail_length: '',
        pt: '',
        o: '',
        ab: '',
        weight: '',
        skull: false,
        skin: false,
        body: false,
        observations: '',
    })
function saveMeasures() {

    measurable.put(route('mammal-measure.update', measurable.id));
}

</script>
<template>

       
    <div class="text-center bg-white m-5 rounded-lg p-5 max-h-full drop-shadow">
        <h1 class="text-center text-2xl mb-5 font-bold">Generar Etiqueta</h1>
        <bio-tag :specimen="props.specimen" />
    </div>


</template>

<script>
import Layout from '@/Layouts/AuthenticatedLayout.vue';
import { useForm } from '@inertiajs/inertia-vue3';


export default {
    layout: Layout
}
</script>

<style>

</style>