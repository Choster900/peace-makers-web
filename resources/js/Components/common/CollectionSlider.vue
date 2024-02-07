/* eslint-disable no-undef */
<template>
    <swiper
    :modules="modules"
    :slides-per-view="4"
    :breakpoints="{
        0: { slidesPerView: 1 },
        767: { slidesPerView: 2 },
        992: { slidesPerView: 4 }
    }"
    :loop="true"
    :pagination="pagination"
    class="">
        <swiper-slide v-for="item in SectionData.collectionData.collectionList" :key="item.id" class="h-auto">
            <DropdownLink :to="item.path" class="card card-full card-collection mx-2">
                <img src="../../../images/thumb/art-5.jpg" class="card-img-top" alt="birds art image">
                <div class="card-body card-body-s1 ">
                    <div class="avatar avatar-1">
                        <img src="../../../images/thumb/avatar.jpg" alt="avatar" class="rounded-circle">
                    </div><!-- end avatar -->
                    <h4 class="card-title mt-4 mb-2 pt-1">{{ item.title }}</h4>
                  <!--   <p class="fw-semibold">{{ item.price }}</p> -->
                </div><!-- end card-body -->
            </DropdownLink><!-- end card -->
        </swiper-slide>
    </swiper>
</template>
<script>


// Import Swiper styles
import 'swiper/css';

import 'swiper/css/scrollbar';
// import required modules
// Import Swiper Vue.js components
import { Swiper, SwiperSlide } from 'swiper/vue';
import { Pagination } from 'swiper/modules';

import DropdownLink from '../DropdownLink.vue';

export default {
    name: 'CollectionSlider',
    components: {
        Swiper,
        SwiperSlide,
        DropdownLink
    },
    data() {
        return {
            SectionData: {
                // collection data
                collectionData: {
                    title: 'Collections',
                    collectionList: [
                        {
                            id: 1,
                            title: 'Crappy Dogecoin',
                            price: '$26,220',
                            path: ''
                        },
                        {
                            id: 2,
                            title: 'Savage Dogs',
                            price: '$24,497',
                            path: ''
                        },
                        {
                            id: 3,
                            title: 'Crappy Dogecoin',
                            price: '$26,220',
                            path: ''
                        },
                        {
                            id: 4,
                            title: 'Crypto Krills',
                            price: '$11,356',
                            path: ''
                        },
                        {
                            id: 5,
                            title: 'Chibi Doge',
                            price: '$4,234',
                            path: ''
                        }
                    ]
                },
                sellBuyData: [
                    {
                        id: 1,
                        title: 'Buy NFT Products',
                        content: 'Purchase digital NFT products from the biggest directory.',
                        btnText: 'Get Started',
                        btnLink: '/register'
                    },
                    {
                        id: 2,
                        title: 'Sell Your NFT Products',
                        content: 'Sell one of your NFT products to make a huge profit.',
                        btnText: 'Start Selling',
                        btnLink: '/create'
                    },
                ],
            }
        }
    },
    setup() {

        return {
            pagination: {
                clickable: true,
                renderBullet: function (index, className) {
                    return '<span class="' + className + ' text-transparent">' + (index + 1) + '</span>';
                },
            },
            modules: [Pagination]
        }
    }
}
</script>
<style>
.swiper-horizontal {
    padding-bottom: 73px;
}
</style>
