<script setup>

import { ref, onMounted } from 'vue';


const props = defineProps( { open : { type : Boolean, default : false } } );
const emits = defineEmits( [ 'toggle' ] );


const ready = ref( false );


function toggle()
{
    emits( 'toggle' );
}


onMounted( () => ready.value = true );

</script>

<template>

    <Teleport to="#capsules" v-if="ready">

        <Transition enter-active-class="duration-500 ease-in-out" enter-from-class="opacity-0" enter-to-class="opacity-100" leave-active-class="duration-500 ease-in" leave-from-class="opacity-100" leave-to-class="opacity-0">

            <div v-if="props.open" class="fixed w-full h-full flex items-center justify-center backdrop-blur-[1px] bg-primary-white bg-opacity-50" v-on:click="toggle()">

                <div class="relative m-16 p-2 rounded-xl flex flex-wrap items-center justify-center text-xs bg-white whitespace-pre shadow-2xl shadow-black/10" v-on:click.stop>

                    <slot />

                </div>

            </div>

        </Transition>

    </Teleport>

</template>
