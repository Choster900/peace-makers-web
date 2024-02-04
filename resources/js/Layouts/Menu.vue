<template>
    <nav class="header-menu menu nav">
        <!-- menu list -->
        <MenuList></MenuList>
        <!-- header btn -->
        <ul class="flex flex-col  md:flex-row gap-2 md:gap-4">
            <li>
                <DropdownLink class="btn btn-dark text-white">Donations</DropdownLink>
            </li>
            <li>
                <ThemeSwither></ThemeSwither>
            </li>
        </ul>

    </nav><!-- .header-menu -->
</template>

<script>
import ThemeSwither from '@/Components/ThemeSwither.vue';
import MenuList from './MenuList.vue';
// Import component data. You can change the data in the store to reflect in all component
/*   import SectionData from '@/store/store.js' */

// @ is an alias to /src

export default {
    name: 'Menu',
    props: ['classname'],
    components: {
        MenuList,
        ThemeSwither,
    },
    data() {
        return {
            /*   SectionData */
        }
    }
}
</script>
