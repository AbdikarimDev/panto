<template>
    <div
        class="relative z-0 flex w-full items-center justify-center font-gilroy md:mt-48  "
    >
        <div class="flex flex-col justify-center items-center gap-10">
            <h1 class="text-[84px] font-semibold text-white">
                Make your interior more <br />
                minimalistic & modern
            </h1>
            <p class="text-center text-[24px] font-normal text-white">
                Turn your room with panto into a lot more minimalist <br />
                and modern with ease and speed
            </p>
            <!-- SEARCH INPUT -->
            <div class="w-full max-w-90  bg-white/30 backdrop-blur-xs border-[#FFFFFF99] border rounded-full flex justify-between items-center py-1.5 px-4">
                <input type="text" placeholder="Search furniture" class="border-0 outline-0 placeholder:text-white text-white w-[80%]" />
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
             <div class="absolute left-1/4 top-[120%] h-auto w-auto">
                <Float/>
             </div>
            <!-- Floating thing -->
             <div class="absolute left-32 top-[120%] h-auto w-auto">
                <LilFloat/>
             </div>
            <!-- Floating thing -->
             <div class="absolute right-32 top-[120%] h-auto w-auto">
                <LilFloat/>
             </div>
            <!-- Floating thing -->
             <div class="absolute right-[40%] top-[120%] h-auto w-auto">
                <LilFloat/>
             </div>
        </div>
    </div>
</template>

<script>
import Float from './Float.vue'; 
import LilFloat from './LilFloat.vue'; 
export default {
    components:{Float,LilFloat}
};
</script>

<style lang="less" scoped></style>
