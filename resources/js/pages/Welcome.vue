<script setup>

import Feedback from '/resources/js/components/Feedback.vue';
import logotype from '/public/assets/capsules-logotype-background.svg';

</script>

<template>

    <Feedback class="fixed z-10 bottom-0 right-0" />

    <div class="w-screen h-screen flex flex-col items-center justify-center text-center bg-primary-white">

        <img class="w-24 h-24" v-bind:src="logotype">

        <h1 class="mt-4 text-6xl font-bold select-none header-mode" v-text="'Capsules Codes'" />

    </div>

</template>
