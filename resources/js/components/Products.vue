<template>
    <div
        class="font-gilroy flex flex-col items-center justify-center gap-10 bg-[#F7F7F7] py-7 lg:px-0 md:px-0 px-10"
    >
        <h1 class="text-[42px] text-center md:text-start font-semibold text-[#1E1E1E]">
            Best Selling Product
        </h1>
        <div class="flex flex-col items-center justify-center gap-6 ">
            <!-- tabs buttons -->
            <div class="flex gap-3 rounded-full bg-[#EEEEEE] px-1.5 py-1.5">
                <button
                    v-for="tab in tabs"
                    :key="tab"
                    @click="activeTab = tab"
                    :class="[
                        'rounded-full px-6 py-3 transition duration-300',
                        activeTab === tab
                            ? 'bg-[#FFFFFF] text-[#2D2F33]'
                            : 'text-[#2D2F33] hover:bg-[#ffffffbf] hover:text-[#2D2F33]',
                    ]"
                >
                    {{ tab }}
                </button>
            </div>
            <!-- Proucts -->
            <div class="mt-10 w-full grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 px-10  gap-22">
                <div
                    v-for="item in items"
                    :key="item.title"
                    class="-center flex w-full flex-col items-start"
                >
                    <div class="w-full rounded-t-[20px] bg-[#fafafac0]">
                        <img :src="item.img" width="217" alt="" />
                    </div>

                    <div class="w-full rounded-b-[20px] bg-white p-4 shadow-xl">
                        <p class="text-[16px] font-normal text-[#8D8D8D]">
                            Chair
                        </p>

                        <h1 class="text-[21px] font-semibold text-[#0D1B39]">
                            {{ item.title }}
                        </h1>

                        <Stars />

                        <div class="flex items-center justify-between">
                            <p class="text-[21px] font-semibold text-[#0D1B39]">
                                ${{ item.price }}
                            </p>
                            <button
                                class="flex items-center justify-center rounded-full bg-[#0D1B39] p-2"
                            >
                                <svg
                                    width="25"
                                    height="25"
                                    viewBox="0 0 25 25"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M21.9289 12.1856C21.9289 11.4165 21.3053 10.793 20.5362 10.793H13.5729V3.82967C13.5729 3.06053 12.9494 2.43701 12.1802 2.43701C11.4111 2.43701 10.7876 3.06053 10.7876 3.82967V10.793H3.8243C3.05515 10.793 2.43164 11.4165 2.43164 12.1856C2.43164 12.9548 3.05516 13.5783 3.8243 13.5783H10.7876V20.5416C10.7876 21.3107 11.4111 21.9342 12.1802 21.9342C12.9494 21.9342 13.5729 21.3107 13.5729 20.5416V13.5783H20.5362C21.3053 13.5783 21.9289 12.9548 21.9289 12.1856Z"
                                        fill="white"
                                        style="fill: white; fill-opacity: 1"
                                    />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <button class="flex items-center justify-center gap-4">
                <p class="text-[14px] font-normal text-[#E58411]">View All</p>

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
                            stroke: color(display-p3 0.8999 0.5174 0.0684);
                            stroke-opacity: 1;
                        "
                        stroke-linecap="square"
                    />
                </svg>
            </button>
        </div>
    </div>
</template>
<script setup>
import { ref } from 'vue';
import Stars from './Stars.vue';
import image1 from '@/assets/chair1.png';
import image2 from '@/assets/chair2.png';
import image3 from '@/assets/chair3.png';
import image4 from '@/assets/chair4.png';
const activeTab = ref('Chairs');
const items = [
    { title: 'Sakarias Armchair', img: image1, price: 492 },
    { title: 'Baltsar Chair', img: image2, price: 299 },
    { title: 'Anjay Chair', img: image3, price: 519 },
    { title: 'Nyantuy Chair', img: image4, price: 921 },
];
const tabs = ['Chairs', 'Beds', 'Sofa', 'Lamps'];
</script>
