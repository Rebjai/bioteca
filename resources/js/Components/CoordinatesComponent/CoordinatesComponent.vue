<template>
  <div class="flex flex-col items-center">
    
    <input v-if="useDMS" type="number" v-model.number="decimalCoordinates" />
    <div v-if="!useDMS" class="flex gap-2 p-2 flex-col md:flex-row">
      <div class="form-group flex flex-col">
        <label for="degrees">Grados</label>
        <input
        class="min-w-full rounded border-none drop-shadow-sm"
          id="degrees"
          type="number"
          v-model.number="dmsCoordinates.degrees"
        />
      </div>
      <div class="form-group flex flex-col">
        <label for="Minutes">Minutos</label>
        <input
        class="min-w-full rounded border-none drop-shadow-sm"
          id="minutes"
          type="number"
          v-model.number="dmsCoordinates.minutes"
        />
      </div>
      <div class="form-group flex flex-col">
        <label for="seconds">Segundos</label>
        <input
        class="min-w-full rounded border-none drop-shadow-sm"
          id="seconds"
          type="number"
          step="any"
          v-model.number="dmsCoordinates.seconds"
        />
      </div>
    </div>
    <!-- <label>
      <input type="checkbox" v-model="useDMS" />
      Coordenadas decimales
    </label> -->
  </div>
</template>
  
  <script setup>
import { ref, computed, watch, onUpdated } from "vue";

const props = defineProps({ modelValue: 0 , useDMS: false});
const emit = defineEmits(["update:modelValue"]);
const decimalCoordinates = ref(props.modelValue ? props.modelValue : 0);
const dmsCoordinates = ref(decimalToDMS(props.modelValue));

const coordinates = computed(() => {
  alert();
  emit("update:modelValue", decimalCoordinates.value);
  const cords = 0;
  if (useDMS.value) {
    cords = dmsToDecimal(dmsCoordinates.value);
  } else {
    cords = decimalCoordinates.value;
  }
  return cords;
});

function dmsToDecimal(dms) {
  return dms.degrees + dms.minutes / 60 + dms.seconds / 3600;
}

function decimalToDMS(decimal) {
  const degrees = Math.trunc(decimal);
  const minutes = Math.trunc((decimal - degrees) * 60);
  const seconds = ((decimal - degrees - minutes / 60) * 3600).toFixed(4);
  return {
    degrees,
    minutes,
    seconds,
  };
}

watch(decimalCoordinates, (value) => {
  emit("update:modelValue", decimalCoordinates.value);

  dmsCoordinates.value = decimalToDMS(value);
});

watch(
  dmsCoordinates,
  (value) => {
    console.log(!useDMS.value);
    decimalCoordinates.value = dmsToDecimal(value);
  },
  { deep: true }
);
</script>
  