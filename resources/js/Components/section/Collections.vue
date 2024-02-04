<template>
  <section class="collection-section section-space">
    <div class="container">
      <div class="section-head-sm" :class="classname">
        <h2>{{ SectionData.collectionData.title }}</h2>
      </div>
      <!-- collection slider -->
      <CollectionSlider></CollectionSlider>
    </div><!-- .container -->
  </section><!-- end collection-section -->
</template>

<script>
// Import component data. You can change the data in the store to reflect in all component
import CollectionSlider from '@/Components/common/CollectionSlider.vue';

export default {
  name: 'Collections',
  props: ['classname'],
  components: {
    CollectionSlider
  },
  data() {
    return {
      SectionData: {
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
}
</script>
