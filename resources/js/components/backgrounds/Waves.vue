<script setup>

import { ref, onMounted, onUnmounted } from 'vue';


let interval;

const width = 100;
const height = 100;

const rate = 15;

const number = 50;
const waves = [
    { position : 60, amplitude : 2, delay : 6000, duration : 32000, color : '#33E5E1' },
    { position : 68, amplitude : 4, delay : 4000, duration : 22000, color : '#007991' },
    { position : 76, amplitude : 6, delay : 2000, duration : 12000, color : '#222E50' },
];
const paths = ref( [] );


function render()
{
    const time = new Date().getTime();

    for( let i = 0; i < waves.length; i++ )
    {
        let points = [];

        for( let j = 0; j <= number; j++ )
        {
            const delta = 2 * ( time + waves[ i ].delay + j * ( waves[ i ].duration / number ) % waves[ i ].duration ) / waves[ i ].duration;
            const offsetX = width / number;
            const offsetY = Math.cos( Math.PI * delta );

            const x = offsetX * j;
            const y = offsetY * waves[ i ].amplitude + waves[ i ].position;

            points.push( { x : x, y : y } );
        }

        const curve = points.map( point => `${point.x} ${point.y}`).join( ' ' );

        paths.value[ i ] = `M ${curve} 100 100 0 100 Z`;

    }
}


onMounted( () => interval = setInterval( () => render() , rate ) );

onUnmounted( () => clearInterval( interval ) );

</script>

<template>

	<svg preserveAspectRatio="none" v-bind:viewBox="`0 0 ${width} ${height}`">

        <path fill="#F5F5F5" d="M 0 0 100 0 100 100 0 100 Z" />

        <linearGradient v-for=" ( wave, key ) in waves " v-bind:id="`wave-gradient-${key}`" v-bind:key="`wave-gradient-${key}`" x1="0" x2="0" y1="0" y2="1">

            <stop offset="0%" v-bind:stop-color="wave.color" />

            <stop offset="100%" v-bind:stop-color="waves[ key + 1 ] ? waves[ key + 1 ].color : '#12192b' " />

        </linearGradient>

        <path v-for=" ( path, key ) in paths " v-bind:key="`path-${key}`" v-bind:fill="`url(#wave-gradient-${key})`" v-bind:d="path"/>

	</svg>

</template>
