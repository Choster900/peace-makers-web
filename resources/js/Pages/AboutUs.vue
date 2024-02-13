<template>
  <div class="page-wrap">
    <!-- header  -->
    <header class="header-section has-header-main">
      <!-- Header main -->
      <HeaderMain></HeaderMain>
    </header>
    <!-- About section  -->
    <AboutSection class="pt-5 mt-3" :img="SectionData.aboutData.img" isClassThree="col-sm-9 ps-xl-5" isRound="ps-xl-4"
      isReverse="flex-lg-row-reverse" isClassTwo="pe-lg-5" :title="SectionData.aboutData.title"
      :content="SectionData.aboutData.content" :contenttwo="SectionData.aboutData.contentTwo"
      :contentthree="SectionData.aboutData.contentThree"></AboutSection>
    <!-- funFact  -->
    <FunFactSection classname="col-xl-2 col-sm-4 col-6" :items="SectionData.funfactData.funfactListTwo"></FunFactSection>
    <!-- About section  -->
    <AboutSection class="section-space-b" :img="SectionData.aboutDataTwo.img" isRound="rounded-3"
      :title="SectionData.aboutDataTwo.title" isClassTwo="ps-xl-5" :content="SectionData.aboutDataTwo.content"
      isClass="lead" :contenttwo="SectionData.aboutDataTwo.contentTwo"
      :contentthree="SectionData.aboutDataTwo.contentThree" :contentfour="SectionData.aboutDataTwo.contentFour">
    </AboutSection>
    <!-- Brand section  -->
    <BrandSection isBg="bg-gray"></BrandSection>
    <!-- Team section  -->
    <TeamSection></TeamSection>
    <!-- Blog  -->
    <section class="section-space-b blog-section">
      <div class="container">
        <!-- section heading -->
        <SectionHeading classname="text-center" :text="SectionData.blogData.titleTwo"
          :content="SectionData.blogData.content" isMargin="mb-3"></SectionHeading>
        <!-- blog section -->
        <BlogSectionSlider></BlogSectionSlider>
        <div class="text-center mt-5">
          <ButtonLink :text="SectionData.blogData.btnText" :link="SectionData.blogData.btnLink"
            classname="btn-link btn-link-s1"></ButtonLink>
        </div>
      </div><!-- .container -->
    </section><!-- end blog-section -->
    <!-- Cta  -->
    <Cta class="section-space-b bg-pattern" :title="SectionData.ctaDataTwo.title"
      :content="SectionData.ctaDataTwo.content" :btntext="SectionData.ctaDataTwo.btnText"
      :btnlink="SectionData.ctaDataTwo.btnLink"></Cta>
    <!-- Footer  -->
    <Footer classname="bg-dark on-dark"></Footer>
  </div><!-- end page-wrap -->
</template>

<script>
// Import component data. You can change the data in the store to reflect in all component
import HeaderMain from '@/Layouts/HeaderMain.vue';
import AboutSection from '@/Components/section/AboutSection.vue';
import FunFactSection from '@/Components/section/FunFactSection.vue';
import BrandSection from '@/Components/section/BrandSection.vue';
import TeamSection from '@/Components/section/TeamSection.vue';
import SectionHeading from '@/Components/common/SectionHeading.vue';
import BlogSectionSlider from '@/Components/section/BlogSectionSlider.vue';
import Cta from '@/Components/section/CtaSection.vue';
import Footer from '@/Layouts/Footer.vue';
import { ref } from 'vue';

export default {
  name: 'AboutUs',
  components: {
    HeaderMain,
    AboutSection,
    FunFactSection,
    BrandSection,
    SectionHeading,
    TeamSection,
    Cta,
    Footer
  },
  setup() {
    const SectionData = ref({
      //about hero data
      aboutData: {
        title: 'Building an open digital economy',
        content: "At EnftyMart, we're excited about a brand new type of digital good called a non-fungible token, or NFT. NFTs have exciting new properties: they’re unique, provably scarce, tradeable, and usable across multiple applications. Just like physical goods, you can do whatever you want with them! You could throw them in the trash, gift them to a friend a",
        contentTwo: "A core part of our vision is that open protocols like Ethereum and interoperable standards like ERC-721 and ERC-1155 will enable vibrant new economies. We're building tools that allow consumers to trade their assets freely",
        contentThree: 'We’re proud to be the first and largest marketplace for NFTs.'
      },
      //aboutDataTwo
      aboutDataTwo: {
        title: 'About the EnftyMart',
        content: 'EnftyMart was founded with a very simple mission - to make Enfties accessible to everyone',
        contentTwo: 'In 2017 the world witnessed the birth of CryptoKitties. For the first time, the world experienced a decentralized application built on blockchains but targetted towards a mainstream audience.',
        contentThree: 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, quasi consectetur. Et delectus minus saepe cumque qui harum! Aperiam, dolorem itaque!',
        contentFour: 'Today, <strong>we’re proud to remain the largest general marketplace for user-owned digital items</strong>, supporting multiple blockchains, with the broadest set of categories'
      },
      //funfactData
      funfactData: {
        funfactList: [
          {
            id: 1,
            title: 'Over 400+',
            subTitle: 'Total Members'
          },
          {
            id: 2,
            title: 'Over 40+',
            subTitle: 'Total Countries'
          },
          {
            id: 3,
            title: 'Over 1000+',
            subTitle: 'Total NFTs'
          }
        ],
        funfactListTwo: [
          {
            id: 1,
            title: '2015',
            subTitle: 'Founded'
          },
          {
            id: 2,
            title: '68',
            subTitle: 'Employees'
          },
          {
            id: 3,
            title: '400K+',
            subTitle: 'Users'
          },
          {
            id: 4,
            title: '1M',
            subTitle: 'Collections'
          },
          {
            id: 5,
            title: '24M+',
            subTitle: 'NFTs'
          },
          {
            id: 6,
            title: '$2B+',
            subTitle: 'Volume'
          }
        ]

      },
      //brandData
      brandData: {
        title: 'Backed by top firms & industry leaders',
        content: 'Who are helping us pave the way towards a brand new digital economy',
        brandList: [
          {
            id: 1,
            itemToShow: 'show'
          },
          {
            id: 2,
            itemToShow: 'show'
          },
          {
            id: 3,
            itemToShow: 'show'
          },
          {
            id: 4,
            itemToShow: 'show'
          },
          {
            id: 5,
          },
          {
            id: 6,
          },
          {
            id: 7,
          },
          {
            id: 8,
          },
          {
            id: 9,
          },
          {
            id: 10,
          },
          {
            id: 11,
          },
          {
            id: 12,
          }
        ]
      },
      //blog data
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
      //teamData
      teamData: {
        title: 'With some of the most forward-thinking angels',
        content: 'Who are just as passionate about this space as we are',
        teamList: [
          {
            id: 1,
            title: 'Jessica brown',
            meta: 'Co-founder of Scalar'
          },
          {
            id: 2,
            title: 'Tim Ferris',
            meta: 'Entrepreneur'
          },
          {
            id: 3,
            title: 'Belinda Johnson',
            meta: 'Attorney of Airbnb'
          },
          {
            id: 4,
            title: 'Justin Kan',
            meta: 'Co-founder of Twitch'
          },
          {
            id: 5,
            title: 'Alexis Ohanian',
            meta: 'Co-founder of Reddit'
          },
          {
            id: 6,
            title: 'Balaji Srinivisan',
            meta: 'Entrepreneur'
          }
        ]
      },
      //cta data
      ctaData: {
        title: 'Tyler Givens on making  fantasies a reality',
        content: 'I must explain to you how all this mistaken idea of the denouncing and praising pain was born and I will give you complete.',
        btnText: 'Explore EnftyMart',
        btnLink: 'explore'
      },
      //cta datatTwo
      ctaDataTwo: {
        title: 'Interested in joining us?',
        content: 'Hop aboard and view our open positions',
        btnText: 'See open roles',
        btnLink: 'contact'
      },
    })

    return {
      SectionData
    }
  }
}
</script>
