<template>
    <DropdownLink class="logo-link" :class="classname" href="/">
        <img class="logo-dark logo-img " src="../../images/wordmarkDark.png" alt="logo">
        <img class="logo-light logo-img" src="" alt="logo-white">
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
