<template>
  <section class="explore-section pt-4">
    <div class="container">
      <!-- filter -->
      <div class="filter-box pb-5">
        <h3 class="mb-4">Filter by</h3>
        <div class="filter-btn-group">
          <a href="#" class="btn btn-sm filter-btn" :class="tab.class" v-for="tab in filterMenu"
            @click.prevent="setTab(tab, tab.id)" :key="tab.id">{{ tab.title }}</a>
        </div>
      </div><!-- end filter-box -->
      <div class="row g-gs">
        <div class="col-xl-3 col-lg-4 col-sm-6" v-for="product in filteredData" :key="product.id">
          <Products :product="product"></Products>
        </div><!-- end col -->
      </div><!-- end end  -->
    </div><!-- .container -->
  </section><!-- end explore-section -->
</template>

<script>
// Import component data. You can change the data in the store to reflect in all component
import Products from './Products.vue'

export default {
  name: 'ExploreSection',
  components: {
    Products
  },
  data() {
    return {
      SectionData: {
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
      ,
      filterMenu: [
        {
          id: 1,
          title: 'All',
          class: 'active',
          options: [
            {
              category: 'art'
            },
            {
              category: 'music'
            },
            {
              category: 'collectibles'
            },
            {
              category: 'games'
            },
          ]
        },
        {
          id: 2,
          title: 'Artworks',
          class: '',
          options: [
            {
              category: 'art'
            }
          ]
        },
        {
          id: 3,
          title: 'Music',
          class: '',
          options: [
            {
              category: 'music'
            }
          ]
        },
        {
          id: 4,
          title: 'Collectibles',
          class: '',
          options: [
            {
              category: 'collectibles'
            }
          ]
        },
      ],
      selectedTab: null,
      previous_active_id: 1
    }
  },
  methods: {
    setTab(tab, id) {
      this.selectedTab = tab;
      if (this.previous_active_id === id) return;
      this.filterMenu.find(menu => menu.id === this.previous_active_id).class = '';
      this.filterMenu.find(menu => menu.id === id).class = 'active';
      this.previous_active_id = id;
    },
  },
  computed: {
    filteredData() {
      return this.SectionData.productData.products.filter(data => {
        if (this.selectedTab === null) return true
        const opts = this.selectedTab.options.map(opt => opt.category)
        return opts.includes(data.category)
      })
    },
  }

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

.author-link {
  z-index: 2;
  position: relative;
}</style>
