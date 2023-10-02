<script setup>

import logotype from '/public/assets/capsules-logotype-red-blue-home.svg';

import Button from '/resources/js/components/Button.vue';

</script>

<template>

    <div id="capsules" class="w-full min-h-screen flex flex-col font-sans text-primary-black">

        <div class="grow mx-8 lg:mx-auto max-w-screen-lg overflow-auto flex flex-col items-center justify-center text-center">

            <img class="w-24 h-24 select-none" v-bind:src="logotype">

            <h1 class="mt-4 text-6xl font-bold select-none header-mode" v-text="'Capsules Codes'" />

            <Button class="pt-8" />

        </div>

    </div>

</template>
