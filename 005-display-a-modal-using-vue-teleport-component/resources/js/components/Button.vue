<script setup>

import { ref, watch } from 'vue';

import Modal from '/resources/js/components/Modal.vue';

import logotype from '/public/assets/capsules-logotype-red-blue-home.svg';


const button = ref();
const isModalOpen = ref( false );


watch( () => isModalOpen.value, () => isModalOpen.value ? window.addEventListener( 'click', clickOutside ) : window.removeEventListener( 'click', clickOutside ) );


function clickOutside( event )
{
    if( event.target === button.value || !event.composedPath().includes( button.value ) ) isModalOpen.value = false;
}

</script>


<template>

    <div ref="button" class="m-4">

        <button class="px-4 py-2 text-sm rounded-md border border-primary-black hover:border-primary-red hover:text-primary-red transition-all" v-on:click="isModalOpen = true" v-bind:class="{ 'opacity-25' : isModalOpen }" v-bind:disabled="isModalOpen" v-text="'Open Modal'" />

        <Modal v-bind:open="isModalOpen" v-on:toggle="isModalOpen = false">

            <div class="p-8 flex flex-row space-x-4 rounded-lg">

                <img class="w-12 h-12 select-none" v-bind:src="logotype">

                <div class="font-mono flex items-center">

                    <h2 class="text-lg align-middle" v-text="'A wild MODAL appeared!'"/>

                </div>

            </div>

        </Modal>

    </div>

</template>
