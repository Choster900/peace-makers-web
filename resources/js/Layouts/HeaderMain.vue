<template>
    <div class="header-main is-sticky" :class="isTransparent">
        <div class="container">
            <div class="header-wrap">
                <!-- logo -->
                <Logo></Logo>
                <!-- mobile action -->
                <MobileActionVue></MobileActionVue>
                <!-- heder search -->
                <HeaderSearch></HeaderSearch>
                <!-- Menu -->
                <Menu classname="btn-dark"></Menu>
                <div class="header-overlay"></div>
            </div><!-- .header-warp-->
        </div><!-- .container-->
    </div><!-- .header-main-->
</template>
<script>
import HeaderSearch from './HeaderSearch.vue';
import Logo from './Logo.vue';
import Menu from './Menu.vue';
import MobileActionVue from './MobileAction.vue';

export default {
    name: 'HeaderMain',
    props: ['isTransparent'],
    components: {
        Logo,
        HeaderSearch,
        Menu,
        MobileActionVue,
    }
}
</script>
