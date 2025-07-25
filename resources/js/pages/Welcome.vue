<script setup>

import logotype from '/public/assets/capsules-logotype.svg';

</script>

<template>

    <div class="w-screen h-screen flex flex-col items-center justify-center text-center">

        <img class="w-24 h-24" v-bind:src="logotype" v-bind:alt="'Capsules Codes Logotype'">

        <h1 class="mt-4 text-6xl font-bold select-none header-mode" v-text="'Capsules Codes'" />

    </div>

</template>
