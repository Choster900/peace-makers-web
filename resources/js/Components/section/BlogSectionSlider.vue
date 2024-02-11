<template>
  <swiper :modules="modules" :slides-per-view="3" :breakpoints="{
    0: {
      slidesPerView: 1
    },
    767: {
      slidesPerView: 2
    },
    992: {
      slidesPerView: 3
    }
  }" :pagination="{ clickable: true }">
    <swiper-slide v-for="item in SectionData.blogData.blogList" :key="item.id">
      <div class="card card-full card-blog">
        <router-link :to="item.btnLink" class="d-block card-image">
          <img :src="item.img" class="card-img-top" alt="">
          <div class="bg-dark-transparent card-overlay">
            <div class="d-flex align-items-center card-author">
              <div class="flex-shrink-0 avatar avatar-2">
                <img :src="item.avatar" alt="" class="rounded-circle">
              </div>
              <div class="flex-grow-1 ms-2 text-white">
                <span>{{ item.userName }}</span>
              </div>
            </div>
          </div>
        </router-link>
        <div class="card-body card-body-s1">
          <h4 class="card-title mb-3"><router-link :to="item.btnLink">{{ item.title }}</router-link></h4>
          <p class="card-text">{{ item.desc }}</p>
        </div><!-- end card-body -->
        <hr class="my-0">
        <div class="card-body card-body-s1 py-3">
          <div class="card-action-info">
            <span><em class="ni ni-calender-date me-1"></em>{{ item.date }}</span>
            <span>
              <span class="me-3"><em class="ni ni-comments me-1"></em>{{ item.numberText }}</span>
              <span><em class="ni ni-heart me-1"></em>{{ item.numberTextTwo }}</span>
            </span>
          </div><!-- end card-action-info -->
        </div><!-- end card-body -->
        <router-link class="details" :to="{
          name: 'NewsDetail',
          params: {
            id: item.id,
            title: item.title,
            img: item.img,
            avatar: item.avatar,
            userName: item.userName,
          }
        }">
        </router-link>
      </div><!-- end card -->
    </swiper-slide>
    <!-- pagination -->
  </swiper>
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
  name: 'BlogSectionSlider',
  components: {
    Swiper,
    SwiperSlide,
  },
  data() {
    return {
      SectionData: {
        // blog data
        blogData: {
          title: 'Check Out Our News',
          titleTwo: 'You might have read about us in the news',
          content: 'This is just a simple text made for this unique and awesome template, you can replace it with any text. It is a long established fact.',
          btnText: 'View all articles',
          btnLink: 'blog',
          blogList: [
            {
              id: 1,
              title: "Enter Linda Dounia's Cyber Baat World",
              userName: 'Alex Smith',
              desc: 'Predictions for how secondary NFT sales will revolutionize industries.',
              date: '25 Apr 2022',
              numberText: '25',
              numberTextTwo: '38',
              btnLink: '/blog-detail'
            },
            {
              id: 2,
              title: 'Artist Invite: Yung Jake and Lucien Smith',
              userName: 'Kevin Martin',
              desc: 'Art world friends and confidants share their thoughts on championing',
              date: '10 May 2022',
              numberText: '25',
              numberTextTwo: '38',
              btnLink: '/blog-detail'
            },
            {
              id: 3,
              title: 'Visual storytelling with Alejandro Cartagena.',
              userName: 'Kamran Ahmed',
              desc: 'A photo-based interview with one of the leading photographers in NFTs.',
              date: '12 May 2022',
              numberText: '25',
              numberTextTwo: '38',
              btnLink: '/blog-detail'
            },
            {
              id: 4,
              title: 'Announcing Our $100m Raise, Led By A1Studio',
              userName: 'Alex Smith',
              desc: 'Predictions for how secondary NFT sales will revolutionize industries.',
              date: '12 May 2022',
              numberText: '25',
              numberTextTwo: '38',
              btnLink: '/blog-detail'
            },
          ],
          blogListTwo: [
            {
              id: 1,
              title: "Enter Linda Dounia's Cyber Baat World",
              userName: 'Alex Smith',
              desc: 'Predictions for how secondary NFT sales will revolutionize industries.',
              date: '25 Apr 2022',
              numberText: '25',
              numberTextTwo: '38',
              btnLink: '/blog-detail'
            },
            {
              id: 2,
              title: 'Artist Invite: Yung Jake and Lucien Smith',
              userName: 'Kevin Martin',
              desc: 'Art world friends and confidants share their thoughts on championing',
              date: '10 May 2022',
              numberText: '25',
              numberTextTwo: '38',
              btnLink: '/blog-detail'
            },
            {
              id: 3,
              title: 'Visual storytelling with Alejandro Cartagena.',
              userName: 'Kamran Ahmed',
              desc: 'You want to succeed, surround yourself with the right kind of people.',
              date: '12 May 2022',
              numberText: '25',
              numberTextTwo: '38',
              btnLink: '/blog-detail'
            },
            {
              id: 4,
              title: 'Announcing Our $100m Raise, Led By A1Studio',
              userName: 'Alex Smith',
              desc: 'Predictions for how secondary NFT sales will revolutionize industries.',
              date: '12 May 2022',
              numberText: '25',
              numberTextTwo: '38',
              btnLink: '/blog-detail'
            },
            {
              id: 5,
              title: 'The Biggest Drop In Times Square Since New Year',
              userName: 'Kevin Martin',
              desc: 'Art world friends and confidants share their thoughts on championing',
              date: '12 May 2022',
              numberText: '25',
              numberTextTwo: '38',
              btnLink: '/blog-detail'
            },
            {
              id: 6,
              title: 'Daz 3d, The Digitals And Ground breaking',
              userName: 'David Martin',
              desc: 'You want to succeed, surround yourself with the right kind of people.',
              date: '12 May 2022',
              numberText: '25',
              numberTextTwo: '38',
              btnLink: '/blog-detail'
            }
          ],
          blogListThree: [
            {
              id: 1,
              title: "Enter Linda Dounia's Cyber Baat World",
              userName: 'Alex Smith',
              desc: 'Predictions for how secondary NFT sales will revolutionize industries.',
              date: '25 Apr 2022',
              numberText: '25',
              numberTextTwo: '38',
            },
            {
              id: 2,
              title: 'Artist Invite: Yung Jake and Lucien Smith',
              userName: 'Kevin Martin',
              desc: 'Art world friends and confidants share their thoughts on championing',
              date: '10 May 2022',
              numberText: '26',
              numberTextTwo: '39',
            },
            {
              id: 3,
              title: 'Visual storytelling with Alejandro Cartagena.',
              userName: 'Kamran Ahmed',
              desc: 'You want to succeed, surround yourself with the right kind of people.',
              date: '12 May 2022',
              numberText: '27',
              numberTextTwo: '12',
            },
            {
              id: 4,
              title: 'Announcing Our $100m Raise, Led By A1Studio',
              userName: 'Alex Smith',
              desc: 'Predictions for how secondary NFT sales will revolutionize industries.',
              date: '14 May 2022',
              numberText: '13',
              numberTextTwo: '23',
            },
            {
              id: 5,
              title: 'The Biggest Drop In Times Square Since New Year',
              userName: 'Kevin Martin',
              desc: 'Art world friends and confidants share their thoughts on championing',
              date: '16 May 2022',
              numberText: '14',
              numberTextTwo: '14',
            },
            {
              id: 6,
              title: 'Daz 3d, The Digitals And Ground breaking',
              userName: 'David Martin',
              desc: 'Nora Khan gets experimental with artists.',
              date: '19 May 2022',
              numberText: '11',
              numberTextTwo: '23',
            },
            {
              id: 7,
              title: 'Daz 3d, The Digitals And Ground breaking',
              userName: 'Kamran Ahmed',
              desc: 'Sarah Meyohas on bringing femininity into crypto.',
              date: '20 May 2022',
              numberText: '12',
              numberTextTwo: '34',
            },
            {
              id: 8,
              title: 'The Digitals And Ground breaking',
              userName: 'Smith Martin',
              desc: 'David Horvitz on a baby born in the back of an Uber.',
              date: '21 May 2022',
              numberText: '34',
              numberTextTwo: '12',
            },
            {
              id: 9,
              title: 'Brian Calvin on his imaginary portraits.',
              userName: 'Alex Smith',
              desc: 'Visual storytelling with Alejandro Cartagena.',
              date: '22 May 2022',
              numberText: '22',
              numberTextTwo: '39',
            },
            {
              id: 10,
              title: 'Everything you need to know about DAOs.',
              userName: 'David Martin',
              desc: 'Tyler Givens on making fantasies a reality.',
              date: '23 May 2022',
              numberText: '27',
              numberTextTwo: '36',
            },
            {
              id: 11,
              title: 'Exonemo on communicating love and hate for NFTs. ',
              userName: 'Alex Martin',
              desc: 'Auriea Harvey Splits with bitforms gallery.',
              date: '24 May 2022',
              numberText: '25',
              numberTextTwo: '34',
            },
            {
              id: 12,
              title: 'Miya Folick on becoming very good at living.',
              userName: 'David Martin',
              desc: 'Auriea Harvey Splits with bitforms gallery.',
              date: '25 May 2022',
              numberText: '22',
              numberTextTwo: '31',
            },
            {
              id: 13,
              title: 'Reuben Wu is photographing the future. ',
              userName: 'David Martin',
              desc: 'Idil Dursun is constructing new worlds.',
              date: '26 May 2022',
              numberText: '23',
              numberTextTwo: '34',
            },
            {
              id: 14,
              title: 'Jon Rafman on standing in an open field.',
              userName: 'Alex David',
              desc: 'Artist Invite: Archan Nair & Iannocent',
              date: '27 May 2022',
              numberText: '22',
              numberTextTwo: '18',
            },
            {
              id: 15,
              title: 'Daylen Seu on tapping into dreams and nightmares. ',
              userName: 'David Martin',
              desc: 'Paper Rad on setting the precedent for Internet culture.',
              date: '28 May 2022',
              numberText: '23',
              numberTextTwo: '38',
            },
            {
              id: 16,
              title: 'The Digitals And Ground breaking Daz 3d',
              userName: 'Kamran Ahamed',
              desc: 'Chris Torres on building the Meme Economy.',
              date: '29 May 2022',
              numberText: '25',
              numberTextTwo: '34',
            },
            {
              id: 17,
              title: 'Artist Invite: Yung Jake and Lucien Smith',
              userName: 'David Martin',
              desc: 'Chris Torres on building the Meme Economy.',
              date: '30 May 2022',
              numberText: '27',
              numberTextTwo: '12',
            },
            {
              id: 18,
              title: 'Enter Linda Dounias Cyber Baat World',
              userName: 'Alex Smith',
              desc: 'Diana Sinclair on curating The Digital Diaspora.',
              date: '12 Jun 2022',
              numberText: '28',
              numberTextTwo: '41',
            },
          ]
        },
      }
    }
  },
  setup() {
    return {
      modules: [Pagination]
    }
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
</style>