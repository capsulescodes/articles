<script setup>

import { ref, onMounted, onUnmounted } from 'vue';


let interval;

const width = 100;
const height = 60;

const rate = 40;

const colors = ref( [] );
const paths = ref( [] );


function setPaths()
{
    for( let i = 0; i < width * height; i++ )
    {
        const x = i % width;
        const y = Math.floor( i / width );

        paths.value[ i ] = `M ${x} ${y} H ${x+1} V ${y+1} H ${x} Z`;
    }
}

function setColors()
{
    for( let i = 0; i < width * height; i++ )
    {
        colors.value[ i ] = `#${Math.floor( Math.random() * 16777215 ).toString( 16 )}`;
    }
}


onMounted( () =>
{
    setColors();

    setPaths();

    interval = setInterval( () => setColors() , rate );
} );

onUnmounted(() => clearInterval( interval ) );

</script>

<template>

	<svg preserveAspectRatio="none" v-bind:viewBox="`0 0 ${width} ${height}`">

        <path v-for=" index in width * height " v-bind:key="`path-${index - 1}`" v-bind:fill="colors[ index - 1 ]" v-bind:d="paths[ index - 1 ]"/>

	</svg>

</template>
