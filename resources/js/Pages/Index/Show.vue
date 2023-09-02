<template>
    <header
        class="header bg-darkblue fixed top-0 left-0 w-full flex justify-start items-center z-50 h-screen transition-all"
    >
        <div class="ml-6 h-12 w-12">
            <div
                v-on:click="menuOpener()"
                class="marks open group right-0 opacity-0 relative h-12 flex flex-col items-center justify-center w-12 transition-all delay-75 duration-500"
            >
                <div class="bg-white h-1 w-12 z-10"></div>
                <div
                    class="bg-white mt-3 mr-4 h-1 w-8 z-10 transition-all delay-75 duration-500 group-hover:mr-0 group-hover:w-12"
                ></div>
            </div>
            <div
                v-on:click="menuCloser()"
                class="marks group close -left-28 -top-full opacity-0 my-auto h-12 w-12 relative z-10 transition-all delay-75 duration-500"
            >
                <div
                    class="absolute top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 bg-white my-auto rotate-45 mr-6 h-8 w-1 z-10 transition-all delay-75 duration-500 group-hover:h-12"
                ></div>
                <div
                    class="absolute top-2/4 left-2/4 -translate-y-2/4 hover:-translate-x-2/4 bg-white my-auto -rotate-45 mr-6 h-6 md:h-12 w-1 z-10"
                ></div>
            </div>
        </div>
        <h1
            class="typing hide absolute top-2/4 left-2/4 -translate-x-2/4 -translate-y-2/4 tracking-widest font-black text-white z-10"
            style="font-size: 4vw"
        >
            AKO's PORTFOLIO
        </h1>
    </header>
    <div class="'relative overflow-hidden'">
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
    </div>
    
    <!-- <section
        class="min-h-screen banner py-20 overflow-hidden relative w-full m-auto"
    >
        @include('includes.parrallex')
        <div
            class="container m-auto bg-transparent flex flex-col lg:flex-row justify-center items-center"
        >
            <div class="w-full lg:w-6/12 py-6 relative written-text">
                <div class="flex w-64 md:w-96 m-auto flex-col justify-center">
                    <h1
                        data-replace="Full-Stack developer."
                        role="heading"
                        class="swap leading-10 pb-4 lg:text-7xl md:text-5xl text-darkblue text-3xl font-bold capitalize transition-all delay-75"
                    >
                        <span
                            >Full-Stack <br />
                            developer.
                        </span>
                    </h1>
                    <p class="text pb-4 text-white text-base">
                        I, as a full stack developer, can provide the technical
                        expertise and creative solutions necessary to build a
                        website that stands out by reflexing how you want the
                        world to see you...
                    </p>
                </div>
            </div>
            <div class="w-full lg:w-6/12 pt-3 m-auto relative my-image">
                <div
                    class="outer w-64 md:w-80 h-64 md:h-80 m-auto grid place-items-center layer"
                    data-speed="0"
                >
                    <div
                        class="waterlike z-20 bg-red w-full h-full overflow-hidden transition-all delay-75 duration-500"
                    >
                        <img
                            src="{{ asset('images/akoprecious.jpg') }}"
                            class="w-full h-full object-cover"
                            alt=""
                        />
                    </div>
                    <div
                        class="waterlike z-10 below bg-red w-full h-full overflow-hidden transition-all delay-100 duration-700 mt-8 mr-8"
                    ></div>
                </div>
            </div>
        </div>
    </section> -->
</template>

<script setup>
// import MainLayout from "@/Layouts/MainLayout.vue";
</script>

<script>
// Creating a smoke animation
// export default {
//     methods: {
//         menuCloser() {
//             document.querySelector(".open").classList.toggle("right-28");
//             document.querySelector(".open").classList.toggle("right-0");
//             document.querySelector(".close").classList.toggle("left-0");
//             document.querySelector(".close").classList.toggle("-left-28");
//             document.querySelector("nav").classList.toggle("left-0");
//             document.querySelector("nav").classList.toggle("left-[-10000px]");
//         },
//         menuOpener() {
//             document.querySelector(".open").classList.toggle("right-28");
//             document.querySelector(".open").classList.toggle("right-0");
//             document.querySelector(".close").classList.toggle("left-0");
//             document.querySelector(".close").classList.toggle("-left-28");
//             document.querySelector("nav").classList.toggle("left-0");
//             document.querySelector("nav").classList.toggle("left-[-10000px]");
//         },
//     },
// };

// const text = document.querySelector(".text");
// text.innerHTML = text.textContent.replace(
//     /\S/g,
//     `<span class="smoke">$&</span>`
// );

// // now, add active class on hovered <span> tag const letters = document.querySelectorAll('span');
// const letters = document.querySelectorAll(".smoke");
// for (let i = 0; i < letters.length; i++) {
//     letters[i].addEventListener("mouseover", function () {
//         letters[i].classList.toggle("active");
//     });
// }
// // parallax animation
// document.addEventListener("mousemove", parallax);

// function parallax(e) {
//     this.querySelectorAll(".layer").forEach((layer) => {
//         const speed = layer.getAttribute("data-speed");
//         const x = (window.innerWidth - e.pageX * speed) / 100;
//         const y = (window.innerHeight - e.pageY * speed) / 100;
//         layer.style.transform = `translateX(${x}px) translateY(${y}px)`;
//     });
// }

// function menuOpener() {
//     document.querySelector(".open").classList.toggle("right-28");
//     document.querySelector(".open").classList.toggle("right-0");
//     document.querySelector(".close").classList.toggle("left-0");
//     document.querySelector(".close").classList.toggle("-left-28");
//     document.querySelector("nav").classList.toggle("left-0");
//     document.querySelector("nav").classList.toggle("left-[-10000px]");
// }

// function menuCloser() {
//     document.querySelector(".open").classList.toggle("right-28");
//     document.querySelector(".open").classList.toggle("right-0");
//     document.querySelector(".close").classList.toggle("left-0");
//     document.querySelector(".close").classList.toggle("-left-28");
//     document.querySelector("nav").classList.toggle("left-0");
//     document.querySelector("nav").classList.toggle("left-[-10000px]");
// }

gsap.timeline()
    .from(".typing", {
        duration: 3,
        text: "",
    })
    .to(".header", {
        duration: 1,
        height: "60px",
    })
    .to(".hide", {
        duration: 1,
        fontSize: "14px",
    })
    .to(".marks", {
        duration: 1,
        opacity: 1,
        ease: "bounce",
    })
    .from(".banner", {
        duration: 1.5,
        opacity: 0,
        top: -100,
        ease: "slow",
    })
    .from(".written-text", {
        duration: 1,
        opacity: 0,
        left: -100,
    })
    .from(".my-image", {
        duration: 1,
        opacity: 0,
        right: -100,
    });
</script>
