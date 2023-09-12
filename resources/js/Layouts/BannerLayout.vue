<template>
    <Header />
    <div class="relative overflow-hidden">
        <NavLayout />
    </div>

    <section
        class="min-h-screen banner py-20 overflow-hidden relative w-full m-auto"
    >
        <Parallax />
        <!-- <img src="../../images/1.png"  v-for="layer in layers" :key="layer.id" :data-speed="layer.speed"  class="parallax layer">
<img src="../../images/2.png"  v-for="layer in layers" :key="layer.id" :data-speed="layer.speed"  class="parallax layer">
<img src="../../images/3.png"  v-for="layer in layers" :key="layer.id" :data-speed="layer.speed"  class="parallax layer">
<img src="../../images/4.png"  v-for="layer in layers" :key="layer.id" :data-speed="layer.speed"  class="parallax layer">
<img src="../../images/5.png"  v-for="layer in layers" :key="layer.id" :data-speed="layer.speed"  class="parallax layer">
<img src="../../images/6.png"  v-for="layer in layers" :key="layer.id" :data-speed="layer.speed"  class="parallax layer">
<img src="../../images/7.png"  v-for="layer in layers" :key="layer.id" :data-speed="layer.speed"  class="parallax layer">
<img src="../../images/8.png"  v-for="layer in layers" :key="layer.id" :data-speed="layer.speed"  class="parallax layer">
<img src="../../images/9.png"  v-for="layer in layers" :key="layer.id" :data-speed="layer.speed"  class="parallax layer">
<img src="../../images/10.png"  v-for="layer in layers" :key="layer.id" :data-speed="layer.speed"  class="parallax layer">
<img src="../../images/11.png"  v-for="layer in layers" :key="layer.id" :data-speed="layer.speed"  class="parallax layer">
<img src="../../images/12.png"  v-for="layer in layers" :key="layer.id" :data-speed="layer.speed"  class="parallax layer"> -->

        <slot></slot>
    </section>
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


// Creating a smoke animation

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
