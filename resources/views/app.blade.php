<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ako's Portfolio</title>
        @vite('resources/js/app.js')
        @inertiaHead()
        <style>
            html {
                scroll-behavior: smooth;
            }
        </style>
    </head>
    <body class="antialiased relative bg-black h-screen overflow-x-hiden" id="my-scrollbar">
        @inertia()
    </body>
</html>
