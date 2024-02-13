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
          <UserSidebar :title="SectionData.notificationSidebarData.title"
            :lists="SectionData.notificationSidebarData.navList"
            :navs="SectionData.notificationData.notificationTabNavMobile"></UserSidebar>
          <NotificationSection></NotificationSection>
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
import NotificationSection from '@/Components/section/NotificationSection.vue';
import Footer from '@/Layouts/Footer.vue';

export default {
    name: 'Notifications',
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
                // notification sidebar
                notificationSidebarData: {
                    title: 'Notifications',
                    navList: [
                        {
                            id: 1,
                            icon: 'ni-edit',
                            title: 'Edit Profile',
                            path: 'account'
                        },
                        {
                            id: 2,
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
                            class: 'active',
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
                // notification tab mobile
                notificationTabNavMobile: [
                    {
                        id: 1,
                        isActive: 'active',
                        title: 'Email Alerts',
                        slug: 'email-alerts-tab-mobile',
                        bsTarget: '#email-alerts-mobile'
                    },
                    {
                        id: 2,
                        title: 'Price Alerts',
                        slug: 'price-alerts-tab-mobile',
                        bsTarget: '#price-alerts-mobile'
                    }
                ],
                // notification data
                notificationData: {
                    title: 'Notifications',
                    notificationTabNav: [
                        {
                            id: 1,
                            isActive: 'active',
                            title: 'Email Alerts',
                            slug: 'email-alerts-tab',
                            bsTarget: '#email-alerts'
                        },
                        {
                            id: 2,
                            title: 'Price Alerts',
                            slug: 'price-alerts-tab',
                            bsTarget: '#price-alerts'
                        }
                    ],
                    // notification tab mobile
                    notificationTabNavMobile: [
                        {
                            id: 1,
                            isActive: 'active',
                            title: 'Email Alerts',
                            slug: 'email-alerts-tab-mobile',
                            bsTarget: '#email-alerts-mobile'
                        },
                        {
                            id: 2,
                            title: 'Price Alerts',
                            slug: 'price-alerts-tab-mobile',
                            bsTarget: '#price-alerts-mobile'
                        }
                    ],
                },
            }
        };
    },
    components: { HeaderDashboard, AuthorHero, UserSidebar, NotificationSection, Footer }
}
</script>
