<template>
  <!--   <pre>
    {{ SectionData }}
  </pre> -->
  <ul class="menu-list ms-lg-auto">
    <li class="menu-item has-sub">
      <a href="#" class="menu-link menu-toggle">{{ SectionData.headerData.menuList.title }}</a>
      <div class="menu-sub">
        <ul class="menu-list">
          <li class="menu-item" v-for="nav in SectionData.headerData.menuList.navList" :key="nav.id">
            <router-link :to="nav.path" class="menu-link">{{ nav.title }}
              <span :class="nav.badgeClass" v-if="nav.badge">{{ nav.badge }}</span>
            </router-link>
          </li>
        </ul>
      </div>
    </li>
    <li class="menu-item has-sub">
      <a href="#" class="menu-link menu-toggle">{{ SectionData.headerData.menuList2.title }}</a>
      <div class="menu-sub">
        <ul class="menu-list">
          <li class="menu-item" v-for="nav in SectionData.headerData.menuList2.navList" :key="nav.id"><router-link
              :to="nav.path" class="menu-link">{{ nav.title }} <span :class="nav.badgeClass" v-if="nav.badge">{{ nav.badge
              }}</span></router-link></li>
        </ul>
      </div>
    </li>
    <li class="menu-item has-sub">
      <a href="#" class="menu-link menu-toggle">{{ SectionData.headerData.menuList3.title }}</a>
      <div class="menu-sub">
        <ul class="menu-list">
          <li class="menu-item" v-for="nav in SectionData.headerData.menuList3.navList" :key="nav.id"><router-link
              :to="nav.path" class="menu-link">{{ nav.title }}</router-link></li>
        </ul>
      </div>
    </li>
    <li class="menu-item has-sub">
      <a href="#" class="menu-link menu-toggle">{{ SectionData.headerData.menuList4.title }}</a>
      <div class="menu-sub menu-mega">
        <div class="menu-mega-row">
          <ul class="menu-list menu-list-mega">
            <li class="menu-item" v-for="nav in SectionData.headerData.menuList4.navList" :key="nav.id"><router-link
                :to="nav.path" class="menu-link">{{ nav.title }} <span :class="nav.badgeClass" v-if="nav.badge">{{
                  nav.badge }}</span></router-link></li>
          </ul>
          <ul class="menu-list menu-list-mega">
            <li class="menu-item" v-for="nav in SectionData.headerData.menuList4.navListTwo" :key="nav.id"><router-link
                :to="nav.path" class="menu-link">{{ nav.title }}</router-link></li>
          </ul>
        </div>
      </div>
    </li>
  </ul>
</template>

<script>
// Import component data. You can change the data in the store to reflect in all component

export default {
  name: 'MenuList',
  data() {
    return {
      SectionData: {
        // Header data
        headerData: {
          btnText: 'Connect Wallet',
          inputPlaceholderText: 'Search item here...',
          menuList: {
            title: 'Home',
            navList: [
              {
                id: 1,
                title: 'Home Page 1',
                path: '/'
              },
              {
                id: 2,
                title: 'Home Page 2',
                path: '/home-v2'
              },
              {
                id: 3,
                title: 'Home Page 3',
                path: '/home-v3'
              },
              {
                id: 4,
                title: 'Home Page 4',
                badge: 'New',
                badgeClass: 'badge text-primary bg-primary-50',
                path: '/home-v4'
              },
              {
                id: 5,
                title: 'Home Page 5',
                badge: 'New',
                badgeClass: 'badge text-primary bg-primary-50',
                path: '/home-v5'
              },
              {
                id: 6,
                title: 'Home Page 6',
                badge: 'New',
                badgeClass: 'badge text-primary bg-primary-50',
                path: '/home-v6'
              },
              {
                id: 7,
                title: 'Home Page 7',
                badge: 'New',
                badgeClass: 'badge text-primary bg-primary-50',
                path: '/home-v7'
              },
            ]
          },
          menuList2: {
            title: 'Explore',
            navList: [
              {
                id: 1,
                title: 'Explore',
                path: '/explore'
              },
              {
                id: 2,
                title: 'Explore v2',
                path: '/explore-v2',
                badge: 'New',
                badgeClass: 'badge text-primary bg-primary-50',
              },
              {
                id: 3,
                title: 'Explore v3',
                path: '/explore-v3',
                badge: 'New',
                badgeClass: 'badge text-primary bg-primary-50',
              },
              {
                id: 4,
                title: 'Explore v4',
                path: '/explore-v4',
                badge: 'New',
                badgeClass: 'badge text-primary bg-primary-50',
              },
              {
                id: 5,
                title: 'Explore v5',
                path: '/explore-v5',
                badge: 'New',
                badgeClass: 'badge text-primary bg-primary-50',
              },
              {
                id: 5,
                title: 'Explore v6',
                path: '/explore-v6',
                badge: 'New',
                badgeClass: 'badge text-primary bg-primary-50',
              },
              {
                id: 6,
                title: 'Item Details',
                path: '/product-details-v1-1'
              },
              {
                id: 7,
                title: 'Item Details v2',
                path: '/product-details-v2-1'
              },
              {
                id: 8,
                title: 'Item Details v3',
                path: '/product-details-v3-1',
                badge: 'New',
                badgeClass: 'badge text-primary bg-primary-50',
              }
            ]
          },
          menuList3: {
            title: 'Pages',
            navList: [
              {
                id: 1,
                title: 'Author Public',
                path: '/author'
              },
              {
                id: 2,
                title: 'About Us',
                path: '/about-us'
              },
              {
                id: 3,
                title: 'Activity',
                path: '/activity'
              },
              {
                id: 4,
                title: 'Ranking',
                path: '/ranking'
              },
              {
                id: 5,
                title: 'Wallet',
                path: '/wallet'
              },
              {
                id: 6,
                title: 'Wallet v2',
                path: '/wallet-v2'
              },
              {
                id: 7,
                title: 'News',
                path: '/blog'
              },
              {
                id: 8,
                title: 'News Details',
                path: '/blog-detail-1'
              },
              {
                id: 9,
                title: 'Login',
                path: '/login'
              },
              {
                id: 10,
                title: 'Login v2',
                path: '/login-v2'
              },
              {
                id: 11,
                title: 'Register',
                path: '/register'
              },
              {
                id: 12,
                title: 'Contact',
                path: '/contact'
              }
            ]
          },
          menuList4: {
            title: 'User Panel',
            navList: [
              {
                id: 1,
                title: 'Dashboard',
                path: '/offers',
                badge: 'Hot',
                badgeClass: 'badge bg-primary',
              },
              {
                id: 2,
                title: 'Activity',
                path: '/activity-v2'
              },
              {
                id: 3,
                title: 'Sales and Purchase',
                path: '/purchases-sales'
              },
              {
                id: 4,
                title: 'Transactions',
                path: '/transactions'
              },
              {
                id: 5,
                title: 'Display Enfties',
                path: '/display'
              },
              {
                id: 6,
                title: 'Redeem Enfties',
                path: '/redeem'
              },
              {
                id: 7,
                title: 'Deposit Enfties',
                path: '/deposit-enfties'
              },
              {
                id: 8,
                title: 'Author Personal',
                path: '/profile'
              }
            ],
            navListTwo: [
              {
                id: 1,
                title: 'Account Settings',
                path: '/account'
              },
              {
                id: 2,
                title: 'Payment Methods',
                path: '/payment-methods'
              },
              {
                id: 3,
                title: 'Seller Settings',
                path: '/seller-settings'
              },
              {
                id: 4,
                title: 'Notifications',
                path: '/notifications'
              },
              {
                id: 5,
                title: 'Security',
                path: '/security'
              },
              {
                id: 6,
                title: 'Create',
                path: '/create'
              },
              {
                id: 7,
                title: 'Create Single',
                path: '/create-single'
              },
              {
                id: 8,
                title: 'Create Multiple',
                path: '/create-multiple'
              }
            ]
          }

        },
      }
    }
  }
}
</script>
