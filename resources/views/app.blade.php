<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>Ako's Portfolio</title>

    <link rel="icon" type="jpg" sizes="32x32" href="{{ asset('images/logo.jpg') }}">
    <link rel="icon" type="jpg" sizes="16x16" href="{{ asset('images/logo.jpg') }}">
    <link rel="mask-icon" href="{{ asset('images/logo.jpg') }}">
    <link rel="shortcut icon" href="{{ asset('images/logo.jpg') }}">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/TextPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollTrigger.min.js"></script>

    
    @vite(['resources/css/app.css',  'resources/js/app.js','resources/js/scrollbar.js'])
    @inertiaHead
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body class="antialiased relative bg-black h-screen overflow-x-hiden" id="my-scrollbar">
    @inertia
    {{-- <header
    class="header bg-darkblue fixed top-0 left-0 w-full flex justify-start items-center z-50 h-screen transition-all"
>
    <div class="ml-6 h-12 w-12">
        <div
            onclick="menuOpener()"
            class="marks open group right-0 opacity-0 relative h-12 flex flex-col items-center justify-center w-12 transition-all delay-75 duration-500"
        >
            <div class="bg-white h-1 w-12 z-10"></div>
            <div
                class="bg-white mt-3 mr-4 h-1 w-8 z-10 transition-all delay-75 duration-500 group-hover:mr-0 group-hover:w-12"
            ></div>
        </div>
        <div
            onclick="menuCloser()"
            class="marks group close -left-28 -top-full opacity-0 my-auto h-12 w-12 relative z-10 transition-all delay-75 duration-500"
        >
            <div
                class="absolute top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 bg-white my-auto rotate-45 mr-6 h-8 w-1 z-10 transition-all delay-75 duration-500 group-hover:h-12"
            ></div>
            <div
                class="absolute top-2/4 left-2/4 -translate-y-2/4 hover: -translate-x-2/4 bg-white my-auto -rotate-45 mr-6 h-6 md:h-12 w-1 z-10"
            ></div>
        </div>
    </div>
    <h1
        class="typing hide absolute top-2/4 left-2/4 -translate-x-2/4 -translate-y-2/4 tracking-widest font-black text-white z-10"
        style="font-size: 4vw"
    >
        AKO's PORTFOLIO
    </h1>
</header> --}}
</body>

</html>
