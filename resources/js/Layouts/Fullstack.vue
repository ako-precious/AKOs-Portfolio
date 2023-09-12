<template>
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
                <p
                    ref="text"
                    class="texts pb-4 text-white text-base"
                    v-html="formattedText"
                ></p>
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
</template>

<script>
export default {
    data() {
        return {
            originalText:
                "I, as a full stack developer, can provide the technical expertise and creative solutions necessary to build a website that stands out by reflecting how you want the world to see you...", // Replace with your text
            letters: [],
        };
    },
    computed: {
        formattedText() {
            return this.originalText.replace(
                /\S/g,
                '<span class="smoke">$&</span>'
            );
        },
    },
    mounted() {
        this.letters = this.$refs.text.querySelectorAll(".smoke");
        this.attachHoverListeners();
    },
    methods: {
        attachHoverListeners() {
            this.letters.forEach((letter) => {
                letter.addEventListener("mouseover", () => {
                    letter.classList.toggle("active");
                });
            });
        },
    },
};
</script>

<style>
/* smoke animation */
section .texts span {
    position: relative;
    display: inline-block;
    cursor: pointer;
}

section .texts span.active {
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
</style>
