<template>
    <div class="page-wrap">
        <!-- header  -->
        <header class="header-section has-header-main">
            <!-- Header main -->
            <HeaderMain></HeaderMain>
        </header>
        <section class="item-detail-section section-space">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 pe-xl-5">
                        <div class="item-detail-content">
                            <div class="item-detail-img-container mb-4">
                                <img src="../../images/thumb/nft-lg.jpg" alt="" class="w-100 rounded-3">
                            </div>
                            <!-- end item-detail-img-container -->
                            <div class="item-detail-tab">

                                <ul class="nav nav-tabs nav-tabs-s1" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation"
                                        v-for="list in SectionData.itemDetailData.itemDetailTabNav" :key="list.id">
                                        <button class="nav-link" :class="list.isActive" :id="list.slug" data-bs-toggle="tab"
                                            :data-bs-target="list.bsTarget" type="button">{{ list.title }}a </button>
                                    </li>
                                </ul>
                                <div class="tab-content mt-3" id="myTabContent">
                                    <div class="tab-pane fade show active" id="owners" role="tabpanel"
                                        aria-labelledby="owners-tab">
                                        <div class="item-detail-tab-wrap">
                                            <div class="card-media card-media-s2 mb-3"
                                                v-for="item in SectionData.itemDetailData.itemDetailOwnerList"
                                                :key="item.id">
                                                <DropdownLink class="card-media-img flex-shrink-0 d-block">
                                                    <img src="../../images/thumb/avatar-10.jpg" alt="avatar">
                                                </DropdownLink>
                                                <div class="card-media-body text-truncate">
                                                    <p class="fw-semibold text-truncate"><a :href="item.path"
                                                            class="text-black">{{ item.title }}</a></p>
                                                    <p class="small">{{ item.subTitle }}</p>
                                                </div>
                                            </div><!-- end card -->
                                        </div><!-- end item-detail-tab-wrap -->
                                    </div><!-- end tab-pane -->
                                    <div class="tab-pane fade" id="bids" role="tabpanel" aria-labelledby="bids-tab">
                                        <div class="item-detail-tab-wrap">
                                            <div class="card-media card-media-s2 mb-3"
                                                v-for="item in SectionData.itemDetailData.itemDetailBidsList"
                                                :key="item.id">
                                                <DropdownLink class="card-media-img flex-shrink-0 d-block">
                                                    <img src="../../images/thumb/avatar-10.jpg" alt="avatar">
                                                </DropdownLink>
                                                <div class="card-media-body text-truncate">
                                                    <p class="fw-semibold text-black text-truncate">{{ item.title }}</p>
                                                    <p class="small">{{ item.date }}</p>
                                                </div>
                                            </div><!-- end card -->
                                        </div><!-- end item-detail-tab-wrap -->
                                    </div><!-- end tab-pane -->
                                    <div class="tab-pane fade" id="history" role="tabpanel" aria-labelledby="history-tab">
                                        <div class="item-detail-tab-wrap">
                                            <div class="card-media card-media-s2 mb-3"
                                                v-for="item in SectionData.itemDetailData.itemDetailHistoryList"
                                                :key="item.id">
                                                <DropdownLink class="card-media-img flex-shrink-0 d-block">
                                                    <img src="../../images/thumb/avatar-10.jpg" alt="avatar">
                                                </DropdownLink>
                                                <div class="card-media-body text-truncate">
                                                    <p class="fw-semibold text-black text-truncate">{{ item.title }}</p>
                                                    <p class="small text-truncate">{{ item.subTitle }}</p>
                                                </div>
                                            </div><!-- end card -->
                                        </div><!-- end item-detail-tab-wrap -->
                                    </div><!-- end tab-pane -->
                                </div>
                            </div>
                        </div><!-- end item-detail-content -->
                    </div><!-- end col -->
                    <div class="col-lg-6">
                        <div class="item-detail-content mt-4 mt-lg-0">
                            <h1 class="item-detail-title mb-2">Lorem ipsum dolor sit amet consectetur.</h1>
                            <div class="item-detail-meta d-flex flex-wrap align-items-center mb-3">
                                <span class="item-detail-text-meta">lorem</span>
                                <span class="dot-separeted"></span>
                                <span class="item-detail-text-meta">ipsum</span>
                                <span class="dot-separeted"></span>
                                <span class="item-detail-text-meta">dolor</span>
                            </div>
                            <p class="item-detail-text mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                Corporis iste reprehenderit voluptatibus fuga cum doloribus in quae accusamus, voluptates,
                                impedit dignissimos eius itaque atque sint hic veritatis quisquam magnam officia.</p>
                            <div class="item-credits">
                                <div class="row g-4">
                                    <div class="col-xl-6" v-for="item in SectionData.itemDetailData.itemDetailList"
                                        :key="item.id">
                                        <div class="card-media card-media-s1">
                                            <DropdownLink class="card-media-img flex-shrink-0 d-block">
                                                <img src="../../images/thumb/avatar-10.jpg" alt="avatar">
                                            </DropdownLink>
                                            <div class="card-media-body">
                                                <DropdownLink class="fw-semibold">{{ item.title
                                                }}</DropdownLink>
                                                <p class="fw-medium small">{{ item.subTitle }}</p>
                                            </div>
                                        </div><!-- end card -->
                                    </div><!-- end col-->
                                    <div class="col-xl-12" v-for="item in SectionData.itemDetailData.itemDetailListTwo"
                                        :key="item.id">
                                        <div class="card-media card-media-s1">
                                            <DropdownLink class="card-media-img flex-shrink-0 d-block">
                                                <img src="../../images/thumb/avatar-10.jpg" alt="avatar">
                                            </DropdownLink>
                                            <div class="card-media-body">
                                                <p class="fw-semibold text-black">{{ item.title }}</p>
                                                <span class="fw-medium small">{{ item.subTitle }}</span>
                                            </div>
                                        </div><!-- end card -->
                                    </div><!-- end col-->
                                </div><!-- end row -->
                            </div><!-- end row -->
                            <div class="item-detail-btns mt-4">
                                <ul class="btns-group d-flex">
                                    <li class="flex-grow-1">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#placeBidModal"
                                            class="btn btn-dark d-block">{{ SectionData.itemDetailData.btnText }}</a>
                                    </li>
                                    <li class="flex-grow-1">
                                        <div class="dropdown">
                                            <a href="#" class="btn bg-dark-dim d-block" data-bs-toggle="dropdown">{{
                                                SectionData.itemDetailData.btnTextTwo }}</a>
                                            <div class="dropdown-menu card-generic p-2 keep-open w-100 mt-1">
                                                <DropdownLink  class="dropdown-item card-generic-item"
                                                    v-for="(icon, i) in SectionData.socialShareList" :key="i"><em
                                                        class="ni me-2" :class="icon.btnClass"></em>{{ icon.title
                                                        }}</DropdownLink>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div><!-- end item-detail-btns -->
                        </div><!-- end item-detail-content -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- .container -->
        </section><!-- end item-detail-section -->
        <!-- Related product -->
        <RelatedProduct></RelatedProduct>
        <!-- Footer  -->
        <Footer classname="bg-dark on-dark"></Footer>
        <!-- Modal -->
        <div class="modal fade" id="placeBidModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">{{ SectionData.placeBidModal.title }}</h4>
                        <button type="button" class="btn-close icon-btn" data-bs-dismiss="modal" aria-label="Close">
                            <em class="ni ni-cross"></em>
                        </button>
                    </div><!-- end modal-header -->
                    <div class="modal-body">
                        <p class="mb-3" v-html="SectionData.placeBidModal.content"></p>
                        <div class="mb-3">
                            <label class="form-label">{{ SectionData.placeBidModal.labelText }}</label>
                            <input type="text" class="form-control form-control-s1" placeholder="Enter bid">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" v-html="SectionData.placeBidModal.labelTextTwo"></label>
                            <input type="text" class="form-control form-control-s1" value="1">
                        </div>
                        <ul class="total-bid-list mb-4">
                            <li v-for="(list, i) in SectionData.placeBidModal.totalBidList" :key="i"><span>{{ list.title
                            }}</span> <span>{{ list.price }}</span></li>
                        </ul>
                        <a :href="SectionData.placeBidModal.btnLink" class="btn btn-dark d-block">{{
                            SectionData.placeBidModal.btnText }}</a>
                    </div><!-- end modal-body -->
                </div><!-- end modal-content -->
            </div><!-- end modal-dialog -->
        </div><!-- end modal-->
    </div><!-- end page-wrap -->
</template>

<script>
// Import component data. You can change the data in the store to reflect in all component
import HeaderMain from '@/Layouts/HeaderMain.vue';
import RelatedProduct from '@/Components/section/RelatedProduct.vue';
import { ref } from 'vue';
import DropdownLink from '@/Components/DropdownLink.vue';

export default {
    name: 'ProductDetail',
    components: {
        HeaderMain,
        RelatedProduct,
        DropdownLink
    },
    setup() {

        const SectionData = ref({
            // Related Product data
            relatedProductData: {
                title: 'Popular Art Assets',
            },
            // itemDetail data
            itemDetailData: {
                title: 'The Future is Blossoming - Harlows 2021',
                content: 'Limited Edition *digital-only* "CB Galaxy" style Coke Boys LA sneakers wearable in the Decentraland metaverse',
                metaText: 'Not for sale',
                metaTextTwo: '500 editions',
                metaTextThree: 'Highest bid 0.072 ETH',
                btnText: 'Place a Bid',
                btnTextTwo: 'Share',
                itemDetailTabNav: [
                    {
                        id: 1,
                        isActive: 'active',
                        title: 'Owners',
                        slug: 'owners-tab',
                        bsTarget: '#owners'
                    },
                    {
                        id: 2,
                        title: 'Bids',
                        slug: 'bids-tab',
                        bsTarget: '#bids'
                    },
                    {
                        id: 3,
                        title: 'History',
                        slug: 'history-tab',
                        bsTarget: '#history'
                    },
                ],
                itemDetailOwnerList: [
                    {
                        id: 1,
                        title: 'French Montana',
                        subTitle: '450 editions not for sale',

                        path: '/author'
                    },
                    {
                        id: 2,
                        title: 'Beejaey',
                        subTitle: '6 editions not for sale',

                        path: '/author'
                    },
                    {
                        id: 3,
                        title: 'Tom Dracula',
                        subTitle: '24 editions not for sale',

                        path: '/author'
                    }
                ],
                itemDetailOwnerListTwo: {
                    title: 'Owners',
                    ownerList: [
                        {
                            id: 1,
                            title: 'French Montana',
                            subTitle: '450 editions not for sale',

                            path: '/author'
                        },
                        {
                            id: 2,
                            title: 'Beejaey',
                            subTitle: '6 editions not for sale',

                            path: '/author'
                        },
                        {
                            id: 3,
                            title: 'Tom Dracula',
                            subTitle: '24 editions not for sale',

                            path: '/author'
                        }
                    ]
                },
                itemDetailBidsList: [
                    {
                        id: 1,
                        title: '0.072 ETH by Palliman for 1 edition',
                        date: '21/09/2021',

                        path: '/author'
                    },
                    {
                        id: 2,
                        title: '0.072 ETH by KingKhalid for 1 edition',
                        date: '14/08/2021',

                        path: '/author'
                    },
                    {
                        id: 3,
                        title: '0.072 ETH by Kamran for 1 edition',
                        date: '12/07/2021',

                        path: '/author'
                    }
                ],
                itemDetailBidsListTwo: {
                    title: 'Bids',
                    bidsList: [
                        {
                            id: 1,
                            title: '0.072 ETH by Palliman for 1 edition',
                            date: '21/09/2021',

                            path: '/author'
                        },
                        {
                            id: 2,
                            title: '0.072 ETH by KingKhalid for 1 edition',
                            date: '14/08/2021',

                            path: '/author'
                        },
                        {
                            id: 3,
                            title: '0.072 ETH by Kamran for 1 edition',
                            date: '12/07/2021',

                            path: '/author'
                        }
                    ]
                },
                itemDetailHistoryList: [
                    {
                        id: 1,
                        title: 'Listed 1 edition for 0.35 ETH',
                        subTitle: 'by Medicom 21 hours ago',

                        path: '/author'
                    },
                    {
                        id: 2,
                        title: 'Purchased 1 edition for 0.1 ETH',
                        subTitle: 'by Medicom 21 hours ago',

                        path: '/author'
                    },
                    {
                        id: 3,
                        title: 'Purchased 1 edition for 0.1 ETH',
                        subTitle: 'by French Montana 23/09/2021',

                        path: '/author'
                    }
                ],
                itemDetailHistoryListTwo: {
                    title: 'History',
                    historyList: [
                        {
                            id: 1,
                            title: 'Listed 1 edition for 0.35 ETH',
                            subTitle: 'by Medicom 21 hours ago',

                            path: '/author'
                        },
                        {
                            id: 2,
                            title: 'Purchased 1 edition for 0.1 ETH',
                            subTitle: 'by Medicom 21 hours ago',

                            path: '/author'
                        },
                        {
                            id: 3,
                            title: 'Purchased 1 edition for 0.1 ETH',
                            subTitle: 'by French Montana 23/09/2021',

                            path: '/author'
                        }
                    ]
                },
                itemDetailList: [
                    {
                        id: 1,
                        title: '@nathan_walls',
                        subTitle: 'Creator',

                        path: '/author'
                    },
                    {
                        id: 2,
                        title: '@kamran_ahmed',
                        subTitle: 'Collection',

                        path: '/author'
                    }
                ],
                itemDetailListTwo: [
                    {
                        title: 'Highest bid by Palliman',
                        titleTwo: 'Palliman',
                        subTitle: '0.072 ETH',

                        path: '/author'
                    }
                ],

            },
            // placeBidModal data
            placeBidModal: {
                title: 'Place a Bid',
                content: 'You are about to place a bid for <strong>The Future is Blossoming - Harlows 2021</strong> from <strong>Nathan walls</strong>',
                labelText: 'Your bid (ETH)',
                labelTextTwo: 'Enter quantity <span class="text-primary">5 available</span>',
                totalBidList: [
                    {
                        title: 'Your bidding balance',
                        price: '0.013325 ETH'
                    },
                    {
                        title: 'Your balance',
                        price: '10.67856 ETH'
                    },
                    {
                        title: 'Service fee 3.5%',
                        price: '0.00325 ETH'
                    },
                    {
                        title: 'You will pay',
                        price: '0.013325 ETH'
                    },
                ],
                btnText: 'Place a Bid',
                btnLink: 'wallet'
            },
        })

        return {
            SectionData
        }
    }
}
</script>
