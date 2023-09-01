<template>

<header
    class="header bg-darkblue fixed top-0 left-0 w-full flex justify-start items-center z-50 h-screen transition-all ">
    <div class="ml-6 h-12 w-12">
        <div onclick="menuOpener()"
            class="marks open group right-0 opacity-0 relative  h-12 flex flex-col items-center justify-center w-12   transition-all delay-75 duration-500">
            <div class="bg-white h-1 w-12 z-10 ">
            </div>
            <div
                class="bg-white mt-3 mr-4 h-1 w-8 z-10 transition-all delay-75 duration-500 group-hover:mr-0 group-hover:w-12">
            </div>
        </div>
        <div onclick="menuCloser()"
            class="marks group close -left-28 -top-full opacity-0 my-auto h-12 w-12 relative z-10 transition-all delay-75 duration-500">
            <div
                class=" absolute top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 bg-white my-auto rotate-45 mr-6 h-8 w-1  z-10 transition-all delay-75 duration-500 group-hover:h-12  ">
            </div>
            <div
                class=" absolute top-2/4 left-2/4 -translate-y-2/4 hover: -translate-x-2/4 bg-white my-auto -rotate-45 mr-6 h-6 md:h-12 w-1 z-10 ">
            </div>
        </div>
    </div>
    <h1 class="typing hide absolute top-2/4 left-2/4  -translate-x-2/4  -translate-y-2/4  tracking-widest font-black unpercase text-white z-10 "
        style="font-size:4vw;">AKO's PORTFOLIO </h1>
</header>

<slot></slot>
</template>

<script setup>
// import { Link } from '@inertiajs/vue3';
</script>