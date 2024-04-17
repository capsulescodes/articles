<script setup>

import { ref, onMounted, onUnmounted } from 'vue';


let interval;

const width = 100;
const height = 100;

const rate = 15;
const duration = 4000;

const number = 20;
const amplitude = 25;
const oscillation = 2.5;

const path = ref();
const color = ref();


function render()
{
    const time = new Date().getTime();

    let points = [];

    for( let i = 0; i <= number; i++ )
    {
        const delta = 2 * ( ( time + i * oscillation * ( duration / number ) ) % duration ) / duration;
        const position = height / 2;

        const offsetX = width / number;
        const offsetY = Math.cos( Math.PI * delta );

        const x = offsetX * i;
        const y = offsetY * amplitude + position;

        points.push( { x : x, y : y } );
    }

    const curve = points.map( point => `${point.x} ${point.y}`).join( ' ' );

    path.value = `M ${curve}`;

    color.value = `hsl( ${time / rate % 360}, 100%, 50% )`;
}


onMounted( () => interval = setInterval( () => render(), rate ) );

onUnmounted( () => clearInterval( interval ) );

</script>

<template>

	<svg preserveAspectRatio="none" v-bind:viewBox="`0 0 ${width} ${height}`">

        <path fill="none" v-bind:stroke="color" v-bind:d="path"/>

	</svg>

</template>
