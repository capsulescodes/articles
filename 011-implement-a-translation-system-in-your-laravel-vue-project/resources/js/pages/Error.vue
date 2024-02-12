<script setup>

import { useTrans } from '/resources/js/composables/trans';

</script>

<template>

    <div class="w-screen h-screen flex items-center justify-center text-center space-y-8">

        <h1 class="text-6xl font-bold select-none header-mode" v-text="useTrans( 'Maintenance mode activated' )" />

    </div>

</template>
