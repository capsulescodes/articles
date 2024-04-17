<script setup>

import { ref, onMounted, onUnmounted } from 'vue';


let interval;

const width = 120;
const height = 120;

const rate = 10;
const duration = 20000;

const curves = 20;
const number = 100;
const oscillation = 3;
const amplitude = 5;
const thickness = 1;
const delay = 1000;

const colors = [ "#ab81f2", "#ff7ab4", "#ff9b8b" ];
const paths = ref( [] );


function generate()
{
    let time = new Date().getTime();

    for( let i = 0; i < curves; i++ )
    {
        time = time + delay;

        let points = [];

        for( let j = 0; j <= number; j++ )
        {
            const offsetX = width / number;
            const x = offsetX * j;

            const delta = 2 * ( ( time + j * oscillation * ( duration / number ) ) % duration ) / duration;
            const offsetY = Math.cos( Math.PI * delta );
            const y = offsetY * amplitude + ( height / curves * i );

            points.push( { x : x, y : y } );
        }

        for( let k = number; k >= 0; k-- )
        {
            const offsetX = width / number;
            const x = offsetX * k;

            const delta = 2 * ( ( time + k * oscillation * ( duration / number ) ) % duration ) / duration;
            const offsetY = Math.cos( Math.PI * delta );
            const y = offsetY * amplitude + ( height / curves * i ) + thickness;

            points.push( { x : x, y : y } );
        }

        paths.value[ i ] = `M ${points.map( point => `${point.x} ${point.y}`).join( ' ' )}`;
    }
}


onMounted( () => interval = setInterval( () => generate() , rate ) );

onUnmounted( () => clearInterval( interval ) );

</script>

<template>

	<svg preserveAspectRatio="none" viewBox="0 0 100 100">

        <linearGradient id="color-gradient" x1="0" x2="1" y1="0" y2="1">

            <stop v-for=" ( value, key ) in colors " v-bind:key="`color-${value}`" v-bind:offset="`${100 / ( colors.length - 1 ) * key}%`" v-bind:stop-color="value" />

        </linearGradient>

        <path fill="url(#color-gradient)" v-bind:d="`M 0 0 100 0 100 100 0 100 Z`"/>

        <path v-for=" ( path, key ) in paths " v-bind:key="`path-${key}`" fill="#293388" fill-opacity="25%" class="mix-blend-color-burn" v-bind:d="`${path}`"/>

	</svg>

</template>
