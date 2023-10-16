<script setup>

import { Link } from '@inertiajs/vue3';


const props = defineProps( { posts : { type : Array, default : [] } } );

</script>

<template>

    <div class="mx-auto w-full min-h-screen max-w-screen-lg flex text-primary-black">

        <div class="my-16 mx-8 grid grid-cols-3 gap-x-8 gap-y-20">

            <article class="p-4 flex flex-col items-start first:col-span-3 justify-between rounded-xl bg-primary-white bg-opacity-75 hover:opacity-90 transition-opacity duration-300 ease-in-out" v-for=" ( post, index ) in props.posts " v-bind:key="post.slug">

                <div class="h-full flex flex-col" v-bind:class=" { 'grid grid-cols-3 gap-x-8' : index == 0 } ">

                    <Link v-bind:class=" { 'col-span-2 h-full' : index == 0 } " v-bind:href="`/${post.slug}`">

                        <img class="w-full aspect-video object-cover rounded-xl" v-bind:class=" { 'h-full' : index == 0 } " v-bind:src="post.image">

                    </Link>

                    <div class="grow flex flex-col items-stretch justify-between">

                        <div v-bind:class=" { 'mt-4' : index != 0 } ">

                            <div v-bind:class=" { 'flex flex-col-reverse' : index == 0 } ">

                                <div class="mt-4 flex items-center space-x-4 text-xs">

                                    <p class="py-1" v-text="post.date" />

                                </div>

                                <Link v-bind:href="`/${post.slug}`"><h3 class="mt-4 text-lg font-bold" v-bind:class=" { 'text-2xl' : index == 0 }" v-text="post.title" /></Link>

                            </div>

                            <p class="mt-8 text-sm leading-6" v-bind:class=" index == 0 ? 'line-clamp-6' : 'line-clamp-3' " v-text="post.summary" />

                        </div>

                        <div class="mt-8 flex" v-bind:class=" index == 0 ? 'justify-start' : 'justify-end' ">

                            <Link class="px-4 py-2 rounded-md text-xs border" v-bind:href="`/${post.slug}`"><span v-text="'Read more'" /></Link>

                        </div>

                    </div>

                </div>

            </article>

        </div>

    </div>

</template>
