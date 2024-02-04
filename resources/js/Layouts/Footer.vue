<template>
    <footer class="footer-section" :class="classname">
        <!-- footer section -->
        <FooterSection></FooterSection>
    </footer><!-- end footer-section -->
</template>

<script>
import FooterSection from './FooterSection.vue';

export default {
    name: 'Footer',
    props: ['classname'],
    components: { FooterSection }
}
</script>
