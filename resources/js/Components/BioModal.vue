<script setup>
import { onUpdated } from '@vue/runtime-core'
    const props = defineProps({
        isShowing: Boolean,
    })
    onUpdated(()=>{
        console.log(

            props.isShowing
        );
    })
    
</script>
<template>
    <div id="bg-modal" class="fixed top-0 inset-0 bg-zinc-700/60 flex justify-center items-center" v-show="isShowing" @click="$emit('close')">
        <div id="card" class="w-full md:w-[80vw] md:min-w-[80vw] opacity-full max-h-[90vh] overflow-y-scroll" @click.stop="">

            <slot>
                
            </slot>
        </div>
    </div>
  
</template>

<script>
export default {

}
</script>

<style>

</style>