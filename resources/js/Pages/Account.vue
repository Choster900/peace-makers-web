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
          <UserSidebar :title="SectionData.accountSidebarData.title" :lists="SectionData.accountSidebarData.navList"
            :navs="SectionData.editProfileData.editProfileTabNavMobile"></UserSidebar>
          <AccountSection></AccountSection>
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
import AccountSection from '@/Components/section/AccountSection.vue';
import Footer from '@/Layouts/Footer.vue';

export default {
  name: 'Account',
  components: {
    HeaderDashboard,
    AuthorHero,
    UserSidebar,
    AccountSection,
    Footer
  },
  data() {
    return {
      SectionData: {
        // author data
        authorPublicData: {
          title: 'French Montana',
          userName: '@frenchmontana',
          btnText: 'Follow',
          btnLink: ''
        },
        // author personal data
        authorPersonalData: {
          title: 'Kamran Ahmed',
          userName: '@kamran_76',
          btnText: 'Edit Profile',
          btnLink: 'account',
          btnTextTwo: 'Profile',
          btnLinkTwo: 'profile',
        },
        // edit profile data
        editProfileData: {
          title: 'Account Settings',
          editProfileTabNav: [
            {
              id: 1,
              isActive: 'active',
              title: 'Edit Info',
              slug: 'account-information-tab',
              bsTarget: '#account-information'
            },
            {
              id: 2,
              title: 'Password',
              slug: 'change-password-tab',
              bsTarget: '#change-password'
            },
            {
              id: 3,
              title: 'Verify Profile',
              slug: 'validate-profile-tab',
              bsTarget: '#validate-profile'
            }
          ],
          // edit profile tab mobile
          editProfileTabNavMobile: [
            {
              id: 1,
              isActive: 'active',
              title: 'Account Information',
              slug: 'account-information-tab-mobile',
              bsTarget: '#account-information-mobile'
            },
            {
              id: 2,
              title: 'Change Password',
              slug: 'change-password-tab-mobile',
              bsTarget: '#change-password-mobile'
            },
            {
              id: 3,
              title: 'Validate Profile',
              slug: 'validate-profile-tab-mobile',
              bsTarget: '#validate-profile-mobile'
            }
          ],
        },
        // account sidebar
        accountSidebarData: {
          title: 'Account Settings',
          navList: [
            {
              id: 1,
              class: 'active',
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
      }
    }
  }
}
</script>
