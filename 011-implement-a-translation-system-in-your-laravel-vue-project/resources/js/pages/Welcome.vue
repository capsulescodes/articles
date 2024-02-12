<script setup>

import { computed } from 'vue';
import { usePage } from '@inertiajs/vue3';
import { useTrans } from '/resources/js/composables/trans';

import logotype from '/public/assets/capsules-logotype.svg';


const locales = computed( () => usePage().props.locales );
const index = computed( () => locales.value.findIndex( value => value == usePage().props.locale ) + 1 );
const language = computed( () => locales.value[ index.value % locales.value.length ] );

</script>

<template>

    <div class="absolute h-12 w-full flex items-center justify-center">

        <a v-if=" locales.length > 1 " class="rounded-md outline-none hover:bg-slate-50 text-sm font-medium" v-bind:href="`/${language}`" v-text="`/ ${language}`" />

    </div>

    <div class="w-screen h-screen flex flex-col items-center justify-center text-center">

        <img class="w-24 h-24" v-bind:src="logotype" v-bind:alt="'Capsules Codes Logotype'">

        <h1 class="mt-4 text-6xl font-bold select-none header-mode" v-text="useTrans( 'Hello world!' )" />

    </div>

</template>
