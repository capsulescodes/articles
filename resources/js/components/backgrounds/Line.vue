<script setup>

import { ref, onMounted } from 'vue';


const width = 100;
const height = 100;

const path = ref();


function render()
{
    const x1 = 0;
    const y1 = height / 2;

    const x2 = width;
    const y2 = height / 2;

    path.value = `M ${x1} ${y1} ${x2} ${y2}`;
}

function color()
{
    const hue = Math.ceil( Math.random() * 360 );

    return `hsl( ${hue}, 100%, 50% )`;
}


onMounted( () => render() );

</script>

<template>

	<svg preserveAspectRatio="none" v-bind:viewBox="`0 0 ${width} ${height}`">

        <path v-bind:stroke="color()" v-bind:d="path"/>

	</svg>

</template>
