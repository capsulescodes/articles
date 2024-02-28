<!DOCTYPE html>

<html lang="{{ App::currentLocale() }}">

    <head>

        <meta charset="utf-8" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title>{{ config( 'app.name' ) }}</title>

        @vite( [ 'resources/css/app.css', 'resources/js/app.js' ] )

        @inertiaHead

    </head>

    <body>

        @inertia

    </body>

</html>
