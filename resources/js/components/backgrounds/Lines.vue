<script setup>

import { ref, onMounted } from 'vue';


const width = 100;
const height = 100;

const lines = 100;
const paths = ref( [] );


function render()
{
    for( let i = 0; i < lines; i++ )
    {
        const offset = height / lines;

        let points = [];

        for( let j = 0; j <= 1; j++ )
        {
            const x = width * j;
            const y = offset * i;

            points.push( { x : x, y : y } );
        }

        const thickness = height / lines;

        for( let k = 1; k >= 0; k-- )
        {
            const x = width * k;
            const y = offset + thickness * i;

            points.push( { x : x, y : y } );
        }

        const line = points.map( point => `${point.x} ${point.y}`).join( ' ' );

        paths.value[ i ] = `M ${line} Z`;
    }
}

function color( index, length )
{
    const red = 50 + ( ( 220 - 50 ) / length * ( index ) );
    const green = 230 - ( ( 230 - 55 ) / length * ( index ) );
    const blue = 255 - ( ( 255 - 115 ) / length * ( index ) );

    return `rgb( ${red}, ${green}, ${blue} )`;
}


onMounted( () => render() );

</script>

<template>

	<svg preserveAspectRatio="none" v-bind:viewBox="`0 0 ${width} ${height}`">

		<path v-for=" ( path, key ) in paths " v-bind:key="`path-${key}`" v-bind:fill="color( key, paths.length )" fill-opacity="25%" v-bind:d="path"/>

	</svg>

</template>
