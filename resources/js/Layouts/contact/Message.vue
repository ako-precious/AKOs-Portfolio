<template>
    <div
        class="flex flex-col items-center justify-center w-full lg:w-10/12 p-12"
    >
        <div class="w-full">
            <h1
                data-replace="Send A Message."
                role="heading"
                class="swap leading-10 mb-6 md:text-4xl text-white text-2xl font-bold capitalize transition-all delay-75"
            >
                <span>Send A Message. </span>
            </h1>
        </div>

        <div class="flex flex-col items-center justify-center w-full">
            <form action="" class="w-full" method="post">
                <div class="relative z-0 w-full mb-6 group">
                    <input
                        type="text"
                        name="floating_first_name"
                        id="floating_first_name"
                        class="input peer"
                        placeholder=" "
                        required
                    />
                    <label for="floating_first_name" class="label"
                        >First name</label
                    >
                </div>
                <div class="relative z-0 w-full mb-6 group">
                    <input
                        type="text"
                        name="floating_last_name"
                        id="floating_last_name"
                        class="input peer"
                        placeholder=" "
                        required
                    />
                    <label for="floating_last_name" class="label">
                        Email Address</label
                    >
                </div>
                <div class="relative z-0 w-full mb-6 group">
                    <input
                        type="text"
                        name="floating_last_name"
                        id="floating_last_name"
                        class="input peer"
                        placeholder=" "
                        required
                    />
                    <label for="floating_last_name" class="label">
                        Subject</label
                    >
                </div>
                <div class="relative z-0 w-full mb-6 group">
                    <textarea
                        name=""
                        id=""
                        cols="30"
                        rows="2"
                        placeholder=" "
                        required
                        class="input peer"
                    ></textarea>

                    <label for="floating_last_name" class="label"
                        >Message</label
                    >
                </div>
                <button type="submit">
                    <a
                        class="group text-white link bg-white overflow-hidden relative w-[120px] h-12 flex justify-center items-center ease-in-out transition-all before:absolute before:top-0 before:left-0 before:w-1 before:h-full before:delay-500 before:duration-700 before:bg-red after:absolute after:top-0 after:right-0 after:w-1 after:h-full after:delay-500 after:duration-700 after:bg-red hover:after:w-6/12 hover:before:w-6/12 hover:after:delay-500 hover:before:delay-500"
                        href="#contact"
                    >
                        <span
                            class="absolute text-darkblue text-base transition-all duration-500 delay-700 group-hover:scale-0 group-hover:delay-0"
                        >
                            Send
                        </span>
                        <span
                            class="absolute text-white text-base transition-all duration-500 delay-0 scale-[5] opacity-0 group-hover:scale-100 group-hover:z-40 group-hover:opacity-100 group-hover:delay-500"
                        >
                            Send
                        </span>
                    </a>
                </button>
            </form>
        </div>
    </div>
</template>
