<script setup lang="ts">

import { Link } from '@inertiajs/vue3';


const props = defineProps( { post : { type : Object, required : true } } );

</script>

<template>

    <div class="mx-auto w-full min-h-screen max-w-screen-lg flex text-primary-black">

        <div class="m-16">

            <Link class="m-8 flex items-center" v-bind:href="'/'">

                <p class="text-sm leading-6 truncate" v-text="`< Back to blog`" />

            </Link>

            <div class="mb-16 p-8 rounded-xl bg-primary-white">

                <div class="mb-16 flex items-stretch">

                    <img class="w-24 object-cover rounded-xl" v-bind:src="props.post.image">

                    <h1 class="ml-4 py-2 w-2/3 text-5xl font-bold" v-text="props.post.title" />

                </div>

                <div class="mt-4 flex items-center">

                    <p class="text-xs" v-text="`${props.post.time} min - ${props.post.date}`" />

                    <hr class="grow ml-4 border-solid">

                </div>

                <div class="mt-8 text-2xl font-extralight tracking-wide article" v-html="props.post.body" />

            </div>

        </div>

    </div>

</template>
