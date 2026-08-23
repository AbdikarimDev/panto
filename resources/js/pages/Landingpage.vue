<template>
    <div class="font-gilroy">
        <!-- tobar and hero section -->
        <div
            class="relative bg-cover bg-fixed bg-center"
            :style="{ backgroundImage: `url(${bg})`, height: '1084px' }"
        >
            <div
                class="pointer-events-none absolute inset-0 top-[96%] h-[4rem] bg-gradient-to-b from-transparent via-white/100 to-white"
            ></div>

            <div class="absolute top-7 right-0 left-0">
                <Topbar />
                <Hero />
            </div>
        </div>
        <div class="relative z-10 mb-32 flex flex-col justify-center gap-24">
            <!-- Why Choosing Us -->

            <div class="mt-20 flex items-center justify-around">
                <h1 class="text-[42px] font-semibold text-[#1E1E1E]">
                    Why <br />
                    Choosing Us
                </h1>
                <!-- firsts one  -->
                <div>
                    <h1 class="text-[24px] font-semibold text-[#1E1E1E]">
                        Luxury facilities
                    </h1>
                    <p
                        class="text-[16px] leading-[28px] font-normal text-[#1E1E1E]"
                    >
                        The advantage of hiring a workspace <br />
                        with us is that givees you comfortable <br />
                        service and all-around facilities.
                    </p>
                    <button class="flex items-center justify-center gap-4">
                        <p class="text-[14px] font-normal text-[#E58411]">
                            More Info
                        </p>

                        <svg
                            width="48"
                            height="24"
                            viewBox="0 0 48 24"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M4.5 12.4002H42M36.6 17.8002C38.0324 15.1736 42 12.4002 42 12.4002C42 12.4002 37.5119 9.44867 36.6 7.00024"
                                stroke="#E58411"
                                style="
                                    stroke: #e58411;
                                    stroke: color(
                                        display-p3 0.8999 0.5174 0.0684
                                    );
                                    stroke-opacity: 1;
                                "
                                stroke-linecap="square"
                            />
                        </svg>
                    </button>
                </div>
                <!-- second  one  -->
                <div>
                    <h1 class="text-[24px] font-semibold text-[#1E1E1E]">
                        Affordable Price
                    </h1>
                    <p
                        class="text-[16px] leading-[28px] font-normal text-[#1E1E1E]"
                    >
                        You can get a workspace of the highst <br />
                        quality at an affordable price and still <br />
                        enjoy the facilities that are oly here.
                    </p>
                    <button class="flex items-center justify-center gap-4">
                        <p class="text-[14px] font-normal text-[#E58411]">
                            More Info
                        </p>

                        <svg
                            width="48"
                            height="24"
                            viewBox="0 0 48 24"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M4.5 12.4002H42M36.6 17.8002C38.0324 15.1736 42 12.4002 42 12.4002C42 12.4002 37.5119 9.44867 36.6 7.00024"
                                stroke="#E58411"
                                style="
                                    stroke: #e58411;
                                    stroke: color(
                                        display-p3 0.8999 0.5174 0.0684
                                    );
                                    stroke-opacity: 1;
                                "
                                stroke-linecap="square"
                            />
                        </svg>
                    </button>
                </div>
                <!-- third one  -->
                <div>
                    <h1 class="text-[24px] font-semibold text-[#1E1E1E]">
                        Many Choices
                    </h1>
                    <p
                        class="text-[16px] leading-[28px] font-normal text-[#1E1E1E]"
                    >
                        We provide many unique work space <br />
                        choices so that you can choose the <br />
                        workspace to your liking.
                    </p>
                    <button class="flex items-center justify-center gap-4">
                        <p class="text-[14px] font-normal text-[#E58411]">
                            More Info
                        </p>

                        <svg
                            width="48"
                            height="24"
                            viewBox="0 0 48 24"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M4.5 12.4002H42M36.6 17.8002C38.0324 15.1736 42 12.4002 42 12.4002C42 12.4002 37.5119 9.44867 36.6 7.00024"
                                stroke="#E58411"
                                style="
                                    stroke: #e58411;
                                    stroke: color(
                                        display-p3 0.8999 0.5174 0.0684
                                    );
                                    stroke-opacity: 1;
                                "
                                stroke-linecap="square"
                            />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Products -->
            <div>
                <Products />
            </div>
            <!-- Experience -->
            <div>
                <Experience />
            </div>
            <!-- Testimonial -->
            <div>
                <Testimonial />
            </div>
            <!-- Footer -->
            <div>
                <Footer />
            </div>
        </div>
    </div>
</template>

<script>
import Topbar from '@/components/Topbar.vue';
import Hero from '@/components/Hero.vue';
import Products from '@/components/Products.vue';
import Experience from '@/components/Experience.vue';
import Testimonial from '@/components/Testimonial.vue';
import Footer from  "@/components/Footer.vue"
import bg from '../assets/bg.png';
export default {
    components: { Topbar, Hero, Products, Experience, Testimonial, Footer },
    data() {
        return {
            bg,
        };
    },
};
</script>
