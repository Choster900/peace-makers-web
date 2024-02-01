<template>
    <section class="related-product-section section-space-b">
        <div class="container">
            <!-- section heading -->
            <SectionHeading classname="text-center" :text="SectionData.relatedProductData.title"></SectionHeading>
            <!-- product -->
            <swiper :slides-per-view="4" :breakpoints="{
                0: {
                    slidesPerView: 1
                },
                767: {
                    slidesPerView: 2
                },
                992: {
                    slidesPerView: 3
                },
                1200: {
                    slidesPerView: 4
                }
            }" :pagination="{ clickable: true }">
                <swiper-slide v-for="item in SectionData.productData.products" :key="item.id">
                    <div class="card card-full">
                        <div class="card-image">
                            <img :src="item.img" class="card-img-top" alt="art image">
                        </div>
                        <div class="card-body p-4">
                            <h5 class="card-title text-truncate mb-0">{{ item.title }}</h5>
                            <div class="card-author mb-1 d-flex align-items-center">
                                <span class="me-1 card-author-by">By</span>
                                <div class="custom-tooltip-wrap">
                                    <router-link :to="item.authorLink" class="author-link">{{ item.author }}</router-link>
                                </div>
                            </div><!-- end card-author -->
                            <div class="card-price-wrap d-flex align-items-center justify-content-between mb-3">
                                <div class="me-2">
                                    <span class="card-price-title">Price</span>
                                    <span class="card-price-number">&dollar;{{ item.price }}</span>
                                </div>
                                <div>
                                    <span class="card-price-title">Current bid</span>
                                    <span class="card-price-number">{{ item.priceTwo }} ETH</span>
                                </div>
                            </div><!-- end card-price-wrap -->
                            <span class="btn btn-sm btn-dark">Place bid</span>
                        </div><!-- end card-body -->
                        <router-link class="details" :to="{
                            name: 'ProductDetail',
                            params: {
                                id: item.id,
                                title: item.title,
                                metaText: item.metaText,
                                price: item.price,
                                priceTwo: item.priceTwo,
                                imgLg: item.imgLg,
                                metaText: item.metaText,
                                metaTextTwo: item.metaTextTwo,
                                metaTextThree: item.metaTextThree,
                                content: item.content,
                            }
                        }">
                        </router-link>
                    </div><!-- end card -->
                </swiper-slide>
            </swiper>
        </div><!-- .container -->
    </section><!-- end related-product-section -->
</template>

<script>
// Import component data. You can change the data in the store to reflect in all component

// core version + navigation, pagination modules:
import SwiperCore, { Pagination } from 'swiper';

// configure Swiper to use modules
SwiperCore.use([Pagination]);

// Import Swiper Vue.js components
import { Swiper, SwiperSlide } from 'swiper/vue';

export default {
    name: 'RelatedProduct',
    components: {
        Swiper,
        SwiperSlide,
    },
    data() {
        return {
            SectionData: {
                // Related Product data
                relatedProductData: {
                    title: 'Popular Art Assets',
                },
                // Product data
                productData: {
                    title: 'Trending Auctions',
                    content: 'This is just a simple text made for this unique and awesome template, you can replace it with any text. It is a long established fact.',
                    contentTwo: "Explore on the world's best NFT marketplace with our beautiful NFT products. We want to be a part of your smile.",
                    btnText: 'View all auctions',
                    btnLink: '/explore',
                    btnLinkTwo: '/explore-v3',
                    btnLinkThree: '/explore-v4',
                    btnLinkFour: '/explore-v5',
                    btnLinkFive: '/explore-v6',
                    btnTextTwo: 'Load More',
                    meta: 'NTFs Products',
                    products: [
                        {
                            id: 1,
                            title: 'One Tribe Black Edition',
                            content: 'Digital-only* "CB Galaxy" style Coke Boys LA sneakers wearable in the Decentraland metaverse',
                            author: 'ZeniconStudio',
                            authorLink: '/author',
                            price: 14,
                            priceTwo: 1.32,
                            metaText: 'Not for sale',
                            metaTextTwo: '500 editions',
                            metaTextThree: 'Highest bid <span class="text-primary fw-semibold">0.072 ETH</span>',
                            userName: '@zenicon_studio',
                            followersText: '1.3k Followers',
                            authorName: 'Zenicon Studio',
                            desc: 'Complete account of the system, and expound the actual things.',
                            name: 'art',
                            category: 'art',
                            itemToShow: 'show',
                            itemToShowTwo: 'show',
                            avatars: [
                                {
                                    id: 1,

                                    path: '/author'
                                },
                                {
                                    id: 2,
                                    path: '/author'
                                },
                                {
                                    id: 3,
                                    path: '/author'
                                },
                                {
                                    id: 4,
                                    path: '/author'
                                },
                                {
                                    id: 5,
                                    path: '/author'
                                },
                            ],
                        },
                        {
                            id: 2,
                            title: 'Operation Jade Fury',
                            content: 'Bazzors is a tiny buzzing, electrifying and irascible Elfin. Bazzors appear intermittently during thunderstorms in the Elfin Kingdom ',
                            author: 'CanvaNetwork',
                            authorLink: '/author',
                            price: 10,
                            priceTwo: 0.32,
                            metaText: 'Not for sale',
                            metaTextTwo: '200 editions',
                            metaTextThree: 'Highest bid <span class="text-primary fw-semibold">1.072 ETH</span>',
                            userName: '@canva_network',
                            followersText: '1.3k Followers',
                            authorName: 'Canva Network',
                            desc: 'Complete account of the system, and expound the actual things.',
                            name: 'music',
                            category: 'music',
                            itemToShow: 'show',
                            itemToShowTwo: 'show',
                            avatars: [
                                {
                                    id: 1,
                                    path: '/author'
                                },
                                {
                                    id: 2,
                                    path: '/author'
                                },
                                {
                                    id: 3,
                                    path: '/author'
                                },
                                {
                                    id: 4,
                                    path: '/author'
                                },
                                {
                                    id: 5,
                                    path: '/author'
                                },
                            ],
                        },
                        {
                            id: 3,
                            title: 'Unboxing The Compass',
                            content: 'According to our idea, REAL BORED APE would look exactly like this. Have you ever seen this tough guy on the streets of your city?',
                            author: 'MoveNetwork',
                            authorLink: '/author',
                            price: 8.00,
                            priceTwo: 0.32,
                            metaText: 'Not for sale',
                            metaTextTwo: '200 editions',
                            metaTextThree: 'Highest bid <span class="text-primary fw-semibold">1.072 ETH</span>',
                            userName: '@move_network',
                            followersText: '1.3k Followers',
                            authorName: 'Move Network',
                            desc: 'Complete account of the system, and expound the actual things.',
                            name: 'music',
                            category: 'music',
                            itemToShow: 'show',
                            avatars: [
                                {
                                    id: 1,
                                    path: '/author'
                                },
                                {
                                    id: 2,

                                    path: '/author'
                                },
                                {
                                    id: 3,

                                    path: '/author'
                                },
                                {
                                    id: 4,
                                    path: '/author'
                                },
                                {
                                    id: 5,
                                    path: '/author'
                                },
                            ],
                        },
                        {
                            id: 4,
                            title: 'Rendering by the Water',
                            content: 'Limited Edition *digital-only* "CB Galaxy" style Coke Boys LA sneakers wearable in the Decentraland metaverse',
                            author: 'RukiStudio',
                            authorLink: '/author',
                            price: 11.00,
                            priceTwo: 0.32,
                            metaText: 'Not for sale',
                            metaTextTwo: '300 editions',
                            metaTextThree: 'Highest bid <span class="text-primary fw-semibold">1.072 ETH</span>',
                            userName: '@ruki_studio',
                            followersText: '1.3k Followers',
                            authorName: 'Ruki Studio',
                            desc: 'Complete account of the system, and expound the actual things.',
                            name: 'music',
                            category: 'music',
                            itemToShow: 'show',
                            itemToShowSingle: 'show',
                            avatars: [
                                {
                                    id: 1,
                                    path: '/author'
                                },
                                {
                                    id: 2,
                                    path: '/author'
                                },
                                {
                                    id: 3,
                                    path: '/author'
                                },
                                {
                                    id: 4,
                                    path: '/author'
                                },
                                {
                                    id: 5,
                                    path: '/author'
                                },
                            ],
                        },
                        {
                            id: 5,
                            title: 'Divine Opulence',
                            content: 'Limited Edition *digital-only* "CB Galaxy" style Coke Boys LA sneakers wearable in the Decentraland metaverse',
                            author: 'DvisionNetwork',
                            authorLink: '/author',
                            price: 12.00,
                            priceTwo: 1.44,
                            metaText: 'Not for sale',
                            metaTextTwo: '200 editions',
                            metaTextThree: 'Highest bid <span class="text-primary fw-semibold">2.072 ETH</span>',
                            userName: '@dvison_network',
                            followersText: '2.4k Followers',
                            authorName: 'Dvision Network',
                            desc: 'Complete account of the system, and expound the actual things.',
                            name: 'art',
                            category: 'art',
                            itemToShow: 'show',
                            avatars: [
                                {
                                    id: 1,
                                    path: '/author'
                                },
                                {
                                    id: 2,
                                    path: '/author'
                                },
                                {
                                    id: 3,
                                    path: '/author'
                                },
                                {
                                    id: 4,
                                    path: '/author'
                                },
                                {
                                    id: 5,
                                    path: '/author'
                                },
                            ],
                        },
                        {
                            id: 6,
                            title: 'Sacral Metatron Cube',
                            content: 'Limited Edition *digital-only* "CB Galaxy" style Coke Boys LA sneakers wearable in the Decentraland metaverse',
                            author: 'KamranMedia',
                            authorLink: '/author',
                            price: 11.00,
                            priceTwo: 2.33,
                            metaText: 'Not for sale',
                            metaTextTwo: '200 editions',
                            metaTextThree: 'Highest bid <span class="text-primary fw-semibold">1.072 ETH</span>',
                            userName: '@kamran_media',
                            followersText: '2.4k Followers',
                            authorName: 'Kamran Media',
                            desc: 'Complete account of the system, and expound the actual things.',
                            name: 'art',
                            category: 'art',
                            itemToShow: 'show',
                            avatars: [
                                {
                                    id: 1,
                                    path: '/author'
                                },
                                {
                                    id: 2,
                                    path: '/author'
                                },
                                {
                                    id: 3,
                                    path: '/author'
                                },
                                {
                                    id: 4,
                                    path: '/author'
                                },
                                {
                                    id: 5,
                                    path: '/author'
                                },
                            ],
                        },
                        {
                            id: 7,
                            title: 'Girl warming up to a bed acrobat',
                            content: 'Limited Edition *digital-only* "CB Galaxy" style Coke Boys LA sneakers wearable in the Decentraland metaverse',
                            author: 'JisanMedia',
                            authorLink: '/author',
                            price: 8.00,
                            priceTwo: 0.33,
                            metaText: 'Not for sale',
                            metaTextTwo: '100 editions',
                            metaTextThree: 'Highest bid <span class="text-primary fw-semibold">1.072 ETH</span>',
                            userName: '@jisan_media',
                            followersText: '2.4k Followers',
                            authorName: 'Jisan Media',
                            desc: 'Complete account of the system, and expound the actual things.',
                            name: 'art',
                            category: 'art',
                            itemToShow: 'show',
                            avatars: [
                                {
                                    id: 1,
                                    path: '/author'
                                },
                                {
                                    id: 2,
                                    path: '/author'
                                },
                                {
                                    id: 3,
                                    path: '/author'
                                },
                                {
                                    id: 4,
                                    path: '/author'
                                },
                                {
                                    id: 5,
                                    path: '/author'
                                },
                            ],
                        },
                        {
                            id: 8,
                            title: 'Women Eyes Modern Art',
                            content: 'Limited Edition *digital-only* "CB Galaxy" style Coke Boys LA sneakers wearable in the Decentraland metaverse',
                            author: 'RifiUnited',
                            authorLink: '/author',
                            price: 8.00,
                            priceTwo: 0.33,
                            metaText: 'Not for sale',
                            metaTextTwo: '200 editions',
                            metaTextThree: 'Highest bid <span class="text-primary fw-semibold">1.072 ETH</span>',
                            userName: '@rifi_united',
                            followersText: '1.4k Followers',
                            authorName: 'Rifi United',
                            desc: 'Complete account of the system, and expound the actual things.',
                            name: 'collectibles',
                            category: 'collectibles',
                            itemToShow: 'show',
                            avatars: [
                                {
                                    id: 1,
                                    path: '/author'
                                },
                                {
                                    id: 2,
                                    path: '/author'
                                },
                                {
                                    id: 3,
                                    path: '/author'
                                },
                                {
                                    id: 4,
                                    path: '/author'
                                },
                                {
                                    id: 5,
                                    path: '/author'
                                },
                            ],
                        },
                        {
                            id: 9,
                            title: 'Puffy Baby Bird #151',
                            content: 'Limited Edition *digital-only* "CB Galaxy" style Coke Boys LA sneakers wearable in the Decentraland metaverse',
                            author: 'RadioCaca',
                            authorLink: '/author',
                            price: 12.00,
                            priceTwo: 1.33,
                            metaText: 'Not for sale',
                            metaTextTwo: '200 editions',
                            metaTextThree: 'Highest bid <span class="text-primary fw-semibold">1.072 ETH</span>',
                            userName: '@radio_caca',
                            followersText: '1.4k Followers',
                            authorName: 'Radio Caca',
                            desc: 'Complete account of the system, and expound the actual things.',
                            name: 'collectibles',
                            category: 'collectibles',
                            avatars: [
                                {
                                    id: 1,

                                    path: '/author'
                                },
                                {
                                    id: 2,

                                    path: '/author'
                                },
                                {
                                    id: 3,

                                    path: '/author'
                                },
                                {
                                    id: 4,

                                    path: '/author'
                                },
                                {
                                    id: 5,

                                    path: '/author'
                                },
                            ],
                        },
                        {
                            id: 10,

                            title: 'Wave1 - Titanium Ticket',
                            content: 'Limited Edition *digital-only* "CB Galaxy" style Coke Boys LA sneakers wearable in the Decentraland metaverse',
                            author: 'InfinityArt',
                            authorLink: '/author',
                            price: 10.00,
                            priceTwo: 0.33,
                            metaText: 'Not for sale',
                            metaTextTwo: '200 editions',
                            metaTextThree: 'Highest bid <span class="text-primary fw-semibold">1.072 ETH</span>',
                            userName: '@infinity_art',
                            followersText: '1.4k Followers',
                            authorName: 'Infinity Art',
                            desc: 'Complete account of the system, and expound the actual things.',
                            name: 'collectibles',
                            category: 'collectibles',
                            avatars: [
                                {
                                    id: 1,

                                    path: '/author'
                                },
                                {
                                    id: 2,

                                    path: '/author'
                                },
                                {
                                    id: 3,

                                    path: '/author'
                                },
                                {
                                    id: 4,

                                    path: '/author'
                                },
                                {
                                    id: 5,

                                    path: '/author'
                                },
                            ],
                        },
                        {
                            id: 11,
                            title: 'Saggezza 2/4. Cartier Edition',
                            content: 'Limited Edition *digital-only* "CB Galaxy" style Coke Boys LA sneakers wearable in the Decentraland metaverse',
                            author: 'InfinityArt',
                            authorLink: '/author',
                            price: 5.00,
                            priceTwo: 1.33,
                            metaText: 'Not for sale',
                            metaTextTwo: '200 editions',
                            metaTextThree: 'Highest bid <span class="text-primary fw-semibold">2.072 ETH</span>',
                            userName: '@infinity_art',
                            followersText: '1.4k Followers',
                            authorName: 'Infinity Art',
                            desc: 'Complete account of the system, and expound the actual things.',
                            name: 'games',
                            category: 'games',
                            avatars: [
                                {
                                    id: 1,

                                    path: '/author'
                                },
                                {
                                    id: 2,

                                    path: '/author'
                                },
                                {
                                    id: 3,

                                    path: '/author'
                                },
                                {
                                    id: 4,

                                    path: '/author'
                                },
                                {
                                    id: 5,

                                    path: '/author'
                                },
                            ],
                        },
                        {
                            id: 12,
                            title: 'Venus (Viktoria Veisbrut & SoldArt)',
                            content: 'Limited Edition *digital-only* "CB Galaxy" style Coke Boys LA sneakers wearable in the Decentraland metaverse',
                            author: 'Viktoria',
                            authorLink: '/author',
                            price: 12.00,
                            priceTwo: 1.33,
                            metaText: 'Not for sale',
                            metaTextTwo: '200 editions',
                            metaTextThree: 'Highest bid <span class="text-primary fw-semibold">1.072 ETH</span>',
                            userName: '@viktoria',
                            followersText: '1.4k Followers',
                            authorName: 'Viktoria',
                            desc: 'Complete account of the system, and expound the actual things.',
                            name: 'games',
                            category: 'games',
                            avatars: [
                                {
                                    id: 1,

                                    path: '/author'
                                },
                                {
                                    id: 2,

                                    path: '/author'
                                },
                                {
                                    id: 3,

                                    path: '/author'
                                },
                                {
                                    id: 4,

                                    path: '/author'
                                },
                                {
                                    id: 5,

                                    path: '/author'
                                },
                            ],
                        },
                    ],
                    onSaleList: [
                        {
                            id: 1,
                            title: 'One Tribe Black Edition',
                            content: 'Digital-only* "CB Galaxy" style Coke Boys LA sneakers wearable in the Decentraland metaverse',
                            author: 'ZeniconStudio',
                            authorLink: '/author',
                            price: '14.20',
                            priceTwo: '1.32',
                            metaText: 'Not for sale',
                            metaTextTwo: '500 editions',
                            metaTextThree: 'Highest bid <span class="text-primary fw-semibold">0.072 ETH</span>',
                        },
                        {
                            id: 2,
                            title: 'Operation Jade Fury',
                            content: 'Bazzors is a tiny buzzing, electrifying and irascible Elfin. Bazzors appear intermittently during thunderstorms in the Elfin Kingdom ',
                            author: 'CanvaNetwork',
                            authorLink: '/author',
                            price: '10.00',
                            priceTwo: '0.32',
                            metaText: 'Not for sale',
                            metaTextTwo: '200 editions',
                            metaTextThree: 'Highest bid <span class="text-primary fw-semibold">1.072 ETH</span>',
                        },
                        {
                            id: 3,
                            title: 'Unboxing The Compass',
                            content: 'According to our idea, REAL BORED APE would look exactly like this. Have you ever seen this tough guy on the streets of your city?',
                            author: 'MoveNetwork',
                            authorLink: '/author',
                            price: '8.00',
                            priceTwo: '0.32',
                            metaText: 'Not for sale',
                            metaTextTwo: '200 editions',
                            metaTextThree: 'Highest bid <span class="text-primary fw-semibold">1.072 ETH</span>',
                        },
                        {
                            id: 4,
                            title: 'Rendering by the Water',
                            content: 'Limited Edition *digital-only* "CB Galaxy" style Coke Boys LA sneakers wearable in the Decentraland metaverse',
                            author: 'RukiStudio',
                            authorLink: '/author',
                            price: '11.00',
                            priceTwo: '0.32',
                            metaText: 'Not for sale',
                            metaTextTwo: '300 editions',
                            metaTextThree: 'Highest bid <span class="text-primary fw-semibold">1.072 ETH</span>',
                        },
                        {
                            id: 5,
                            title: 'Divine Opulence',
                            content: 'Limited Edition *digital-only* "CB Galaxy" style Coke Boys LA sneakers wearable in the Decentraland metaverse',
                            author: 'DvisionNetwork',
                            authorLink: '/author',
                            price: '12.00',
                            priceTwo: '1.44',
                            metaText: 'Not for sale',
                            metaTextTwo: '200 editions',
                            metaTextThree: 'Highest bid <span class="text-primary fw-semibold">2.072 ETH</span>',
                        },
                        {
                            id: 6,
                            title: 'Sacral Metatron Cube',
                            content: 'Limited Edition *digital-only* "CB Galaxy" style Coke Boys LA sneakers wearable in the Decentraland metaverse',
                            author: 'KamranMedia',
                            authorLink: '/author',
                            price: '11.00',
                            priceTwo: '2.33',
                            metaText: 'Not for sale',
                            metaTextTwo: '200 editions',
                            metaTextThree: 'Highest bid <span class="text-primary fw-semibold">1.072 ETH</span>',
                        },
                    ],
                    ownedList: [
                        {
                            id: 1,
                            title: 'Unboxing The Compass',
                            content: 'Limited Edition *digital-only* "CB Galaxy" style Coke Boys LA sneakers wearable in the Decentraland metaverse',
                            author: 'ZeniconStudio',
                            authorLink: '/author',
                            price: '14.20',
                            priceTwo: '1.32',
                            metaText: 'Not for sale',
                            metaTextTwo: '200 editions',
                            metaTextThree: 'Highest bid <span class="text-primary fw-semibold">1.072 ETH</span>',
                        },
                        {
                            id: 2,
                            title: 'Rendering by the Water',
                            content: 'Limited Edition *digital-only* "CB Galaxy" style Coke Boys LA sneakers wearable in the Decentraland metaverse',
                            author: 'ZeniconStudio',
                            authorLink: '/author',
                            price: '14.20',
                            priceTwo: '1.32',
                            metaText: 'Not for sale',
                            metaTextTwo: '200 editions',
                            metaTextThree: 'Highest bid <span class="text-primary fw-semibold">1.072 ETH</span>',
                        },
                        {
                            id: 3,
                            title: 'One Tribe Black Edition',
                            content: 'Limited Edition *digital-only* "CB Galaxy" style Coke Boys LA sneakers wearable in the Decentraland metaverse',
                            author: 'ZeniconStudio',
                            authorLink: '/author',
                            price: '14.20',
                            priceTwo: '1.32',
                            metaText: 'Not for sale',
                            metaTextTwo: '200 editions',
                            metaTextThree: 'Highest bid <span class="text-primary fw-semibold">1.072 ETH</span>',
                        },
                        {
                            id: 4,
                            title: 'Operation Jade Fury',
                            content: 'Limited Edition *digital-only* "CB Galaxy" style Coke Boys LA sneakers wearable in the Decentraland metaverse',
                            author: 'ZeniconStudio',
                            authorLink: '/author',
                            price: '14.20',
                            priceTwo: '1.32',
                            metaText: 'Not for sale',
                            metaTextTwo: '200 editions',
                            metaTextThree: 'Highest bid <span class="text-primary fw-semibold">1.072 ETH</span>',
                        },
                        {
                            id: 5,
                            title: 'Divine Opulence',
                            content: 'Limited Edition *digital-only* "CB Galaxy" style Coke Boys LA sneakers wearable in the Decentraland metaverse',
                            author: 'DvisionNetwork',
                            authorLink: '/author',
                            price: '12.00',
                            priceTwo: '1.44',
                            metaText: 'Not for sale',
                            metaTextTwo: '200 editions',
                            metaTextThree: 'Highest bid <span class="text-primary fw-semibold">1.072 ETH</span>',
                        },
                        {
                            id: 6,
                            title: 'Sacral Metatron Cube',
                            content: 'Limited Edition *digital-only* "CB Galaxy" style Coke Boys LA sneakers wearable in the Decentraland metaverse',
                            author: 'KamranMedia',
                            authorLink: '/author',
                            price: '11.00',
                            priceTwo: '1.44',
                            metaText: 'Not for sale',
                            metaTextTwo: '200 editions',
                            metaTextThree: 'Highest bid <span class="text-primary fw-semibold">1.072 ETH</span>',
                        },
                    ],
                },
            }
        }
    },
}
</script>

<style lang="css" scoped>
.details {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
}

.author-linkm,
.card-price-wrap {
    z-index: 2;
    position: relative;
}
</style>
