```vue
<template>
    <div
        class="font-gilroy text-white w-full fixed top-0 left-0 z-20 transition-colors duration-300"
        :class="scrolled ? 'bg-[#151617]' : 'bg-transparent'"
    >
        <div
            class="w-full max-w-[1400px] mx-auto px-5 sm:px-8 lg:px-12
                  md:h-[80px] h-[50px] flex items-center justify-between"
        >
            <!-- Logo -->
            <div>
                <h1 class="font-semibold text-[24px] sm:text-[26px] lg:text-[28px]">
                    Panto
                </h1>
            </div>

            <!-- Desktop Navigation -->
            <div
                class="hidden md:flex font-normal text-[16px] lg:text-[18px]
                       gap-8 lg:gap-12 xl:gap-20 items-center"
            >
                <a href="#Furniture" class="hover:text-[#E58411] transition-colors">
                    Furniture
                </a>

                <a href="#Shop" class="hover:text-[#E58411] transition-colors">
                    Shop
                </a>

                <a href="#About" class="hover:text-[#E58411] transition-colors">
                    About Us
                </a>

                <a href="#Contact" class="hover:text-[#E58411] transition-colors">
                    Contact
                </a>
            </div>

            <!-- Cart + Mobile Menu -->
            <div class="flex items-center gap-4">
                <!-- Cart -->
                <svg
                    class="w-[30px] h-[30px] sm:w-[34px] sm:h-[34px]"
                    viewBox="0 0 34 34"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M17.007 2.83325C20.8036 2.83325 23.9249 5.81662 24.0833 9.59688H24.0463C24.0508 9.70676 24.0296 9.81618 23.9846 9.91659H24.2058C25.9299 9.91659 27.7353 11.1116 28.4592 13.9963L28.5378 14.3367L29.6271 23.1125C30.411 28.7097 27.3487 31.0636 23.1713 31.1633L22.8912 31.1666H11.1471C6.90168 31.1666 3.63027 29.6196 4.34956 23.4933L4.39861 23.1125L5.50041 14.3367C6.0437 11.2301 7.86761 10.0048 9.625 9.92121L9.81993 9.91659H9.93067C9.912 9.81083 9.912 9.70263 9.93067 9.59688C10.0891 5.81662 13.2104 2.83325 17.007 2.83325ZM12.8874 14.6331C12.1959 14.6331 11.6354 15.21 11.6354 15.9217C11.6354 16.6334 12.1959 17.2104 12.8874 17.2104C13.5789 17.2104 14.1394 16.6334 14.1394 15.9217L14.1297 15.7601C14.0524 15.1247 13.5257 14.6331 12.8874 14.6331ZM21.0882 14.6331C20.3968 14.6331 19.8362 15.21 19.8362 15.9217C19.8362 16.6334 20.3968 17.2104 21.0882 17.2104C21.7797 17.2104 22.3403 16.6334 22.3403 15.9217C22.3403 15.21 21.7797 14.6331 21.0882 14.6331ZM16.9515 4.6783C14.2257 4.6783 12.0159 6.88042 12.0159 9.59688C12.0346 9.70263 12.0346 9.81083 12.0159 9.91659H21.9487C21.9093 9.81451 21.8884 9.70625 21.887 9.59688C21.887 6.88042 19.6773 4.6783 16.9515 4.6783Z"
                        fill="white"
                    />

                    <ellipse
                        cx="24"
                        cy="16.622"
                        rx="10"
                        ry="12.622"
                        fill="#E58411"
                    />

                    <path
                        d="M23.8697 23.1988C26.2795 23.1988 27.7347 20.8836 27.7394 16.8971C27.744 12.94 26.2701 10.6721 23.8697 10.6721C21.4646 10.6721 20.0047 12.9341 20 16.8971C19.9907 20.8718 21.4553 23.1929 23.8697 23.1988ZM23.8697 21.0785C22.7701 21.0785 22.0589 19.6847 22.0636 16.8971C22.0682 14.1508 22.7748 12.7688 23.8697 12.7688C24.96 12.7688 25.6712 14.1508 25.6712 16.8971C25.6759 19.6847 24.9646 21.0785 23.8697 21.0785Z"
                        fill="white"
                    />
                </svg>

                <!-- Mobile Menu Button -->
                <button
                    @click="menuOpen = !menuOpen"
                    class="md:hidden flex flex-col gap-1.5 p-1"
                    aria-label="Toggle menu"
                >
                    <span class="w-6 h-0.5 bg-white"></span>
                    <span class="w-6 h-0.5 bg-white"></span>
                    <span class="w-6 h-0.5 bg-white"></span>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <div
            v-if="menuOpen"
            class="md:hidden top-0 bg-[#151617] border-t border-white/10"
        >
            <div class="flex flex-col px-6 py-5 gap-5 text-[17px]">
                <a
                    href="#Furniture"
                    @click="menuOpen = false"
                    class="hover:text-[#E58411] transition-colors"
                >
                    Furniture
                </a>

                <a
                    href="#Shop"
                    @click="menuOpen = false"
                    class="hover:text-[#E58411] transition-colors"
                >
                    Shop
                </a>

                <a
                    href="#About"
                    @click="menuOpen = false"
                    class="hover:text-[#E58411] transition-colors"
                >
                    About Us
                </a>

                <a
                    href="#Contact"
                    @click="menuOpen = false"
                    class="hover:text-[#E58411] transition-colors"
                >
                    Contact
                </a>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue'

const scrolled = ref(false)
const menuOpen = ref(false)

const handleScroll = () => {
    scrolled.value = window.scrollY > 1000
}

onMounted(() => {
    window.addEventListener('scroll', handleScroll)
})

onUnmounted(() => {
    window.removeEventListener('scroll', handleScroll)
})
</script>
```
