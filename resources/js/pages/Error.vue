<script setup>

import { Head } from '@inertiajs/vue3'
import { useStatusName, useStatusMessage } from '~/composables/status';
import logotype from '/public/assets/capsules-logotype.svg';


const props = defineProps( { status : Number } );

</script>

<template>

    <Head>

        <title>{{ useStatusName( status ) }}</title>

    </Head>

    <div class="h-screen flex justify-center">

        <div class="flex items-center space-x-10">

            <img class="h-20 w-20" v-bind:src="logotype">

            <div class="flex flex-col items-start space-y-2 font-mono text-primary-black">

                <h1 class="text-2xl text-primary-blue" v-text="`${props.status} - ${useStatusName( status )}`" />

                <p class="text-md" v-text="useStatusMessage( status )" />

            </div>

        </div>

    </div>

</template>
