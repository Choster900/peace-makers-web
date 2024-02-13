<template>
  <section class="about-section">
    <div class="container">
      <div class="row align-items-center flex" :class="isReverse">
        <div class="col-lg-6 mb-5 mb-lg-0" :class="isClassThree">
          <img src="../../../images/thumb/nft-img-2.png" alt="" class="w-100" :class="isRound">
        </div><!-- end col-lg-6 -->
        <div class="col-lg-6" :class="isClassTwo">
          <div class="about-content-wrap">
            <h2 class="mb-3">{{ title }}</h2>
            <p :class="isClass">{{ content }}</p>
            <p>{{ contenttwo }}</p>
            <p>{{ contentthree }}</p>
            <p v-html="contentfour"></p>
          </div>
        </div><!-- end col-lg-6 -->
      </div><!-- end row -->
    </div><!-- end container -->
  </section><!-- end about-section -->
</template>

<script>
// Import component data. You can change the data in the store to reflect in all component

export default {
  name: 'AboutSection',
  props: ['img', 'title', 'content', 'contenttwo', 'contentthree', 'contentfour', 'isRound', 'isClass', 'isClassTwo', 'isClassThree', 'isReverse'],
  data() {
    return {
      SectionData: {
        // about hero data
        aboutData: {
          title: 'Building an open digital economy',
          content: "At EnftyMart, we're excited about a brand new type of digital good called a non-fungible token, or NFT. NFTs have exciting new properties: they’re unique, provably scarce, tradeable, and usable across multiple applications. Just like physical goods, you can do whatever you want with them! You could throw them in the trash, gift them to a friend a",
          contentTwo: "A core part of our vision is that open protocols like Ethereum and interoperable standards like ERC-721 and ERC-1155 will enable vibrant new economies. We're building tools that allow consumers to trade their assets freely",
          contentThree: 'We’re proud to be the first and largest marketplace for NFTs.'
        },
        aboutDataTwo: {
          title: 'About the EnftyMart',
          content: 'EnftyMart was founded with a very simple mission - to make Enfties accessible to everyone',
          contentTwo: 'In 2017 the world witnessed the birth of CryptoKitties. For the first time, the world experienced a decentralized application built on blockchains but targetted towards a mainstream audience.',
          contentThree: 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, quasi consectetur. Et delectus minus saepe cumque qui harum! Aperiam, dolorem itaque!',
          contentFour: 'Today, <strong>we’re proud to remain the largest general marketplace for user-owned digital items</strong>, supporting multiple blockchains, with the broadest set of categories'
        },
      }
    }
  }
}
</script>
