<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Wutsapp</title>

        <!-- Styles -->
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')

        @vite('resources/css/userSettings.css')

        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    </head>
    <body class="grid min-h-screen grid-cols-4">
        <div class="relative col-span-1">
            @include('user-settings')
        </div>
        <div class="col-span-3 bg-red-200">
            <h1>Caja de chat</h1>
        </div>
    </body>
</html>
