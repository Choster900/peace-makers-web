<template>
  <div class="page-wrap">
    <!-- header  -->
    <header class="header-section has-header-main bg-pattern-3">
      <!-- Header main -->
      <HeaderDashboard></HeaderDashboard>
      <!-- hero -->
      <AuthorHero avatarSize="avatar-3" :coverimg="SectionData.authorPersonalData.coverImg"
        :img="SectionData.authorPersonalData.img" :title="SectionData.authorPersonalData.title"
        :username="SectionData.authorPersonalData.userName" :btntext="SectionData.authorPersonalData.btnTextTwo"
        :btnlink="SectionData.authorPersonalData.btnLinkTwo"></AuthorHero>
    </header>
    <!-- account section -->
    <section class="user-panel-section section-space">
      <div class="container">
        <div class="row">
          <!-- user sidebar -->
          <UserSidebar :title="SectionData.paymentMethodSidebarData.title"
            :lists="SectionData.paymentMethodSidebarData.navList"
            :navs="SectionData.paymentMethodData.paymentMethodTabNavMobile"></UserSidebar>
          <PaymentMethodSection></PaymentMethodSection>
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
import PaymentMethodSection from '@/Components/section/PaymentMethodSection.vue';
import Footer from '@/Layouts/Footer.vue';

export default {
  name: 'PaymentMethods',
  components: {
    HeaderDashboard,
    AuthorHero,
    UserSidebar,
    PaymentMethodSection,
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
        // payment method sidebar
        paymentMethodSidebarData: {
          title: 'Payment Methods',
          navList: [
            {
              id: 1,
              icon: 'ni-edit',
              title: 'Edit Profile',
              path: 'account'
            },
            {
              id: 2,
              class: 'active',
              icon: 'ni-money',
              title: 'Payment Methods',
              path: 'payment-methods'
            },
            {
              id: 3,
              icon: 'ni-user',
              title: 'Seller Settings',
              path: 'seller-settings'
            },
            {
              id: 4,
              icon: 'ni-bell',
              title: 'Notifications',
              path: 'notifications'
            },
            {
              id: 5,
              icon: 'ni-lock',
              title: 'Security',
              path: 'security'
            }
          ]
        },
        // edit profile tab mobile
        paymentMethodTabNavMobile: [
          {
            id: 1,
            isActive: 'active',
            title: 'Balances',
            slug: 'balances-tab-mobile',
            bsTarget: '#balances-mobile'
          },
          {
            id: 2,
            title: 'Credit Cards',
            slug: 'credit-cards-tab-mobile',
            bsTarget: '#credit-cards-mobile'
          },
          {
            id: 3,
            title: 'Prepaid ETH',
            slug: 'prepaid-eth-tab-mobile',
            bsTarget: '#prepaid-eth-mobile'
          }
        ],
        // payment method data
        paymentMethodData: {
          title: 'Payment Methods',
          paymentMethodTabNav: [
            {
              id: 1,
              isActive: 'active',
              title: 'Balances',
              slug: 'balances-tab',
              bsTarget: '#balances'
            },
            {
              id: 2,
              title: 'Credit Cards',
              slug: 'credit-cards-tab',
              bsTarget: '#credit-cards'
            },
            {
              id: 3,
              title: 'Prepaid ETH',
              slug: 'prepaid-eth-tab',
              bsTarget: '#prepaid-eth'
            }
          ],
          // edit profile tab mobile
          paymentMethodTabNavMobile: [
            {
              id: 1,
              isActive: 'active',
              title: 'Balances',
              slug: 'balances-tab-mobile',
              bsTarget: '#balances-mobile'
            },
            {
              id: 2,
              title: 'Credit Cards',
              slug: 'credit-cards-tab-mobile',
              bsTarget: '#credit-cards-mobile'
            },
            {
              id: 3,
              title: 'Prepaid ETH',
              slug: 'prepaid-eth-tab-mobile',
              bsTarget: '#prepaid-eth-mobile'
            }
          ],
        },
      }
    }
  }
}
</script>
