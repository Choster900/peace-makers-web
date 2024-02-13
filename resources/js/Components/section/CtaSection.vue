<template>
  <div class="cta-box text-center">
    <h1 class="cta-title mb-4">{{ title }}</h1>
    <p class="cta-text mb-4">{{ content }}</p>
    <ButtonLink :text="btntext" :link="btnLink" class="btn btn-lg btn-primary"></ButtonLink>
  </div><!-- end explore-box -->
</template>

<script>
// Import component data. You can change the data in the store to reflect in all component

export default {
  name: 'CtaSection',
  props: ['title', 'content', 'btntext'],
  data() {
    return {
      SectionData: {
        // cta data
        ctaData: {
          title: 'Tyler Givens on making  fantasies a reality',
          content: 'I must explain to you how all this mistaken idea of the denouncing and praising pain was born and I will give you complete.',
          btnText: 'Explore EnftyMart',
          btnLink: 'explore'
        },
        ctaDataTwo: {
          title: 'Interested in joining us?',
          content: 'Hop aboard and view our open positions',
          btnText: 'See open roles',
          btnLink: 'contact'
        },
      }
    }
  }
}
</script>
