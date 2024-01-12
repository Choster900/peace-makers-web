<template>
    <div class="hero-wrap hero-wrap-2 section-space">
        <div class="container">
            <div class="row align-items-center flex-md-row-reverse justify-content-between">
                <div class="col-lg-5 col-sm-9 col-md-6">
                    <div class="hero-image">
                        <img src="../../images/thumb/nft-img.png" alt="" class="w-100">
                    </div>
                </div><!-- end col-lg-5 -->
                <div class="col-lg-6 col-md-6">
                    <div class="hero-content pb-0 pt-md-0 pe-lg-4">
                        <h1 class="hero-title mb-4">{{ SectionData.heroDataTwo.title }}</h1>
                        <p class="hero-text mb-4 pb-1">{{ SectionData.heroDataTwo.content }}</p>
                        <!-- button group -->
                        <button-group :btns="SectionData.btnDataThree" classname="hero-btns"></button-group>
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
