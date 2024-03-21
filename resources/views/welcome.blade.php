<!DOCTYPE html>

<html lang="{{ Str::snake( app()->getLocale() ) }}">

    <head>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config( 'app.name' ) }}</title>

        @vite( 'resources/css/app.css' )

    </head>

    <body class="{{ Request::path() !== 'dark-mode' ? '' : 'dark' }}">

        <div class="relative w-screen h-screen flex bg-primary-white dark-mode">

            <div class="absolute w-full h-16 flex items-center justify-center" >

            @if( Request::path() !== 'dark-mode' )

                <a href="/dark-mode" class="p-2 rounded-md outline-none hover:bg-slate-100">

                    <img class="w-6 h-6 dark-image-mode select-none" src="/assets/capsules-moon-icon.svg" alt="Moon icon">

                </a>

            @else

                <a href="/light-mode" class="p-2 rounded-md outline-none hover:bg-slate-100">

                    <img class="w-6 h-6 dark-image-mode select-none" src="/assets/capsules-sun-icon.svg" alt="Moon icon">

                </a>

            @endif

            </div>

            <div class="grow flex justify-center font-sans text-primary-black">

                <div class="flex flex-col items-center justify-center text-center">

                    <img class="w-24 h-24 select-none dark-image-mode" src="/assets/capsules-logotype-red-blue-home.svg" alt="Capsules Codes Logotype">

                    <h1 class="mt-4 text-6xl font-bold select-none header-mode">Capsules Codes</h1>

                    <h2 class="mt-4 text-xl font-extralight tracking-wide">{{ Request::path() !== 'dark-mode' ? 'Light Mode' : 'Dark Mode' }}</h2>

                </div>

            </div>

        <div>

    </body>

</html>
