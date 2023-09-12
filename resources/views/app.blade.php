<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Ako's Portfolio</title>

        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('logo.jpg') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('logo.jpg') }}">
        <link rel="mask-icon" href="{{ asset('logo.png') }}">
         <link rel="shortcut icon" href="{{ asset('logo.png') }}">
        <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/TextPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollTrigger.min.js"></script>
    
       
    @vite(['resources/js/app.js', 'resources/js/scrollbar.js'])
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
