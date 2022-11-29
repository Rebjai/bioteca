<script setup>
import SpecimenForm from '@/Components/forms/specimen/SpecimenForm.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue'
const props = defineProps({ specimen: {} })

</script>
<template>
    <div class="bg-white m-5 rounded-lg p-5 max-h-full drop-shadow">

        <div id="title" class="text-center font-bold text-xl uppercase py-5">
            <h1>Medidas del espécimen</h1>
        </div>
        <form action="" class="flex flex-col bg-zinc-300 rounded p-5 items-center content-between">
            <div class="form-group my-2 flex flex-col text-center">
                <label for="gender">Sexo</label>
                <select name="gender" id="gender">
                    <option value="">Selecciona una opción</option>
                    <option value="1">Hembra</option>
                    <option value="0">Macho</option>
                </select>
            </div>
            <div class="form-group my-2 flex flex-col text-center">
                <label for="gonads">Medida de Gónadas (mm)</label>
                <input class="min-w-full border-none rounded drop-shadow-sm " placeholder='N/A' type="number"
                    name="gonads" id="gonads">
            </div>
            <div class="form-group my-2 flex flex-col text-center">
                <label for="lt">LT</label>
                <input class="min-w-full border-none rounded drop-shadow-sm " placeholder='N/A' type="number" name="lt"
                    id="lt">
            </div>
            <div class="form-group my-2 flex flex-col text-center">
                <label for="lc">LC</label>
                <input class="min-w-full border-none rounded drop-shadow-sm " placeholder='N/A' type="number" name="lc"
                    id="lc">
            </div>
            <div class="form-group my-2 flex flex-col text-center">
                <label for="pt">PT</label>
                <input class="min-w-full border-none rounded drop-shadow-sm " placeholder='N/A' type="number" name="pt"
                    id="pt">
            </div>
            <div class="form-group my-2 flex flex-col text-center">
                <label for="o">O</label>
                <input class="min-w-full border-none rounded drop-shadow-sm " placeholder='N/A' type="number" name="o"
                    id="o">
            </div>
            <div class="form-group my-2 flex flex-col text-center">
                <label for="o">AB</label>
                <input class="min-w-full border-none rounded drop-shadow-sm " placeholder='N/A' type="number" name="o"
                    id="o">
            </div>
            <div class="form-group my-2 flex flex-col text-center">
                <label for="weight">Peso (gr)</label>
                <input class="min-w-full border-none rounded drop-shadow-sm " placeholder='N/A' type="number"
                    name="weight" id="weight">
            </div>
            <div class="options flex min-w-[200px] justify-between items-center">

                <div class="form-group my-2 flex flex-col text-center items-center">
                    <label for="has-skull">Cráneo</label>
                    <input class="border-none rounded drop-shadow-sm "  type="checkbox"
                        name="has-skull" id="has-skull">
                </div>
                <div class="form-group my-2 flex flex-col text-center items-center">
                    <label for="has-skull">Piel</label>
                    <input class="border-none rounded drop-shadow-sm "  type="checkbox"
                        name="has-skull" id="has-skull">
                </div>
                <div class="form-group my-2 flex flex-col text-center items-center">
                    <label for="has-body">Cuerpo</label>
                    <input class="border-none rounded drop-shadow-sm "  type="checkbox"
                        name="has-body" id="has-body">
                </div>
            </div>
            <div class="form-group my-2 flex flex-col text-center flex flex-col">
                <label for="has-skull">Observaciones</label>
                <textarea name="observations" id="observations" cols="30" rows="5"></textarea>
            </div>
            <primary-button class="mt-5 capitalize">{{ specimen.id ? 'Guardar' : 'agregar'}}</primary-button>
        </form>
    </div>
    <div class="bg-white m-5 rounded-lg p-5 max-h-full drop-shadow">
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