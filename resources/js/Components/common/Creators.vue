<template>
    <div class="row g-gs">
        <div class="col-lg-4 col-sm-6" v-for="item in SectionData.creatorData.creatorList" :key="item.id">
            <div class="card card-creator-s1">
                <div class="card-body flex flex-col md:flex-row">
                    <DropdownLink class="avatar avatar-1 flex-shrink-0">
                        <img src="../../../images/thumb/avatar.jpg" alt="avatar">
                    </DropdownLink>
                    <div class="md:ml-4 flex-grow-1 mt-2 md:mt-0">
                        <DropdownLink class="text-black fw-semibold">{{ item.title }}</DropdownLink>
                        <span class="d-block fw-medium">{{ item.subTitle }}</span>
                    </div>
                </div>

            </div><!-- end card -->
        </div><!-- end col-lg-4 -->
    </div><!-- row -->
</template>

<script>
import DropdownLink from '../DropdownLink.vue';

// Import component data. You can change the data in the store to reflect in all component

export default {
    name: 'Creators',
    data() {
        return {
            SectionData: {
                creatorData: {
                    title: 'Featured Creators',
                    meta: 'Our Creators',
                    content: "Explore on the world's best NFT marketplace with our beautiful NFT products creators. We want to be a part of your smile.",
                    creatorList: [
                        {
                            id: 1,
                            title: '@nathan_walls',
                            subTitle: '24.13 ETH',
                            path: '/author'
                        },
                        {
                            id: 2,
                            title: '@alex_smith',
                            subTitle: '12.24 ETH',
                            path: '/author'
                        },
                        {
                            id: 3,
                            title: '@kevin_martin',
                            subTitle: '13.57 ETH',
                            path: '/author'
                        },
                        {
                            id: 4,
                            title: '@david_martin',
                            subTitle: '34.13 ETH',
                            path: '/author'
                        },
                        {
                            id: 5,
                            title: '@jhonatan_doe',
                            subTitle: '23.24 ETH',
                            path: '/author'
                        },
                        {
                            id: 6,
                            title: '@mark_hardson',
                            subTitle: '34.57 ETH',
                            path: '/author'
                        },
                    ],
                    creatorListTwo: [
                        {
                            id: 1,
                            title: 'Nathan Walls',
                            subTitle: '24.13 ETH',
                            path: '/author'
                        },
                        {
                            id: 2,
                            title: 'Alex Smith',
                            subTitle: '12.24 ETH',
                            path: '/author'
                        },
                        {
                            id: 3,
                            title: 'Kevin Martin',
                            subTitle: '13.57 ETH',
                            path: '/author'
                        },
                        {
                            id: 4,
                            title: 'David Martin',
                            subTitle: '34.13 ETH',
                            path: '/author'
                        },
                        {
                            id: 5,
                            title: 'Jhonatan Doe',
                            subTitle: '23.24 ETH',
                            path: '/author'
                        },
                        {
                            id: 6,
                            title: 'Mark Hardson',
                            subTitle: '34.57 ETH',
                            path: '/author'
                        },
                        {
                            id: 7,
                            title: 'Gayle Hicks',
                            subTitle: '34.57 ETH',
                            path: '/author'
                        },
                        {
                            id: 8,
                            title: 'Claude Banks',
                            subTitle: '34.57 ETH',
                            path: '/author'
                        },
                        {
                            id: 9,
                            title: 'Stacy Long',
                            subTitle: '34.57 ETH',
                            path: '/author'
                        },
                        {
                            id: 10,
                            title: 'Fred Ryan',
                            subTitle: '34.57 ETH',
                            path: '/author'
                        },
                        {
                            id: 11,
                            title: 'Franklin Greer',
                            subTitle: '34.57 ETH',
                            path: '/author'
                        },
                        {
                            id: 12,
                            title: 'Karla Sharp',
                            subTitle: '34.57 ETH',
                            path: '/author'
                        },
                    ]
                },
            }
        };
    },
    components: { DropdownLink }
}
</script>
