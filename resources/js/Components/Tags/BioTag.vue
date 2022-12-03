<script setup>
import { jsPDF } from "jspdf";
import { ref } from '@vue/reactivity';
import { onMounted } from '@vue/runtime-core';
import html2canvas from "html2canvas";
import PrimaryButton from "@/Components/PrimaryButton.vue";
PrimaryButton
const height = ref(50)
const width = ref(100)
const props = defineProps({ specimen: {} })
const previewData = ref('')

console.log({ specimen: props.specimen });
console.log({ species: props.specimen.species });
// pdfDoc.rect(0,0, )

function generateTag(params) {
    const canvas = document.querySelector('#tag-canvas')
    const pdfDoc = new jsPDF({ orientation: 'l', format: [width.value, height.value] });
    // pdfDoc.text(props.specimen.species.scientific_name, width / 10, height / 10, { align: "center" },)
    console.log({ pdfDoc });
    // previewData = pdfD
    html2canvas(canvas).then((c) => {
        console.log({ canvas });
        console.log({ c });
        const imgData = c.toDataURL('image/png')
        pdfDoc.addImage(imgData, 'PNG', 0, 0, width.value, height.value)
        pdfDoc.autoPrint()
        pdfDoc.save('autoprint.pdf')
    })



}
function draw(params) {
    const canvas = document.querySelector('#tag-canvas')
    console.log({ canvas });
    const scale = 1
    const rectWidth = width.value * 3.77
    const rectHeight = height.value * 3.77
    // canvas.width = Math.floor(canvas.offsetWidth * scale);
    // canvas.height = Math.floor(canvas.offsetHeight * scale);
    canvas.width = width.value * 3.77
    canvas.height = height.value * 3.77;
    const canvasWidth = canvas.width
    const canvasHeight = canvas.height
    const ctx = canvas.getContext('2d')
    ctx.scale(scale, scale);
    console.log({ ctx });
    ctx.fillStyle = '#222'
    ctx.fillRect(0, 0, canvasWidth, canvasHeight)
    // ctx.
    ctx.fillStyle = '#DDD'
    ctx.fillRect(canvasWidth / 2 - rectWidth / 2, canvasHeight / 2 - rectHeight / 2, rectWidth, rectHeight)
    // ctx.fillStyle = '#222'
    ctx.beginPath();
    ctx.fillStyle = '#222'
    ctx.arc(canvasWidth / 2 - rectWidth / 2 + rectWidth * .06, canvasHeight / 2, rectHeight * .062, 0, 2 * Math.PI)
    ctx.fill();
    ctx.stroke();
    ctx.font = '8px sans';
    ctx.fillStyle = 'black'
    const text = props.specimen.species.scientific_name ? props.specimen.species.scientific_name : 'mamal exemplaris'
    ctx.fillText(text, canvasWidth / 2 - rectWidth / 4, canvasHeight / 2 - (rectHeight / 2 - (rectHeight / 4)))
    console.log(props.specimen.measurable);
    ctx.fillText(props.specimen.measurable.gender ? '♂' : '♀', canvasWidth / 2 - rectWidth * .3, canvasHeight / 2 - (rectHeight / 2 - (rectHeight / 4)))
    ctx.fillText(props.specimen.location.name, canvasWidth / 2 - rectWidth * .38, canvasHeight / 2 - (rectHeight / 2 - (rectHeight / 4) * 2))

}

onMounted(() => {
    draw()
})
</script>
<template>
    <div id="bg">
        <!-- <h1 class="text-2xl font-bold capitalize">Etiqueta</h1> -->
        <h2 class="text-lg font-bold capitalize">medidas</h2>
        <div id="size">
            <div class="form-group">
                <label class="capitalize" for="height">alto</label>
                <input class="max-w-full py-2 w-[95%]" @input="draw" v-model="height" type="number">
            </div>
            <div class="form-group">
                <label class="capitalize" for="width">ancho</label>
                <input class=" max-w-full py-2 w-[95%]" @input="draw" v-model="width" type="number">
            </div>
        </div>
        <h2 class="text-lg font-bold capitalize m-2">Etiqueta (vista previa)</h2>
        <div class="flex justify-center bg-zinc-700 p-5">
            <canvas id="tag-canvas" class="max-w-full grid items-center">
            </canvas>
        </div>
        <div class="flex justify-center">
            <primary-button class="m-5 capitalize" @click="generateTag">generar</primary-button>
        </div>

        <embed :src="previewData" type="">

    </div>
</template>

<script>
export default {

}
</script>

<style>

</style>