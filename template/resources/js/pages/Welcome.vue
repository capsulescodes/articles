<script setup>

import Greeter from 'capsulescodes-package';

import logotype from '/public/assets/capsules-logotype.svg';

</script>

<template>

    <div class="w-screen h-screen flex flex-col items-center justify-center text-center">

        <img class="w-24 h-24" v-bind:src="logotype" v-bind:alt="'Capsules Codes Logotype'">

        <h1 class="mt-4 text-6xl font-bold select-none header-mode" v-text="Greeter.greet()" />

        <h2 class="mt-4 text-xl font-bold select-none header-mode" v-text="Greeter.say( 'That\'s a quick way to develop and test a package!' )" />

    </div>

</template>
