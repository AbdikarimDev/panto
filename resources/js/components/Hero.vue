<template>
    <div
        class="relative z-0 flex w-full items-center justify-center font-gilroy md:mt-48 mt-16 lg:px-0 md:px-0 px-10"
    >
        <div class="flex flex-col items-center justify-center gap-10">
            <h1 class="lg:text-[84px] md:text-[64px] text-[24px]  font-semibold text-white">
                Make your interior more <br />
                minimalistic & modern
            </h1>
            <p class="text-center lg:text-[24px] md:text-[18px] text-[16px] font-normal text-white">
                Turn your room with panto into a lot more minimalist <br class="md:flex hidden" />
                and modern with ease and speed
            </p>
            <!-- SEARCH INPUT -->
            <div
                class="flex w-full max-w-90 items-center justify-between rounded-full border border-[#FFFFFF99] bg-white/30 px-4 py-1.5 backdrop-blur-xs"
            >
                <input
                    type="text"
                    placeholder="Search furniture"
                    class="w-[80%] border-0 text-white outline-0 placeholder:text-white"
                />
                <svg
                    width="40"
                    height="40"
                    viewBox="0 0 40 40"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <rect
                        width="40"
                        height="40"
                        rx="20"
                        fill="#E58411"
                        style="
                            fill: #e58411;
                            fill: color(display-p3 0.8999 0.5174 0.0684);
                            fill-opacity: 1;
                        "
                    />
                    <path
                        d="M26.75 26.75L23.3855 23.3795M25.25 18.875C25.25 20.5658 24.5784 22.1873 23.3828 23.3828C22.1873 24.5784 20.5658 25.25 18.875 25.25C17.1842 25.25 15.5627 24.5784 14.3672 23.3828C13.1716 22.1873 12.5 20.5658 12.5 18.875C12.5 17.1842 13.1716 15.5627 14.3672 14.3672C15.5627 13.1716 17.1842 12.5 18.875 12.5C20.5658 12.5 22.1873 13.1716 23.3828 14.3672C24.5784 15.5627 25.25 17.1842 25.25 18.875Z"
                        stroke="white"
                        style="stroke: white; stroke-opacity: 1"
                        stroke-width="2"
                        stroke-linecap="round"
                    />
                </svg>
            </div>
            <!-- Floating thing -->
            <div>
                <div class="absolute top-[120%] left-1/4 h-auto w-auto">
                    <Float />
                </div>
                <!-- Floating thing -->
                <div class="absolute top-[120%] lg:left-32 md:22 left-4 h-auto w-auto">
                    <LilFloat />
                </div>
                <!-- Floating thing -->
                <div class="absolute top-[120%] lg:right-32 md:right-22 right-4 h-auto w-auto">
                    <LilFloat />
                </div>
                <!-- Floating thing -->
                <div class="absolute lg:top-[120%] md:top-[120%] top-[150%] lg:right-[40%] md:right-[20%] right-[30%] h-auto w-auto">
                    <LilFloat />
                </div>
            </div>
          
        </div>
    </div>
</template>

<script>
import Float from './Float.vue';
import LilFloat from './LilFloat.vue';
export default {
    components: { Float, LilFloat },
};
</script>

<style lang="less" scoped></style>
