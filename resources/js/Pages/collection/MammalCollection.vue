<script setup>
import handleErrorMessages, { handleSuccessMessages } from '@/Utils/toastMessages';
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
        gonads_width: '',
        gonads_height: '',
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

    measurable.put(route('mammal.update', measurable.id), {
        onError: handleErrorMessages,
        onSuccess: handleSuccessMessages
    });
}

</script>
<template>
    <div class="text-center bg-white m-5 rounded-lg p-5 max-h-full drop-shadow">
        <back-button :href="route('collection.index')">
        </back-button>

        <div id="title" class="text-center font-bold text-xl uppercase py-5">
            <h2 class="text-base mb-5 capitalize">Mamíferos #{{ measurable.id }}</h2>
            <h1>Medidas del espécimen</h1>
        </div>
        <form action="" class="flex flex-col bg-zinc-300 rounded p-5 items-center content-between"
            @submit.prevent="saveMeasures()">
            <div class="form-group my-2 flex flex-col text-center">
                <label class="font-bold" for="age">Edad</label>
                <select name="age" id="age" v-model="measurable.age">
                    <option value="">Selecciona una opción</option>
                    <option :value="1">Adulto</option>
                    <option :value="2">Sub-adulto</option>
                    <option :value="3">juvenil</option>
                </select>
            </div>
            <div class="form-group my-2 flex flex-col text-center">
                <label class="font-bold" for="gender">Sexo</label>
                <select name="gender" id="gender" v-model="measurable.gender">
                    <option value="">Selecciona una opción</option>
                    <option :value="false">Hembra</option>
                    <option :value="true">Macho</option>
                </select>
            </div>
            <div class="form-group my-2 flex flex-col text-center p-5">
                <label class="font-bold" for="gonads">Medida de Gónadas (mm)</label>
                <div class="form-group my-2 flex flex-col text-center">
                    <label class="text-sm" for="gonads_height">Largo</label>
                    <input v-model="measurable.gonads_height" class="min-w-full border-none rounded drop-shadow-sm "
                        placeholder='N/A' type="number" name="gonads_height" id="gonads_height">
                </div>
                <div class="form-group my-2 flex flex-col text-center">
                    <label class="text-sm" for="gonads_width">Ancho</label>
                    <input v-model="measurable.gonads_width" class="min-w-full border-none rounded drop-shadow-sm "
                        placeholder='N/A' type="number" name="gonads_width" id="gonads_width">
                </div>
            </div>
            <div class="form-group my-2 flex flex-col text-center">
                <label class="font-bold" for="tail_length">LT</label>
                <input v-model="measurable.total_length" class="min-w-full border-none rounded drop-shadow-sm "
                    placeholder='N/A' type="number" name="tail_length" id="tail_length">
            </div>
            <div class="form-group my-2 flex flex-col text-center">
                <label class="font-bold" for="tail_length">LC</label>
                <input v-model="measurable.tail_length" class="min-w-full border-none rounded drop-shadow-sm "
                    placeholder='N/A' type="number" name="tail_length" id="tail_length">
            </div>
            <div class="form-group my-2 flex flex-col text-center">
                <label class="font-bold" for="pt">PT</label>
                <input v-model="measurable.pt" class="min-w-full border-none rounded drop-shadow-sm " placeholder='N/A'
                    type="number" name="pt" id="pt">
            </div>
            <div class="form-group my-2 flex flex-col text-center">
                <label class="font-bold" for="o">O</label>
                <input v-model="measurable.o" class="min-w-full border-none rounded drop-shadow-sm " placeholder='N/A'
                    type="number" name="o" id="o">
            </div>
            <div class="form-group my-2 flex flex-col text-center">
                <label class="font-bold" for="ab">AB</label>
                <input v-model="measurable.ab" class="min-w-full border-none rounded drop-shadow-sm " placeholder='N/A'
                    type="number" name="ab" id="ab">
            </div>
            <div class="form-group my-2 flex flex-col text-center">
                <label class="font-bold" for="weight">Peso (gr)</label>
                <input v-model="measurable.weight" class="min-w-full border-none rounded drop-shadow-sm "
                    placeholder='N/A' type="number" name="weight" id="weight">
            </div>
            <div class="options flex min-w-[200px] justify-between items-center">

                <div class="form-group my-2 flex flex-col text-center items-center">
                    <label class="font-bold" for="has-skull">Cráneo</label>
                    <input v-model="measurable.skull" class="border-none rounded drop-shadow-sm " type="checkbox"
                        name="has-skull" id="has-skull">
                </div>
                <div class="form-group my-2 flex flex-col text-center items-center">
                    <label class="font-bold" for="has-skull">Piel</label>
                    <input v-model="measurable.skin" class="border-none rounded drop-shadow-sm " type="checkbox"
                        name="has-skull" id="has-skull">
                </div>
                <div class="form-group my-2 flex flex-col text-center items-center">
                    <label class="font-bold" for="has-body">Cuerpo</label>
                    <input v-model="measurable.body" class="border-none rounded drop-shadow-sm " type="checkbox"
                        name="has-body" id="has-body">
                </div>
            </div>
            <div class="form-group my-2 flex flex-col text-center flex flex-col">
                <label class="font-bold" for="has-skull">Observaciones</label>
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