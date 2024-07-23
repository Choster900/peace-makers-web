<template>
    <section class="section-space-b feature-section">
        <div class="container">
            <!-- section heading -->
            <!-- <SectionHeading classname="text-center" :text="SectionData.featuredData.title"
                :content="SectionData.featuredData.content" isMargin="mb-3" /> -->

            <div class="row g-gs">
                <div class="col-sm-6 col-md-6 col-lg-3" v-for="item in arrayRamdonBlogs"
                    :key="item.id_blog">
                    <DropdownLink :href="'post-detail/'+item.id_blog" class="card card-full">
                        <img :src="item.foto_principal_blog" class="card-img-top" alt="featured miage">
                        <div class="card-body p-4">
                            <h5 class="card-title">{{ item.titulo_blog }}</h5>
                            <p class="small"><!-- {{ item.descripcion_blog }} -->

                                {{ $options.filters.truncate(item.descripcion_blog, 50,'...') }}
                            </p>
                        </div><!-- end card-body -->
                    </DropdownLink><!-- end card -->
                </div><!-- end col -->
            </div>
        </div><!-- .container -->
    </section><!-- end featured-creator-section -->
</template>
<script>
// Import component data. You can change the data in the store to reflect in all component
import { ref, onActivated, onMounted } from 'vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import { truncateString } from '@/mixins/truncateString'
/* import SectionHeading from '@/Components/Common/SectionHeading.vue';
 */export default {
    mixins: [truncateString],
    components: { DropdownLink, /* SectionHeading */ },
    name: 'Featured',
    setup() {
        const arrayRamdonBlogs = ref([])

        const getRamdonBlog = () => {
            axios.get('/get-ramdon-blogs-for-home', )
                .then((response) => {

                    console.log(response.data);

                    arrayRamdonBlogs.value = response.data
                })
                .catch((error) => {

                    console.error(error);
                });
        }

        onMounted( async () => {
            getRamdonBlog()
        })

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
            arrayRamdonBlogs,
            SectionData,
        }
    }
}
</script>
