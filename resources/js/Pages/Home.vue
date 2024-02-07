<template>
    <div class="page-wrap">
        <!-- header  -->
        <header class="header-section has-header-main bg-gradient-2">
            <!-- Header main -->
            <HeaderMain isTransparent="is-transparent"></HeaderMain>
            <!-- hero -->
            <HeroTwo></HeroTwo>
        </header>
        <!-- Featured  -->
        <Featured></Featured>
        <!-- product  -->
        <section class="section-space trending-section bg-gray">
            <div class="container">
                <!-- section heading -->
                <SectionHeading classname="text-center" :text="SectionData.productData.title"
                    :content="SectionData.productData.content" isMargin="mb-3"></SectionHeading>
                <!-- product -->
                <ProductsContainer></ProductsContainer>
                <div class="text-center mt-4 mt-md-5">
                    <ButtonLink :text="SectionData.productData.btnText" :link="SectionData.productData.btnLink"
                        classname="btn-link btn-link-s1"></ButtonLink>
                </div>
            </div><!-- .container -->
        </section><!-- trending-section -->
        <!-- HowItWork  -->
        <HowItWork classname="col-lg-3" :title="SectionData.howItWorkData.title"
            :subtitle="SectionData.howItWorkData.content" gutterBottom="mb-3"></HowItWork>
        <!-- Category  -->
        <Category classname="section-space bg-gray "></Category>
        <!-- Newsletter  -->
        <Newsletter></Newsletter>
        <!-- Footer  -->
        <Footer classname="bg-dark on-dark"></Footer>
    </div><!-- end page-wrap -->
</template>

<script>
import HeaderMain from '@/Layouts/HeaderMain.vue';
import HeroTwo from '@/Components/HeroTwo.vue';
import Featured from '@/Components/section/Featured.vue';
import ProductsContainer from '@/Components/section/ProductsContainer.vue'
import SectionHeading from '@/Components/common/SectionHeading.vue';
import { ref } from 'vue';
import ButtonLink from '@/Components/Common/ButtonLink.vue';
import HowItWork from '@/Components/section/HowItWork.vue';
import Category from '@/Components/section/Category.vue';
import Newsletter from '@/Components/section/Newsletter.vue';
import Footer from '@/Layouts/Footer.vue';
export default {
    name: 'Home',
    components: {
    ButtonLink,
    SectionHeading,
    ProductsContainer,
    HeaderMain,
    HeroTwo,
    Featured,
    HowItWork,
    Category,
    Newsletter,
    Footer
},
    setup() {

        const SectionData = ref({
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
            // how It Work Data
            howItWorkData: {
                title: 'Nuestros facilitadores',
                content: '(Breve descripcion de los facilitadores que mas cuentan )This is just a simple text made for this unique and awesome template, you can replace it with any text. It is a long established fact.',
                titleTwo: 'Mint, Buy and Sell or Just Launch <br> Your Own NFT Store',
                titleThree: 'Get Started in 3 simple steps',
                btnText: 'Create Store',
                howItWorkList: [
                    {
                        id: 1,
                        icon: 'icon ni ni-wallet icon-lg icon-circle shadow-sm icon-wbg mx-auto mb-4 text-primary',
                        title: 'Set up your wallet',
                        content: 'Once you’ve set up your wallet of choice, connect it to EnftyMart by clicking the'
                    },
                    {
                        id: 2,
                        icon: 'icon ni ni-file-text icon-lg icon-circle shadow-sm icon-wbg mx-auto mb-4 text-danger',
                        title: 'Create collection',
                        content: 'Click <a href="profile" class="btn-link">My Collections</a> and set up your collection. Add social links, a description'
                    },
                    {
                        id: 3,
                        icon: 'icon ni ni-camera icon-lg icon-circle shadow-sm icon-wbg mx-auto mb-4 text-info',
                        title: 'Add your NFTs',
                        content: 'Upload your work (image, video, audio, or 3D art), add a title and description'
                    },
                    {
                        id: 4,
                        icon: 'icon ni ni-money icon-lg icon-circle shadow-sm icon-wbg mx-auto mb-4 text-success',
                        title: 'List them for sale',
                        content: 'Choose between auctions, fixed-price listings, and declining-price listings.'
                    }
                ],
                howItWorkListTwo: [
                    {
                        id: 1,
                        icon: 'icon ni ni-wallet icon-md icon-rounded icon-wbg mx-auto mb-4 text-white bg-blue',
                        title: 'Set up your wallet'
                    },
                    {
                        id: 2,
                        icon: 'icon ni ni-file-text icon-md icon-rounded icon-wbg mx-auto mb-4 text-white bg-purple',
                        title: 'Create collection'
                    },
                    {
                        id: 3,
                        icon: 'icon ni ni-camera icon-md icon-rounded icon-wbg mx-auto mb-4 text-white bg-pink',
                        title: 'Add your NFTs'
                    },
                    {
                        id: 4,
                        icon: 'icon ni ni-money icon-md icon-rounded icon-wbg mx-auto mb-4 text-white bg-orange',
                        title: 'List them for sale'
                    }
                ],
                howItWorkListThree: [
                    {
                        id: 1,
                        icon: 'icon ni ni-wallet icon-md icon-circle icon-wbg me-3 text-blue bg-blue-100',
                        title: 'Set up your wallet',
                        content: 'Once you’ve set up your wallet of choice, connect it to EnftyMart by clicking the wallet icon.'
                    },
                    {
                        id: 2,
                        icon: 'icon ni ni-file-text icon-md icon-circle icon-wbg me-3 text-purple bg-purple-100',
                        title: 'Create collection',
                        content: 'Click <a href="/profile" class="btn-link">My Collections</a> and set up your collection. Add social links, a description of item.'
                    },
                    {
                        id: 3,
                        icon: 'icon ni ni-camera icon-md icon-circle icon-wbg me-3 text-pink bg-pink-100',
                        title: 'Add your NFTs',
                        content: 'Upload your work (image, video, audio, or 3D art), add a title and description to item.'
                    },
                    {
                        id: 4,
                        icon: 'icon ni ni-money icon-md icon-circle icon-wbg me-3 text-orange bg-orange-100',
                        title: 'List them for sale',
                        content: 'Choose between auctions, fixed-price listings, and declining-price listings of item.'
                    }
                ],
                howItWorkListFour: [
                    {
                        id: 1,
                        title: 'What is a non-fungible token (NFT)?',
                        content: 'A non-fungible token (NFT) is a cryptographic token that represents a unique asset. They function as verifiable proofs of authenticity and ownership within a blockchain network.'
                    },
                    {
                        id: 2,
                        title: 'What is EnftyMart NFT Marketplace?',
                        content: 'EnftyMart NFT Marketplace brings together artists, creators, and crypto enthusiasts on a single platform to create and trade top NFTs. The platform features 3 product lines.'
                    },
                    {
                        id: 3,
                        title: 'How do I create an NFT?',
                        content: 'Click [Create] and choose your file to upload. We currently support JPG, PNG, GIF, PDF, MP4, MP3, MPEG, AVI, WAV, and SVG. Please note that your NFT cannot be changed.'
                    },
                    {
                        id: 4,
                        title: 'How do I buy an NFT?',
                        content: 'For NFTs with a fixed price, click the [Buy] button on the product page and complete the transaction. Once the transaction is successful, we will transfer the NFT to your wallet.'
                    },
                    {
                        id: 5,
                        title: 'How do I sell an NFT?',
                        content: 'To list an NFT for sale, our team will first of all approve the content to make sure it’s appropriate for listing. This process usually takes 4-8 hours. Upon successful approval.'
                    }
                ],
                tabNav: [
                    {
                        id: 1,
                        isActive: 'active',
                        title: 'Connect Your Wallet',
                        slug: 'pills-connect-wallet-tab',
                        bsTarget: '#pills-connect-wallet'
                    },
                    {
                        id: 2,
                        title: 'Create Your NFT Store',
                        slug: 'pills-create-nft-store-tab',
                        bsTarget: '#pills-create-nft-store'
                    },
                    {
                        id: 3,
                        title: 'Start Selling & Growing',
                        slug: 'pills-start-selling-tab',
                        bsTarget: '#pills-start-selling'
                    },
                ],
            },
        })

        return {
            SectionData
        }
    }
}
</script>
