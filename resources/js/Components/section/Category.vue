<template>
    <section class="category-section" :class="classname">
        <div class="container">
            <!-- section heading -->
            <SectionHeading classname="text-center" :text="SectionData.categoryData.title"
                :content="SectionData.categoryData.content" isMargin="mb-3"></SectionHeading>
            <div class="row g-gs">
                <div class="col-lg-3 col-6" v-for="item in SectionData.categoryData.categoryList" :key="item.id">
                    <DropdownLink class="card card-cat text-center h-100" :class="item.class">
                        <div class="card-body card-body-s1">
                            <span :class="item.icon"></span>
                            <h5 class="card-cat-title">{{ item.title }}</h5>
                        </div>
                    </DropdownLink>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end category-section -->
</template>

<script>
// Import component data. You can change the data in the store to reflect in all component
import DropdownLink from '../DropdownLink.vue';
import SectionHeading from '../common/SectionHeading.vue';
import { ref } from 'vue';

export default {
    name: 'Category',
    props: ['classname'],
    setup() {

        const SectionData = ref({
            // Product data
            categoryData: {
                title: 'Browse by category',
                content: 'This is just a simple text made for this unique and awesome template, you can replace it with any text. It is a long established fact.',
                categoryList: [
                    {
                        id: 1,
                        class: 'text-purple',
                        icon: 'icon ni ni-camera mb-3 mx-auto icon-circle icon-wbg icon-lg',
                        title: 'Artwork',
                        path: '/explore'
                    },
                    {
                        id: 2,
                        class: 'text-blue',
                        icon: 'icon ni ni-music mb-3 mx-auto icon-circle icon-wbg icon-lg',
                        title: 'Music',
                        path: '/explore'
                    },
                    {
                        id: 3,
                        class: 'text-pink',
                        icon: 'icon ni ni-search mb-3 mx-auto icon-circle icon-wbg icon-lg',
                        title: 'Domain Names',
                        path: '/explore'
                    },
                    {
                        id: 4,
                        class: 'text-orange',
                        icon: 'icon ni ni-globe mb-3 mx-auto icon-circle icon-wbg icon-lg',
                        title: 'Virtual Worlds',
                        path: '/explore'
                    },
                    {
                        id: 5,
                        class: 'text-yellow',
                        icon: 'icon ni ni-user mb-3 mx-auto icon-circle icon-wbg icon-lg',
                        title: 'Trending Cards',
                        path: '/explore'
                    },
                    {
                        id: 6,
                        class: 'text-green',
                        icon: 'icon ni ni-opt-alt-fill mb-3 mx-auto icon-circle icon-wbg icon-lg',
                        title: 'Collectibles',
                        path: '/explore'
                    },
                    {
                        id: 7,
                        class: 'text-teal',
                        icon: 'icon ni ni-hot-fill mb-3 mx-auto icon-circle icon-wbg icon-lg',
                        title: 'Sports',
                        path: '/explore'
                    },
                    {
                        id: 8,
                        class: 'text-cyan',
                        icon: 'icon ni ni-setting mb-3 mx-auto icon-circle icon-wbg icon-lg',
                        title: 'Utility',
                        path: '/explore'
                    }
                ]
            },
        })


        return {
            SectionData
        };
    },
    components: { SectionHeading, DropdownLink }
}
</script>
