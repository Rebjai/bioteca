<script setup>
import SpecimenForm from '@/Components/forms/specimen/SpecimenForm.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue'
import BackButton from '@/Components/BackButton.vue'
import { useForm } from '@inertiajs/inertia-vue3';

const props = defineProps({ specimen: {} })
console.log(props.specimen);
console.log(props.specimen.measurable?.id);
const measurable = props.specimen.measurable?.id ? useForm(props.specimen.measurable) :
    useForm({
        age: '',
        gender: '',
        total_length: '',
        cv: '',
        wingspan: '',
        weight: '',
        observations: '',
    })
function saveMeasures() {

    measurable.put(route('bird.update', measurable.id));
}

</script>
<template>
    <div class="text-center bg-white m-5 rounded-lg p-5 max-h-full drop-shadow">
        <back-button :href="route('collection.index')">
        </back-button>

        <div id="title" class="text-center font-bold text-xl uppercase py-5">
            <h2 class="text-base mb-5 capitalize">Aves #{{measurable.id}}</h2>
            <h1>Medidas del espécimen</h1>
            
        </div>
        <form action="" class="flex flex-col bg-zinc-300 rounded p-5 items-center content-between"
            @submit.prevent="saveMeasures()">
            <div class="form-group my-2 flex flex-col text-center">
                <label for="age">Edad</label>
                <select name="age" id="age" v-model="measurable.age">
                    <option value="">Selecciona una opción</option>
                    <option :value="1">Adulto</option>
                    <option :value="2">Sub-adulto</option>
                    <option :value="3">juvenil</option>
                </select>
            </div>
            <div class="form-group my-2 flex flex-col text-center">
                <label for="gender">Sexo</label>
                <select name="gender" id="gender" v-model="measurable.gender">
                    <option value="">Selecciona una opción</option>
                    <option :value="false">Hembra</option>
                    <option :value="true">Macho</option>
                </select>
            </div>
            <div class="form-group my-2 flex flex-col text-center">
                <label for="tail_length">LT</label>
                <input v-model="measurable.total_length" class="min-w-full border-none rounded drop-shadow-sm "
                    placeholder='N/A' type="number" name="tail_length" id="tail_length">
            </div>
            <div class="form-group my-2 flex flex-col text-center">
                <label for="cv">CV</label>
                <input v-model="measurable.cv" class="min-w-full border-none rounded drop-shadow-sm "
                    placeholder='N/A' type="number" name="cv" id="cv">
            </div>
            <div class="form-group my-2 flex flex-col text-center">
                <label for="pt">Envergadura</label>
                <input v-model="measurable.wingspan" class="min-w-full border-none rounded drop-shadow-sm "
                    placeholder='N/A' type="number" name="wingspan" id="wingspan">
            </div>
            <div class="form-group my-2 flex flex-col text-center">
                <label for="weight">Peso (gr)</label>
                <input v-model="measurable.weight" class="min-w-full border-none rounded drop-shadow-sm "
                    placeholder='N/A' type="number" name="weight" id="weight">
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


export default {
    layout: Layout
}
</script>

<style>

</style>