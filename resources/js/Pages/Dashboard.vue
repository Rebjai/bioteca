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
const props = defineProps({
    specimens: {},
    latest: {},
    datasets: {},
    labels: {},
    count: 0,
    mammal_count: 0,
    bird_count: 0,
    amphibian_count: 0,
    reptile_count: 0,
})
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
    <div class="flex justify-center">


        <Head title="Dashboard" />


        <div class="py-12 w-full md:w-[80%]">
            <div class="flex justify-center">
                <div
                    class="bg-white w-full overflow-hidden shadow-sm sm:rounded-lg drop-shadow m-3 p-6 flex flex-col justify-center items-center">
                    <h1 class="uppercase font-bold">Total de especímenes:
                        <span class="slide-down m-5 px-2 inline-block text-3xl">{{ count }}</span>
                    </h1>
                    <div class="flex w-full justify-evenly">
                        <div class="collection-type-total capitalize min-h-[100px] min-w-[60px] font-bold text-center">
                            <img src="s#" class="min-h-[50px]" alt="">
                            <h1>Mamíferos</h1>
                            <p class="text-xl tracking-wider slide-up animation-delay">{{ mammal_count }}</p>
                        </div>
                        <div class="collection-type-total capitalize min-h-[100px] min-w-[60px] font-bold text-center">
                            <img src="#" class="min-h-[50px]" alt="">
                            <h1>Reptiles</h1>
                            <p class="text-xl tracking-wider slide-up animation-delay">{{ reptile_count }}</p>
                        </div>
                        <div class="collection-type-total capitalize min-h-[100px] min-w-[60px] font-bold text-center">
                            <img src="#" class="min-h-[50px]" alt="">
                            <h1>Anfibios</h1>
                            <p class="text-xl tracking-wider slide-up animation-delay">{{ amphibian_count }}</p>
                        </div>
                        <div class="collection-type-total capitalize min-h-[100px] min-w-[60px] font-bold text-center">
                            <img src="#" class="min-h-[50px]" alt="">
                            <h1>Aves</h1>
                            <p class="text-xl tracking-wider slide-up animation-delay">{{ bird_count }}</p>
                        </div>
                    </div>
                </div>

            </div>
            <div
                class=" w-full mx-auto sm:px-0 lg:px-0 flex flex-col md:flex-row justify-between justify-items-stretch items-stretch">
                <div
                    class="flex-1 bg-white overflow-hidden shadow-sm sm:rounded drop-shadow m-3 p-6 flex flex-col justify-center">
                    <h1 class="font-bold text-xl capitalize">Últimos especímenes modificados</h1>
                    <table>
                        <thead>
                            <tr class="capitalize">
                                <th>id</th>
                                <th>Modificado por</th>
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
                                <td class="px-2 font-bold text-sm italic">{{ specimen.measurable_id }}</td>
                                <td class="px-2 font-bold text-sm italic truncate">{{ specimen.modified_by?.fullname }}</td>
                                <!-- <td>{{specimen.updated_at}}</td> -->
                                <td class="px-2 font-bold text-sm italic">{{ specimen.collection_date }}</td>
                                <td class="px-2 font-bold text-sm italic">{{ specimen.collection_name }}</td>
                            </tr>
                        </tbody>

                    </table>

                </div>
                <!-- {{chartData}} -->
                <!-- {{labels}} -->
                <div
                    class="flex-1 bg-white overflow-hidden shadow-sm sm:rounded drop-shadow m-3 p-6 flex flex-col justify-center items-center">
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