<template>
  <section class="team-section section-space">
    <div class="container">
      <!-- section heading -->
      <SectionHeading classname="text-center" :text="SectionData.teamData.title" :content="SectionData.teamData.content"
        isMargin="mb-3"></SectionHeading>
      <div class="row g-gs">
        <div class="col-6 col-md-6 col-lg-4" v-for="item in SectionData.teamData.teamList" :key="item.id">
          <div class="team-item text-center">
            <img :src="item.img" alt="" class="team-item-img mb-4">
            <h4 class="mb-1 text-truncate">{{ item.title }}</h4>
            <p class="fs-13 text-truncate">{{ item.meta }}</p>
          </div>
        </div><!-- end col -->
      </div><!-- end row -->
    </div><!-- end container -->
  </section><!-- end team-section -->
</template>

<script>
// Import component data. You can change the data in the store to reflect in all component
import SectionHeading from '@/Components/common/SectionHeading.vue';

export default {
  name: 'TeamSection',
  data() {
    return {
      SectionData: {
        //teamData
        teamData: {
          title: 'With some of the most forward-thinking angels',
          content: 'Who are just as passionate about this space as we are',
          teamList: [
            {
              id: 1,
              title: 'Jessica brown',
              meta: 'Co-founder of Scalar'
            },
            {
              id: 2,
              title: 'Tim Ferris',
              meta: 'Entrepreneur'
            },
            {
              id: 3,
              title: 'Belinda Johnson',
              meta: 'Attorney of Airbnb'
            },
            {
              id: 4,
              title: 'Justin Kan',
              meta: 'Co-founder of Twitch'
            },
            {
              id: 5,
              title: 'Alexis Ohanian',
              meta: 'Co-founder of Reddit'
            },
            {
              id: 6,
              title: 'Balaji Srinivisan',
              meta: 'Entrepreneur'
            }
          ]
        },
      }
    }
  }
}
</script>
