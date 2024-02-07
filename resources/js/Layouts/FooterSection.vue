<template>
    <div class="container">
        <div class="section-space-sm">
            <div class="row">
                <div class="col-lg-3 col-md-9 me-auto">
                    <div class="footer-item mb-5 mb-lg-0">
                        <!-- logo link -->
                        <LogoLink class="footer-logo-link"></LogoLink>
                        <p class="my-4 footer-para" v-if="SectionData.footerData.content">{{ SectionData.footerData.content
                        }}</p>
                        <ul class="styled-icon">
                            <li><a href="#"><em class="icon ni ni-twitter"></em></a></li>
                            <li><a href="#"><em class="icon ni ni-facebook-f"></em></a></li>
                            <li><a href="#"><em class="icon ni ni-instagram"></em></a></li>
                            <li><a href="#"><em class="icon ni ni-pinterest"></em></a></li>
                        </ul>
                    </div><!-- end footer-item -->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-8">
                    <div class="row g-gs">
                        <div class="col-lg-4 col-md-4 col-sm-4" v-for="item in SectionData.footerData.footerList"
                            :key="item.id">
                            <div class="footer-item">
                                <h5 class="mb-4">{{ item.title }}</h5>
                                <ul class="list-item list-item-s1">
                                    <li v-for="(list, i) in item.navList" :key="i"><router-link :to="list.path">{{
                                        list.title }}</router-link></li>
                                </ul>
                            </div><!-- end footer-item -->
                        </div><!-- end col -->
                    </div>
                </div>
            </div><!-- end row -->
        </div>
        <hr class="bg-white-slim my-0">
        <div class="copyright-wrap d-flex flex-wrap py-3 align-items-center justify-content-between">
            <p class="footer-copy-text py-2" v-html="SectionData.copyTitle"></p>
            <ul class="list-item list-item-s1 list-item-inline">
                <li v-for="(list, i) in SectionData.footerData.footerListTwo" :key="i"><router-link :to="list.path">{{
                    list.title }}</router-link></li>
            </ul>
        </div><!-- end d-flex -->
    </div><!-- .container -->
</template>
<script>
import { ref } from 'vue';
// Import component data. You can change the data in the store to reflect in all component
import LogoLink from './LogoLink.vue';

export default {
    name: 'FooterSection',
    setup() {

        const SectionData = ref({
            // footer data
            footerData: {
                content: "The world's first and largest digital marketplace for crypto collectibles and non-fungible tokens (NFTs).",
                footerList: [
                    {
                        id: 1,
                        title: 'Marketplace',
                        navList: [
                            {
                                title: 'All NFTs',
                                path: '/explore'
                            },
                            {
                                title: 'Art',
                                path: '/explore'
                            },
                            {
                                title: 'Music',
                                path: '/explore'
                            },
                            {
                                title: 'Domain Names',
                                path: '/explore'
                            },
                            {
                                title: 'Virtual World',
                                path: '/explore'
                            }
                        ]
                    },
                    {
                        id: 2,
                        title: 'My Account',
                        navList: [
                            {
                                title: 'Profile',
                                path: 'profile'
                            },
                            {
                                title: 'My Offers',
                                path: 'offers'
                            },
                            {
                                title: 'Activity',
                                path: 'activity'
                            },
                            {
                                title: 'Sales & Purchase',
                                path: 'purchases-sales'
                            },
                            {
                                title: 'Payment Methods',
                                path: 'payment-methods'
                            }
                        ]
                    },
                    {
                        id: 3,
                        title: 'Company',
                        navList: [
                            {
                                title: 'About',
                                path: 'about-us'
                            },
                            {
                                title: 'Blog',
                                path: 'blog'
                            },
                            {
                                title: 'Contact',
                                path: 'contact'
                            },
                            {
                                title: 'Careers',
                                path: 'about-us'
                            }
                        ]
                    }
                ],
                footerListTwo: [
                    {
                        title: 'Explore',
                        path: '/explore'
                    },
                    {
                        title: 'Activity',
                        path: 'activity'
                    },
                    {
                        title: 'Login',
                        path: 'login'
                    },
                    {
                        title: 'Wallet',
                        path: 'wallet'
                    }
                ]
            },
            copyTitle: 'Copyright © 2024 Peace Makers.  <a href="https://www.facebook.com/PeaceMakers.Sv" target="_blank">UnicSocialMedia</a>'

        })
        return {
            SectionData
        };
    },
    components: { LogoLink }
}
</script>
