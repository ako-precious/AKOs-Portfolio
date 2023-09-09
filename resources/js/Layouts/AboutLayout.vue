<template>
    <section class="relative overflow-hidden py-12 lg:py-20 min-h-screen">
        <div
            class="container m-auto lg:py-6 bg-transparent flex flex-col lg:flex-row justify-center items-center"
        >
            <div class="w-full lg:w-6/12 relative">
                <div
                    class="flex w-64 md:w-96 m-auto flex-col justify-center items-center md:items-start"
                >
                    <h1
                        data-replace="Why Me."
                        role="heading"
                        class="worksheader swap leading-10 lg:text-7xl md:text-5xl text-white text-3xl font-bold capitalize transition-all delay-75"
                    >
                        <span>Why Me. </span>
                    </h1>
                </div>
            </div>
            <div class="w-full lg:w-6/12 relative written-text"></div>
        </div>
        <div
            class="container m-auto px-8 bg-transparent flex flex-col lg:flex-row justify-center items-center"
        >
            <div
                class="w-full lg:w-6/12 relative lg:h-[500px] overflow-hidden cursor-none"
                id="parent"
                @mousemove="moveCircle"
                @mouseleave="hideCircle"
            >
                <div
                    class="flex w-full md:w-96 h-full relative m-auto flex-col justify-center"
                >
                    <p class="w-full text-white font-bold py-4">
                        With my experience in front-end and back-end
                        development, I can ensure that the website is not only
                        visually appealing but also functional, user-friendly,
                        and optimized for search engines. Additionally, I can
                        work closely with the client to understand your specific
                        needs and goals for the website, and tailor the
                        development process accordingly.
                        <br />
                        My portfolio showcases my ability to create responsive
                        designs that are accessible on a variety of devices, as
                        well as my proficiency in using a range of programming
                        languages, frameworks, and tools. From developing custom
                        WordPress themes to building complex web applications
                        from scratch, I have the expertise to handle any
                        project.
                        <br />
                        By choosing me as your full stack developer, the client
                        can be confident that they will receive a website that
                        not only meets your expectations but exceeds them in
                        terms of both form and function.
                    </p>
                    <p
                        style="-webkit-text-stroke: 0.1px white"
                        class="w-full z-10 text-transparent font-bold py-4 absolute top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4"
                    >
                        With my experience in front-end and back-end
                        development, I can ensure that the website is not only
                        visually appealing but also functional, user-friendly,
                        and optimized for search engines. Additionally, I can
                        work closely with the client to understand your specific
                        needs and goals for the website, and tailor the
                        development process accordingly.
                        <br />
                        My portfolio showcases my ability to create responsive
                        designs that are accessible on a variety of devices, as
                        well as my proficiency in using a range of programming
                        languages, frameworks, and tools. From developing custom
                        WordPress themes to building complex web applications
                        from scratch, I have the expertise to handle any
                        project.
                        <br />
                        By choosing me as your full stack developer, the client
                        can be confident that they will receive a website that
                        not only meets your expectations but exceeds them in
                        terms of both form and function.
                    </p>
                </div>
                <div
                    id="circle"
                    style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2)"
                    class="bg-black rounded-full absolute top-0 -left-2/4 w-28 h-28 border-4 border-white"
                    :style="{ display: circleVisible ? 'block' : 'none' }"
                ></div>
            </div>
            <div class="w-full lg:w-6/12 relative hidden lg:block">
                <div class="cube">
                    <div class="top translate"></div>
                    <div class="right"></div>
                    <div class="bottom"></div>
                    <div class="left"></div>
                    <div class="front"></div>
                    <div class="back"></div>
                </div>
            </div>
        </div>
    </section>
</template>
<script setup></script>
<script>
export default {
    data() {
        return {
            circleVisible: false,
        };
    },
    methods: {
        moveCircle(e) {
            const parentDiv = document.getElementById("parent");
            const circle = parentDiv.querySelector("#circle");
            const halfCircleSize = circle.offsetHeight / 2;

            const parentRect = parentDiv.getBoundingClientRect();
            const mouseX = e.clientX;
            const mouseY = e.clientY;

            if (
                mouseX >= parentRect.left &&
                mouseX <= parentRect.right &&
                mouseY >= parentRect.top &&
                mouseY <= parentRect.bottom
            ) {
                // Cursor is inside the parent div, show the circle and update its position
                this.circleVisible = true;
                circle.style.top = `${mouseY - halfCircleSize}px`;
                circle.style.left = `${mouseX - halfCircleSize}px`;
            } else {
                // Cursor is outside the parent div, hide the circle
                this.circleVisible = false;
            }
        },
        hideCircle() {
            // Hide the circle when the cursor leaves the parent div
            this.circleVisible = false;
        },
    },
};
</script>

<style scoped>
.cube {
    transform-style: preserve-3d;
    animation: spin 6s infinite linear;
    position: relative;
    width: 200px;
    height: 200px;
    top: 50%;
    left: 50%;
    margin-left: -100px;
    margin-top: -100px;
}

.cube div {
    width: 250px;
    height: 250px;
    line-height: 250px;
    text-align: center;
    border: 2px solid white;
    background-color: #93032E;
    font-size: 42px;
    display: block;
    position: absolute;
    mix-blend-mode: contrast;
}

.cube div.top {
    transform: rotateX(90deg);
    margin-top: -50px;
}

.cube div.right {
    transform: rotateY(90deg);
    margin-left: 50px;
}

.cube div.bottom {
    transform: rotateX(-90deg);
    margin-top: 50px;
}

.cube div.left {
    transform: rotateY(-90deg);
    margin-left: -50px;
}

.cube div.front {
    transform: translateZ(50px);
}

.cube div.back {
    transform: translateZ(-50px) rotateX(180deg);
}

.cube div.back span {
    transform: rotate(-180deg);
}

@keyframes spin {
    0% {
        transform: rotateX(-20deg) rotateY(20deg);
    }
    50% {
        transform: rotateX(180deg) rotateY(180deg);
    }
    70% {
        transform: rotateX(80deg) rotateY(280deg);
    }
    100% {
        transform: rotateX(-20deg) rotateY(380deg);
    }
}
</style>
