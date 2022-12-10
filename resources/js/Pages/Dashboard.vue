<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import BioModal from '@/Components/BioModal.vue';
import SpecimenForm from '@/Components/forms/specimen/SpecimenForm.vue';
import { ref } from '@vue/reactivity';
import { CategoryScale, LinearScale, Chart, BarElement } from 'chart.js';
import { Bar } from "vue-chartjs";
Chart.register(CategoryScale, LinearScale, BarElement)

const showModal = ref()
const props = defineProps({ specimens: {}, latest: {}, datasets: {}, labels: {}, count: 0 })
const specimens = props.specimens ? props.specimens : []
const latest = props.latest
const chartOptions = { animation: { duration: 3000, delay: 800 } }
console.log(props.labels);

const chartData = { labels: props.labels, datasets: [{ backgroundColor: '#008042', data: props.datasets }] }

console.log({ specimens });
function addSpecimen(evt) {
    console.log(showModal.value = true);
    console.log(showModal);

}
</script>



<template>
    <div>


        <Head title="Dashboard" />


        <div class="py-12">
            <div class="flex justify-center">
                <div
                    class="bg-white overflow-hidden shadow-sm sm:rounded m-3 p-6 flex flex-col justify-center items-center">
                    <h1 class="uppercase font-bold">Total de especímenes: <span class="slide-down inline-block text-2xl">{{count}}</span></h1>
                </div>

            </div>
            <div class="max-w-7xl w-[80%] mx-auto sm:px-6 lg:px-8 flex flex-col md:flex-row justify-between">
                <div
                    class="bg-white overflow-hidden shadow-sm sm:rounded m-3 p-6 flex flex-col justify-center items-center">
                    <h1 class="font-bold text-xl capitalize">Últimos especímenes modificados</h1>
                    <table>
                        <thead>
                            <tr class="capitalize">
                                <th>id</th>
                                <th>fecha de creación</th>
                                <!-- <th>fecha de modificación</th> -->
                                <th>fecha de colección</th>
                                <th>colección</th>
                            </tr>
                        </thead>
                        <tbody v-if="!latest.length">
                            <tr>
                                <th>1</th>
                                <th>2/10/2022</th>
                                <!-- <th>2/11/2022</th> -->
                                <th>2/11/2022</th>
                                <th>Mamíferos</th>
                            </tr>
                        </tbody>
                        <tbody v-if="latest.length">
                            <tr v-for="specimen in latest" :key="specimen.id">
                                <th>{{ specimen.id }}</th>
                                <th>{{ specimen.created_at }}</th>
                                <!-- <th>{{specimen.updated_at}}</th> -->
                                <th>{{ specimen.collection_date }}</th>
                                <th>{{ specimen.collection_name }}</th>
                            </tr>
                        </tbody>

                    </table>

                </div>
                <!-- {{chartData}} -->
                <!-- {{labels}} -->
                <div
                    class="bg-white overflow-hidden shadow-sm sm:rounded m-3 p-6 flex flex-col justify-center items-center">
                    <h1 class="font-bold text-xl capitalize">Historial de especímenes añadidos este año</h1>
                    <Bar id="my-chart-id" :data="chartData" :options="chartOptions" />
                </div>
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