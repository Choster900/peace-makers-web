<template>
    <ul class="btns-group" :class="classname">
        <li v-for="(btn, i) in btns" :key="i">
            <button class="btn" :class="btn.btnClass">
                {{ btn.title }}
                <span class="d-none d-xl-inline-block" v-if="istext">{{ btn.titleTwo }}</span>
            </button>
        </li>
    </ul>
</template>

<script>
import DropdownLink from '@/Components/DropdownLink.vue';
export default {
    components: { DropdownLink },
    name: 'ButtonGroup',
    props: ['btns', 'istext', 'classname']
}
</script>
