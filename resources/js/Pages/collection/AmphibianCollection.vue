<script setup>
import SpecimenForm from '@/Components/forms/specimen/SpecimenForm.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue'
import BackButton from '@/Components/BackButton.vue'

const props = defineProps({ specimen: {} })
console.log(props.specimen);
console.log(props.specimen.measurable?.id);
const measurable = props.specimen.measurable?.id ? useForm(props.specimen.measurable) :
    useForm({
        age: '',
        gender: '',
        gonads: '',
        total_length: '',
        tail_length: '',
        snout_vent_length: '',
        weight: '',
        skull: false,
        skin: false,
        body: false,
        observations: '',
    })
function saveMeasures() {

    measurable.put(route('amphibian.update', measurable.id));
}

</script>
<template>
    <div class="text-center bg-white m-5 rounded-lg p-5 max-h-full drop-shadow">
        <back-button :href="route('collection.index')">
        </back-button>
        
        <div id="title" class="text-center font-bold text-xl uppercase py-5">
            <h2 class="text-base mb-5 capitalize">Anfibios #{{measurable.id}}</h2>
            <h1>Medidas del espécimen</h1>
        </div>
        <form action="" class="flex flex-col bg-zinc-300 rounded p-5 items-center content-between"
            @submit.prevent="saveMeasures()">
            <div class="form-group my-2 flex flex-col text-center">
                <label for="gender">Sexo</label>
                <select name="gender" id="gender" v-model="measurable.gender">
                    <option value="">Selecciona una opción</option>
                    <option :value="false">Hembra</option>
                    <option :value="true">Macho</option>
                </select>
            </div>
            <div class="form-group my-2 flex flex-col text-center">
                <label for="gonads">Medida de Gónadas (mm)</label>
                <input v-model="measurable.gonads" class="min-w-full border-none rounded drop-shadow-sm "
                    placeholder='N/A' type="number" name="gonads" id="gonads">
            </div>
            <div class="form-group my-2 flex flex-col text-center">
                <label for="total_length">LT</label>
                <input v-model="measurable.total_length" class="min-w-full border-none rounded drop-shadow-sm "
                    placeholder='N/A' type="number" name="total_length" id="total_length">
            </div>
            <div class="form-group my-2 flex flex-col text-center">
                <label for="tail_length">LC</label>
                <input v-model="measurable.tail_length" class="min-w-full border-none rounded drop-shadow-sm "
                    placeholder='N/A' type="number" name="tail_length" id="tail_length">
            </div>
            <div class="form-group my-2 flex flex-col text-center">
                <label for="snout_vent_length">Largo Hocico-Cloaca</label>
                <input v-model="measurable.snout_vent_length" class="min-w-full border-none rounded drop-shadow-sm "
                    placeholder='N/A' type="number" name="snout_vent_length" id="snout_vent_length">
            </div>
            <div class="form-group my-2 flex flex-col text-center">
                <label for="weight">Peso (gr)</label>
                <input v-model="measurable.weight" class="min-w-full border-none rounded drop-shadow-sm "
                    placeholder='N/A' type="number" name="weight" id="weight">
            </div>
            <div class="options flex min-w-[200px] justify-between items-center">

                <div class="form-group my-2 flex flex-col text-center items-center">
                    <label for="has-skull">Cráneo</label>
                    <input v-model="measurable.skull" class="border-none rounded drop-shadow-sm "
                        type="checkbox" name="has-skull" id="has-skull">
                </div>
                <div class="form-group my-2 flex flex-col text-center items-center">
                    <label for="has-skull">Piel</label>
                    <input v-model="measurable.skin" class="border-none rounded drop-shadow-sm "
                        type="checkbox" name="has-skull" id="has-skull">
                </div>
                <div class="form-group my-2 flex flex-col text-center items-center">
                    <label for="has-body">Cuerpo</label>
                    <input v-model="measurable.body" class="border-none rounded drop-shadow-sm "
                        type="checkbox" name="has-body" id="has-body">
                </div>
            </div>
            <div class="form-group my-2 flex flex-col text-center flex flex-col">
                <label for="has-skull">Observaciones</label>
                <textarea v-model="measurable.observations" name="observations" id="observations" cols="30"
                    rows="5"></textarea>
            </div>
            <primary-button class="mt-5 capitalize">{{ measurable.id ? 'Guardar' : 'agregar' }}</primary-button>
        </form>
    </div>
    <div class="text-center bg-white m-5 rounded-lg p-5 max-h-full drop-shadow">
        <h1 class="text-center text-2xl mb-5 font-bold">Datos Generales</h1>
        <SpecimenForm :specimen="props.specimen" />
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