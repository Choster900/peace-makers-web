<template>
  <div class="page-wrap">
    <!-- header  -->
    <header class="header-section has-header-main">
      <!-- Header main -->
      <HeaderMain></HeaderMain>
      <!-- hero -->
      <HeroFour classname="hero-title" :title="SectionData.breadcrumbData.breadcrumbListSeven.title"
        :lists="SectionData.breadcrumbData.breadcrumbListSeven.navList"></HeroFour>
    </header>
    <!-- contact section -->
    <ContactSection></ContactSection>
    <!-- Footer  -->
    <Footer classname="bg-dark on-dark"></Footer>
  </div><!-- end page-wrap -->
</template>

<script>
// Import component data. You can change the data in the store to reflect in all component
import HeroFour from '@/Components/section/HeroFour.vue'
import HeaderMain from '@/Layouts/HeaderMain.vue';
import ContactSection from '@/Components/section/ContactSection.vue'
import Footer from '@/Layouts/Footer.vue';
import { ref } from 'vue';

export default {
  name: 'Contact',
  components: {
    HeroFour,
    HeaderMain,
    ContactSection,
    Footer
  },
  setup() {
    const SectionData = ref({
      // Breadcrumb data
      breadcrumbData: {
        breadcrumbList: {
          title: 'Explore',
          navList: [
            {
              title: 'Explore'
            }
          ]
        },
        breadcrumbListTwo: {
          title: 'Activity',
          navList: [
            {
              title: 'Activity'
            }
          ]
        },
        breadcrumbListThree: {
          title: 'Ranking',
          navList: [
            {
              title: 'Ranking'
            }
          ]
        },
        breadcrumbListFour: {
          title: 'Connect Wallet',
          navList: [
            {
              title: 'Wallet'
            }
          ]
        },
        breadcrumbListFive: {
          title: 'News',
          navList: [
            {
              title: 'News'
            }
          ]
        },
        breadcrumbListSix: {
          title: "Enter Linda Dounia's Cyber Baat World",
          navList: [
            {
              title: 'Blog',
            },
            {
              title: 'Enter Linda Dounia...'
            }
          ]
        },
        breadcrumbListSeven: {
          title: 'How can we help?',
          navList: [
            {
              title: 'Contact'
            }
          ]
        }
      },
    })

    return {
      SectionData
    }
  }
}
</script>
