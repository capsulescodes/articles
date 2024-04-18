<script setup>

import { Link } from '@inertiajs/vue3';

import logotype from '/public/assets/capsules-logotype-red-blue.svg';
import pulse from '/public/assets/tools/pulse.svg';
import telescope from '/public/assets/tools/telescope.svg';


const props = defineProps( { service : { type : String, required : true }, url : { type : String, required : true } } );

</script>

<template>

    <div class="w-full h-screen flex">

        <div class="p-4 h-full bg-white">

            <div class="space-y-8">

                <img class="h-8 w-8" v-bind:src="logotype">

                <div class="flex flex-col space-y-1">

                    <Link class="py-2 rounded-md" v-bind:class=" props.service === 'pulse' ? 'bg-slate-100' : 'hover:bg-slate-50' " href="/pulse" v-bind:replace="true" as="button"><img class="mx-2 h-4 w-4" v-bind:src="pulse"></Link>

                    <Link class="py-2 rounded-md" v-bind:class=" props.service === 'telescope' ? 'bg-slate-100' : 'hover:bg-slate-50' " href="/telescope" v-bind:replace="true" as="button"><img class="mx-2 h-4 w-4" v-bind:src="telescope"></Link>

                </div>

            </div>

        </div>

        <div class="grow overflow-auto">

            <iframe class="w-full h-full" v-bind:src="props.url" />

        </div>

    </div>

</template>
