<template>
    <section class="section-space-b feature-section">
        <div class="container">
            <!-- section heading -->
            <SectionHeading classname="text-center" :text="SectionData.featuredData.title"
                :content="SectionData.featuredData.content" isMargin="mb-3"></SectionHeading>

            <div class="row g-gs">
                <div class="col-sm-6 col-md-6 col-lg-3" v-for="item in SectionData.featuredData.featuredList"
                    :key="item.id">
                    <DropdownLink :to="item.path" class="card card-full">
                        <img src="../../../images/thumb/art.jpg" class="card-img-top" alt="featured miage">
                        <div class="card-body p-4">
                            <h5 class="card-title">{{ item.title }}</h5>
                            <p class="small">{{ item.content }}</p>
                        </div><!-- end card-body -->
                    </DropdownLink><!-- end card -->
                </div><!-- end col -->
            </div>
        </div><!-- .container -->
    </section><!-- end featured-creator-section -->
</template>
<script>
import { ref } from 'vue'
import DropdownLink from '@/Components/DropdownLink.vue';
import SectionHeading from '../Common/SectionHeading.vue';
export default {
    components: { DropdownLink, SectionHeading, SectionHeading },
    name: 'Featured',
    setup() {
        const SectionData = ref({
            // Freatured data
            featuredData: {
                title: 'lorem ipsum dolor sit amet, consectetur.',
                content: 'Lorem ipsum dolor sit amet, consectetur in el metus et just Lorem inim ',
                featuredList: [
                    {
                        id: 1,
                        title: 'Seasons by AlexSmith',
                        content: "AlexSmith's Summer Collection featuring Time",
                        path: '/item-details'
                    },
                    {
                        id: 2,
                        title: 'Kavin Martin EnftyMart.io',
                        content: 'After a sold-out Art Blocks drop, Martin is back with',
                        path: '/item-details'
                    },
                    {
                        id: 3,
                        title: 'Kavin Martin EnftyMart.io',
                        content: 'After a sold-out Art Blocks drop, Martin is back with',
                        path: '/item-details'
                    },
                    {
                        id: 4,
                        title: 'Tyronejkd Universe',
                        content: 'After a sold-out Art Blocks drop, Martin is back with',
                        path: '/item-details'
                    }
                ]
            },
        })

        return {
            SectionData,
        }
    }
}
</script>
