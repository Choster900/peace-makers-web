<template>
    <div class="hero-wrap hero-wrap-2 section-space">
        <div class="container">
            <div class="row align-items-center flex-md-row-reverse justify-content-between">
                <div class="col-lg-5 col-sm-9 col-md-6">
                    <div class="hero-image">
                        <img src="../../images/thumb/bannerPs1.png" alt="" class="w-100">
                    </div>
                </div><!-- end col-lg-5 -->
                <div class="col-lg-6 col-md-6">
                    <div class="hero-content pb-0 pt-md-0 pe-lg-4">
                        <h1 class="hero-title mb-4 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h1>
                        <p class="hero-text mb-4 pb-1">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum ipsam,
                            ipsa officia, dicta deleniti </p>
                        <!-- button group -->
                        <!-- <button-group :btns="SectionData.btnDataThree" classname="hero-btns"></button-group> -->
                        <ul class="btns-group hero-btns">
                            <!-- <li >
                                <button class="btn-lg bg-[#FF9F12] text-white border-black" >
                                    Create
                                </button>

                            </li>
                            <li >
                                <button class="btn btn-lg btn-dark" >
                                    Explore
                                </button>

                            </li> -->
                            <li v-for="(btn, i) in SectionData.btnDataThree" :key="i">
                                <button class="btn" :class="btn.btnClass">
                                    {{ btn.title }}
                                    <span class="d-none d-xl-inline-block" v-if="istext">{{ btn.titleTwo }}</span>
                                </button>
                            </li>
                        </ul>
                    </div><!-- hero-content -->
                </div><!-- col-lg-6 -->
            </div><!-- end row -->
        </div><!-- .container-->
    </div><!-- end hero-wrap -->
</template>

<script>
import { ref } from 'vue'
import ButtonGroup from './common/ButtonGroup.vue'

export default {
    components: { ButtonGroup },
    name: 'HeroTwo',
    setup() {
        const SectionData = ref({
            btnDataThree: [
                {
                    btnClass: 'btn-lg btn-dark',
                    title: 'Explore',
                    path: '/explore'
                },
                {
                    btnClass: 'btn-lg btn-outline-dark',
                    title: 'Create',
                    path: '/create'
                }
            ],
            heroDataTwo: {
                title: 'Create, sell or collect digital items',
                content: 'Complete account of the system, and expound the actual teachings of the great explorer of human happiness.',
                img: '../../images/thumb/nft-img.png'
            },
        })


        return {
            SectionData,
        }
    }
}
</script>
