<script setup>
import { jsPDF } from "jspdf";
import { ref } from '@vue/reactivity';
import { onMounted } from '@vue/runtime-core';
import html2canvas from "html2canvas";
import PrimaryButton from "@/Components/PrimaryButton.vue";
PrimaryButton
const tag_type = ref('rectangular')
const height = ref(23)
const width = ref(88)
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

function draw() {
    const canvas = document.querySelector('#tag-canvas')
    const canvas2 = document.querySelector('#tag-2-canvas')
    const scale = 1

    // alert()
    if (tag_type.value == 'circular') {
        height.value = width.value
    }
    const rectWidth = width.value * 3.77
    const rectHeight = height.value * 3.77
    //setupcanvas
    canvas.width = width.value * 3.77
    canvas.height = height.value * 3.77;
    canvas2.width = width.value * 3.77
    canvas2.height = height.value * 3.77;
    const ctx = canvas.getContext('2d')
    const ctx2 = canvas2.getContext('2d')
    ctx.scale(scale, scale);
    ctx2.scale(scale, scale);
    if (tag_type.value == 'rectangular') {
        return drawRectangularTag(ctx, ctx2, rectWidth, rectHeight)
    }
    if (tag_type.value == 'box') {
        return drawBoxTag(ctx, ctx2, rectWidth, rectHeight)
    }
    return drawCircleTag(ctx, ctx2, rectWidth)
        
}
function drawTag(ctx, w, h, type = 'rectangular') {
    if (type !== 'circular') {
        ctx.fillStyle = '#333'
        ctx.fillRect(0, 0, ctx.canvas.width, ctx.canvas.height)
        ctx.fillStyle = '#DDD'
        ctx.fillRect(ctx.canvas.width / 2 - w / 2, ctx.canvas.height / 2 - h / 2, w, h)
        if (type == 'rectangular') {
            drawCircle(ctx, ctx.canvas.width / 2 - w / 2 + w * .06, ctx.canvas.height / 2 - ctx.canvas.height / 6, (w-w*.85) * .15, '#333')
            drawCircle(ctx, ctx.canvas.width / 2 - w / 2 + w * .06, ctx.canvas.height / 2 + ctx.canvas.height / 6, (w-w*.85) * .15, '#333')
            drawDivisorLine(ctx, ctx.canvas.width / 2 - w / 2 + w * .20, h * .25, h * .75)
        }
        return
    }
    ctx.fillStyle = '#DDD'
    drawCircle(ctx, ctx.canvas.width / 2, ctx.canvas.height / 2, w/2)
    drawCircle(ctx, ctx.canvas.width / 2, ctx.canvas.height / 2 - w/2 + w*.15, (w/2)*.1, '#333')

}
function drawRectangularTag(ctx, ctx2, rectWidth, rectHeight) {
    drawTag(ctx, rectWidth, rectHeight)
    drawTag(ctx2, rectWidth, rectHeight)
    drawCollectionNumber(ctx, props.specimen.measurable.id, ctx.canvas.width / 2 - rectWidth / 2 + rectWidth * .15, ctx.canvas.height / 2)
    drawCollectionNumber(ctx2, props.specimen.measurable.id, ctx.canvas.width / 2 - rectWidth / 2 + rectWidth * .15, ctx.canvas.height / 2)
    drawRectangularText(ctx, ctx2, rectWidth, rectHeight)
}
function drawBoxTag(ctx, ctx2, rectWidth, rectHeight) {
    drawTag(ctx, rectWidth, rectHeight, 'box')
    drawBoxText(ctx, ctx2, rectWidth, rectHeight)
}

function drawCircleTag(ctx, ctx2, rectWidth, rectHeight){
    drawTag(ctx, rectWidth, rectWidth, 'circular')
    drawTag(ctx2, rectWidth, rectWidth, 'circular')
    drawCircularText(ctx, ctx2, rectWidth)
}

function drawCircularText(ctx, ctx2, w) {
    ctx.font = 'bold 10px sans';
    ctx.textAlign = 'center'
    ctx.fillStyle = 'black'

    ctx.fillText(props.specimen.measurable_id, ctx.canvas.width / 2, ctx.canvas.height/2)
    ctx2.font = '10px sans';
    ctx2.textAlign = 'center'
    ctx2.fillStyle = 'black'
    ctx2.fillText(props.specimen.measurable.gender ? '♂' : '♀', ctx.canvas.width / 2 , ctx.canvas.height / 2 - w / 2 + (w *.3))
    ctx2.fillText(props.specimen.measurable_id, ctx.canvas.width / 2 , ctx.canvas.height / 2 - w / 2 + (w *.55))
    ctx2.fillText(`${props.specimen.assistant.name[0]}. ${props.specimen.assistant.first_surname[0]}. ${props.specimen.assistant.second_surname[0]}.`, ctx.canvas.width / 2, ctx.canvas.height / 2 - w /2 + w*.75)

    
}

function drawBoxText(ctx, ctx2, rectWidth, rectHeight) {
    ctx.font = 'bold 10px sans';
    ctx.textAlign = 'center'
    ctx.fillStyle = 'black'
    ctx.fillText("Instituto Tecnológico del Valle de Oaxaca", ctx.canvas.width / 2, ctx.canvas.height / 2 - rectHeight/2 + rectHeight*.15, rectWidth )
    ctx.fillText('N. '+props.specimen.measurable.id, ctx.canvas.width / 2, ctx.canvas.height / 2 - rectHeight/2 + rectHeight*.3, rectWidth )
    ctx.font = '10px sans';
    ctx.fillText(props.specimen.measurable.gender ? '♂' : '♀', ctx.canvas.width / 2 - rectWidth / 2 + rectWidth * .4, ctx.canvas.height / 2 - rectHeight / 2 + (rectHeight *.3))
    const scientific_name = props.specimen.species.scientific_name ? props.specimen.species.scientific_name : 'mamal exemplaris'
    ctx.fillText(scientific_name, ctx.canvas.width / 2, ctx.canvas.height/2 - rectHeight /2 + rectHeight*.5)
    wrapText(ctx, props.specimen.location.name, ctx.canvas.width / 2, ctx.canvas.height / 2 - rectHeight / 2 + (rectHeight * .7), rectWidth *.7, 12)
    ctx.fillText(`${props.specimen.collection_date} `, ctx.canvas.width / 2, ctx.canvas.height / 2 - rectHeight / 2 + (rectHeight * .9))
}


function drawRectangularText(ctx, ctx2, rectWidth, rectHeight) {
    ctx.font = 'bold 10px sans';
    ctx.fillStyle = 'black'
    ctx.fillText("Instituto Tecnológico del Valle de Oaxaca", ctx.canvas.width / 2 - rectWidth / 2 + rectWidth * .3, ctx.canvas.height / 2 - rectHeight / 2 + rectHeight * .30, rectWidth - rectWidth * .35)
    ctx.font = 'italic 9px sans';
    ctx.textAlign = 'center'
    const text = props.specimen.species.scientific_name ? props.specimen.species.scientific_name : 'mamal exemplaris'
    ctx.fillText(text, ctx.canvas.width / 2, (rectHeight * .6))
    console.log(props.specimen.measurable);
    ctx2.font = 'bold 12px sans';
    ctx2.fillText(props.specimen.measurable.gender ? '♂' : '♀', ctx.canvas.width / 2 - rectWidth / 2 + rectWidth * .22, ctx.canvas.height / 2 - (rectHeight / 2 - (rectHeight / 4)))
    ctx2.font = '9px sans';
    ctx2.textAlign = 'right'
    ctx2.fillText(`${props.specimen.assistant.name[0]}. ${props.specimen.assistant.first_surname}. ${props.specimen.assistant.second_surname[0]}.`, ctx.canvas.width / 2 - rectWidth / 2 + rectWidth * .95, ctx.canvas.height / 2 - (rectHeight / 2 - (rectHeight / 4)))
    ctx2.fillText(`${props.specimen.collection_date} `, ctx.canvas.width / 2 - rectWidth / 2 + rectWidth * .95, ctx.canvas.height / 2 - rectHeight / 2 + (rectHeight * .8))
    ctx2.textAlign = 'left'
    // ctx2.fillText(props.specimen.location.name, ctx.canvas.width / 2 - rectWidth / 2 + rectWidth * .22, ctx.canvas.height / 2 - rectHeight / 2 + (rectHeight * .5))
    wrapText(ctx2, props.specimen.location.name, ctx.canvas.width / 2 - rectWidth / 2 + rectWidth * .22, ctx.canvas.height / 2 - rectHeight / 2 + (rectHeight * .5), rectWidth - rectWidth * .25, 12)
    ctx2.fillText(`${props.specimen.measurable.measures} `, ctx.canvas.width / 2 - rectWidth / 2 + rectWidth * .22, ctx.canvas.height / 2 - rectHeight / 2 + (rectHeight * .8))

}




function drawCircle(ctx, x, y, radius, color = '#DDD') {
    ctx.beginPath();
    ctx.fillStyle = color
    ctx.arc(x, y, radius, 0, 2 * Math.PI)
    ctx.fill();
    ctx.stroke();
}
function drawDivisorLine(ctx, x1, y1, y2) {
    ctx.beginPath();
    ctx.moveTo(x1, y1)
    ctx.lineTo(x1, y2)
    ctx.stroke();
}

function drawCollectionNumber(ctx, text, x, y) {
    ctx.save();
    ctx.translate(x, y);
    ctx.rotate(-Math.PI / 2);
    ctx.textAlign = "center";
    ctx.font = "bold 9px sans";
    ctx.letterSpacing = "5px";
    ctx.fillText(text, 0, 0);
    ctx.restore();

}
function wrapText(ctx, text, x, y, maxWidth, lineHeight) {
    // alert(x)
    // First, start by splitting all of our text into words, but splitting it into an array split by spaces
    let words = text.split(' ');
    let line = ''; // This will store the text of the current line
    let testLine = ''; // This will store the text when we add a word, to test if it's too long
    let lineArray = []; // This is an array of lines, which the function will return

    // Lets iterate over each word
    for (var n = 0; n < words.length; n++) {
        testLine += `${words[n]} `;
        let metrics = ctx.measureText(testLine);
        let testWidth = metrics.width;
        if (testWidth > maxWidth && n > 0) {
            lineArray.push([line, x, y]);
            y += lineHeight;
            line = `${words[n]} `;
            testLine = `${words[n]} `;
        }
        else {
            line += `${words[n]} `;
        }
        if (n === words.length - 1) {
            lineArray.push([line, x, y]);
        }
    }
    lineArray.forEach(function (item) {
        ctx.fillText(item[0], item[1], item[2]-(lineHeight*.1 * (lineArray.length-1)));
    })
    return lineArray;
}

onMounted(() => {
    draw()
})
</script>
<template>
    <div id="bg">
        <!-- <h1 class="text-2xl font-bold capitalize">Etiqueta</h1> -->
        <h2 class="text-lg font-bold capitalize">Tipo</h2>
        <div class="tag-type flex justify-evenly">
            <div class="form-group flex flex-col items-center"><label for="rectangular">Rectangular</label><input
                    type="radio" name="tag_type" v-model="tag_type" id="rectangular" value="rectangular" @change="draw">
            </div>
            <div class="form-group flex flex-col items-center"><label for="box">Caja</label><input type="radio"
                    name="tag_type" v-model="tag_type" id="box" value="box" @change="draw"></div>
            <div class="form-group flex flex-col items-center"><label for="circular">Circular</label><input type="radio"
                    name="tag_type" v-model="tag_type" id="circular" value="circular" @change="draw"></div>
        </div>
        <h2 class="text-lg font-bold capitalize">medidas</h2>
        <div id="size">
            <div class="form-group" v-show="tag_type!='circular'">
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
        <div v-show="tag_type != 'box'" class="flex justify-center bg-zinc-700 p-5">
            <canvas id="tag-2-canvas" class="max-w-full grid items-center">
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