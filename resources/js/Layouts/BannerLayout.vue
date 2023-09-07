<template>
    <Header />
    <div class="relative overflow-hidden">
        <NavLayout />
    </div>

    <section
        v-on:mouseover="parallax(e)"
        class="min-h-screen banner py-20 overflow-hidden relative w-full m-auto"
    >
        <Parallax />
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
                        website that stands out by reflecting how you want the
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
                            src="../../images/akoprecious.jpg"
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
    </section>
    <slot></slot>
</template>

<script setup>
import Parallax from "@/Layouts/Parallax.vue";
import Header from "@/Layouts/HeaderLayout.vue";
import NavLayout from "@/Layouts/NavLayout.vue";
import { onMounted } from "vue";

onMounted(() => {
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
});
</script>

<script>
// Creating a smoke animation
export default {
    methods: {},
};

// Creating a smoke animation
const text = document.querySelector(".text");
text.innerHTML = text.textContent.replace(
    /\S/g,
    `<span class="smoke">$&</span>`
);

// now, add active class on hovered <span> tag const letters = document.querySelectorAll('span');
const letters = document.querySelectorAll(".smoke");
for (let i = 0; i < letters.length; i++) {
    letters[i].addEventListener("mouseover", function () {
        letters[i].classList.toggle("active");
    });
}
// // parallax animation
document.addEventListener("mousemove", parallax);

function parallax(e) {
    this.querySelectorAll(".layer").forEach((layer) => {
        const speed = layer.getAttribute("data-speed");
        const x = (window.innerWidth - e.pageX * speed) / 100;
        const y = (window.innerHeight - e.pageY * speed) / 100;
        layer.style.transform = `translateX(${x}px) translateY(${y}px)`;
    });
}
</script>

<style>
.waterlike {
    border-radius: 52% 48% 77% 23% / 45% 59% 41% 55%;
}

.outer:hover .waterlike {
    animation: watery 6s ease-in-out infinite;
}

@keyframes watery {
    0% {
        background: #1b1b3a;
        border-radius: 32% 68% 67% 33% / 56% 60% 40% 44%;
    }

    25% {
        background: #ff521b;
        border-radius: 33% 70% 54% 46% / 40% 34% 66% 60%;
    }

    50% {
        background: #93032e;
        border-radius: 36% 64% 29% 71% / 63% 32% 68% 37%;
    }

    75% {
        background: #034c3c;
        border-radius: 48% 52% 55% 45% / 32% 49% 51% 68%;
    }

    100% {
        background: #1b1b3a;
        border-radius: 32% 68% 67% 33% / 56% 60% 40% 44%;
    }
}

.outer {
    grid-template: 1fr / 1fr;
}

.outer > * {
    grid-column: 1 / 1;
    grid-row: 1 / 1;
}

/* smoke animation */
section .text span {
    position: relative;
    display: inline-block;
    cursor: pointer;
}

section .text span.active {
    animation: smoke 3s linear forwards;
    transform-origin: bottom;
}

@keyframes smoke {
    0% {
        opacity: 1;
        filter: blur(0);
        transform: translatex(0) translateY(0) rotate(0deg) scale(1);
    }

    50% {
        /* opacity: 1;
                pointer-events: none; */
        opacity: 0;
        filter: blur(20px);
        transform: translatex(300px) translateY(-300px) rotate(740deg) scale(4);
    }

    100% {
        /* opacity: 0;
                filter: blur(20px);
                transform: translatex(300) translateY(-300) rotate(740deg) scale(4); */
        opacity: 1;
        filter: blur(0);
        transform: translatex(0) translateY(0) rotate(0deg) scale(1);
    }
}

/* end of smoke animation */

/* link text swap */
.swap {
    color: white;
    overflow: hidden;
    position: relative;
    display: inline-block;
}

.swap::before,
.swap::after {
    content: "";
    position: absolute;
    width: 100%;
    left: 0;
}

.swap::before {
    background-color: #93032e;
    height: 2px;
    bottom: 0;
    transform-origin: 100% 50%;
    transform: scaleX(0);
    transition: transform 1s cubic-bezier(0.76, 0, 0.24, 1);
}

.swap::after {
    content: attr(data-replace);
    height: 100%;
    top: 0;
    transform-origin: 100% 50%;
    transform: translate3d(200%, 0, 0);
    transition: transform 1s cubic-bezier(0.76, 0, 0.24, 1);
    color: #93032e;
}

.swap:hover::before {
    transform-origin: 0% 50%;
    transform: scaleX(1);
}

.swap:hover::after {
    transform: translate3d(0, 0, 0);
}

.swap span {
    display: inline-block;
    transition: transform 1s cubic-bezier(0.76, 0, 0.24, 1);
}

.swap:hover span {
    transform: translate3d(-200%, 0, 0);
}

/* End of swap animation */
</style>
