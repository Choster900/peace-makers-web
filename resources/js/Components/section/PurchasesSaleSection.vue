<template>
    <div class="col-lg-9 ps-xl-5">
        <div class="user-panel-title-box">
            <h3>{{ SectionData.purchaseAndSaleData.mainTitle }}</h3>
        </div><!-- end user-panel-title-box -->
        <div class="profile-setting-panel-wrap">
            <ul class="nav nav-tabs nav-tabs-s1 nav-tabs-mobile-size" id="myTab" role="tablist">
                <li class="nav-item" role="presentation" v-for="list in SectionData.purchaseAndSaleTabNav" :key="list.id">
                    <button class="nav-link" :class="list.isActive" :id="list.slug" data-bs-toggle="tab"
                        :data-bs-target="list.bsTarget" type="button">{{ list.title }}</button>
                </li>
            </ul>
            <div class="tab-content mt-4 tab-content-desktop" id="myTabContent">
                <div class="tab-pane fade show active" id="purchases" role="tabpanel" aria-labelledby="purchases-tab">
                    <div class="profile-setting-panel">
                        <div class="history-panel" v-for="item in SectionData.purchaseAndSaleData.purchaseData"
                            :key="item.id">
                            <span class="history-panel-left">
                                <em class="ni ni-money me-1"></em>
                                <span>You bought <router-link to="/product-details-v1-1" class="btn-link fw-medium">{{
                                    item.title }}</router-link> from <router-link :to="item.authorLink"
                                        class="btn-link fw-medium">{{ item.author }}</router-link> for <span
                                        class="fw-medium">&dollar;{{ item.price }}</span></span>
                            </span>
                            <span class="history-panel-right">{{ item.dateText }}</span>
                        </div><!-- end history-panel -->
                    </div><!-- end profile-setting-panel -->
                </div><!-- end tab-pane -->
                <div class="tab-pane fade" id="sales" role="tabpanel" aria-labelledby="sales-tab">
                    <div class="profile-setting-panel">
                        <div class="history-panel" v-for="item in SectionData.purchaseAndSaleData.salesData" :key="item.id">
                            <span class="history-panel-left">
                                <em class="ni ni-money me-1"></em>
                                <span><router-link :to="item.authorLink" class="btn-link fw-medium">{{ item.author
                                }}</router-link> bought <router-link to="/product-details-v1-1"
                                        class="btn-link fw-medium">{{ item.title }}</router-link> You for <span
                                        class="fw-medium">&dollar;{{ item.price }}</span></span>
                            </span>
                            <span class="history-panel-right">{{ item.dateText }}</span>
                        </div><!-- end history-panel -->
                    </div><!-- end profile-setting-panel -->
                </div><!-- end tab-pane -->
            </div><!-- end tab-content -->
        </div><!-- end profile-setting-panel-wrap-->
    </div><!-- end col-lg-8 -->
</template>

<script>
// Import component data. You can change the data in the store to reflect in all component

export default {
    name: 'PurchasesSaleSection',
    data() {
        return {
            SectionData: {
                // purchases and sale data
                purchaseAndSaleData: {
                    mainTitle: 'Sales & Purchase',
                    purchaseData: [
                        {
                            id: 1,
                            title: 'Serpent #76/140',
                            author: 'Alex',
                            authorLink: '/author',
                            price: '250.00',
                            dateText: '4d ago'
                        },
                        {
                            id: 2,
                            title: ' Afterburn',
                            author: 'Kamran',
                            authorLink: '/author',
                            price: '20.00',
                            dateText: '4d ago'
                        },
                        {
                            id: 3,
                            title: ' Dance or Die',
                            author: 'Jhon',
                            authorLink: '/author',
                            price: '50.00',
                            dateText: '3d ago'
                        },
                        {
                            id: 4,
                            title: 'Green Parrot Island',
                            author: 'Alex',
                            authorLink: '/author',
                            price: '250.00',
                            dateText: '4d ago'
                        },
                        {
                            id: 5,
                            title: 'Lavish',
                            author: 'Alex',
                            authorLink: '/author',
                            price: '250.00',
                            dateText: '4d ago'
                        },
                        {
                            id: 6,
                            title: 'Karma Chameleon',
                            author: 'Alex',
                            authorLink: '/author',
                            price: '25.00',
                            dateText: '4d ago'
                        },
                        {
                            id: 7,
                            title: 'Le Anime',
                            author: 'Alex',
                            authorLink: '/author',
                            price: '20.00',
                            dateText: '4d ago'
                        },
                        {
                            id: 8,
                            title: 'Lady Robot #62',
                            author: 'Alex',
                            authorLink: '/author',
                            price: '250.00',
                            dateText: '3d ago'
                        },
                        {
                            id: 9,
                            title: 'Creature #8477',
                            author: 'Alex',
                            authorLink: '/author',
                            price: '250.00',
                            dateText: '2d ago'
                        },
                        {
                            id: 10,
                            title: 'Gold #422/477',
                            author: 'Alex',
                            authorLink: '/author',
                            price: '12.00',
                            dateText: '1d ago'
                        },
                    ],
                    salesData: [
                        {
                            id: 1,
                            title: 'Lady Robot #62',
                            author: 'David',
                            authorLink: '/author',
                            price: '250.00',
                            dateText: '4d ago'
                        },
                        {
                            id: 2,
                            title: 'Creature #8477',
                            author: 'Robi',
                            authorLink: '/author',
                            price: '30.00',
                            dateText: '4d ago'
                        },
                        {
                            id: 3,
                            title: 'Gold #422/477',
                            author: 'Jared Liner',
                            authorLink: '/author',
                            price: '50.00',
                            dateText: '4d ago'
                        },
                        {
                            id: 4,
                            title: 'Serpent #76/140 ',
                            author: 'Antonio',
                            authorLink: '/author',
                            price: '250.00',
                            dateText: '4d ago'
                        },
                        {
                            id: 5,
                            title: 'Afterburn',
                            author: 'Jhon',
                            authorLink: '/author',
                            price: '30.00',
                            dateText: '4d ago'
                        },
                        {
                            id: 6,
                            title: 'Dance or Die',
                            author: 'Kevin Martin',
                            authorLink: '/author',
                            price: '250.00',
                            dateText: '4d ago'
                        },
                        {
                            id: 7,
                            title: 'Green Parrot Island',
                            author: 'Alex',
                            authorLink: '/author',
                            price: '250.00',
                            dateText: '4d ago'
                        },
                        {
                            id: 8,
                            title: 'Lavish',
                            author: 'Alex',
                            authorLink: '/author',
                            price: '250.00',
                            dateText: '4d ago'
                        },
                        {
                            id: 9,
                            title: 'Karma Chameleon',
                            author: 'Kamran',
                            authorLink: '/author',
                            price: '25.00',
                            dateText: '4d ago'
                        },
                        {
                            id: 10,
                            title: 'Le Anime',
                            author: 'Alex',
                            authorLink: '/author',
                            price: '22.00',
                            dateText: '4d ago'
                        },
                    ],
                },
            }
        }
    },
}
</script>
