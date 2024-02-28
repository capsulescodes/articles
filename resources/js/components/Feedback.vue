<script setup>

import { ref } from 'vue';
import { router } from '@inertiajs/vue3';
import logotype from '/public/assets/capsules-logotype.svg';


const isOpen = ref( false );
const isSent = ref( false );
const errors = ref( {} );

const message = ref( '' );
const email = ref( '' );


function toggle()
{
    if( ! isOpen.value )
    {
        message.value = '';
        email.value = '';

        isSent.value = false;
        errors.value = {};
    }

    isOpen.value = ! isOpen.value;
}

function submit()
{
    errors.value = {};

    const data = email.value ? { email : email.value, message : message.value } : { message : message.value };

    router.post( '/feedbacks', data, { onError : error => { errors.value = error; }, onSuccess : () => { isSent.value = true; } } );
}

</script>


<template>

    <div class="m-8 flex flex-col-reverse items-end space-y-reverse space-y-4">

        <button class="w-12 h-12 flex items-center justify-center" v-on:click="toggle()">

            <div v-show="! isOpen" class="w-full h-full rounded-xl bg-white flex items-center justify-center drop-shadow-2xl hover:bg-primary-blue hover:bg-opacity-5"><img class="h-8 w-8" v-bind:src="logotype"></div>

            <div v-show="! isOpen" class="absolute top-0 left-0 w-full h-full rounded-xl bg-white flex items-center justify-center animate-ping opacity-50"><img class="h-8 w-8" v-bind:src="logotype"></div>

            <svg v-show="isOpen" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-primary-blue"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>

        </button>

        <div v-if="isOpen">

            <div v-if="! isSent" class="font-mono rounded-xl bg-white drop-shadow-xl ">

                <div class="p-2">

                    <form class="flex flex-col" v-on:submit.prevent="submit()">

                        <label for="message" hidden />

                        <textarea
                            id="message"
                            class="mb-2 p-2 outline-none rounded-md resize-none text-xs bg-slate-100"
                            v-bind:class="{ 'border border-solid border-red-500 text-red-500' : errors && errors[ 'message' ] } "
                            type="text"
                            cols="30"
                            rows="10"
                            v-bind:placeholder="'Your message'"
                            v-model="message"
                        />

                        <div class="flex">

                            <label for="email" hidden />

                            <input
                                id="email"
                                class="px-2 grow outline-none rounded-md text-xs bg-slate-100"
                                v-bind:class=" { 'border border-solid border-red-500 text-red-500' : errors && errors[ 'mail' ] } "
                                type="text"
                                v-bind:placeholder="'Your email - Optional'"
                                v-model="email"
                            >

                            <button
                                class="ml-2 px-4 py-2 inline-flex items-center rounded-md text-sm font-medium text-primary-blue bg-primary-blue bg-opacity-50 hover:bg-opacity-60"
                                type="submit"
                            >

                                <p v-text="'Send'" />

                            </button>

                        </div>

                    </form>

                    <div>

                        <p v-for=" ( error, key ) in errors " v-bind:key="key" class="first:mt-4 ml-1 text-[10px] text-red-500" v-text="error" />

                    </div>

                </div>

            </div>

            <div v-else class="font-mono p-4 flex items-center justify-center space-x-4 bg-white rounded-xl drop-shadow-xl">

                <p class="w-full text-center text-xs text-primary-black" v-text="'Thank you for your feedback !'" />

                <p v-text="'🎉'" />

                <img class="h-8 w-8" v-bind:src="logotype">

            </div>

        </div>

    </div>

</template>
