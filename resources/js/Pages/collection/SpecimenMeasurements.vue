<script setup>

</script>
<template>
    <div id="title" class="text-center font-bold text-xl uppercase py-5">
        <h1>Medidas del espécimen</h1>
    </div>
    <form action="" class="flex flex-col items-center content-between">
        <div class="form-group my-2 flex flex-col text-center">
            <label for="gender">Sexo</label>
            <select name="gender" id="gender">
                <option value="">Selecciona una opción</option>
                <option value="1">Hembra</option>
                <option value="0">Macho</option>
            </select>
        </div>
        <div class="form-group my-2 flex flex-col text-center">
            <label for="gonads">Medida de Gónadas (cm)</label>
            <input type="number" name="gonads" id="gonads">
        </div>
        <div class="form-group my-2 flex flex-col text-center">
            <label for="lt">LT</label>
            <input type="number" name="lt" id="lt">
        </div>
        <div class="form-group my-2 flex flex-col text-center">
            <label for="lc">LC</label>
            <input type="number" name="lc" id="lc">
        </div>
        <div class="form-group my-2 flex flex-col text-center">
            <label for="pt">PT</label>
            <input type="number" name="pt" id="pt">
        </div>
        <div class="form-group my-2 flex flex-col text-center">
            <label for="o">O</label>
            <input type="number" name="o" id="o">
        </div>
        <div class="form-group my-2 flex flex-col text-center">
            <label for="o">AB</label>
            <input type="number" name="o" id="o">
        </div>
        <div class="form-group my-2 flex flex-col text-center">
            <label for="weight">Peso (gr)</label>
            <input type="number" name="weight" id="weight">
        </div>
        <div class="options flex min-w-[200px] justify-between items-center">

            <div class="form-group my-2 flex flex-col text-center items-center">
                <label for="has-skull">Cráneo</label>
                <input type="checkbox" name="has-skull" id="has-skull">
            </div>
            <div class="form-group my-2 flex flex-col text-center items-center">
                <label for="has-skull">Piel</label>
                <input type="checkbox" name="has-skull" id="has-skull">
            </div>
            <div class="form-group my-2 flex flex-col text-center items-center">
                <label for="has-body">Cuerpo</label>
                <input type="checkbox" name="has-body" id="has-body">
            </div>
        </div>
        <div class="form-group my-2 flex flex-col text-center flex flex-col">
            <label for="has-skull">Observaciones</label>
            <textarea name="observations" id="observations" cols="30" rows="5"></textarea>
        </div>
    </form>

</template>

<script>
import Layout from '@/Layouts/AuthenticatedLayout.vue';


export default {
    layout: Layout
}
</script>

<style>

</style>