<template>
    <div class="font-gilroy flex w-full flex-col items-center justify-center gap-10">
        <div class="flex flex-col items-center justify-center gap-4">
            <h1 class="text-[18px] font-semibold text-[#E58411] uppercase">
                Testimonials
            </h1>
            <p class="text-[42px] md:text-start text-center font-semibold text-[#1E1E1E] capitalize">
                Our Client Reviews
            </p>
        </div>
        <!-- First testimonial -->
        <div class="flex flex-col justify-center items-center lg:flex-row md:flex-row gap-12 w-full">
            <div
                v-for="item in items"
                :key="item.title"
                class="flex h-[406px] w-full max-w-[340px] items-end justify-center rounded-2xl bg-cover bg-center py-4"
                :style="{ backgroundImage: `url(${item.img})` }"
            >
                <div
                    class="flex w-full max-w-[300px] flex-col items-center justify-center rounded-[12px] bg-white py-6 shadow-sm"
                >
                    <div
                        class="mt-[-40px] flex h-[60px] w-[60px] items-center justify-center rounded-full bg-white"
                    >
                        <img :src="item.profile" width="50" alt="" />
                    </div>
                    <div class="mb-4 flex flex-col gap-3">
                        <h1
                            class="text-center text-[18px] font-semibold text-[#1E1E1E] capitalize"
                        >
                            {{ item.title }}
                        </h1>
                        <p
                            class="text-[13px] font-normal text-[#1e1e1e96] capitalize"
                        >
                            {{ item.subtitle }}
                        </p>
                    </div>
                    <p
                        class="text-center text-[15px] mb-4 w-[252px] font-normal text-[#1e1e1e96] capitalize"
                    >
                        {{ item.desc }}
                    </p>
                    <Stars />
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import bg1 from '@/assets/bg1.png';
import bg2 from '@/assets/bg2.png';
import bg3 from '@/assets/bg3.png';
import profile1 from '@/assets/profile1.png';
import profile2 from '@/assets/profile2.png';
import profile3 from '@/assets/profile3.png';
import Stars from './Stars.vue';
export default {
    components: {
        Stars,
    },
    data() {
        return {
            bg1,
            bg2,
            bg3,
            profile1,
            profile2,
            profile3,
            items: [
                {
                    title: 'Bang Upin',
                    subtitle: 'Pedagang Asongan',
                    desc: '“Terimakasih banyak, kini ruanganku menjadi lebih mewah dan terlihat mahal“',
                    img: bg1,
                    profile: profile1,
                },
                {
                    title: 'Ibuk Sukijan',
                    subtitle: 'Ibu Rumah Tangga',
                    desc: '“Makasih Panto, aku sekarang berasa tinggal di apartment karena barang-barang yang terlihat mewah“',
                    img: bg2,
                    profile: profile2,
                },
                {
                    title: 'Mpok Ina',
                    subtitle: 'Karyawan Swasta',
                    desc: '“Sangat terjangkau untuk kantong saya yang tidak terlalu banyak karena barang-barang“',
                    img: bg3,
                    profile: profile3,
                },
            ],
        };
    },
};
</script>
