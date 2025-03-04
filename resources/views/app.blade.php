<!DOCTYPE html>

<html lang="{{ App::currentLocale() }}">

    <head>

        <meta charset="utf-8" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

        @viteReactRefresh

        @vite( [ 'resources/css/app.css', 'resources/js/app.jsx' ] )

        @inertiaHead

    </head>

    <body>

    @inertia

    </body>

</html>
