<template>
  <section class="top-creator-section" :class="classname">
    <div class="container">
      <div class="section-head-sm" :class="isCenter">
        <h2>{{ SectionData.creatorData.title }}</h2>
      </div>
      <!-- creators -->
      <Creators></Creators>
    </div><!-- .container -->
  </section><!-- end top-creator-section -->
</template>

<script>
// Import component data. You can change the data in the store to reflect in all component
import Creators from '@/Components/common/Creators.vue';

export default {
  name: 'TopCreators',
  props: ['classname', 'isCenter'],
  components: {
    Creators
  },
  data() {
    return {
      SectionData: {
        creatorData: {
          title: 'Featured Creators',
          meta: 'Our Creators',
          content: "Explore on the world's best NFT marketplace with our beautiful NFT products creators. We want to be a part of your smile.",
          creatorList: [
            {
              id: 1,
              title: '@nathan_walls',
              subTitle: '24.13 ETH',

              path: '/author'
            },
            {
              id: 2,
              title: '@alex_smith',
              subTitle: '12.24 ETH',

              path: '/author'
            },
            {
              id: 3,
              title: '@kevin_martin',
              subTitle: '13.57 ETH',

              path: '/author'
            },
            {
              id: 4,
              title: '@david_martin',
              subTitle: '34.13 ETH',

              path: '/author'
            },
            {
              id: 5,
              title: '@jhonatan_doe',
              subTitle: '23.24 ETH',

              path: '/author'
            },
            {
              id: 6,
              title: '@mark_hardson',
              subTitle: '34.57 ETH',

              path: '/author'
            },
          ],
          creatorListTwo: [
            {
              id: 1,
              title: 'Nathan Walls',
              subTitle: '24.13 ETH',

              path: '/author'
            },
            {
              id: 2,
              title: 'Alex Smith',
              subTitle: '12.24 ETH',

              path: '/author'
            },
            {
              id: 3,
              title: 'Kevin Martin',
              subTitle: '13.57 ETH',

              path: '/author'
            },
            {
              id: 4,
              title: 'David Martin',
              subTitle: '34.13 ETH',

              path: '/author'
            },
            {
              id: 5,
              title: 'Jhonatan Doe',
              subTitle: '23.24 ETH',

              path: '/author'
            },
            {
              id: 6,
              title: 'Mark Hardson',
              subTitle: '34.57 ETH',

              path: '/author'
            },
            {
              id: 7,
              title: 'Gayle Hicks',
              subTitle: '34.57 ETH',

              path: '/author'
            },
            {
              id: 8,
              title: 'Claude Banks',
              subTitle: '34.57 ETH',

              path: '/author'
            },
            {
              id: 9,
              title: 'Stacy Long',
              subTitle: '34.57 ETH',

              path: '/author'
            },
            {
              id: 10,
              title: 'Fred Ryan',
              subTitle: '34.57 ETH',

              path: '/author'
            },
            {
              id: 11,
              title: 'Franklin Greer',
              subTitle: '34.57 ETH',

              path: '/author'
            },
            {
              id: 12,
              title: 'Karla Sharp',
              subTitle: '34.57 ETH',

              path: '/author'
            },
          ]
        },

      }

    }
  }
}
</script>
