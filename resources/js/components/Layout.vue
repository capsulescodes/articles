<script setup>

import Background from '~/components/backgrounds/Pattern.vue';
import logotype from '/public/assets/capsules-logotype.svg';

</script>

<template>

    <div class="relative min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">

        <a class="relative w-16 h-16" href="/">

            <transition leave-active-class="transition ease-in duration-250" leave-from-class="opacity-100" leave-to-class="opacity-0">

                <img class="absolute w-16 h-16 select-none" v-bind:src="logotype">

            </transition>

        </a>

        <div class="w-full sm:max-w-md">

            <slot />

        </div>

        <Background class="fixed -z-10 w-screen h-screen" />

    </div>

</template>
