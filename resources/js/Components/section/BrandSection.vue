<template>
  <section class="brand-section section-space " :class="isBg">
    <div class="container">
      <!-- section heading -->
      <SectionHeading classname="text-center" :text="SectionData.brandData.title" :content="SectionData.brandData.content"
        isMargin="mb-3"></SectionHeading>
      <div class="row g-gs">
        <div class="col-6 col-md-3 col-sm-4" v-for="item in SectionData.brandData.brandList" :key="item.id">
          <div class="client-logo-item text-center">
            <img :src="item.img" alt="" class="img-fluid">
          </div>
        </div><!-- end col -->
      </div><!-- end row -->
    </div><!-- end container -->
  </section><!-- end brand-section -->
</template>

<script>
// Import component data. You can change the data in the store to reflect in all component
import SectionHeading from '@/Components/common/SectionHeading.vue';

export default {
  name: 'BrandSection',
  props: ['isBg'],
  components: {
    SectionHeading
  },
  data() {
    return {
      SectionData: {
        // brandData
        brandData: {
          title: 'Backed by top firms & industry leaders',
          content: 'Who are helping us pave the way towards a brand new digital economy',
          brandList: [
            {
              id: 1,
              itemToShow: 'show'
            },
            {
              id: 2,
              itemToShow: 'show'
            },
            {
              id: 3,
              itemToShow: 'show'
            },
            {
              id: 4,
              itemToShow: 'show'
            },
            {
              id: 5,
            },
            {
              id: 6,
            },
            {
              id: 7,
            },
            {
              id: 8,
            },
            {
              id: 9,
            },
            {
              id: 10,
            },
            {
              id: 11,
            },
            {
              id: 12,
            }
          ]
        },
      }
    }
  }
}
</script>
