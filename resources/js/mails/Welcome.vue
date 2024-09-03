<script setup>

import Layout from '/vendor/capsulescodes/inertia-mailable/components/vue/Layout.vue';
import Table from '/vendor/capsulescodes/inertia-mailable/components/vue/tags/Table.vue';


const props = defineProps( { name : { type : String, required : true } } );


const app = import.meta.env.VITE_APP_NAME;
const image = 'https://raw.githubusercontent.com/capsulescodes/inertia-mailable/main/art/capsules-inertia-mailable-mail-image.png';

</script>

<template>

    <Layout>

        <template v-slot:default>

            <p>Hello, {{ props.name }}!</p>

            <p>This is a mail made with Laravel, Inertia, Vue</p>

            <Table align="center">

                <Table align="center">

                    <Table>

                        <img class="my-4 max-w-full" v-bind:src="image">

                    </Table>

                </Table>

            </Table>

            <p>Regards,</p>

            <p>{{ app }}</p>

        </template>

        <template v-slot:subcopy>

            <p class="text-xs">This is a subcopy made with Laravel, Inertia and Vue</p>

        </template>

    </Layout>

</template>
