<script setup>

import logotype from '/public/assets/capsules-logotype-red-blue-home.svg';

</script>

<template>

    <div class="w-full min-h-screen flex flex-col font-sans">

        <div class="grow mx-8 lg:mx-auto max-w-screen-lg overflow-auto flex flex-col items-center justify-center text-center">

            <img class="w-24 h-24 select-none" v-bind:src="logotype">

            <h1 class="mt-4 text-6xl font-bold select-none header-mode" v-text="'Capsules Codes'" />

            <h2 class="mt-4 text-4xl font-bold select-none header-mode" v-text="'Application'" />

        </div>

    </div>

</template>
