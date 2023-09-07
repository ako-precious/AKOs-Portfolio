<template>
      <nav
            class="fixed left-[-10000px] inset-0 w-screen bg-darkblue flex justify-center items-center h-screen z-40 transition-all delay-150 duration-700"
        >
            <ul
                class="relative w-full flex justify-center items-center flex-col transition-all"
            >
                <li class="list-none text-" v-on:click="menuCloser()">
                    <a
                        class="text-center text-2xl lg:text-3xl uppercase fontbold text-white inline-block p-4 hover:text-pink-700 transition-all delay-75 duration-500"
                        href="#works"
                        >Works</a
                    >
                </li>
                <li class="list-none text-" v-on:click="menuCloser()">
                    <a
                        class="text-center text-2xl lg:text-3xl uppercase fontbold text-white inline-block p-4 hover:text-pink-700 transition-all delay-75 duration-500"
                        href="#resume"
                        >Resume</a
                    >
                </li>
                <li class="list-none text-" v-on:click="menuCloser()">
                    <a
                        class="text-center text-2xl lg:text-3xl uppercase fontbold text-white inline-block p-4 hover:text-pink-700 transition-all delay-75 duration-500"
                        href="#contact"
                        >Contact</a
                    >
                </li>
                <li class="list-none text-" v-on:click="menuCloser()">
                    <div
                        class="flex iconic flex-row items-center justify-center w-full lg:w-[320px] lg:py-12 ml-0 rounded-full"
                    >
                        <div
                            class="my-3 group peer m-auto w-8 h-8 rounded-full outline outline-[16px] outline-black -outline-offset-[16px] hover:outline-4 hover:outline-red hover:outline-offset-8 hover:outline transition delay-75 duration-500"
                        >
                            <a
                                href=""
                                class="text-white text-center w-full h-full flex justify-center items-center hover:text-red transition delay-75 duration-500 relative"
                            >
                                <i class="fa-solid fa-envelope"></i>
                            </a>
                        </div>
                        <div
                            class="my-3 group peer m-auto w-8 h-8 rounded-full outline outline-[16px] outline-black -outline-offset-[16px] hover:outline-4 hover:outline-red hover:outline-offset-8 hover:outline transition delay-75 duration-500"
                        >
                            <a
                                href=""
                                class="text-white text-center w-full h-full flex justify-center items-center hover:text-red transition delay-75 duration-500 relative"
                            >
                                <i class="fa-brands fa-github"></i>
                            </a>
                        </div>
                        <div
                            class="my-3 group peer m-auto w-8 h-8 rounded-full outline outline-[16px] outline-black -outline-offset-[16px] hover:outline-4 hover:outline-red hover:outline-offset-8 hover:outline transition delay-75 duration-500"
                        >
                            <a
                                href=""
                                class="text-white text-center w-full h-full flex justify-center items-center hover:text-red transition delay-75 duration-500 relative"
                            >
                                <i class="fa-brands m-auto fa-linkedin"></i>
                            </a>
                        </div>
                        <div
                            class="my-3 group peer m-auto w-8 h-8 rounded-full outline outline-[16px] outline-black -outline-offset-[16px] hover:outline-4 hover:outline-red hover:outline-offset-8 hover:outline transition delay-75 duration-500"
                        >
                            <a
                                href=""
                                class="text-white text-center w-full h-full flex justify-center items-center hover:text-red transition delay-75 duration-500 relative"
                            >
                                <i class="fa-brands m-auto fa-twitter"></i>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
</template>

<script setup>

</script>
<script>
// Creating a smoke animation
export default {
    methods: {
        menuCloser() {
            document.querySelector(".open").classList.toggle("right-28");
            document.querySelector(".open").classList.toggle("right-0");
            document.querySelector(".close").classList.toggle("left-0");
            document.querySelector(".close").classList.toggle("-left-28");
            document.querySelector("nav").classList.toggle("left-0");
            document.querySelector("nav").classList.toggle("left-[-10000px]");
        },
        menuOpener() {
            document.querySelector(".open").classList.toggle("right-28");
            document.querySelector(".open").classList.toggle("right-0");
            document.querySelector(".close").classList.toggle("left-0");
            document.querySelector(".close").classList.toggle("-left-28");
            document.querySelector("nav").classList.toggle("left-0");
            document.querySelector("nav").classList.toggle("left-[-10000px]");
        },
    },
};

</script>