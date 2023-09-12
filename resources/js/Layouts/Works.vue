<template>
    <section
        class="relative workssection overflow-hidden py-12 min-h-screen"
        id="works"
    >
        <div
            class="container m-auto bg-transparent flex flex-col lg:flex-row justify-center items-center"
        >
            <div class="w-full lg:w-7/12 relative">
                <div
                    class="flex w-64 md:w-96 lg:w-[600px] m-auto flex-col justify-center items-center md:items-start"
                >
                    <h1
                        data-replace="Selected Works."
                        role="heading"
                        class="worksheader swap leading-10 pb-4 lg:text-7xl md:text-5xl text-white text-3xl font-bold capitalize transition-all delay-75"
                    >
                        <span>Selected Works. </span>
                    </h1>
                </div>
            </div>
            <div class="w-full lg:w-4/12 relative written-text"></div>
        </div>
        <WorksPhone />
        <div
            class="container relative hidden lg:flex flex-col justify-center items-center m-auto"
        >
            <div class="my-[60px]">
                <h1
                    data-jarallax-element="0 -200"
                    class="hover-3 leading-10 text-right mb-6 md:text-4xl text-white text-2xl font-bold capitalize transition-all delay-75"
                >
                    <span>A Room Reservation System. </span>
                </h1>
                <div
                    class="box relative flex justify-between w-[1000px] items-center"
                >
                    <div
                        class="imgBx group relative w-[800px] h-[400px] overflow-hidden shadow-xl jarallax"
                    >
                        <img
                            class="absolute top-0 left-0 w-full h-full object-cover jarallax-image rotate-12 scale-150 transition-transform delay-75 ease-in-out duration-500 group-hover:rotate-0 group-hover:scale-100"
                            src="../../images/booking.png"
                            alt=""
                        />
                    </div>
                    <div class="content work-description">
                        <p>
                            I created a room reservation system that allows
                            users to reserve rooms for various purposes such as
                            conferences, meetings, events, and accommodations.
                            The system typically consists of several modules
                            that work together to manage the entire reservation
                            process. <br />
                            Users select a specific room from the list of
                            available rooms and view its details. They provide
                            their personal information and reservation details
                            such as the purpose of the reservation, the number
                            of guests, and any additional requirements. They
                            then proceed to make payment after which the
                            reservation is made
                        </p>
                    </div>
                </div>
            </div>
            <div class="my-[60px]">
                <h1
                    data-jarallax-element="0 -200"
                    class="hover-3 my-4 leading-10 text-left mb-6 md:text-4xl text-white text-2xl font-bold capitalize transition-all delay-75"
                >
                    <span>A Medical Registration System. </span>
                </h1>
                <div
                    class="box relative flex flex-row-reverse justify-between w-[1000px] items-center"
                >
                    <div
                        class="imgBx group relative w-[800px] h-[400px] overflow-hidden shadow-xl jarallax"
                    >
                        <img
                            class="absolute top-0 left-0 w-full h-full object-cover jarallax-image rotate-12 scale-150 transition-transform delay-75 ease-in-out duration-500 group-hover:rotate-0 group-hover:scale-100"
                            src="../../images/registration.png"
                            alt=""
                        />
                    </div>
                    <div class="content work-description-2">
                        <p>
                            I created a medical registration system manages the
                            registration and tracking of patients,and medical
                            professionals. The system typically includes a
                            database that stores information about patients, for
                            a medical NGO. <br />
                            The system allows new patients to register
                            themselves by filling out a registration form with
                            their personal and medical information such as their
                            name, address, age, gender, medical history, and
                            other related details. The system then assigns a
                            unique identification number to the patient which
                            helps the medical professionals track the the
                            patients health
                        </p>
                    </div>
                </div>
            </div>
            <div class="my-[60px]">
                <h1
                    data-jarallax-element="0 -200"
                    class="hover-3 leading-10 text-right mb-6 md:text-4xl text-white text-2xl font-bold capitalize transition-all delay-75"
                >
                    <span> A Loan Processing System </span>
                </h1>
                <div
                    class="box relative flex justify-between w-[1000px] items-center"
                >
                    <div
                        class="imgBx group relative w-[800px] h-[400px] overflow-hidden shadow-xl jarallax"
                    >
                        <img
                            class="absolute top-0 left-0 w-full h-full object-cover jarallax-image rotate-12 scale-150 transition-transform delay-75 ease-in-out duration-500 group-hover:rotate-0 group-hover:scale-100"
                            src="../../images/loan.png"
                            alt=""
                        />
                    </div>
                    <div class="content work-description">
                        <p>
                            I built loan processing system is that automates the
                            loan application, approval, and disbursal process.
                            It allows lenders to manage loan applications and
                            borrowers to apply for loans online, providing a
                            more efficient and convenient experience for both
                            parties. <br />
                            Borrowers submit their loan applications online,
                            filling out a form that asks for personal
                            information, employment details, and loan
                            requirements. This information is captured and
                            stored in a database, the system checks if they are
                            eligible and then tells the borrower to accept the
                            terms. After which the money will be sent them.
                        </p>
                    </div>
                </div>
            </div>
            <div class="my-[60px]">
                <h1
                    data-jarallax-element="0 -200"
                    class="hover-3 my-4 leading-10 text-left mb-6 md:text-4xl text-white text-2xl font-bold capitalize transition-all delay-75"
                >
                    <span>A QR Code Attendance System. </span>
                </h1>
                <div
                    class="box relative flex flex-row-reverse justify-between w-[1000px] items-center"
                >
                    <div
                        class="imgBx group relative w-[800px] h-[400px] overflow-hidden shadow-xl jarallax"
                    >
                        <img
                            class="absolute top-0 left-0 w-full h-full object-cover jarallax-image rotate-12 scale-150 transition-transform delay-75 ease-in-out duration-500 group-hover:rotate-0 group-hover:scale-100"
                            src="../../images/qr-code.png"
                            alt=""
                        />
                    </div>
                    <div class="content work-description-2">
                        <p>
                            I created a QR code attendance system that allows
                            individuals to check in to a class by scanning a
                            unique QR code using a mobile device or scanner. The
                            system records attendance information automatically,
                            providing an accurate and efficient way to track
                            attendance and manage records. <br />
                            An administrator creates a unique QR code. The QR
                            code is displayed in a visible location, such as
                            screen in a classroom.Attendees scan the QR code
                            using their mobile devices. Once the QR code is
                            scanned, attendance information is recorded
                            automatically in a digital system, which can be
                            accessed and managed by an administrator.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
<script setup>
import WorksPhone from "@/Layouts/WorksPhone.vue";
import { onMounted } from "vue";

// onMounted(() => {
//     gsap.registerPlugin(ScrollTrigger);
//     gsap.from(".worksheader", {
//         scrollTrigger: {
//             trigger: ".workssection",
//             start: "top top",
//             markers: true,
//             scrub: 1,
//             end: " bottom top",
//             toggleActions: "restart complete reverse reset ",
//         },
//         duration: 1,
//         x: -1100,
//         ease: "slow",
//     });
//     gsap.from(".works", {
//         scrollTrigger: {
//             trigger: ".workssection",
//             start: "top top",
//             markers: true,
//             scrub: true,
//             end: " bottom top",
//             toggleActions: "restart complete reverse reset ",
//         },
//         duration: 1,
//         y: 1100,
//         ease: "slow",
//     });
// });
</script>

<style scoped>
.circular {
    /* font-size: 1em; */
    animation: animate 7.5s linear infinite;
}

@keyframes animate {
    0% {
        transform: rotate(360deg);
        color: #ff521b;
    }
    100% {
        transform: rotate(0deg);
    }
}

section .circular span {
    position: absolute;
    top: -100;
    left: -100;
    text-transform: uppercase;
    display: inline-block;
    transform-origin: 0 70px;
}
.hover-3 {
    --b: 0.1em; /* the thickness of the line */
    --c: #93032e; /* the color */

    color: #fff;
    padding-block: var(--b);
    background: linear-gradient(var(--c) 50%, #fff 0) 0%
            calc(100% - var(--_p, 0%)) / 100% 200%,
        linear-gradient(var(--c) 0 0) 0% var(--_p, 0%) / var(--_p, 0%) var(--b)
            no-repeat;
    -webkit-background-clip: text, padding-box;
    background-clip: text, padding-box;
    transition: 0.5s var(--_s, 0s) linear,
        background-size 0.3s calc(0.3s - var(--_s, 0s));
}
.hover-3:hover {
    --_p: 100%;
    --_s: 0.3s;
    color: var(--c);
}
</style>
