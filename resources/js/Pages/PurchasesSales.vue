<template>
  <div class="page-wrap">
    <!-- header  -->
    <header class="header-section has-header-main bg-pattern-3">
      <!-- Header main -->
      <HeaderDashboard></HeaderDashboard>
      <!-- hero -->
      <AuthorHero avatarSize="avatar-3" :coverimg="SectionData.authorPersonalData.coverImg"
        :img="SectionData.authorPersonalData.img" :title="SectionData.authorPersonalData.title"
        :username="SectionData.authorPersonalData.userName" :btntext="SectionData.authorPersonalData.btnText"
        :btnlink="SectionData.authorPersonalData.btnLink"></AuthorHero>
    </header>
    <!-- offer section -->
    <section class="user-panel-section section-space">
      <div class="container">
        <div class="row">
          <!-- user sidebar -->
          <UserSidebar :title="SectionData.salePurchaseSidebarData.title"
            :lists="SectionData.salePurchaseSidebarData.navList" :navs="SectionData.purchaseAndSaleTabNavMobile">
          </UserSidebar>
          <!-- offer -->
          <PurchasesSaleSection></PurchasesSaleSection>
        </div><!-- end row -->
      </div><!-- end container -->
    </section><!-- end user-panel-section -->
    <!-- Footer  -->
    <Footer classname="bg-dark on-dark"></Footer>
  </div><!-- end page-wrap -->
</template>

<script>
// Import component data. You can change the data in the store to reflect in all component

import HeaderDashboard from '@/Components/common/HeaderDashboard.vue';
import AuthorHero from '@/Components/section/AuthorHero.vue';
import UserSidebar from '@/Components/common/UserSidebar.vue';
import PurchasesSaleSection from '@/Components/section/PurchasesSaleSection.vue';
import Footer from '@/Layouts/Footer.vue';

export default {
  name: 'PurchasesSales',
  components: {
    HeaderDashboard,
    AuthorHero,
    UserSidebar,
    PurchasesSaleSection,
    Footer
  },
  data() {
    return {
      SectionData: {
        // author personal data
        authorPersonalData: {
          title: 'Kamran Ahmed',
          userName: '@kamran_76',
          btnText: 'Edit Profile',
          btnLink: 'account',
          btnTextTwo: 'Profile',
          btnLinkTwo: 'profile',
        },

        salePurchaseSidebarData: {
          title: 'Sales / Purchase',
          navList: [
            {
              id: 1,
              icon: 'ni-gift',
              title: 'My Offers',
              path: 'offers'
            },
            {
              id: 2,
              icon: 'ni-file-text',
              title: 'Activity',
              path: 'activity-v2'
            },
            {
              id: 3,
              class: 'active',
              icon: 'ni-money',
              title: 'Sales / Purchase',
              path: 'purchases-sales'
            },
            {
              id: 4,
              icon: 'ni-exchange',
              title: 'Transactions',
              path: 'transactions'
            },
            {
              id: 5,
              icon: 'ni-camera',
              title: 'Display',
              path: 'display'
            },
            {
              id: 6,
              icon: 'ni-puzzle',
              title: 'Redeem',
              path: 'redeem'
            },
            {
              id: 7,
              icon: 'ni-download-cloud',
              title: 'Deposit Enfties',
              path: 'deposit-enfties'
            }
          ]
        },
      }
    }
  }
}
</script>
