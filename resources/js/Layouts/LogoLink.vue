<template>
    <DropdownLink class="logo-link" :class="classname">
        <img class="logo-dark logo-img" src="../../images/logo-black.png" alt="logo">
        <img class="logo-light logo-img" src="../../images/logo-white.png" alt="logo">
    </DropdownLink>
</template>
<script>
import DropdownLink from '@/Components/DropdownLink.vue';
export default {
    name: 'LogoLink',
    props: ['classname'],
    components: { DropdownLink }
}
</script>
